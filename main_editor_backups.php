<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Backups when saving (BAK)</title>

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
<h1>Backups when saving (BAK)</h1>

<p>When saving a document opened in the editor (from a local disk and from an FTP server), a backup copy of the document is automatically created. This copy is created from the previous version of the file saved on the disk. Thanks to this feature, you have the possibility to restore the file to its last version, if the document was unintentionally damaged or changed.</p>

<p>Backups can be created:</p><ul>
  <li>on the local disk when saving a document opened in the editor</li>
  <li>on the FTP server when saving a document <a href="network_opendoc_ftp.php">opened directly from the FTP server</a></li>
  <li>when making changes to files while the <a href="find_ext.php">Extended Search and Replace</a>tool is running</li>
  <li>when <a href="charset_encoding.php">converting character encodings</a> in multiple documents.</li>
</ul>


<p>Backing up while <a href="find_ext.php#backups">Extended Search and Replace</a> is running is independent of the option selected in Program Settings, you can turn it on and off in the tool window.</p>


<h2>Backup file name</h2>The name of the backup file to be created on the local disk is generated with the prefix <tt> bak. </tt> and the name of the original document. For example:<ul>
  <li>Document Name: <tt><b>index.html</b></tt></li>
  <li>Backup file name <tt><b>bak.index.html</b></tt></li>
</ul>

<p class="czerwony"><b>Attention!</b><br>
The way backup files are named on the local disk has changed in version 5.6.2 and has been aligned with the backup name on the server. For example, for a file named <tt>index.html</tt>:</p><ul>
  <li><tt>index.html<b>.bak</b></tt> - in version 5.6.1 (and earlier)</li>
  <li><tt><b>bak.</b></tt> index.html - from version 5.6.2 </li>
</ul>


<h2>Restore a document from backup</h2>

<p><b>Restore from backup file</b><br>
This command is located in the bar to the right of the <a href="main_tabs_myservices.php">Projects</a> tab file list. Click it to restore the last saved contents of a file from a backup. This command is only available for files that are backed up - otherwise it will be invisible. Restoring from backup in this case swaps the contents of the original file and the backup file, so you can use it again and restore to the previous state.</p><p>Another 'manual' way to restore content from a backup is to rename the backup file to the original file name. Simply rename the file by removing the <tt>.bak</tt> extension (on a local drive), or remove the <tt>bak.</tt> (on an FTP server). Backup files are hidden in the file list by default. You can change this in <a href="settings_filelist.php">Program settings / File list</a> (for the list of files <a href="main_tabs_myservices.php">Projects</a> tab) and in <a href="settings_network_ftpclient.php">Program settings / Built-in FTP and WebDAV client</a> (for the list of files <a href="main_tabs_myftpservers.php">Servers</a> tab).</p>


<h2>What can be done to prevent BAK backup files from being created?</h2>

<p>You can disable the creation of backups when saving an edited document (it is enabled by default) in the <a href="settings_editor_documents.php#backups">Program Settings / Documents</a> window.</p>



<h2>Quick backup deletion</h2>

<p>Over time, you may no longer need the backup files for a particular site (e.g., after work is completed). To delete them all quickly, use the command in the menu <a href="main_menu_services_properties.php">Projects / Site Properties / Site Purge</a>.</p>


<!-- tre&#347;&#263; pomocy -->


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="main_editor_general.php">Editor - general</a></li></ul>
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
