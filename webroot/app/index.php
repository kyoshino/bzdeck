<?php include_once($_SERVER['DOCUMENT_ROOT'] . '/components/output-link-elements.inc.php'); ?>
<?php output_link_headers(); ?>
<!DOCTYPE html>
<!-- This Source Code Form is subject to the terms of the Mozilla Public
   - License, v. 2.0. If a copy of the MPL was not distributed with this
   - file, You can obtain one at http://mozilla.org/MPL/2.0/. -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=false">
    <meta name="application-name" content="BzDeck">
    <meta name="description" content="A useful, experimental Bugzilla client demonstrating modern Web application technologies such as CSS3, DOM4, HTML5, ECMAScript 6 and WAI-ARIA.">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="BzDeck">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="https://www.bzdeck.com/">
    <meta property="og:image" content="https://www.bzdeck.com/static/images/logo/icon-512.png">
    <meta property="og:title" content="BzDeck">
    <meta property="og:description" content="A useful, experimental Bugzilla client demonstrating modern Web application technologies such as CSS3, DOM4, HTML5, ECMAScript 6 and WAI-ARIA.">
    <meta property="fb:admins" content="100003919776216">
    <meta property="fb:page_id" content="240285432763840">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@BzDeck">
    <meta name="twitter:domain" content="BzDeck.com">
    <meta name="twitter:url" content="https://www.bzdeck.com/">
    <meta name="msapplication-TileColor" content="#444444">
    <meta name="msapplication-TileImage" content="/static/images/logo/tile.png">
    <link rel="canonical" href="https://www.bzdeck.com/">
    <link rel="publisher" href="https://plus.google.com/+BzDeck">
<?php output_link_elements('css') ?>
    <link rel="stylesheet" type="text/css" media="screen" href="/static/styles/themes/light.css" title="Light">
    <link rel="alternate stylesheet" type="text/css" media="screen" href="/static/styles/themes/dark.css" title="Dark">
    <title>BzDeck</title>
    <template id="tabpanel-search-template">
      <div id="tabpanel-search-TID" tabindex="0" role="tabpanel" aria-labelledby="tab-search-TID">
        <section>
          <header>
            <h2>Search &amp; Browse Bugs</h2>
          </header>
          <div>
            <div id="search-TID-basic-search-pane" role="search">
              <div class="browse-box">
                <section id="search-TID-browse-classification">
                  <h3>Classification</h3>
                  <div id="search-TID-browse-classification-list-outer">
                    <menu id="search-TID-browse-classification-list" type="list" tabindex="0" role="listbox" aria-multiselectable="true"></menu>
                  </div>
                </section>
                <section id="search-TID-browse-product">
                  <h3>Product</h3>
                  <div id="search-TID-browse-product-list-outer">
                    <menu id="search-TID-browse-product-list" type="list" tabindex="0" role="listbox" aria-multiselectable="true"></menu>
                  </div>
                </section>
                <section id="search-TID-browse-component">
                  <h3>Component</h3>
                  <div id="search-TID-browse-component-list-outer">
                    <menu id="search-TID-browse-component-list" type="list" tabindex="0" role="listbox" aria-multiselectable="true"></menu>
                  </div>
                </section>
                <section id="search-TID-browse-status">
                  <h3>Status</h3>
                  <div id="search-TID-browse-status-list-outer">
                    <menu id="search-TID-browse-status-list" type="list" tabindex="0" role="listbox" aria-multiselectable="true"></menu>
                  </div>
                </section>
                <section id="search-TID-browse-resolution">
                  <h3>Resolution</h3>
                  <div id="search-TID-browse-resolution-list-outer">
                    <menu id="search-TID-browse-resolution-list" type="list" tabindex="0" role="listbox" aria-multiselectable="true"></menu>
                  </div>
                </section>
              </div><!-- end .browse-box -->
              <div class="text-box">
                <section>
                  <h3>Search Terms</h3>
                  <dl>
                    <dt>Summary</dt>
                    <dd><input type="search" role="searchbox"></dd>
                    <dd><span role="button" tabindex="0">Search</span></dd>
                  </dl>
                </section>
              </div><!-- end .text-box -->
            </div><!-- end #search-TID-basic-search-pane -->
            <div id="search-TID-result-pane">
              <section id="search-TID-result" class="bug-list" role="grid" aria-multiselectable="true" aria-readonly="true" data-selection="rows"></section>
              <div role="status" aria-hidden="true"><span></span></div>
            </div><!-- end #search-TID-result-pane -->
            <div id="search-TID-preview-pane" aria-hidden="true"></div>
            <div id="search-TID-advanced-search-pane" aria-hidden="true"></div>
          </div>
        </section>
      </div><!-- end #tabpanel-search-TID -->
    </template><!-- end #tabpanel-search-template -->
    <template id="tabpanel-details-template">
      <div id="tabpanel-details-TID" class="bug-container" tabindex="0" role="tabpanel" aria-labelledby="tab-details-TID">
      </div><!-- end #tabpanel-details-TID -->
    </template><!-- end #tabpanel-details-template -->
    <template id="tabpanel-attachment-template">
      <div id="tabpanel-attachment-TID" tabindex="0" role="tabpanel" aria-labelledby="tab-attachment-TID">
        <article id="attachment-TID" role="article">
          <header>
            <h2>Attachment <span itemprop="id"></span></h2>
          </header>
          <div class="scrollable"></div>
        </article>
      </div><!-- end #tabpanel-attachment-TID -->
    </template><!-- end #tabpanel-attachment-template -->
    <template id="tabpanel-settings-template">
      <div id="tabpanel-settings" tabindex="0" role="tabpanel" aria-labelledby="tab-settings">
        <section>
          <header>
            <h2>Settings</h2>
          </header>
          <div>
            <ul id="settings-tablist" tabindex="0" role="tablist" aria-level="2" aria-orientation="vertical" data-removable="false" data-reorderable="false">
              <li id="settings-tab-account" role="tab" aria-controls="settings-tabpanel-account" aria-selected="true">
                <span class="icon" aria-hidden="true"></span>
                <label>Account</label>
              </li>
              <li id="settings-tab-design" role="tab" aria-controls="settings-tabpanel-design" aria-selected="false">
                <span class="icon" aria-hidden="true"></span>
                <label>Design</label>
              </li>
              <li id="settings-tab-datetime" role="tab" aria-controls="settings-tabpanel-datetime" aria-selected="false">
                <span class="icon" aria-hidden="true"></span>
                <label>Date &amp; Time</label>
              </li>
              <li id="settings-tab-notifications" role="tab" aria-controls="settings-tabpanel-notifications" aria-selected="false">
                <span class="icon" aria-hidden="true"></span>
                <label>Notifications</label>
              </li>
              <li id="settings-tab-timeline" role="tab" aria-controls="settings-tabpanel-timeline" aria-selected="false">
                <span class="icon" aria-hidden="true"></span>
                <label>Timeline</label>
              </li>
              <li id="settings-tab-editing" role="tab" aria-controls="settings-tabpanel-editing" aria-selected="false">
                <span class="icon" aria-hidden="true"></span>
                <label>Editing</label>
              </li>
            </ul><!-- end #settings-tablist -->
            <div id="settings-tabpanel-account" tabindex="0" role="tabpanel" aria-hidden="false" aria-labelledby="settings-tab-account">
              <section>
                <h3>Account</h3>
                <section id="settings-qrcode-outer">
                  <h4>BzDeck on mobile</h4>
                  <p>Did you know BzDeck works on Android? Open the app with Firefox on your phone or tablet, then scan this QR code to sign in quickly:<br>
                    <span role="button" tabindex="0">Show QR Code</span>
                  </p>
                  <div class="placeholder" hidden></div>
                </section>
              </section>
            </div><!-- end #settings-tabpanel-account -->
            <div id="settings-tabpanel-design" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="settings-tab-design">
              <section>
                <h3>Design</h3>
                <section>
                  <h4>Theme</h4>
                  <ul role="radiogroup" data-pref="ui.theme.selected">
                    <li role="none"><span role="radio" data-value="Light">Light</span></li>
                    <li role="none"><span role="radio" data-value="Dark">Dark</span></li>
                  </ul>
                </section>
                <section data-platform="desktop">
                  <h4>Desktop Layout</h4>
                  <ul role="radiogroup" data-pref="ui.home.layout">
                    <li role="none"><span role="radio" data-value="vertical">Vertical View</span></li>
                    <li role="none"><span role="radio" data-value="classic">Classic View</span></li>
                  </ul>
                </section>
              </section>
            </div><!-- end #settings-tabpanel-design -->
            <div id="settings-tabpanel-datetime" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="settings-tab-datetime">
              <section>
                <h3>Date &amp; Time</h3>
                <section>
                  <h4>Timezone</h4>
                  <ul role="radiogroup" data-pref="ui.date.timezone">
                    <li role="none"><span role="radio" data-value="local" id="pref-timezone-local">Your local timezone</span></li>
                    <li role="none"><span role="radio" data-value="UTC" id="pref-timezone-host">Bugzilla default</span></li>
                    <li role="none"><span role="radio" data-value="UTC">UTC</span></li>
                  </ul>
                </section>
                <section>
                  <h4>Date Format</h4>
                  <ul role="none">
                    <li role="none"><span role="checkbox" data-pref="ui.date.relative">Use relative dates by default</span></li>
                  </ul>
                </section>
              </section>
            </div><!-- end #settings-tabpanel-datetime -->
            <div id="settings-tabpanel-notifications" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="settings-tab-notifications">
              <section>
                <h3>Notifications</h3>
                <section>
                  <h4>General</h4>
                  <ul role="none">
                    <li role="none"><span role="checkbox" data-pref="notifications.show_desktop_notifications">Show desktop notifications if possible</span></li>
                    <li role="none"><span role="checkbox" data-pref="notifications.ignore_cc_changes">Ignore CC changes</span></li>
                  </ul>
                </section>
              </section>
            </div><!-- end #settings-tabpanel-notifications -->
            <div id="settings-tabpanel-timeline" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="settings-tab-timeline">
              <section>
                <h3>Timeline</h3>
                <section>
                  <h4>Sort Order</h4>
                  <ul role="radiogroup" data-pref="ui.timeline.sort.order">
                    <li role="none"><span role="radio" data-value="ascending">Ascending (old to new)</span></li>
                    <li role="none"><span role="radio" data-value="descending">Descending (new to old)</span></li>
                  </ul>
                </section>
                <section>
                  <h4>Font Family</h4>
                  <ul role="radiogroup" data-pref="ui.timeline.font.family">
                    <li role="none"><span role="radio" data-value="proportional">Proportional</span></li>
                    <li role="none"><span role="radio" data-value="monospace">Monospace</span></li>
                  </ul>
                </section>
                <section>
                  <h4>CC Changes</h4>
                  <ul role="none">
                    <li role="none"><span role="checkbox" data-pref="ui.timeline.show_cc_changes">Show CC changes</span></li>
                  </ul>
                </section>
                <section>
                  <h4>Show Media Attachments</h4>
                  <ul role="radiogroup" data-pref="ui.timeline.show_attachments">
                    <li role="none"><span role="radio" data-value="2">Always</span></li>
                    <li role="none"><span role="radio" data-value="1">Only over Wi-Fi</span></li>
                    <li role="none"><span role="radio" data-value="0">Never</span></li>
                  </ul>
                </section>
              </section>
            </div><!-- end #settings-tabpanel-timeline -->
            <div id="settings-tabpanel-editing" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="settings-tab-editing">
              <section>
                <h3>Editing</h3>
                <section>
                  <h4>Navigation</h4>
                  <ul>
                    <li role="none"><span role="checkbox" data-pref="editing.move_next_once_submitted">Move to the next bug after saving changes</span></li>
                  </ul>
                </section>
              </section>
            </div><!-- end #settings-tabpanel-editing -->
          </div>
          <footer>
          </footer>
        </section>
      </div><!-- end #tabpanel-settings -->
    </template><!-- end #tabpanel-settings-template -->
    <template id="tabpanel-profile-template">
      <div id="tabpanel-profile" tabindex="0" role="tabpanel" aria-labelledby="tab-profile">
        <section>
          <header>
            <h2>Profile</h2>
          </header>
          <div>
            <article id="profile-TID" role="article" itemscope itemtype="http://bzdeck.com/User">
              <header>
                <div>
                  <img alt="" itemprop="image">
                  <h3 itemprop="name"></h3>
                </div>
              </header>
              <dl>
                <dt>ID</dt>
                <dd><span itemprop="id"></span></dd>
                <dt>Email</dt>
                <dd><a itemprop="emailLink"><span itemprop="email"></span></a></dd>
              </dl>
              <ul>
                <li data-id="bugzilla-profile"><a href="">User Profile on Bugzilla</a></li>
                <li data-id="bugzilla-activity"><a href="">User Activity on Bugzilla</a></li>
                <li data-id="gravatar-avatar"><a href="https://en.gravatar.com/emails/">Change your avatar image</a></li>
                <li data-id="gravatar-background"><a href="https://en.gravatar.com/profiles/edit/#custom-background">Change your background image</a></li>
              </ul>
              <p>This User Profile panel is under development. More information will be added in the future.</p>
            </article><!-- end #profile-TID -->
          </div>
          <footer>
            <div role="status"></div>
          </footer>
        </section>
      </div><!-- end #tabpanel-profile -->
    </template><!-- end #tabpanel-profile-template -->
    <template id="search-preview-bug-template">
      <article id="search-TID-preview-bug" role="article" aria-hidden="true" itemscope itemtype="http://bzdeck.com/Bug">
        <header>
          <h3>Bug <span itemprop="id"></span></h3>
          <div role="toolbar">
            <div role="group">
              <span role="button" class="iconic" aria-label="Star this bug" aria-pressed="false" data-command="star" data-field="starred" data-icon="&#xF006;"></span>
              <span role="button" class="iconic" aria-label="Menu" aria-pressed="false" aria-haspopup="true" aria-owns="search-TID-preview-bug-menu" data-command="show-menu" data-icon="&#xF142;"></span>
            </div>
            <div role="group">
              <span role="button" class="iconic" aria-label="Show the query pane to search again" data-command="show-basic-search-pane" data-icon="&#xF002;"></span>
            </div>
            <ul id="search-TID-preview-bug-menu" role="menu" aria-expanded="false">
              <li role="none">
                <a id="search-TID-preview-bug-menu-toggle-comments" role="menuitem"><label>Expand All Comments</label></a>
                <a id="search-TID-preview-bug-menu-toggle-cc" role="menuitem"><label>Show CC Changes</label></a>
              </li>
              <li role="separator"></li>
              <li role="none">
                <a id="search-TID-preview-bug-menu-copy-link" role="menuitem" data-command="copy-link"><label>Copy Link</label></a>
                <a id="search-TID-preview-bug-menu-open-bugzilla" role="menuitem" data-command="open-bugzilla"><label>Open in Bugzilla</label></a>
                <a id="search-TID-preview-bug-menu-tweet" role="menuitem" data-command="tweet"><label>Tweet</label></a>
              </li>
            </ul><!-- end #search-TID-preview-bug-menu -->
          </div><!-- end [role="toolbar"] -->
        </header>
        <div id="search-TID-preview-bug-timeline-wrapper" class="bug-timeline-wrapper">
          <div class="bug-timeline" tabindex="0" role="region" aria-live="true" aria-relevant="additions">
            <h3 class="bug-summary" itemprop="summary"></h3>
            <div role="feed" class="comments-wrapper"></div>
          </div>
        </div><!-- end #search-TID-preview-bug-timeline-wrapper -->
        <div class="att-drop-target" aria-dropeffect="none"><div><label>Drop text or files here to attach</label></div></div>
      </article><!-- end #search-TID-preview-bug -->
    </template><!-- end #search-preview-bug-template -->
    <template id="bug-details-template">
      <article id="bug-TID" role="form" itemscope itemtype="http://bzdeck.com/Bug">
        <header>
          <h2>Bug <span itemprop="id"></span></h2>
          <div role="toolbar">
            <div role="group" class="nav">
              <span role="button" class="iconic" aria-label="Show the previous bug" aria-disabled="true" data-command="nav-back" data-icon="&#xF053;"></span>
              <span role="button" class="iconic" aria-label="Show the next bug" aria-disabled="true" data-command="nav-forward" data-icon="&#xF054;"></span>
            </div>
            <div role="group">
              <span role="button" class="iconic" aria-label="Star this bug" aria-pressed="false" data-command="star" data-field="starred" data-icon="&#xF006;"></span>
              <span role="button" class="iconic" aria-label="Show the menu items for this bug" aria-pressed="false" aria-haspopup="true" aria-owns="bug-TID-menu" data-command="show-menu" data-icon="&#xF142;"></span>
            </div>
            <ul id="bug-TID-menu" role="menu" aria-expanded="false">
              <li role="none">
                <a id="bug-TID-preview-bug-menu-toggle-comments" role="menuitem"><label>Expand All Comments</label></a>
                <a id="bug-TID-preview-bug-menu-toggle-cc" role="menuitem"><label>Show CC Changes</label></a>
              </li>
              <li role="separator"></li>
              <li role="none">
                <a id="bug-TID-menu-open-bugzilla" role="menuitem" data-command="open-bugzilla"><label>Open in Bugzilla</label></a>
                <a id="bug-TID-menu-copy-link" role="menuitem" data-command="copy-link"><label>Copy Link</label></a>
                <a id="bug-TID-menu-tweet" role="menuitem" data-command="tweet"><label>Tweet</label></a>
              </li>
            </ul>
          </div><!-- end [role="toolbar"] -->
        </header>
        <div class="body">
          <ul id="bug-TID-tablist" tabindex="0" role="tablist" aria-level="2" data-removable="false" data-reorderable="false">
            <li id="bug-TID-tab-timeline" role="tab" aria-controls="bug-TID-tabpanel-timeline" aria-selected="true"><label>Timeline</label></li>
            <li id="bug-TID-tab-info" role="tab" aria-controls="bug-TID-tabpanel-info" aria-selected="false"><label>Info</label></li>
            <li id="bug-TID-tab-attachments" role="tab" aria-controls="bug-TID-tabpanel-attachments" aria-selected="false"><label>Attachments</label></li>
            <li id="bug-TID-tab-history" role="tab" aria-controls="bug-TID-tabpanel-history" aria-disabled="true" aria-selected="false"><label>History</label></li>
          </ul><!-- end #bug-TID-tablist -->
          <div id="bug-TID-tabpanels">
            <div id="bug-TID-tabpanel-timeline" tabindex="0" role="tabpanel" aria-hidden="false" aria-labelledby="bug-TID-tab-timeline">
              <div class="bug-timeline-wrapper">
                <div class="bug-timeline scrollable" tabindex="0" role="article" aria-live="true" aria-relevant="additions">
                  <section>
                    <header class="bug-summary">
                      <h3 itemprop="summary"></h3>
                    </header>
                    <div role="feed" class="comments-wrapper"></div>
                  </section>
                </div>
              </div>
            </div><!-- end #bug-TID-tabpanel-timeline -->
            <div id="bug-TID-tabpanel-info" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="bug-TID-tab-info">
              <div id="bug-TID-info" class="bug-info scrollable" tabindex="0" role="region">
                <div class="bug-fieldset-wrapper">
                  <div class="col">
                    <section role="group" class="bug-fieldset" aria-label="Status Fieldset" data-category="status">
                      <header>
                        <h3>Status</h3>
                      </header>
                      <section role="group" aria-label="Filed" data-field="creation_time">
                        <h4>Filed</h4>
                        <time itemprop="creation_time" data-relative="false"></time>
                      </section>
                      <section role="group" aria-label="Last Modified" data-field="last_change_time">
                        <h4>Modified</h4>
                        <time itemprop="last_change_time" data-relative="false"></time>
                      </section>
                      <section role="group" aria-label="Status" data-field="status">
                        <h4>Status</h4>
                        <span role="combobox" class="distinct" aria-label="Status" aria-autocomplete="list" aria-readonly="true">
                          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="status"></span>
                        </span>
                      </section>
                      <section hidden role="group" aria-label="Resolution" data-field="resolution">
                        <h4>Resolution</h4>
                        <span role="combobox" class="distinct" aria-label="Resolution" aria-autocomplete="list" aria-readonly="true">
                          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="resolution"></span>
                        </span>
                      </section>
                      <section hidden role="group" aria-label="Duplicate of" data-field="dupe_of">
                        <h4>Duplicate of</h4>
                        <span role="textbox" class="distinct" contenteditable="true" aria-label="Duplicate of" aria-disabled="true" itemprop="dupe_of"></span>
                      </section>
                      <section role="group" aria-label="Target Milestone" data-field="target_milestone">
                        <h4>Milestone</h4>
                        <span role="combobox" class="distinct" aria-label="Target Milestone" aria-autocomplete="list" aria-readonly="true">
                          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="target_milestone"></span>
                        </span>
                      </section>
                      <section role="group" aria-label="Severity" data-field="severity">
                        <h4>Severity</h4>
                        <span role="combobox" class="distinct" aria-label="Severity" aria-autocomplete="list" aria-readonly="true">
                          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="severity"></span>
                        </span>
                      </section>
                      <section role="group" aria-label="Priority" data-field="priority">
                        <h4>Priority</h4>
                        <span role="combobox" class="distinct" aria-label="Priority" aria-autocomplete="list" aria-readonly="true">
                          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="priority"></span>
                        </span>
                      </section>
                    </section>
                    <section role="group" class="bug-fieldset" aria-label="Affected Fieldset" data-category="affected">
                      <header>
                        <h3>Affected</h3>
                      </header>
                      <section role="group" aria-label="Product" data-field="product">
                        <h4>Product</h4>
                        <span role="combobox" class="distinct" aria-label="Product" aria-autocomplete="list" aria-readonly="true">
                          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="product"></span>
                        </span>
                      </section>
                      <section role="group" aria-label="Component" data-field="component">
                        <h4>Component</h4>
                        <span role="combobox" class="distinct" aria-label="Component" aria-autocomplete="list" aria-readonly="true">
                          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="component"></span>
                        </span>
                      </section>
                      <section role="group" aria-label="Version" data-field="version">
                        <h4>Version</h4>
                        <span role="combobox" class="distinct" aria-label="Version" aria-autocomplete="list" aria-readonly="true">
                          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="version"></span>
                        </span>
                      </section>
                      <section role="group" aria-label="Hardware" data-field="platform">
                        <h4>Hardware</h4>
                        <span role="combobox" class="distinct" aria-label="Hardware" aria-autocomplete="list" aria-readonly="true">
                          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="platform"></span>
                        </span>
                      </section>
                      <section role="group" aria-label="OS" data-field="op_sys">
                        <h4>OS</h4>
                        <span role="combobox" class="distinct" aria-label="OS" aria-autocomplete="list" aria-readonly="true">
                          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="op_sys"></span>
                        </span>
                      </section>
                    </section>
                  </div><!-- end .col -->
                  <div class="col">
                    <section role="group" class="bug-fieldset" aria-label="Notes Fieldset" data-category="notes">
                      <header>
                        <h3>Notes</h3>
                      </header>
                      <section role="group" aria-label="Summary" data-field="summary">
                        <h4>Summary</h4>
                        <span role="textbox" class="distinct" contenteditable="true" itemprop="summary"></span>
                      </section>
                      <section role="group" aria-label="Aliases" data-field="alias">
                        <h4>Aliases</h4>
                        <ul>
                          <li role="button" tabindex="0" itemprop="alias"></li>
                        </ul>
                      </section>
                      <section role="group" aria-label="Keywords" data-field="keyword">
                        <h4>Keywords</h4>
                        <ul>
                          <li role="button" tabindex="0" itemprop="keyword"></li>
                        </ul>
                      </section>
                      <section role="group" aria-label="Whiteboard" data-field="whiteboard">
                        <h4>Whiteboard</h4>
                        <span role="textbox" class="distinct" contenteditable="true" itemprop="whiteboard"></span>
                      </section>
                      <section role="group" aria-label="URL" data-field="url">
                        <h4>URL</h4>
                        <a role="link" itemprop="url"></a>
                      </section>
                      <section role="group" aria-label="See Also" data-field="see_also">
                        <h4>See Also</h4>
                        <ul><li><a role="link" itemprop="see_also"></a></li></ul>
                      </section>
                      <!-- Other custom fields: cf_crash_signature, cf_qa_whiteboard, etc. -->
                    </section>
                    <section role="group" class="bug-fieldset" aria-label="Dependencies Fieldset" data-category="dependencies">
                      <header>
                        <h3>Dependencies</h3>
                      </header>
                      <section role="group" aria-label="Depends on" data-field="depends_on">
                        <header>
                          <h4>Depends on</h4>
                        </header>
                        <ul class="list">
                          <li role="button" tabindex="0" itemprop="depends_on"></li>
                        </ul>
                      </section>
                      <section role="group" aria-label="Blocks" data-field="blocks">
                        <header>
                          <h4>Blocks</h4>
                        </header>
                        <ul class="list">
                          <li role="button" tabindex="0" itemprop="blocks"></li>
                        </ul>
                      </section>
                      <section role="group" aria-label="Duplicates" data-field="duplicate">
                        <h4>Duplicates</h4>
                        <ul class="list">
                          <li role="button" tabindex="0" itemprop="duplicate"></li>
                        </ul>
                      </section>
                    </section>
                  </div><!-- end .col -->
                  <div class="col">
                    <section role="group" class="bug-fieldset" aria-label="Participants Fieldset" data-category="participants">
                      <header>
                        <h3>Participants</h3>
                      </header>
                      <section role="group" aria-label="Reporter" data-field="creator">
                        <header>
                          <h4>Reporter</h4>
                        </header>
                        <ul class="list">
                          <li role="link" tabindex="0" itemprop="creator" itemscope itemtype="http://bzdeck.com/User">
                            <meta itemprop="email">
                            <meta itemprop="description">
                            <img alt="" itemprop="image">
                            <span itemprop="name"></span>
                          </li>
                        </ul>
                      </section>
                      <section role="group" aria-label="Assignee" data-field="assigned_to">
                        <header>
                          <h4>Assignee</h4>
                        </header>
                        <ul class="list">
                          <li role="link" tabindex="0" itemprop="assigned_to" itemscope itemtype="http://bzdeck.com/User">
                            <meta itemprop="email">
                            <meta itemprop="description">
                            <img alt="" itemprop="image">
                            <span itemprop="name"></span>
                          </li>
                        </ul>
                      </section>
                      <section role="group" aria-label="QA" data-field="qa_contact">
                        <header>
                          <h4>QA</h4>
                        </header>
                        <ul class="list">
                          <li role="link" tabindex="0" itemprop="qa_contact" itemscope itemtype="http://bzdeck.com/User">
                            <meta itemprop="email">
                            <meta itemprop="description">
                            <img alt="" itemprop="image">
                            <span itemprop="name"></span>
                          </li>
                        </ul>
                      </section>
                      <section role="group" aria-label="Mentors" data-field="mentor">
                        <header>
                          <h4>Mentors</h4>
                        </header>
                        <ul class="list">
                          <li role="link" tabindex="0" itemprop="mentor" itemscope itemtype="http://bzdeck.com/User">
                            <meta itemprop="email">
                            <meta itemprop="description">
                            <img alt="" itemprop="image">
                            <span itemprop="name"></span>
                          </li>
                        </ul>
                      </section>
                      <section role="group" aria-label="Cc" data-field="cc">
                        <header>
                          <h4>Cc</h4>
                        </header>
                        <ul class="list">
                          <li role="link" tabindex="0" itemprop="cc" itemscope itemtype="http://bzdeck.com/User">
                            <meta itemprop="email">
                            <meta itemprop="description">
                            <img alt="" itemprop="image">
                            <span itemprop="name"></span>
                          </li>
                        </ul>
                      </section>
                    </section>
                  </div><!-- end .col -->
                  <div class="col">
                    <section role="group" class="bug-fieldset" aria-label="Flags Fieldset" data-category="flags">
                      <header>
                        <h3>Flags</h3>
                      </header>
                    </section>
                    <section role="group" class="bug-fieldset" aria-label="Tracking Flags Fieldset" data-category="tracking-flags">
                      <header>
                        <h3>Tracking Flags</h3>
                      </header>
                    </section>
                  </div><!-- end .col -->
                </div><!-- end .bug-fieldset-wrapper -->
              </div><!-- end .bug-info -->
            </div><!-- end #bug-TID-tabpanel-info -->
            <div id="bug-TID-tabpanel-attachments" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="bug-TID-tab-attachments">
              <div class="bug-attachments" tabindex="0">
                <section role="group" aria-label="Attachments" data-field="attachments">
                  <h3>Attachments</h3>
                  <div class="list">
                    <header>
                      <h4>0 Attachments</h4>
                      <span role="checkbox" tabindex="0" aria-checked="false" aria-hidden="true">Show Obsolete</span>
                    </header>
                    <div class="scrollable" aria-dropeffect="none">
                      <ul tabindex="0" role="listbox" aria-live="true" aria-relevant="additions removals"></ul>
                    </div>
                    <div role="toolbar">
                      <div role="group">
                        <span role="button" class="iconic" aria-label="Add attachments..." data-command="add-attachment" data-icon="&#xF067;"></span>
                        <span role="button" class="iconic" aria-label="Remove an attachment" aria-disabled="true" data-command="remove-attachment" data-icon="&#xF068;"></span>
                      </div>
                      <input type="file" hidden multiple directory>
                    </div>
                  </div>
                  <div class="content scrollable" role="region">
                  </div>
                </section>
              </div>
            </div><!-- end #bug-TID-tabpanel-attachments -->
            <div id="bug-TID-tabpanel-history" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="bug-TID-tab-history">
              <div class="bug-history scrollable" tabindex="0" role="region">
                <section role="group" itemscope itemtype="http://bzdeck.com/History" aria-label="History" data-field="history">
                  <h3>History</h3>
                  <table>
                    <thead>
                      <tr>
                        <th>When</th>
                        <th>Who</th>
                        <th>What</th>
                        <th>Removed</th>
                        <th>Added</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
                </section>
              </div>
            </div><!-- end #bug-TID-tabpanel-history -->
          </div><!-- end #bug-TID-tabpanels -->
          <div id="bug-TID-outline" class="bug-outline scrollable">
          </div><!-- end #bug-TID-outline -->
        </div>
        <footer>
          <div role="toolbar">
            <div role="status"></div>
            <span role="button" class="cta" aria-disabled="true" data-command="submit">Save Changes</span>
          </div><!-- end [role="toolbar"] -->
        </footer>
        <div class="att-drop-target" aria-dropeffect="none"><div><label>Drop text or files here to attach</label></div></div>
      </article><!-- end #bug-TID -->
    </template><!-- end #bug-details-template -->
    <template id="bug-details-error-template">
      <article id="bug-TID" role="article" itemscope itemtype="http://bzdeck.com/Bug" data-attrs="data-error-code">
        <header>
          <h2>Bug <span itemprop="id"></span></h2>
        </header>
        <div>
          <p role="status" itemprop="status"></p>
        </div>
      </article><!-- end #bug-TID -->
    </template><!-- end #bug-details-error-template -->
    <template id="preview-bug-info">
      <div class="bug-info" tabindex="0" role="region">
        <dl>
          <dt>Filed</dt><dd><time itemprop="creation_time" data-relative="false"></time></dd>
          <dt>Modified</dt><dd><time itemprop="last_change_time" data-relative="false"></time></dd>
          <dt>Status</dt><dd itemprop="status"></dd>
          <dt>Resolution</dt><dd itemprop="resolution"></dd>
          <dt>Milestone</dt><dd itemprop="target_milestone"></dd>
          <dt>Product</dt><dd itemprop="product"></dd>
          <dt>Component</dt><dd itemprop="component"></dd>
          <dt>Version</dt><dd itemprop="version"></dd>
          <dt>Hardware</dt><dd itemprop="platform"></dd>
          <dt>OS</dt><dd itemprop="op_sys"></dd>
          <dt>Severity</dt><dd itemprop="severity"></dd>
          <dt>Priority</dt><dd itemprop="priority"></dd>
        </dl>
      </div><!-- end .bug-info -->
    </template><!-- end #preview-bug-info -->
    <template id="timeline-comment">
      <article tabindex="0" itemprop="comment" itemscope itemtype="http://bzdeck.com/Comment" role="article">
        <header>
          <div class="meta">
            <span role="link" itemprop="author" itemscope itemtype="http://bzdeck.com/User"><img alt="" itemprop="image"><span itemprop="name"></span><span class="roles"></span><meta itemprop="email"></span>
            <span itemprop="name"></span>
            <time itemprop="creation_time"></time>
          </div>
        </header>
        <p itemprop="extract"></p>
        <div itemprop="text"></div>
        <footer>
          <div role="toolbar">
            <div role="group">
              <span role="button" class="iconic text" tabindex="0" data-command="reply" data-icon="&#xF112;">Reply</span>
            </div>
          </div>
        </footer>
      </article>
    </template><!-- end #timeline-comment -->
    <template id="timeline-change">
      <article tabindex="0" itemprop="change" itemscope itemtype="http://bzdeck.com/Change" role="article">
        <header>
          <div class="meta">
            <span role="link" itemprop="author" itemscope itemtype="http://bzdeck.com/User" data-attrs="title"><img alt="" itemprop="image"><strong itemprop="givenName"></strong><meta itemprop="email"></span>
            <span itemprop="how"></span>
            <time itemprop="creation_time"></time>
          </div>
        </header>
      </article>
    </template><!-- end #timeline-change -->
    <template id="bug-comment-form">
      <section role="group" id="bug-TID-comment-form" class="bug-comment-form" aria-label="Comment Form">
        <header>
          <h4>Reply</h4>
          <ul id="bug-TID-comment-form-tablist" tabindex="0" role="tablist" aria-level="2" data-removable="false" data-reorderable="false">
            <li id="bug-TID-comment-form-tab-comment" role="tab" aria-controls="bug-TID-comment-form-tabpanel-comment" aria-selected="true"><label>Comment</label></li>
            <li id="bug-TID-comment-form-tab-preview" role="tab" aria-controls="bug-TID-comment-form-tabpanel-preview" aria-selected="false" aria-disabled="true"><label>Preview</label></li>
            <li id="bug-TID-comment-form-tab-attachments" role="tab" aria-controls="bug-TID-comment-form-tabpanel-attachments" aria-selected="false" aria-disabled="true"><label>Attachments</label></li>
            <li id="bug-TID-comment-form-tab-needinfo" role="tab" aria-controls="bug-TID-comment-form-tabpanel-needinfo" aria-selected="false" aria-hidden="true"><label>Need Info</label></li>
          </ul><!-- end #TID-tablist -->
          <div role="toolbar" id="bug-TID-comment-form-text-formatting-toolbar" class="text-formatting-toolbar" aria-label="Markdown text-formatting toolbar">
            <div role="group">
              <span role="button" class="iconic" aria-label="Insert bold text (Cmd+B)" data-command="strong" data-icon="&#xF032;"></span>
              <span role="button" class="iconic" aria-label="Insert italic text (Cmd+I)" data-command="em" data-icon="&#xF033;"></span>
              <span role="button" class="iconic" aria-label="Insert a link (Cmd+K)" data-command="a" data-icon="&#xF0C1;"></span>
            </div>
            <div role="group">
              <span role="button" class="iconic" aria-label="Insert a header" data-command="h2" data-icon="&#xF1DC;"></span>
              <span role="button" class="iconic" aria-label="Insert a quote" data-command="blockquote" data-icon="&#xF10D;"></span>
              <span role="button" class="iconic" aria-label="Insert code" data-command="code" data-icon="&#xF121;"></span>
            </div>
            <div role="group">
              <span role="button" class="iconic" aria-label="Insert a bulleted list" data-command="ul" data-icon="&#xF0CA;"></span>
              <span role="button" class="iconic" aria-label="Insert a numbered list" data-command="ol" data-icon="&#xF0CB;"></span>
            </div>
          </div><!-- end #TID-text-formatting-toolbar -->
        </header>
        <div>
          <div id="bug-TID-comment-form-tabpanel-comment" tabindex="0" role="tabpanel" aria-hidden="false" aria-labelledby="bug-TID-comment-form-tab-comment">
            <div role="group">
              <span role="button" class="iconic" aria-label="Add attachments..." data-command="attach" data-icon="&#xF0C6;"></span>
              <textarea rows="1" placeholder="Leave a comment" role="textbox" aria-multiline="true"></textarea>
            </div>
          </div><!-- end #TID-tabpanel-comment -->
          <div id="bug-TID-comment-form-tabpanel-preview" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="bug-TID-comment-form-tab-preview">
            <article itemprop="comment" itemscope itemtype="http://bzdeck.com/Comment" role="article">
              <div itemprop="text"></div>
            </article>
          </div><!-- end #TID-tabpanel-preview -->
          <div id="bug-TID-comment-form-tabpanel-attachments" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="bug-TID-comment-form-tab-attachments">
            <div role="group">
              <input type="file" hidden multiple directory>
              <table>
                <colgroup>
                  <col data-id="description">
                  <col data-id="edit">
                  <col data-id="remove">
                  <col data-id="move-up">
                  <col data-id="move-down">
                </colgroup>
                <tbody></tbody>
              </table>
            </div>
          </div><!-- end #TID-tabpanel-attachments -->
          <div id="bug-TID-comment-form-tabpanel-needinfo" tabindex="0" role="tabpanel" aria-hidden="true" aria-labelledby="bug-TID-comment-form-tab-needinfo">
            <div role="group">
              <div class="requestee-finder-outer">
                <label>Ask someone else:</label>
              </div>
            </div>
          </div><!-- end #TID-tabpanel-needinfo -->
        </div>
      </section><!-- end #TID -->
    </template><!-- end #bug-comment-form -->
    <template id="bug-comment-form-request-needinfo-row">
      <div class="request-needinfo-row">
        <span role="checkbox" tabindex="0"><label>Ask <strong></strong> <span></span></label></span>
      </div>
    </template><!-- end #bug-comment-form-request-needinfo-row -->
    <template id="bug-comment-form-clear-needinfo-row">
      <div class="clear-needinfo-row">
        <span role="checkbox" tabindex="0"><label>Provide information as <strong></strong></label></span>
      </div>
    </template><!-- end #bug-comment-form-clear-needinfo-row -->
    <template id="bug-comment-form-attachments-row">
      <tr itemscope itemtype="http://bzdeck.com/Attachment">
        <th itemprop="summary"></th>
        <td><span role="button" class="iconic" aria-label="Edit" data-command="edit" data-icon="&#xF040;"></span></td>
        <td><span role="button" class="iconic" aria-label="Remove" data-command="remove" data-icon="&#xF014;"></span></td>
        <td><span role="button" class="iconic" aria-label="Move Up" data-command="move-up" data-icon="&#xF077;"></span></td>
        <td><span role="button" class="iconic" aria-label="Move Down" data-command="move-down" data-icon="&#xF078;"></span></td>
      </tr>
    </template>
    <template id="timeline-attachment">
      <aside role="link" itemprop="attachment" itemscope itemtype="http://bzdeck.com/Attachment" data-attrs="data-att-id">
        <meta itemprop="is_patch">
        <meta itemprop="content_type">
        <h5 itemprop="summary"></h5>
        <div></div>
      </aside>
    </template><!-- end #timeline-attachment -->
    <template id="details-attachment-listitem">
      <li tabindex="0" role="option" aria-selected="false" data-attrs="id aria-hidden data-id data-hash" itemprop="attachment" itemscope itemtype="http://bzdeck.com/Attachment">
        <meta itemprop="id">
        <meta itemprop="is_patch">
        <meta itemprop="is_obsolete">
        <meta itemprop="is_unuploaded">
        <meta itemprop="content_type">
        <span itemprop="creator" itemscope itemtype="http://bzdeck.com/User">
          <img alt="" itemprop="image">
          <meta itemprop="email">
        </span>
        <span itemprop="summary"></span>
        <span><time itemprop="last_change_time"></time></span>
      </li>
    </template><!-- end #details-attachment-listitem -->
    <template id="details-attachment-content">
      <section itemscope itemtype="http://bzdeck.com/Attachment" data-attrs="data-att-id data-att-hash data-content-type">
        <header>
          <h4><span class="distinct" contenteditable="true" role="textbox" itemprop="summary" aria-label="Summary" aria-required="true"></span></h4>
        </header>
        <div class="fields">
          <section class="properties">
            <h5>Properties</h5>
            <ul>
              <li>Name: <span class="distinct" contenteditable="true" role="textbox" itemprop="file_name" aria-label="Name" aria-required="true"></span></li>
              <li>Type: <span class="distinct" contenteditable="true" role="textbox" itemprop="content_type" aria-label="Type" aria-required="true"></span></li>
              <li>Size:
                <span itemprop="size"></span>
                <meta itemprop="is_patch"><span role="checkbox" tabindex="0" data-itemprop="is_patch">Patch</span>
                <meta itemprop="is_obsolete"><span role="checkbox" tabindex="0" data-itemprop="is_obsolete">Obsolete</span>
              </li>
              <li>Created on <time itemprop="creation_time" data-relative="false"></time> by <span role="link" itemprop="creator" itemscope itemtype="http://bzdeck.com/User"><img alt="" itemprop="image"><span itemprop="name"></span><meta itemprop="email"></span></li>
              <li>Modified on <time itemprop="last_change_time" data-relative="false"></time></li>
            </ul>
          </section>
          <section class="flags">
            <h5>Flags</h5>
          </section>
        </div><!-- end .fields -->
        <div class="body"></div>
      </section>
    </template><!-- end #details-attachment-content -->
    <template id="details-change">
      <tr itemprop="change" itemscope itemtype="http://bzdeck.com/HistoryChange">
        <td itemprop="when"></td>
        <td itemprop="who"></td>
        <td itemprop="what"></td>
        <td itemprop="removed"></td>
        <td itemprop="added"></td>
      </tr>
    </template><!-- end #details-change -->
    <template id="details-flag">
      <section role="group" itemscope itemtype="http://bzdeck.com/Flag" data-attrs="aria-label data-field data-has-value">
        <h4 itemprop="name" data-attrs="aria-level"></h4>
        <span role="combobox" aria-autocomplete="list" aria-readonly="true" data-attrs="aria-label">
          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="status"></span>
        </span>
        <span role="link" itemprop="setter" itemscope itemtype="http://bzdeck.com/User"><img alt="" itemprop="image"><span itemprop="givenName"></span><meta itemprop="email"></span>
        <span role="link" itemprop="requestee" itemscope itemtype="http://bzdeck.com/User"><img alt="" itemprop="image"><span itemprop="givenName"></span><meta itemprop="email"></span>
      </section>
    </template><!-- end #details-flag -->
    <template id="details-tracking-flag">
      <section role="group" itemscope itemtype="http://bzdeck.com/TrackingFlag" data-attrs="aria-label data-field data-has-value">
        <h4 itemprop="name"></h4>
        <span role="combobox" aria-autocomplete="list" aria-readonly="true" data-attrs="aria-label">
          <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="value"></span>
        </span>
      </section>
    </template><!-- end #details-tracking-flag -->
    <template id="vertical-thread-item">
      <li tabindex="0" role="option" aria-selected="false" data-attrs="id data-id data-unread" itemscope itemtype="http://bzdeck.com/Bug">
        <div itemprop="contributor" itemscope itemtype="http://bzdeck.com/User">
          <img alt="" itemprop="image">
          <meta itemprop="email">
        </div>
        <div class="labels">
          <div itemprop="summary"></div>
          <ul role="none">
            <li role="none"><span itemprop="id"></span></li>
            <li role="none"><time itemprop="last_change_time"></time></li>
          </ul>
          <p><span itemprop="flag"></span> <span itemprop="extract"></span></p>
        </div>
        <meta itemprop="starred" aria-hidden="true">
      </li>
    </template><!-- end #vertical-thread-item -->
    <template id="bug-tooltip">
      <aside role="tooltip" data-attrs="data-id" itemscope itemtype="http://bzdeck.com/Bug">
        <span itemprop="contributor" itemscope itemtype="http://bzdeck.com/User">
          <img alt="" itemprop="image">
          <meta itemprop="email">
        </span>
        <span itemprop="id"></span>
        <span itemprop="summary"></span>
        <time data-simple="true" itemprop="last_change_time"></time>
      </aside>
    </template><!-- end #bug-tooltip -->
    <template id="person-finder">
      <span class="person-finder" role="combobox" aria-autocomplete="none" aria-label="Need Info requestee finder" data-autoexpand="true" data-nobutton="true">
        <span role="searchbox" contenteditable="true" spellcheck="false"></span>
        <ul role="listbox"></ul>
      </span>
    </template><!-- end #person-finder -->
    <template id="person-finder-item">
      <li tabindex="-1" role="option" aria-selected="false" data-attrs="id data-value" itemscope itemtype="http://bzdeck.com/User">
        <img alt="" itemprop="image">
        <span itemprop="name"></span>
        <span itemprop="nick"></span>
        <meta itemprop="email">
      </li>
    </template><!-- end #person-finder-item -->
    <template id="person-with-image">
      <span role="link" itemscope itemtype="http://bzdeck.com/User" data-attrs="title"><img alt="" itemprop="image"><strong itemprop="givenName"></strong><meta itemprop="email"></span>
    </template><!-- end #person-with-image -->
    <template id="bug-participant">
      <li tabindex="0" role="link" itemscope itemtype="http://bzdeck.com/User">
        <meta itemprop="email">
        <meta itemprop="description">
        <img alt="" itemprop="image">
        <span itemprop="name"></span>
      </li>
    </template><!-- end #bug-participant -->
    <template id="qrcode-auth-overlay-template">
      <section id="qrcode-auth-overlay" role="region" aria-hidden="true">
        <header>
          <span role="button" class="iconic banner-nav-button" tabindex="0" aria-label="Back" data-icon="&#xF053;"></span>
          <h2>Scan QR Code</h2>
        </header>
        <div>
          <p>Open BzDeck with Firefox for desktop. Go to the Settings, then tap the button below to scan the displayed QR code.</p>
          <video></video>
          <p><span role="button" class="cta" tabindex="0" aria-disabled="true" data-id="scan">Scan to sign in</span></p>
        </div>
        <iframe hidden src="/integration/qrcode-decoder/"></iframe>
      </section><!-- end #qrcode-auth-overlay -->
    </template><!-- end #qrcode-auth-overlay-template -->
  </head>
  <body>
    <div role="document" id="app-landing">
      <section id="app-login">
        <div>
          <h1>BzDeck</h1>
          <div>
            <p id="app-intro"><strong>BzDeck</strong> is a useful, experimental Bugzilla client demonstrating modern Web standard technologies. This app is currently optimized for <strong>bugzilla.mozilla.org</strong>. <a href="/about/">Learn more &raquo;</a></p>
            <div role="form" aria-hidden="true">
              <p><span role="button" class="cta" tabindex="0" data-id="bugzilla-auth">Sign in with Bugzilla</span></p>
              <p><span role="button" class="cta" tabindex="0" data-id="qrcode-auth">Sign in with QR code</span></p>
            </div>
            <div class="statusbar" role="status">
              <p>This application requires <a href="https://www.mozilla.org/firefox/developer/">Firefox Developer Edition</a> or <a href="https://nightly.mozilla.org/">Firefox Nightly</a> with JavaScript enabled.</p>
            </div>
          </div>
        </div>
      </section><!-- end #app-login -->
    </div><!-- end #app-landing -->
    <div role="application" id="app-container" aria-hidden="true">
      <nav id="navigator" role="navigation">
        <div tabindex="0" role="region">
          <section id="navigator-account">
            <h2>Account</h2>
            <span role="button" id="main-menu-app-account" tabindex="0" aria-label="Profile" data-tooltip-position="right">
              <label itemscope itemtype="http://bzdeck.com/User">
                <img alt="" itemprop="image">
                <strong itemprop="name"></strong>
                <span itemprop="email"></span>
              </label>
            </span>
          </section><!-- end #navigator-account -->
          <section id="navigator-folders">
            <h2>Bugs</h2>
            <ul id="navigator-folder-list" role="listbox" tabindex="0" aria-multiselectable="false"></ul>
          </section><!-- end #navigator-folders -->
          <section id="navigator-menu">
            <h2>Menu</h2>
            <ul id="main-menu-app-menu" role="menu">
              <li role="none">
                <a id="main-menu-app-about" href="/about/" aria-label="About BzDeck" role="menuitem" data-command="show-about" data-tooltip-position="right">
                  <span class="icon" aria-hidden="true"></span>
                  <label>About BzDeck</label>
                </a>
              </li>
              <li role="none">
                <span id="main-menu-app-settings" aria-label="Settings" role="menuitem" data-command="show-settings" data-tooltip-position="right">
                  <span class="icon" aria-hidden="true"></span>
                  <label>Settings</label>
                </span>
              </li>
            </ul><!-- end #main-menu-app-menu -->
          </section><!-- end #navigator-menu -->
        </div>
      </nav><!-- end #navigator -->
      <div id="app-body">
        <aside role="complementary" id="sidebar">
          <section role="region" id="sidebar-list-panel" class="sidebar-panel" aria-hidden="false">
            <header>
              <span role="button" class="iconic banner-nav-button" tabindex="0" aria-label="Menu" data-icon="&#xF0C9;"></span>
              <h3>Inbox</h3>
            </header>
            <section id="sidebar-list" class="bug-list" role="grid" aria-live="true" aria-relevant="additions removals" aria-labelledby="sidebar-list-title" aria-multiselectable="true" aria-readonly="true" data-selection="rows">
            </section>
            <section id="home-vertical-thread" class="bug-listbox-container" tabindex="0" role="region">
              <header role="toolbar">
                <ul class="filter" role="radiogroup" aria-label="Filter Bugs by Status">
                  <li role="radio" data-value="open">Open</li>
                  <li role="radio" data-value="closed">Closed</li>
                  <li role="radio" data-value="all">All</li>
                </ul>
                <span role="button" class="iconic" aria-label="Sort Bugs in Ascending Order" aria-pressed="false" data-command="sort"></span>
                <span role="button" class="iconic" aria-label="Show menu for the thread" aria-pressed="false" aria-haspopup="true" aria-owns="home-vertical-thread-menu" data-command="show-menu" data-icon="&#xF142;"></span>
                <ul id="home-vertical-thread-menu" role="menu" aria-expanded="false">
                  <li role="none">
                    <a id="home-vertical-thread-menu-mark-all-read" role="menuitem" data-command="mark-all-read"><label>Mark All Bugs as Read</label></a>
                  </li>
                </ul>
              </header>
              <div class="scrollable">
                <ul tabindex="0" role="listbox" aria-live="true" aria-relevant="additions removals" aria-multiselectable="true"></ul>
              </div>
            </section>
            <footer aria-hidden="true">
              <div role="status"><span>No bugs found in this folder.</span></div>
            </footer>
          </section><!-- end #sidebar-list-panel -->
          <section role="region" id="sidebar-search-panel" class="sidebar-panel" aria-hidden="true">
            <header>
              <h3>Search</h3>
            </header>
            <div id="sidebar-search-container" role="search">
              <section data-field="summary">
                <h4>Summary</h4>
                <input role="searchbox" placeholder="Keywords" tabindex="0" itemprop="summary">
                <span role="button" class="iconic" data-command="clear" data-icon="&#xF00D;"></span>
              </section>
              <section data-field="product">
                <h4>Product</h4>
                <span role="combobox" class="distinct" aria-label="Status" aria-autocomplete="list" aria-readonly="true">
                  <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="product"></span>
                </span>
              </section>
              <section data-field="status">
                <h4>Status</h4>
                <span role="combobox" class="distinct" aria-label="Status" aria-autocomplete="list" aria-readonly="true">
                  <span role="searchbox" aria-readonly="true" tabindex="0" itemprop="status"></span>
                </span>
              </section>
            </div>
            <section id="sidebar-search-results" class="bug-listbox-container" tabindex="0" role="region">
              <div class="scrollable">
                <ul tabindex="0" role="listbox" aria-live="true" aria-relevant="additions removals" aria-multiselectable="true"></ul>
              </div>
            </section>
          </section><!-- end #sidebar-search-panel -->
        </aside><!-- end #sidebar -->
        <main role="main">
          <ul id="main-tablist" tabindex="0" role="tablist" aria-level="1" aria-live="true" aria-relevant="additions removals" data-removable="true" data-reorderable="false">
            <li id="tab-home" title="Home" draggable="true" role="tab" aria-controls="tabpanel-home" aria-grabbed="false" aria-selected="true"><label>Home</label></li>
          </ul><!-- end #main-tablist -->
          <div id="main-tabpanels">
            <div id="tabpanel-home" tabindex="0" role="tabpanel" aria-hidden="false" aria-labelledby="tab-home">
              <section>
                <header>
                  <h2>Inbox</h2>
                </header>
                <div>
                  <div id="home-preview-pane" class="bug-container" tabindex="0" role="region" aria-expanded="false"></div>
                </div>
              </section>
            </div><!-- end #tabpanel-home -->
          </div><!-- end #main-tabpanels -->
        </main>
      </div><!-- end #app-body -->
      <div class="statusbar" role="status">
        <p></p>
        <div role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"></div>
      </div>
    </div><!-- end #app-container -->
    <div itemscope itemtype="http://schema.org/Organization">
      <meta itemprop="name" content="BzDeck">
      <meta itemprop="url" content="https://www.bzdeck.com/">
      <meta itemprop="sameAs" content="https://twitter.com/BzDeck">
      <meta itemprop="sameAs" content="https://www.facebook.com/BzDeck">
      <meta itemprop="sameAs" content="https://plus.google.com/+BzDeck">
    </div>
    <div itemscope itemtype="http://schema.org/WebApplication">
      <meta itemprop="name" content="BzDeck">
      <meta itemprop="description" content="A useful, experimental Bugzilla client demonstrating modern Web application technologies such as CSS3, DOM4, HTML5, ECMAScript 6 and WAI-ARIA.">
      <meta itemprop="url" content="https://www.bzdeck.com/">
      <meta itemprop="image" content="https://www.bzdeck.com/static/images/logo/icon-512.png">
      <meta itemprop="screenshot" content="https://pbs.twimg.com/media/BlOQQwjCQAEfB27.png:large">
      <div itemprop="author" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="Team BzDeck">
        <meta itemprop="url" content="https://github.com/bzdeck">
      </div>
      <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <meta itemprop="price" content="0">
      </div>
      <meta itemprop="applicationCategory" content="BusinessApplication">
      <meta itemprop="operatingSystem" content="Windows">
      <meta itemprop="operatingSystem" content="Mac">
      <meta itemprop="operatingSystem" content="Linux">
      <meta itemprop="operatingSystem" content="Android">
      <meta itemprop="browserRequirements" content="Firefox Developer Edition">
      <meta itemprop="browserRequirements" content="Firefox Nightly">
    </div>
<?php output_link_elements('js') ?>
  </body>
</html>
