<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Program settings - Syntax highlighting</title>

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
<h1>Program settings - Syntax highlighting</h1>

<!-- tre&#347;&#263; pomocy -->
<p>A category called "Syntax Highlighting" allows you to customize the syntax highlighting in documents edited in Spider.</p><h2>Coloring scheme settings</h2>

<p>This window allows you to customize the individual coloring schemes to your own needs and preferences. To adjust the properties of a schema, select it from the list and then use the buttons on the right side of the list:</p>

<p><b>Features of the coloring scheme</b><br>
Click to open the Highlighting <a href="settings_editor_syntax_properties.php">Scheme Properties</a> window for changing the settings of the coloring scheme selected from the list.
It is possible to adjust the colors and text styles, as well as the file name extensions for which the highlighting scheme will be used by default and to assign the scheme to a group of highlighting schemes.</p>



<p><b>Set the scheme as the default</b><br>
Click to select the schema data as the default for new documents.</p>
<p>After saving the document, the Spider will try to change the default coloring scheme to the one that best suits the given type of document. For this purpose, the file name extensions assigned to the coloring schemes and the name extension of a given document will be taken into account.</p>



<p><b>Edit coloring scheme</b><br>
Click to open the<a href="syntax_editor.php">'Highlighting scheme editor</a>'. This tool allows you to create new and edit existing coloring schemes. Changes made with the 'Highlighting Scheme Editor' are irreversible, so it is recommended to save the changes in a new file while leaving the original scheme unchanged!</p>

<p><b>Always use the default scheme regardless of the extension</b><br>
Check if you want the program to always apply only the default highlighting scheme to all documents opened and created, regardless of their extension and the highlighting scheme assigned to it in the list.</p>

<p><b>Display grouped schemes</b><br>
If you enable this switch, the coloring schemes in the scheme list in the main window (on the <a href="toolbars_minitoolbar.php">mini button bar</a> and in the <a href="main_menu_editor.php">editor's pop-up menu</a>) of the program will be displayed grouped according to the types selected for the coloring schemes.</p><h2>Bracket highlighting</h2>By highlighting the corresponding pairs of brackets, you can easily see where the beginning and end of the current block of code that is enclosed by the parentheses (e.g. a loop in a PHP script) is. The options collected here allow you to define which brackets will be colored (you can unbend each of the four pairs: (), {}, []  ), as well as select the background color and the color of characters for the brackets. You can also turn off brace highlighting in your code.</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings.php#settingslist">Other settings</a></li><li><a href="settings_editor_syntax_properties.php">Highlighting scheme properties</a></li><li><a href="syntax_editor.php"> Syntax coloring editor</a></li><li><a href="syntax.php">General about syntax coloring in Spider</a></li></ul>
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