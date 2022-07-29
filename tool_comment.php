<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Comment</title>

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
<h1>Tools - Comment</h1>



<p>This tool is used to create comments in the source code of various languages supported in Spider.</p><p>You launch the Table Row window from the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_text.php">Text</a> / Insert Comment, as well as from the <a href="toolbars_often.php">Frequently Used</a> toolbar. The default keyboard shortcut for the tool is <tt>Shift+Ctrl+K</tt>.</p><h2>Entering a comment</h2>The tool's window consists of a text box for entering a comment and several icons with which you can insert frequently used content into the comment:<p>- creates a comment based on the document information file</p>
<p>- allows you to select a project, and on creates a comment based on information about that project</p>
<p>- inserts the current date and time into a comment</p>
<p>- inserts the name of the current program user into the comments</p>

<p>The tool automatically recognizes the current language and inserts the appropriate comment characters. However, it is possible that several variants of code commenting are available (e.g. in PHP language you can insert <tt>//</tt> at the beginning of each line, or cover the whole text with <tt>/* */</tt> characters). Therefore, it is possible to choose the way of inserting a comment yourself. To do this, select the appropriate item of the submenu available by clicking the arrow to the right of the OK button.</p>

<p>If some text was selected in the editor when the tool was launched, it will automatically be used as comment text. In such a situation, if the text has not yet been changed, just press the <tt>Enter</tt> button so that this text will be covered in the editor with the corresponding comment marks.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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
