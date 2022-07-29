<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Table of Contents Generator</title>

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
<h1>Tools - Table of Contents Generator</h1>

<p>The table of contents generator allows you to quickly create a title page for an entire site, a chapter index of a single page or even a nice-looking HTML directory.</p>

<p>The tool window consists of three tabs, only one of which can always be active, allowing you to create an inventory:</p><ul>
	<li>List of local links</li>
	<li>List of links to other documents</li>
	<li>List of files</li>
</ul>



<h2>List of local links</h2>

<p>If you select this tab, you will be able to create a list of links to labels in the current document.</p>

<p>Buttons next to the list allow you to remove a link from the list, as well as set or remove the indentation of an item in the list.</p>



<h2>List of links to other documents</h2>

<p>If you select this tab, you will be able to create a list of links to other documents in the current document. In addition to links to documents, the list will also include links to labels in those documents.</p>

<p>Buttons next to the list allow you to remove a link from the list, as well as set or remove the indentation of an item in the list.</p>

<p><b>Target window</b><br>
Selects from the list the browser window in which the links are to be opened.</p><h2>List of files</h2>
<p>The options on this tab allow you to select the files you want to link to in the list.</p>


<p>The main part of the window is the list, which will present the documents and labels in the documents that will be linked to in the table of contents.</p>

<p>The buttons to the right of the list allow you to add and remove items from the list, as well as to indicate the items for which you want to create an indentation in the table of contents. Indentation (list sub-item).</p>

<p><b>Target window</b><br>
Selects from the list the browser window in which the links are to be opened.</p><p><b>File list creation settings</b><br>
The options in this section allow you to choose how the list of table of contents links should be generated.</p>

<ul>
	<li><b>Folder</b><br>Enter the path to the folder whose contents you want to convert to a file list. Using the commands on the right side of the field, you can point to a folder in the window and create a list from its contents.</li>
	<li><b>When creating a list, add instead of from scratch</b><br>Check this switch if you want the file or files to be added to the end of the list after each time you add them. <br>If you want the list to be sorted from scratch after each time you add a file to the list, uncheck this switch.</li>
	<li><b>Title instead of path</b><br>Check this option to show file titles read from <tt>TITLE</tt> tags in the table of contents. If this option is unchecked, the list will show file paths.</li>
	<li><b>Sub-items from labels</b> <br> Check this switch if you want to include labels for each document in the table of contents. These labels will be presented as sub-items in individual documents.</li>
	<li><b>Add only files with extensions</b><br>Select from the list, or enter file name extensions to be included in the list. Extensions should be given in the form of e.g.. <tt>*.php;*.php3;*.php4</tt>.</li>
	<li><b>Add including all subfolders</b><br>Check this option to include files from subfolders of the specified folder when searching for files.</li>
</ul>

<p><b>Allow multiple items to be selected at once</b><br>
Check this switch if you want to be able to point and tab file lists to multiple items at once.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_lists.php">Enumeration list generator</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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