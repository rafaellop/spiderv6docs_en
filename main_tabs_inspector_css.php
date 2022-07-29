<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>"CSS Inspector" tab</title>

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
<h1>"CSS Inspector" tab</h1>





<p>The "CSS Inspector" tab is used to create and re-edit CSS style sheet tags.</p><p>The tab window is divided into three parts:</p>
<ul>
	<li>Inspector menu</li>
	<li>A list of style properties</li>
	<li>Preview pane</li>
</ul>

<p>You can also choose the method of displaying the list of properties and the scope of displayed properties (compliance with individual CSS specifications)</p>


<h2>Inspector menu</h2>

<p>The inspector's menu consists of the following commands:</p>

<p>Click to expand the menu for creating classes and selectors:</p>

<ul>
	<li><b> New selector </b> - Creates a new empty selector with no name</li>
	<li><b> New selector from the current one </b> - Creates a new selector with no name that will contain the properties set in the list</li>
	<li><b> New class </b> - Asks for a name and creates a new empty class</li>
	<li><b> New class from current </b> - Asks for a name and creates a new class that will contain the properties set in the list</li>
	<li><b><a href="tool_new_selector.php">Selector wizard</a></b> - Launches the new empty selector wizard</li>
	<li><b><a href="tool_new_selector.php">Selector wizard</a> based on the current one</b> - Launches the wizard for a new empty selector which will contain the properties set in the list</li>
</ul><br><p>Click to expand the menu with commands for inserting styles using a tag:</p>

<ul>
	<li><b>Embrace with SPAN (inline)</b> - Click to embrace the selected text with a <tt>SPAN</tt> tag with a style attribute that will contain the properties set in the list</li>
	<li><b>Embracewith <span> - Click to create a new class based on the settings in the property list and embrace the selected text with a <tt>SPAN</tt> tag with the class attribute pointing to this class</span></b></li>
	<li><b>Embrace with DIV (inline)</b> - Click to embrace the selected text with a <tt>DIV</tt> tag with a style attribute that will contain the properties set in the list</li>
	<li><b>Embrace with DIV (class)</b> - Click to create a new class based on the settings in the inspector's property list and embrace the selected text with a <tt>DIV</tt> tag with the class attribute pointing to this class</li>
</ul><br><p>Click to expand the property list content control menu:</p>

<ul>
	<li>Lists properties</li>
	<li>Displays properties in a grouped manner</li>
	<li>Expand all groups</li>
	<li>Collapse all groups</li>
	<li>All properties</li>
	<li>Compliant with CSS1</li>
	<li>Compliant with CSS2</li>
	<li>Compliant with CSS3</li>
	<li>Compliant with CSS Mobile 1</li>
</ul><br><p><b>Help</b> - opens this help window.</p><br><p><b>List of classes and selectors in the document</b><br>
The list includes all the classes and selectors that exist in the current document and in external CSS sheets attached to it. List items are grouped into embedded and included (the name of the files with CSS sheets is given). Select the class or selector you want to edit from the list.</p><a name="properties_list"></a><h2>List of style properties</h2>

<p>The list includes all properties available in CSS styles. Using the menu, you can define the appearance of the list and the range of displayed properties (compliance with individual CSS specifications).</p>

<p>If you select <b>Displays properties in list form</b>, all properties will be displayed in alphabetical order in one sequence. If, on the other hand, you select Displays properties in a <b>grouped manner</b>, the properties will be divided into groups:</p>

<ul>
	<li>Blocks</li>
	<li>Font</li>
	<li>Sound</li>
	<li>Generated</li>
	<li>Classification</li>
	<li>Colors and background</li>
	<li>Scrollbars</li>
	<li>Page</li>
	<li>Tables</li>
	<li>Text</li>
	<li>Visual</li>
</ul>

<p><b>Note!</b><br>
If you can't see any of the groups, you probably have set the display property restriction to one of the specifications.</p>

<p><b>Ctrl+F1 - context-sensitive help for style properties</b><br>
If you want help with a style property on which the cursor is positioned, use the keyboard shortcut Ctrl+F1. For more on this topic, see <a href="coding_css_help.php">Support for CSS - Cont</a>ext-sensitive help.</p>

<h2>Preview pane</h2>

<p>The preview pane is at the bottom of the tab. It allows you to preview the formatting according to the set style properties before inserting it into the document. On the right side there is a button:</p>

<p> <b>Choice of browser used</b><br>
Click to select the browser used for browsing on this tab. As long as it is installed on your system<a href="main_preview_embed.php">(read more about this</a>), you can use the browser:</p><ul>
	<li>MS Internet Explorer</li>
	<li>Mozilla</li>
</ul>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_new_selector.php">New selector wizard</a></li><li><a href="coding_css.php">Support for CSS in Spider</a></li><li><a href="tagdata_editor_tdf_css.php">CSS tag definition file editor</a></li><li><a href="main_tabs_general.php">Other tabs</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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
