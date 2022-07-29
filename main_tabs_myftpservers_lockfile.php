<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Lock item</title>

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
<h1>Lock item</h1>

<p>While working on files, you may want to block other users' access to documents currently being modified on the remote document server. This function is extremely useful in the case of group work, where several people work together on a project. You can use locking to notify others that a file is being modified. This window is displayed when you select <a href="main_tabs_myftpservers.php#myftpserverslockfile"> Lock selected documents </a> on the <a href="main_tabs_myftpservers.php"> Servers </a> function or as an information window after selecting a command <a href="main_tabs_myftpservers.php#myftpserverslockfileinfo"> Information </a> .</p><p>When selecting the file locking feature, this window is displayed and the user is hinted for information describing the lock. When viewing information about the blockage, the information placed on the server by the user who blocked the file is displayed. The options in the file locking window vary slightly depending on whether you are running an FTP or WebDAV server.</p><h2>The fields visible when locking a file on the FTP server</h2>

<p><b>File name</b><br>
Displays the name of the file that will be blocked or affected by the blocking information displayed.</p><p><b>Blocking user</b><br>
Displays information about the user who is imposing the lock. When a lock is applied, this information is taken from the <a href="settings_user.php">User Settings of the program</a>. When displaying blocking information, the window displays information about the user who blocked the file. If the user has provided an email address, you will be able to click on it and send an email to the user.</p><p><b>Date of blocking</b><br>
The date and time of the imposition of the blockade is displayed here for information purposes.</p><p><b>Description of the lock</b><br>
If you are blocking a file, you can enter information about the reason for the blocking in this field. This information is displayed when someone wants to check the <a href="main_tabs_myftpservers.php#myftpserverslockfileinfo">Lock Information</a> on the <a href="main_tabs_myftpservers.php">Servers</a> tab. It is a good idea to enter some information here to let other users know why a particular block was imposed.</p><h2>Fields visible when locking a file on a WebDAV server</h2>

<p><b>File name</b><br>
As for FTP.</p><p><b>Blocking user</b><br>
As for FTP.</p><p><b>Lockout duration</b><br>
A list to specify the length of time for which the lock is valid. Default is <i>[unlimited]</i>.</p><p><b>Additional properties:</b><br></p><ul>
<li><b>do not allow modification of locked resources</b> - checking this option will prevent any tampering with the locked file. If unchecked, the lock will be informational only.</li>
<li><b>lock folder and all its contents</b> - if the blocked item is a folder, when this option is selected, all its elements (including subfolders) will also be locked</li>
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
  <li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="network_publishing_general.php">Publishing using Spider</a></li><li><a href="settings_network_ftpclient.php">FTP client settings</a></li></ul>
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