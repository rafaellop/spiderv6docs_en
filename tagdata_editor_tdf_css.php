<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Definition file editor for CSS</title>

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
<h1>Definition file editor for CSS</h1>






<p>With the CSS definition file editor, you can modify or extend the CSS definition that Spider uses in the dynamic tooltip functions and on the <a href="main_tabs_languages.php">Programming Languages</a> tab. To access the CSS definition file editor, use the CSS <b>definition file editor</b> command, which is located in the main menu. You can also launch it using the button located in the program's settings in the <a href="settings_codeinsight_php.php">Facilitation, dynamic attributes, other</a> category or in the menu. The button is shown above.</p><p>The editor window of the CSS definition file consists of two parts: "Property List" which contains all CSS properties, and "Basic Data", "Accepted Values" and "Browser Support" tabs.</p><h2>Property List</h2>

<p>The list contains all properties available in CSS. You can add new properties and delete existing ones.</p>

<p>The icon next to the property name depends on the "Group Membership" setting on the "Basic Data" tab.</p>

<p><b>Save changes</b><br>
Click to save the changes to the CSS definition file</p>



<h2>Basic data</h2>

<p><b>Property description</b><br>
Here enter a description of the selected property</p>

<p><b>Group membership</b><br>
Specify the group to which the selected property belongs. Selecting a group affects the grouping of properties in the <a href="main_tabs_inspector_css.php">CSS Inspector</a>, and determines the icon the property will have.</p>

<p><b>Path to the documentation file</b><br>
Here you can specify the path to the documentation file for the selected property. This will allow you to use the Help for the current document (shortcut Ctrl+F1)</p>

<p><b>Property is an abbreviated equivalent of other properties</b><br>
Check if the selected property is not to take its own values, but to take the values of other CSS properties.</p>

<p>After selecting this option, you must add to the list of properties whose values are to be accepted by the selected property. To add a property use the menu on the right side of the list. To add properties use the <a href="tagdata_editor_tdf_css_property.php">Add property to list window....</a> Remember that the order in which you specify the properties matters, and you should specify them in the order listed in the CSS specification. Use the buttons in the menu to move properties in the listed</p>




<h2>Accepted values</h2>

<p><b>Accepted values</b><br>
Here you can specify the values that the selected CSS property can take. Support the list of values with the buttons on the right.</p><ul>
	<li><b>A property can take the <tt>inherit</tt></b> value - check this on if this value should appear in the list of values.<br>
			Selecting <tt>inherit</tt> when creating a CSS style means that the value for the property will be inherited from the parent element.</li>
	<li><b>A property can take multiple values</b> - check this on if the property can take several values separated by spaces.<br>
		For example, the <tt>background-position</tt> property, can simultaneously take values such as <tt>top left</tt>. This setting affects the editing facilitation features, including <a href="main_editor_codeinsight.php">Dynamic Code</a>, <a href="main_tabs_inspector_css.php">CSS Inspector</a>.</li>
</ul>


<p><b>A property can also be...</b>
Check the switch that determines what type of value the currently edited property can take. Possible choices are:</p>

<ul>
	<li><b>URL</b> - check if the property is an UR address and indicate in the list on the right the type of document to which the link will connect,</li>
	<li><b>font name</b></li>
	<li><b>string</b></li>
	<li><b>numeric value - type</b> - when you select this option, you can choose the type of number that can be the value of the property (integer, real, with value, percentage, angle, time, frequency)</li>
</ul>





<h2>Support in browsers</h2>

<p>In this tab, you can specify the standards in which the property appears and the degree of support for it by different web browsers</p>

<p><b>Support in CSS standards</b><br>
Select the CSS standards in which the property appears. You can choose from:</p>
<ul>
	<li>CSS1</li>
	<li>CSS2</li>
   <li>CSS2.1</li>
	<li>CSS3</li>
	<li>CSS Mobile Profile 1.0</li>
   <li>CSS TV Profile 1.0</li>
</ul><b>Support in browsers</b><br>

Check the <b>Specify Property Support in Browsers</b> switch to activate the <a href="tagdata_editor_tdf_compatibility.php">Support in Browsers</a> button that launches the tool of the same name. This will allow you to determine which browsers support a given CSS property and to what extent. This information will be included in the tooltip when creating the style.</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_tabs_languages.php">Languages tab</a></li><li><a href="main_tabs_inspector_css.php">CSS Inspector</a></li><li><a href="main_editor_codeinsight.php">Dynamic code</a></li></ul>
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
