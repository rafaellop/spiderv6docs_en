<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Frame Builder</title>

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
<h1>Tools - Frame Builder</h1>


<!-- tre&#347;&#263; pomocy -->

<p>The Frame Wizard allows you to create even the most complex frames in a simple and enjoyable way. With a few clicks you can visually create layouts, resize them, or make layout modifications.</p>

<p>The content of the wizard's window has been thematically grouped into five tabs, which significantly facilitates work in the tool:</p><ul>
	<li><a href="#frameset_editor">Defining a frame layout</a></li>
	<li>Selected frame settings ( <a href="#frameset_settings">main frame settings</a> , <a href="#curr_frame_settings">settings</a>)</li>
	<li><a href="#add_site_settings">Additional page settings</a></li>
	<li><a href="#structure_preview">Frame structure preview</a></li>
	<li><a href="#code_preview">Source code preview</a></li>
</ul>




<h2>Launching</h2>

<p></p><p>You can run the tool from <a href="main_menu_main.php">Home name</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_frames.php">Frames</a> / Frame Creator. The command icon is shown next to it.</p><p>When you start the wizard, you will be asked to name the document in which you want to place the frame structure. Once this document is created, the tool window will be enabled.</p><a name="frameset_editor"></a><h2>Defining the layout of frames</h2>

<p>In this tab you can visually create the layout of frames in the document.</p>The original layout is two vertical frames. You can change it in the second tab of the tool, or using the context menu that appears after right-clicking on the selected frame.<p>Select a frame (the current frame is highlighted in white) and then use the menu buttons:</p><p><b>Split vertically</b><br>
Click to split the current frame into two vertical frames.</p><p><b>Split horizontally</b><br>
Click to split the current frame into two horizontal frames.</p><p><b>Delete the selected division</b><br>
Click to delete the division of the current frame. All frames that make up the division (FRAMESET tag) will be removed. Each pair of frames that form a division is surrounded by a single border, making it easier to see how the divisions go.</p><p><b>Resize layout preview</b> <br>
Select the size of the layout preview from the list. You can choose from standard screen sizes in Windows:</p><ul>
	<li>640x480</li>
	<li>800x600</li>
	<li>1024x768</li>
	<li>1280x1024</li>
	<li>1600x1200</li>
	<li>Default - adjusts to the dimensions of the window</li>
</ul>

<p>If you want to change the aspect ratio of the division, "grab" the outline of the frame and drag it to the appropriate place.</p>

<p>To edit the current (highlighted in white) frame, go to the next tab - <a href="#curr_frame_settings">Settings of the selected frame</a>. To do this, you can double-click on the selected frame.</p><a name="frameset_settings"></a><h2>Settings of the selected frame - Division and settings of the main frame</h2>In this section of the <b>Settings</b> tab of the <b>selected frame</b>, you will set options for the frame layout, which includes the current frame (FRAMESET tag).<p><b>Method of division</b><br>
Choose how the frames are to be placed:</p><ul>
	<li><b>Vertical split</b> - frames will be placed side by side</li>
	<li><b>Horizontal split</b> - frames will be placed one above the other</li>
</ul>

<p><b>Style</b><br>
In this field you define the style for the element to be placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor</a> tool that allows you to create a style definition in a friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class</b><br>
In this field you specify the class identifier assigned to the tag. The drop-down list allows you to access the classes defined in the current document and in the external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</p><p><b>ID</b><br>
Here you specify a unique identifier for this element in the document. These IDs can be used, for example, when loading a document into a frame, etc.</p><p><b>Border around the frame</b><br>
Check this option if you want to specify the thickness of the border around the frame. This setting has a <i>deprecated (deprecated</i>) status and it is not recommended to use it. It is recommended to use <a href="coding_css.php">CSS styles</a>.</p>
<ul>
	<li><b>Border thickness</b> - enter the thickness of the <b>border</b> </li>
</ul>

<p><b>Border color</b><br>
Check this option if you want to select a border color, then click in the box next to it to open <a href="tool_colorpalette.php">a color palette</a> that allows you to indicate the color. This setting has a <i>deprecated (deprecated</i>) status and it is not recommended to use it. It is recommended to use <a href="coding_css.php">CSS styles</a>.</p>

<p><b>Frame spacing</b><br>
Enter the spacing to be maintained between adjacent frames.




<a name="curr_frame_settings"></a></p><h2>Settings of the selected frame - Settings of the subframe</h2>

<p>In this section of the <b>Selected Frame Settings</b> tab, you will set the options for the current frame (selected in the <a href="#frameset_editor">Define Frame Layout</a> tab).</p>

<p><b>Frame name</b><br>
Enter the name of the current frame.</p><p><b>Content</b><br>
Enter the address of the document to be loaded into the current frame. You can use the drop-down list, which lists the paths to recently used documents, or the file selection tool (the button next to the field).</p><p><b>Size</b><br>
Specify the size of the frame (width - when the frames next to each other, the height when one above the other)</p><ul>
	<li><b>Size in percentage</b> - Check this option if you want to specify the size of the frame in percentage. In this case, a slider will appear, with which you can select the percentage value.</li>
</ul>

<p><b>Protect against resizing</b><br>
Check this option if you want the project visitor to be unable to resize the frame. Otherwise, when he places his mouse over where the frame ends, he will be able to "grab" it and resize the frame.</p><p><b>Scrollbars</b><br><br>
Choose whether to include scroll bars in the frame. Three options are available:</p><ul>
	<li><b>Automatic</b> - will automatically appear when the document that is the content of the frame will not fit entirely in it,</li>
	<li><b>Always visible</b> - they will be visible regardless of whether the document needs to be scrolled through or fits in its entirety,</li>
	<li><b>Always hidden</b> - they will never be visible (if it happens that the document does not fit in the frame, it will not be possible to scroll through it).</li>
</ul>

<p><b>Margin width</b>, <b>Margin height</b> <br>
Enter the width and height of the margin around the frame.</p><p><b>Style, Class, ID, Border around frame, Border thickness, Border color</b><br>
These elements allow you to set the options for the current frame, acting identically to the analogous elements that specify the options for the parent frame in the <a href="#frameset_editor">Split and main frame settings</a> section.



<a name="add_site_settings"></a></p><h2>Additional page settings</h2>

<p>In this tab you can set options for the page containing the frames structure.</p>

<p><b>Page title</b><br>
Enter the title of the page (TITLE tag).</p><p><b>META section setup</b><br>
Click to open <a href="tool_meta.php">the META Section Editor</a> to set document information.</p><p><b>Also insert tags outside the specification</b><br>
If you check this option, Spider will also insert in the final code of the frame page those attributes that are not recommended in the HTML specification. If you disable this option, these attributes will be omitted, even if you set them in the options of <a href="#curr_frame_settings">the Settings</a> tab <a href="#curr_frame_settings">of the selected frame</a>.</p><p><b>Content displayed in a browser without frame support</b><br>
In this field you can enter the content to appear in a browser that does not support frames. In practice, such browsers are no longer used, as even new text browsers can handle frames correctly.


<a name="structure_preview"></a></p><h2>Frame structure preview</h2>This tab shows the appearance of frames in the document along with their contents according to the selected settings.<p><b>Changing the preview size</b><br>
Choose a preview size from the list. You have a choice of standard Windows screen sizes:</p><ul>
	<li>640x480</li>
	<li>800x600</li>
	<li>1024x768</li>
	<li>1280x1024</li>
	<li>1600x1200</li>
	<li>Default - adjusts to the dimensions of the window</li>
</ul><a name="code_preview"></a><h2>Source code preview</h2>



<p>In this tab you can view the source code that will be inserted into the document.</p>

<p>You have three code styles to choose from:</p><ul>
	<li><b>HTML - capital letters</b> - the code will be presented in HTML, where all tags their attributes will be written in capital letters</li>
	<li><b>HTML - lowercase</b> - the code will be presented in HTML, where all tags their attributes will be written in lowercase letters</li>
	<li><b>XHTML</b> - the code will be presented in XHTML (successor to HTML).</li>
</ul>

<p><b>Line wrapping in frame source code preview </b> <br>
Select this option to have the source code in the preview window wrapped so that all tags and their contents are visible.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_frameset.php">FRAMESET frame layout markup editor</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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
