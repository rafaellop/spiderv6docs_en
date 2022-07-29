<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Main Menu - Edit</title>

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
<h1>Main Menu - Edit</h1>

<!-- Tre&#347;&#263; pomocy -->

<p>The Edit menu includes commands for working with a document:</p><p><b>Undo</b><br>
Click to undo the last action in the editor (the default shortcut <tt>Ctrl+Z</tt>).</p><p><b>Redo</b><br>
Click to perform the undo operation in the editor again (default shortcut <tt>Shift+Ctrl+Z</tt>).</p><hr>

<p><b>Cut</b><br>
Click to cut the selection to the clipboard (the default shortcut <tt>Ctrl+X</tt>).</p><p><b>Copy</b><br>
Click to copy the selection to the clipboard (default shortcut <tt>Ctrl+C</tt>).</p><p><b>Paste</b><br>
Click to paste the contents of the clipboard (default shortcut <tt>Ctrl+V</tt>).</p><p><b><a href="main_menu_edit_pastechange.php">Paste from clipboard with replacement</a></b><br>
Click to select how the text is replaced when pasting.</p><p><b><a href="tool_multiclipboard.php">Multiclipboard</a></b><br>
Click to display the multiclipboard window (default shortcut <tt>Ctrl+Shift+W</tt>). The command has a submenu displaying the items stored in the Multibinch - to insert the relevant fragment into the editor, click on the selected item. You will find an identical command in the <a href="main_menu_editor.php">Editor pop-up menu</a>.</p><p><b><a href="main_menu_edit_additionals.php">Additional commands</a></b><br>
Click to display a submenu containing additional editing commands.</p><hr>

<p><b>Select all</b><br>
Click to select all the text in the editor (the default shortcut <tt>Ctrl+A</tt>). Expanding the menu assigned to this item gives access to additional commands that allow you to select tags, selectors, texts between brackets, etc. You can find their description in the help topic <a href="main_menu_tools_navigation.php">Menu Tools / Document Navigation</a>.</p>


<p><b><a href="main_menu_edit_change_selected.php">Selected text to ... </a></b><br>
Click to open a submenu and choose how to replace the selected text.</p><p><b>Find and replace '\' with '/'</b><br>
Click to replace all <b>\ characters with</b> <b>/</b> in the current document.</p><hr>

<p><b>Indentation</b><br>
Click to indent the current line in the document (default shortcut <tt>Ctrl+Alt+Space</tt>).</p><p><b>Undo indentation</b><br>
Click to remove the indentation of the current line (default shortcut <tt>Shift+Ctrl+Space</tt>).</p><p><b>Time/date</b><br>
Click to insert the current date and time into the document at the cursor position. Click on the arrow next to the command to expand a list containing the different formats in which you can insert the current date and time. In addition, there is a command that launches the <a href="settings_datetime_templates.php">Date and Time Template Settings</a> window.</p><p><b><a href="tool_unicodeeditorek.php">Unicode editor</a></b><br>
Click to launch the mini editor window, which is used to paste and handle Unicode-encoded texts.</p><hr>

<p><b>Repetition of tag insertion</b><br>
Click to reinsert the last used tag. If you used a macro code last time, it will be used again. If any text is selected during insertion, it will (if possible) be covered by this tag. Default shortcut <tt>Ctrl+Q</tt>.</p><p><b>Edit tag in its tool</b><br>
Click to open the tag editing tool for the tag under the cursot (default shortcut <tt>F5</tt>).</p><p><b>Edit tag with all attributes</b><br>
Click to open <a href="main_tabs_inspector_tags.php">Tag Inspector</a> with settings for the current tag (default shortcut <tt>F6</tt>).</p><hr>

<p><b>Open link</b><br>
Click to open the document linked in the current tag in the editor (default shortcut <tt>Shift+Ctrl+O</tt>).</p><p><b>Browse link</b><br>
Click to view the document linked in the current tag in a new browser window.</p><hr>

<p><b>Document information</b><br>
Click to open the current document information window. Using the submenu, you can open the selected tab of this window immediately:</p><ul>
  <li><a href="tool_docinfo.php">Document Information</a></li>
  <li><a href="tool_docinfo.php#bookmark">Bookmark navigator</a></li>
  <li><a href="main_editor_todotasks.php">Tasks to do</a></li>
</ul>or create a new to-do.<p><b><a href="main_menu_edit_bookmarks.php">Document Bookmarks</a></b><br>
Click to open the tab management and document navigation submenu.</p></td>
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
