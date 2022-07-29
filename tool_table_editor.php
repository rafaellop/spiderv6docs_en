<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Table Editor</title>

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
<h1>Tools - Table Editor</h1>

<p>Table editor is a powerful tool that allows you to create tables in a rather convenient way. The tool consists of several tabs where you set the various elements of the table.</p><p>You launch the Table Editor window from the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_tables.php">Tables</a> / Table Editor, as well as from the <a href="toolbars_tables.php">Tables and Forms</a> toolbar. The default keyboard shortcut to launch this window is <tt>Ctrl+T</tt>.</p><h2>Table settings tab</h2>

<p>On this tab you will set the basic information about the table you are creating, as well as the style for the <tt>table</tt> tag. Here you will find three groups of settings:</p><p>The <b>Basic Settings</b> group is concerned with setting dimensions and contains the following settings:</p><p><b>Number of columns in the table</b><br>
In this field you specify how many columns the table will consist of.</p><p><b>Number of rows in the table</b><br>
In this field you specify how many rows the table will consist of.</p><p><b>Table width</b><br>
In this field, enter the width of the table in points. If you want the entered value to specify a percentage width relative to the browser window, check the switch marked "%".</p><p><b>Table border</b><br>
This field specifies the thickness of the table border. Check the toggle next to it to always include this attribute in the TABLE tag, regardless of the value in this field.</p><p><b>Always insert this attribute</b><br>
Check this toggle to always insert the attribute in the TABLE tag, regardless of the value in the field next to it.</p><p><b>Cell margin (cellpadding)</b><br>
The value entered in this field determines the size of the empty space between the cell border and its contents. In other words, the inner margin. Check the toggle switch next to it to always include this attribute in the TABLE tag, regardless of the value in this field.</p><p><b>Always insert this attribute</b><br>
Check this toggle to always insert the attribute in the TABLE tag, regardless of the value in the field next to it.</p><p><b>Spacing between cells (cellspacing)</b><br>
The value entered in this field determines the size of the empty space between the table border and the cell display area. Check the toggle next to it to always include this attribute in the TABLE tag, regardless of the value in this field.</p><p><b>Always insert this attribute</b><br>
Check this toggle to always insert the attribute in the TABLE tag, regardless of the value in the field next to it.</p><p><b>Insert Space &amp;nbsp; in blank cells</b><br>
If you check this switch, when generating the HTML code of the table, Spider will put a non-breaking space &amp;nbsp; character in all empty cells without content.</p><p><b>Table border lines</b><br>
The values of this list determine how the table border lines will be displayed. Possible values are:</p><ul>
	<li>void - no borders</li><li>above - only above</li><li>below - only below</li><li>hsides - above and below</li><li>vsides - left and right</li><li>lhs - left borders only (including cells)</li><li>rhs - right side only</li><li>box - all sides</li><li>border - all sides.</li></ul>

<p><b>Visibility of borders</b><br>
The values of this list determine which lines will be displayed between table cells. Possible values are:</p><ul>
	<li>none - no line</li><li>groups - between groups</li><li>rows - only between rows</li><li>cols - only between columns</li><li>all - on all sides.</li></ul>

<p>In the <b>Table Description and Summary</b> group, you will set the <b>description</b>, which is the type of table header displayed above the table, and the Table <b>Content Summary</b>, which is a broader description of the table content that can be useful for browsers for people with disabilities. The summary can, for example, be read aloud by such a browser for the visually impaired.</p><p>The style definition group for the table allows you to assign the <tt>table</tt> tag appropriate styles. Here you will find three fields that allow you to specify:</p><p><b>Definition of style</b><br>
In this field you define the style for the element to be placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor</a> tool that allows you to create a style definition in a friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
In this field you specify the class identifier assigned to the tag. The drop-down list allows you to access classes defined in the current document and in external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</p><p><b>Item ID</b><br>
Here you provide a unique identifier for this element in the document. These identifiers can be used, for example, when making jumps to specific parts of the page or in scripts.</p><h2>Row Settings tab</h2>

<p>This tab allows you to specify common settings for selected rows. Here you will find three groups: Rows, Row Alignment and Style Definition for a Row. We will describe them one by one:</p><p>The <b>Rows</b> group displays information about available rows in the current table. Additional columns show the properties of individual rows, which are determined in the following groups.</p><p>The <b>Row Alignment</b> group allows you to determine:</p><p><b>Horizontal alignment</b><br>
This parameter specifies the horizontal alignment of the contents of the row cells as long as they do not have their own alignment definition.</p><p><b>Vertical alignment</b><br>
This parameter specifies the vertical alignment of the contents of the row cells as long as they do not have their own alignment definition.</p><p>The <b>Style Definition</b> group <b>for a row</b> allows you to assign the <tt>tr</tt> tag corresponding to the rows the appropriate styles. Here you will find three fields that allow you to specify:</p><p><b>Definition of style</b><br>
In this field you define the style for the element to be placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor</a> tool that allows you to create a style definition in a friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
In this field you specify the class identifier assigned to the tag. The drop-down list allows you to access classes defined in the current document and in external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</p><p><b>Item ID</b><br>
Here you provide a unique identifier for this element in the document. These identifiers can be used, for example, when making jumps to specific parts of the page or in scripts.</p><h2>Cells tab, Settings and Content</h2>

<p>This tab presents a view of the table cells and allows you to specify settings for individual cells as well as their contents. The cell for which the settings are displayed is highlighted in a lighter color. In addition, if a <tt>colspan</tt> or <tt>rowspan</tt> attribute is defined for a cell with a value greater than one (that is, merging cells horizontally and vertically), the cells that will be merged with the current cell are locked and marked in dark gray.</p><p>On the tab, in addition to the simplified cell view, there are three groups of settings. The first two "Cell Settings" and "Cell Style Definition" are located on the "Cell Settings" tab. The third group of settings will be visible <a href="#zawartosc">when you switch to the "Cell Contents" page</a>.</p>

<h3> <b>Cell Settings</b> page</h3>The items placed in this group allow you to specify cell parameters for aligning and merging cells. Here you will find the following options:<p><b>Horizontal alignment</b><br>
This parameter specifies the horizontal alignment of the cell contents.</p><p><b>Vertical alignment</b><br>
This parameter specifies the vertical alignment of the cell contents.</p><p><b>Combining cells vertically (rowspan)</b><br>
This parameter determines how many cells in the vertical layout are merged into one.</p><p><b>Connecting cells horizontally (colspan)</b><br>
This parameter determines how many cells in a horizontal layout are merged into one.</p><p><b>The cell is a header</b><br>
Check this toggle to define that the selected cell is a table header cell.</p><p><b>Assign to all in the column</b><br>
Fills all cells of all rows in the selected column with the same content and settings.</p><p><b>Assign to all in row</b><br>
Fills all cells in the current row with the same content and settings.</p><p>The <b>Cell Style Definition</b> group allows you to assign the <tt>td</tt> tag corresponding to the cells the appropriate styles. Here you will find three fields that allows you to specify:</p><p><b>Definition of style</b><br>
In this field you define the style for the element to be placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor</a> tool that allows you to create a style definition in a friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
In this field you specify the class identifier assigned to the tag. The drop-down list allows you to access classes defined in the current document and in external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</p><p><b>Element identifier</b><br>
Here you provide a unique identifier for this element in the document. These identifiers can be used, for example, when making jumps to specific parts of the page or in scripts.

<a name="zawartosc"></a></p><h3><b>Cell contents</b> page</h3>
<p>Elements that make it easier to edit the contents of a table cell are located in the third group of settings. It becomes visible when you click on the "Content" button. The largest element is the edit field, where you can enter the content of the cell. You can enter in it the content that will appear in the table cell indicated above, as well as here images, links, forms, etc. The buttons to the left of the edit box are a convenience.</p><p>After making changes to the settings of the selected row, press the <b>Accept changes made to the row</b> button for the changes to be remembered.</p><h2>Table Preview tab</h2>

<p>On this tab you can see a preview of the table. The preview is displayed in the built-in MS Internet Explorer browser, so it shows the appearance of the table in its final form. Next to the preview area is a resolution simulation button that allows you to see how the table will look in different resolutions.</p><h2>Table code preview</h2>



<p>If you want to see what the code of the entire table generated by this tool will look like, see the last tab. There you will find, besides the preview, also switches that allow you to choose the formatting of the presented code. It can be HTML in uppercase, HTML in lowercase or XHTML. In addition, you can enable line wrapping in the preview.</p><h2>Inserting a table</h2>

<p>If you want to insert a table, use the OK button on the right side of the window. Under the button, there is a menu that allows you to insert code in different formatting: HTML uppercase, HTML lowercase and XHTML. By default, when you press the OK button, the HTML code is inserted in lowercase letters.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_table_tag.php">TABLE tag editor</a></li><li><a href="tool_table_quick.php">Very quick table</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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
