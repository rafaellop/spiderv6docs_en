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
<h1>Tools - MySQL Database Servers - Table Field Properties</h1>You can open the window only from the <a href="tool_mysql_table_properties.php">MySQL Table Properties</a> window. It is used to create new table fields and edit the properties of existing fields. It is made up of three groups of settings: Field name, Stored data type, Other properties.

<a name="name"></a><h2>Field name</h2>In this group there is only the field with the name of the current field. To change the name of the field, type it here, then confirm with <tt>OK</tt>.

<a name="position"></a><h2>Place</h2>
<p>In this group there are several options for specifying where in the table structure a new field should be placed. It can be placed at the beginning of the table, at the end of the table, or after a specific field (to be selected from the list).</p>
<p>The group is available only when creating a new field. When editing an existing field, it is invisible.</p><a name="type"></a><h2>Stored Data Type</h2>

<p>The "Stored Data Type" group contains several items for editing the properties of the current field. Not all of them are visible at once - it depends on the type of the field, for example, the BINARY option is only available for fields of type <tt>CHAR</tt> and <tt>VARCHAR</tt>.</p>

<p><b>Type</b><br>
Select the type of stored data from the list. The list contains all data types that can be given to a MySQL database table field.</p><p><b>Size</b><br>
Allows you to enter the size of the field. This option is available for types that require this information, such as <tt>INTEGER</tt>, <tt>VARCHAR</tt>, etc. If you select <b>Use default size</b>, the field will be disabled, while the default value will be used.</p><p><b>Precision</b><br>
Specify the precision (number of decimal places) for fields of type DOUBLE, FLOAT, DECIMAL. If you check <b>Use default size</b>, this field will be inactive, while the default value will be used.</p><p><b>ZEROFILL</b><br>
If you check this option, if you enter a value with a length shorter than that specified in the "Size" field into the field, the remaining space will be filled with zeros.</p><p><b>UNSIGNED</b><br>
By checking this box, only non-negative numbers will be allowed to be stored in the number type field. This will allow positive numbers with a higher value to be stored in it.</p><p><b>BINARY</b><br>
Checking this box will cause the values of this field to be compared by ASCII codes when sorting data from text type fields.</p><p><b>Values</b><br>
A list of values that can be used for fields of type <tt>SET</tt> and <tt>ENUM</tt>. You can add and remove values using the buttons next to them.</p><p><b>By default</b><br>
In this field you can enter a default value for the field. 



<a name="others"></a></p><h2>Other properties</h2>The group of other properties contains two options:<p><b>NOT NULL</b><br>
Check this option if its filling in each record will be required (it cannot be empty). If you do not specify a value when adding a new record, the default value will be used.</p><p><b>AUTO INCREMENT</b><br>
Check this option to have the next number automatically inserted into the field when new records are entered. A field with <tt>AUTO INCREMENT</tt> checked must belong to the primary key (PRIMARY KEY) of the table.</p></td>
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
