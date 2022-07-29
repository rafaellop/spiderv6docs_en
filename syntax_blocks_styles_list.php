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
<title>Highlighting scheme editor - Syntax blocks, Styles</title>

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
<h1>Highlighting scheme editor - Syntax blocks, Styles</h1>


<!-- tre&#347;&#263; pomocy -->

<p>On the left-hand side of the 'Highlighting Scheme Editor' window, there are two tabs that list the available blocks and styles.</p>

<h2>Syntax blocks</h2>
<p>The coloring scheme is divided into individual units - syntax blocks. In each block, different ways of coloring particular types of code can be defined, for example, different programming languages in a single schema.</p>
<p>Blocks in the list can be added, removed and positioned (by dragging) in the correct order, as well as nesting one block within another.</p>

<p><b>Add block</b><br>
Click to add a new block. In the 'New syntax block...' window that appears when you click this icon, you can enter the name of the block, as well as the parent block in which the new block will be placed.</p>

<p><b>Remove block</b><br>
Click to delete a block</p><b>Edit block</b><br>
Click to add rename or reposition the block. In the 'Edit syntax block...' window that appears when you click this icon, you can enter a new block name, and also change the parent block, for the block you are editing.<p><b>Copy a block from another scheme</b><br>
It is also possible to copy blocks from another coloring scheme. When you click on this icon, a window will open in which you can indicate the file from which you want to copy the block. The template files have names of type *.mcd.</p>Once the file has been selected, the 'Import block from another scheme' window will open. It is divided into two parts:<ul>
	<li><b>Imported block</b> - list of blocks existing in the schema from which you wish to copy the block. Select the block to be copied.</li>
	<li><b>Where to insert</b> - list of blocks in the currently edited schema. Indicate the block that is to be the parent block for the block to be copied.</li>
</ul>
<p>When copying a block, the styles used in the block are also copied.</p>



<h2>Styles</h2>
<p>Styles determine how text is colored and formatted. They are used in coloring settings for individual <a href="syntax_identifiers.php">identifiers</a>, <a href="syntax_keywords.php">keywords</a>, etc. It is possible to select the color of the font and background, and to set the style of the text (bold, italic, etc.).</p>

<p><b>Add style</b><br>
Click to create a new style.</p>

<p><b>Delete selected style</b><br>
Click to remove the selected style from the coloring scheme.</p><b>Edit style</b><br>
Click to edit the style. To edit a style, use the<a href="syntax_style_properties.php">'Style properties</a>' window</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="syntax_editor.php">Highlighting scheme editor</a></li>
	<li><a href="syntax_identifiers.php">Editor for coloring schemes - Identifiers</a></li>
	<li><a href="syntax_keywords.php">Editor for coloring schemes - Keywords</a></li><br><li><a href="syntax_style_properties.php">Highlighting scheme editor - Style properties</a></li>
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