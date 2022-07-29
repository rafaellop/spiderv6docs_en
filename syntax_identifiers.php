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
<title>Highlighting scheme editor - Identifiers</title>

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
<h1>Highlighting scheme editor - Identifiers</h1>

<!-- tre&#347;&#263; pomocy -->

<p>Identifiers are text fragments that only contain characters from the ranges defined as 'First symbol' and 'Other symbols'. These settings also affect the coloring of keywords.</p>

<p><b>Enable identifiers coloring</b><br>
Click to enable coloring of identifiers. Enabling/disabling this option does not affect the coloring of keywords.</p>

<p>The <b>style list</b> allows you to select or create a coloring style to be used for coloring identifiers.</p>

<p><b>First symbol</b><br>
Click if you want to define a range for a character that must occur first in the identifier. For example, a character range including all upper and lower case letters is defined as 'A-Za-z' etc.</p>

<p><b>Other symbols</b><br>
Click if you wish to define a range of symbols that may appear further down in the identifier. See<b>'First symbol</b>' for how to define ranges.</p>

<p><b>NOTE!</b><br>
The first symbol defined here and other symbols also affect the coloring of <a href="syntax_keywords.php">keywords</a>! If a keyword contains a character not defined here, it will not be colored correctly! It is case-sensitive (regardless of the setting of the 'Case-sensitive' option on the<a href="syntax_blocks.php">'Block</a>' tab). For example - if the range 'First symbol' contains 'A-Z' and the keyword starts with a lowercase letter, it will not be colored correctly.</p>

<h2>Special</h2>Select where special characters, i.e. those not defined as 'First symbol' and 'Other symbols', can appear in the identifier. This makes it possible, for example, to color the '$' (dollar) character in PHP language variable names when, at the same time, it cannot appear in <a href="syntax_keywords.php">keywords</a>.<ul>
	<li><p><b>with prefixes</b>
	 - allows you to create and edit a list of special characters immediately before the identifier (without spaces). If you select <b>'with prefixes'</b> (switch under the list), the defined prefixes will be colored.</p></li>

	<li><p><b>with suffixes</b>
		 - allows you to create and edit a list of special characters immediately following the identifier (without spaces). If you select<b>'with suffixes'</b> (switch under the list), the defined suffixes will be colored.</p></li>

	<li><b>both
</b>
		 - allows you to create and edit a list of special character pairs occurring immediately before and after the identifier (without spaces). If you select<b>'with suffixes and prefixes'</b> (switch under the list), the prefixes and suffixes defined will be colored.</li>
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
	<li><a href="syntax_editor.php">Highlighting scheme editor</a></li>
	<li><a href="syntax_keywords.php">Editor for coloring schemes - Keywords</a></li>
	<li><a href="syntax_blocks_styles_list.php">Highlighting scheme editor - Syntax blocks, Styles</a></li>
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