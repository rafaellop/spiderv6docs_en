<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.0.0.1)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css">
<!-- nazwa strony pomocy -->
<title>Editor - source code editing mode</title>

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
<h1>Editor - source code editing mode</h1>



<p>Source code editing mode is the more commonly used editing mode in Spider. It is also much more powerful and has more options than <a href="main_editor_wysiwyg.php">graphical</a> mode.</p>

<p>The source code editing window consists of two components:</p>
<ul>
	<li><a href="#editor">Editor</a> - where you edit the source code of documents</li>
	<li><a href="#gutter">Gutter</a> - additional information about the document will be placed here</li>
</ul>

<p>In addition, you can enable the <a href="main_preview_dynamic.php">dynamic preview</a> window in source code editing mode.</p><a name="editor"></a><h2>Editor</h2>

<p>In the editor you will perform all operations related to the source code of a document. In order to streamline your work, editor supports many keyboard shortcuts, has context menu, syntax highlighting and many other features.</p>

<p><a name="editorhiglighting"></a><b>Syntax highlighting</b><br></p><p>A basic requirement of a modern source code editor for any language is syntax highlighting. This allows for much easier orientation in the code. The code editor in Spider is also equipped with very powerful <a href="syntax.php">syntax</a> highlighting, which allows you to more easily distinguish HTML tags and their attributes, function and instruction names in programming languages, and much more. In total, more than 40 coloring schemes are shipped with the program.</p>

<p>In Spider, it is possible to change the coloring scheme while working. To do this, use the <b> Select Syntax Coloring Scheme </b> command on the mini toolbar on the left side of the editor, which will expand the list of all available schemes.</p>

<p>You can also <a href="settings_editor_syntax.php">customize syntax coloring</a>, and even use <a href="syntax_editor.php">the Coloring Scheme Editor</a> to edit existing <a href="syntax_editor.php">schemes</a> and create new schemes.</p>

<p>In addition, when creating more complex code elements, especially scripts where there are nested loops, conditional statements, etc., the coloring (highlighting) of corresponding pairs of parentheses is very useful. This way it is easy to recognize the beginning and the end of the block where the cursor stands.</p>

<p><b>Tasks to do</b><br></p><p>Many times while working with the program you will want to take notes to remind you of what still needs to be done. If you have more than one person working on a project, it is possible to share important information this way.</p>

<p>Such notes are the <a href="main_editor_todotasks.php">tasks to be performed</a> in Spider. Each task is assigned to a specific line in a document. The line where you added the task will be colored depending on the priority of the task (you set the priority when creating the task). You can change the colors of individual priorities using the <a href="settings_editor_general.php">program's Settings</a>window</p>

<p>It is enough to double-click on the line where there is a task to be performed to open a window with the description of that task.</p>

<p><b>Bookmarks in a document</b><br></p><p>Bookmarks allow you to mark important places that you will return to more often. When you set a bookmark in the row of your choice, its icon will appear in the <a href="#gutter">gutter</a>. Read more about using bookmarks <a href="main_editor_bookmarks.php">here</a>.</p><a name="twoparts"></a><p><b>Split editor window into two parts</b><br></p><p>Sometimes there is a need to edit the beginning and end of a document at the same time. This is most often the case while writing scripts, when you want to see for example a function declaration and edit another function at the same time. In this case, the ability to split the window into two parts comes to your aid. You can split editor window in two ways:</p>

<ul>
	<li>vertically</li>
	<li>horizontally</li>
</ul>

<p>To split the editor window, use the command on the <a href="toolbars_minitoolbar.php">mini editor bar</a>.</p>


<p><b>Highlighting errors</b><br></p><p>A very useful feature of the editor is underlining of spelling mistakes. Incorrectly spelled words will be marked with a red halo (you can change the halo color in the <a href="settings_editor_spelling.php">program settings</a> window). You can turn error highlighting on or off with the command in <a href="toolbars_minitoolbar.php">the mini bar of</a> the editor.</p>
<p> <a href="spelling.php">Read</a> more about spell check <a href="spelling.php">here</a>.</p>


<p><b>Automatic tag completion, Dynamic tooltips, Dynamic code</b><br></p><p>While working with documents in various languages, you may often forget the syntax of some element (tag, function, etc.). In this case, the Dynamic Code functions come to your aid. They are described in more detail in the topic about <a href="main_editor_codeinsight.php">dynamic code</a>.</p>


<p><b>Pop-up menu</b><br></p><p>The editor has a very extensive <a href="main_menu_editor.php">popup menu</a> (otherwise known as a context menu). You can call it by right-clicking anywhere in the editor.</p>

<p>Using commands from this menu, you can perform most operations in the program, such as opening, saving and closing documents, changing the highlighting scheme, <a href="main_editor_navigation.php">navigating through</a> the document, converting text to tables, spell-checking and much more.</p>


<p>It is also possible to customize the context menu. The easiest way to do this is to click the "Customize toolbars, menus and shortcuts" command at the bottom of the editor's popup menu and in the window that opens, go to the Editor's Context <a href="settings_toolbars_editor.php">Menu</a> category.</p><a name="gutter"></a><h2>Gutter</h2>

<p>The gutter is used to display additional information useful when working with code editing. You can turn it on using the command on <a href="toolbars_minitoolbar.php"> editor mini bar </a> , or in the <a href="settings_editor_conf.php"> Program Settings </a> window.</p>

<p>The following items may be included on the gutter:</p>

<ul>
	<li><b> document line numbers </b> - you can turn them on or off using the command on <a href="toolbars_minitoolbar.php"> editor mini bar </a> ,</li>
	<li><b>wrapped lines icon</b> - appears when a line does not fit in one line on the screen and at the same time line wrapping is enabled (you can enable and disable line wrapping using the command on the <a href="toolbars_minitoolbar.php">editor's mini bar</a>)</li>
	<li><b> bookmark icons in the document </b> - allow you to mark an important place in order to find it easily,</li>
</ul>

<p>The trough has a menu that you can access by clicking on it with the left mouse button. The command layout of this menu is identical to that of the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_edit.php">Edit</a> / <a href="main_menu_edit_bookmarks.php">Bookmarks in a document</a>.</p>




<!-- tre&#347;&#263; pomocy -->


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_editor_general.php">Editor - general</a></li><li><a href="main_editor_codeinsight.php">Dynamic code</a></li><li><a href="main_preview_dynamic.php">Dynamic preview</a></li><li><a href="main_editor_todotasks.php">Tasks to do</a></li><li><a href="main_editor_bookmarks.php">Document bookmarks</a></li><li><a href="main_menu_editor.php">Editor's pop-up menu</a></li><li><a href="toolbars_minitoolbar.php"> Editor mini bar </a></li><li><a href="main_editor_navigation.php">Different ways to navigate a document</a></li><li><a href="main_editor_wysiwyg.php">Editing in wysiwyg mode</a></li><li><a href="main_tabs_general.php"> Other tabs </a></li><li><a href="main_window_desc.php">Main program window</a></li></ul>
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