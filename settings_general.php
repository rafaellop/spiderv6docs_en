<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Program settings - General settings</title>

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
<h1>Program settings - General settings</h1>

<!-- tre&#347;&#263; pomocy -->
<p>The general settings allow you to customize the program in general, ie most of the settings that do not find their own category are in the "General" category. The "General" category is divided into two subcategories: "General settings" and "Project map"</p><h2>General settings</h2>

<p>This group of settings includes settings with the following meaning:</p>

<p><b>Ask before leaving the program</b><br>
Select this option to hint you to confirm when you turn off the program.</p><p><b>Ask to close documents before exiting the program</b><br>
Check this option to ask for confirmation when exiting the program when more than one document is open.</p><p><b>Allow only one instance</b> <br>
Select this option to block the Spider from running in several instances on the same computer.</p><p><b>Document title instead of file name in the title bar</b><br>
Check this option to enable the display of the title of the edited document, taken from the <tt>TITLE</tt> tag in the title bar of the Spider main window.</p><p><b>Display full path in the title bar</b><br>
Check this option to enable the display of the full path to the document in the window title bar instead of the file name itself.</p><p><b>Switch between documents in order of use</b><br>
Check this option to enable a different mode of switching between documents using <tt>Ctrl+Tab</tt> and <tt>Shift+Ctrl+Tab</tt>, which is to display them in the order they were last used. If this option is left unchecked, documents will be switched in the order in which they were opened (the order in the file name bar). Read more about this in the <a href="main_editor_general.php#przelaczanie">Editor</a> help topic.</p><p><b>Hand icon over buttons and underlined items in lists</b><br>
Check this option to enable the display of a "hand" mouse cursor over clickable items and to highlight items in lists.</p><p><b>Mozilla-style sliding bar and window splitting</b><br>
Check this option to ensure that sliding bars (splitters) that divide the window into several parts have a minimise button that allows the adjacent panel to be minimised to the smallest size allowed, and to return from that position to the previous one (a'la Mozilla style).</p><p><b>Disable horizontal tab animation</b><br>
Check this option to disable animated tabs such as the panel tabs on the left in the main program window.</p><p><b>Show tab switch button instead of clickable bars</b><br>
Check this option to show a button on the title bars of bookmarks (such as Projects), which, if clicked, will switch to the next bookmark. Otherwise, the entire tab title bar will be active.</p><p><b>Display project description when switching between projects</b><br>
Check this option to have the program display the project description entered in its properties when the active project is changed.</p><p><b>Thumbnail size in thumbnail viewer</b><br>
Enter the width of the thumbnails of the images that appear in the file list with thumbnail view enabled.</p><p><b>Number of items remembered by the multi-clipboard</b><br>
In this field, enter the number of elements you want the <a href="tool_multiclipboard.php">multi-clopboard</a> to remember.</p><p><b>Automatically hide quick preview</b><br>
Select this option if you want the quick preview, available from the file list, to be automatically hidden when you leave its window.</p><p><b>The "Go to link" function acts as a preview</b><br>
Check this option to cause the 'Go to link' function, which by default allows files under the cursor to be opened as URL type attribute values, to work differently. If you enable this option, the function will preview the link instead of opening it for editing.</p><p><b>Use the graphic viewer when selecting graphics</b><br>
Check this option to use a graphic viewer that allows you to preview images before selecting them. The image viewer is used in the tools that allow you to select image files. If you disable this option, you will use the standard file selection window.</p><p><b>Insert absolute links to local files as file://</b><br>
Check this option to enable the insertion of links to absolute local file paths in the form "<tt>file://C:file.txt</tt>" instead of the standard "<tt>C:". This ensures that these paths are correctly interpreted by the Mozilla and Opera browsers.</tt></p><p><b>Pipette shortcut for selecting colors</b><br>
Enter a keyboard shortcut to deactivate the color retrieval mode in the color palette pane.</p><p><b>Pipette shortcut additionally with Windows key </b> <br>
Select this switch if the shortcut for the pipette, entered in the field next to it, is to work only with the additionally pressed Windows special key (WinKey).

 <a name="service_map"> </a></p><h2>Project map</h2>



<p>In this subgroup there are settings related to the tool that allows you to browse the map of a web project. Here is the description of the settings:</p><p><b>Display of specific files on the project map</b><br>
Four options that you should select depending on what you prefer when displaying the project map.</p><p><b>Document headings in the map as</b><br>
From this list, select your preferred method of displaying file descriptions presented on the map.</p><p><b>Maximum scanning depth</b><br>
In this field, you specify up to how many levels of depth the links are scanned for files displayed on the project map.</p><p><b>Color arrows</b><br>
Select this option if you want the arrows displayed on the project map to have different colors depending on their meaning.</p><p><b>Project start-up folder</b><br>
In this field, enter or use the button next to it to select the folder that will be set as the default in the folder selection window where new projects are created, as well as those restored from backups. If left blank, the default location - the "My Documents" folder - will be used.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings.php#settingslist">Other settings</a></li><li><a href="main_window_desc.php">Appearance of the program and how to use it</a></li><li><a href="main_tabs_myservices.php">File list and thumbnail view</a></li><li><a href="tool_quickpreview.php">Quick preview</a></li><li><a href="tool_colorpalette.php">Color Palette</a></li><li><a href="tool_graphic_insert.php">Inserting images</a></li><li><a href="services_general.php">Projects - usage</a></li></ul>
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
