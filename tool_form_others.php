<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Form Items</title>

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
<h1>Tools - Form Items</h1>


<!-- tre&#347;&#263; pomocy -->

<p>The form generator is used for complex form preparation. It allows you to specify all parameters and place any form elements you may need.</p><p></p><p>You can run the tool from <a href="main_menu_main.php">Home name</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_forms.php">Forms</a> / Other form elements, or from the bar <a href="toolbars_tables.php">Tables and forms</a>. The command icon is shown next to it.</p><p>The tool window is divided into three parts:</p><ul>
	<li><a href="#elements">Available form elements</a></li>
	<li><a href="#settings">Form element options</a></li>
	<li><a href="#elem_list">List of created form elements</a></li>
</ul>

<p>To create a form element, select an element from the list, set its options, and then add it to the list of created elements using the "Add" button next to the list of form components at the bottom of the window.</p><a name="elements"></a><h2>Available form elements</h2>

<p>In this part of the window you can select the element you want to insert into the form. The following types of elements are available:</p>

<ul>
	<li><b>Editing field "Text"</b> - ordinary one-line text field</li>
	<li><b>Password field "Password"</b> - Password field - all letters displayed on the page will be as asterisks in order to hide the real text from possible password peeking</li>
	<li><b>Hidden field "Hidden"</b> - hidden field of the form, is used to pre-store values that do not need to be displayed on the page, but should be submitted with the form.</li>
	<li><b>"CheckBox" option</b> - a toggle for selecting options</li>
	<li><b>"Radio" option</b> - a switch to select one of several options in a given group</li>
	<li><b>File "File"</b> - a field used to specify the path to the file to be sent with the form</li>
	<li><b>Submit" button</b> - button that sends the form</li>
	<li><b>"Reset" button</b> - a button that cleans the contents of the form</li>
	<li><b>Ordinary button</b> - a button without an assigned default action</li>
	<li><b>Image submission</b> - an image that, when clicked, acts like clicking on the "Submit" button</li>
</ul>

<p>Depending on which type of element you select, the form element options available on the right side of this list change.</p><a name="settings"></a><h2>Form element options</h2>

<p>The options of this tab allow you to specify options for individual form elements.</p>

<p><b>Note!</b> <br>
All available options are listed below. However, for individual form elements, some of them may not appear, because they are not supported by a given element (e.g. there is no maximum text length for an image, URL to an image in the case of a text field, etc.)</p><p><b>Name</b><br>
Specify the name of the current element. This is necessary to identify the element when processing data from the form to the server.</p><p><b>Value</b><br>
Specify a default value for the current item.</p><p><b>Image description</b><br>
Provide a description of the inserted image (graphic button only).</p><p><b>URL to graphics</b><br>
Enter the URL to the image (graphics button only). You can use the list that lists recent addresses to images you have used, or use the button next to the field that opens the <a href="tool_graphic_browser.php">graphic viewer</a>.

<b>Order when TAB keypress</b><br>
Check this option if you want to specify the tab index of this element among the form elements. This index determines the order of the elements when you move through the form using the <tt>TAB</tt> key.</p><p><b>Shortcut key</b><br>
Check this option if you want to select a hotkey for this form element on the page. The shortcut key will be <tt>Alt+character</tt>, which you select from the list next to it. 

<b>Size</b><br>
Specify the size of the element which is the number of characters (text fields), or pixels (other elements).</p><p><b>Maximum length</b><br>
Specify the number of characters that can be entered at most in the current field.</p><p><b>Alignment</b><br>
Specify how this element is to be aligned with respect to other page elements. This attribute is defined in the HTML specification as <i>deprecated (deprecated</i>) and it is recommended to use CSS styles for alignment.</p><p><b>Read-only</b><br>
Check this option if the window is to be <i>read-only </i>(e.g., for the presentation of text, without the ability to change it)</p><p><b>Disabled</b><br>
Check this option if the window is to be locked ( <tt>disabled="disabled"</tt> attribute).</p><p><b>Selected</b><br><tt>Check</tt> this option if the current element is to be marked as<tt>checked</tt>. Only for <tt>radio</tt> and <tt>checkbox</tt> type elements.</p><p><b>Style definition</b> <br>
In this field you define the style for the element placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor </a> tool to create a style definition in a user-friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
In this field you specify the class identifier assigned to the tag. The drop-down list allows you to access classes defined in the current document and in external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</p><p><b>Item ID</b><br>
Here you provide a unique identifier for this element in the document. These identifiers can be used, for example, when making jumps to specific parts of the page or in scripts.




<a name="elem_list"></a></p><h2>Form elements</h2>


<p>This part of the window lists all items added to the form.</p><p><b>Add</b><br>
Click on this button to add the current item to the list. Use the arrow to the right of this button to choose how to insert form elements.</p>

<p><b>Clean</b><br>
Click on this button to quickly remove all added form components.</p><h2>"Events and Attributes" button</h2>

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
	<li><a href="tool_form_editor.php">Forms generator</a></li><li><a href="tool_form_textarea.php">Text box in the form</a></li><li><a href="tool_form_selectlist.php">Selection list in the form</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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