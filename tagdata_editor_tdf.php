<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Markup Language Definition File Editor</title>

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
<h1>Markup Language Definition File Editor</h1>







<p>To access the definition file editor (called the TDF editor for short - from <i>TagDefinition</i>) use the <b>TDF Definition File Editor</b> command (the command icon is shown above), which is located in the <a href="main_menu_view.php">View</a> / <a href="main_menu_view_settings.php">General program Settings</a> <a href="main_menu_view.php">menu</a>. You can also run it using the button located in the <a href="settings.php">program Settings</a> window under <a href="settings_codeinsight_tags.php">Facilitation, Dynamic Attributes, Other</a> or in the menu. The button is shown above.</p><p>With the TDF editor, you can modify or expand the list of markup languages supported by Spider from within the dynamic help tools (hints for markup, markup and its attributes, etc.), and even (or perhaps especially) create entirely new definitions for languages not previously supported by the program. This makes Spider an incredibly flexible tool, significantly facilitating the creation of documents in virtually any markup language (even in a language unknown to the program's creators) while keeping the hints and auto-completion mechanisms working.</p><p>However, creating a definition file for a markup language from scratch is a very tedious and time-consuming activity. That is why Spider is equipped with a unique mechanism for importing a language's data from its DTD. Simply import the DTD file using the commands described below, and a TDF file is automatically created.</p>

<p>The TDF editor window consists of two main areas, i.e. a list of supported markup languages (with buttons for handling it) and a tabbed area where the markup settings of the selected language are defined.</p><h2>Tag categories</h2>

<p>Here, you can manage the list of markup languages that Spider supports, add and delete them, as well as select the current language.</p><p><b>Categories</b><br>
Select a category (markup language) from the list to be able to modify the definition of its tags. Use the buttons next to it to add, delete or rename a category.</p><p><b>Properties</b><br>
Click this button to open the <a href="tagdata_editor_tdf_properties.php">Properties</a> window of the <a href="tagdata_editor_tdf_properties.php">markup category</a>, where settings such as the path to the documentation or the language description can be edited,</p><p><b>Import</b><br>
There are two commands under this button:</p><ul>
	<li><b>Import DTD file</b> - under this button is a powerful tool that allows you to automatically import the tags of any language from its DTD. Its operation is reduced to the indication of the DTD file to be imported.</li><li><b>Import TDF file</b> - this command allows you to import a previously created custom TDF file (e.g. from an archive or Spider versions earlier than 6)</li></ul>

<p class="czerwony"><b>Attention</b><br>
If you created your own TDF files in Spider version earlier than 6, you must import them using the <b>Import TDF file</b> command mentioned above!</p>



<h2>Tags</h2>

<p><b>Tags in the selected category</b><br>
Select a tag to be able to modify its definition. Using the buttons below, you can manage the tag list, i.e., add new tags, delete or rename tags, as well as set one of the tags as the document's parent tag. The document's parent tag is important when recognising the language in which the document is created (read more about this in the description of the <b>Recognise tag category based on document parent</b> tag switch in the help to the Tag <a href="tagdata_editor_tdf_properties.php#nadrzedny">Category Properties</a> window).</p><p>The group of tabs on the right-hand side of the window allows you to specify parameters for the tag selected in the list. Once you have selected a tag, you can specify its parameters in the tabs:</p><h3>Basic tag data</h3>

<p>This tab allows you to specify general settings for the markup not related to its attributes and event handlers for scripting languages. You have access to the following fields here:</p><p><b>Tag name</b><br>
You can change the name using the button next to the name field.</p><p><b>Without content</b><br>
Specifies whether the tag can contain any content. Examples of tags in XHTML without content are <tt><img></tt>, <tt><br></tt>, which do not have a corresponding closing tag.</p><p><b>Closure not required</b><br>
Specifies whether tag closure is required. This option does not apply to XML language tags.</p><p><b>Tag description</b><br>
The description is displayed, for example, in the tag hints.</p><p><b>Tag status</b><br>
Specifies the status of the markup, e.g. whether it is specific to a certain browser or perhaps already abandoned (deprecated).</p><p><b>Autocomplete</b><br>
This is the definition of an autocomplete rule. The | character indicates the position where the cursor is to be positioned when the tag is completed.</p><p><b>Documentation file</b><br>
The name of the documentation file for the current tag. In addition to the name of this file, it is important to correctly specify the name of the documentation directory for the current category in the <a href="tagdata_editor_tdf_properties.php#nadrzedny">Tag Category Properties</a> window. This documentation will be displayed on the <a href="down_help.php">lower help panel</a> after using the <b>Display Help</b> command <b>for</b> the current markup (e.g. in the <a href="main_menu_editor.php">editor's pop-up menu</a>, the standard shortcut is <tt>Ctrl+F1</tt>).</p><p><b>Tags including:</b><br>
Specifies the list of tags that can be placed inside the tag being modified. For example, only the <tt>LI</tt> tag can be inside the <tt>UL</tt> tag. The <tt>*</tt> symbol indicates any tag.</p><p><b>Preview</b><br>
Specifies the preview text that is used in the tag inspector when modifying a tag.</p><p><b>Preview (CSS)</b><br>
Specifies the preview text that is used in the CSS style inspector when modifying the style for a tag.</p><p><b>Compatibility</b><br>
Check this switch to determine the compatibility of the current markup with browsers. Then click the button next to it to open the <a href="tagdata_editor_tdf_compatibility.php">Browser Comp</a>atibility window. This information will be displayed, for example, in the markup hints.</p><p>To accept the changes, be sure to click on the save button marked with the floppy disk icon shown next to it. Only then will they be saved to a file. If you try to switch to another tab or switch off the TDF editor, the program will also ask you whether you want to save the changes.</p>


<h3>Tag attributes</h3>

<p>On this tab, you determine which attributes are available for the selected tag and which characteristics they have. New attributes are added using the button marked with a plus sign. Once added, the attribute is added to the list and its parameters can be set in the fields below:</p><p><b>Attribute name</b><br>
To change it, click on the button next to the field.</p><p><b>Attribute description</b> <br>
The description is displayed, for example, in attribute hints.</p><p><b>Tag attribute status</b><br>
Specifies the status of an attribute, e.g. whether it is specific to a certain browser or perhaps already abandoned (deprecated).</p><p><b>This attribute is required</b><br>
Some tags require certain attributes. Here you can indicate that the attribute you are modifying is just such a required attribute of the tag you are modifying.</p><p><b>Attribute type</b><br>
Specifies the attribute type that causes the property editor in the markup inspector to be used for the attribute.</p><p><b>Values</b><br>
Specifies a list of values for the tag attribute being modified. These values are displayed in the tag inspector and in the dynamic attributes function. If an attribute can have multiple values separated by a separator, select the <b>Allow multiple values</b> switch and then enter a <b>Separator</b> (usually a semicolon, comma, or space).</p><p><b>Compatibility</b><br>
Check this switch to specify the compatibility of the current attribute with browsers. Then click the button next to it to open the <a href="tagdata_editor_tdf_compatibility.php">Browser</a> Compatibility window. This information will be displayed, for example, in the markup hints.</p><p>To accept the changes, be sure to click on the save button marked with the floppy disk icon shown next to it. Only then will they be saved to the file. If you try to switch to another tab or switch off the TDF editor, the program will also ask you whether you want to save the changes.</p>


<h3>Tag events</h3>

<p>This tab determines which events for scripting languages are available for the selected tag (for example, <tt>onClick</tt>, or <tt>onFocus</tt>, etc.). Use the buttons next to the list to add and remove events. The following settings are available for the event:</p><p><b>Event name</b> <br>
You can change it by clicking on the button next to the field.</p><p><b>Event description</b> <br>
It will show up in the tooltip for the tag.</p><p><b>Event status</b><br>
Indicates whether the event is described in the language specification or is an extension of some browser.</p><p><b>Event type</b><br>
Specifies "where the event comes from" (e.g. from clicking the mouse button or pressing a key on the keyboard).</p><p><b>Compatibility</b><br>
Check this switch to specify the compatibility of the current attribute with browsers. Then click the button next to it to open the <a href="tagdata_editor_tdf_compatibility.php">Browser</a> Compatibility window. This information will be displayed, for example, in the markup hints.</p><p>To accept the changes, be sure to click on the save button marked with the floppy disk icon shown next to it. Only then will they be saved to a file. If you try to switch to another tab or switch off the TDF editor, the program will also ask you whether you want to save the changes.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tagdata_editor_tdf_properties.php#nadrzedny">Properties of tag categories</a></li>
	<li><a href="tagdata_editor_tdf_compatibility.php">Browser compatibility</a></li>
	<li><a href="main_editor_codeinsight.php">Tag completion</a></li><li><a href="settings_codeinsight_tags.php">Dynamic code settings</a></li></ul>
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
