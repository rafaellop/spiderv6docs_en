<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Program settings - Editor configuration</title>

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
<h1>Program settings - Editor configuration</h1>

<!-- tre&#347;&#263; pomocy -->
<p>This category of editor settings is the most extensive. Here you can influence very specific editor behavior in terms of editing activities. This category consists of five groups:</p><h2>Margin, gutter and undo and redo</h2>

<p>This group allows settings related to margins, undo functions and gutter appearance, and consists of the following settings:</p><p><b>Show right margin</b><br>
Check this option to enable the display of the right margin in the editor. The right margin is a line which allows, for example, lines to be wrapped there or can act as a visual aid.</p><p><b>Right margin column</b><br>
In this field, enter the number of the column in which the right margin is to be displayed.</p><p><b>Display gutter</b><br>
Check this option to enable the display of the gutter, the area on the left-hand side of the editor where line numbers, line wrap tags or tab icons are located.</p><p><b>Gutter width</b><br>
Enter the width of the gutter in points in this field.</p><p><b>Wrap in the right margin</b><br>
Select this option to enable row wrapping in the right margin, not necessarily at the end of the visible editor area.</p><p><b>Indented wrap</b> <br>
Select this option to enable line wrapping with indentation. This function causes rows that are wrapping not to start from the beginning of the next line, but from where the indentation occurs in the preceding row</p><p><b>Group undo/redo</b><br>
Select this option to enable group undo or redo actions. With this option, you can undo, for example, entire words entered, not individual letters.</p><p><b>Without cursor in undo</b> <br>
Select this option to prevent cursor movement in the editor from being remembered during the undo / redo operation.</p><h2>Indentations</h2>

<p>This group allows you to customize the indentation function, specify tab stops, etc., and it consists of the following settings:</p><p><b>Optimal indentation</b><br>
Check this option to enable the blank space in automatically created indentations to be filled with the minimum number of characters, using the TAB and space characters simultaneously.</p><p><b>Indentation step</b><br>
Enter the indentation step value in this field.</p><p><b>Position at indentation</b> <br>
Select this option to position the cursor on the first non-blank character (space, tab) after pressing the Enter key.</p><p><b>Use the indentation from above</b><br>
Check this option to ensure that when automatic indentation is created, the pro-gram uses the same indentation as in the line preceding it.</p><p><b>Backspace to indent</b><br>
Check this option to ensure that when characters are deleted with the Backspace key, entire indentations are also deleted to the level corresponding to the indentation from the line above.</p><p><b>Tab stops</b> <br>
Select this option to set points (column numbers) to move over which the TAB key will move.</p><p><b>Tab stops</b> <br>
Enter the tab stops in this field, that is, the numbers of the columns at which the TAB key will stop. Enter the column numbers after commas. If you enter the value 3,5,15 here, pressing the TAB key will move the cursor 3, 5 and 15 columns forward.</p><p><b>Tabulation every ...</b><br>
Check this option to select how many columns the TAB key jumps over. In other words, how many characters are contained in the TAB character.</p><p><b>Number of characters in TAB</b><br>
In this field, enter the number of columns by which the cursor will move when the TAB key is pressed.</p><h2>Selecting texts</h2>

<p>This group allows you to define the behavior of the text selection function in the editor and consists of the following settings:</p><p><b>Select text only</b><br>
Check this option to color code the selection of a block of text only if it relates to text. Disabling this option also allows you to see selected lines that do not contain text.</p><p><b>Select word by word</b> <br>
Enable this option to select text with the mouse to select entire words instead of individual characters sequentially.</p><p><b>Disable moving text with the mouse</b> <br>
Select this option to disable the ability to move text with the mouse using the drag-and-drop method.</p><p><b>Select line after double click</b> <br>
Enable this option to be able to select an entire line with a double-click.</p><p><b>Select line by triple-click</b> <br>
 Enable this option to be able to select an entire line with a triple-click.</p><h2>Navigating the document</h2>

<p>This group of settings includes settings related to document navigation. It consists of the following settings:</p><p><b>Move the cursor on the TAB</b><br>
Check this option if you want moving the cursor with the arrow keys to move in line with the inserted tab characters. If you use a space character instead of TAB, this function will not work as there will be no TAB characters in the document.</p><p><b>Smart TAB</b><br>
Check this option if you want pressing the TAB key to move to a position consistent with the next indentation. Spaces will be used to fill in missing characters.</p><p><b>Cursor left / right moves up / down from start / end</b> <br>
Select this option to make pressing the left arrow key move the cursor to the end of the line above, and pressing the cursor right move the cursor to the beginning of the line below. If you turn it off, the left or right cursor will only work until the beginning of a line or the end of a line.</p><p><b>Do not allow the cursor beyond the end of the document</b><br>
Check this option if you want to not allow the cursor to move beyond the end of the document as well. If you enable, you will only be able to move the cursor up to the last character of the document.</p><p><b>Do not allow the cursor between TAB</b><br>
Enable this option if you want it not to be possible to place the cursor between TAB characters, e.g. when clicking there with the mouse. Otherwise, if you enable this option, it will be possible to place the cursor inside a tab character.</p><p><b>Do not allow the cursor beyond the end of the line</b><br>
Enable this option if you want it not to be possible to place the cursor behind the end-of-line character. Otherwise, if you enable this option, it will be possible to place the cursor behind the end-of-line character and type text there - the remaining free space will be filled with space characters.</p><h2>Editor configuration</h2>

<p>Here are the other settings for which the above groups were not suitable. Here are the options available:</p><p><b>Do not change the column when moving vertically</b><br>
Check this option if you want the original column to be preserved as far as possible when moving the cursor vertically.</p><p><b>Display line number when scrolling with bars</b><br>
Check this option if you want a tooltip with information about the current line to be displayed when scrolling through the document using the scroll bars.</p><p><b>Block cursor in overwrite mode</b><br>
Check this option to display a special cursor to distinguish the mode when the INSERT key is activated in overwrite mode.</p><p><b> Use a TAB character instead of spaces for the TAB key </b> <br>
 Select this option to use the TAB character when the TAB key is pressed. If you prefer to use spaces instead of TAB, disable this option.</p><p><b>When pasting text, replace Unicode characters with entities</b><br>
Check this option to change special characters into so-called entities, i.e. corresponding codes, when pasting a document in Unicode format via the clipboard.</p><p><b>Restrict line numbering to the end of the document</b><br>
Check this option if you want the line numbering shown in the gutter to be restricted to the end of the document only.</p><p><b>Do not ask to set a bookmark where a bookmark exists</b><br>
Check this option if you want the program not to ask you in case when the numbered bookmark you want to set is already in another place in the document.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings_editor.php#settingslisteditor">Other editor settings</a></li><li><a href="main_editor.php">Working with the editor</a></li></ul>
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