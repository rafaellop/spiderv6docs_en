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
<title>Templates - Template Editor</title>

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
<h1>Templates - Template Editor</h1>




<!-- tre&#347;&#263; pomocy -->
<p>Templates allow you to quickly insert frequently used or complex pieces of code into your document. For a more extensive description of templates, see the <a href="macrocodes.php">Templates</a> description.</p>

<p>The template editor is used to create new and edit existing templates.</p>

<p>The editor window consists of several areas:</p>

<ul>
   <li><b> <a href="macrocodes_editor_settings.php"> Template settings </a> </b> - category assignment, name, type, keyboard shortcut</li>
	<li>Tabs for creating template content:</li>
	<ul>
	<li><b> <a href="macrocodes_editor_sites.php"> Left side, center, right side </a> </b> - three tabs containing input windows.</li>
   <li><b> <a href="macrocodes_editor_vars.php"> Variables </a> </b> - the tab contains the inspector for the variables used in the template. To create new and edit existing variables, use the <a href="macrocodes_editor_addvar.php"> New Template Variable / Edit Template Variable </a> window.</li>
   <li><b> <a href="macrocodes_editor_blocks.php"> Blocks </a> </b> - the tab contains a list of blocks used in the template. The <a href="macrocodes_editor_addblock.php"> Add new block / Edit template block </a> window is used to create new and edit existing blocks.</li>
</ul>
	<li><b> Wrap lines in the editor of individual parts of the template </b> - If this switch is checked, the text of each of the three pages of the template will be wrapped. Thanks to this, the entire line of text will be visible when it is small (the Template Editor window can be enlarged and reduced).</li>
</ul>

<p>By default, this window is opened after selecting the template using the icons in the upper part of the <a href="main_tabs_macrocodes.php"> Templates </a> tab, or by pressing the F2 key after selecting the template in the tree.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_tabs_macrocodes.php">Templates tab</a></li><li><a href="macrocodes.php">Templates in general</a></li><li><a href="settings_macrocodes.php"> Program Settings - Templates. </a></li><li><a href="macrocodes_instruction.php">Creating a template - step by step instructions.</a></li></ul>
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