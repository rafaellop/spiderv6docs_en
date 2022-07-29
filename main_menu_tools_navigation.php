<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Main menu - Tools / Document navigation</title>

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
<h1>Main menu - Tools / Document navigation</h1>

<!-- Tre&#347;&#263; pomocy -->

<p>The menu contains commands that launch tools for easier document navigation and code orientation. Depending on where this menu is called up, all commands are available, or only the text selection commands are available.</p>


<p><b><a href="find_text.php#goto">Go to...</a></b><br>
Click to select the line, tab or other location you want to go to (default shortcut <tt>Ctrl+G</tt>).</p><p><b><a href="main_tabs_navigator.php">Show document navigator</a></b><br>
Click to show the Navigator tab on the right panel (default shortcut <tt>Ctrl+6</tt>). It contains a number of navigators to help you navigate documents in different languages.</p><p><b><a href="tool_docinfo.php">Bookmark navigator</a></b><br>
Click to access the bookmark navigator in the Document Information window.</p><p><b>Select the tag under the cursor</b><br>
Click to select the entire tag on which the cursor is located with a selection (default shortcut <tt>Ctrl+Alt+T</tt>). Only works in languages such as HTML, XML etc.</p>

<p><b>Select all of the tag up to the closing tag</b><br>
Click to select the entire contents of the tag on which the cursor is standing (it must be inside the tag (opening or closing) whose content is to be selected). The opening and closing tags will also be selected. This function only works for tags that have a closing tag (like TABLE or P).</p><p><b>Select inside tag up to its to closing</b> <br>
It works as above, except that the opening and closing tag will not be selected, but only the text between them.</p><p><b>Select text between tags</b><br>
Click to include text between tags (i.e. to the left and right of the cursor to the nearest tag) in the selection. The default shortcut is <tt>Ctrl+Alt+D</tt>.</p><p><b>Go to opening/closing tag</b><br>
Click to include the opening or closing tag that corresponds to the tag the cursor is located on (default shortcut <tt>Ctrl+Alt+G</tt>). Only works in markup languages such as HTML, XML, etc.</p><p><b>Go to next tag</b><br>
Click to go to the beginning of the next tag (default shortcut <tt>Ctrl+Alt+Right</tt>). It only works in markup languages like HTML, XML, etc.</p><p><b>Go to previous tag</b><br>
Click to go to the beginning of the previous tag (default shortcut <tt>Ctrl+Alt+Left</tt>). It only works in markup languages like HTML, XML, etc.</p><p><b>Select the next tag</b><br>
Click to select the next tag (default shortcut <tt>Shift+Ctrl+Alt+Right</tt>). It only works in markup languages like HTML, XML, etc.</p><p><b>Select the previous tag</b><br>
Click to select the previous tag (default shortcut <tt>Shift+Ctrl+Alt+Left</tt>). It only works in markup languages like HTML, XML, etc.</p><p><b>Select the selector under the cursor</b> <br>
Click to select the contents of the CSS selector the cursor is on (default shortcut <tt> Ctrl + ' </tt> ). Only works with CSS stylesheets.</p><p><b>Go to the next selector</b><br>
Click to go to the next CSS selector (default shortcut <tt>Ctrl+]</tt>). It only works in CSS style sheets.</p><p><b>Go to the previous selector</b><br>
Click to go to the previous CSS selector (the default shortcut <tt>Ctrl+[</tt>). It only works in CSS style sheets.</p><p><b>Go to corresponding bracket</b><br>
Click to jump to the corresponding closing brace if the cursor is next to the opening brace, or vice versa, easy to remember as <tt> Ctrl + ( </tt> ). It is very useful e.g. for navigating through the content of functions in scripting languages like JavaScript or PHP.</p><p><b>Select text between brackets</b><br>
Click to select text between the corresponding brackets. This is very useful when, for example, you want to copy a very extensive function in a script - after using this command, the entire body of the function will be selected.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="main_menu_tools.php">Main Menu - Tools</a></li>
  <li><a href="zen-coding.php">Zen-coding library with navigation functions</a></li>
  <li><a href="main_editor_navigation.php">Different ways to navigate a document</a></li>
  <li><a href="main_tabs_navigator.php">Navigator tab</a></li>
  <li><a href="settings_toolbars.php">Program Settings - Toolbars, menu, and shortcut settings</a></li>
</ul></td>
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
