<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Program settings - Browsing</title>

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
<h1>Program settings - Viewing</h1>

<!-- tre&#347;&#263; pomocy -->
<p>The category named "Browsing" contains settings that allow you to define settings related to the preview functions of documents edited in the program. With the help of the settings gathered here, you can influence the internal, dynamic and external preview. The "Browsing" category is divided into the following subcategories: "Browsing behavior", "Dynamic document preview", "Built-in viewer" and "External viewers". Here is a description of these categories:</p><h2>How browsing works</h2>

<p>This group of settings includes settings related to general principles of operation of the preview function, and their meaning is as follows:</p>

<p><b>Browse using a temporary file</b><br>
Check this option to view the files edited in the program using a temporary file created when the preview is called.</p><p><b> Remove &amp;lt;BASE&amp;gt; tag when invoking preview</b><br>
Select this option if you want the program to remove the BASE tag when you invoke the preview using a temporary file be temporarily deleted.</p><p><b>Browse by saving changes</b><br>
Select this option to view the files that you are editing in the program using the original file that is saved when the preview is called.</p><p><b>Show the preview by clicking on the "Browse" tab</b><br>
Check this option to toggle and refresh the preview when clicking on the "Browsing" tab in the main program window. If you disable this option, clicking on the tab will still switch to the preview, but the preview will not refresh.</p><p><b>Warn against previewing an unsaved document</b><br>
Check this option to enable the display of a warning before previewing an unsaved document. An unsaved document does not have a fixed path on disk and therefore embedded files (e.g. graphics) may not be displayed correctly.</p><p><b>Change mappings when switching projects</b><br>
Check this option to have the program change active folder mappings to URLs when switching between projects.</p><h2>Dynamic document preview</h2>

<p>In this subgroup you will define the action of the dynamic preview refreshed while writing the document after the specified time. Settings available:</p><p><b>Use the browser component</b><br>
Select the browser you wish to use as the default for the dynamic preview that is refreshed when the document is modified.</p><p><b>Dynamic preview position</b><br>
Select how the dynamic preview should be displayed: next to or below the editor window.</p><p><b>Slider - Refresh dynamic preview every</b><br>
In this bar, set the inactivity time after which the dynamic preview will be refreshed. The inactivity time is the interval between the end of the document modification and the refresh of the dynamic preview.</p><h2>Built-in browser</h2>

<p>In this subgroup, you can choose which browser you would like to use as the default browser for displaying documents in the <a href="main_preview_embed.php">Browsing</a> tab. You can choose either MS Internet Explorer or Mozilla.</p><h2>External browsers</h2>

<p>This subgroup consists of a list and buttons for managing this list. For example, you may want to preview in external browser programs. In this list you can define which browsers you want to make available for external viewing. You can modify the list of available browsers using the buttons next to it. The default external browser is marked with a red icon and is used when the default <a href="main_preview_external.php"> external preview </a> is invoked.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings.php#settingslist">Other settings</a></li><li><a href="main_preview_general.php">Browsing documents</a></li><li><a href="main_preview_dynamic.php">Using the dynamic preview function</a></li><li><a href="main_preview_embed.php">Using the built-in preview function</a></li><li><a href="main_preview_external.php">Use of external preview</a></li></ul>
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