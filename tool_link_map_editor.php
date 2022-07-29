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
<title>Tools - Link Map Editor</title>

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
<h1>Tools - Link Map Editor</h1>

<!-- tre&#347;&#263; pomocy -->

<p>The window is used to generate a map of links (the <tt> MAP </tt> tag in HTML).</p><p>The tool can be launched from the menu <a href="main_menu_main.php">The main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_links.php">Directors</a> (or <a href="main_menu_tools_gfx.php">Graphics and Multimedia</a>), as well as from the toolbars. The command icon is shown above.</p>

<p>The window is divided into several parts:</p><p><b><a href="#area_list">Defined areas</a></b><br>
Contains a list of defined areas of the map.</p>

<p><b> <a href="#settings_general">General map settings</a> tab</b><br>
Contains general settings, such as the name of the map, the location of the graphics, the styles used, etc.</p>

<p><b> <a href="#area_define">Defining areas</a> tab</b><br>
Contains a preview of the image file and allows you to draw active areas on the image.</p>

<p><b> <a href="#area_settings">Settings for selected areas</a> </b> <br>
 Contains settings for the selected area.</p>




<h2><a name="area_list"></a>Defined areas</h2>

<p>The list contains the names of the areas you have defined for your map. Click an area name to select it. Area names are created based on the contents of <a href="#alt">the ALT attribute</a> specified in the <a href="#area_settings">Selected Areas Settings</a> tab.</p>

<p>The icon next to the area name tells you what type of area it is:</p><p>rectangular area,</p>

<p>oval area,</p>

<p>irregular area.</p>

<p>Using the buttons in the menu to the right of the list, you can add, indicate, or delete areas defined for the map.</p>




<h2><a name="settings_general"></a>General map settings</h2>

<p>In this tab, you can indicate the graphic file for which the map will be created, enter the name of the map, define the style or select the CSS class for the image.</p><b>Basic settings</b><br><ul>
	<li><b>Map name</b> - specify the name of the map that will be used to connect the map to the appropriate image (<tt>usemap</tt> attribute in the <tt>IMG</tt> tag and <tt>name</tt> attribute in the <tt>MAP</tt> tag).</li>
	<li><b>Default link</b> - enter the default link. It will be used if an area outside the defined map areas is clicked</li>
</ul><b>Graphic map</b><br><ul>
	<li><b>Location of the map graphic</b> - enter the path to the graphic file. You can use the <a href="tool_graphic_browser.php">graphic viewer</a> launched by the button on the right side of the field.</li>
	<li><b>Image description</b> - enter a description for the image that will appear instead of the image, if the user does not have images enabled. The description will help him get an idea of what the picture shows.</li>
</ul>

<p><b>Insert link map into clipboard</b><br>
Check if you do not want to insert the tags of the generated map into the document directly next to the image, but copy it to the clipboard to paste it elsewhere (for example, at the beginning of the document).</p>

<p><b>Definition of style</b><br>
This group allows you to define the style for the image. Here you will find three fields that allow you to specify:</p><ul>
	<li><b>Style</b> - In this field you define the style for the image to be placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor</a> tool that allows you to create a style definition in a friendly and convenient way. By clicking there you can also modify an existing style.</li>
	<li><b>Class</b> - In this field you specify the class ID assigned to the tag. The drop-down list allows you to access classes defined in the current document and in external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</li>
	<li><b>Identifier</b> - Here you provide a unique identifier for this element in the document. These identifiers can be used, for example, when making jumps to specific parts of the page or in scripts.</li>
</ul>





<h2><a name="area_define"></a>Defining areas</h2>

<p>In this tab you can define the active areas of your map. You can adjust the preview to make your work easier:</p>

<ul>
	<li><b>Magnification</b> - select from the list the scale at which the preview should be displayed,</li>
	<li><b>Units</b> - select from the list the units to be used as line scale</li>
</ul>

<p><b>Defining areas</b><br>
The main part of the tab is the preview window, displaying the image for which the link map is created. In the same window, you can draw active areas of the map, for which you will then be able to provide links, etc.</p>

<p>To create an active area, select its type from the menu to the right of the <a href="#area_list">Defined Areas</a> list (rectangle, ellipse, irregular). Then select the portion of the image that you want to be a reference in the image:</p>

<p><b>Defining a rectangular or ellipse-shaped area</b><br>
After selecting a rectangle or ellipse shape (icons shown opposite), left-click on the image where you want to start drawing the figure and, while holding it down, drag. A preview of the shape will be visible as a marquee drawn with a dashed line. When you release the mouse button, the shape will be filled with a yellow grid.</p>

<p><b>Defining an irregularly shaped area</b><br>
After selecting an irregular shape (the icon shown next to it) , left-click on the first point where you want to start drawing. Then click on subsequent points where you want the line to be broken. The lines will be marked on the drawing with a dashed line. To finish drawing the shape, click anywhere on the picture with the right mouse button. The first and last points will be connected, and the resulting area will be filled with a yellow grid.</p>

<p><b>Editing the selected shape </b> <br>
To edit the shape of the active area, click on the icon shown on the right. Then select the <a href="#area_list"> Defined Areas </a> area you want to edit from the list. You can also select an area directly in the preview window. The active area you have selected is marked in yellow, other defined areas are marked in white.</p>
<p>To move an area to another location, click the left button on the desired area and, while holding down, drag it to the desired location.</p>
<p>To change the dimensions of a rectangular or elliptical area, left-click on the attachment point (red square) in the upper left corner of the area and drag it.</p>
<p>The irregular area has attachment points at each end of the broken area. Each such point can be moved at will, thus changing the shape of the area.</p>
<p>The status bar of the editor window shows the dimensions of the area being drawn and the position of the mouse cursor relative to the upper left corner of the image. Dimensions are given when drawing, moving or resizing areas except for irregular areas.</p>






<h2><a name="area_settings"></a>Settings of selected areas</h2>

<p>To edit an area, point to it in the <a href="#area_list">Defined Are</a>as list, or in the <a name="area_define">Defining Areas</a> tab. The following options are available:</p>

<p><b>URL reference</b><br>
Enter the URL to which you want the current area to lead.

<a name="alt"></a></p><p><b>Area Description (ALT) and Smoke (TITLE).</b><br>
Specify the text that will appear when you hover the mouse over the current image area. In addition, this text will be displayed in the list of areas on the left side of the editor to facilitate its selection in the list.</p><p><b>Area without an assigned link</b><br>
Check this switch if the area does not have a defined link.</p><p><b>Shortcut key</b><br>
Specify a shortcut key to use to go to the address the current area points to.</p><p><b>Target window </b> <br>
Select the window in which to display the target from the list.</p><p><b>Additional event and attributes for this area</b><br>
Click this button to open a window for defining <a href="tool_events_attributes.php">additional attributes of the <area> area tag and handling its events</a>.</p><h2>Style definition</h2>

<p>This group allows you to specify the style for the tag. Here you will find three fields that allow you to specify:</p><p><b>Style definition</b> <br>
In this field you define the style for the element placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor </a> tool to create a style definition in a user-friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
In this field you specify the class identifier assigned to the tag. The drop-down list allows you to access classes defined in the current document and in external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</p><p><b>Item ID</b><br>
Here you provide a unique identifier for this element in the document. These identifiers can be used, for example, when making jumps to specific parts of the page or in scripts.</p><h2>"Events and Attributes" button</h2>

<p>The "Events and Attributes" button allows you to open the <a href="tool_events_attributes.php">Events and Other At</a>tributes window. This window allows you to specify additional attributes of the edited tag that do not have their counterparts in the tool window. There you can also specify events for scripting languages that allow you to achieve various special effects.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_graphic_insert.php">Inserting graphics</a></li><li><a href="tool_link.php">Inserting a link</a></li></ul>
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
