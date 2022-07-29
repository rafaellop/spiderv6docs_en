<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - SQL Query Wizard</title>

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
<h1>Tools - SQL Query Wizard</h1>



<p>This wizard allows you to quickly create a simple SQL query to retrieve data from a single table.</p><p>The tool has a user-friendly interface that guides you by the hand through all the steps of creating an SQL query - from selecting the fields of the table from which you want to retrieve data, to specifying the conditions that must be met, to determining the order in which the records will be returned.</p><p>Each step is a separate page. You can navigate through the boards using the <b>Next</b> and <b>Back</b> buttons.</p><h2>Launching</h2>

<p>You can run the wizard with the command located in the<a href="main_tabs_inspector_mysql.php#dbtree_tablename"> pop-up menu for the table on the tree</a> in the <a href="main_tabs_inspector_mysql.php">MySQL Inspector</a> tab. The command icon is shown next to it.</p>
<p>The second place from which you can open the SQL Query Wizard is the Create Database Query page in the Database <a href="tool_mysql_export_tables.php#wybor_zakresu_danych">Export Wizard</a>.</p>



<h2>Table selection</h2>

<p>The first page allows you to select the table and its fields that will be added to the query.</p>

<p><b>Table</b><br>
Select from the drop-down list the table from which you want to retrieve data. By default, the table you clicked on to start the wizard is selected.</p><p><b>Fields</b><br>
Select in the list the fields of the selected table to be added to the query.</p><h2>Conditions</h2>

<p>This page provides options for specifying the conditions that the returned records must meet. Select one of the options:</p>

<p><b>include all records</b><br></p><p><b>only include records that meet the condition:</b> <br></p><p>If you choose the second option, the text box for entering conditions (the section after the <tt>WHERE</tt> word in the SQL query) will become active, as well as the elements that facilitate their creation (their use inserts the appropriate word in the place of the cursor in the query field):</p>

<p><b>Insert field name:</b><br>
Select the name of a field in the previously selected table from the list. Click the plus button next to the list to insert the table field name into the condition being built.</p><p><b>Insert operator</b><br>
Click the selected button to insert one of the operators into the created condition: <tt>AND</tt>, <tt>OR</tt>, <tt>NOT</tt>.</p><p><b>Comparisons</b><br>
Click to expand the list containing various comparison operators, such as <tt>LIKE</tt>, <tt>REGEXP</tt>, etc.</p><p><b>Mathematical</b><br>
Click to expand the list containing various mathematical functions, such as <tt>Abs()</tt>, <tt>Sin()</tt>, etc.</p><p><b>Strings</b><br>
Click to expand the list containing various text handling functions, such as <tt>Concat()</tt>, <tt>RTrim()</tt>, etc.</p><p><b>Date and time</b><br>
Click to expand the list containing various date and time handling functions, such as <tt>Month()</tt>, <tt>Now()</tt>, etc.</p><h2>Specifying the sort order of records</h2>

<p>The next page allows you to specify record sorting for up to three fields. For this purpose, there are three drop-down lists with the names of the fields taken from the database:</p><ul>
	<li><b>Sort by</b></li>
	<li><b>Then sort by</b></li>
	<li><b>Then sort by</b></li>
</ul>

<p>Under each of the lists there are switches for sort order (ascending or descending).</p>


<p><b>Other query options </b> <br>
Here you will find a toggle that allows you to insert a <tt> DISTINCT </tt> statement into the query, which will cause duplicate records to be removed (each record will only occur once).</p><h2>End</h2>

<p>The last page is a summary. It contains a text box displaying the finished query. In addition, you can use the Add Query to Favorites button, so you can save the built query for later reuse (a button to use one of the "Favorite Queries" can be found on the <a href="main_tabs_inspector_mysql.php#table_content">MySQL Inspector</a> tab on the button bar next to the list of table contents).</p>

<p>The last action to perform is to click <b>Finish</b>, which will execute the query and close the Wizard. The results of the Wizard will be displayed in the <a href="main_tabs_inspector_mysql.php#table_content">table contents</a> list at the bottom of the <a href="main_tabs_inspector_mysql.php">MySQL Inspector</a> tab.</p>


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
	<li><a href="tool_mysql_query.php">Execute SQL Query</a></li>
	<li><a href="tool_mysql_export_tables.php">Database export wizard</a></li>
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
