<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Bookmarks in a document</title>

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
<h1>Bookmarks in a document</h1>

<!-- tre&#347;&#263; pomocy -->

<p>Bookmarks allow you to mark important places to which you will come back more often. After you bookmark the selected row, its icon will appear on the <a href="main_editor.php#gutter"> gutter </a> on the left side of the editor.</p>

<p>Bookmarks are assigned to the place where they are set. If you insert additional lines above the line marked with the bookmark, the bookmark will move the same number of lines down so that it marks the same place all the time.</p>

<p>Spider allows you to create two types of bookmarks:</p><ul>
	<li><a href="#numbered">Numbered bookmarks</a></li>
	<li><a href="#named">Named Bookmarks</a></li>
</ul><a name="numbered"></a><h2>Numbered bookmarks</h2>

<p>It is possible to create up to 10 numbered tabs in each document. Particular tabs are marked on the gutter with a number from (tab number '0') to (tab number '9').</p>

<p>Using the gutter menu (left click on it) you can set and delete bookmarks with the selected number, as well as navigate to the selected bookmark. You can also quickly set the first free bookmark (keyboard shortcut Ctrl+K).</p><a name="named"></a><h2>Named bookmarks</h2>

<p>It is possible to create an unlimited number of named bookmarks in each document. Even on one line, you can set more than one tab. Individual named tabs are marked on the gutter with an icon with the letter 'A' -.</p>

<p>Similar to numbered bookmarks, named tabs can be set and deleted using the gutter menu.</p>



<h2>Navigating a document using bookmarks</h2>

<p>You can navigate to a selected bookmark in several ways:</p>

<ul>
	<li>using the commands in the <a href="main_editor.php#gutter">gutter menu</a></li>
	<li>using <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_edit.php">Edit</a> / <a href="main_menu_edit_bookmarks.php">Bookmarks in document</a></li>
	<li>using the <a href="tool_docinfo.php#bookmark">Document Information / Document Tabs</a>window</li>
	<li>using the <a href="find_text.php#goto">Search, Replace, Move</a> window (standard shortcut <tt>Ctrl+G</tt>)</li>
	<li>using any <a href="main_tabs_navigator.php">Document Navigator</a></li>
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
	<li><a href="tool_docinfo.php#bookmark">document information - bookmarks</a></li><li><a href="main_editor.php">Editor - source code editing mode</a></li><li><a href="main_editor_todotasks.php">Tasks to do</a></li><li><a href="main_editor_navigation.php">Different ways to navigate a document</a></li></ul>
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