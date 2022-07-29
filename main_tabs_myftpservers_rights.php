<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Change access rights to an item</title>

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
<h1>Change access rights to an item</h1>

<p>This tool is used to change the access permissions of files or directories on a remote server. This window is displayed when you select <a href="main_tabs_myftpservers.php#myftpserversrights"> Change Access Rights </a> in the <a href="main_tabs_myftpservers.php"> Servers </a> tab.</p><p>In this pane you can quickly change the access rights to any file or directory. Just select the appropriate options and you're ready to go. you can set different permissions for the owner of the file on the server, its group, and for everyone. If you want to set the same read, write or execute permissions for all these groups, use the buttons below.</p><p>The appropriate numeric code will appear below the buttons.</p>Alternatively, it is possible to enter a numerical code. To do this, check the <b> Enter code manually </b> option and enter the digital code in the adjacent field.<p>Access rights are useful for restricting access to files to certain user groups. Usually, for HTML documents on the server, read rights should be set for all users, e.g. <tt>rw-r--r--</tt>, and for folders storing web pages, e.g. <tt>rwxr-xr-x</tt>. It should be remembered that for CGI programs that need to be run on the server, most often an attribute should be set to allow the file to be run.</p>


<p>Access rights on Unix-type servers specify access to particular files for the owners of those files, for members of the same user group as the owner, and for all other users. An example attribute might look like the following:<br><br><tt>rw-r--r--</tt>, or digit <tt>644</tt>.</p><p>This notation can be divided into three groups of three characters in one group. The first three characters are for the access rights of the owner of the file. The fourth, fifth, and sixth characters (from the left) specify access rights for members of the same user group as the file owner. The last three characters define the rights for all other users. These are the fields that define public access.</p><p>As mentioned, each group consists of three characters, each referring to a separate access right. Thus, the first field means the ability to read (<b>r</b>ead), the second to write (<b>w</b>rite), and the third to start (e<b>x</b>ecute). In the event that the rights apply to the directory, the last right (run) concerns the possibility of entering the folder.</p><p>For example, <tt>rwxr-xr-x</tt> (digit <tt>755</tt> - this is one of the more popular access levels) specifies an element with read and write rights for the owner and read rights for the group and others. <tt>rw-r--r--</tt> (digit <tt>644</tt>) is another very popular access level - it specifies an item with read and write (delete) rights for the owner and read rights for the group and others.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="network_publishing_general.php">Publishing using Spider</a></li><li><a href="settings_network_ftpclient.php">FTP client settings</a></li></ul>
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