<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - MySQL Database Servers - Table Properties</title>

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
<h1>Tools - MySQL Database Servers - Table Properties</h1>




<p>You will open the MySQL "Table Properties" window using the command of the same name in the pop-up menu opened by right-clicking on the table name in the database structure tree of the <a href="main_tabs_inspector_mysql.php">MySQL Inspector</a> tab.</p>

<p><b>Table name</b><br>
This field contains the name of the current table. By clicking the button next to it, you can bring up a window that allows you to enter a new name, which allows you to change the name of the table you are editing.</p><p>The two tabs below - Table Fields and Table Indexes - allow you to edit the table.</p><a name="filed"></a><h2>Table Fields tab</h2>

<p>The "Table fields" tab lists the fields that the table contains and the button bar.</p>

<p>The <b>list of fields</b> contains four columns that display:<br></p><ul>
	<li><b>Field name</b> with the icon next to it. A small square marks the fields that existed before editing, the larger (colored) fields that were added when editing the table</li>
	<li><b>Data type</b>, e.g. <tt>varchar(50)</tt>,<tt> tinyint(4)</tt>, <tt>enum('y', 'n')</tt>, etc.</li>
	<li><b>Empty</b>, information on whether a <tt>NULL</tt> value can be stored in the field</li>
	<li><b>Default value</b>, a value entered into a field when it was not specified directly when creating a new record</li>
	<li><b>Other</b>, information whether the primary key of the table has an "auto_increment" attribute.</li>
</ul>

<p>The toolbar next to the list contains buttons that allow you to add, remove and change field properties:</p>
<p><b>Add a new table field </b> , <b> Change the properties of the selected table field </b> <br> Both commands open the <a href="tool_mysql_table_field.php"> Table field properties </a> when when editing a selected field, of course its settings will be displayed in the window. You can also open the properties window of the selected field by double-clicking on its name.</p><p><b>Deleting a table field</b><br>
Deletes a field behind the table. Note - this operation is irreversible, make sure that you want to delete the selected field and that it does not contain any relevant data!</p><p><b>Up, down</b><br>
Allow you to move the selected field up, or down, the table structure.
 
 
<a name="index"></a></p><h2>Table indexes tab</h2>

<p>The "Table Indexes" tab is identical to the "Table Fields" tab described above. It contains a list of indexes and a bar of buttons for adding, deleting and modifying them.</p>

<p>In the list, icons are placed next to the name of the index to indicate its type:</p><ul>
	<li>standard index</li>
	<li>PRIMARY type index</li>
	<li>UNIQUE type index</li>
	<li>FULL TEXT index</li>
</ul>

<p>When you click on the button to edit or create an index, the <a href="tool_mysql_table_index.php">Index Properties</a> window will open, where you will be able to select the type of <a href="tool_mysql_table_index.php">index</a>, the fields to which it applies and enter a name.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_tabs_inspector_mysql.php">MySQL Inspector tab</a></li>
	<li><a href="tool_mysql_table_index.php">MySQL table index properties</a></li>
	<li><a href="tool_mysql_table_field.php">MySQL table field properties</a></li>
	<li><a href="settings_network_mysqlservers_add.php">MySQL server properties</a></li>
	<li><a href="settings_network_mysqlservers.php">Program Settings - MySQL Database Server Settings</a></li>
</ul>
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
