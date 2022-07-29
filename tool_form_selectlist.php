<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Form Selection List</title>

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
<h1>Tools - Form Selection List</h1>


<!-- tre&#347;&#263; pomocy -->

<p>This tool is used to create a selection list in the form ( <tt>SELECT</tt> and <tt>OPTION</tt> tags).</p><p></p><p>You can run the tool from <a href="main_menu_main.php">The main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_forms.php">Forms</a> / Choice list in the form, or from the bar <a href="toolbars_tables.php">Tables and forms</a>. The command icon is shown next to it.</p><p><b>Name</b><br>
Specify the name of the text field. This is necessary to identify the item when processing data from the form to the server.</p><p><b>Size</b><br>
Enter the number of rows with options that will be shown in the list box at one time. If there are more options, scroll bars will be displayed.

<b>Tabulation</b><br>
Check this option if you want to specify the tabulation index of this item among the form elements. This index determines the order of the elements when you move through the form using the <tt>TAB</tt> key.</p><p><b>Disabled</b><br>
Check this option if the list is to be locked ( <tt>disabled="disabled"</tt> attribute).</p><h2>List content</h2>

<p>The options in this group allow you to add list items. Buttons next to the list allow you to add, delete and sort (manually or automatically) items.</p>

<p><b>Option</b><br><br>
Enter the name of the option in this field.</p><p><b>Value</b><br>
In this, field, enter the value assigned to the current option name.</p><p>If you indicate any item in the list, its name and value will be placed in the fields above for possible editing.</p>



<h2>Element style</h2>

<p>This group allows you to specify the style for the tag. Here you will find three fields that allow you to specify:</p><p><b>Definition of style</b><br>
In this field you define the style for the element to be placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor</a> tool that allows you to create a style definition in a friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
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
	<li><a href="tool_form_editor.php">Forms generator</a></li><li><a href="tool_form_textarea.php">Text box in the form</a></li><li><a href="tool_form_others.php">Other form elements</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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