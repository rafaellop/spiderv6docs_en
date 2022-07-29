<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Projects - Project synchronization</title>

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
<h1>Projects - Project synchronization</h1>





<p>Project synchronization is a function that allows you to automatically reconcile the contents of the folder on the local drive, which is the <a href="services_general.php"> Spider project </a> , with the contents of the selected remote server folder defined in Spider in <a href="settings_network_ftpservers.php"> FTP and WebDAV server settings </a> .</p><p>To synchronize the local project content with the server content, use the "Project Synchronization" window described below, which you can open with the command from <a href="main_menu_services.php"> the Projects menu </a> / <a href="service_properites.php"> Project Properties </a> / Project synchronization or from <a href="main_tabs_myservices.php"> Projects </a> . The command icon is shown above. As a result of this tool, the <a href="down_panel.php"> lower panel </a> tab of <a href="down_publishing_syncreport.php"> Publishing Operations </a> will create a list of files to be sent to the server or download from it (depending on the synchronization direction you set).</p>

<p>The synchronization window consists of two tabs: Synchronization settings and Synchronized items.</p><h2>Synchronization Settings tab</h2>

<h3>FTP/WebDAV server selection</h3>

<p>The sync pane allows you to select <a href="service_properites.php#service_properties_mappings"> mappings </a> to be used for the sync function (list in the FTP / WebDAV server group). You can synchronize one project with different FTP and WebDAV servers, as well as different local project folders with different remote server folders.</p><p>The mapping selected here determines from which folder on your computer's disk to which folder on the selected server files will be sent.</p>

<h3>Synchronization direction</h3>

<p>You can synchronize the project content bi-directionally, i.e. either a local project with a remote server (sending files to the server) or a remote project with a local project (downloading files from the server). <br></p><p><b>local-&amp;gr;remote</b> - allows you to publish files that are new in the local project and non-existent on the remote server or are newer than the same files on the remote server. This makes it easy to keep the content of the remote server and the local project compatible.</p><p><b>remote-&amp;gt;local</b> - allows you to download files that are new on the remote server (e.g. uploaded by someone else) and do not exist in the local project or are newer than the same files in the project on the local drive. This allows you to quickly update the contents of your local copy of the project with what is on the network. <b>Note: During remote-&gt;local synchronisation, files locked by users are not synchronised!</b></p><h3>Settings</h3>

<p>A group of switches named Settings allows you to define the behavior of the synchronization function when creating a list of items to synchronize and the synchronization itself. The settings available here change depending on the chosen synchronization direction and may apply alternately to a local project or a remote server, but their meaning remains more or less the same. Here we describe the switches in local mode -&amp;gt; remote:</p><p><b>Delete remote files and folders that do not exist in the local copy of the project</b><br>
If you enable this option, remote files (or folders) that exist on the server but have no corresponding ones in the project on the local disk will be deleted. <b>ATTENTION: Enabling this option is dangerous and is only recommended after much thought!</b></p><p><b>Replace remote local when modification date similar</b><br>
With FTP or WebDAV servers, it is sometimes not possible to specify a very precise date and time. This option allows you to accept a certain margin of error and synchronise even files with slightly different dates. <b>Careful use of this function is recommended.</b></p><p><b>Replace remote locales when different sizes and date of modification similar</b><br>
With FTP or WebDAV servers, it is sometimes not possible to specify a very precise date and time. This option allows you to accept a certain margin of error and synchronise even files with slightly different dates, but provided their size is different.</p><p><b>Force overwriting of remote files even if the date indicates that the local file is older</b><br>
With FTP or WebDAV servers, it is sometimes not possible to specify a very precise date and time. This option causes remote files to be overwritten with local files even when the modification date of the remote file indicates that it is newer than the local file. <b>Extremely careful use of this feature is recommended.</b></p><p><b>Change the local modification date to a remote date</b><br>
By checking this box you will cause the local files to receive the same modification date as the remote files during synchronisation.

<a name="pomijanie_rozszerzen"></a></p><h3>Skipping files with selected extensions</h3>

<p>In this group there is a field where you can enter the file extension that should be ignored during synchronization. Enter extensions like <tt> * .add; *. Tmp </tt> . On the <a href="#service_synchro_syncelements"> second tab of this window </a> you can additionally indicate which specific files or folders should be synced or skipped.</p><p><b>Skip backup files</b><br>
Check this switch to have the program skip backup files both with the extension *.BAK and with a name built according to the scheme BAK.* (a newer form of the name of backup files created by Spider).</p><h3>Clean up project</h3>

<p>Before carrying out project synchronisation, it is recommended to <a href="down_integrity.php">clean up the local project</a>. The project clean-up functions are described in a separate topic. If you wish to invoke the project purge function, use the button located in this group and, using the menu assigned to it, select the project purge scope.

<a name="service_synchro_syncelements"></a></p><h2>Synchronized items tab</h2>

<h3>Select items to sync</h3>

<p>Using the group called "Synchronized items" and the list there, you can indicate which files or folders should be synchronized. You can choose:</p><p><b>The whole project</b><br>
Enable this switch if you want to synchronise the entire project according to the mapping settings. This option is enabled by default.</p><p><b>Only designated files or folders</b><br>
Enable this switch if you want to synchronise only the selected files or folders of the project. Add the files and folders to the list below. Files and folders not included in this list will be skipped.</p><h3>Exclude from synchronization</h3>

<p>Using the group named "Synchronise skip files/folders" and the list there, you can indicate which files or folders are unconditionally <u>not to be</u> synchronised.</p><p>Below the list, there is a <b>Skip files with a document status lower than the one selected below</b>, which, when switched on, allows the selection of the document status below which files are ignored.</p>

<h1>Generating a sync list</h1>

<p>After specifying all synchronization parameters, click <b> Create List </b> to let the program connect to the Internet and the selected synchronization server, and then create a list of items that need to be synchronized. Building a list depending on the size of the project may take a while. It is necessary to browse through all the directories on the server and compare them with the local content. When you have finished creating the list of items to sync, it will be inserted in the <a href="down_panel.php"> bottom result pane </a> on the tab <a href="down_publishing_syncreport.php"> Publishing Operations </a> . Now you can select the files you want and use the "Start Sync" button () to start the scheduled synchronization task.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="services_general.php">About projects in general</a></li><li><a href="service_properites.php#service_properties_mappings">Project mapping settings</a></li><li><a href="down_publishing_syncreport.php">Sync Report</a></li><li><a href="down_integrity.php">Cleaning a project</a></li><li><a href="settings_network_synchronization.php">Program Settings - Project Synchronization</a></li><li><a href="settings_network_ftpservers.php">Program Settings - Adding FTP and WebDAV Servers</a></li><li><a href="main_tabs_myservices.php">Projects tab</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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