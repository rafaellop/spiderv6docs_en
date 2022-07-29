<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>The main window of the program</title>

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
<h1>The main window of the program</h1>

<p>The main Spider window consists of several main parts:</p>



<p><b><a href="main_menu_main.php">Main menu</a></b><br>
Contains a number of menus that make all the program's tools available.</p><p><b>Left resource panel</b><br>
You can display the left resource panel using the command in the <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_view.php">Display</a> / <a href="main_menu_view_view.php">View</a>, as well as using the standard keyboard shortcut <tt>F9</tt>.</p><p>Includes tabs:</p>
<ul>
  <li><a href="main_tabs_myservices.php">Projects</a> - manages <a href="services_general.php">projects</a></li>
  <li><a href="main_tabs_inspector_tags.php">Tag Inspector</a> - for creating and editing tags in markup languages</li>
  <li><a href="main_tabs_inspector_css.php">CSS Inspector</a> - used to create and edit CSS style sheets</li>
  <li><a href="main_tabs_macrocodes.php">Templates</a> - used to create, edit and use <a href="macrocodes.php">templates</li>
</ul>


<p><b>Center panel</b> <br>
 The center panel is displayed all the time and you cannot turn it off. Includes tabs:</p>
<ul>
	<li><b>Editor</b> - includes editor in <a href="main_editor.php">text mode</a> and in <a href="main_editor_wysiwyg.php">visual mode (wysiwyg)</a></li>
	<li><a href="main_preview_general.php">Browse</a> - to view the document being created in the web browser window.</li>
</ul>


<p><b>Right resource panel</b><br>
You can display the right-hand resource panel using the command in the <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_view.php">Display</a> / <a href="main_menu_view_view.php">View</a>, as well as using the standard keyboard shortcut <tt>Ctrl+F9</tt>.</p><p>Includes tabs:</p>
<ul>
  <li><a href="main_tabs_myftpservers.php">Servers</a> - used to publish documents on the Web </li>
  <li><a href="main_tabs_inspector_mysql.php">MySQL Inspector</a> - used to work with MySQL database servers</li>
  <li><a href="main_tabs_navigator.php">Navigator</a> - contains navigators for documents created in HTML and other languages </li>
  <li><a href="main_tabs_languages.php">Programming languages</a> - contains a set of definitions for several programming languages </li>
</ul>

<p><b>Bottom results panel</b><br>
You can display the bottom panel using the command in the <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_view.php">Display</a> / <a href="main_menu_view_view.php">View</a>, as well as using the standard keyboard shortcut <tt>Alt+F9</tt>.</p><p>Includes tabs:</p>
<ul>
	<li><a href="down_links_verify.php">Links</a> - displays reports after a link validation operation</li>
	<li><a href="down_syntax_check.php">Syntax</a> - displays reports after syntax validation operation of documents</li>
	<li><a href="down_integrity.php">Consistency</a> - displays reports after performing a project consistency check operation</li>
	<li><a href="down_find_report.php">Search</a> - displays reports after a search or spell check operation.</li>
	<li><a href="down_publishing.php">Publishing</a> - it lists files to be published (FTP and sync queue) and reports on publish operations.</li>
	<li><a href="down_help.php">Help</a> - contains various help topics for the program and programming languages supported by Spider</li>
</ul>



<p><b>Toolbars</b><br>
The program's main window can also display a number of <a href="toolbars_general.php">toolbars</a> containing commands that activate various tools.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%">

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