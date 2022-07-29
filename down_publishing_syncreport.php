<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Bottom Results Panel - Synchronization Report</title>

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
<h1>Bottom Results Panel - Synchronization Reports</h1>

<!-- tre&#347;&#263; pomocy -->
<p>This view of the <a href="down_publishing.php">Publish Operations</a> tab located on the <a href="down_panel.php">bottom results panel</a> shows the site synchronization report. Synchronization is described in more detail in the topic <a href="service_tool_synchronization.php">Project</a> synchronization tool. The report presented on this tab is created from the project synchronization tool mentioned above, based on comparison of local and remote FTP site contents. The tab appears automatically after the list of files to be synchronized has been created.</p><p>Synchronization report is both informative and primarily a synchronization execution tool, because after you create a list of items to be synchronized, the synchronization is not executed automatically, but the program waits for the user's decision. You may want to exclude some items from the synchronization list even though you have already defined some settings in the <a href="service_tool_synchronization.php">synchronization</a> settings window.</p><p>General settings for the synchronization tool can also be found in the <a href="settings_network.php">Network and Server Settings</a> window on the <a href="settings_network_synchronization.php">File Queue and Synchronization</a> tab.</p>

<p>While synchronization is being performed, you are free to work on another server on the "Servers" tab. Synchronization and <a href="down_publishing_ftpqueue.php">FTP File Queue</a> work independently!</p>

<h2>Synchronization list description</h2>

<p>The list presented on this tab consists of several columns that serve as information:</p><p><b>Filename</b><br>
This column contains the names of the files that are selected for synchronization. Next to the file there is an icon for the file type and a toggle switch which, if turned off, will cause the file not to be considered for synchronization.</p><p><b>Local copy</b><br>
This column provides information about the date and time the local copy of the file placed in the sync list was modified. The size of the file is given in brackets. If the file does not exist the information is also given.</p><p><b>Remote Copy</b><br>
This column provides information about the date and time the remote copy of the file placed in the sync list was modified. The size of the file is given in brackets. If the file does not exist the information is also given.</p><p><b>Status</b><br>
This column indicates the status of the item in the sync queue (for example, "to be executed" or "executed").</p><p><b>Action</b><br>
This column indicates the action that will be performed on the synchronization report item.</p><p><b>Server</b><br>
This contains the name of the server that is affected by the item operation.</p><h2>Control buttons</h2>

<p>The list of items to be synchronized is controlled by the buttons on the right side of the list. Here is the meaning of each:</p><p><b>Toggle Tab View Publishing</b><br>
This button has a sub-menu that you can use to switch between the <a href="down_publishing.php#downpanelpublishinglist">Publishing Operations</a> tab views.</p><p><b>Start synchronization</b><br>
This button is used to start executing the synchronization of the files collected in the list. Once started, the status bar below the list displays a report on the task currently running. There is also a progress indicator, which clearly shows how much time is left to complete the current task.</p><p><b>Stop synchronization</b><br>
Use this button to stop a synchronization process that is in progress.</p><p><b> Check / uncheck by extensions </b> <br>
 This button displays the <b> Extension Selection </b> pane that lists the extensions of all files in the sync queue. This allows you to exclude files of different types from syncing before starting the queue execution. This way you can further limit the number of files (the first similar limitation can be found in the <a href="service_tool_synchronization.php#pomijanie_rozszerzen"> Projects - Site Sync </a> window).</p><p><b>Move up</b><br>
This button allows you to move tasks up in the queue. Tasks placed higher up are executed earlier.</p><p><b> Move down </b> <br>
 This button allows you to move jobs down in the queue.</p><p><b>Remove the selected item from the synchronization queue</b><br>
This button, marked with a minus icon, allows you to delete selected (highlighted) synchronization list items.</p><p><b>Clear the synchronization queue</b><br>
This button marked with a trash can icon allows you to clear the sync list.</p><p><b>Save the report as HTML</b><br>

This button allows you to save the synchronization report to disk as an HTML document.</p><p><b>Save report as TXT</b><br>
This button allows you to save the synchronization report to disk as a TXT text document.</p><p><b> Help </b> <br>
 Displays the Help topic for the current tab in the lower pane.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="service_tool_synchronization.php"> Project synchronization </a></li><li><a href="services_general.php">About projects in general</a></li><li><a href="down_publishing.php#downpanelpublishinglist">Other publishing operation tabs</a></li><li><a href="down_panel.php#downpanellist">Other bottom panel tabs</a></li><li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="settings_network_ftpclient.php">FTP client settings</a></li><li><a href="main_window_desc.php">Main program window</a></li></ul>
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