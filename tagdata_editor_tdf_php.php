<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Definition file editor for PHP</title>

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
<h1>Definition file editor for PHP</h1>





<p>With the PHP Definition File Editor, you can modify or extend the PHP language definition that Pajaro uses in the dynamic hint functions and on the <a href="main_tabs_languages.php">Programming Languages</a> tab. To access the PHP definition file editor, use the PHP <b>definition file editor</b> command, which is located in the main menu. You can also launch it using the button located in the program settings under <a href="settings_codeinsight_php.php">Facilitation, Dynamic Attributes, Other</a> or in the menu. The button is shown above.</p><p>The PHP definition file editor window consists of two tabs: the "Constants and variables" tab and the "Functions" tab.</p><h2>"Constants and variables" tab</h2>

<p>On this tab you define predefined constants and variables and assign them to one of the available categories. You can assign the added variables and constants to categories:</p><ul>
	<li>PHP constants</li><li>Apache variables (request)</li><li>Apache variables (server)</li><li>PHP variables</li></ul>

<p>After selecting a category, a list of items assigned to the selected category will appear in the list on the left side of the tab. By clicking on the selected one, the "Description" and "Value Type" fields will be filled accordingly. You can then change the selected item.</p><p>If you want to add a new item to a selected category, follow the same procedure. Select a category and with the button marked "plus" add a new item. Then you can edit it in the mentioned "Description" and "Item type" fields.</p><h2>Element types</h2>

<p>You can assign different types to the category components on the first tab:</p><ul>
	<li><b>string</b> - type "string"</li><li><b>int</b> - type "integer"</li><li><b>float</b> - type "floating-point number"</li><li><b>bool</b> - "logical" type</li><li><b>array</b> - "array" type</li><li><b>object</b> - type "object"</li></ul>

<p>The types determine how some dynamic hints functions work. The type of the item is also displayed on the <a href="main_tabs_languages.php">Languages</a> tab of the main program window.</p><h2>"Functions" tab</h2>

<p>On this tab you can define functions that are supported in PHP supported in Spider. On the left side of the tab you will find a list of function categories. Categories help you sort functions into groups.
Categories are used to present functions hierarchically on the <a href="main_tabs_languages.php">Programming Languages</a> tree in the main window. You can also use this to disable support for selected function categories in dynamic function hints in the <a href="settings_codeinsight_php.php">Facilitations, dynamic attributes, other</a> settings. You can add and remove categories using the buttons under the list.</p><p>Next to the category list is a list of functions assigned to it. When you select a category in the list on the left, the names of all the functions in that category are loaded here. You can add, delete and edit functions using the buttons below the list. Editing and adding a new one is done in the <a href="tagdata_editor_tdf_php_newfunc.php">New PHP Function</a> window.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_editor_codeinsight.php">Dynamic code in the editor</a></li><li><a href="main_tabs_languages.php">Languages tab</a></li><li><a href="settings_codeinsight_php.php">Dynamic Code Settings</a></li><li><a href="tagdata_editor_tdf_php_newfunc.php">New PHP function</a></li></ul>
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
