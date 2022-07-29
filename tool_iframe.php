<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Floating Frame</title>

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
<h1>Tools - Floating Frame</h1>



<p>The Floating Frame tool is used to quickly insert a floating frame into a page that will contain another document.</p><p>You can start the Floating Frame creation window from <a href="main_menu_main.php">The main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_frames.php">Frames</a> / Floating frame.</p><p>An alternative way to run the tool is to drag a document from the file list to the <tt>&amp;lt;iframe&amp;gt;</tt> tag in a document that is opened in the editor.</p>



<p><b>Name</b><br>
Enter the name of this frame. This name will be used, for example, to define the links that will load the document into this frame.</p><p><b>Content</b><br>
Enter the path to the document that will be loaded into this frame by default. Use the drop-down list to select one of the most recently inserted addresses. You can also use the button next to the field to launch an open window to select a file from your hard drive.</p><p><b>Alignment</b><br>
Specify the alignment of this frame relative to other page elements. This attribute is defined in the HTML specification as <i>deprecated</i> and it is recommended to use CSS styles for alignment.</p><p><b>Scroll bars</b><br>
Specify whether scroll bars should appear in the frame:</p><ul>
	<li><b>Auto</b> - appears if necessary (the document will not fit entirely in the frame area)</li>
	<li><b>Yes</b> - will always appear</li>
	<li><b>No</b> - they will not appear even if the document does not fit in the frame in its entirety.</li>
</ul>

<p><b>Width</b>, <b>Height</b><br>
Specify the width and height of a frame in a document.</p><p><b>Margin Width</b>, <b>Margin Height</b><br>
Specify the width and height of the margin separating the content of the frame from other page elements.</p><p><b>Framing around the floating frame</b><br>
Check this switch if you want a border to appear around the frame.</p>





<h2>Element style</h2>

<p>This group allows you to specify the style for the tag. Here you will find three fields that allow you to specify:</p><p><b>Definition of style</b><br>
In this field you define the style for the element to be placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor</a> tool that allows you to create a style definition in a friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
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
	<li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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