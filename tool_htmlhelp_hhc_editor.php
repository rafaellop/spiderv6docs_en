<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>HTML Help - HTML Help table of contents editor</title>

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
<h1>HTML Help - HTML Help table of contents editor</h1>



<p>The table of contents is the main part of the HTML Help navigation panel. With its help we navigate through the sometimes very complicated system of pages. The editor allows you to make the table of contents in such a way that, on the one hand, it corresponds to the logic of the project, on the other hand, it is visually interesting.<br>
   The table of contents is presented in the form of a tree of topics. Thus, it can be formulated as main topics and sub-topics, which in turn can contain their own branches. We can equip each item with its own icon, choosing from a long list the ones that best suit the topic. We can also choose the most appropriate font typeface, and background colors.</p>

<h2>Launching</h2>

<p>You can launch the described tool using the button marked with the icon shown above. The button to launch this window can be found, for example, in the HTML Help menu and on the HTML Help toolbar, as well as in the <a href="tool_htmlhelp_hhp_editor.php">HTML Help project editor</a> window.</p><h2>Main table of contents window</h2>

<p>In the main window of the editor, on its right side, there is a set of buttons, allowing you to organize topics by: placing them in the appropriate hierarchy in the topic tree (positioning buttons: up, down, level higher, level lower), deciding on the type of topic (main, subordinate), deleting items, sorting topics in alphabetical order, and creating new topics based on existing ones.<br>
On the right side of the main window, there is also a field in which to enter the project directory.</p>

<h2>Element settings</h2>

<p>In this tab we decide the parameters of each individual element of the table of contents. The changes made will apply only to that element. Note: It is imperative that after any change in the settings you accept them by clicking on the "Update element data" button.</p>

<p><b>Name</b><br>
Enter the name that will appear in the table of contents in this field.</p>
<p><b>Update name with title or file name</b><br>
If you check this option, you don't have to type anything in the field above, because the name will be taken from the header of the HTML document appearing in the <title> tag, and if this tag is empty, the file name of the document will be inserted.</title></p>
<p><b>Link to</b> <br>
This field provides a space for the reference to which this entry in the table of contents should lead. To select a file, you can use the buttons next to it, which allows you to select a file from the disk, or browse to an internal file located in another HTML Help project.</p>
<p><b>Local labels</b><br>
When the "Search" switch next to it is checked, the editor will search for local labels found in the document (e.g., those marked as <a name="id">). The found labels will be added to the list of labels, from which it will be possible to select them and thus create a link to a specific label.</a></p>
<p><b>Alternative link</b><br>
There is space in this field to enter an alternative link to which this table of contents item should lead, which will be activated when the main link does not work for some reason. To select a file, you can use the buttons next to it, which will allow you to select a file from disk, or point to an internal file located in another HTML Help project.</p>
<p><b>Local labels</b><br>
When the "Search" switch next to it is checked, the editor will search for local labels found in the document (e.g., those marked as <a name="id">). The found labels will be added to the list of labels, from which it will be possible to select them and thus create a link to a specific label. These labels refer to alternative links.</a></p>
<p><b>Window</b><br>
This field is for entering the name of the HTML Help window into which the document indicated by this table of contents item is to be loaded. HTML Help windows are defined in the <a href="tool_htmlhelp_hhp_editor.php#definiowanie-okien">project editor</a>.</p>
<p><b>Frame</b><br>
The purpose of this field is to enter the name of the window, or to select one of the predefined names from the drop-down list. This is to open this item in a window other than the default one.</p>
<p><b>Item icon</b><br>
From the drop-down list, you can select 42 custom icons that each table of contents item can have. If there is no selection, standard icons will be added, i.e. booklets for the main topic and cards for the other items.</p>
<p><b>Change category</b><br>
By checking this switch and clicking the item update button below, you can cause the current inventory item to be converted to a category (if it is a regular item), or to an item (if it is a category without sub-elements)</p>
<p><b>Update element data</b><br>
Using this button is necessary if you want to accept changes to the settings for an item. If you do not confirm the changes and move to another item, the settings will be lost.</p>

<h2>Table of Contents properties</h2>

<p>This tab is for defining the general settings of the table of contents. Selected or typed options will apply to all items. The changes made are saved along with the entire table of contents.</p>

<p><b>Default window</b><br>
In this field we enter the name of the HTML Help window that will be used to display the content when you click on any element that does not have its own window definition.</p>
<p><b>Default frame</b><br>
The purpose of this field is to enter the name of the window, or select one of the predefined names from the drop-down list. This is to open this item in a window other than the default window.</p>
<p><b>Font</b><br>
This field provides a place to enter the font that will be used for the table of contents. Clicking on the icon next to the field opens a system window for selecting the font including its type and size.</p>
<p><b>Character set</b><br>
From the drop-down list of the field, select the font script to be used by HTML Help. If you are using any of the system fonts, the default setting that is displayed in this field by default, which is "001 DEFAULT", will suffice.</p>
<p><b>Use folder icons instead of books</b><br>
When this option is checked, folder icons will be used instead of the standard book icons in the main topics.</p>
<p><b>Color of the elements</b><br>
This field is used to select the color of the table of contents text. The drop-down list contains a defined list of primary colors, and a color palette switch. The default color is black. To the right of the field is a button to restore the default color.</p>
<p><b>Background color</b><br>
This field is used to select the background color of the table of contents. The drop-down list contains a defined list of primary colors, and a color palette switch. The default color is white. To the right of the field is a button to restore the default color.</p>
<p><b>Appearance</b><br>
This field lists the minor appearance options for the HTML Help table of contents. You should select the ones you need to change the appearance. Below the box is a button to restore the default settings of this window. Here is the list of options:</p><ul>
   <li><p><b>Border</b> <br>
When this option is selected, the table of contents pane gets a border.</p>
   </li><li><p><b>Plus and minus buttons</b><br>
	When this option is selected, plus signs for undeveloped branches will appear at node points in the topic tree, while minus signs will appear for developed branches.</p>
   </li><li><p><b>Leave selection</b><br>
If you select this option, the selection of this item will remain even though you have moved to the window presenting this item, which allows for better control.</p>
   </li><li><p><b>Line to the root</b> <br>
After selecting this option, expanding a branch will show a vertical line connecting the branch's elements with its main position.</p>
   </li><li><p><b>Sunken frames</b><br>
	When this option is selected, the table of contents border will have a concave appearance.</p>
   </li><li><p><b>Auto-tracking selection</b><br>
	When this option is checked, selections will be automatically tracked.</p>
   </li><li><p><b>Dialogue framing</b><br>
	If you check this option, you will get an additional border.</p>
   </li><li><p><b>Lines connecting the elements</b><br>
	When this option is selected, individual elements will gain additional vertical lines connecting them.</p>
   </li><li><p><b>Expand one category</b><br>
	If you select this option, only the category expands.</p>
   </li><li><p><b>Raised frames </b> <br>
If you select this option, the table of contents will have a convex border.</p>
   </li><li><p><b>Reading order from right to left</b><br>
	This option is a convenience for nationalities whose writing is of the Hebrew type and reads from right to left.</p>
   </li><li><p><b>Scrollbar on the left</b><br>
   	When this option is selected, the vertical scrollbar will appear on the left side. This is a convenience for those using Hebrew type.</p>
   </li><li><p><b>Select whole line</b><br>
	When this option is selected, the selection will expand to the full width of the table of contents if there are subtitles on several lines.</p>
</li></ul>


<h2>Preview of the selected object</h2>

<p>This tab is used entirely for previewing the selected object. The HTML page assigned to the item can be viewed as in a regular web browser window.</p><br></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_htmlhelp_general.php">HTML Help - general information</a></li><li><a href="tool_htmlhelp_hhp_editor.php">HTML Project Editor Help</a></li><li><a href="tool_htmlhelp_hhk_editor.php">HTML Help index editor</a></li><li><a href="tool_htmlhelp_folder_to_chm.php">Quick HTML Help from folder</a></li><li><a href="tool_htmlhelp_hhp_compilation.php">Compile HTML Help document</a></li><li><a href="tool_htmlhelp_compiler_info.php">HTML compiler information Help</a></li><li><a href="tool_htmlhelp_compiler_services.php">HTML Help and projects in Spider</a></li></ul>
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
