<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>"MySQL Inspector" tab</title>

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
<h1>"MySQL Inspector" tab</h1>



<p>The "MySQL Inspector" tab is used to work on the MySQL server. It allows you to create new tables, enter and read data from the database, and significantly facilitate the creation of queries in edited documents.</p><p>You can turn on the MySQL Inspector tab using the panel on the left, as well as from the menu under the button shown above or from the <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_view.php"> View </a> .</p><p>The tab consists of three main parts. There is a list of databases at the top. Below there is a tree showing the structure of the current database (arrangement of tables and their fields), on the right side of the tree there is a bar of the most frequently used commands. At the bottom, there is an inspector, which can present detailed information and structure of the selected table, or its content, as well as the result of a query to the database.</p>

<h2>Database toolbar and list</h2>

<p><b>Database selection list</b><br>
Select the database you currently want to work with from the list. Spider will automatically connect to the server and display the structure in the tree below.</p><p><b>Grouping of databases</b><br>
It is possible to group databases. Groups are listed above ungrouped databases. Clicking on the group name will expand the list of databases collected in it. This is particularly useful if you use many different databases. You can specify the group to which a database is assigned in the <a href="settings_network_mysqlservers_add.php">MySQL Properties</a> window.</p>

<p><b>"Database server settings" button</b><br>
 To the left of the list described above, you will find a button that launches the <a href="settings_network_mysqlservers.php">MySQL Database Server Settings</a> window, where you can add new databases to work with or modify the settings of existing ones.</p><p><b>Abort current operation" button</b><br>
This button allows you to abort the operation currently being performed on the server.</p><p><b>Vertical display</b><br>
The table tree will be displayed on the left side of the tab, the table structure and content inspector on the right.</p><p><b>Horizontal display</b><br>
The table tree will be displayed at the top of the tab page, the table structure and content inspector at the bottom.</p><p><b>Help button</b><br>
Displaying help for the MySQL Inspector tab.</p><h2>Database structure tree</h2>

<p>The tree displays the structure of the tables existing in the current database. It consists of three hierarchical types of branches, each of which has a separate popup menu:</p><p>- <a href="#dbtree_servername">Database server name (database name)</a><br>
    - Database <a href="#dbtree_tablename">table name</a><br>
          - Name of the <a href="#dbtree_fieldname">field in the table</a><br><br><br></p>



<p>If you select a table or a table field in the tree (with a single click), the selected element will be highlighted in blue. Now just press <tt> Enter </tt> to paste the name of the selected item into the editor. This way, it was easier to build database queries in your scripts.</p><a name="dbtree_servername"></a>
<a name="dbtree_dbname"></a><h3>Database server name (database name)</h3>The main ( <i>root</i>) branch of the tree is the name of the server and the selected database. This branch has a pop-up menu, which you can display by clicking on it with the right mouse button:<p><b>Create a new database</b><br>
Displays a window to enter the name of the new database. Once accepted, the new database is created, provided the current user has the appropriate permissions on the server.</p><p><b>Create a new table</b><br>
Displays the <a href="tool_mysql_table_properties.php">Create New Table</a> window.</p><p><b>Refresh the list of tables</b><br>
Refreshes the list of tables of the current database on the tree. This command is particularly useful when changes to the database tables have been made bypassing the Spider tools.</p><p><b>Execute a SQL command</b><br>
Opens the <a href="tool_mysql_query.php" title="">Execute SQL</a> command window to allow you to manually enter your own database query.</p><p><b>Execute SQL statements from the current document</b><br>
Executes a SQL query from the current document open in the editor.</p><p><b>Execute SQL statements from a file</b><br>
Opens a window to select a file with SQL queries to be executed.</p><p><b> Export content</b><br>
Launches <a href="tool_mysql_export_tables.php">the Database Export Wizard</a>, which enables the generation of a finished document based on the data retrieved from the database.</p><p><b> Server properties</b><br>
Displays the <a href="settings_network_mysqlservers_add.php">Database Server Properties</a> window.




<a name="dbtree_tablename"></a></p><h3>Database table name</h3>The next element of the tree is the name of the table in the database. All table names that exist in the database are listed in the tree. Each such branch has its own context menu containing commands for handling this table.<p>Out of all the tables, one can be active, which means that its content and structure will be presented at the bottom of the "MySQL Inspector" tab. The active table is marked with its name in bold. To "activate" a table, double-click on its name. Another way is to select its name from the <a href="#ulubione">FavoritesTables and Queries</a> list.</p>

<p><b>Show table content</b><br>
Sets the current table as the active table and switches the lower part of the tab to the <a href="#table_content">table content</a> view. To make this command even faster, simply click on the table name while holding down the <tt>Alt</tt> (left) key.</p><p><b>Show table structure</b><br>
Sets the current table as the active table and switches the lower part of the tab to the <a href="#table_structure">Table Structure</a> view. To make this command even faster, simply click on the table name while holding down the <tt>Ctrl</tt> key.</p><p><b>SQL Query Builder</b><br>
Opens the SQL Query <a href="tool_mysql_query_creator.php">Wizard</a> with the default table selected and clicked to display the pop-up menu.</p><p><b> Export content</b><br>
Launches <a href="tool_mysql_export_tables.php">the Database Export Wizard</a>, which allows you to generate a finished document based on the data retrieved from the database. By default, it will be set to export data from the table that was clicked.</p><p><b>Administrative commands</b><br>
Displays a submenu containing commands for the following operations to be performed on the selected table:</p><ul>
   <li>Optimize table (implements the query <tt>OPTIMIZE TABLE name</tt>)</li>
   <li>Analyze table (implements the query <tt>ANALYZE TABLE name</tt>)</li>
   <li>Check for table errors (implements the query <tt>CHECK TABLE_name</tt>)</li>
   <li>Check for table errors (implements the query <tt>CHECK TABLE_name</tt>)</li>
   <li>Reload the table (implements the query <tt>FLUSH TABLE name</tt>)</li>
</ul>The output of the commands can be displayed in the table content inspector.<p><b> Paste the table name into the editor
</b><br>
Pastes the name of the table into the editor where the cursor is placed. This way, you don't have to remember the exact names of multiple tables from different databases, or type them in when manually creating database queries. You can also paste the table name into the query by dragging it from the tree into the document, or by pressing Enter when the table name on the tree has focus.</p><p><b>Add table to favorites</b><br>
Adds a table to the list of <a href="#ulubione">Favorite tables and database queries</a>. This will give you quick access to it even when there are dozens or hundreds of tables in the database.</p><p><b>Rename table</b><br>
Allow table renaming</p><p><b>Delete table</b><br>
Deletes the table and all the data it contains. The deletion is preceded by a confirmation dialog. Please note that deleted tables and data can no longer be recovered!</p><p><b>Clear table content</b><br>
Deletes data from the table. The deletion is preceded by a confirmation dialog. Please note that deleted data can no longer be recovered!</p><p><b>Table properties</b><br>
Displays the Table Properties window, where you can edit the structure of the <a href="tool_mysql_table_properties.php" title="Właściwości tabeli">table</a>(add and remove fields, create indexes, etc.).


<a name="dbtree_fieldname"></a></p><h3>Field name in the table</h3>The last, most nested elements of the tree are branches representing the names of table fields. Next to the field name, there is an icon that means:<ul>
   <li>Normal table field</li>
   <li>Table field with superimposed index of type PRIMARY</li>
</ul>


<p>There is only one command in the table field pop-up menu:</p>

<p><b> Paste the field name into the editor
</b><br>
Pastes the name of a table field into the editor where the cursor is placed. This way, you don't have to remember the exact names of many fields, or type them in when manually creating a database query. You can also paste a table field name into a query by dragging it from the tree into the document, or by pressing Enter when the table field name on the tree has focus.</p><h3>Toolbar</h3>

<p>On the right side of the tree, there is a button bar with the most frequently used commands:</p>




<p><b> Database server settings</b><br>
Displays the Database <a href="settings_network_mysqlservers.php">Server Settings</a> window.</p><p><b> Create a new table</b><br>
Displays the <a href="tool_mysql_table_properties.php">Create New Table</a> window.</p><p><b>Rename table</b><br>
Allow table renaming</p><p><b>Delete table</b><br>
Deletes the table and all the data it contains. The deletion is preceded by a confirmation dialog. Please note that deleted tables and data can no longer be recovered!</p><p><b>Refresh the list of tables</b><br>
Refreshes the list of tables of the current database on the tree. This command is particularly useful when changes to the database tables have been made bypassing the Spider tools.</p><p><b>Show table content</b><br>
Sets the current table as active and switches the lower part of the tab to the <a href="#table_content">table content</a> view.</p><p><b>Show table structure</b><br>
Sets the current table as active and switches the lower part of the tab to the <a href="#table_structure">Table</a> structure view.</p><p><b>SQL Query Builder</b><br>
Opens <a href="tool_mysql_query_creator.php">the SQL</a> Query Wizard with the default table selected (highlighted in blue). If you have not indicated any table, the active table is selected (bold).</p><p><b>Execute SQL command</b><br>
Expands the menu containing the following commands:</p><ul>
   <li><b>Execute SQL command</b><br></li><li>Opens the <a href="tool_mysql_query.php" title="Wykonaj polecenie SQL">Execute SQL command</a> window to allow you to manually enter your own database query.</li><li><b>Execute SQL statements from the current document</b><br></li><li>Executes an SQL query from the current document opened in the editor.</li><li><b>Execute SQL statements from a file</b><br></li><li>Opens a window for selecting a file with SQL queries to be executed.</li></ul>

<p><b> Export content</b><br>
Launches <a href="tool_mysql_export_tables.php">the Database Export Wizard</a>, which enables the generation of a finished document based on the data retrieved from the database.</p><p><b>File list help</b><br>
This button displays this help page.


<a name="table_structure"></a></p><h2>Detailed table structure</h2>

<p>In the lower part of the tab, there are two tabs displaying alternately the structure of the current (active) table or its content. You can choose which of the tabs is to be displayed using the buttons at the bottom.</p>

<p>To quickly display the structure inspector of a selected table, you can click its name in the tree above while holding down the <tt> Ctrl </tt> button. You can display the contents of the table by clicking on it while holding down the <tt> Alt </tt> (left) key.</p>

<p>The table structure inspector contains basic information about the fields that make up the table. They are presented in four columns:</p>

<p><b>Field name</b><br>
Name of field in table</p><p><b>Data type</b><br> Represents the type of data that can be stored in the field, e.g. <tt>varchar(100)</tt>, <tt>enum('y', 'n')</tt></p><p><b>Empty</b><br>
Displays whether a field can be empty (contain <tt>NULL</tt> value)</p><p><b>Default value </b><br>
Displays the default value as it will be entered into this field.</p><p><b>Other </b><br>
Displays other information about the table field, e.g. whether it has 'auto_increment' enabled.</p><p>The table structure inspector has a pop-up menu containing three commands:</p>

<p><b> Paste the field name into the editor
</b><br>
Pastes the name of the field you clicked on to display the menu into the editor (this field is highlighted in blue when the menu is displayed).</p><p><b>Refresh</b><br>
Refreshes the inspector view by retrieving the table information again from the database.</p><p><b>Edit table structure</b><br>
Displays the <a href="tool_mysql_table_properties.php" title="Właściwości tabeli">Table Properties</a> window, where you can edit the structure of the table (add and remove fields, create indexes, etc.).</p><p>You can also open the <a href="tool_mysql_table_properties.php" title="Właściwości tabeli">Table Properties</a> window by double-clicking anywhere in the Table Structure inspector.</p><a name="table_content"></a><h2>Table contents</h2>

<p>The second tab displays the content of the current table (marked in bold in the tree above). The structure is more complicated - it has two buttonbars that allow you to control the content of the inspector, and the context menu for the record that is clicked is also richer.</p>

<p>The data is displayed in the form of a table, where each row is a consecutive record, and the individual fields are displayed as columns.</p>

<p>The records downloaded from the database can be sorted by left-clicking on the header with the field name. Right-clicking on any field header will display a list of all table fields, which allows you to select the field to sort by.</p>

<p>The tab has two button bars. The first - mini bar - has commands to define the range of data that will be displayed. There are buttons on it:</p>

<p><b>View all records</b><br>
Click this button to display all records from the current table.</p><p><b>Display 20 records</b><br>
Click this button to display a group of 20 records from the current table. At the same time, the buttons shown below for navigating through successive groups of records will become active:</p><p><b>Go to first record</b><br></p><p><b>Previous 20 records</b><br></p><p><b>Next 20 records</b><br></p><p>The tab has its own status bar, which displays information about the current view, the query, such as the name of the table, the number of displayed records, etc.</p>


<p>However, displaying data is not all that can be done with this tab. Data can also be added, edited and deleted. This is possible thanks to the buttons on the second bar on the right.</p>
<p>Editing existing data is very easy. Just put the cursor on the selected field to start typing. The existing data in this field will be deleted and replaced with the new ones. If you do not want to delete data, but only change it, click on it again after selecting the field. This will allow you to edit its contents directly. An alternative way to change the content of a field is to press the F2 key after selecting the field. You can also use property editors that make it easy to edit more complex fields, such as TEXT or TIMESTAMP fields. Just select a field and click the ellipsis button that appears inside the field.</p>
<p>To enter a new record, you can use the plus button in the bar on the right. Here again is an alternative. If the last record is indicated, you can quickly create a new one by pressing the down arrow key on your keyboard. You can do it even faster by pressing the <tt> Insert </tt> key.</p>
<p>To delete a record, just press Delete on the keyboard, or use the minus button on the bar on the right.</p>
<p>Initially, changes are made only locally on the inspector. After editing the records, you must approve the changes, which will save them to the database, or discard them. It is also possible to undo the last operation performed locally. The appropriate buttons are placed on the bar on the right:</p>

<p><b>Confirm replacements</b><br>
Click to approve the changes and enter them into the database.</p><p><b>Cancel changes</b><br>
Click to cancel changes made locally. The button is active until the changes are made to the database.</p><p><b>Add record</b><br>
Click to add a new record locally.</p><p><b>Delete record</b><br>
Click to delete the locally indicated record.</p><p><b>Undo last operation</b><br>
Click to undo the last operation performed locally. The button is active until changes are made to the database.</p><p><b>Refresh the view</b><br>
Click to refresh the view of the database contents. If any changes have been made locally, you will be hinted to either save them to the database or discard them.</p><p><b> Add to Favorite Tables and Queries </b> <br>
 Click to add the current table to your <a href="#ulubione">Favorite Tables and Queries</a> list.</p><p><b>List of Favorite Tables and Queries</b> <br>
click for a list of <a href="#ulubione">Favorite Tables and Queries</a> .</p><p><b>Remove from Favorite Tables and Queries</b> <br>
click to view the <a href="#ulubione">Favorite Tables and Queries</a> list to select from there to be removed.</p><p><b>Sorting method</b><br>
Click to select the sorting method. You will see a list with the same content as in the pop-up menu when you click on a field heading.</p><p><b> Export content</b><br>
Click to launch <a href="tool_mysql_export_tables.php">the Database Export Wizard</a>. The default setting will be to export the current table.</p><p><b>Insert the current query into the editor</b><br>
Click to paste the query used to display the current data list into the editor. You can choose the format for pasting the query according to the templates defined in the <a href="settings_network_mysqlservers.php#sql_insert_templ">Program Settings - MySQL Database Servers</a> window


<a name="ulubione"></a></p><h2>Favorite tables and queries</h2>

<p>There can be many, even hundreds of tables in a database. So it can become annoying to keep looking for them in the tree. That is why the "Favorite tables and queries" list was created, which allows you to quickly reach selected items.</p>
<p>The list is composed of two groups. Favorite tables (if added) are at the top, and favorite queries at the bottom, created with the <a href="tool_mysql_query_creator.php">SQL Query Wizard</a> .</p>
<p>After clicking the table, it is set as current, and its content will be displayed in the inspector according to the current settings (i.e. if the option to show only 20 records on the mini bar is selected, this number will be retrieved from the database). On the other hand, clicking on your favorite query will execute it and display the result in the "Contents" tab.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="coding_mysql.php">Support for MySQL in Spider</a></li>
   <li><a href="tool_mysql_table_index.php">MySQL table index properties</a></li>
   <li><a href="tool_mysql_table_field.php">MySQL table field properties</a></li>
   <li><a href="settings_network_mysqlservers_add.php">MySQL server properties</a></li>
   <li><a href="tool_mysql_export_tables.php">Database data export</a></li>
   <li><a href="tool_mysql_query.php">Execute SQL Query</a></li>
   <li><a href="tool_mysql_query_creator.php">SQL Query Builder</a></li>
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
