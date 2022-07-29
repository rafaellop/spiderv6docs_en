<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Definition file editor for scripts</title>

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
<h1>Definition file editor for scripts</h1>





<p>With the Scripting Languages Definition File Editor, you can modify or extend the JavaScript and VBScript definitions supported in Spider in the dynamic hints tools and on the <a href="main_tabs_languages.php">Programming Languages</a> tab. To access the editor, use the <b>Script Definition File Editor</b> command, which is located in the main menu. You can also launch it using the button located in the program's settings under <a href="settings_codeinsight_scripts.php">Facilitation, Dynamic Attributes, Other</a> or in the menu. The button is shown above.</p><p>The script definition file editor window consists of two tabs: the "Script Languages" tab and the "Object Types" tab.</p><h2>"Scripting Languages" tab.</h2>

<p>This tab consists of a selection list from which you choose the language (JavaScript or VBScript) for which you will prepare the list of supported functions and properties.</p><p>The list below allows you to define functions and properties for the selected language. The first column of the list contains the name of the method or property supported in that language. The second column is the description, which appears, for example, on the <a href="main_tabs_languages.php">Programming Languages</a> tab or in the dynamic help. Next to the names of the elements are icons, which signify:</p><table border="0">
<tr>
	<td></td>
	<td>- method (function)</td>
</tr>
<tr>
	<td></td>
	<td>- property, (object field)</td>
</tr>
</table>

<p>You can add, delete and modify more elements using the buttons next to the list. When adding or deleting elements, the <a href="tagdata_editor_tdf_scripts_globals.php">Scripting Language Element</a> window opens where you can provide a definition for the new element.

<a name="tdf_scripts_objecttypes"></a></p><h2>Object types</h2>

<p>This tab is a bit more complicated. Here you will find the definition of object types used in ASP, JavaScript, JavaScript in HTML and JavaScript objects of regular expression type. To modify the selected group of objects, select the type in the list. The list of object types assigned to the selected group will be loaded into the list below. Using the button next to the list with the object group, you can assign several global objects to the selected group in the <a href="tagdata_editor_tdf_scripts_globaltypes.php">Global Objects and Types</a> pane.</p><p>Below the object group selection list are two lists: "List of types" and "Properties and methods of the current type":</p><p><b>List of types</b><br>
List of object types defined in the group selected above. Clicking on the type name will display its properties and methods in the list to the right. Use the buttons below the list to modify the list of types. When you click add or modify the selected type, the <a href="tagdata_editor_tdf_scripts_objecttype.php">object type properties</a> window will appear.</p><p><b>Properties and methods of the current type</b><br>
When you select an object type in the list described above, the methods and properties assigned to the selected object type will appear in the list described now. As in the case described at the beginning of this help page, the icons displayed next to element names have the following meaning:</p><table border="0">
<tr>
	<td></td>
	<td>- method (function)</td>
</tr>
<tr>
	<td></td>
	<td>- property, (object field)</td>
</tr>
</table>

<p>Use the buttons below the list to modify the list of items assigned to the selected type. When you click to add or modify the selected type, the <a href="tagdata_editor_tdf_scripts_objecttypeprop.php">Property or Method</a> window will appear.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tagdata_editor_tdf_scripts_globals.php">Scripting language element</a></li><li><a href="tagdata_editor_tdf_scripts_objecttype.php">object type properties</a></li><li><a href="tagdata_editor_tdf_scripts_globals.php">Scripting language element</a></li><li><a href="tagdata_editor_tdf_scripts_objecttypeprop.php">Property or method</a></li><li><a href="settings_codeinsight_scripts.php">Dynamic code in scripts</a></li><li><a href="main_tabs_languages.php">Languages tab</a></li></ul>
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
