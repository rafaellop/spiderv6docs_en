<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - FRAMESET tag editor</title>

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
<h1>Tools - FRAMESET tag editor</h1>


<!-- tre&#347;&#263; pomocy -->

<p>This tool is used to create a frameset tag in the document <tt>FRAMESET</tt> .</p><p></p><p>You can run the tool from <a href="main_menu_main.php">Home Name</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_frames.php">Frames</a> / FRAMESET Editor. The command icon is shown next to it.</p><p><b>Layout of frames on the page</b><br>
Choose the layout of the frames you want to create at the moment. You can arrange the frames:</p><ul>
	<li>By columns</li>
	<li>By rows</li>
</ul>


<p><b>Number of columns (rows)</b><br>
Enter the number of columns (or rows, depending on the layout you selected above). The frame sizes will automatically be given as a percentage - you will be able to change this by editing the HTML code</p><p>When you are done with this tool, you need to insert the selected number of frames into the document. You can do this with the <a href="tool_frame.php">FRAME editor</a></p>



<h2>Element style</h2>

<p>This group allows you to specify the style for the tag. Here you will find three fields that allow you to specify:</p><p><b>Style definition</b> <br>
In this field you define the style for the element placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor </a> tool to create a style definition in a user-friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
In this field you specify the class identifier assigned to the tag. The drop-down list allows you to access classes defined in the current document and in external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</p><p><b>Item ID</b><br>
Here you provide a unique identifier for this element in the document. These identifiers can be used, for example, when making jumps to specific parts of the page or in scripts.</p><h2>"Events and Attributes" button</h2>

<p>The "Events and Attributes" button allows you to open the <a href="tool_events_attributes.php">Events and Other At</a>tributes window. This window allows you to specify additional attributes of the edited tag that do not have their counterparts in the tool window. There you can also specify events for scripting languages that allow you to achieve various special effects.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_frameeditor.php">Frame Creator</a></li><li><a href="tool_frame.php">FRAME Editor</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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