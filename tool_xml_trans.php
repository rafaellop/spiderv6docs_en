<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - XSLT Transformation Wizard</title>

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
<h1>Tools - XSLT Transformation Wizard</h1>



<p>The XSLT Transformation Wizard allows you to quickly convert an XML document into a document of a different type using an XSLT stylesheet. You can read more about XSLT at W3C - XSL <a href="https://www.w3.org/TR/xslt" target="_blank">Transformations (XSLT) Version 1.0</a>.</p>

<p>The wizard has a friendly interface that guides you through all stages of the transformation preparation process, starting from selecting the document to be transformed, ending with saving the target documents and displaying the report.</p><h2>Launching</h2>

<p>You can run the XSLT Transformation Wizard using the command marked with the icon shown above located in the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_creators.php">Markup Code Wizards</a>, and also using the button shown above located on the toolbar.</p><p>You move between boards using the Next and Back buttons.</p><h2>Source document selection</h2>

<p>On the first page, you can choose which file (or files) to transform:</p><ul>
	<li>currently open document</li>
	<li>all open documents</li>
	<li>specified file</li>
	<li>documents from selected folders</li>
	<li>documents from a web project</li>
</ul>

<p>If you choose one of the last three items, in the next page you will be able to select a file, a folder (with subfolders and indicate document types), or <a href="services_general.php">a web project</a> (and indicate document types), respectively.</p>




<h2>XSLT sheet selection</h2>

<p>In this page you can select from disk the XSLT sheet to be used for transformation:</p>

<p><b>use a declared XSLT sheet</b> - select this option if a sheet declared in the source document is to be used,<br></p><ul>
	<li><b>ask for the sheet name when no declaration</b> - check if the program should ask for the sheet name when it has not been declared in the source document</li>
</ul>
<p><b>use the indicated XSLT sheet for all documents</b> - select this option if you want to select an XSLT sheet from disk and apply it to all processed source documents, regardless of the declarations in individual documents.<br></p><p>Some of the above options may not be present (depending on the option selected on the first page).</p>




<h2>Target file settings</h2>

<p>In this page, you can indicate the folder where the target documents created after the transformation will be saved, as well as set options for the names of these documents:</p>

<p><b>Destination folder</b><br>
Enter the path to the folder where the destination documents will be saved. You can use the command next to it to select a folder on the disk.</p><p><b>Conversion result file names</b><br></p><ul>
	<li><b>keep existing file names</b></li>
	<li><b>change file extensions to:</b> - check this option and select an extension from the list, or enter your own</li>
	<li><b>add text to file names</b> - select this option and enter the text to be added to the end of the target file names</li>
</ul>


<p><b>The case of the target file names:</b><br></p><ul>
	<li><b>keep the existing size</b></li>
	<li><b>lowercase</b></li>
	<li><b>CAPITALS</b></li>
</ul>



<h2>Final Report</h2>

<p>The last page contains a report on how the wizard works. The main element of the window is the list of target files created during the transformation.</p><p>The list includes the following columns:</p><ul>
	<li><b>Source file</b> - path and name of the source file</li>
	<li><b>XSLT sheet</b> - path and name of XSLT sheet</li>
	<li><b>Destination file</b> - path and name of the file resulting from the transformation</li>
	<li><b>Result</b> - information about the progress of the transformation. If there were errors, here you will find information about it.</li>
</ul>

<p>The menu on the right side of the list contains commands that (after selecting an item in the list) allow:</p><ul>
	<li><b>Opening the source file in Spider</b></li>
	<li><b>Opening the XSLT sheet in Spider</b></li>
	<li><b>Opening the resulting file in Spider</b></li>
	<li><b>Preview the source file</b></li>
	<li><b>XSLT sheet preview</b></li>
	<li><b>Preview of the resulting file</b></li>
</ul>

<p>Using the commands under the list, you can save the report to disk in the format:</p><ul>
	<li><b>TXT</b></li>
	<li><b>HTML</b></li>
</ul>

<p>After reviewing the report, if everything went as you expected and there were no errors, you can use the <b>END</b> button to finish the wizard.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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
