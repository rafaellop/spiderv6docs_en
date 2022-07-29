<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Opening a page from the Web</title>

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
<h1>Tools - Opening a page from the Web</h1>

<!-- nag&#322;owek podtematu -->

<p>The window is used to open remote documents on an HTTP server (www server) or FTP. You can open it from the <a href="main_menu_file.php"> File </a> / Open from Web menu, or by using the standard <tt> Ctrl + D </tt> hotkey. The command icon is shown on the right.</p>

<p>The window is divided into two tabs:</p>

<ul>
	<li>Opening a page from the Web</li>
	<li>Opening a page from an FTP server</li>
</ul>



<h2>Opening a page from the Web</h2>

<p>This tab allows you to open a page from a web server. It contains the following fields:</p>

<p><b>URL</b><br>
Enter the URL to the document you want to open.</p>

<p><b>Use download authorization </b> <br>
Check this switch if you need to use <i> basic authorization </i> to gain access to the page.</p>

<ul>
	<li><p><b> Username, Password </b> <br> Enter username and password for simple authentication.</p></li>
	<li><p><b>Remember password</b><br>Check if you want the program to remember the password for this username.</p></li>
</ul>



<h2>Opening a page from an FTP server</h2>


<p>This tab allows you to open a page from an FTP server. It contains the following fields:</p>

<p><b>Server address</b><br>
Enter the address of the FTP server and which you want to open the page.</p>

<p><b>Port</b><br>
Enter the port number on which the FTP server is running. By default it is port number 21.</p>

<p><b> Username, password </b> <br>
 Enter your username and password.</p>

<p><b>List of FTP servers</b><br>
Click to select from the list the name of the <a href="settings_network_ftpservers_add.php">FTP server</a> from which you want to copy and assign settings in this window.</p>

<p><b>Remember the password</b><br>
Check if you want the program to remember the password for this username.</p>

<p><b> File path </b><br>
Enter the path to the file on the server.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_menu_file.php">File menu</a></li><li><a href="network_opendoc_ftp.php">Opening and editing documents directly on the server - in general</a></li></ul>
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
