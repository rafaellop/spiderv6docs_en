<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Tools - Selected text to table</title>

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
<h1>Tools - Selected text to table</h1>

<p>This tool allows you to convert the selected text into a table, with the division into columns and rows according to one of the separators selected in the tool window.</p><p>To use the tool for converting text to a table, go to <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_edit.php">Edit</a> / <a href="main_menu_edit_change_selected.php">Selected text to ...</a> / Selected to table. You will also run the described tool from the toolbar <a href="toolbars_link_format.php">Links, text, formatting</a>.</p><p>As already mentioned, in order to create a table consisting of several columns, you need to indicate in the tool window the separator that will be used to recognize the columns or rows. You can choose one of the predefined (and most commonly used, by the way) separators, such as semicolon, space, or comma, or enter your own separator for each column of the table, and each row of selected text will become a row of the table.</p><p>You can also convert text to a table so that it contains only one row, and individual rows of selected text form the contents of the cells. Also in this case you can enter your own column separator.</p>

<p>For example, selecting the following passage and using the described tool with the selected option <b>each line as a row, semicolon as a column separator</b> will create a table as shown below:</p><table border="0" width="100%">
<tr>
<td>
<p><tt>apples;pears;plums<br>
cherries;strawberries;nuts</tt></p></td>
<td>
<table cellspacing="2" cellpadding="2" border="1">
<tr><td>apples</td><td>pears</td><td>plums</td></tr>
<tr><td>cherries</td><td>strawberries</td><td>nuts</td></tr>
</table>
</td>
</tr>
</table>

<p>There is also a <b> Insert table tag </b> switch in the tool window. Selecting this switch inserts a <tt> table </tt> around the text converted into rows and columns. If this switch is on, you can also specify the <tt> table </tt> tag parameters by clicking the Table Properties button, which will open the <a href="tool_table_tag.php"> <tt> table </tt> tag settings </a> where you will be able to define, for example, the table's border or style.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="main_menu_edit_change_selected.php">Other operations on a selected text</a></li><li><a href="tool_table_tag.php">Table tag</a></li><li><a href="tool_table_editor.php">Table editor</a></li><li><a href="tool_table_quick.php">Very quick table</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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