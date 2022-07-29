<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tasks to be performed in the project</title>

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
<h1>Tasks to be performed in the project</h1>

<!-- tre&#347;&#263; pomocy -->

<p>The <b> To Do </b> window in the project is used to view and create <a href="main_editor_todotasks.php"> tasks </a> defined for individual documents in the current <a href="services_general.php"> project </a> and for the entire <a href="services_general.php"> project </a> . You can also use it to open documents and go to lines where the task is defined. To display this window, use the <b> To Do List </b> command in the <a href="main_menu_services_properties.php"> Projects / Project Properties </a> menu.</p>

<p>Tasks for documents and for the project have been placed on two separate tabs. Above the tabs is a button bar containing the following commands:</p>

<p><b>Refresh the list of documents</b><br>
Click to refresh the list of tasks set for the project documents.</p><p><b>Adding a new task to the current document or project</b><br>
Click to add a new task to the list. Depending on the active tab, the task will be assigned to the current document or to a project.</p><p><b>Deleting a selected task</b><br>
Click to delete the task indicated in the list (this operation cannot be undone!).</p><p><b>Modification of the selected task</b><br>
Click to open a window for <a href="tool_docinfo_todo_add.php">creating and editing tasks</a> to be completed. If the document for which you want to modify a task is not open, you will be asked whether to open it.</p><p><b>Switch to the selected task</b><br>
Click to navigate to the selected task to be performed. When you open a document, you will be asked if you want to view the list of tasks for that document.</p><p><b>Copy the selected task to the task list in the current project</b><br>
Click to copy the task from the document to the project's task list. The task will still be linked to the source document, but will not refer to a specific place (line) in that document.</p><p>The next four commands are used to sort tasks by:</p><ul>
	<li><b>alphabetical order</b> of task names</li>
	<li><b>priority</b> of a task (1- highest, 10-lowest)</li>
	<li><b>author</b> of the task (alphabetically)</li>
	<li><b>task creation date</b></li>
</ul>You can also sort by clicking on the table header.<p><b>Help</b><br>
Displays this help window.</p>


<p>The task list contains the following columns:</p>

<ul>
	<li><b>Task name</b> (and a switch)</li>
	<li><b>File</b> to which this task relates</li>
	<li><b>Priority</b></li>
	<li><b>Added</b> - author of the task</li>
	<li><b>Task creation date</b></li>
</ul>


<p>Below is a text box that displays the <b> Job Description </b> entered.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_editor_todotasks.php">Tasks to do - general</a></li><li><a href="services_general.php">Projects - general</a></li></ul>
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