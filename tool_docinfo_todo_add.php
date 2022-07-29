<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Document information</title>

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
<h1>Tools - Task to do</h1>

<!-- tre&#347;&#263; pomocy -->

<p>Use this window to create a new to-do task.</p><p><b>Name of the task</b><br>
Enter the name of the task in this field. Try to give such names for tasks that they suggest what the task is about. The name of the task<tt>"Check if it's OK</tt>" in two weeks will no longer say anything, but<tt>"Check the loop of downloading data from the database</tt>" even after a long time suggests what you had in mind. <br>
With more sentences in the project, this becomes quite important - you won't have to look into the content of the task to know more or less what it's about.</p><p><b>Task description</b><br>
Enter a detailed description of the task in the type field.</p><p><b>Priority</b><br>
The priority determines the importance of the task. If the task you are creating is very important, give it priority <tt>1 - the highest</tt> priority. Otherwise, you can give it a lower priority. This way, when reviewing your to-do tasks, you will know which ones you need to take care of first and foremost.</p>

<p><b>Marked as done</b><br>
Selecting this switch marks the task as complete. Thanks to this (depending on the program settings in the <a href="settings_editor_general.php">Program Settings / Other Settings / Editor ... / General) window</a>), the line containing this task will not be highlighted in the editor.</p>

<p><b>Move this to-do </b> <br>
Click this button to display a popup that allows you to enter a line number in the document to which the task is to be moved. This button is available only for tasks defined for the document, not for the entire project.</p>

<p><b>Assign to file</b><br>
Click this button to assign a task to a file. This way, when you double-click on this task in the list, the file can be automatically opened for editing. However, do not confuse assigning a task to a file with a task created directly in a document! Such a task will not be visible in the document to which it was assigned in the form of an illuminated line! This button is only available for editing tasks assigned directly to a project, not to a document.</p>

<p><b>Delete this task</b><br>
Click this button to delete the current task. This is especially useful if you are reviewing the contents of an existing task.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_editor_todotasks.php">Tasks to do - general</a></li><li><a href="main_editor_general.php">Working with the editor - in general</a></li></ul>
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