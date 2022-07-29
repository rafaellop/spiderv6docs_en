<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Embrace with text, or remove the embrace</title>

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
<h1>Tools - Embrace with text, or remove the embrace</h1>



<!-- Tre&#347;&#263; pomocy -->

<p>This tool allows you to quickly enclose the selected text in the current document with text. It is also possible to remove the envelope, e.g. with comments, etc.</p>

<p>You will open the tool window from the <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_edit.php">Edit</a> / <a href="main_menu_edit_change_selected.php">Selected text on</a>... , from the <a href="toolbars_link_format.php">Links, Text and Formatting</a> toolbar, as well as from <a href="main_menu_editor.php">the editor's context menu</a>.</p>

<p>The tool window contains two groups, only one of which can always be active:</p>

<ul>
	<li>Embrace by text</li>
	<li>Remove the embrace</li>
</ul>


<h2>Embrace by text</h2>

<p>If you check the <b>Embrace by text</b> option, the following options are available:</p>

<p><b>Embrace left with text, Embrace right with text</b><br>
Specify the texts to be covered by the highlighted section (left and right respectively)</p><p><b>Embrace on both sides with the same text</b><br>
Check this option if you want to use the same text on both sides of the selected section. In this case, the text defined for the left side will be used, the text box for the right side will be disabled.</p><p><b>Insert at the beginning (ending) of each line</b><br>
Check if the given texts are to be inserted not only at the beginning and end of the selected passage, but also at the beginning and end of each line of the selected text passage.</p><h2>Remove the embrace</h2>

<p>If you select <b>Remove the embrace</b>, the program will find the following texts in the selected section (left and right respectively) and remove them.</p>

<p>Both texts must occur in the order specified (i.e. first the left text, then the right text). This means that if the text specified for the right side occurs first, it will not be removed.</p>

<p>If there are more occurrences of the specified texts in the selected passage, all their occurrences will be deleted.</p>

<p>This makes it possible, for example, to delete comment characters without having to go sequentially to the beginning and end of the comment in the document.</p>


<p><b>Remove the embrace from the left, Remove the embrace from the right</b><br>
Specify the texts to be found and removed from the selected passage.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_comment.php">Tools - Comment</a></li><li><a href="main_menu_edit.php">Edit Menu</a> / <a href="main_menu_edit_change_selected.php">Selected text to ...</a></li><li><a href="settings_toolbars.php">Program Settings - Toolbars, menu, and shortcut settings</a></li></ul></td>
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
