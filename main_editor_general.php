<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Editor - general</title>

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

<!-- nag&#322;owek g&#322;owny tematu -->
<h1>Editor - general</h1>

<!-- tre&#347;&#263; pomocy -->


<p>The Create tab contains the Spider's basic tool - its page editor. This is where the website is created. This is where we get all the effects with the right tools.</p>

<p>The Create tab is located in the <a href="main_tabs_general.php#tabs_center"> middle pane </a> , which you cannot disable. By default, this is what is turned on, and new documents will also be opened in it.</p>



<h2>Editor mode selection</h2>

<p>Spider allows you to work on an HTML document in two modes</p><ul>
   <li><a href="main_editor.php">source code editing mode</a></li>
   <li><a href="main_editor_wysiwyg.php">graphic mode (WYSIWYG)</a></li>
</ul>

<p>Documents of other types (e.g. scripts, CSS style sheets, etc.) in source code editing mode only.</p>

<p>Most of the work in Spider will be done in source code mode. In this mode, you can edit other types of documents (e.g. scripts, CSS style sheets, etc.). The visual mode is designed to work only on HTML document and is rather for novice users of the program.</p>

<p>Once you get into some practice, you will use the menus and toolbars less often, as most of the operations can be performed with hotkeys. You can customize these shortcuts in the <a href="settings_toolbars_hotkeys.php"> Program Settings window </a></p>



<h2>Opening, saving and closing documents</h2>

<p><b>New document</b><br></p><p>You can create a new document in several ways:</p>

<ul>
   <li>from <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_file.php">File</a> / <a href="main_menu_file_new.php">New document</a> - different types of documents and their elements</li>
   <li>using a template template</li>
</ul>To quickly create a new document, use the keyboard shortcut:<ul>
   <li><b>Ctrl+N</b> - (new empty document)</li>
   <li><b>Ctrl+Shift+N - </b> the document will be created from the default template</li></ul>

<p>A new document can be opened in <a href="main_editor.php"> source code editing </a> , or in <a href="main_editor_wysiwyg.php"> graphical mode </a> , depending on the option selected in <a href="settings_editor_wysiwyg.php"> Program Settings </a> .</p>


<p><b>Opening documents</b><br></p><p>You can also open the document in several ways:</p>
<ul>
<li>from <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_file.php">File</a>:<ul>
      <li><b>Open</b> - opens a file from disk, you can use the drop-down menu of this command, which includes recently opened documents</li>
      <li><a href="tool_open_remote.php">Open from network</a> - opens a tool that allows you to open a file using the network.</li>
      <li><a href="tool_importer.php">Import</a> - allows you to import from disk a file in a format not directly supported by Spider</li>
   </ul>
</li><li><b>from <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_services.php">Projects</a> / <a href="main_menu_services_properties.php">Project properties</a></b> / Open frequently used project - Opens files from the list of <a href="service_properites.php#servicepropertiesoftenused">frequently used project documents</a></li><li>from the list of files in <a href="main_tabs_myservices.php">Projects</a></li><li>from the list of files on the <a href="main_tabs_myftpservers.php">Servers</a> tab - in Spider it is also possible to <a href="network_opendoc_ftp.php">edit documents opened directly from an FTP server</a>!</li><li>by dragging a document from the Windows Explorer windows</li><li>with a double-click on an empty area in the editor's place when there are no documents open.</li>
</ul>

<p><b> Save documents </b> <br>

 You can save documents:</p><ul>
   <li>as in any other Windows application via the <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_file.php"> File </a> Save, Save As ... and Save all.</li>
   <li>with the Save command on <a href="toolbars_main.php"> Main Bar </a></li>
</ul>

<p>In addition, you can export documents to HTML or RTF format using the command in the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_file.php">File</a> Export. Exporting involves saving the document in such a way that the layout and syntax coloring in the Spider editor are represented. This greatly helps in preparing code listings for printing, etc.</p>

<p>Two additional files are created when the document is saved:</p><ul>
   <li><a href="main_editor_backups.php">backup</a></li>
   <li><a href="main_editor_addfiles.php">additional information file for document</a></li>
</ul><a name="przelaczanie"></a><h2>Switching between documents</h2>

<p>In Spider you can open practically any number of documents. Of course opening for example 1000 files will slow down the program, but theoretically it is possible.</p>

<p>Names of currently opened documents are presented on buttons at the top of the editor (they can be moved to the bottom by changing this option in <a href="settings_editor_general.php">Program Settings</a>. By clicking on the buttons you can switch between documents. If you hold the cursor over the button with the document name, a balloon will appear with the full path to the document.</p>To the right of the document name there is an icon with a ball whose appearance means:<ul>
   <li>- The document has not been changed since the last save or since it was opened in the editor.</li><li>- The document has not been changed since the last save or since it was opened in the editor. The arrow means that the document is open for editing directly from the server.</li><li>- Changes have been made to the document since the last save, or since it was opened in the editor.</li><li>- Changes have been made to the document since it was last saved, or since it was opened in the editor. An arrow indicates that the document is open for editing directly from the server.</li></ul>

<p>If you open multiple documents, switching between them (especially if their buttons are not next to each other) may be inefficient. In this case, you can use the <b>Go to Selected Document</b> command on the <a href="toolbars_minitoolbar.php">editor's mini bar</a>. This command will expand the list with names of all documents opened in Spider. Right-clicking on any of the document name buttons has the same effect.</p>

<p>In the drop-down list with file names, you can also specify how to name your documents, as well as close the current document or change the order of open documents. To do this, click one of the items:</p>

<ul>
   <li><b>Close this document</b> - closes the document whose name you clicked on, displaying a drop-down list. In addition, this command contains a submenu that includes the commands Close <b>all documents</b> and <b>Close all but</b> this document.</li>.<li><b>New document</b> - creates a new empty document. Additionally, this command has a submenu identical to the analogous command in the <a href="main_menu_file.php">File menu</a>.</li>.<li><b> Publish current to web </b> - allows you to publish the current document to the web. <a href="network_publishing_general.php#publish_current"> Read more about the advanced capabilities of this command </a> .</li>Additionally, the "Publish open in web" command is available in the submenu.<li><i>[here is a list of open documents</i>].</li>
   <li><b>Display file names only</b> - displays only the file name (path + name in the list)</li>
   <li><b> Display path relative to project </b> - display path relative to <a href="service_properites.php"> site root </a> + filename</li>
   <li><b> Display title (if available) </b> - displays the title of the HTML document (the contents of the <tt>  </tt> )</li>
   <li><b>Reorder documents</b> - opens a window displaying a list of open documents, their titles and paths. Simply point to a document and move it up or down in order using the arrows next to it. This command is active only when at least two documents are open.</li>
</ul>


<p>You can also use the commands on the <a href="toolbars_minitoolbar.php">editor's mini bar</a> to quickly switch between documents:</p><ul>
   <li><b>Display first document</b> - goes to the first document in the list of documents opened in Spider</li>
   <li><b>Show previous document</b> - goes to previous document on the list (default shortcut <tt>Shift+Ctrl+Tab</tt>)</li>
   <li><b>Display next document</b> - goes to the next document on the list (default shortcut <tt>Ctrl+Tab</tt>)</li>
   <li><b>View last document</b> - goes to the last document in the list opened in Spider</li>
</ul>

<p>You can find the same commands in <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_view.php"> View </a> .</p>

<p><b>Switching between documents in order of use</b><br>
Spider can make working on multiple documents easier with the improved function of switching between documents in the order of their use. If you select the option with the above mentioned name in <a href="settings_general.php">Program settings / General</a>, the behavior of the program when using the keyboard shortcut <tt>Ctrl+TAB</tt> and <tt>Shift+Ctrl+TAB</tt> will change. Documents will be switched in the order in which they were last edited, not in the order they were opened (the order in the file name bar). This makes it much easier to switch between two documents far apart on the bar. This mechanism only works when using keyboard shortcuts, not when using the <a href="toolbars_minitoolbar.php">mini toolbar</a> commands!</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="main_editor.php">Editor in source code editing mode</a></li><li><a href="main_editor_wysiwyg.php">Editing in wysiwyg mode</a></li><li><a href="main_tabs_general.php"> Other tabs </a></li><li><a href="main_window_desc.php">Main program window</a></li></ul>
</td>
</tr>
</table>
<!-- pokrewne tematy koniec-->
<p class="prawa"><a href="#top">To top</a></p>


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