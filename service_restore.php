<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Restore a project</title>

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
<h1>Restore a project</h1>



<p>You can run the tool from the <a href="main_menu_services.php"> Projects menu </a> . You can use it to restore the * .zip archive created by the <a href="service_archive.php"> Project Archiving </a> tool from the project.</p><p></p>Note: A valid ZIP archive created by Spider contains the zipped project files, as well as an additional projinfo.ini file, which contains the project settings. If the archive does not contain this file, the tool will report an error and the project will not be restored. In this case, unpack it with another program that supports the ZIP format (eg WinZIP, or Compressed folders in Windows XP) to the appropriate directory on the disk, and then create the project in the normal way.<p><b>Archive file with project</b><br>
Point to the file containing the project files.</p><p><b>Information about the archive</b><br></p><p>If the above-mentioned file is a valid project archive created by Spider, data on the date of its creation, name of the archived project, as well as a comment entered during archiving will be displayed in the fields of this group.</p>

<p><b>Restore options</b><br>
This group of items contains two fields in which you can enter a new name for the project (the name retained at the time of archiving is given by default) and the path to the folder into which the project files are to be extracted.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="service_archive.php">Project Archiving</a></li><li><a href="services_general.php">About projects in general</a></li><li><a href="service_tool_synchronization.php">Synchronization of projects</a></li><li><a href="main_tabs_myservices.php">Projects tab</a></li></ul>
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
