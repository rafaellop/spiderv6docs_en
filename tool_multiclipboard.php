<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Multi-Clipboard</title>

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
<h1>Multi-Clipboard</h1>



<p>The multi-clipboard is a tool that allows you to save multiple copied text fragments for later use. Each piece of text copied in the Spider's editor is remembered. By default, it is possible to remember up to 20 such elements, but this can be changed using the appropriate option in the <a href="settings_general.php"> Program settings - General </a> window. The Spider thus extends the Windows system clipboard, which allows you to remember only one item.</p><p>Note that the multi-clipboard only works within the Spider editor - it does not remember items copied to the clipboard in other program windows, let alone in other programs!</p>

<p>Copying with the use of a multi-clipboard is imperceptible to the user - the program automatically remembers the text copied in the editor.</p>




<h2>Multi-Clipboard Window</h2>

<p>You can paste the text from the Multi-clipboard into the editor in several ways. First of all, the tool has its own window, which can be 'floating' or at the bottom or on the right side of the editor. To view them, click <b> Clipboard </b> in the <a href="main_menu_edit.php"> Edit </a> menu (icon shown opposite). You can find the same command in the <a href="main_menu_editor.php"> Editor popup menu </a> . The standard keyboard shortcut is <tt> Ctrl + Shift + W </tt> .</p>

<p>At the top of the window is a bar with command buttons:</p><p><b>Paste </b> <br>
Click to paste the contents of the selected Multi-Clipboard item into the editor at the cursor position.</p><p><b>Copy </b> <br>
Click to copy the contents of the selected Clipboard item to the Windows clipboard.</p><p><b>Delete </b> <br>
Click to delete the selected item in the Multi-clipboard.</p><p><b>Delete all </b> <br>
Click to remove all items from the Multi-Clipboard.</p><p><b>Line wrapping</b><br>
Click to enable line wrapping in the full text display box.</p><p><b>Help</b><br>
Click to view this help topic.</p><p>Below is a list of memorized text fragments (displays the beginning of the memorized text). To paste the selected text into the editor at the place where the cursor is currently located, use the button on the bar, or double-click on the selected list item. It is also possible to paste text in a different place - to do this, drag the selected item from the list into the editor.</p>
<p>In addition, it is possible to choose how to insert and format the pasted text - to do this, right-click on the selected item. A menu will appear from which you can choose the method of insertion. The commands in it are identical to those in the <a href="main_menu_edit_pastechange.php">Main menu / Edit / Paste from clipboard with replacement</a></p>

<p>At the bottom of the window is a text box containing all the text stored in the selected item. In addition, you can also change the text of the selected item in this field!</p>



<h2>Paste text using a command on the menu</h2>

<p>There is also an alternative way to paste text. If you hover the mouse cursor over the Multicache command described above (without clicking on it), a submenu will appear containing a list of memorized text fragments. Just click on the selected item in the submenu and the corresponding text will be pasted into the editor at the cursor position.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="coding_css.php">Creating styles</a></li><li><a href="main_editor_general.php">Editor - in general</a></li><li><a href="main_menu_edit.php">Edit menu</a></li></ul>
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
