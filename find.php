<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Search in Spider</title>

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
<h1>Search in Spider</h1>


<!-- tre&#347;&#263; pomocy -->

<p>Spider offers various tools for searching and replacing text in documents. Options range from simple text search in an open document to advanced search and replacement of text in specific files of entire projects and selected folders using <a href="find_regexp.php">regular expressions</a>.</p>

<p>Spider offers two specialized tools for text search only, as well as other tools to help you navigate in the code, e.g. to <a href="find_text.php#goto">jump to selected elements of a document</a>, <a href="main_tabs_navigator.php">document navigator</a> (for languages: HTML, CSS, JavaScript, VBScript, PHP, ASP)</p>




<h2>Search, replace, move</h2>

<p><a href="find_text.php">Search, replace, move</a> - used to search for and possibly replace text in the currently edited document. It also allows you to quickly find and move to selected parts of the current document</p>

<p>You can open the tool by using the buttons in the <a href="main_menu_find.php">Search</a> menu, or by using keyboard shortcuts:</p><ul>
  <li><b>Find</b> (<b>Ctrl+F</b>)</li>
  <li><b>Search and replace</b> (<b>Ctrl+R</b>).</li>
</ul>

<p>Using the button shown next to it (located on the <a href="toolbars_often.php">Frequently Used</a> bar), or the keyboard shortcut Ctrl+G, you can launch the tool for jumping to selected parts of the document, which is located in the same window.</p>



<h2>Enhanced search and replace</h2>

<p><a href="find_ext.php"> Extended Search and Replace</a> is a second, much more powerful search tool. It allows you to search and replace text:</p><ul>
  <li>in the currently edited document</li>
  <li>in all open documents</li>
  <li>in the selected folders</li>
  <li>in the selected files</li>
  <li>in the selected projects</li>
</ul>

<p>Using this tool you can use plain text, <a href="find_regexp.php">regular expressions</a> as well as <a href="find_ext.php#wildcards">wildcards</a>.</p>

<p>You can open the tool in different ways:</p>
<ul>
  <li>from the <a href="main_tabs_myservices.php">Projects</a> tab using the buttons: "Search, or Search and Replace" in the menu next to the file list, "Search and Replace in Project" in the project menu<br></li><li>in the <a href="main_menu_find.php">Search</a> menu using the Extended Search + Character Converter button</li><li>with a keyboard shortcut - by default, Ctrl + Shift + R</li></ul><a name="filesearchinfo"></a><h2>Searching for files and directories</h2>

<p>The ability to search files and directories is another search feature. It allows you to find files and directories on your disk that meet certain criteria:</p><ul>
  <li>by name or its fragment</li>
  <li>at the indicated location</li>
  <li>including subfolders</li>
  <li>items specified by the date of modification, creation, or access</li>
  <li>of a certain size (bigger, smaller, equal)</li>
  <li>Only files or files and folders</li>
  <li>additionally among hidden files or not</li>
</ul>

<p>This tool is launched via the <a href="main_menu_find.php">Search</a> menu. The results are presented in the bottom panel on the <a href="down_find_report.php">Search Reports</a> tab. Found files can be opened for editing, and the list of searched items can be displayed in several different ways, such as detailed view or thumbnail view.</p>
</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="main_window_desc.php">Main program window</a></li><li><a href="find_text.php"> Search, replace, move to selected document elements </a></li><li><a href="down_find_report.php">Search Report window</a></li><li><a href="find_regexp.php">Search - regular expressions</a></li><li><a href="main_menu_find.php">Search Menu</a></li><li><a href="main_tabs_navigator.php"> "Navigator" tab </a></li></ul>
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