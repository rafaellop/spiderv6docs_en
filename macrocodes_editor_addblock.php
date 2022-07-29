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
<title>Template Editor - Edit Template Block</title>

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
<h1>Template Editor - Edit Template Block</h1>


<!-- tre&#347;&#263; pomocy -->

<p>The template block editing window allows you to edit the text placed in the block, as well as create and insert variables.</p>
<p>Nesting of blocks is also possible, but you cannot nest a block within itself. You cannot create new blocks in this window - the block whose call you want to place in the body of the edited block must already exist in the macro.</p>

<p><b> Name </b> <br>
 Enter a name for the block to be created.</p>

<p><b>Variables</b><br>
You can select from the list the variable whose call you want to place in the body of the block.</p>

<p><b>Adding a new variable</b><br>
Click to create a new variable (this only adds the variable, but does not automatically insert it into the macro's content). To create new variables and edit existing variables, use the <a href="macrocodes_editor_addvar.php">Edit Template Variable</a> window.</p>

<p><b>Inserting the selected variable</b><br>
Click to insert a variable call in the macro. When the macro is used, the value of the variable is substituted in place of the call.</p>

<p><b>Blocks</b><br>
You can select from the list the block whose invocation you want to include in the body of the block you are editing.</p>

<p><b> Insert selected block </b> <br>
 Click to insert in the body a call of the block selected in the list.</p>

<p><b>Template block content</b><br>
In the text box, enter the text that will be the body of the template block.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="macrocodes_editor.php">Template Editor - Introduction</a></li><li><a href="macrocodes_editor_blocks.php"> Macro editor - Blocks used in macro tab </a></li><li><a href="macrocodes_editor_vars.php"> Template editor - Template Variables tab </a></li><li><a href="settings_macrocodes.php">Program settings - Templates</a></li><li><a href="main_tabs_macrocodes.php">Template tab</a></li><li><a href="macrocodes.php">Templates - general</a></li></ul>
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