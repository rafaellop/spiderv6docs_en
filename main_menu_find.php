<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Main menu - Search</title>

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
<h1>Main menu - Search</h1>

<!-- tre&#347;&#263; pomocy -->

<p>The Search menu is used for searching and replacing text in documents opened in the program, as well as saved on the disk. The following items are available:</p><p><a href="find_text.php#find"> Find</a> <br>
Launches the search tool for the currently open document . Standard keyboard shortcut Ctrl+F.</p>

<p><a href="find_text.php#find">Find another</a><br>
Finds the next occurrence in the current document of the text previously searched for using the Search tool. It works in the same way as when the Find button is pressed again in the Search tool. Standard keyboard shortcut F3.</p>

<p><a href="find_text.php#replace">Search and replace</a> <br>
Launches the tool for replacing text in the currently open document . Standard keyboard shortcut Ctrl+R.</p>

<p><a href="find_text.php#goto"> Go to</a> <br>
Launches a tool that allows you to quickly move to a selected section of a document. Standard keyboard shortcut Ctrl+G. At the same time, a submenu is assigned to this command that allows you to move within the document between tags, selectors, brackets, as well as numeric and text tabs. A description of all these commands can be found in the help topic for the <a href="main_menu_tools_navigation.php">Tools / Document Navigation menu</a>.</p>


<p><a href="find_ext.php"> Extended search + character converter</a><br>
Launches Spider's most powerful search and replace tool. Using "Extended Search and Replace", you can search and replace text in the current document, all open documents, in all or specific project documents or selected folders, change the character encoding in them, as well as spell check, etc.</p>

<p><a href="find.php#filesearchinfo"> Searching for files and directories</a><br>
Displays the file and directory search window on the <a href="down_find_report.php">bottom panel of the program</a>.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="find.php">Search using Spider</a></li><li><a href="find_text.php">Searching, replacing, moving to selected elements of a document</a></li><li><a href="down_find_report.php">Search Report Window</a></li><li><a href="find_regexp.php">Search - regular expressions</a></li><li><a href="main_menu_main.php">Other main menus</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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
