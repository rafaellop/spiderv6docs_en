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
<title>Template editor - right side, middle, left side of macro code</title>

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
<h1>Template editor - right side, middle, left side of macro code</h1>

<!-- tre&#347;&#263; pomocy -->

<p>Below the part with macro code settings there are tabs in which the contents of the macro code will be created.</p>

<h2>Meaning of the left, middle and right parts of the template</h2>

<p>The first three tabs named "Left side of macro code", "Middle macro code" and "Right side of macro code" contain windows in which the main contents of the macro code will be entered. The windows are identical, but have different meanings when using template.</p>

<p><b> The left part of the macro code </b> - depending on the option selected when inserting:</p><ul>
   <li><b> Insert macro code at cursor position </b> , or <b> Insert macro code without center </b> - will be inserted on the left side of the cursor or selected in the text editor,</li>
   <li><b>Insert template with left part to HEAD</b> - it will be inserted into the HEAD section of the HTML document. If the document into which the template is inserted does not have a HEAD section, it will be created,</li>
   <li><b>Create a new document from the template</b> - it will be inserted first into the document.</li>
</ul>


<p></p><b>The middle part of the template</b> - depending on the option selected during insertion:<ul>
   <li><b> Insert macro at cursor position </b> - it will be inserted after the cursor. If text was selected in the editor, it will be overwritten by the contents of the middle section. If no middle part is defined (it is blank), the marked text will remain intact.</li>
   <li><b> Insert macro without middle </b> - will not be used. If text is selected in the editor, it will remain intact.</li>
   <li><b>Insert macro code with the left part to HEAD</b> - it will be inserted to the left of the cursor. If there is tagged text in the editor, it will remain intact.</li>
   <li><b> Create new document from macro </b> - it will be inserted second into the document.</li>
</ul>

<p><b> The right part of the macro code </b> - depending on the option selected when inserting:</p><ul>
   <li><b>Insert Template at the cursor position</b>, Insert Template <b>without center</b>, or <b>Insert Template with left part to HEAD</b> - will be inserted to the right of the cursor, or selected in the text editor,</li>
      <li><b> Create new document from template </b> - this will be inserted third into the document.</li>
</ul>

<h2>Content input window</h2>

<p>The macro code input window consists of two parts - the menu and the text window.</p>

<p>The menu contains icons for creating and inserting: <a href="macrocodes_editor_vars.php"> variables </a> and <a href="macrocodes_editor_blocks.php"> blocks </a> .</p>

<ul>
   <li><b>Variables</b> - the list contains the names of all the variables defined in the macro,</li>
   <li><b> Adding a new variable </b> - click to create a new variable (only adds a variable, but does not automatically insert it into the macro code). To create new and edit existing variables, use the <a href="macrocodes_editor_addvar.php"> Edit Macro Variable </a> window.</li>
   <li><b>Insert selected variable</b> - click to insert a variable call into the macro code. When the macro code is used, the value of the variable is substituted in place of the symbol.</li>
</ul>
<ul>
   <li><b>Blocks</b> - the list contains the names of all the blocks defined in the macro</li>
   <li><b> Adding a new block </b> - click to add a new block (only adds a block, but does not automatically insert it into the macro code). To create new and edit existing blocks, use the <a href="macrocodes_editor_addblock.php"> Edit Template Block </a> window.</li>
   <li><b>Insert selected block</b> - click to insert the symbol of the block selected in the list into the macro's content. When you use the macro, the content of the block will be replaced by the symbol (if it is enabled), or the symbol will be removed from the macro (if the block is disabled).</li>
</ul>

<p>Below the menu there is a text window. This is where the macro code content is entered.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="macrocodes_editor.php">Template Editor - Introduction</a></li><li><a href="macrocodes_editor_vars.php">Template Editor - Variables</a></li><li><a href="macrocodes_editor_blocks.php">Template Editor - Blocks</a></li><li><a href="settings_macrocodes.php">Program settings - Templates</a></li><li><a href="main_tabs_macrocodes.php">Template tab</a></li><li><a href="macrocodes.php">Templates - general</a></li></ul>
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