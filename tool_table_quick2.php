<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Table skeleton</title>

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
<h1>Tools - Table skeleton</h1>

<p>This tool is used to quickly create tables of the specified dimensions. You can select the number of columns and rows of the table. Then, depending on the set options, other tools will be launched to set the options of each table element.</p><p>You can start the Quick Table window from <a href="main_menu_main.php">The main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_tables.php">Tables</a> / Table framework, as well as from the toolbar <a href="toolbars_tables.php">Tables and forms</a>.</p><p>The window contains the following options:</p>

<p><b>Rows</b><br>
Enter the number of rows. If you do not enter any value, the table rows will not be created.</p><p><b>Columns</b><br>
Enter the number of rows. If you do not enter any value, the table cells will not be created. If the number of rows is zero, this field is disabled (there must be at least one row in the table to create a column).</p><p>The next options are designed to enable tools that handle individual table elements when the <tt>OK</tt> button is clicked:</p>

<p><b>Include table description </b> <br>
Select to run the <a href="tool_table_caption.php"> Table Description </a> tool to enter a description.</p><p><b>Settings for rows</b><br>
Check to run the <a href="tool_table_row.php">Table Row</a> tool for each table row to set the options for that row.</p><p><b>Settings for cells</b><br>
 Check to run the <a href="tool_table_cell.php">Table Cell</a> tool for each table cell to set its options.</p><p><b>Table border</b><br>
Mark the table to be framed ( <tt>border="1"</tt> argument in the <tt>TABLE</tt> tag).</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_table_editor.php">Table editor</a></li><li><a href="tool_table_tag.php">TABLE tag editor</a></li><li><a href="tool_table_cell.php">Tools - Table cell</a></li><li><a href="tool_table_row.php">Tools - Table row</a></li><li><a href="tool_table_caption.php">Tools - Table Description</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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