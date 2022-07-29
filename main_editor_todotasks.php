<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Tasks to do</title>

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
<h1>Tasks to do</h1>

<!-- tre&#347;&#263; pomocy -->

<p>Tasks are used to maintain additional information about a project or document. There are two types of tasks:</p><ul>
        <li><b>Assigned to project</b> - these are general tasks that you can set for the whole <a href="services_general.php">project</a> (e.g. to make a note like 'what else do I want to do here')</li><li><b>Assigned to document</b> - they are assigned to the place where they are set in the document. If you insert additional lines above the line for which you set the task, the task will move the same number of lines down so that it is still in the same logical place in the code.</li></ul>

<p>Unlike <a href="main_editor_bookmarks.php">bookmarks</a>, which are more for handily marking places in a document, tasks to be completed are much more extensive.</p>

<p>Tasks are especially useful when you work on the site in groups. With the help of tasks you can pass on tips to the project's co-developers, mark places where you should pay special attention, etc.</p>






<h2>How do I set and read the job to be executed for the entire site?</h2>

<p>It often happens that you want to save something for later, but this information is not about a specific document, but is more general. In such a situation, you can create a task for the whole site. You can do this with the commands in the <a href="service_todotasks.php">Tasks to</a> be done in a project window - you can open it with the command <b>List of tasks to be done</b> located in <a href="main_menu_services_properties.php">Main menu / Projects /</a> Project properties or in the menu under the <b>Project properties</b> button on the <a href="main_tabs_myservices.php">Projects</a> tab. In the same window you can view the tasks defined for a project.</p><h2>How do I set and read the to-do task for a document?</h2>
<p>To set a task for a specific line in your document, launch the <a href="tool_docinfo_todo_add.php">Task</a> To Do tool. To do this, right-click on it, and use the <a href="main_menu_editor.php">context menu of the editor</a> to select <b>Document Information / Add</b> Task to be Run or <a href="main_menu_edit_bookmarks.php">Bookmarks in Document / Add</a> Task to be Run (the same menu will be displayed if you left-click on the bar on the right side of the editor). Deleting tasks is done using the commands located in the same menu (the command is visible only if a task has been set for the current line).</p><p>When setting a task to be completed in a document, you can specify:</p>

<ul>
  <li>The name of the task</li>
  <li>Description of task</li>
  <li>Priority</li>
</ul>

<p>In addition, you can mark the task as completed, and in the program settings<a href="settings_editor_general.php">(Program settings / Other settings / Editor ... / General</a>) check the option not to highlight in the editor the rows where tasks marked as completed exist. This way it will be visible in the list of tasks, but they will no longer draw your attention while working.</p>


<p>Thanks to the special marking of tasks (a change of color in the background of the line with the task) it is impossible not to notice such a task. In addition, when opening a document for which a task has been assigned, a special message will be displayed (the message display can be switched off in the <a href="settings_editor_documents.php">program settings</a> window).</p>

<p>To quickly read the content of a task defined for such a highlighted line, just hover the mouse over it - the title and description will appear in the status bar (at the bottom of the program window), where the help tooltip is usually displayed. Of course, if the title or description is long, it may not fit in the status bar - to read the task content for such a line, just click on it while holding down the <tt>CTRL</tt> key.</p>


<h2>Priorities of tasks</h2>

<p>Tasks are identified in the document by the background color of the line in which the task is set. The color of this background is determined by the priority of the task, whereby:</p>

<table cellspacing="5" cellpadding="0" border="0">
<tr>
  <td align="right">1 -</td>
  <td>highest priority</td>
  <td style="background-color: #FF0000">red backlight</td>
</tr>
<tr>
  <td align="right">5 -</td>
  <td>medium priority (default)</td>
  <td style="background-color: #FFE200">yellow backlight</td>
</tr>
<tr>
  <td>10 -</td>
  <td>lowest priority</td>
  <td style="background-color: #198E73">green backlight</td>
</tr>
</table>

<p>Other priorities have intermediate colors between those shown above - from red through yellow to green. You can change the highlight colors for each priority in the <a href="settings_editor_general.php">program settings - General settings of the editor</a></p>

<h2>Navigating a document using tasks</h2>

<p>You can navigate to a selected task in the current document in several ways:</p>

<ul>
  <li>using the <a href="tool_docinfo.php#todotasks">Document Information / To-Do Items window</a></li>
  <li>using the <a href="find_text.php#goto"> Search, replace, move to selected document elements </a> (standard shortcut <tt> Ctrl + G </tt> )</li>
</ul>

<p>In addition, using the <a href="service_todotasks.php">Project Tasks</a> window, you can view, delete, and navigate to tasks set for all documents in the current project.</p>









</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="tool_docinfo.php#todotasks">Document Information - To-Dos</a></li><li>Editor <a href="tool_docinfo_todo_add.php">Task to Do</a></li>
  <li><a href="main_editor.php">Editor - source code editing mode</a></li><li><a href="main_editor_bookmarks.php">Document bookmarks</a></li><li><a href="main_editor_navigation.php">Different ways to navigate a document</a></li></ul>
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