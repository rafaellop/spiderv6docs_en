<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Bottom Results Panel - FTP Files Queue</title>

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
<h1>Bottom Results Panel - FTP Files Queue</h1>

<!-- tre&#347;&#263; pomocy -->
<p>This list of the <a href="down_publishing.php">Publish Operations</a> tab located on the <a href="down_panel.php">bottom results panel</a> represents the so-called "file queue" used to create a list of tasks to be performed in one pass on an FTP or WebDAV server, such as uploading a file to the server, downloading a file, or directory operations.</p><p>The "file queue" is closely related to <a href="main_tabs_myftpservers.php">Servers</a> and <a href="main_tabs_myservices.php"> Projects </a> . Queuing jobs are performed when files or folders are moved between the aforementioned tabs, and also during operations on the "Servers" tab in <a href="main_tabs_myftpservers_on-offline.php"> offline </a> .</p><p>The queue list turns on automatically depending on the <a href="settings_network_ftpclient.php"> FTP and WebDAV client settings </a> of the queue. It can also be enabled by showing <a href="down_panel.php"> bottom results pane </a> or by using the "Show Info Panel" button on the <a href="main_tabs_myftpservers.php">Servers</a> button .</p><h2>List appearance</h2>

<p>The information in the queue list is presented in a columnar view. The following columns are available:</p><p><b> File name </b> <br>
 This column displays the icons that indicate the publish operation. These can be icons for uploading a file or directory to the server () or downloading (). Additionally, in <a href="main_tabs_myftpservers_on-offline.php"> offline </a> some functions that are performed online immediately while offline are added to the queue (e.g. delete files or documents, rename or <a href="main_tabs_myftpservers_rights.php"> access rights </a> ). <br>
 Next to the icons, there is the name of the file affected by the operation. This can be the name of a local file or directory (when uploading) or the name of a remote file or directory when downloading or other queued functions.</p><p><b> Path </b> <br>
 A column with this name contains information about the local path (when uploading) or the remote path (when downloading).</p><p><b>Target</b><br>
The column with this name contains either the remote path when uploading, which indicates where the queue item will be placed, or the local path when downloading a file, which indicates where the downloaded remote file will be placed.<br>
For other queueing functions, for example, information about the new file name (when renaming) or the new access rights (<a href="main_tabs_myftpservers_rights.php">changing rights</a>) is displayed.</p><p><b>Size</b><br>
This column always shows the size of the file affected by the operation.</p><h2>Control buttons</h2>

<p>The file queue is controlled by the buttons on the right side of the queue. Here is the meaning of each:</p><p><b> Toggle the Publishing tab view </b> <br>
 This button has a linked menu that you can use to switch between <a href="down_publishing.php#downpanelpublishinglist"> Publish Operations </a> .</p><p><b>Start execution of the queue</b><br>This button is used to start executing the tasks collected in the queue. Once started, the status bar below the queue list displays a status report of the currently executing queue task. There you can see information about bytes transferred and remaining, connection speed and time left to complete. There is also a progress indicator, which clearly shows how much is left until the end of the current task.</p><p><b>Stop execution of the queue</b><br>This button is used to stop the queue that is being executed.</p><p><b>Move up</b><br>
This button allows you to move tasks up in the queue. Tasks placed higher up are executed earlier.</p><p><b> Move down </b> <br>
 This button allows you to move jobs down in the queue.</p><p><b>Remove the current job</b><br>This button allows you to remove the current job from the queue.</p><p><b>Remove all</b><br>This button allows you to remove all jobs from the queue.</p><p><b>Help</b><br>Brings up the Publishing Queue Help topic.</p><h2>Hints</h2>

<p>The file queue is automatically remembered and restored between program runs.</p><p>You can download or upload entire folders including their entire contents to the server. When a folder is encountered on the file queue, they are expanded and their contents are downloaded until the queue ends.</p><p>You can hide the queue panel and work in Spider, and you will hear a notification sound when the queue completes. Also on the <a href="main_tabs_myftpservers.php">Servers</a> tab while the queue is executing, the status bar is displayed in red and notifies you that the queue is executing.</p><p>If you have any connection problems you can check the FTP server communication record on the <a href="down_publishing_serverlog.php">FTP server connection log</a>.</p><p>While executing the file queue you can freely use the "Servers" tab. Now both tools work independently of each other (in previous releases of Spider you could only use one of them at a time).</p>

<p>To quickly open a file placed in the FTP queue just double-click on it.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="down_publishing.php#downpanelpublishinglist">Other publishing operation tabs</a></li><li><a href="down_panel.php#downpanellist">Other bottom panel tabs</a></li><li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="settings_network_ftpclient.php">FTP client settings</a></li><li><a href="main_window_desc.php">Main program window</a></li></ul>
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