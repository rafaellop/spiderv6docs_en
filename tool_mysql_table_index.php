<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - MySQL Database Servers - Table Index Properties</title>

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
<h1>Tools - MySQL Database Servers - Table Index Properties</h1>



<p>You can open the window only from the <a href="tool_mysql_table_properties.php">MySQL Table Properties</a> window. It is used to create new table fields and edit the properties of existing fields. It is made up of three groups of settings: Index Name, Index Type, Belonging Fields.</p>

<h2>Index name</h2>
<p>It only contains a text field that allows you to enter or change the index.</p>

<h2>Index type</h2>This group contains a group of four switches indicating the type of index. Choose one of them:<p><b>Standard index</b><br>
Optimizes the table search against the specified fields.</p><p><b>PRIMARY KEY index</b><br>
Primary key, uniquely identifies each record in the table. A field with the AUTO INCREMENT option checked (in the <a href="tool_mysql_table_field.php">Field Properties</a> window) must belong to this index.</p><p><b>UNIQUE Index</b><br>
Guarantees the uniqueness of the value of a given field among all in the table - you will not be able to enter two records in the table with the same content of the fields covered by this index.</p><p><b>Index FULLTEXT</b><br>
Causes indexing of the entire contents of text fields, which speeds up search operations. Note, however, that at the same time it delays data entry into the database, since every word from the contents of this field in the record must be added to the index.</p><h2>Belonging fields</h2>

<p>This group contains a list of fields that you can select to add to the index you are creating or editing. To add a field, select the switch next to its name.</p>


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
	<li><a href="tool_mysql_table_properties.php">MySQL table field properties</a></li>
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
