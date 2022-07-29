<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Main program window</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<!-- topmenu start -->
<? include "include/topmenu.html"; ?>
<!-- topmenu end -->

<div class="container-fluid">

<!-- google search start -->
<? include "include/googlesearch.html"; ?>
<!-- google search end -->

<!-- tabelka z trescia -->
<table>
<tr>
<td>

<h1>Main program window</h1>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->

<ul>
	<li><a href="main_window_desc.php">Main program window</a></li><li><a data-toggle="collapse" href="#maintabs" role="button" aria-expanded="false" aria-controls="maintabs">Main Window Tabs</a><ul class="collapse" id="maintabs">
		<li><a href="main_tabs_general.php">Main window tabs</a><ul>
            <li><a href="main_tabs_myservices.php">Projects</a><ul>
						<li><a href="service_properites.php">Project Properties</a></li><li><a href="service_archive.php">Project archiving</a></li><li><a href="service_restore.php">Restoring a project</a></li><li><a href="service_todotasks.php">Project Tasks</a></li><li><a href="service_tool_synchronization.php">Project synchronization</a></li><li><a href="service_map.php">Project Map</a></li><li><a href="service_virtual_include.php">Forced file inclusion</a></li></ul>
				</li><li><a href="main_tabs_inspector_tags.php">Tag Inspector</a></li><li><a href="main_tabs_inspector_css.php">CSS Inspector</a><ul>
						<li><a href="tool_new_selector.php">CSS Selector Wizard</a></li><li><a href="tool_new_selector_attributes.php">Selector attribute</a></li></ul>
				</li><li><a href="main_tabs_macrocodes.php">Templates</a></li><li><a href="main_tabs_myftpservers.php">My FTP servers</a><ul>
						<li><a href="main_tabs_myftpservers_on-offline.php">Working online and offline</a></li><li><a href="main_tabs_myftpservers_rights.php">Changing access rights</a></li><li><a href="main_tabs_myftpservers_lockfile.php">Block an item</a></li><li><a href="main_tabs_myftpservers_ftpconfirm.php">What operation is to be performed?</a></li></ul>
				</li><li><a href="main_tabs_inspector_mysql.php">MySQL Inspector</a><ul>
						<li><a href="tool_mysql_export_tables.php">Database Export Wizard</a></li><li><a href="tool_mysql_query_creator.php">SQL Query Wizard</a></li><li><a href="tool_mysql_query.php">Execute SQL Query</a></li><li><a href="tool_mysql_table_properties.php">Table properties</a></li><li><a href="tool_mysql_table_field.php">Table field properties</a></li><li><a href="tool_mysql_table_index.php">Table index properties</a></li></ul>
				</li><li><a href="main_tabs_navigator.php">Navigator</a></li><li><a href="main_tabs_languages.php">Programming languages</a></li><li><a href="down_panel.php">Bottom Panel</a><ul>
						<li><a href="down_links_verify.php">Link verification</a>
							<param name="Name" value="Syntax validation"><ul>
								<li><a href="down_syntax_check.php">Document syntax validation</a></li><li><a href="down_syntax_check_css.php">CSS compatibility check options</a></li></ul>
						</li><li><a href="down_integrity.php">Project consistency</a></li><li><a href="down_find_report.php">Search Report</a>
							<param name="Name" value="Publishing operations"><ul>
								<li><a href="down_publishing.php">Publishing operations</a></li><li><a href="down_publishing_ftpqueue.php">FTP file queue</a></li><li><a href="down_publishing_syncreport.php">Synchronization report</a></li><li><a href="down_publishing_serverlog.php">Log of communication between Spider and the server</a></li></ul>
						</li><li><a href="down_help.php">Help</a></li></ul>
			</li></ul>
		</li></ul>
	</li><li><a data-toggle="collapse" href="#editor" role="button" aria-expanded="false" aria-controls="editor">Editor</a><ul class="collapse" id="editor">
		<li><a href="main_editor_general.php">Editor in general</a></li><li><a href="main_editor.php">Code editor</a><ul>
						<li><a href="syntax.php">Syntax coloring in Spider</a></li><li><a href="main_editor_todotasks.php">Tasks to do</a></li><li><a href="main_editor_bookmarks.php">Document bookmarks</a></li><li><a href="main_editor_codeinsight.php">Dynamic code</a></li><li><a href="main_menu_editor.php">Pop-up menu</a></li><li><a href="main_editor_navigation.php">Document navigation</a></li></ul>
				</li><li><a href="main_editor_wysiwyg.php">Visual editor</a><ul>
						<li><a href="main_menu_editor_wysiwyg.php">Pop-up menu</a></li></ul>

		</li></ul>
			</li><li><a data-toggle="collapse" href="#mainmenu" role="button" aria-expanded="false" aria-controls="mainmenu">Main menu</a><ul class="collapse" id="mainmenu">
				<li><a href="main_menu_main.php">Information</a></li><li><a href="main_menu_file.php">File</a><ul>
						<li><a href="main_menu_file_new.php">New document</a></li></ul>
						</li><li><a href="main_menu_services.php">Projects</a><ul>
								<li><a href="main_menu_services_properties.php">Properties</a></li><li><a href="main_menu_services_properties_htmlhelp.php">HTML Help</a></li></ul>
					</li><li><a href="main_menu_edit.php">Edit</a><ul>
						<li><a href="main_menu_edit_change_selected.php">Selected text to...</a></li><li><a href="main_menu_edit_bookmarks.php">Bookmarks in a document</a></li><li><a href="main_menu_edit_pastechange.php">Paste from clipboard with replacement...</a></li><li><a href="main_menu_edit_additionals.php">Additional commands</a></li></ul>
				</li><li><a href="main_menu_find.php">Search</a></li><li><a href="main_menu_htmlcode.php">HTML code</a><ul>
						<li><a href="main_menu_htmlcode_structure.php">Structure</a></li><li><a href="main_menu_htmlcode_align.php">Alignment</a></li><li><a href="main_menu_htmlcode_format.php">Text formatting</a></li><li><a href="main_menu_htmlcode_headers.php">Header</a></li><li><a href="main_menu_htmlcode_brnewline.php">Line break BR</a></li><li><a href="main_menu_htmlcode_forms.php">Forms</a></li><li><a href="main_menu_htmlcode_tables.php">Tables</a></li><li><a href="main_menu_htmlcode_frames.php">Frames</a></li><li><a href="main_menu_htmlcode_changes.php">Changes</a></li><li><a href="main_menu_htmlcode_lists.php">Lists</a></li></ul>
				</li><li><a href="main_menu_htmlhelp.php">HTML Help</a></li><li><a href="main_menu_spelling.php">Spelling</a><ul>
						<li><a href="links_verify_changecaps.php">Code verification</a></li></ul>
					</li><li><a href="main_menu_tools.php">Tools</a><ul>
						<li><a href="main_menu_tools_creators.php">Markup code wizards</a></li><li><a href="main_menu_tools_formatting.php">Code formatting and compression</a></li><li><a href="main_menu_tools_forms.php">Forms</a></li><li><a href="main_menu_tools_frames.php">Frames</a></li><li><a href="main_menu_tools_gfx.php">Graphics &amp; Multimedia</a></li><li><a href="main_menu_tools_links.php">Links</a></li><li><a href="main_menu_tools_navigation.php">Document navigation</a></li><li><a href="main_menu_tools_objects.php">Scripts and objects</a></li><li><a href="main_menu_tools_structure.php">Structure</a></li><li><a href="main_menu_tools_tables.php">Tables</a></li><li><a href="main_menu_tools_tags.php">Tools for creating tags</a></li><li><a href="main_menu_tools_text.php">Text</a></li><li><a href="main_menu_tools_verify.php">Code Verification</a></li><li><a href="main_menu_tools_other.php">Other tools</a></li><li><a href="zen-coding.php">Zen-coding commands</a></li></ul>
					</li><li><a href="main_menu_view.php">View</a><ul>
						<li><a href="main_menu_view_settings.php">Settings</a></li><li><a href="main_menu_view_view.php">View</a></li></ul>
				</li><li><a href="main_menu_help.php">Help</a></li></ul>
			</li><li><a data-toggle="collapse" href="#toolbars" role="button" aria-expanded="false" aria-controls="toolbars">Toolbars</a><ul class="collapse" id="toolbars">
				<li><a href="toolbars_general.php">Toolbars - Information</a></li><li><a href="toolbars_main.php">Main toolbar</a></li><li><a href="toolbars_often.php">Often used</a></li><li><a href="toolbars_link_format.php"> Links, text and formatting </a></li><li><a href="toolbars_tables.php">Tables and forms</a></li><li><a href="toolbars_gfx.php"> Graphics and Multimedia </a></li><li><a href="toolbars_objects_scripts.php">Java, ActiveX, SSI and others</a></li><li><a href="toolbars_htmlhelp.php">HTML Help Tools</a></li><li><a href="toolbars_minitoolbar.php">Editor mini-bar</a></li><li><a href="settings_toolbars_toolbars.php">Edit toolbars</a></li></ul>

			</li><li><a data-toggle="collapse" href="#preview" role="button" aria-expanded="false" aria-controls="preview">Preview</a><ul class="collapse" id="preview">
				<li><a href="main_preview_general.php">Preview - general</a></li><li><a href="main_preview_embed.php">Built-in preview</a></li><li><a href="main_preview_dynamic.php">Dynamic preview</a></li><li><a href="main_preview_external.php">External preview</a></li><li><a href="main_preview_prevdoc.php">Preview using another document</a></li></ul>

			</li><li><a data-toggle="collapse" href="#toolsin" role="button" aria-expanded="false" aria-controls="toolsin">Various tools</a><ul class="collapse" id="toolsin">
				<li><a href="tool_info.php">Tools - Information</a></li><li>Document<ul>
            <li><a href="tool_quickstart.php">Quick Start</a></li><li><a href="tool_meta.php">Title and META section editor</a></li><li><a href="tool_body.php">BODY settings</a></li><li><a href="tool_docinfo.php">Document information</a></li><li><a href="tool_docinfo_todo_add.php">Add a new task</a></li><li><a href="tool_keywords_generator.php">Keyword generator</a></li><li><a href="tool_htmlcompressor.php">HTML Compressor</a></li><li><a href="tool_unicodeeditorek.php">Unicode Editor</a></li><li><a href="tool_open_remote.php">Opening a page from the Web</a></li></ul>
				</li><li>Text<ul>
						<li><a href="tool_text_attributes.php">Text attributes</a></li><li><a href="tool_embrace.php">Enclose text</a></li><li><a href="tool_typo_correct.php">Typographical correction</a></li><li><a href="tool_marquee.php">Animated text</a></li><li><a href="tool_fonts_select.php">Choose fonts</a></li><li><a href="tool_comment.php">Comment</a></li><li><a href="tool_content_list.php">Table of contents generator</a></li></ul>
					</li><li>Forms and lists<ul>
						<li><a href="tool_form_editor.php">Form Editor</a></li><li><a href="tool_form_others.php">Form elements</a></li><li><a href="tool_form_selectlist.php">Selection list in a form</a></li><li><a href="tool_form_textarea.php">Text box in a form</a></li><li><a href="tool_lists.php">Lists generator</a></li></ul>
					</li><li>Frames<ul>
						<li><a href="tool_frameeditor.php">Frame Creator</a></li><li><a href="tool_frame.php">FRAME Editor</a></li><li><a href="tool_frameset.php">FRAMESET editor</a></li><li><a href="tool_iframe.php">Floating frame IFRAME</a></li></ul>
					</li><li>Graphics, multimedia, objects<ul>
						<li><a href="tool_graphic_insert.php">Inserting images</a></li><li><a href="tool_graphic_browser.php">Image viewer</a></li><li><a href="tool_quickpreview.php">Quick preview</a></li><li><a href="tool_multimedia_insert.php">Media Embedding</a></li><li><a href="tool_gallery.php">Image gallery creator</a></li><li><a href="tool_graphic_converter.php">Image file converter</a></li><li><a href="tool_bgsound.php">Insert sound or music</a></li><li><a href="tool_colorpalette.php">Color palette</a></li><li><a href="tool_objects.php">Insert an object</a></li><li><a href="tool_param.php">Object parameter</a></li><li><a href="tool_embed.php">Object Embed</a></li></ul>
					</li><li>Links<ul>
						<li><a href="tool_link.php">Insert a link</a></li><li><a href="tool_link_map_editor.php">Map editor</a></li></ul>
					</li><li>Scripts<ul>
						<li><a href="tool_insert_script.php">Inserting a script into a page</a></li><li><a href="tool_script_dialog.php">JavaScript dialog window</a></li><li><a href="tool_script_newwindow.php">Parameters of the opened window</a></li><li><a href="tool_events_attributes.php">Events and other attributes</a></li><li><a href="tool_noscript.php">NOSCRIPT tag</a></li><li><a href="tool_ssi.php">SSI+ tags</a></li></ul>
					</li><li>Styles<ul>
						<li><a href="tool_style_class.php">Select or create a CSS class</a></li><li><a href="tool_style_editor.php">Style for tag</a></li><li><a href="tool_xml_trans.php">XSLT Transformation Wizard</a></li></ul>
				</li><li><a href="tool_table_caption.php">Tables</a><ul>
						<li><a href="tool_table_editor.php">Table editor</a></li><li><a href="tool_table_quick2.php">Table skeleton</a></li><li><a href="tool_table_quick.php">Very quick table</a></li><li><a href="tool_text2table.php">Convert selected textinto table</a></li><li><a href="tool_table_tag.php">TABLE tag editor</a></li><li><a href="tool_table_row.php">Table row</a></li><li><a href="tool_table_cell.php">Table cell</a></li><li><a href="tool_table_caption.php">Table description</a></li></ul>
					</li><li>Renaming multiple files<ul>
						<li><a href="tool_chameleon.php">Chameleon - Renaming multiple files</a></li><li><a href="tool_chameleon_rules.php">Conversion rules editor</a></li></ul>
					</li><li>Other<ul>
						<li><a href="tool_importer.php">File Importer</a></li><li><a href="tool_recorder.php">Activity Recorder</a></li><li><a href="tool_zoomek.php">Magnifying glass</a></li><li><a href="tool_hr.php">HR horizontal line</a></li><li><a href="tool_welcometo.php">Appearance Settings Tool</a></li><li><a href="tool_tips_tricks.php">Tips and tricks</a></li><li><a href="info_activate.php">Program activation</a></li><li><a href="tool_version_check.php">Checking for updated versions</a></li></ul>
			</li></ul>


</li></ul>
</td>
</tr>
</table>
<p class="prawa"><a href="contents_main.php">Back to table of contents</a></p>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js" integrity="sha512-/DXTXr6nQodMUiq+IUJYCt2PPOUjrHJ9wFrqpJ3XkgPNOZVfMok7cRw6CSxyCQxXn6ozlESsSh1/sMCTF1rL/g==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha512-kBFfSXuTKZcABVouRYGnUo35KKa1FBrYgwG4PAx7Z2Heroknm0ca2Fm2TosdrrI356EDHMW383S3ISrwKcVPUw==" crossorigin="anonymous"></script>
</div><!-- container end -->

<!-- Cookie Banner -->
<? include "include/cookiebanner.html"; ?>
<!-- End of Cookie Banner -->

<!-- Google analytics -->
<? include "include/analytics.html"; ?>
<!-- End of Google analytics -->

</body>
</html>