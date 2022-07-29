<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Coloring Scheme Editor - Blocks</title>

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
<h1>Coloring Scheme Editor - Blocks</h1>

<!-- tre&#347;&#263; pomocy -->


<p>A block is a piece of edited code with defined properties (e.g. code in a particular scripting language, HTML tag content, etc.). Each block has separate coloring settings. However, it is possible to use the same coloring styles together in different blocks.</p>


<h2>Block separators</h2>

<p>Block separators mark the beginning and end of a given block in the code. Examples of separators for the HTML DIV tag are '&amp;lt;DIV' (left) and '&amp;gt;' (right).</p>
<p><b>Edit separators.</b><br>
When you click on the 'Edit separators' icon, a window will open where you can specify the right and left separators.</p>

<ul>
	<li><p><b>Separators are part of the block</b><br>
Check this option if you want the separators to be colored according to the settings of the block in question. Otherwise, the default settings of the schema in question, or of the parent block (if the block in question is nested within another), apply.</p></li>
</ul>


<h2>Block options</h2>

<p><b>Case sensitive</b><br>
Check this option if you want the lower/upper case letters used in Keywords to be recognized.</p>

<p align="left" name="metasymbol"><b>Use metasymbols</b><br>
Check this option if you want to define a character that will have a special meaning while checking the option:<br></p><ul>
	<li><p><b>...as an escape character (escape char)</b> - overrides the end-of-string character, which is used in various programming languages to insert this character as part of a string (e.g. the \ character in PHP).</p></li>
	<li><p><b>...to wrap long lines</b> - forces a line break in the editor when a metasymbol is encountered.</p></li>
</ul>


<h2>Style and highlighting scheme</h2>

<p><b>Text style</b> - allows you to select the coloring style to be used to color the plain text in the block. Plain text is anything not defined as a comment, string, number, identifier or keyword. You can also create a new style that will automatically be assigned to plain text.</p>

<p><b>Color the symbols</b><br>
Check this option if you want to select or create a coloring style for the symbols predefined in the program (characters ().={}[] etc.).</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="syntax_editor.php">Highlighting scheme editor - the beginning.</a></li>
	<li><a href="syntax_blocks_styles_list.php">Highlighting scheme editor - Syntax blocks, Styles</a></li>
	<li><a href="syntax_keywords.php">Editor for coloring schemes - Keywords</a></li>
	<li><a href="syntax_strings.php">Highlighting scheme editor - Character strings</a></li>
	<li><a href="syntax.php">General about syntax coloring in Spider</a></li><li>
</li></ul>
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