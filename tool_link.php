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
<title>Tools - Inserting links</title>

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
<h1>Tools - Inserting links</h1>

<!-- tre&#347;&#263; pomocy -->

<p>The window is used to insert links to other documents (HTML tag <tt>A</tt> ).</p><p>The tool can be launched from the menu <a href="main_menu_main.php">The main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_links.php">Directors</a>, as well as from the toolbars and the standard keyboard shortcut <tt>Ctrl+Shift+A</tt>. The command icon is shown above.</p>

<p>The window is divided into two parts. In the upper one it is possible to define the type of link:</p><ul>
	<li>URL link to web resources</li>
	<li>Link to email address</li>
</ul>

<p>At the bottom you can provide a description of the link, and other attributes of the tag.</p>




<h2>URL link to web resources</h2>

<p>In this tab you can enter link data to resources on the web (addresses to HTML documents, images, FTP servers and others)</p><b>Link URL</b><br>
Enter the address of the referrer. Use the drop-down list to select one of the most recently inserted addresses. You can also use the buttons next to the field:<ul>
	<li><b>Target file selection</b> - click to open the tool to select a file from disk</li>
	<li><b>Copy the link to the "Description" field</b> - click to copy the link to the "Link Description" field at the bottom of the window</li>
</ul>

<p><b>Labels in the document</b><br>
From this list, you can select the label in the target document that you want the link to lead to.</p>

<p><b>Copy title to description</b><br>
Check this switch so that when you select a link file, the program looks for the title of the specified document (the contents of the TITLE tag) and automatically places it as a description of the link in the "Link description" field below</p><p><b>Label</b><br>
In this field you can enter a label name for the tag you are editing or creating <tt>A</tt>. The label will be inserted as a <tt>name</tt> attribute.</p><b>Target window</b><br>
In this field you can specify the name of the frame in which the target document is to be opened (HTML <tt>target</tt> attribute). Leaving the field empty means that the document is to be opened in the same frame. You can also indicate one of the values from the list:<ul>
	<li><b>_blank</b></li>
	<li><b>_self</b></li>
	<li><b>_top</b></li>
	<li><b>_parent</b></li>
</ul>


<h2>Link to email address</h2>

<p>In this tab you can enter the email address to which you want the link to point. Clicking on such a web element will open a window for typing the letter of your default email program.</p>

<p><b>E-mail address</b><br>
Enter the email address (or multiple addresses) to which you want the letter to be sent. You can choose from a list of recently entered email addresses.</p>

<p><b>Copy the link to the "Email subject" and "Description" fields. </b> <br>
Click to create a subject for the letter and a description for the link from the email address</p>

<p><b>Send a copy to</b><br>
Enter the email address to which you want to send a copy of the letter. You can choose from a list of recently entered email addresses.</p>

<p><b>Hide the copy address</b><br>
Click to mark the specified address hidden and not show in the letter header. This is useful especially when you are writing a letter to larger numbers of people who should not know each other's email addresses of other recipients.</p>

<p><b>Email subject</b><br>
Enter the default subject that will be inserted in the email.</p>

<p><b>Email content (excerpt)</b><br>
Enter a fragment of text to be inserted into the email. Note - this may not work with some email programs and browsers!</p>

<h2>Description and hotkey</h2>

<p><b>Link description</b><br>
In this field you can provide a description of the link. This is the text that will be placed between the &amp;lt;A&amp;gt; and &amp;lt;/A&amp;gt; tags. Alternatively, you can insert an image using the button on the right side of the field.</p>

<p><b>Hint above the link</b><br>
Fill in this field so that when you move the mouse cursor over the link, a balloon with its description appears.</p>

<p><b>Key shortcut</b><br>
When you select this switch, you will be able to choose a keyboard shortcut for the link.</p>



<h2>Element style</h2>

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
	<li><a href="tool_link_map_editor.php">Link map editor</a></li><li><a href="tool_events_attributes.php">Events and other attributes</a></li><li><a href="tool_style_editor.php">Style editor for tags</a></li><li><a href="tool_style_class.php">Assigning a CSS class for tags</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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