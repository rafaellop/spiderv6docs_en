<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>HTML Help</title>

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

<h1>HTML Help</h1>
<!-- nag&#322;owek g&#322;owny tematu -->

<!-- Tre&#347;&#263; pomocy -->



<p>CHM (HTML Help) files are currently the most popular form of help in MS Windows programs.</p>
<p>The CHM file contains plain HTML documents, as well as images, table of contents, index, and data for referring to particular documents from the program for which the above help is created.</p>
<p>Spider supports the creation of such files by providing a very convenient interface. To compile a CHM file, however, you need to install HTML Help Workshop.</p>

<p><b>Installing MS HTML Help Workshop</b><br></p><p>The MS HTML Help Workshop program should be downloaded from the <a href="https://msdn.microsoft.com/en-us/library/windows/desktop/ms669985(v=vs.85).aspx" target="_blank">Microsoft MSDN</a> site.</p>

<p>After downloading the program, install it on your system.</p>

<p>The next step is to indicate the access path to the HTML Help compiler - the <b> hhc.exe </b> program in the Spider's settings. By default it is as follows: <tt> C:\Program Files (x86)\HTML Help Workshop\hhc.exe </tt> .</p>

<p>You can display the settings window for indicating the path by using the command in the <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_view.php">Display</a> / <a href="main_menu_view_settings.php">General program settings</a> / <a href="settings_addtools.php">Customize Tidy and additional tools</a>. After opening the above window, go to the <a href="settings_addtools_htmlhelp.php">HTML Help tab</a> and point to the path.</p>


<h2>Quickly compile a folder to a CHM file</h2>

<p>The easiest way to create an HTML Help file is to compile the entire folder into a CHM file. You can do this by using the <a href="tool_htmlhelp_folder_to_chm.php"> Quick HTML Help tool from the folder</a>. You can run this tool using the command in <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_htmlhelp.php"> HTML Help </a> / <b> Compiling a Folder to HTML Help </b> .</p>

<p>After selecting the folder to compile and setting the other options<a href="tool_htmlhelp_folder_to_chm.php">(detailed description of the window is here)</a>, click on the "Compile" button. The tool will create a list of files and then compile the help file.</p>

<p>If the build completes successfully, you will see a build progress report and then ask if you want to view the compiled CHM file.</p>

<p>The compilation can take from a few to tens of seconds depending on the speed of your computer and the number and size of files included in the target help file.</p>




<h2>Using a project, which is an HTML Help project</h2>

<p>A significant convenience when creating help in CHM format is the ability to define a Project as an HTML Help Project. To do this, check the option "This project is also an HTML Help project" in the second tab of the <a href="service_properites.php">Project Properties</a> window. This way you will have all the settings of the current HTML Help project available from one place.</p>


<p><b>Preparing a project in the HTML Help editor</b><br></p><p>After selecting the above-mentioned options, you need to do a few more steps to create the main project file (* .HHP). To do this, click "Edit project" in the website settings window. This will open the <a href="tool_htmlhelp_hhp_editor.php"> HTML Help Project Editor </a> .</p>

<p>The first thing to do is to select the folder that contains the files that are to be included in the HTML Help project. It is advisable that all the files included in this project be located in this folder, or in subfolders within it. You specify the project folder using the command at the top of the window.</p>

<p>Then you can click the "Save Current HTML Help Project" command on the right. You will be hinted to enter the name of the target *.CHM file. The cursor will automatically be placed in the corresponding field of the Editor under "General Project Settings".</p>

<p>The next step is to add all files that should be included in the help to the "Project files to be embedded" list in the first tab of the editor window. This is especially important for files, which are not explicitly declared in HTML Help documents, e.g. images used in button hovering effects etc. Other files linked directly in HTML tags will be automatically included in the CHM file by the compiler.</p>

<p>If you want to see the initial document immediately after opening the CHM file, you need to select it in the "Default start page" field (in the upper left part of the second editor tab).</p>


<p><b>Create a table of contents</b><br></p><p>To make it easier for users to use Help, create a table of contents. To do this, run <a href="tool_htmlhelp_hhc_editor.php"> HTML Help Table of Contents Editor </a> . You can do this by using the command on the second tab of the HTML Help Project Editor, as well as from the <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_htmlhelp.php"> HTML Help </a> . In the first case, after saving the table of contents file, it will be automatically assigned to the project. Otherwise, you will have to enter the name of the table of contents file in the project editor manually.</p>

<p>In the table of contents, you can insert <b>Categories</b> (in the help for Spider, these are like 'folders' <i>How do I do this?</i> etc.), and in each category you can insert its elements, like further subcategories and items. You can do this using the commands to the right of the table of contents item list.</p><p>The item differs from the category in that it cannot contain subitems. However, it is possible to convert categories into items and vice versa (in the "Item Settings" tab). In the same tab you can assign to each category and item a document that will be displayed on this item in the table of contents. Remember to click on the "Update item data" button after each change in the item settings.</p><p>For a detailed description of the tool, see the <a href="tool_htmlhelp_hhc_editor.php">Table of Contents Editor HTML Help</a>topic.</p>


<p><b>Create an index</b><br></p><p>The index (index) allows you to view all of the help topics. This is a list of all topics contained in the CHM file.</p><p>Using <a href="tool_htmlhelp_hhk_editor.php"> the HTML Help Index Editor </a> you can create an index project (* .HHK file). Creating it is very similar to creating a table of contents, except that you cannot create categories - all items are placed sequentially in one list.</p>

<p>To quickly create a index, you can use the "Convert folder contents to index" command on the right side of the index list. In the submenu that appears, you can set several options to better suit your needs.</p>


<p><b> Searching in the HTML Help </b> <br>

 To add a set of searchable keywords to the help file, check the "Include Keywords From HTML" option in the <a href="tool_htmlhelp_hhp_editor.php"> HTML Help Project Editor </a> under the "General Project Settings" tab.</p>


<p><b>Compilation in the current project</b><br></p><p>When everything is ready, you can compile the project. To do this, use the "Compile Project" command in the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_htmlhelp.php">HTML Help</a> / <b>HTML Help of the current site</b>, or in the <a href="service_properites.php">Project Properties</a> window.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="tool_htmlhelp_hhp_editor.php">HTML Help Project Editor</a></li><li><a href="tool_htmlhelp_hhc_editor.php">Table of contents editor HTML Help</a></li><li><a href="tool_htmlhelp_hhk_editor.php">Index Editor HTML Help</a></li><li><a href="tool_htmlhelp_folder_to_chm.php">Quick HTML Help from a folder</a></li><li><a href="main_menu_htmlhelp.php">HTML Help menu</a></li></ul></td>
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