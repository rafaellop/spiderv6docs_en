<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Bottom results panel - Checking the consistency of a project</title>

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
<h1>Bottom results panel - Checking the consistency of a project</h1>



<!-- tre&#347;&#263; pomocy -->


<p>The project consistency checker is used to verify the connections between project files and indicates items that are not used in the project. This allows you to easily keep your project files in order.</p>

<p>Both links to images and documents in markup languages are checked, as well as including files in server-side scripting languages (eg include in PHP).</p>

<p>To check the integrity of the project use:</p><ul>
   <li>on the <a href="down_panel.php">bottom results panel</a> from the menu on the right side of the tab the command "Project consistency",</li>
   <li>on the <a href="main_tabs_myservices.php">Projects</a> tab from the menu in the drop-down list project settings - Project cleanup,</li>
   <li>In the <a href="service_tool_synchronization.php">Project Synchronization</a> window - from the menu under the button "Operations for cleaning the current web project"</li>
</ul>


<p><b>Verify the integrity of the current project</b><br>
Click for information about the use of files in the current project.</p>

<p><b>Finding orphaned style declarations</b><br>
Click for information about CSS style declarations that are not used in any project document.</p>

<p><b>Search for orphaned document information files</b><br>
Click to get information about files that contain additional information (e.g., syntax coloring assignments, tasks to be performed, etc.) for deleted project files. By default, these files are deleted with the deleted document, but if the document was deleted from within another program, they may have remained on the disk.</p>

<h2>Project consistency check results</h2>

<p>The results of the tool are presented in a list on the "Project Consistency" tab of the "Results Panel. The results window contains four columns:</p>

<ul>
   <li><b>Filename</b> - the path and name of the file for which it was checked if there were links to it from other documents. An icon with a ball indicates the type of message:<table border="0">
         <tr>
            <td></td>
            <td>- file is used in the project,</td>
         </tr>
         <tr>
            <td></td>
            <td>- file is not used on the site,</td>
         </tr>
      </table></li>
   <li><b>Title</b> - The title of the document - if any - contained between the <tt><title></title></tt> and <tt><title></title></tt> tags in the document. Showing titles, which slows down the search process somewhat, can be turned off in the menu on the right side of the window.</li>
   <li><b>Result</b> - Information whether the file is used in the project</li>
   <li><b>Number of references</b> - Information about the number of references to a file from other documents</li>
</ul><a name="service_clean_down_panel"></a><h2>Clean up your project from the Results Panel</h2>

<p>Once the consistency check has been performed, you can use the options available in the menu to the right of the list of found files:<br></p><p><b>Deleting selected files</b><br>
Click to delete the files selected in the list from the drive. This will delete the files from the hard drive.</p>

<p><b>Delete all orphaned files</b><br>
Click to delete all files not used on the site. This will delete the files from your hard drive.</p>

<p><b>Note:</b> It is advisable to clean up the site before running <a href="service_tool_synchronization.php">Automatic project synchronization</a>. This will prevent unnecessary files from being uploaded to the server, which will shorten the synchronization time and reduce costs in the case of a modem connection.</p><a name="service_clean_quick"></a><h2>Quick project cleanup</h2>

<p>To quickly purge the project of unnecessary files, use:</p><ul>
   <li>in the <a href="main_tabs_myservices.php">Projects</a> tab - from the menu in the drop-down list Project Properties / Project Cleanup,</li>
   <li>In the <a href="service_tool_synchronization.php">Project Synchronization</a> window - from the menu under the button "Operations for cleaning the current web project"</li>
   <li>in the <a href="main_menu_services_properties.php"> Projects / Project Properties / Project Cleanup </a> menu</li>
</ul>

<p><b>Delete document information files (*.add)</b><br>
Deletes <tt>*.add</tt> files that store to-do tasks, bookmark settings, etc. for a document. Before deleting, you will be asked to confirm that you want to delete the settings files. If you inadvertently delete the files, you can restore them from the Windows Recycle Bin.</p>

<p><b>Delete document backups (*.bak)</b><br>
Deletes document backups created automatically when saving the document. Backups are created when saving the document, unless this has been changed in the Program Settings.</p>

<p><b>Remove temporary files (*.tmp;~pajtemp.*)</b><br>
Deletes temporary files created while running the program (e.g. after running Browse)</p>

<p><b>Delete all (*.add;*.bak;*.tmp;~pajtemp.*)</b><br>
Deletes all of the above files simultaneously cleaning up the project in one click.</p>

<p><b>Note:</b> It is a good idea to clean up the site before running "Automatic site synchronization". This will prevent unnecessary files from being uploaded to the server, which will shorten the synchronization time and reduce costs in the case of a modem connection.</p>

<h2>Export the results of link validation</h2>

<p>To export link validation results, use the buttons on the menu to the right of the results window. Data can be exported to:</p><ul>
   <li>file in HTML format</li>
   <li>file in TXT format</li>
</ul>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="down_links_verify.php"> Validating links </a></li>
   <li><a href="down_syntax_check.php">Syntax validation</a></li>
   <li><a href="service_tool_synchronization.php">Automatic project synchronization</a></li>
   <li><a href="services_general.php">Projects in general</a></li>
   <li><a href="main_tabs_myservices.php">Projects tab</a></li>
   <li><a href="down_panel.php#downpanellist">Other tabs of the bottom results panel</a></li>
   <li><a href="main_window_desc.php">Main program window</a></li>
</ul>
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