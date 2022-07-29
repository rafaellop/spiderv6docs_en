<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>FTP server properties</title>

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
<h1>FTP and WebDAV server properties</h1>

<!-- tre&#347;&#263; pomocy -->
<p>This window is used both for specifying the parameters of a new server being added and for modifying the settings of an existing FTP and WebDAV server. You can view them by adding or modifying the selected server settings in the <a href="settings_network_ftpservers.php"> FTP and WebDAV Server Settings </a> window.</p><p>Two tabs are available in the window: "Server properties" and "Mapping settings"-the second of which, however, is disabled when editing WebDAV server settings. This is due to the fact that the address of the WebDAV server is exactly the same address to be used for viewing documents via the browser (the WebDAV protocol is merely an extension of the HTTP protocol used for browsing the web).

<br><br></p><h2>Server properties</h2>

<p>On the Server Properties tab, you define the parameters of the FTP server to which you want to have access in the Spider. FTP servers are usually servers to which you upload your web project files to make them available on the network.</p><p><b> You will get the data needed to configure the server on this tab from the Internet project provider whose projects you use. They are also provided when creating an account on the website. </b></p><p>To configure the FTP server for use in Spider, on the <a href="main_tabs_myftpservers.php"> Servers </a> tab, in the synchronization or publishing functions, you must provide the following data in the appropriate fields:</p><p><b>Friendly name</b><br>
Enter a name in this field to identify the FTP server in the server list. This value is for information only and can be anything you like.</p><p><b>Server address</b><br>
Enter the address of the FTP server you are adding to the list here. Use the address you received from your account administrator.</p><p><b>User name</b><br>
Enter the username here, in other words the name of the account you have rights to and wish to connect to on this server.</p><p><b>Access password</b><br>
This is the place for your account password. Enter it very carefully as it is hidden when you type it in.</p><p><b>Parent folder</b><br>
This field does not need to be filled in, but you can specify here the path to the folder on the remote server that you want to display as the parent element of the folder tree. This is a useful setting especially if you have multiple nested folders. To make it even easier to indicate the parent folder, you can use the commands next to the folder tree of the <a href="main_tabs_myftpservers.php#tree">"Servers" tab</a>.</p><p><b>Start-up folder</b><br>
This field does not need to be filled in, but you can enter here the path to the folder on the remote server to which you want Spider to switch immediately after connecting.</p><p><b>Server group</b><br>
Here you can enter the name of the group to which the server should belong. Server groups are displayed at the top of the list in the "Servers" tab. This makes it easier to find the right server in the list, which is particularly important when working on many different projects.</p><p><b>Server port number</b><br>
This is the place to specify the port on which the FTP server is running. Most often, port number 21 is specified, however, this value depends on the server configuration. If you enter an invalid port, the connection cannot be made.</p><p><b>Security</b><br>
If you wish to use a secure connection for this server, please select the type from the list opposite. Read more about this below.</p><p><b>Delete offline cache content for this server</b><br>
Spider allows you to work on, or at least view, the contents of an FTP server using what is known as an <i>offline cache</i>, i.e. a special file which remembers the contents of the FTP server and allows it to be viewed on the <a href="main_tabs_myftpservers.php">Servers</a> tab even without an active internet connection. With this button, you can delete the contents of this cache if you so wish. <a href="main_tabs_myftpservers_on-offline.php">Online and offline</a> operation is described in a separate chapter.</p><p><b>LIST command</b><br>
Some, incorrectly configured, servers do not send a listing of the contents of the remote directory after the RFC-compliant LIST command. For example, they may not send information about hidden files, i.e. those starting with a dot (e.g. .htaccess). With this option, you can select the command that will be sent to the server to bypass the configuration problem. If you do not see .htaccess files on your server, select listing with the LIST -aL command or consult your server administrator.</p><p><b>Use BIN for LIST</b><br>
Tick if your server requires binary mode to retrieve directory contents.</p><p><b>Server case-sensitive</b><br>
Check this switch if you want files to be case-sensitive when uploading to and downloading from the server (e.g. via <a href="service_tool_synchronization.php">automatic project synchronisation</a> tools). This is particularly important when using Linux servers.</p><p><b>Change filenames to lower case</b><br>
Check this switch if you want the program to automatically rename files to lowercase when uploading them to the server.</p><p><b>Connect to FTP server in passive mode</b><br>
At the very bottom of the settings, there is a switch which is responsible for the way you connect using FTP. Check this switch if you want the program to always connect to FTP servers in passive mode. If you do not know whether to set it, consult your network administrator.</p><p><b>Time difference compensation at synchronisation</b><br>
Enter the number of additional minutes of time difference when comparing times between the local computer and the server when creating a list of files to be synchronised. This will allow you to equalise the file save time in situations where this difference is incorrectly calculated automatically.


<a name="secureconnections"></a></p><h2>Support for a secure connection</h2>

<p>In order to protect the data that you send between the server and the local computer, the Spider has been equipped with functions supporting safe, encrypted connections. They are available for both FTP (SSL / TLS) and WebDAV (HTTPS) servers.</p>

<p><b> Note! The United States and other countries impose export restrictions on SSL technology for data encryption. Since we have no control over where our software is downloaded from, we do not want to distribute the SSL code in the form of DLLs with our software. <br><br>
We enable the use of SSL technology, but we do not license it. If you choose to use SSL please make sure that you are allowed to use SSL in the country where you are located. <br></b></p>

<p>The authors of DLL libraries that Spider uses to offer SSL support are: <br>
 libeay32.dll - Eric Young (eay@cryptsoft.com) <br>
 ssleay32.dll - Tim J. Hudson (tjh@cryptsoft.com) <br></p>

<p><b>Secure connection for FTP servers</b><br></p><p>In order for the data to be transferred in a secure form, the appropriate item must be selected from the "Security" list above. There are three options for FTP servers:</p>

<ul>
	<li><b>do not use a secure connection</b> - data will be transmitted in its normal, unencrypted form.</li>
	<li><b>connect and switch to secure connection</b> - the connection to the server will take place normally, then switch to secure mode, where information such as user name and password etc. will only be transmitted.</li>
	<li><b>force the use of a secure connection</b> - the connection to the server will be secure from the start. This option should only be selected if the server control connection forces a secure connection to be established even before the FTP session starts (this usually involves using port 990).</li>
</ul>

<p><b>Encrypt transmitted data as well</b><br>
Check this switch if the data you are transferring between the server and your local computer is confidential. Otherwise, it is recommended that you disable this option, as encrypting all data unnecessarily consumes the system resources of both your computer and the server. Of course, in any case, data such as username or password will be encrypted (this is due to the design of the FTP protocol)</p><p><b>Secure connection for WebDAV servers</b><br></p><p>In the case of the WebDAV server, there are only two options - enable or disable the safe mode.</p>

<p><b>Encrypt transmitted data as well</b><br>
This switch is disabled for the WebDAV server - data will always be encrypted and this cannot be switched off.

<a name="mapping"></a></p><h2>Mapping settings</h2>




<p>This tab is intended for more advanced users. It allows you to determine the so-called mapping, i.e. assigning a folder on the FTP server to the address <tt> http </tt> , where this folder is visible on the Internet as a website. The mapping functions are useful, for example, when you want to edit documents directly from the FTP server and be able to properly preview them.</p><p>On this tab you will find a list and a set of buttons that allow you to manage the list of mappings. The list allows you to define mappings of a folder on a remote server to an HTTP address that will be used, for example, when previewing documents opened for editing directly from the FTP server. To add a mapping, click the button marked with a plus sign. The <a href="settings_network_ftpservers_add_map.php"> Mapping Settings </a> window will open, where you can specify the mapping parameters.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings_network_ftpservers.php">Server settings </a></li><li><a href="settings_network_ftpservers_add_map.php">Mapping settings</a></li><li><a href="main_tabs_myftpservers_on-offline.php">Working with the server offline and online</a></li><li><a href="network_publishing_general.php">Publishing using Spider</a></li><li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="service_tool_synchronization.php">Synchronization of projects</a></li></ul>
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