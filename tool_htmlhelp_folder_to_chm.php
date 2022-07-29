<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>HTML Help - Quick HTML Help from a folder</title>

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
<h1>HTML Help - Quick HTML Help from a folder</h1>



<p>In addition to building complex HTML Help projects, Spider also allows very fast compilation of a project created on the basis of an already prepared HTML content directory. Neither a table of contents nor an index is then required, nor even the preparation of the project file required for a normal project. In the proposed form of compiling the HTML content directory, only a few elementary options are required to be set - the rest is done by the program itself.</p>

<h2>Launching</h2>

<p>You can start the described tool using the button marked with the icon shown above. The launch button for this window can be found, for example, in the HTML Help menu and in the HTML Help toolbar.</p><h2>Main window</h2>

<p>In the main window for compiling a folder to CHM, there are two tabs: "General settings", "More settings", and the compile and preview button, for selection, of the already compiled CHM file, and the compilation report; there is also a compilation progress bar at the bottom. By default, all options are enabled (except for font selection, because this one is defined in the HTML files), so practically, all you need to do is select a directory, type in the names in the appropriate fields, and start compiling.</p>

<h2>General settings</h2>

<p><b>Folder to compile to CHM file</b><br>
In this field, you should put the name of the folder to be compiled. The directory is selected using the button next to the field.</p>
<p><b>Help Start Page</b><br>
In this field, using the button next to the field, indicate the file from the compiled directory that will be displayed as the start page.</p>
<p><b>Title of help window</b><br>
In this field we enter the name (title) that will be shown on the title bar of the CHM file.</p>
<p><b>CHM filename</b><br>
In this field, enter the name of the file that will be created after compilation. You should provide the name along with the extension .chm</p>
<p><b>Tabs and toolbar</b><br>
This part deals with the content of the control panel - which tabs are to be present, and whether to show a toolbar with buttons.</p>
<ul>
   <li><p><b>"Table of Contents" tab</b><br>
	When this option is selected, a tab with a table of contents, compiled from the default settings, will be placed.</p>
   </li><li><p><b>"Index" tab</b><br>
	When this option is selected, a tab with a link will be placed, compiled from the default settings.</p>
   </li><li><p><b>"Search" tab</b><br>
	When this option is selected, a tab with search capabilities will be placed, but without extended options.</p>
   </li><li><p><b>"Favorites" tab </b> <br>
After selecting this option, a tab will be placed where you can place selected items to be reopened, quickly opened.</p>
   </li><li><p><b>Place the toolbar in the help window</b><br>
	When this option is selected, a toolbar with standard buttons will be placed at the top of the CHM file.</p>
</li></ul>

<h2>More settings</h2>

<p>The purpose of this tab is to set general properties for compiled HTML files and language.</p>

<p><b>Table of contents and index</b><br>
The options shown below relate to how the compiler interprets HTML files when constructing the table of contents and index.</p>
<ul>
   <li><p><b>Use the <tt>TITLE</tt> tag as item names in the table of contents</b><br>
	The purpose of this option is for the program to try to read and use in the automatically created table of contents the titles placed in documents within the <tt>TITLE</tt> tag. When this option is disabled, or when the program cannot find the <tt>TITLE</tt> tag, the file name without extension will be used.</p>
   </li><li><p><b>Labels in documents for inventory subheadings</b><br>
	Checking this option causes the program to attempt to read the labels defined in the document to then create subcategories from them in the table of contents for the document from which they are read.</p>
   </li><li><p><b>Use the <tt>TITLE</tt> tag as item names in the index</b><br>
	The purpose of this option is for the program to try to read and use in the automatically created table of contents the titles placed in documents within the <tt>TITLE</tt> tag. When this option is disabled, or when the program cannot find the <tt>TITLE</tt> tag, the file name without extension will be used.</p>
   </li><li><p><b>Labels in documents for index items</b><br>
	Checking this option causes the program to try to read the labels defined in the document and then create index items from them.</p>
</li></ul>

<p><b>Help language</b><br>
The options shown below refer to the language used. If it has been defined in the component files used, there is no need to modify the options below.</p>

<ul>
   <li><p><b>Language</b><br>
		From this list you can select the language in which the pages included in the compiled HTML Help are written.</p>
   </li><li><p><b>Font</b><br>
		Using the button next to it marked with the letter "A" you can select the type of font, and its size. This font will be used in the interface of the compiled CHM file - not for displaying page content.</p>
   </li><li><p><b>Character set</b><br>
		From this list you can select the appropriate script for the font used in the compiled HTML Help pages.</p>
</li></ul>



</td>
</tr>
</table><br><table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_htmlhelp_general.php">HTML Help - general information</a></li><li><a href="tool_htmlhelp_hhp_editor.php">HTML Project Editor Help</a></li><li><a href="tool_htmlhelp_hhc_editor.php">HTML Help table of contents editor</a></li><li><a href="tool_htmlhelp_hhk_editor.php">HTML Help index editor</a></li><li><a href="tool_htmlhelp_hhp_compilation.php">Compile HTML Help document</a></li><li><a href="tool_htmlhelp_compiler_info.php">HTML compiler information Help</a></li><li><a href="tool_htmlhelp_compiler_services.php">HTML Help and projects in Spider</a></li></ul>
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
