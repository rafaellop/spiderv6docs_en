<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Program settings - Network settings</title>

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
<h1>Program settings - Network settings</h1>

<!-- tre&#347;&#263; pomocy -->
<p>In this category of settings you will find settings responsible for the general functioning of network connections with the Internet in Spider. You will find the following groups of settings here:</p><h2>Asking for a connection</h2>

<p>This group is about how to connect to the Internet. Here you will find three options: you can tell the program to always ask for an available connection or only if it is not detected. You can also completely disable this question, e.g. when your computer is connected to the network all the time via a permanent connection.</p><h2>Proxy settings for HTTP and FTP connections</h2>

<p>For HTTP or FTP connections, e.g. for code activation, publishing, checking for the latest version, established FTP client or synchronization, it may be necessary to configure a PROXY server that provides a network connection. Consult your network administrator to see if you need to configure the PROXY server. In this group you will find the following settings:</p><p><b>Use a proxy server for connections</b><br>
Check this switch if you want to set up a proxy server through which you connect to the Internet. Contact your network administrator to enter the relevant details.</p><p><b>How to connect to the proxy server (PROXY FTP server type) </b> <br>
Four options to determine the preferred connection authorization method for proxy servers. To enter the appropriate data, contact your network administrator.</p><p><b>Proxy server address</b><br>
In this field, enter the address of the proxy server through which you connect to the Internet.  Contact your network administrator to enter the relevant details.</p><p><b>Proxy server port</b><br>
In this field, enter the port through which you connect to the proxy server. Please contact your network administrator to enter the relevant details.</p><p><b>Proxy user</b><br>
In this field, enter the user name you use when connecting to the proxy server. Contact your network administrator to enter the appropriate details.</p><p><b>Password for the proxy server</b><br>
In this field, enter the user password you use to connect to the proxy server. Contact your network administrator to enter the appropriate details.</p><p><b><strike>Connect to FTP servers in the passive mode</strike></b>
From version 5.4.0 onwards, this switch is located in the <a href="settings_network_ftpservers_add.php">FTP and WebDAV server properties</a> window, making it possible to set the passive/active mode separately for each server.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings_network.php#settingslistnetwork">Other network settings</a></li><li><a href="network_publishing_general.php">Publishing using Spider</a></li><li><a href="service_tool_synchronization.php">Synchronization of projects</a></li><li><a href="main_tabs_myftpservers.php">Built-in FTP client</a></li></ul>
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