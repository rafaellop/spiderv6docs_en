<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Working in online and offline modes</title>

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
<h1>Working in online and offline modes</h1>

<p>The Spider has a unique function that allows you to work on FTP and WebDAV servers without an active connection to it. This mode is called the <i> offline </i> mode, unlike the <i> online </i> mode, which takes place when there is an active connection to the server. Both modes apply to <a href="main_tabs_myftpservers.php"> Servers </a> .</p><h2>Online mode</h2>

<p>To go online, select a server on the <a href="main_tabs_myftpservers.php"> Servers </a> tab, and then connect to it using the button next to the server list. By default, the contents of the user's home directory are displayed.</p><p>After going online, the file list and the directory tree become active, and the server list is inactive, because you cannot change the server with an active connection to another server.</p><p>In online mode, some functions that you perform on the server content take place immediately. These are functions such as:</p><ul>
	<li>Deleting files or directories</li><li>Rename files or directories</li><li>Creation of blank documents</li><li>Creation of new catalogues</li><li><a href="main_tabs_myftpservers_rights.php">Change of access rights to files or directories</a> (only on FTP server)</li><li><a href="main_tabs_myftpservers_lockfile.php">Locking, unlocking and information on document locks</a></li></ul>

<p>On the other hand, publishing operations, ie downloading or uploading files, are performed using the <a href="down_publishing_ftpqueue.php"> file queue </a> , which is described in more detail in another chapter. The queue, depending on the settings, may or may not be performed automatically.</p><h2>Offline mode</h2>

<p>Offline mode uses the so-called. <i> cache </i> which is on the disk. This file is created during an active connection with the selected server. So for the offline mode to be available, you should connect to the server at least once so that the cache file is created and can be used offline. The cache file remembers the contents of the directories you have visited, so sometimes you may not see the contents of the selected directory in offline mode.</p><p>You go offline after selecting the server in the <a href="main_tabs_myftpservers.php"> Servers </a> tab. As long as the cache file described above exists, there is no need to connect to the server and you can work right away.</p><p>In the offline mode, the file list and the directory tree are active, but the item icons are grayed out. Within the contents of the cache file, you can navigate around the server and perform various operations. However, these operations are mostly added to the <a href="down_publishing_ftpqueue.php"> file queue </a> so that multiple functions can be performed simultaneously upon connection.</p><p>In offline mode, some functions require an active connection to the server. These are functions such as:</p><ul>
	<li>Creation of new documents</li><li><a href="main_tabs_myftpservers_rights.php">Change of access rights to files or directories</a> (only on FTP server)</li><li><a href="main_tabs_myftpservers_lockfile.php">Locking, unlocking and information on document locks</a></li></ul>

<p>The rest of the operations are added to the <a href="down_publishing_ftpqueue.php"> server file queue </a> , which is covered in more detail in another chapter. After its launch, all remembered operations will be performed on the server.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="down_publishing_ftpqueue.php">Files queue</a></li><li><a href="network_publishing_general.php">Publishing using Spider</a></li><li><a href="settings_network_ftpclient.php">FTP and WebDAV client settings</a></li></ul>
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