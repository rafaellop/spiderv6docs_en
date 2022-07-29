<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">


<!-- nazwa strony pomocy -->
<title>Syntax Scheme Editor</title>

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
<h1>Syntax Scheme Editor</h1>





<!-- tre&#347;&#263; pomocy -->
<p>The syntax scheme editor allows you to create your own coloring schemes. It also allows you to customize existing coloring schemes.</p>

<p><b>NOTE!</b><br>
Changes made with the editor are irreversible. Therefore, when editing the schema, save it to a new file if possible, leaving the original schema unchanged!</p>

<p>The editor window consists of the following areas:</p>

<p><a href="syntax_read_save.php">Scheme selection</a><br>
Allows you to create, open and save coloring schemes.</p>

<p><a href="syntax_blocks_styles_list.php">Syntax blocks, Styles</a><br>
Allows the creation and modification of syntax blocks and style settings. Use the<a href="syntax_style_properties.php">'Style Properties</a>' window to edit and create styles.</p>

<p><b>Settings area</b>:</p><ul>
	<li><a href="syntax_blocks.php">Blocks</a> - general block settings</li>
	<li><a href="syntax_comments.php">Comment</a> - settings for recognising and coloring comments</li>
	<li><a href="syntax_strings.php">Character strings</a> - settings for character strings</li>
	<li><a href="syntax_numbers.php">Numbers</a> - Number coloring settings</li>
	<li><a href="syntax_identifiers.php">Identifiers</a> - identifier coloring settings, definitions of characters allowed in colored keywords</li>
	<li><a href="syntax_keywords.php">Keywords</a> - collections of keywords</li>
</ul>

<p><a href="syntax_preview.php">Preview of the coloring scheme</a><br>
A window for entering text in which you can keep track of syntax coloring changes made to the schema.</p>By default, this window is called up using the keyboard shortcut Ctrl+Shift+F8, from the Tools menu using the button shown opposite, or from the 'program Settings' window.</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="syntax_instruction.php">How to create a coloring scheme? Step-by-step instructions.</a></li><li><a href="settings_editor_syntax.php">Program Settings - Syntax Highlighting</a></li><li><a href="syntax.php">General about syntax coloring in Spider</a></li>
</ul>
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