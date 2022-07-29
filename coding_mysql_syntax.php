<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Support for MySQL - Syntax highlighting</title>

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
<h1>Support for MySQL - Syntax highlighting</h1>

<!-- tre&#347;&#263; pomocy -->

<p>Spider supports the creation of queries in several ways. You can use <a href="tool_mysql_query_creator.php">the SQL Query Wizard</a> or the <a href="tool_mysql_export_tables.php">Database Export Wizard</a>, or you can create queries manually. If you are retrieving data from a single table, you do not even need to color code its syntax.</p>The matter gets more complicated, however, when the query covers data from many fields of different tables using different join methods, functions, etc. In this case, coloring the query keywords (operators, statements, functions) can be very convenient. Spider provides a SQL query code coloring scheme in three variations:<ul>
	<li><b>MySQL</b></li>
	<li><b>PostgreSQL</b></li>
	<li><b>SQL</b> (standard)</li>
</ul>

<p>If you create a query in a new document, it is very useful to be able to execute it using the "Execute commands from current document" command located in the <a href="main_tabs_inspector_mysql.php#dbtree_dbname">pop-up menu of the "Database Name" branch</a> on the database structure tree on the <a href="main_tabs_inspector_mysql.php">MySQL Inspector</a> tab.</p>


<p>You can also customize syntax highlighting. Use these tools for that:</p>
<ul>
	<li><a href="syntax_editor.php">Highlighting scheme editor</a> - allows you to edit the highlighting scheme, i.e. add new features, etc. Use it with caution when changes cannot be undone</li>
	<li><a href="settings_editor_syntax.php">Program settings - syntax highlighting</a> - allows you to adjust the syntax highlighting scheme, but without affecting the scheme itself. Changes can be reverted to the default state at any time. You can also use this window to assign file name extensions for which the scheme should be the default one.</li>
</ul>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="coding_mysql.php">Support for MySQL - general</a></li>
	<li><a href="syntax_editor.php">Syntax Highlighting Editor</a></li>
	<li><a href="settings_editor_syntax.php">Program settings - syntax highlighting</a></li>
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