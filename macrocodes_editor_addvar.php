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
<title>Macro editor - Editing a macro variable</title>

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
<h1>Macro editor - Editing a macro variable</h1>




<!-- tre&#347;&#263; pomocy -->
<p>The variable editing window allows you to enter the name, type, default value, and hide / unhide variables.</p>

<p><b>Variable name</b><br>
Allows you to enter a name for the variable. When re-editing an existing variable, this field is disabled.</p><b> Hidden variable </b> <br>
 Check if the variable is to be marked as hidden. A variable marked as hidden will not appear in the variable inspector in the left pane of the main Spider window. Thanks to this, only those variables whose value should be able to be changed will be available to the user in the inspector. Of course, variables marked as hidden will still be visible in the variable inspector in the "Variables in template" tab.<p>For example - if you create a page template and include graphics that need to be on the page, the user should not be able to change the path to those graphics (because they could provide a path to another file, which would ruin the effect).</p>


<p><b>Variable type</b><br>
The variable type specifies the tool used to select the value of a variable. It allows to avoid errors, if an incorrect value is entered. It also greatly simplifies entering values (for example for a variable of the color type entering values is done with the "Color palette" tool - no need to know color codes).</p>

<p>The following types of variables are available</p><ul>
  <li><b>Color type value</b> - allows you to select a color with the tool.</li>
  <li><b>Class name and class list</b> - if you have CSS sheets in the document you are currently editing, it allows you to select a class. This is very useful when creating HTML documents because it allows you to insert classes into tags without constantly remembering their names.</li>
  <li><b>Date type value</b> - allows you to select a date using a special tool.</li>
  <li><b>Value list</b> - allows you to select one value from those available in the list.</li>
  <li><b>Numeric value</b> - allows you to enter a number, or select it with the up/down arrows.</li>
  <li><b>Document link</b> - allows you to indicate a document. This document will be copied to the location where the document where the template was used is saved. The variable most commonly used to attach style sheets to a page, and so on.</li>
  <li><b> Link to graphics </b> - allows you to select an image. The selected picture will be copied automatically to the place where the document, in which the macro code was used, is saved.</li>
  <li><b>Style type value</b> - allows you to select and set CSS style properties with the tool.</li>
  <li><b>Window list</b> - allows you to select the target window for the link (e.g. <tt>_blank</tt> etc...).</li>
  <li><b>Text type value</b> - allows you to enter text that will be placed in the macro.</li>
  <li><b>Multi-line value</b> - allows you to type multiple lines of text.</li>
</ul>


<p><b>Default value...</b><br>
Depending on the variable type selected, a text box or tool icon will appear here for entering a default value for the variable.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="macrocodes_editor.php">Template Editor - Introduction</a></li><li><a href="macrocodes_editor_vars.php">Template editor - Template Variables tab</a></li><li><a href="macrocodes_editor_blocks.php"> Macro Editor - Macro Blocks </a></li><li><a href="settings_macrocodes.php">Program settings - Templates</a></li><li><a href="main_tabs_macrocodes.php">Template tab</a></li><li><a href="macrocodes.php">Templates - general</a></li></ul>
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