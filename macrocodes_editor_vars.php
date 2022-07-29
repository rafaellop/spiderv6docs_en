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
<title>Template Editor - Macro Variables tab</title>

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
<h1>Template Editor - Macro Variables tab</h1>




<!-- tre&#347;&#263; pomocy -->

<p>Template variables store values that will be used when inserting macro code into a document, as well as when creating a macro code preview.</p>

<p>The window in the Variables tab of the macro is divided into two parts - the Variables inspector and the menu.</p>

<p><b>Template Variable Inspector.</b><br>
Using the inspector, you can assign a variable the default value it will have when working with the finished template.</p>

<p>The bullet next to the variable name tells you:</p><table border="0">
<tr>
  <td></td>
  <td>- variable will be hidden,</td>
</tr>
<tr>
  <td></td>
  <td>- variable will not be hidden</td>
</tr>
</table>


<p><b>Adding a new variable</b><br>
Click if you want to add a new variable. Use the <a href="macrocodes_editor_addvar.php">Edit Template Variable</a> window to create new variables and edit existing variables.</p>

<p><b>Rename selected variable</b><br>
Click if you want to change the name of the selected variable.</p>

<p><b> Hide or unhide the selected variable </b> <br>
 Click if you want to hide / unhide the selected variable. A variable marked as hidden (red ball next to its name) will not appear in the variable inspector in the left pane of the main Spider window. Thanks to this, only those variables whose value should be able to be changed will be available to the user in the inspector. Of course, variables marked as hidden will still be visible in the variable inspector in the "Variables in template" tab.</p>
<p>For example - if you create a page template and include graphics that need to be on the page, the user should not be able to change the path to those graphics (because they could provide a path to another file, which would ruin the effect).</p>

<p><b>Modification of a variable</b><br>
Click if you want to edit a variable (change the variable type, but also the name, default value, or hide it). Use the <a href="macrocodes_editor_addvar.php">Edit Template Variable</a> window to create new variables and edit existing variables.</p>

<p><b>Deleting the selected variable</b><br>
Click if you want to delete the selected variable. Deleting a variable does not remove its calls from the macro code - this must be done manually. If you do not remove them, when you save the macro code, Spider asks you whether to do it automatically.</p>

<p><b>Deleting all variables</b><br>
Click if you want to delete all variables. Deleting variables does not remove their calls from the macro code - you must do this manually. If you do not remove them, when you save the macro, Spider will ask you whether to do it automatically.</p>

<p><b>Move item up/down</b><br>
Click to move the variable up/down in the variable inspector.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="macrocodes_editor.php">Template Editor - Introduction</a></li><li><a href="macrocodes_editor_addvar.php">Template Editor - Edit Template Variable</a></li><li><a href="macrocodes_editor_blocks.php"> Macro editor - Blocks used in macro tab </a></li><li><a href="macrocodes_editor_vars.php"> Template editor - Template Variables tab </a></li><li><a href="settings_macrocodes.php">Program settings - Templates</a></li><li><a href="main_tabs_macrocodes.php">Template tab</a></li><li><a href="macrocodes.php">Templates - general</a></li></ul>
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