<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Table cell</title>

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
<h1>Tools - Table cell</h1>

<p>This tool is used to create and edit the table row tag <tt>TR</tt>.</p><p>You launch the Table Cell window from the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_tables.php">Tables</a> / Table Cell, as well as from the <a href="toolbars_tables.php">Tables and Forms</a> toolbar.</p><h2>Cell type selection</h2>

<p>In the Cell Type group, indicate which cell you want to create. Header cells differ from regular cells by their default text formatting.</p>

<p><b>ordinary (TD)</b><br>
Select if you want to create a regular table cell (defaults to plain text).</p>

<p><b>header (TH)</b><br>
Select if you want to create a table header cell (bold text by default).</p>

<p>If you are re-editing an existing table cell, these options will be inactive (set according to the existing type).</p>

<h2>Tag settings</h2><b>Cell contents</b><br>
In this field you can write text that will be placed in the cell you are editing. With the button on the right you can start:<ul>
	<li><a href="tool_graphic_insert.php">image insertion tool </a> you can use to insert a picture into a cell,</li><li><a href="tool_link.php">link insertion tool</a>, with which you can insert into a cell a link to another document on the web.</li></ul>



<p><b>Width</b><br>
Select a value that will be the width of the cell. If you check the switch to the right of the box, the size given will be inserted as a percentage.</p><p><b>Height</b><br>
Select the value that will be the height of the cell. If you check the toggle on the right side of the box, the specified size will be inserted as a percentage.</p><p><b>Horizontal alignment</b><br>
Select from the list how to align the cell contents horizontally.</p>

<p><b>Vertical alignment</b><br>
Select from the list how to align the cell contents vertically.</p>

<p><b>Combine columns (colspan)</b><br>
If you want to merge several cells in consecutive columns, enter the appropriate number of cells to merge in this field. <br>
Remember to reduce the number of cells in the current row in the HTML code accordingly, so that the sum of all <tt>Colspan</tt> values in this row equals the number of columns in the table (with the absence of this attribute in the <tt>TD/TH</tt> tag indicating a default value of <tt>1</tt>).</p>

<p><b>Connect the lines (Rowspan)</b><br>
If you want to merge several cells in consecutive rows, enter the appropriate number of cells to merge in this field. <br>
Remember to reduce the number of cells in consecutive rows in the HTML code accordingly, so that the sum of all <tt>Rowspan</tt> values in a row equals the number of rows in the table (with the absence of this attribute in the <tt>TD/TH</tt> tag indicating a default value of <tt>1</tt>).</p>




<h2>Element style</h2>

<p>This group allows you to specify the style for the tag. Here you will find three fields that allow you to specify:</p><p><b>Style definition</b> <br>
In this field you define the style for the element placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor </a> tool to create a style definition in a user-friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
In this field you specify the name of the class that will be assigned to the tag. The drop-down list allows you to access the classes defined in the current document and in the external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</p><p><b>Item ID</b><br>
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
	<li><a href="tool_table_editor.php">Table editor</a></li><li><a href="tool_table_tag.php">TABLE tag editor</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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
