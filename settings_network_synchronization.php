<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.0.1.1)">

<!-- nazwa strony pomocy -->
<title>Program settings - Project synchronization</title>

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
<h1>Program settings - File queue and Project synchronization</h1>


<h2>File queue</h2>

<p>This group of settings applies to the <a href="down_publishing_ftpqueue.php"> file queue </a> behavior. With the options here, you can define:</p><p><b>Automatically start queue execution when online</b><br>
Check this switch if you want, when <a href="main_tabs_myftpservers_on-offline.php">online</a>, the queue to be executed automatically as soon as any operation is added to it.  This allows you to use the file list almost on the fly.</p><p><b>Ask to start offline queue execution</b><br>
Check this option if you want the program to ask you to start queue execution while <a href="main_tabs_myftpservers_on-offline.php">offline</a> when an item is added to the current queue.</p><p><b>Warn against overwriting a file opened remotely</b><br>
Enable this option so that Spider warns you before trying to write a file on the server that you have remotely open for editing at the same time.</p><p><b>Warn against modification of queued files</b><br>
The queue is executed at the user's request. If you add some files to the queue but do not start executing it and continue working directly on the FTP server, it may happen that you delete a file which, for example, in the queue is intended for downloaded. By enabling this option you protect yourself against such a situation, as the program will warn you when the queue contains files on which you are trying to make some modifications.</p><p><b>Bring the queue to the top after adding operations</b><br>
Check this switch if you want the queue to be shown whenever an operation is added to it.</p><p><b>Show a message when added to offline queue</b><br>
Check this option if a message is to be displayed each time items are added to the file queue.</p><p><b>Do not interrupt queue execution when an error occurs</b><br>
If you select this option, the tasks at which an error occurred will be moved to the end of the queue, the message bases displayed, after which the program will resume queue execution from the next position. After the entire queue has been executed, only the items at which the error occurred will remain in the queue. If this option is unchecked, a message will be displayed when an error occurs and the program will wait for the user's response.</p><p><b>Automatically resume broken connections</b><br>
Check this switch if the connection to the server is to be re-established after being broken during queue execution.</p><p><b>When adding files and directories to the queue, also add the associated *.add files</b><br>
Check this option if <a href="main_editor_addfiles.php">additional document information</a> files (*.add) are to be uploaded to the server together with the relevant documents.</p><p><b>Transfer files securely</b><br>
Check this option if you want to use secure uploading of files to the server and downloading of files from the server. Secure upload involves uploading/downloading a file to/from the server under a temporary name, and only after this operation is completed is the file renamed to the correct name. This function protects against the loss of files on the server, e.g. due to a connection breakdown, and against the old local copy of the file being overwritten with a new copy not fully downloaded from the server.</p><p><b>Use separate queue of files to be published for each project</b><br>
Check this option if you want the program to remember the file queue separately for each project and automatically load it when switching from one project to another. When this option is checked and the queue executes, projects cannot be switched.</p><p><b>Warn about the case in the links of added documents</b><br>
Check this option if you want to check the links contained in the document for correctness (case-sensitive, link to a file on the local disk, use of backslash instead of slash in paths) when adding files of type "HTML document".</p><h2>Check if files are up-to-date during synchronization</h2>







<p>In this category you will find several settings responsible for the automatic synchronization of the local project content with a remote server. For more information, see <a href="service_tool_synchronization.php"> Project Synchronization </a> and <a href="down_publishing_syncreport.php"> the sync queue in the bottom pane </a> . There are literally a couple of settings in this category. You can find more settings in the above-mentioned window.</p><p><b>Send files securely to the server</b><br>
Check this option if you want to use secure uploading of files to the server. Secure upload involves uploading a file to the server under a temporary name, and only after this operation is completed is the file renamed to the correct name. This function protects you from losing files on the server, e.g. due to a connection failure. Do not confuse this function with the possibility of establishing secure connections to FTP (via SSL/TSL) and WebDAV (HTTPS) servers!</p><p><b>Do not stop synchronization when an error occurs</b><br>
Check this option to ensure that synchronization is not stopped in the event of errors. This situation could occur, for example, if a file existing in the list was deleted from disk between the creation of the synchronization list and the synchronization of the project and the server.</p><p><b><i>Additional minutes to compensate for the time difference</i></b><br>
Making it possible to equalise the time difference separately for each server.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="settings_network.php#settingslistnetwork">Other network settings</a></li><li><a href="service_tool_synchronization.php">Synchronization of projects</a></li><li><a href="down_publishing_ftpqueue.php">FTP and WebDAV file queue</a></li>
        <li><a href="down_publishing_syncreport.php">Synchronization queue</a></li>
        <li><a href="network_publishing_general.php">Publishing using Spider</a></li></ul>
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