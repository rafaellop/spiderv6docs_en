<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Database Export Wizard</title>

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
<h1>Tools - Database Export Wizard</h1>



<p>This wizard allows you to quickly export data from the database to a file.</p><p>The tool has a user-friendly interface that guides you by the hand through all the steps of exporting data.</p><p>Each step is a separate page. You can navigate through the boards using the <b>Next</b> and <b>Back</b> buttons. not all boards will always be visible - it depends on the options you select, as well as how you run the wizard.</p><h2>Launching</h2>

<p>You can run the wizard with commands in the pop-up menu of the two tree items of the <a href="main_tabs_inspector_mysql.php">MySQL Inspector</a> tab (the command icon is shown next):</p><p><b>Database name - Export content</b><br>
Launches a wizard with presets suitable for exporting the contents of the current database. A page for <a href="#wybor_wielu_tabel">selecting the tables to be exported</a> is immediately displayed.</p><p><b>Table name - Export content</b><br>
Launches a wizard with presets suitable for exporting the contents of the selected table. The first page is displayed (see below) with the default export setting of the clicked table.


<a name="wybor_zakresu_danych"></a></p><h2>Scope of data to export</h2>

<p>The first screen of the Wizard allows you to select one or more tables from which the data is to be exported, or to enter a query that will be executed to retrieve data from the database.</p>
<p>In case the Wizard has been started for exporting the entire database (from the context menu of the 'Database Name' branch), this page will be skipped. However, you can navigate to it by pressing the 'Back' key.</p>Choose what you want to export by selecting the appropriate option:<p><b>Single table</b><br>
Check this option to activate the drop-down list to select the table whose entire contents you want to export. On the next page, you will be able to see the results of the query in the form of a table.</p><p><b>Several tables, or the entire database</b><br>
Check this option to be able to select one or more tables for data export on the next page.</p><p><b>Query result</b><br>
Check this option to activate the field for entering your own query. On the next page you will be able to preview the results. To the right of the text box are buttons:</p><ul>
	<li><b>SQL Query Wizard</b><br>Launches <a href="tool_mysql_query_creator.php">the SQL Query Wizard</a> to help build a simple query that retrieves data from no more than one table.</li>
	<li><b>Get a command from the current document</b><br>Allows you to read and enter into the text box next to a query from the current document in the editor.</li>
	<li><b>Get a command from a file</b><br>Allows you to read and enter into the text field next to a query from a SQL file stored on disk.</li>
	<li><b>Favorite SQL Queries</b><br>Displays a list of <a href="main_tabs_inspector_mysql.php#ulubione">Favorite SQL qu</a> eries to select the query you want to execute.</li>
</ul><a name="wybor_wielu_tabel"></a><h2>Select tables to export</h2>

<p>The "Selecting tables to export" page will be displayed in two cases:</p>
<ul>
	<li>when you select on the first page the option to export several tables, or the entire database,</li>
	<li>when you run the Wizard for exporting the entire database (from the context menu for the<a href="main_tabs_inspector_mysql.php#dbtree_dbname">"Database Name</a>" branch of the tree on the <a href="main_tabs_inspector_mysql.php">MySQL Inspector</a> tab)</li>
</ul>

<p>Most of it is taken up by the list of tables of the current database. Select one or more of them. If you want to select or deselect all tables, use the buttons below. Below the list you will also find information on how many tables are selected. You must select at least one table to proceed further.</p>




<h2>Preview exported data</h2>

<p>The "Exported Data Preview" page will only be displayed if you select the Single Table export option on the first page (option one), or execute a custom SQL query entered into the text field (option three).</p>

<p>It is purely informative - it displays an inspector that is filled with data to be exported. If you are satisfied with the result, you can click <b>Next</b> to move to the next page, where you choose the format to which the data will be exported.</p>



<h2>Format selection</h2>The next page allows you to select the format into which the data from the database will be exported. The following options are available:<ul>
	<li><b>HTML</b> - The data will be exported as HTML documents, where the data will be placed in a table, the first line of which will be a header containing the names of the fields.</li>
	<li><b>XML</b> - Data will be exported to XML documents in the form of like:<pre>&amp;lt;table_name&amp;gt;
 &amp;lt;row&amp;gt;
    &amp;lt;field_1&amp;gt;value 1_1&amp;lt;/field_1&amp;gt;
    &amp;lt;field_2&amp;gt;value 1_2&amp;lt;/field_2&amp;gt;
    &amp;lt;field_3&amp;gt;value 1_3&amp;lt;/field_3&amp;gt;
  &amp;lt;/row&amp;gt;
  &amp;lt;row&amp;gt;
    &amp;lt;field_1&amp;gt;value 2_1&amp;lt;/field_1&amp;gt;
    &amp;lt;field_2&amp;gt;value 2_2&amp;lt;/field_2&amp;gt;
    &amp;lt;field_3&amp;gt;value_3&amp;lt;/field_3&amp;gt;
  &amp;lt;/row&amp;gt;
&amp;lt;/table_name&amp;gt;</pre>
	</li>
	<li><b>CSV</b> - The data will be exported as CSV files (fields separated by semicolons), where the first line will contain the names of the table fields, and the following lines will contain the data.</li>
	<li><b>RTF (Rich Text Format)</b> - The data will be exported as RTF documents, containing a table of data. The first row will be the header, while subsequent rows of data will have alternating white and light gray backgrounds for easier orientation.</li>
	<li><b>MS Excel</b> - The data will be exported to an MS Excel document.</li>
   <li><b>SQL INSERT commands</b> - the data will be exported to a file containing SQL commands, which allows you to import them back into the database later. In addition, you can select options:<ul>
      <li><b>include<tt>CREATE TABLE</tt> command</b><br>Check this switch if you want the exported table creation commands to be generated</li>
      <li><b>include the command to delete a table <tt>(DROP TABLE IF EXISTS</tt>)</b><br>Check this switch if you want a delete command to occur before the command to create a table with a given name. It is especially important if data from the file you have just exported will later be imported into a database where tables with such names may already exist. This will avoids the error of trying to create a table with the same name.</li>
      <li><b>Including the command to insert data into the table (INSERT INTO)</b>Check this switch if you want the tool to export the downloaded data to SQL format (which will allow you to import it into the database later)</li>
      <ul>
         <li><b>Use REPLACE instead of INSERT</b> - If you enable this option, the resulting SQL file will use REPLACE statements instead of INSERT.</li><li><b>use INSERT with IGNORE</b> - If you enable this option, there is an additional IGNORE command in the INSERT commands, so you can get around the problem of importing records already present in the table. They are ignored.</li><li><b>INSERT/REPLACE commands without field names</b> - If you enable this option, the INSERT or REPLACE commands will not include field names, so the resulting SQL file can be much smaller (especially for a large number of records).</li></ul>
	</ul></li>
</ul>



<h2>Choose the export destination</h2>

<p>The last page contains options to specify the destination for the exported data. This can be a file saved on disk, export to the clipboard, or to a document in the editor. Not all options will always be available. For example, in a situation where you are exporting data from multiple tables to HTML format, the only option will be to save it to disk (which is logical, since, for example, a file in RTF format cannot be directly edited in Spider, so you can only save it to disk).</p>

<p>The following options are available:</p>

<p><b>Export to file</b><br>
Check this option to save the finished file to disk. If you are exporting data from a single table, or from a custom query, enter the path and file name of the destination file. If you are exporting from multiple tables, enter the path and file name template, and you can use the asterisk symbol (<tt>*</tt>), which will be replaced by the name of the exported table when saving the file to disk. For convenience, you can use the button next to the field, which opens a dialog box for indicating the path and file name. After selecting the appropriate option placed below, the newly created document can be opened in Spider for editing.</p><p><b>Export to clipboard</b><br>
Check this option to put the exported data in the selected format on the Windows clipboard for later use. This option is not available when exporting from multiple tables.</p><p><b>Export to editor</b><br>
Check this option to paste the exported data in the selected format into the editor. Two options are available:</p><ul>
	<li><b>create new document</b> - a new document will be created, to which data will be exported. In addition, a coloring scheme, selected according to the previously selected data format, will be applied to this document by default.</li>
	<li><b>Insert at cursor position</b> - will paste the data in the current document at the cursor position (this option is not available when exporting from multiple tables).</li>
</ul>


<p><b>Include a CSS sheet</b><br>
You can attach a CSS stylesheet to the exported HTML file (this option is only available for HTML exports). To do this, enter the path to the stylesheet file in this field.  To make it easier, you can use the dialog box opened by the button next to it.</p><h2>End of work</h2>

<p>After setting all the options, the last action is to click <b>Finish</b>. The data will be exported, while the wizard will terminate.</p>


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
	<li><a href="tool_mysql_query_creator.php">SQL Query Builder</a></li>
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
