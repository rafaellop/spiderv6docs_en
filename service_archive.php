<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Project archiving</title>

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
<h1>Project archiving</h1>



<p>The tool makes it easy to archive a project with its settings. The entire project is packed and compressed into ZIP format. The project settings are saved in an additional projinfo.ini file, which is also included in the ZIP file. You can restore an archived project using the <a href="service_restore.php"> Project Restore </a> tool</p>

<p>Archiving can be started from the <a href="main_menu_services_properties.php"> projects / Project properties </a> menu or from the identical menu under the Project properties button on the projects tab. The utility window contains five groups of options with which you can specify the range of files included in the archive, the name of the target file, compression, etc.</p>

<p><b>Target file</b><br>
Point to the path and enter the name of the target file (*.zip). The default name for the ZIP archive is created based on the following template "projectname_(yyyy-mm-dd_hh-mm-ss).zip".</p><p><b>Archived files</b><br>
Using two switches, you can exclude from archiving:</p><ul>
	<li>backup files * .bak</li>
	<li>additional document information files *.add</li>
</ul>

<p><b>Description of the archive</b><br>
In this field you can enter a short description that will give you an idea of what the project contains when you want to restore it using the <a href="service_restore.php">Restore Project</a> tool.</p><p><b>Password protection</b><br>
If you wish, you can protect the archive with a password to prevent unauthorised people from viewing it. To do this, enter your password and repeat it in the next field.</p><p><b>Archiving method</b><br>
Use the options in this group to specify the type of compression of the archive file. You can set either no compression or a compression ratio:</p><ul>
	<li>best compression</li>
	<li>normal compression</li>
	<li>fast compression</li>
	<li>fastest compression</li>
</ul>The better the compression, the longer it takes to compress, but the resulting file is smaller.</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="service_restore.php">Restoring a project</a></li><li><a href="services_general.php">About projects in general</a></li><li><a href="service_tool_synchronization.php">Synchronization of projects</a></li><li><a href="main_tabs_myservices.php">Projects tab</a></li></ul>
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