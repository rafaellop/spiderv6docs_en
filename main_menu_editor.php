<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Editor pop-up menu in text mode</title>

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
<h1>Editor pop-up menu in text mode</h1>

<!-- Tre&#347;&#263; pomocy -->

<p>The <a href="main_editor.php">editor's pop-up menu</a> <a href="main_editor.php">in text code editing mode</a> contains commands that launch the functions and tools most commonly used in this mode:</p>


<p><b>Edit tag in its tool</b><br>
Click to open the tag editing tool for the tag under the cursot (default shortcut <tt>F5</tt>).</p><p><a href="tool_embrace.php">Include or remove cover</a><br>
Click to open the tool that allows you to include the selected text in the specified text. It is also possible to remove the inclusion of comment characters, etc.</p><p><b>Clipboard</b><br>
Displays a submenu containing clipboard operation commands:</p>

<ul>
        <li><p><b>Cut</b><br>Click to cut the selection to the clipboard (default shortcut <tt>Ctrl+X</tt>).</p></li><li><p><b>Copy</b><br>Click to copy the selection to the clipboard (default shortcut <tt>Ctrl+C</tt>).</p></li><li><p><b>Copy line</b><br>Click to copy the entire line containing the cursor to the clipboard.</p></li><li><p><b>Paste</b><br>Click to paste the contents of the clipboard (default shortcut <tt>Ctrl+V</tt>).</p></li><li><p><b>Paste from clipboard with replacement</b><br>Click to select how to replace text when pasting. This submenu is identical to the <a href="main_menu_edit_pastechange.php">Edit / Paste from clipboard with replacement </a> menu.</p></li><li><p><b><a href="tool_multiclipboard.php">Multiclipboard</a></b><br>Click to display the Multiclipboard window (default shortcut <tt>Ctrl+Shift+W</tt>). The command has a submenu displaying the items stored in the Multiclipboard - to insert the relevant fragment into the editor, click on the desired item. An identical command can be found in the <a href="main_menu_edit.php">Edit menu</a>.</p></li></ul>

<p><b>Select all</b><br>
Click to select all the text in the editor (the default shortcut <tt>Ctrl+A</tt>). Expanding the menu assigned to this item gives access to additional commands that allow you to select tags, selectors, texts between brackets, etc. You can find their description in the help topic <a href="main_menu_tools_navigation.php">Menu Tools / Document Navigation</a>.</p>


<p><b>Selected text to...</b> <br>
Click to open the submenu and choose how you want to replace the selected text. This submenu is identical to <a href="main_menu_edit_change_selected.php">The Edit/ Selected Text on...</a>.</p><p><b>Document language</b><br>
Click to indicate the markup language in which the document is being created (this command is useful when Spider can't recognise the language on its own based on the META section, or DOCTYPE markup).</p><p><b>Enoding</b><br>
Click to use the commands to change the character encoding of the current document.</p><hr>

<p><b>Visual editor</b> <br>
 Click to enable <a href="main_editor_wysiwyg.php">visual editing mode</a> .</p>

<p><b>Browsing</b><br>
Click to enable the Browse tab to view the current document. If you have set external browsers in <a href="settings_browse.php">Program Settings / Browsing</a>, you can choose a browser to display the page in its window. The standard <tt>F11</tt> shortcut.</p><p><b>View</b> <br>
Click to show or hide toolbars or panels. The command displays <a href="main_menu_view_view.php">submenu</a> allowing you to change the appearance of the main window.</p><p><b>Editorial functions</b><br>
Click to display a submenu containing the commands that control the editor.</p><p><b>Highlighting scheme</b><br>
Click to display a list of available syntax highlighting schemes and change the scheme for the current document. Depending on the <a href="settings_editor_syntax.php">program settings</a>, schemes may or may not be grouped.</p><hr>

<p><b>Open link</b><br>
Click to open the document linked in the current tag in the editor (default shortcut <tt>Shift+Ctrl+O</tt>).</p><p><b>Browse link</b><br>
Click to view the document linked in the current tag in a new browser window.</p><p><b>Display help for the current item</b><br>
Click to display the help topic for the element on which the cursor is standing in the <a href="down_help.php">"Help, documents, previews"</a> tab <a href="down_help.php"> on the bottom panel</a>. Help is available for <a href="coding_html_help.php">HTML</a>, <a href="coding_css_help.php">CSS</a> and <a href="coding_php_help.php">PHP</a>.</p><p><b>Checke the current word spelling</b> <br>
Click to spellcheck the current word in the document.</p><hr>

<p><b>Document navigation</b><br>
Contains commands that launch tools to help you navigate the document and orient yourself in the code. This submenu has commands arranged identically to those in the <a href="main_menu_tools_navigation.php">Tools / Document Navigation</a> menu.</p><p><b>Document information</b><br>
Click to open the current document information window. Using the submenu, you can open the selected tab of this window immediately:</p><ul>
  <li><a href="tool_docinfo.php">Document Information</a></li>
  <li><a href="tool_docinfo.php#bookmark">Bookmark navigator</a></li>
  <li><a href="main_editor_todotasks.php">Tasks to do</a></li>
</ul>or create a new to-do.<p><b>Bookmarks in a document</b><br>
Click to open a submenu for managing bookmarks and moving them around the document. This submenu has commands arranged identically to those in the <a href="main_menu_edit.php">Tools / Bookmark</a>s menu <a href="main_menu_edit.php">in</a> the <a href="main_menu_edit.php">document</a>.</p><hr>

<p><b>Close document</b><br>
Click to close the current document. If there are unsaved changes to the document, the program will ask if you want to save it.</p>

<p><b>Customize toolbars, menus, and shortcuts</b><br>
Click to open the <a href="settings_toolbars.php">window where you can customize the above. program elements</a> .</p>

<p><b>Editor Help</b> <br>
This button displays the help page for the editor.</p><h2>Customize the popup menu</h2>


<p>It is also possible to customize the context menu. The easiest way to do this is by clicking the "Customize Toolbars, menus and shortcuts" command above and in the window that opens, go to the <a href="settings_toolbars_editor.php"> Editor Context Menu </a> category.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="main_editor.php">Editor in text source code editing mode</a></li></ul></td>
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