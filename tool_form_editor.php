<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Form Generator</title>

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
<h1>Tools - Form generator</h1>


<!-- tre&#347;&#263; pomocy -->

<p>The form generator is used for complex form preparation. It allows you to specify all parameters and place any form elements you may need.</p><p></p><p>You launch the tool from the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_forms.php">Forms</a> / Forms Editor, or from the <a href="toolbars_tables.php">Tables and Form</a>s bar. The command icon is shown next to it.

The tool's window contains two tabs:</p><ul>
	<li><a href="#settings">Form settings</a></li>
	<li><a href="#elements">Form elements</a></li>
</ul><a name="settings"></a><h2>Form settings</h2>

<p>The options of this tab allow you to specify options for submitting the form:</p>

<p><b>Action</b><br>
In this field, enter the address to which the form is to be sent. This can be, for example, the address of a CGI script, an email address, etc. To make your work easier, you can use the list, which includes the most popular names of data transfer protocols on the Internet.</p><p><b>Method</b><br>
Select the form submission method (<tt>GET</tt> or <tt>POST</tt>) from the list.</p><p><b>Target window</b><br>
Select from the list, or specify the name of the window into which the page resulting from the form submission will be loaded.</p><p><b>Encoding</b><br>
In this field you can specify in what format you want to send the data. This is needed, for example, when sending attachments to a form.</p><p><b>Character set</b><br>
In this field you can specify the national character encoding to be used to encode the texts in the form. Remember that these encodings must be supported by the server, otherwise the texts may be recognized incorrectly. If you enter more than one encoding, the individual encodings should be separated by commas.</p><p><b>File types</b><br>
In this field you can enter the types of files that can be sent as attachments to the form. If you enter more than one type, the different types should be separated by commas.</p><h2>Element style</h2>

<p>This group allows you to specify the style for the tag. Here you will find three fields that allow you to specify:</p><p><b>Definition of style</b><br>
In this field you define the style for the element to be placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor</a> tool that allows you to create a style definition in a friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
In this field you specify the class identifier assigned to the tag. The drop-down list allows you to access classes defined in the current document and in external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</p><p><b>Item ID</b><br>
Here you provide a unique identifier for this element in the document. These identifiers can be used, for example, when making jumps to specific parts of the page or in scripts.




<a name="elements"></a></p><h2>Form elements</h2>This tab is used to insert all its elements into the form. The inserted items will appear in the list. Here you can change the content of each element tag directly. 

 The buttons on the right side of the list allow you to launch the tools for creating form elements:<ul>
	<li><a href="tool_form_others.php">Form elements</a></li>
	<li><a href="tool_form_selectlist.php">Selection list</a></li>
	<li><a href="tool_form_textarea.php">Text window</a></li>
	<li><a href="tool_table_quick.php">Very fast table</a> - this button allows you to insert a table in which you will be able to place form elements</li>
</ul>

<p><b>Line wrapping</b><br>
Select this option if you want the rows in the item list to wrap so that long rows are displayed in their entirety.</p><h2>"Events and Attributes" button</h2>

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
	<li><a href="tool_form_textarea.php">Text box in the form</a></li><li><a href="tool_form_selectlist.php">Selection list in the form</a></li><li><a href="tool_form_others.php">Other form elements</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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