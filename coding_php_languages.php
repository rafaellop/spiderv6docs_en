<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Support for PHP - "Programming languages" tab</title>

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
<h1>Support for PHP - "Programming languages" tab</h1>



<!-- tre&#347;&#263; pomocy -->



<p>If you don't remember what a certain PHP function is for, or if you are looking for the right function for a specific task, the <a href="main_tabs_languages.php">Programming Languages</a> tab is very useful.</p>

<h2>Tool description</h2>

<p>This tab consists of a menu where you can switch programming languages and a data tree. If you choose the view for PHP there will be branches on the tree:</p>

<p><b>Constants and variables:</b></p><ul>
   <li><b> PHP constants </b> - list of PHP predefined constant names (e.g. in the <tt> php.ini </tt> file)</li>
   <li><b> Server constants </b> - list of server constants names related to the server itself</li>
   <li><b>Server constants (Request)</b> - a list of server constants for handling requests from the browser</li>
   <li><b>PHP variables</b> - a list of PHP variable names, such as function argument array, session variables, etc.</li>
</ul>

<p><b>Functions</b><br>
Contains lists of names of the built-in PHP functions. They are grouped according to their purpose, or the module that provides them.</p>



<p>The described tab can be for example a reference book. It's not easy to remember PHP functions, constants and variables - there are over 2000 of them in the manual, and new ones appear all the time. For the items selected in the tree, a tooltip area is displayed at the bottom of the tab, providing more information about the selected function. For example for <tt>MySQL/mysql_fetch_row()</tt> we get a hint:</p><p><tt>
<b>Name:</b> <i>mysql_fetch_row()</i><br><b>Arguments:</b> <i>object result</i><br><b>Type:</b> array<br><b>project:</b> PHP 3, PHP 4<br></tt></p><p>You can use this tab not only as a reference tool. You can also insert selected elements into a document. You can do this in two ways: using the button on the left side of the tab or by double-clicking on the selected element. The Spider will warn you if you want to place an element in an inappropriate place.</p>



<h2>Editing a definition file</h2>

<p>To edit the data used by the tool, the <a href="tagdata_editor_tdf_php.php">Definition File Editor for PHP</a> is used. With it you can change the description of an existing function, add new functions and their groups.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="main_tabs_languages.php"> "Programming languages" tab </a></li>
   <li><a href="tagdata_editor_tdf_php.php">Definition file editor for PHP</a></li></ul>
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