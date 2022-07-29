<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Project synchronization</title>

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

<h1>Project synchronization</h1>
<!-- nag&#322;owek g&#322;owny tematu -->




<!-- Tre&#347;&#263; pomocy -->

<p>Project synchronization allows you to quickly and extremely easily synchronize the content of the site on your local drive and on the server.</p>
<p>With a few clicks, you can upload files to the server without having to check which files have been changed since the last site update.</p>
<p>This tool also makes group work easier - if anyone working on the site changes something on the server, you don't have to check it every time - Spider will download the changed files, updating the site existing on your hard drive.</p>

<h2>How to synchronize the site on disk with the content of the server?</h2>

<p>To use synchronization, two basic conditions must be met:</p><ul>
  <li><a href="services_general.php">a project</a> must exist</li>
  <li><a href="settings_network_ftpservers.php"> FTP Server settings must be defined </a></li>
</ul>

<p>If both conditions are met, use the "Site sync" command found in <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_services.php"> Projects </a> / <a href="main_menu_services_properties.php"> Site properties </a> (drop-down menu with the arrow on the right), or in the menu under the "Site properties" button at the top of the <a href="main_tabs_myservices.php"> Projects </a> .</p>

<div>Synchronization mapping</div>

<p>If there is a mapping for synchronization, a tool will launch allowing you to select the settings and run the synchronization. Otherwise, you will be asked to create such a mapping, after which the <a href="service_properites.php#service_properties_mappings">Project Properties</a> window will appear where you can do so.</p>

<p>Synchronization mapping allows you to associate a folder in the current site and a folder on a selected FTP server, the contents of which will then be compared.</p>

<div>Creating a synchronization queue</div>

<p>If a mapping for synchronization already exists, the site synchronization window will be launched. In this window, you usually do not need to change anything, but it is possible to exclude files and folders from synchronization, or to restrict the synchronization to selected folders. For a detailed description of the window, see <a href="service_tool_synchronization.php"> Projects - Site Synchronization </a> .</p>You can also specify the synchronization direction:<ul>
  <li><b>local --&amp;gt; remote</b> - after comparison, newer files will be sent from the local computer to the server</li>
  <li><b>remote --&amp;gt; local </b> - after comparison, newer files will be downloaded from the server to the local computer</li>
</ul>

<p>Then click on the "Create List" button. This will download a list of files on the server from the server and compare it with the files existing on the hard disk of the local computer in the appropriate (defined by mapping) folders. Depending on your connection speed and the number of files on the server, this may take several minutes. During this time, a window will be visible showing the advancement of the tool's work - you can stop it at any time using the "Stop" button.</p>

<p><b>Important</b> - when creating a synchronization queue, no files are transferred to and from the server - only a list of all files is downloaded and a list of files requiring updating is created. So you do not have to worry about data loss.</p>


<div>File Synchronization</div>

<p>Once created, the list will be displayed on the <a href="down_publishing_syncreport.php">bottom results panel</a>. Now you can finally verify the list and possibly uncheck files that are not to be synchronized after all (e.g. it often happens that unnecessary backups of images and documents remain in directories that are not supposed to be on the server).</p>

<p>Once you have verified your file list, click on the "Start Sync" command in the menu to the right of the tab.</p>

<p>During synchronization you cannot perform any operations on the server from the <a href="main_tabs_myftpservers.php">Servers</a> tab - it is locked.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="service_tool_synchronization.php">Project synchronization tool</a></li><li><a href="main_tabs_myservices.php">Projects" tab</a></li><li><a href="services_general.php"> Projects - general </a></li></ul></td>
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