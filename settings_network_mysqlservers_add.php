<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>MySQL server properties</title>

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
<h1>MySQL server properties</h1>



<!-- tre&#347;&#263; pomocy -->
<p>This window is used both for specifying the parameters of a new server being added and for modifying the settings of an existing MySQL database server. You can view them by adding or modifying the selected server settings in the <a href="settings_network_mysqlservers.php"> MySQL Database Server Settings </a> window.</p><h2>Database server properties</h2>

<p>On the Server Properties tab, you define the parameters of the server and the MySQL database that you want to have access to in the Spider.</p><p><b>If you do not know the details needed to configure the server, ask the server administrator. Note that to improve security, most ISPs block you from connecting to the MySQL server other than via the server name <tt>localhost</tt> - in which case you will not be able to use it directly in Spider.</b></p><p>To configure a database server for use in Spider on the <a href="main_tabs_inspector_mysql.php">MySQL Inspector</a> tab, you must enter the following details in the relevant fields:</p><p><b>Friendly name</b><br>
Enter a name in this field to identify the MySQL server in the server list. This value is for information only and can be anything you like.</p><p><b>Server address</b><br>
Enter the address of the MySQL server you are adding to the list here. Use the address you received from your account administrator. If the server is installed locally, this will most likely be the name <tt>localhost</tt>.</p><p><b>Port</b><br>
This is the place to specify the port on which the MySQL server is running. Most often the port number 3306 is specified, however the value depends on the server configuration. If you specify an invalid port, the connection will not be able to complete.</p><p><b>User</b><br>
Enter the user name here, in other words the name of the account to which you have rights and with which you wish to connect on this server.</p><p><b>Password</b><br>
This is the place for your account password. Enter it very carefully as it is hidden when typing.</p><p><b>Do not use a password when logging into the server</b><br>
Check this switch if you want to log in with the username only, without a password, when connecting to the server. The field for entering a password will be blocked in this case.<br>
If you do not enter a password in this dialog box and do not check this switch, the first time you try to connect to the database server, Spider will ask for a password</p><hr>

<p><b>Database</b><br>
The server can share multiple databases. In this field, enter the name of the database you want to use in the current connection.
.</p><p><b>Database group</b><br>
Here you can enter the name of the group to which the database should belong. Database groups are displayed at the top of the list in the MySQL Inspector. With this option, if you are using multiple databases, you can more easily find the right one in the list.</p><hr>

<p><b>Character coding</b><br>
Select the character encoding the database uses to store text data from the list. If you select an incorrect encoding, some national characters in the texts displayed in the <a href="main_tabs_inspector_mysql.php">MySQL Inspector</a> may be incorrect.</p><p><b>Encoding command</b><br>
This field contains a command that is called during MySQL server operations to set the correct character encoding when the program communicates with the server. Some servers may not support the default NAMES and CHARSET environment variables, so if you have problems connecting to a MySQL server, you should modify this command to one appropriate for your server or define these variables in the server configuration. <br><br>
Note: Leaving this field blank may result in some MySQL servers not being able to correctly perform character conversion between different character encoding standards for text fields.</p><hr>

<p><b>Delete favorite queries and tables</b><br>
Clears the list of favorite server queries and tables. No data will be deleted from the server!</p></td>
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