<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Main menu - View</title>

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
<h1>Main menu - View</h1>

<!-- Tre&#347;&#263; pomocy -->

<p>With this menu, you can display various program elements, such as individual panels, settings windows, etc.</p>

<p><b>Browsing</b><br>
Click to enable the Browse tab to view the current document. If you have set external browsers in <a href="settings_browse.php">Program Settings / Browsing</a>, you can choose a browser to display the page in its window. The standard <tt>F11</tt> shortcut.</p><p><b>Additional Tools</b> <br>
Select the program you want to run from the submenu. You can modify the list of programs in the <a href="settings_addtools_tools.php">Program Settings - Additional Tools</a> window. If you have not included any programs in this list, the button in the menu remains inactive.</p><hr>

<p><b>View editor</b><br>
Click to display the <a href="main_editor_general.php">editor window</a> (standard shortcut <tt>Ctrl+F10</tt>).</p><p><b>Dynamic preview</b><br>
Click to show or hide the <a href="main_preview_dynamic.php" window>dynamic preview</a>.</p><p><b>Browsing mappings</b><br>
Click to select a hard drive path mapping to a URL. This mapping is necessary to view the results of server-side scripts, such as .PHP. You can set mappings for each site separately in the <a href="service_properites.php#service_properties_mappings">Project Properties window</a>.</p><hr>

<p><b>General program settings</b> <br>
Click to change the current program settings by opening the <a href="settings.php"> program settings window </a> . The submenu available by clicking the arrow expands the <a href="main_menu_view_settings.php">settings command menu</a>.</p><p><b>View</b> <br>
Click to show or hide toolbars or panels. The command displays <a href="main_menu_view_view.php">submenu</a> allowing you to change the appearance of the main window.</p><hr>


<p><b>First document</b><br>
Click to go to the first document currently open in the editor.</p><p><b>Previous document</b><br>
Click to go to the previous document currently open in the editor.</p><p><b>Next document</b><br>
Click to go to the next document currently open in the editor.</p><p><b>Last document</b><br>
Click to go to the last document currently open in the editor.</p><hr>


<p><b>Document information</b><br>
Click to open the current document information window. Using the submenu, you can open the selected tab of this window immediately:</p><ul>
        <li><a href="tool_docinfo.php">Document Information</a></li>
        <li><a href="tool_docinfo.php#bookmark">Bookmark navigator</a></li>
        <li><a href="tool_docinfo.php#todotasks">Tasks to do</a></li>
</ul>or create a new to-do.<p><b>Bookmarks in a document</b><br>
Click to open the bookmark management and document navigation submenu. This menu is identical to the <a href="main_menu_edit_bookmarks.php"> Edit / Document Bookmarks </a> menu.</p><hr>


<p><a href="tool_zoomek.php">Magnifying glass</a><br>
Click to activate the magnifying glass. The tool shows a magnified image of the screen in the vicinity of the mouse cursor.</p><p><a href="tool_recorder.php">Activity Recorder</a><br>
Click to start the Activity Recorder. The tool allows you to play back the recorded operations later.</p><p><b><a href="tool_multiclipboard.php">Multiclipboard</a></b><br>
Click to display the multiclipboard window (default shortcut <tt>Ctrl+Shift+W</tt>). The command has a submenu displaying the items stored in the Multibinch - to insert the relevant fragment into the editor, click on the selected item. You will find an identical command in the <a href="main_menu_editor.php">Editor pop-up menu</a>.</p><p><b><a href="tool_unicodeeditorek.php">Unicode editor</a></b><br>
Click to launch the mini editor window, which is used to paste and handle Unicode-encoded texts.</p><p><b><a href="tool_colorpalette.php">Color Palette</a></b><br>
Click to launch the color palette (default shortcut <tt> Shift + Ctrl + C </tt> ). The tool allows you to select a color from the palette, as well as take a color sample from anywhere on the screen with the help of a pipette.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="settings_toolbars.php">Program Settings - Toolbars, menu, and shortcut settings</a></li></ul></td>
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