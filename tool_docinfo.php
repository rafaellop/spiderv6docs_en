<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Tools - Document information</title>

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
<h1>Tools - Document information</h1>

<!-- tre&#347;&#263; pomocy -->

<p>This window presents and allows you to edit a range of information about the indicated document and links to other documents, allows you to manage tasks and bookmarks, presents information about the expected network transfer, etc. Using this window, you can type notes and select the status of the document, which is very useful for group work on a project.</p>

<p><i><b>Note:</b> In Spider.1.0, this window has been extensively redesigned, increasing its readability and functionality, while bringing its appearance closer to that of other program windows.</i></p>




<p>You can launch the Document Information window by using the command marked with the icon shown above located in the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_view.php">Display</a> / Document Information, as well as by using the button shown above located on the mini toolbar (on the left side of the editor).</p><p>You can indicate the document for which information is to be presented and edited in two ways.</p><ol>
  <li>To get information about any document in a project, point to it in the <a href="main_tabs_myservices.php">Projects</a> tab (just click once, no need to open it).</li>
	<li>To get information about the current file open in the editor, just place the cursor on it.</li>
</ol>

<p>Further, the document for which the information will be displayed will be called <i>the current document</i>.</p>

<p>If the tool window is already open, the information will show there automatically. If it is not open, open it.</p>

<p>The window can be open all the time - it does not block the program's work. If you temporarily do not need it, you can collapse it to the title bar by clicking on the icon next to the window closing icon (on the title bar). By clicking on this icon again, you can expand the window.</p>

<p>The contents of the window are placed in five tabs:</p>

<ul>
	<li><a href="#general1">Basic information</a></li>
   <li><a href="#general2">Statistics</a></li>
	<li><a href="#transfer">Transfer</a></li>
	<li><a href="#bookmark">Bookmarks</a></li>
	<li><a href="#todotasks">Tasks</a></li>
</ul><a name="general1"></a><h2>Basic information</h2>

<p><b>File:</b><br>
Shows the path and name of the file for which information is presented.</p>



<p><b>Preview document</b><br>

Shows the preview document. This is the document that will be displayed if you want to view the current document in the browser. this is useful when the current document is, for example, a script attached to other documents, and does not display any data on its own (e.g. a JavaScript <tt>*.js</tt> file). Use the buttons on the right to select or remove the preview document assignment.</p><p><b>Status</b><br>
Select the document status from the list. The following items are available:</p>

<ul>
	<li>undefined</li>
	<li>project</li>
	<li>first changes</li>
	<li>second changes</li>
	<li>third changes</li>
	<li>alpha version</li>
	<li>beta version</li>
	<li>final version</li>
</ul>


<p><b>Author of the document</b><br>
If you have indicated a document in the file list of the Projects tab, it displays the name of the user who last saved the current document (you can enter your user name in the <a href="settings_user.php">Program Settings - User</a> window).<br>
If you have pointed to the document in the editor window, it will display here the information <i><tt>during editing</tt></i></p>

<p><b>Notes</b><br>
The text box allows you to enter notes about the document (e.g. information for other users, etc.). You can use the buttons to the right to automatically insert a note:</p>

<p>- current date and time</p>
<p>- the name of the current user of the program</p>



<p><b>Editor options</b><br>
Below the note test box are several options related to the display of the document in the editor window.</p>

<ul>
	<li><b>line wrapping</b> - select if you want to wrap lines in the document that do not fit on one lines</li>
	<li><b>show line numbers</b> - check if line numbers are to be shown on the gutter on the right side of the editor window</li>
	<li><b>show special characters</b> - check if you want to show special characters in the editor window, such as tab, end-of-line character, etc.</li>
	<li><b>highlighting</b> - select from the list the coloring scheme to be applied to the current document</li>
	<li><b>forced encoding</b> - select from the list the national character encoding to be used for this document when reading and writing (regardless of the encoding set for the project or globally for the entire program, and even in the META section of this document) .</li>
	<li><b>line breaks</b> - select how to encode the end-of-line characters from the list (there are three encoding styles available: CRLF (DOS/Windows), CR (Mac), and LF (Unix)).</li>
	<li>Document language - select from the list the markup language that will be used by default to create the document. In this way you can change the behavior of the program specified in the <b>Program Settings</b> and <b>Project Properties</b> window. This setting will be used when recognition of the document type using standard methods (DOCTYPE, xlmns) is not possible. The list contains the names of all categories (all markup languages) supported by Spider. You can change the contents of the list (add and remove languages, as well as modify their settings) using the <a href="tagdata_editor_tdf.php">TDF Editor</a>.</li>
</ul>

<p><b>Forced includes</b><br>

Click this button to launch a window used to select files to be analyzed by Spider for various hint mechanisms. For more on this topic, read <a href="service_properites.php#virtual_include">Project Properties Window</a>


<a name="general2"></a></p><h2>Statistics</h2>

<p>This tab provides detailed information about the current document divided into three groups:</p>

<p><b>General information about the document</b><br>
Contains a list of the following information:</p><ul>
	<li><b>Document title</b> - the contents of the <tt>&amp;lt;TITLE&amp;gt;</tt> ...<tt>&amp;lt;/TITLE&amp;gt;</tt>,</li>
	<li><b>Author</b> content of the tag specifying the author in the <a href="tool_meta.php">META section ) </a></li>
	<li><b>Document description</b> - the content of the tag describing the content of the document in the <a href="tool_meta.php">META section </a>. </li>
	<li><b>Creation date</b> - the date the file was last saved</li>
	<li><b>File name</b> on disk</li>
	<li><b>File size</b> on disk</li>
	<li><b>Code page</b> used for national character encoding specified in <a href="tool_meta.php">META section </a></li><base><li><b>Keywords</b> provided in the <a href="tool_meta.php">META section </a></li>
	<li><b>Base document</b> - the document indicated in the <tt>BASE</tt> tag, relative paths in the document will be relative to it,</li>
	<li><b>Style sheet</b> - the name of the external file with style sheets (if included)</li>
	<li><b>Number of lines</b> in the document</li>
	<li><b>Number of words</b> in the document.</li>
	<li><b>Number of characters in words</b> in the document.</li>
</ul>The presented word and character counts in words do not apply to the content of HTML tags, but only to the text displayed by the browser. More precisely, the function that counts words and characters ignores everything contained between the <tt>&amp;lt;</tt> and <tt>&amp;gt;</tt> characters, is intended only to provide an estimate of the volume of text in HTML files - for other types of documents the data may not be correct.<p><b>Information on links to other documents (repetitions eliminated)</b><br></p><ul>
	<li><b>Labels in the document</b> - number of labels in the document</li>
	<li><b>Label references</b> - number of <b>label</b> references in the same document</li>
	<li><b>Links to local</b> - number of links to documents in the same project (relative paths)</li>
	<li><b>Links to remote</b> - the number of links to documents on the Web</li>
</ul><b>Information about other files in the document and links to them</b><ul>
	<li><b>Embedded images</b> - number of images embedded in the document, separately remote and local</li>
	<li><b>Embedded sounds</b> - number of embedded sound files in the document, remote and local separately</li>
	<li><b>Other embedded files</b> - the number of other files embedded in the document (e.g. scripts, etc.)</li>
</ul><a name="transfer"></a><h2>Transfer</h2>

<p>The top tab contains the names and sizes of the files attached to the document. Below that is the information:</p>

<p><b>Document size with elements</b><br>
Presents file size information -</p><ul>
	<li>Document</li>
	<li>Embedded files</li>
	<li>Total</li>
</ul>

<p><b>Predicted loading time
</b>
Presents information on also predicted transfer times at various standard transmission speeds:</p><ul>
	<li>modem 28,800</li>
	<li>modem 33,600</li>
	<li>modem 56.600</li>
</ul><a name="bookmark"></a><h2>Bookmarks</h2>

<p>The options on this tab allow you to manage <a href="main_editor_bookmarks.php"> bookmarks in a document </a> . The window contains a menu and a list of tabs.</p>

<p><b>Set a numbered bookmark</b> <br>
Click to insert a numbered bookmark with the first free number in the current line of the document. You can also use the arrow on the right to insert a bookmark of any number.</p><b>Setting up a named bookmark</b><br>
Click to insert a named bookmark in the current line of the document.<p><b> Rename a named bookmark </b> <br>
 Click to rename the bookmark indicated in the list (named bookmarks only).</p><b>Go to the selected bookmark</b><br>
Click to go to the bookmark indicated in the list.<p><b>Delete a selected bookmark</b><br>
Click to delete the bookmark indicated in the list.</p>

<p><b>Alphabetical sorting</b><br>
Click to sort the bookmarks in the list by alphabetical order.</p>

<p><b>Sorting by order of appearance in the document</b><br>
Click to sort the bookmarks in the list by the order in which they appear in the document.</p>

<p><b>Help</b><br>
This opens a help window.</p>

<p>Renaming, adding, deleting and moving to bookmarks is possible only for documents opened in the editor. If you have indicated the current document in the file list, you will be hinted to open it.</p>

<p>To go to a place in the document marked with a bookmark, double-click on it in the list.</p><a name="todotasks"></a><h2>Tasks</h2>

<p>The options in this tab allow you to manage <a href="main_editor_todotasks.php">to-do tasks</a> in a document. The window contains a menu and a list of tasks along with basic data about the task.</p>

<p>You can select tasks in the list (to the left of the name). This has no effect on the operation of the tasks, but with this option you can, for example, mark tasks you have already done, etc.</p>

<p><b>Adding a new task</b><br>
Click to add in the current line of the document a task to be performed.</p>

<p><b>Deleting a selected task</b><br>
Click to delete the task indicated in the list.</p>

<p><b>Modification of the selected task</b><br>
Click to modify the name, content, or priority of the task.</p>The next five commands are used to sort tasks by:<ul>
	<li><b>alphabetical order</b> of task names</li>
	<li><b>priority</b> of a task (1- highest, 10-lowest)</li>
	<li><b>author</b> of the task (alphabetically)</li>
	<li><b>task creation date</b></li>
	<li><b>selection</b> to the left of the task name</li>
</ul>

<p><b>Help</b><br>
Displays this help window.</p>


<p>The task list contains the following columns:</p>

<ul>
	<li><b>Task name</b> (and a switch)</li>
	<li><b>Priority</b></li>
	<li><b>Added</b> - author of the task</li>
	<li><b>Task creation date</b></li>
</ul>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_editor_bookmarks.php">Bookmarks in documents - in general</a></li><li><a href="main_editor_todotasks.php">Tasks to do - general</a></li><li><a href="main_editor_general.php">Working with the editor - in general</a></li></ul>
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
