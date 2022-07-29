<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Publishing - general</title>

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
<h1>Publishing - general</h1>

<!-- nag&#322;owek podtematu -->

<p>Spider has very extensive tools for publishing documents and projects in the network, as well as for direct work on documents on the server.</p>

<p>To publish documents or entire projects on the web, use Spider's built-in <b> FTP </b> and <b> WebDAV </b> modules located on the <a href="main_tabs_myftpservers.php"> Servers tab </a> .</p>


<h3>WebDAV support</h3>



<p>You can read more about WebDAV at <a href="https://www.webdav.org" target="_blank"> www.webdav.org </a> .</p>


<h2>Single and multiple document publishing</h2>

<h3>Preparation of the server list</h3>
<p>The first step you need to do in order to transfer files between your computer and a server on the network is to prepare a server list. To do this, go to the <a href="main_tabs_myftpservers.php"> Servers </a> tab and click the <a href="settings_network_ftpservers.php"> Network and Server Settings </a> button (at the top right server list page). When using it, you will be able to add a new server to the list using the <a href="settings_network_ftpservers_add.php"> Add server ... </a> window displayed by the button with the plus sign.</p><p>After approving the changes, the added servers will appear in the list in the <a href="main_tabs_myftpservers.php"> Servers </a> tab. Now you just need to click the button marked with a green plug, If the entered data is correct, the Spider will connect to the server (depending on the settings - and if necessary - you may be asked to confirm whether the computer is connected to the network or to establish a connection) and .. .you can start transferring files!</p>

<h3>How do I publish a document from a local drive to the Internet?</h3>
<p>Connect to the server on the <a href="main_tabs_myftpservers.php"> Servers </a> tab, go to the appropriate folder and from the file list on the <a href="main_tabs_myservices.php"> Projects tab </a> drag the selected document to an area that displays the contents of the server. The document will be added to the <a href="down_publishing_ftpqueue.php"> FTP File Queue </a> located in the <a href="down_panel.php"> bottom pane </a> . You can also publish files to the Web by dragging them to the <a href="main_tabs_myftpservers.php"> Servers </a> tab from other windows, such as Windows Explorer. Additionally, you can publish a file by dragging it to the server's file list from <a href="down_find_report.php"> Search Report </a> .</p><p>If you already want to publish the document, press the button in the queue window to start the task execution. If you want to send other documents, proceed in the same way as with the previous one.</p><p>You can also upload entire directories containing subdirectories and files to the server. The structure of the uploaded directory will be recreated on the server.


<a name="publish_current">
<h3>Publish the current document, Publish all open documents
</h3><p>There is also a quick way to publish the currently edited document, or all open documents, on the server. To do this, use the <b>Publish Current on Web</b> command located in the <a href="main_menu_file.php">File menu</a> (or <b>Publish Open on Web</b></p> to place all open documents on the server).
<p>By default, this function uploads documents to the current folder in the file list of the <a href="main_tabs_myftpservers.php">Servers</a> tab.In order for Spider to publish documents, an active connection to the server is required - otherwise the files will just be added to the <a href="down_publishing_ftpqueue.php">ftp file queue</a></p> </a> and uploaded when it starts. , if one or more <a href="service_tool_synchronization.php">mappings</a> exist for the<a name="publish_current">current </a><a href="services_general.php">project</a> <a href="service_tool_synchronization.php">for synchronization</a>, this function will use the default mapping and send the file to the appropriate folder on the server.</p><h3>Publish the document with the command from the Projects tab</h3>
<p>There is a <b> Publish to Web </b> command in the <a href="main_tabs_myservices.php"> Projects </a> tab button bar. It allows you to send the item indicated on the list of files of this tab to the selected server. This function can use mapping for synchronization (see above for <b> Publish Current Document, Publish All Open Document </b> ).</p><h3>How to download files from the server to a local disk?</h3>
<p>Downloading files to a local disk is the same as publishing them on the Internet. Just drag the file from the <a href="main_tabs_myftpservers.php"> Servers </a> tab to the target directory on the <a href="main_tabs_myservices.php"> Projects </a> tab, and then run the queue execution.</p><p>You can download entire directories in the same way - the structure of the downloaded directory (subdirectories and the files they contain) will be rebuilt on the local disk.</p><h3>Automatic queue execution</h3>
<p>Automatic queue execution is possible, which is very convenient when you repeatedly upload and download different files with an active connection all the time. To do this, select the appropriate options in <a href="settings_network_ftpclient.php"> Program Settings </a> .</p><h2>Support for secure connections</h2>The Spider allows you to establish secure (encrypted) connections to both FTP (SSL / TLS) and WebDAV (HTTPS) servers. The method of connecting to the server should be selected in the <a href="settings_network_ftpservers_add.php"> Server Properties </a> window.<p><a href="settings_network_ftpservers_add.php#secureconnections"> Be sure to click HERE to read more about handling secure connections !. </a></p>


<h2>Project synchronization</h2>



<p>Spider allows <a href="service_tool_synchronization.php"> Project synchronization </a> . This unique feature allows you to quickly compare and automatically synchronize project content on your hard drive and on the Internet.</p>
<p>Synchronization eliminates the need to manually browse multiple directories and compare files. Now you can save a lot of time with just a few clicks.</p>
<p>In order to secure your data, before the project is synchronized on disk and on the Internet, a <a href="down_publishing_syncreport.php"> sync queue </a> is created where you can verify the list of files to be uploaded or deleted.</p>
<p>Synchronization is possible both ways, ie both from the local computer to a server in the Network and from the Network to the local computer.</p>



<h2>Remote working</h2>Another very useful feature of the Spider is the ability to <a href="network_opendoc_ftp.php"> edit documents opened directly from the server </a> via the <a href="main_tabs_myftpservers.php"> Servers </a> tab.<h2>Facilitations in group work</h2>

<p>If there are many people working on a project, it is extremely important to control who is editing what document at the moment and not to overwrite someone's changes.</p>
<p>Spider allows you to secure documents by <a href="main_tabs_myftpservers_lockfile.php"> applying a document lock </a> . You can do this with a menu command under the <a href="main_tabs_myftpservers.php"> Servers </a> tab.</p>



<h2>Working offline</h2>

<p>The Spider has a unique function that allows you to work on an FTP server also without an active connection to it. This mode is called <a href="main_tabs_myftpservers_on-offline.php"> the <i> offline </i> </a> mode, unlike the <i> online </i> mode that takes place when you are actively connected to FTP server. Both modes apply to <a href="main_tabs_myftpservers.php"> Servers </a> .</p><p>Offline mode uses the so-called. <i> cache </i> which is on the disk. This file is created during an active connection to the selected FTP server.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="settings_network.php">Program Settings - Network and FTP Server Settings</a></li>
  <li><a href="tool_open_remote.php">Tools - Open from the Web</a></li><li><a href="settings_network_ftpservers_add_map.php">FTP path to URL mapping</a></li><li><a href="main_tabs_myftpservers_on-offline.php">Working on an offline server</a></li><li><a href="main_tabs_myftpservers_lockfile.php">Locking documents</a></li><li><a href="service_tool_synchronization.php">Synchronization of projects</a></li></ul>
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