<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>HTML Help - HTML Help index editor</title>

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
<h1>HTML Help - HTML Help index editor</h1>


<p>The index is not a mandatory part of the dashboard, and for small projects it makes no sense to prepare it - it can be omitted. Nevertheless, it is a very interesting and efficient tool for navigation. It differs from the table of contents in that the individual items are not in the form of a hierarchical tree of topics - it is a simple index, and is not adorned with icons. The index is an index of topics, so-called keywords, which can be set in alphabetical order. Each topic can refer not only to a specific page, but also to a selected place of the page, marked with a keyword. A single topic can also contain multiple links to pages or topics. When you click on such a topic, a dialog box then opens with a selection of all the links assigned to it. The index is a very useful and even necessary element of the navigation panel for more complicated projects, or smaller ones, but when their subject matter justifies it, e.g. they contain many elements to be exposed on their pages.</p>

<h2>Launching</h2>

<p>You can launch the described tool using the button marked with the icon shown above. The button to launch this window can be found, for example, in the HTML Help menu and on the HTML Help toolbar, as well as in the <a href="tool_htmlhelp_hhp_editor.php">HTML Help project editor</a> window.</p><h2>Index main window</h2>

<p>In the main window of the editor, on its right side, there is a set of buttons, allowing you to organize topics by: placing them in the appropriate hierarchy in the topic tree (positioning buttons: up, down, level up, level down), adding a keyword, deleting items, or sorting topics in alphabetical order.<br>
There is also a field on the right side of the main window where you should enter the project directory.</p>

<h2>Element settings</h2>

<p>In this tab, we decide on the parameters of each of the individual elements of the index. The changes made will only apply to this element. Attention! It is absolutely necessary to accept them after any change in the settings by clicking on the "Update item data" button.</p>

<p><b>Keyword name</b><br>
Enter the name that will appear in the index in this field.</p>
<p><b>Update name with title or file name</b><br>
If you check this option, you don't have to type anything in the field above, because the name will be taken from the header of the HTML document appearing in the <tt><title></title></tt> tag, and if this tag is empty, the file name of the document will be placed.</p>
<p><b>Link to </b> <br>
This field provides space for the reference to which this index entry should lead. To select a file, you can use the buttons next to it, which allows you to select a file from the disk, or browse to an internal file located in another HTML Help project.</p>
<p><b>Local labels</b><br>
When the "Search" switch next to it is checked, the editor will search for local labels found in the document (e.g., those marked as <tt><a name="id"></a></tt>). The found labels will be added to the list of labels, from which it will be possible to select them and thus create a link to a specific label.</p>
<p><b>Title and meta keys</b><br>
This field contains the title of the document, or the file name if the title cannot be read, and the keywords from the <meta> section of the selected link element. The title specifies the name of the link for that keyword.</p>
<p><b>Links to this keyword</b><br>
A single keyword must lead to at least one link. However, you can assign any number of links to a single keyword, in which case when you click on the keyword, a dialog box will open with a list of all the links assigned to it. The default link can be marked with a red ball on such a list.</p>
<p><b>Alternative</b><br>
There is a space in this field to enter an alternative link to which this index item should lead, which will be activated if for some reason the main link does not work. To select a file, you can use the buttons next to it, which will allow you to select a file from disk, or point to an internal file located in another HTML Help project.</p>
<p><b>Local labels</b><br>
When the "Search" switch next to it is checked, the editor will search for local labels found in the document (e.g., those marked as <tt><a name="id"></a></tt>). The found labels will be added to the list of labels, from which it will be possible to select them and thus create a link to a specific label.</p>
<p><b>Window</b><br>
This field is for entering the name of the HTML Help window into which the document indicated by this table of contents item is to be loaded. HTML Help windows are defined in the <a href="tool_htmlhelp_hhp_editor.php#definiowanie-okien">project editor</a>.</p>
<p><b>Frame</b><br>
The purpose of this field is to enter the name of the window, or to select one of the predefined names from the drop-down list. This is to open this item in a window other than the default one.</p>
<p><b>Update element data</b><br>
Using this button is necessary if you want to accept changes to the settings for an item. If you do not confirm the changes and move to another item, the settings will be lost.</p>

<h2>Index properties</h2>

<p>This tab is for defining the general settings of the index. Selected or typed options will apply to all items. The changes made are saved together with the entire index.</p>

<p><b>Default window</b><br>
In this field we enter the name of the HTML Help window that will be used to display the content when you click on any element that does not have its own window definition.</p>
<p><b>Default frame</b><br>
The purpose of this field is to enter the name of the window, or select one of the predefined names from the drop-down list. This is to open this item in a window other than the default window.</p>
<p><b>Font</b><br>
This field provides a place to enter the font that will be used for the table of contents. Clicking on the icon next to the field opens a system window for selecting the font including its type and size.</p>
<p><b>Character set</b><br>
From the drop-down list of the field, select the font script to be used by HTML Help. If you are using any of the system fonts, the default setting that is displayed in this field by default, which is "001 DEFAULT", will suffice.</p>

<h2>Preview of the selected object</h2>

<p>This tab is used entirely for previewing the selected object. The HTML page assigned to the item can be viewed as in a regular web browser window.</p>


</td>
</tr>
</table><br><table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_htmlhelp_general.php">HTML Help - general information</a></li><li><a href="tool_htmlhelp_hhp_editor.php">HTML Project Editor Help</a></li><li><a href="tool_htmlhelp_hhc_editor.php">HTML Help table of contents editor</a></li><li><a href="tool_htmlhelp_folder_to_chm.php">Quick HTML Help from folder</a></li><li><a href="tool_htmlhelp_hhp_compilation.php">Compile HTML Help document</a></li><li><a href="tool_htmlhelp_compiler_info.php">HTML compiler information Help</a></li><li><a href="tool_htmlhelp_compiler_services.php">HTML Help and projects in Spider</a></li></ul>
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
