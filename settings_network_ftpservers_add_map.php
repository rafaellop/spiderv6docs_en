<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>FTP server mapping settings</title>

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
<h1>FTP server mapping settings</h1>


<!-- tre&#347;&#263; pomocy -->
<p>This window allows you to set the so-called mapping, i.e. assigning a folder on an FTP server to a URL where this folder is visible on the Internet as a website. The mapping functions are useful, for example, when you want to edit documents directly from the FTP server and be able to properly preview them. You can view them by adding a new mapping to the settings of the selected FTP server in the <a href="settings_network_ftpservers_add.php" title="Właściwości serwera FTP"> FTP server properties"&gt; FTP server properties </a> window.</p><p>At the same time, this window is also used to set the mapping-binding of the FTP server to the selected local project, which in turn is useful for automatic synchronization tools and for inserting files into documents opened from the server and setting relative paths to them, and for associating files on disk with the corresponding URLs when you have run an HTTP server on your computer (e.g. to execute PHP scripts, etc.). In this situation, the window will be opened using the buttons on the tab <a href="service_properites.php#service_properties_mappings" title="Project Properties - Mappings">Mapping in the Project Properties window</a></p><p>Due to the variety of applications, the fields and their descriptions are slightly different.</p>



<h2>Mapping for preview</h2>

<p>The items presented below will appear in the window when you create or edit the mapping for previewing documents opened from the local disk (the window is opened from the tab <a href="service_properites.php#service_properties_mappings" title="Własności projektu - Mapowania"> Mappings in Project Properties </a> ):</p><p><b>Mapping name</b><br>
Enter here the name of the mapping under which it will appear in the list of mappings on the <a href="service_properites.php#service_properties_mappings" title="Własności projektu - Mapowania">Mappings</a> tab of the <a href="service_properites.php#service_properties_mappings" title="Własności projektu - Mapowania">Project Properties window</a>, as well as in the list of available mappings on the <a href="main_preview_embed.php">Overview</a> tab.</p><p><b>Mapped folder</b><br>
Here, enter the name of the folder (e.g. <tt>/public_html</tt>) to be mapped to the address below. You can use the button next to it to bring up a window allowing you to select a folder from the drive.</p><p><b>To an URL</b><br>
Enter here the URL (e.g. https://127. <tt>0.0.1/pajaczek/)</tt> to which the folder selected above will be mapped. This address will be used when viewing documents in Spider, and will also be passed to browsers when <a href="main_preview_external.php">an external preview</a> is called up.</p><h2>Mapping on synchronization</h2>

<p>The items presented below will appear in the window when you create or edit mapping during synchronization (the window is opened from the <a href="service_properites.php#service_properties_mappings" title="Własności projektu - Mapowania"> Properties-Mappings"&gt; Mappings tab in the Project Properties window </a> ):</p><p><b>Server name</b><br>
Select the name of the server to be synchronized with from the list. Click the button next to the list to create a new server.</p><p><b>Local folder</b><br>
Here, enter the name of the folder on your computer's disk (e.g. <tt>\public_html</tt>) whose contents are to be compared with the contents of the folder indicated below on the server. You can use the button next to it to bring up a window allowing you to select a folder from the disk.</p><p><b>Remote folder</b><br>
Enter here the URL (e.g. <tt>/public_html</tt>), the contents of which are to be compared with the contents of the folder indicated above on your computer's disk.</p><p>The above settings affect the behavior of the program when editing files online - see below.</p>



<h2>Mapping a folder on an FTP server to a URL</h2>

<p>The items listed below will appear in the window when you create or edit mapping of the FTP server to the URL (for the server selected from the list in the window <a href="settings_network_ftpservers_add.php" title="Właściwości serwera FTP"> FTP server properties"&gt; FTP server properties </a> ):</p><p><b>Mapped folder</b><br>
Enter here the name of the folder (e.g. <tt>/public_html</tt>) to be mapped to the address below.</p><p><b>To the URL</b><br>
Enter here the URL (full address with domain and protocol) to which the folder selected above will be mapped. This address will be used when viewing documents opened for editing directly from the server.</p><p>The address entered here will also be used if you drag a document from <a href="main_tabs_myservices.php"> Projects </a> to a document opened online. In this situation, on the basis of this mapping and mapping during synchronization, the Spider will calculate the correct path to the dragged file and create a correct link in the document as if the dragged file was in the corresponding folder on the server (but it will not check whether it is there) .</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="settings_network_ftpservers.php">FTP and WebDAV server settings</a></li><li><a href="settings_network_ftpservers_add.php">Adding a server</a></li><li><a href="services_general.php">Projects and using Projects</a></li><li><a href="network_publishing_general.php">Publishing using Spider</a></li><li><a href="service_tool_synchronization.php">Synchronization of projects</a></li><li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="service_properites.php#service_properties_mappings" title="Własności projektu - Mapowania">Project properties - Mappings</a></ul>
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