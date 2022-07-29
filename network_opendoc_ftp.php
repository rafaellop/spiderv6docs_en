<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Opening and editing documents directly on the server</title>

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
<h1>Opening and editing documents directly on the server</h1>



<!-- nag&#322;owek podtematu -->
<p>Spider allows you to open, edit and save documents remotely. This means that it is possible to make changes directly to the website files. Such a document can also be viewed in the Browse tab. All this is done in the same way as for files on the local hard drive.</p>
<p>This can significantly speed up the work when, for example, you need to quickly correct something on the site, and there is no local copy on the computer, or it is out of date (e.g. when working in a group).</p>




<h2>Preparation for work online</h2>To edit documents online, you must configure a remote server connection in the <a href="main_tabs_myftpservers.php">Servers</a> tab. If you have <a href="settings_network_ftpservers_add.php">Server Properties</a> set for a server, you don't need to change anything in that server to open and save changes to remote documents.<p>To view a document hosted using FTP, you must set <a href="settings_network_ftpservers_add_map.php">mapping path on the FTP server to URL</a> . This mapping determines the URL to use to view the edited file.</p>

<p>Due to the fact that WebDAV is an extension of the HTTP protocol, no mapping is required when using this protocol. Simply put, the address of the WebDAV server is also the address where the document is available.</p>



<h2>Online file editing</h2>

<p>Once all options are set, you can edit the files on the server via the <a href="main_tabs_myftpservers.php">Servers</a> tab just like the files from your local disk via the <a href="main_tabs_myservices.php">Projects</a> . To open the file, use the command in the toolbar on the right side of the tab. Further editing, saving, etc. is the same as when editing a local file.</p>Files opened online are marked, to distinguish them from files opened locally, with a ball with a blue arrow:<ul>
	<li>means a file that does not require saving (new or saved after making changes)</li>
	<li>indicates a file with changes made after which it was not saved</li>
</ul>

<p>Additionally, the 'Friendly name' of the server from which the document was opened is displayed on the title bar of the program.</p>

<p><b>Edit locked file</b><br>
If you try to open a file <a href="main_tabs_myftpservers_lockfile.php">locked</a> by another user for editing, a corresponding message will be displayed. Such a file cannot be saved without first removing the lock. This prevents changes being written while the file in question is being edited by another user.</p>

<p><b>Warning of overwriting a file opened remotely</b><br>
Enable this option so that Spider warns you before you try to write a file on an FTP or WebDAV server that you simultaneously have open remotely for editing in Spider.</p><h2>Inserting links</h2>
<p>When editing a remote file, you can insert links to it. In order to facilitate the insertion of links to the site files in which the edited file is located, a mechanism has been created that allows selecting a file from a local site. This mechanism uses the <a href="service_tool_synchronization.php">mapping settings for site synchronization</a> .</p>

<p>The mechanism works in such a way that it checks the location of the remotely edited file on the server and the location of the linked file in the local site. Then, using the synchronization mapping, it determines a relative path to that file on the server and inserts it into the document.</p>

<p><b>Note!</b> <br>
The path to the target file is inserted without checking whether the target file exists on the server. It should be posted there for the link to work properly.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="network_publishing_general.php">Publishing using Spider</a></li><li><a href="settings_network_ftpservers_add_map.php">FTP path to URL mapping</a></li><li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="tool_open_remote.php">Tools - Open from the Web</a></li></ul>
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