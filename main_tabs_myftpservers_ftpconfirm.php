<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>What operation is to be performed?</title>

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
<h1>What operation is to be performed?</h1>

<p>When uploading files to the server and downloading from the server, it often happens that the file already exists at the destination. In this case, this window will be displayed. It will contain information about the file and possible operations. 

 The window has been divided into two parts:</p><ul>
	<li>File information frame</li>
	<li>Buttons for possible actions</li>
</ul>



<h2>File information frame</h2>

<p>There are two groups of information in the box:</p>

<ul>
	<li><b>Local file</b> - information about a file on your computer's disk</li>
	<li><b>Remote file</b> - information about the file on the FTP server</li>
</ul>

<p>Each of these groups contains the following information (for the local and remote file respectively):</p>

<ul class=",">
	<li><b>Name</b> - disk path and file name</li>
	<li><b>Date</b> - date the file was last saved</li>
   <li><b>Size</b> - file size in KB</li>
</ul>


<h2>Buttons for possible actions</h2>Choose what operation is to be performed:<p><b>Resume</b><br>
Click to resume an interrupted file download from the FTP server. For this operation to work, the FTP server must support file resuming.</p><p><b>Overwrite</b><br>
Click to overwrite (replace) the existing current file with the file.</p><p><b>Overwrite all</b><br>
Click to overwrite (replace) existing files with the corresponding files.</p><p><b>Skip</b><br>
Click to skip uploading the current file (do not overwrite the existing one).</p><p><b>Skip all</b><br>
Click to skip transfer of all files for which there are corresponding destination files (do not overwrite any). In this case, only files that have no counterparts at the destination will be transferred.</p><p><b>Cancel</b><br>
click to stop publishing files from the FTP queue.</p><p><b>Help</b><br>
Click to display this Help window.</p><p><b>Perform this action on operations on this server</b><br>
check that the action selected above is always executed for the current server (valid until the end of the program's operation)</p>

</td>
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