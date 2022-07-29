<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Project map</title>

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
<h1>Project map</h1>



<p>The project map graphically shows the relationship between files in the project. It also allows you to quickly go to the selected document.</p><p>You can start the project map from <a href="main_menu_main.php">Home line</a> / <a href="main_menu_services.php">projects</a> / <a href="main_menu_services_properties.php">Project Properties</a> / Project Map, as well as from <a href="main_tabs_myservices.php">Project Overlays</a> using the command in the drop-down menu under the Project Properties button.</p><p>In the <a href="settings_general.php#service_map"> Program Settings - General </a> window, in the Project Map section, you can change the options for the generated map, including the types of files shown on the map, the scan depth for links, etc.</p>

<p>Project map window has been divided into two parts:</p>

<ul>
	<li><b>Menu </b> at the top</li>
	<li><b>Content window</b> - creates the rest of the window</li>
</ul>



<h2>Menu</h2>

<p>The menu allows you to navigate through the documents in the map, as well as for other operations.</p>

<p>The first two commands are for going forward and backward if you've changed the main document of the map (where the map starts from). If you haven't changed your main document, these commands will be inactive. By default, the main document is always located in the upper left corner of the map.</p>

<p><b>Go to previous</b> - click to return to the document that was previously the main document on the map.</p>
<p><b>Go to next</b> - click to go again to the next document you have indicated as the main document on the map.</p><br><p>Refreshing the preview - click to regenerate the map</p><br><p>Print map - click to print the map of the project.</p>

<p><b>Save project map to disk</b> - click to save the project map as an HTML document.</p>


<h2>Map content window</h2>

<p>This window contains a map in the form of file icons connected by arrows. In the <a href="settings_general.php#service_map"> Program Settings - General </a> window, in the Project Map section, you can choose the scanning depth (i.e. in how many consecutive documents from the main document you want to search for links), enable or disable the coloring of arrows (enabled by default), as well as select the types of files to be placed on the map.</p>If you click on a file with the right mouse button, a menu with two items will appear:<p><b>Open document</b><br>
Click to open the indicated document in Spider.</p>

<p><b>Start browsing from the file</b><br>
Click to start browsing from the indicated document (select as the main document on the map). Only those documents will be shown on the map whose links are contained in the indicated document. A left-click on the file icon has the same effect.</p>

<p>The program tries to arrange the files on the map as clearly as possible. However, you can move the document icon to another place using the drag and drop technique (click on the icon with the left button and drag it to any place).</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="services_general.php">Projects in general</a></li><li><a href="main_tabs_myservices.php">Projects tab</a></li><li><a href="settings_general.php#service_map">Program Settings - General - Project Map</a></li></ul>
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
