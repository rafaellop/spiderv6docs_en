<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Main Menu - File</title>

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
<h1>Main Menu - File</h1>


<!-- Tre&#347;&#263; pomocy -->

<p>The "File" menu is used to perform basic document and program operations, such as opening, closing, saving or printing. The following commands are available:</p>

<p><b><a href="main_menu_file_new.php">New document</a></b><br>
Click to create a new, blank document. By clicking on the arrow on the right, you can use the submenu to launch additional tools.</p>

<hr>


<p><b>Open</b><br>
Click to open an existing document. <br>
By clicking on the arrow on the right, you can access a list of recently opened documents. By default there are 10 items, but you can change this using the options in the <a href="settings.php">Program Settings</a> / <a href="settings_history.php">History</a> window.<br>
 Clicking on the last item in the list ('<b>Open all from MRU list</b>') will open all files in the list.</p>

<p><b><a href="tool_open_remote.php">Open from the web</a></b><br>
Click to open a document from the Web using a dedicated tool.</p>

<hr>

<p><b><a href="tool_open_remote.php">Reopen the current</a></b><br>
Click to close and reopen the current document. If changes have been made to the document and have not been saved, you will be asked whether to save them. This function is useful if changes have been made to files outside of Spider.</p>

<p><b><a href="tool_open_remote.php">Reopen all</a></b><br>
As above, for all documents opened in Spider</p>

<hr>

<p><b><a href="tool_importer.php">Import...</a></b><br>
Click to open the File importer.</p><b>Export...</b><br>
Click to export the file to the desired format: <b>HTML</b> or <b>RTF</b> (Rich Text Format). Exporting involves saving the document in such a way that the layout and syntax coloring are presented in the Spider editor. This significantly helps to prepare code listings for printing, etc.<hr>


<p><b>Save</b><br>
Click to save the current document.</p>


<p><b>Save as...</b><br>
Click to save the current document under a new name.</p>


<p><b>Save all</b><br>
Click to quickly save all open documents.</p>


<p><b>Publish current online</b><br>
Click to publish the current document on the web. <a href="network_publishing_general.php#publish_current">Read more about the advanced capabilities of this command</a>.</p>


<p><b>Publish openly on the web</b><br>
Click to publish all open documents to the web. <a href="network_publishing_general.php#publish_current">Read more about the advanced capabilities of this command</a>.</p>

<hr>

<p><b>Rename the current</b><br>
Click to rename the current file. The file name will be changed both on the hard disk and in the editor.</p>


<p><b>Renaming multiple files</b><br>
This command launches the <a href="tool_chameleon.php">Chameleon file ren</a> aming tool and allows files in multiple folders to be renamed at once using set rules.</p><hr>

<p><a href="find_ext.php"> Extended search + character converter</a><br>
Launches Spider's most powerful search and replace tool. Using "Extended Search and Replace", you can search and replace text in the current document, all open documents, in all or specific project documents or selected folders, change the character encoding in them, as well as spell check, etc.</p>

<p><a href="find.php#filesearchinfo"> Searching for files and directories</a><br>
Displays the file and directory search window on the <a href="down_find_report.php">bottom panel of the program</a>.</p>

<hr>

<p><b>Close document</b><br>
Click to close the current document. If there are unsaved changes to the document, the program will ask if you want to save it.</p>


<p><b>Close all documents</b><br>
Click to close all documents open in Spider. If there are unsaved changes in any document, the program will ask whether to save it.</p><hr>


<p><b>Delete the current document</b><br>
Click to delete the document currently being edited in the editor. The <a href="main_editor_addfiles.php">additional document information file (<tt>*.add</tt></a>) will be deleted along with the deleted <a href="main_editor_addfiles.php">document</a>. Its <a href="main_editor_backups.php">backup copy (*</a>. <a href="main_editor_backups.php"> <tt>bak</tt></a> file) will not be deleted! </p><hr>


<p><b>Printer settings</b><br>
Click to open the printer settings window.</p><p><b>Print...</b><br>
Click to open the print window.</p><hr>

<p><b>Exit</b><br>
Click to exit the program. All documents will be closed. If you have unsaved changes in a document, asks if you want to save it.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="settings_toolbars.php">Program Settings - Toolbars, menu, and shortcut settings</a></li></ul></td>
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
