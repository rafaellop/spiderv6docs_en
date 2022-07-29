<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">


<!-- nazwa strony pomocy -->
<title>Syntax coloring in Spider</title>

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
<h1>Syntax coloring in Spider</h1>




<!-- tre&#347;&#263; pomocy -->

<p>In source code editing programs, no matter what is the language, syntax coloring is an essential feature. Well-designed syntax coloring makes it significantly easier to find your way around the code.</p>


<p>Spider has more than 40 syntax coloring schemes, optimally tailored to the needs of different users. So there are simpler schemes, coloring only one selected language - e.g. <b>JavaScript</b>, <b>CSS</b>, etc. There are also more advanced schemes that color more languages at once, such as <b>DHTML</b>, which supports <b>HTML</b>, <b>JavaScript</b>, <b>VBScript</b>, <b>CSS</b> simultaneously. Server-side technology languages such as <b>PHP</b>, <b>ASP</b>, <b>ColdFusion</b>, <b>Perl</b>, <b>C</b>, MySQL query coloring and others are also supported.</p>

<p>Users of Spider will certainly be interested in the two coloring schemes:</p><ul>
	<li><b>HTML Categorized</b>, which applies different colors to different types of HTML tags (images in blue, links in red, tables in green, etc.). This makes the code even clearer, making it easier to see where the image you are looking for, for example, is located.</li>
	<li><b>HTML Validator</b>, which is more extensive than other HTML coloring schemes. In addition to making HTML code more readable by highlighting tags and their attributes with different colors, it makes it possible to spot common errors. These errors can relate to undersized tags, invalid attributes or missing inverted commas around attribute values, as well as the extent to which different browsers support the tags. Different types of errors are highlighted in different colors.</li>
</ul>


<p><b>Using coloring schemes on older computers</b><br>
Older computers may have a problem when working with more complex coloring schemes, such as <b>HTML+PHP</b>, as it can put a lot of strain on the editor due to its complexity and size. Therefore, if you are not editing advanced PHP scripts, it is advisable to use, for example, HTML+PHP <b>simple</b> coloring. The same is true for e.g. <b>DHTML</b> script, instead of which you can use <b>HTML+JavaScript</b>, <b>HTML+CSS</b> or <b>HTML+VBScript</b> depending on your current needs. Thanks to the ability to change the coloring scheme at runtime, this does not pose any problems at all.</p>

<h2>Editing syntax coloring</h2>

<p>In Spider, you can create new and edit existing coloring schemes. This is done using the color <a href="syntax_editor.php">Scheme Editor</a>. Please note that changes made to a coloring scheme cannot be undone and this option should be used with caution. It is best to save schemes under a new name, or make a backup copy of existing schemes (files with the *.sch extension)</p>You can also adjust the colors of an existing schema using the <a href="settings_editor_syntax.php">program Settings - Syntax coloring</a> window.<h2>Using schemas when working with a program</h2>



<p>Spider automatically recognises which coloring scheme to use for a given document after extending the file name. You can change the setting of the default coloring scheme for a given type in the <a href="settings_editor_syntax.php">Program Settings - Syntax color</a> ing / Highlighting <a href="settings_editor_syntax_properties.php">scheme properties</a> window. Spider also remembers which coloring scheme was used when the document in question was closed, and this will be applied the next time the document is opened.</p>

<p><b>Changing the highlighting scheme during operation</b><br>
In Spider, it is possible to change the coloring scheme used to edit the selected document without interrupting your work! To do this, use the <b>Select syntax</b> coloring scheme command on the mini toolbar on the left-hand side of the editor, which will expand the list of all available schemes.</p>




</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="syntax_editor.php">Highlighting scheme editor</a></li><li><a href="syntax_instruction.php">How to create a coloring scheme? Step-by-step instructions.</a></li><li><a href="settings_editor_syntax.php">Program Settings - Syntax Highlighting</a></li></ul>
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