<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>"Servers" tab</title>

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
<table class="" width="100%" border="0" cellpadding="5" cellspacing="5">
<tr>
<td>

<!-- nag&#322;owek g&#322;owny tematu -->
<h1>"Servers" tab</h1>




<p>The "Servers" tab allows you to work remotely on FTP and WebDAV servers.</p><p><i>FTP servers</i> are network servers on which, for example, components of websites are placed.</p>
<p>WebDAV ( <i> Web-based Distributed Authoring and Versioning </i> ) is an extension of the HTTP protocol that allows you to transfer and manage documents on the server. You can read more about WebDAV at <a href="https://www.webdav.org" target="_blank">www.webdav.org</a> .</p>

<p>Using this tab, you can use the server in a similar way to using Windows Explorer or the <a href="main_tabs_myservices.php"> Projects </a> tab. You see your folders, files, you can open them, rename them, create new ones as if you were working on your own computer. On the first connection, the Spider displays the contents of the user's home directory.</p>

<p>You can enable the "Servers" tab using the right panel, as well as from the menu under the button shown above or from the <a href="main_menu_main.php"> Main menu </a> / <a href="main_menu_view.php"> View </a> .</p><p>All functions performed on the tab are saved in the so-called log, i.e. a report on communication between the Spider and the server. This report is displayed in the <a href="down_publishing_serverlog.php"> bottom panel </a> .</p><p>You can work with the server selected here both online (connected) and offline (disconnected). For a description of these modes, see <a href="main_tabs_myftpservers_on-offline.php"> Working Online and Offline </a></p><h2>Content - Toolbar and server list</h2>

<p>The "Servers" tab is similar to the <a href="main_tabs_myservices.php"> Projects </a> tab, except that the tab allows you to work remotely on shared servers in the <a href="settings_network_ftpservers.php"> Settings window FTP and WebDAV servers </a> .</p><p><b>Main button bar and server selection</b><br>
At the top of the tab, there is a bar with several buttons and a list that allows you to select one of the servers defined in the settings on which you wish to work.</p><p><b>Server grouping</b><br>
It is possible to group servers. Groups are listed above ungrouped projects. Clicking on the group name will expand the list of servers collected in it. This is particularly useful when working on a large number of different projects. You can specify the group to which a server is assigned in the <a href="settings_network_ftpservers_add.php">Server Properties</a> window.</p>

<p><b>Connect/Disconnect" button</b><br>
To the right of the list of servers is a button with a green plug allowing you to connect to the selected server. Once the connection is established, the plug turns red allowing disconnection.</p><p><b>"Abort current operation" button</b><br>
This button allows you to interrupt an operation currently being performed on the server. However, it is used to abort tab operations, not to abort <a href="down_publishing_ftpqueue.php">file queue</a> tasks.</p><p>The following buttons are located next to the remote server directory tree:</p>

<p><b>"Server Settings" button</b><br>
On the left-hand side of the above-described list you will find a button that launches the <a href="settings_network_ftpservers.php">Server Settings </a> window <a href="settings_network_ftpservers.php">, </a> where you can add new FTP and WebDAV servers or modify the settings of existing ones.</p><p><b>"Favorite folder list" button</b><br>
This menu displays your favorite folders on the FTP server. You can add favorite folders using the button marked with a plus sign next to the remote server's file list. Selecting a folder in this list takes you to it quickly. The first item in the favorites list is the "Go to home (start) folder" item, which will quickly switch you to the main folder of your account.</p><p><b>"View file queue" button</b><br>
Displays the bottom panel with the selected <a href="down_publishing_ftpqueue.php">file queue</a> view.</p><p><b>"View synchronization report" button</b><br>
Displays the bottom panel with the selected view of the <a href="down_publishing_syncreport.php">project synchronisation report</a>.</p><p><b>"View server communication log" button</b><br>
Displays the lower panel with the selected view of <a href="down_publishing_serverlog.php">the server communication record</a>, the so-called log.</p><p><b>"Start execution of file queue" button</b><br>
Allows you to start executing tasks placed in the <a href="down_publishing_ftpqueue.php">file queue</a>.</p><p><b>"Stop file queue execution" button</b><br>
Allows you to stop the execution of tasks placed in the <a href="down_publishing_ftpqueue.php">file queue</a>.</p><p><b>"Delete cache contents of current server" button</b><br>
Allows you to delete the cache for the current server - the tree and file list will be cleared. The command only works if the connection is inactive!


<a name="tree"></a></p><h2>Contents - Directory tree</h2>

<p>The directory tree displays a hierarchical list of directories on the server. You can click on a directory name to switch to it and see its contents in the list below. You can also click a plus button to expand a directory and see what other directories are in it. <i> Note: At first the Spider doesn't know if there are any subdirectories in the directory, so the plus is always available. </i></p><p>In the tree, you can perform operations such as deleting the selected directory (with the DELETE key on the selected directory), renaming it (with the F2 key on the selected directory), or moving the folder to another folder (without having to download its contents).</p><p>Additionally, there is a context menu with the following commands:</p>

<p><b>"Show whole tree"</b> <br>
Allows you to easily clear the Parent Folder field in <a href="settings_network_ftpservers_add.php"> Server Settings </a> . Using this command will clear the list of folders and files to <a href="main_tabs_myftpservers_on-offline.php"> offline </a> .</p><p><b>"Set as parent folder (root)".</b><br>
Allows you to easily set the selected folder as the Master Folder for the tree. See the topic describing <a href="settings_network_ftpservers_add.php">Server Settings</a> for details. Using this command will clear the list of folders and files for <a href="main_tabs_myftpservers_on-offline.php">offline operation</a>.</p><p><b>"Set as startup folder"</b><br>
Allows you to easily set the selected folder as your startup folder (it is its contents that will be displayed by default in the file list below when you connect to the server). See the topic describing <a href="settings_network_ftpservers_add.php">Server Settings</a> for details.</p><h2>Contents - File List</h2>

<p>The file list displays the contents of the currently selected directory. Both files and folders are displayed in the same way as in Windows Explorer or on the <a href="main_tabs_myservices.php"> Projects </a> tab. The list is arranged in columns, and the information presented in the columns is:</p><ul>
        <li><b>File name</b> - displays the name of the file or folder located on the server</li><li><b>Size</b> - file size displayed depending on <a href="settings_network_ftpclient.php">FTP and WebDAV client settings</a>.</li><li><b>Modified</b> - date and time of last modification.</li><li><b>Access rights</b> - presents information about the access rights to the item. You can read about access rights in the description of the <a href="main_tabs_myftpservers_rights.php">Change remote file attributes</a> window.</li><li><b>Type</b> - the name of the file or folder type, e.g. "HTML document".</li></ul>

<p>In the file list, you also have access to a context menu where there are commands that allow you to manipulate the contents of the remote server as well as the list view. The content of the menu is identical to the button bar next to the list. The commands there are described below.</p><h2>Contents - the toolbar next to the file list</h2>

<p>Next to the button list there is a button bar. The file list menu has the same content and consists of the following buttons:</p><p><b>Open the selected document in Spider</b><br>
With this button <a href="network_opendoc_ftp.php">you will open the documents selected in the file list for editing in Spider</a>. You will be able to change them and they will be uploaded back to the server when saving.</p><p><b>Create a new document on the server</b> <br>
With this button you will create an empty document with the given name on the server. This allows you to open it later and edit it right from the server.</p><p><b>Create a new folder</b><br>
This command allows you to create a new empty directory on the server.</p><p><b>Rename a selected item</b><br>
Use this button to rename both the directory and the file.

<a name="myftpserversrights"></a></p><p><b>Changing the access rights to a selected item</b><br>
Use this button to change the access rights to the selected element. The access rights and their setting are described in the <a href="main_tabs_myftpservers_rights.php">Change remote file attributes</a> window. <span class="czerwony">Changing access rights is only supported by FTP servers, so it is hidden when using a WebDAV server.</span></p><p><b>Delete selected files</b><br>
This button allows you to delete the selected files or directories from the server.</p><p><b>Refresh the file list</b><br>
If you wish to refresh the list of items displayed use this button, which will download and display the contents of the current directory again.

<a name="myftpserverslockfile"></a></p><p><b>Lock selected documents</b><br>
When working on files, you may wish to block access to currently modified files for other users. Use this button to impose a lock. The rules for group work are described in the <a href="network_publishing_general.php">Publishing</a> topic. Depending on whether you are working on an FTP or WebDAV server, the corresponding window will open: <a href="main_tabs_myftpservers_lockfile.php">Lock file</a>.</p><p><b>Unblocking selected documents</b><br>
You can unlock documents locked with the above command using this button.

<a name="myftpserverslockfileinfo"></a></p><p><b>Blocking information for the selected item</b><br>
With this button, you can check the blocking information assigned to the file that is blocked. This will allow you to see the name of the person who blocked it and additional information if the user has provided it.</p><p><b>List of favorite folders</b><br>
This menu displays your favorite folders on the FTP server. You can add favorite folders using the button marked with a plus. Selecting a folder in this list takes you to it quickly. The first item in the favorites list is item "Go to home directory", which will quickly switch you to the main folder of your account.</p><p><b>Add the current folder to the list of favorite folders</b><br>
Use this button to add the current folder to your list of favorite folders, so you can quickly switch to them.</p><p><b>Deletion of selected favorite folders</b><br>
Click to indicate the folder to be deleted from the list of favorite folders. No folder will be deleted from the hard disk!</p><p><b>Selection of all elements</b><br>
This button allows you to quickly select all items in the list.</p><p><b>Filtering files by various criteria</b> <br>
In the menu under this button you can select the type of files that are displayed on the list. The names of the files in the list will be colored depending on the selected filter.</p><p><b>Changing the list view</b><br>
Using the menu under this button, you can choose how the items are presented in the list. You can select different views just like in Windows Explorer.</p><p><b>Copy the URL to the clipboard</b><br>
Click to copy the reference to the selected file to the clipboard. If a <a href="settings_network_ftpservers_add.php#mapping">preview mapping</a> is assigned to the server, the copied reference is an HTTP:// address, which can be used to view the selected file in a web browser. If no mapping is available, the address of the link is created to the file on the FTP or WebDAV server.</p><p><b>Paste the URL into the editor</b><br>
Click to paste a link to the indicated file into the editor. This function also uses the mapping described above.</p><p><b>File list help</b><br>
This button displays this help page.</p><p>To learn more about the rules for using the Servers tab, see the Spider publishing help topic. There you will find a description of how to use the tab for various purposes.</p><h2>Connection status</h2>
<p>At the bottom of the tab, there is a bar displaying information about the connection and the currently performed operation. The information consists of an icon and a description:</p><p><b>Disconnected (offline)</b><br>
This information is displayed when the Spider is not connected to the server, no operations are being performed.</p><p><b> Operations on the server are in progress </b> <br>
 This information is displayed when various operations are performed on the server. Additionally, it displays information about the operation that is currently being performed (e.g. <tt> Connecting to the server </tt> , <tt> Downloading the directory </tt> , <tt> Renaming the file </tt> , <tt> Retrieving information about blockade </tt> etc.). <b> NOTE! </b> This is where <b> </b> information about operations performed with <a href="down_publishing_ftpqueue.php"> FTP file queues in the bottom pane </a> , in particular file uploads and downloads, is <b> not displayed even after the file has been dragged to / from the FTP and WebDAV Servers tab! These operations take place independently as a separate process!</b></p>

<p><b>Connected (online)</b><br>
This information is displayed when the Spider is connected to the server, but no operations are currently taking place.</p><p><b>Connected (online)</b><br>
This information is displayed when Spider is connected to the server via a secure (encrypted) connection, but no operations are currently taking place. <a href="settings_network_ftpservers_add.php#secureconnections">Be sure to click HERE to read more about the handling of secure connections in Spider.</a></p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="main_tabs_myftpservers_on-offline.php">Working with the server offline and online</a></li><li><a href="down_publishing_ftpqueue.php">Files queue</a></li><li><a href="network_publishing_general.php">Publishing using Spider</a></li><li><a href="settings_network_ftpclient.php">FTP and WebDAV client settings</a></li><li><a href="settings_network_ftpservers_add_map.php">FTP path to URL mapping</a></li><li><a href="settings_network.php#settingslistnetwork">Network settings</a></li><li><a href="settings_network_ftpservers_add.php">Adding a new server</a></li><li><a href="service_tool_synchronization.php">Synchronization of projects</a></li><li><a href="network_opendoc_ftp.php">Opening and editing documents directly on the server</a></li>
        <li><a href="main_tabs_general.php">Other tabs</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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