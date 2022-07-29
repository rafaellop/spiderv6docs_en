<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Program settings - MySQL database servers</title>

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
<h1>Program settings - MySQL database servers</h1>




<!-- tre&#347;&#263; pomocy -->
<p>In this category of settings, you have the option to define the settings of the MySQL database servers that you use to create your website. This category only consists of a list to which you can add new servers, modify existing ones, or manage the list at all, using the buttons next to it, as well as one option described below.</p><p>Adding database servers is done via a separate window called <a href="settings_network_mysqlservers_add.php">MySQL database server properties</a>, and of course a separate connection must be defined for each database. In the same window you modify the settings of the server selected in the list.
 
 
<a name="sql_insert_templ"></a></p><h2>Format for pasting a query in the SQL Table Inspector</h2>This list contains templates for formatting that is pasted into the current query editor, resulting in the current SQL table view in the <a href="main_tabs_inspector_mysql.php"> MySQL Inspector </a> tab. To paste a query in one of the formats presented here, press the <b> Insert current query into the editor </b> button next to the MySQL Inspector table contents view.<p>The buttons on the right side of the template list are used to edit the list of templates. By using them you can add, delete and edit templates as well as restore default templates.</p>
<p>The most important element of the template is the <tt> %s </tt> symbol, which indicates where to place the SQL query in the pasted text.</p>
 
 
<p><b>Number columns in the table content view</b><br>
Check this option if you want a sequence number to appear next to the table field names in the table content view <a href="main_tabs_inspector_mysql.php#table_content">on the MySQL Inspector tab</a>....</p><p><b>When dragging the table into the editor, use the export wizard</b><br>
Check this option if you want the Database <a href="tool_mysql_export_tables.php">Export Wiz</a>ard to open automatically when you drag a table from the database structure tree.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_tabs_inspector_mysql.php">MySQL Inspector tab</a></li>
	<li><a href="tool_mysql_table_properties.php">MySQL table properties</a></li>
	<li><a href="tool_mysql_table_index.php">MySQL table index properties</a></li>
	<li><a href="tool_mysql_table_field.php">MySQL table field properties</a></li>
	<li><a href="settings_network_mysqlservers_add.php">MySQL server properties</a></li>
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