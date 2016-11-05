/* This Source Code Form is subject to the terms of the Mozilla Public
 * License, v. 2.0. If a copy of the MPL was not distributed with this
 * file, You can obtain one at http://mozilla.org/MPL/2.0/. */

/**
 * Initialize the Attachment Model that represents a downloaded or unuploaded bug attachment. Available through the
 * AttachmentCollection.
 * @extends BzDeck.BaseModel
 * @todo Move this to the worker thread.
 * @see {@link http://bugzilla.readthedocs.org/en/latest/api/core/v1/attachment.html}
 */
BzDeck.AttachmentModel = class AttachmentModel extends BzDeck.BaseModel {
  /**
   * Get an AttachmentModel instance.
   * @constructor
   * @param {Object} data - Bugzilla's raw attachment object or unuploaded attachment object.
   * @returns {Proxy} attachment - Proxified AttachmentModel instance, so consumers can seamlessly access attachment
   *  properties via attachment.prop instead of attachment.data.prop.
   */
  constructor (data) {
    super(data.id || data.hash); // Assign this.id; use the hash for unuploaded attachments

    this.data = data;

    return this.proxy();
  }

  /**
   * Retrieve the attachment from Bugzilla.
   * @param {undefined}
   * @returns {Promise.<Proxy>} attachment - Promise to be resolved in the AttachmentModel instance.
   * @see {@link http://bugzilla.readthedocs.org/en/latest/api/core/v1/attachment.html#get-attachment}
   */
  async fetch () {
    const result = await BzDeck.host.request(`bug/attachment/${this.id}`);

    this.data = result.attachments[this.id];

    return this.proxy();
  }

  /**
   * Get the attachment raw file data only. If it's not in the cache, retrieve the data from Bugzilla and save it in the
   * local database.
   * @param {undefined}
   * @returns {Promise.<Object>} data - Promise to be resolved in an object containing the Blob and plaintext data, and
   *  this AttachmentModel.
   */
  async get_data () {
    const decode = () => new Promise(resolve => {
      const worker = new SharedWorker('/static/scripts/workers/tasks.js');

      worker.port.addEventListener('message', ({ data: { binary, blob }} = {}) => {
        const text = (this.is_patch || this.content_type.startsWith('text/')) ? binary : undefined;

        resolve({ blob, text, attachment: this });
      });

      worker.port.start();
      worker.port.postMessage(['decode', { str: this.data.data, type: this.content_type }]);
    });

    if (this.data.data) {
      return decode();
    }

    try {
      const result = await BzDeck.host.request(`bug/attachment/${this.id}`, new URLSearchParams('include_fields=data'));
      const attachment = result.attachments[this.id];
      const data = attachment && attachment.data ? attachment.data : undefined;

      if (!data) {
        throw new Error();
      }

      this.data.data = data;
      BzDeck.collections.attachments.set(this.id, this.data);
      this.save();

      return decode();
    } catch (error) {
      throw new Error(`The attachment ${this.id} could not be retrieved from Bugzilla.`);
    }
  }

  /**
   * Save this attachment as part of the relevant bug.
   * @override
   * @param {undefined}
   * @returns {Promise.<Proxy>} item - Promise to be resolved in the proxified AttachmentModel instance.
   */
  async save () {
    const bug = await BzDeck.collections.bugs.get(this.data.bug_id);

    if (bug && bug.attachments && bug.attachments.length) {
      for (const [index, att] of bug.attachments.entries()) if (att.id === this.id && !att.data) {
        bug.attachments[index].data = this.data.data;
      }

      bug.save(bug.data);
    }

    return this.proxy();
  }
}
