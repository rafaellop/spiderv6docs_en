<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Creating and editing tables</title>

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
<h1>Creating and editing tables</h1>

<!-- Tre&#347;&#263; pomocy -->

<p>With the help of a table, we can present some data in a nice way, using the ability to border and combine cells. However, tables aren't just for that. They are also very often used to arrange and format individual parts of a website. It is even hard to notice because these tables have neither borders, nor visible columns or cells.</p>

<p>Spider has several tools for complex table creation from scratch, from a simple wizard to a very advanced table editor. There are also tools for editing individual table tags.</p>


<p><b>Quick table creation</b></p><p>To quickly create a table as shown below, use the command <a href="tool_table_quick.php">Very fast table</a> in <a href="main_menu_main.php">the main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_creators.php">Tag code creators</a>.</p>


    <table width="200" border="1">
    <tr>
      <td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td>
      <td>&nbsp;&nbsp;</td>
    </tr>
    </table>

<div>&nbsp;&nbsp;</div>

<ol>
  <li>Select the number of rows and columns - to do this, click on the grid and drag the mouse to the desired position so that as many columns and rows are selected as you want to create in the table (in this case 2 rows by 3 columns). You can also use the sliders on the right and at the bottom of the grid to set more rows (increments of 5). The number of rows and columns currently selected is displayed at the bottom right of the tool window.</li>
  <li>Click on the Table Parameters button in the bottom right corner, next to the grid, and set the appropriate parameters for the <tt><table> tag (in this case <tt>Table Width</tt>: 200, <tt>Border around table:</tt> 1). Press OK.</table></tt></li>
  <li>Once you have set the table parameters, press the OK button. You can also use the drop-down list next to the OK button to insert the table code with the appropriate formatting.</li>
</ol>

<p>The second, more complex tool is <a href="tool_table_quick2.php">Quick Table</a> This tool allows you to create any table quickly and easily. Step by step, the tool will guide you through the process of creating a table - one by one you will choose the number of rows and columns, their formatting, table description etc.</p>

<h2>Advanced tools</h2>

<p>However, a more powerful tool for creating tables is the <a href="tool_table_editor.php">Table Editor</a>. When you open this tool, you should see a window with several tabs. Each tab is responsible for creating and presenting various table elements, such as selecting the number of columns and rows, table borders, etc., setting column and row tags, creating and assigning styles, and finally previewing the finished table and the generated HTML code.</p>


<h2>Commands for inserting and editing table tags</h2>

<p>If you want to quickly insert a <tt><table> table tag or an element ( <tt><tr> row, <tt><td> cell, <tt><caption></caption></tt> description), you can use the commands in the <a href="main_menu_main.php">main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_tables.php">Tables</a> or <a href="main_menu_htmlcode.php">HTML Code</a> / <a href="main_menu_htmlcode_tables.php">Tables</a>, as well as the commands in the <a href="toolbars_tables.php">Tables and Forms toolbar</a>.</td></tt></tr></tt></table></tt></p>

<p>Once you have created a table, you can edit individual tags. You can do this in the Tag Edit window. Simply place the cursor on the desired tag and press the <tt>F5</tt> key.</p>

<p>Another way to edit table tags, is to use the <a href="main_tabs_inspector_tags.php">Tag Inspector</a> on the left panel.</p>To do this, place the cursor on the tag and press the <tt>F6</tt> key. If the Tag Inspector is active all the time, the tag options will appear automatically when you place the cursor on the tag.<h2>Convert text to a table</h2>

<p>Spider also contains a tool for <a href="tool_text2table.php">converting text into a table</a>. It is very useful especially when you need to arrange text in a table e.g. from a CSV file (semicolon separated text) etc. The tool allows you to specify the character to be used as a column separator, set <tt><table> tag options, etc.</table></tt></p><p>You can launch the tool from the <a href="main_menu_main.php">main menu</a> / <a href="main_menu_edit.php">Edit</a> / <a href="main_menu_edit_change_selected.php">Selected text to</a>... Selected text<i> to table</i>. An identical submenu can be found in the <a href="main_menu_editor.php">editor's context menu</a>, as well as on the <a href="toolbars_link_format.php">Links, Text and Formatting</a> toolbar.</p>

<h2>Create tables from databases</h2>

<p>In Spider it is also possible to create tables based on data retrieved from SQL databases. More on this can be found in the chapter on <a href="coding_mysql.php">databases</a>.</p>

<h2>The fastest way to insert a table background</h2>

<p>The quickest way to insert a table background image is to drag it from the file list into the editor within the <tt><table> tag. <a href="tool_style_editor.php">The style editing tool</a> will open, where the path to the dragged image will automatically be entered. Just click OK and... done. In the same way, you can insert a background into a table cell and row<tt>(<td>, <tt><th>, <tt><tr>).</tr></tt></th></tt></td></tt></table></tt></p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="tool_table_editor.php">Table editor</a></li><li><a href="tool_table_quick.php">Very quick table</a></li><li><a href="tool_table_quick2.php">Quick table</a></li><li><a href="tool_table_tag.php">TABLE tag editor</a></li><li><a href="tool_table_row.php">Table row TR tag editor</a></li><li><a href="tool_table_cell.php">Table cell TD tag editor</a></li><li><a href="tool_text2table.php">Convert text to table</a></li><li><a href="main_menu_tools_tables.php">Tools / Tables menu commands</a></li><li><a href="main_menu_tools_tables.php">HTML Code / Tables menu commands</a></li><li><a href="toolbars_tables.php">Tables and Forms Toolbar</a></li></ul></td>
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