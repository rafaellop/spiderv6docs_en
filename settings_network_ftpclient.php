<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Program settings - Built-in FTP and WebDAV client</title>

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
<h1>Program settings - Built-in FTP and WebDAV client</h1>

<!-- tre&#347;&#263; pomocy -->
<p>In this category you will find the settings responsible for the general functioning of Spider's built-in FTP client located on the <a href="main_tabs_myftpservers.php"> Servers </a> tab and <a href="down_publishing_ftpqueue.php"> FTP and WebDAV file queues </a> in the bottom panel. This category consists of several groups of settings. Here they are:</p><h2>List of files on the server</h2>

<p>This group of settings is responsible for the operation of the file list and the "Servers" tab. You will find options here:</p><p><b>Hide BAK backup files in the FTP file list</b><br>
Check this switch if you want the program to hide the backup files (starting with <tt>bak.</tt>) and not show them in the file list displaying the contents of the FTP server.</p><p><b>Store document information files on an FTP server</b><br>
Check this option if you want the program to store document information files (coloring used, cursor position, author, etc.) on an FTP server together with the document to which the file relates.</p><p><b>When deleting files from the server, also delete their backups</b><br>
Check this option if you want the program, when deleting selected files from the server, to also delete backups of these files with the BAK extension.</p><p><b>Delete directories on FTP server along with all content </b> <br>
Select this option if you want the program to allow you to delete directories from the server even if they are non-empty. Be careful when using this feature.</p><p><b>Show size of remote files in bytes</b><br>
Check this option if you want file sizes to be displayed in bytes instead of kilobytes in the FTP server's content file list.</p><p><b>Display directories in the file list</b><br>
Check this option to cause remote directories to be displayed in the file list. If you disable this option, only files will be displayed in the file list.</p>


<h2>Group working</h2>

<p>Spider supports group work on a project by allowing you to lock files you are working on. This way, your coworkers will know that the file should not be touched. In this group you will find three settings common to FTP and WebDAV servers:</p>

<p><b>Disable remote files lock check</b><br>
Check this option so that the program does not check when modifying files to see if they are locked. This reduces the number of commands sent to servers and allows publishing to run faster, however, you lose control of information about file locking by other users. It is not recommended to use this option (it is disabled by default), but enabling it speeds up server operations (especially uploading a large number of small files), which can make a difference when using a slow connection.</p><p><b>Ask before performing operations on locked files</b><br>
When the file on which an operation is to be performed is locked, the program asks whether it is sure to perform the operation and this depends on the status of this option.</p><p><b>Do not ask before attempting to download a file locked by yourself</b><br>
In the event that the file on which the operation is to be performed is locked, the program asks whether you are sure to perform the operation and this is dependent on the status of this option. You can mark this switch so that the program does not display lock information for locked files, but only for files that have been locked by you.</p><h2>Locking documents on an FTP server</h2>

<p>Spider allows you to block documents you are working on. This topic is discussed in more detail in the <a href="main_tabs_myftpservers_lockfile.php"> Document Blocking </a> dialog. Here you will find a few settings responsible for how this function works:</p><p><b>Do not ask for comment text when blocking files</b><br>
You can lock files you are working on so that no one else can open them at the time. When someone tries to open such a file in Spider they will be shown the comment text, which you will ask for when you apply the lock. If you do not want the program to ask for the text of this comment, select this option.</p><p><b>Default comment</b><br>
Here you can enter the message that will be displayed to a person trying to open a file that you have blocked.</p><h2>Blocking documents on the WebDAV server</h2>

<p><b>Do not ask for additional properties when locking files</b><br>
Check this option if you want to block files with default settings. Otherwise you will be asked to accept the lock settings</p><p><b>Lock resources exclusively</b> <br>
Select this option to prevent any tampering with the locked file. If it is unchecked, the lock will be for informational purposes only</p><p><b>Lock folders recursively</b><br>
Select this option if, when locking a folder, all its elements (including subfolders) are also to be locked</p><p><b>Default lock duration </b> <br>
Select the default lock duration from the list. This setting is important when you do not want to display a window with additional settings.</p><h2>Maintaining connection with the server</h2>

<p>Spider can maintain connection with the FTP server despite disconnecting the connection in case of inactivity, which is often set on the server. In this group you can turn on sustaining and choose the way it will be performed:</p><p><b>Maintain a control connection to the FTP server</b><br>
Usually FTP servers disconnect the connection if no operation is performed for a long time. If you want to maintain the connection, select this option and choose the maintain method below.</p><p><b>Maintain control connection with the command</b><br>
Not all servers support the NOOP command to sustain a connection. With this list you can select which command to run for connection sustain. This is a way to cheat servers without NOOP support.</p><p><b>Maintain the connection every specified time</b><br>
Knowing the time at which the server disconnects an idle connection, you can set here a shorter period of time after which the connection sustain command selected above will be executed. In this way, you can maintain the connection just before it is disconnected.</p><h2>Working offline</h2>

<p>Spider can work with FTP servers even when there is no active connection to the Internet. For this unique feature, see <a href="main_tabs_myftpservers_on-offline.php"> online and offline </a> . Here are some settings related to working offline:</p><p><b>Work offline when not connected </b> <br>
If there is no connection to the server, the program can work on the so-called cache, i.e. the last representation of the server content saved on the disk. If you disable this option, you will lose this option.</p><p><b>Automatically connect to the server when offline operations cannot be performed</b><br>
Check this option if you want the program to automatically connect to the server when a certain function cannot be performed offline.</p><p><b>Clear cache button</b><br>
Clicking on this button clears the cache file in which the content of the FTP server is stored and makes it possible to work on the server without an active connection.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings_network.php#settingslistnetwork">Other network settings</a></li><li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="down_publishing_ftpqueue.php">FTP file queue</a></li><li><a href="main_tabs_myftpservers_on-offline.php">Working online and offline</a></li><li><a href="network_publishing_general.php">Publishing using Spider</a></li><li><a href="service_tool_synchronization.php">Synchronization of projects</a></li></ul>
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
