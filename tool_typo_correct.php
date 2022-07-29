<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Tools - Simple Typographic Correction</title>

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
<h1>Tools - Simple Typographic Correction</h1>



<!-- tre&#347;&#263; pomocy -->

<p>Simple typographic proofreading is used to quickly format the text so that the text looks nice on the page and its layout follows typographic rules as much as possible. This is accomplished by using unbroken spaces &amp;nbsp; in put in the right places, which causes words to be joined into inseparable pairs, thus improving the layout of the text on the page.</p>You launch the tool from the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_spelling.php">Spelling</a> / Typographical Correction. The command icon is shown next to it.<p>The window contains two tabs:</p><ul>
	<li>Source</li>
	<li>Typographic correction settings</li>
</ul>


<h2>Source</h2>

<p>In this tab you can set the scope of the tool:</p>

<ul>
	<li><b>Selected text</b></li>
	<li><b>Current document</b></li>
	<li><b>All open</b> - all documents currently open in Spider</li>
  <li><b>Project</b> - select from the list the project whose documents are to be corrected. You can specify with the appropriate settings whether only HTML files are to be considered, or you can specify file name extensions yourself (in the form, for example, <tt>*.php;*.php3</tt>).</li>
	<li><b>Folders</b> - the files contained in the folders in the list will be corrected. You can add and remove folders using commands next to the list. In addition, you can specify the types of files to be included, as well as whether Spider should search all subfolders placed in the indicated folders.</li>
	<li><b>Files</b> - files on the list will be corrected. You can add and remove them using the commands next to the list.</li>
</ul>

<p><b>Create backup copies (*.bak)</b><br>
Check this option to create backup copies of saved files when performing adjustments (this setting is only available if you select one of the ranges: <b>Web Project</b>, <b>Folders</b>, <b>Files</b>).</p><p><b>Skip text in tables</b><br>
Check this option to skip text placed in the table when performing the correction. This is sometimes necessary when tables have narrow columns, in which case performing the correction could worsen the visual effect.</p><h2>Typographic correction settings</h2>

<p>The options in this section allow you to change the correction settings. With them, you can define what parts of the text are to be corrected. Selecting the appropriate options inserts a non-breaking space after a given expression, so that the expression will be connected to the next word and, in case it should be the last element of the line, will be moved to the next line.</p>

<ul>
	<li><b>don't leave conjunctions at the ends of lines</b></li>
	<li><b>don't leave abbreviations at the ends of lines</b></li>
	<li><b>don't leave digits and ordinal numbers at the ends of <b>lines</b></b></li>
	<li><b>don't leave single letters at the ends of lines</b></li>
	<li><b>do not leave the names of academic titles, professional titles, etc. at the ends of lines</b></li>
	<li><b>don't leave abbreviations in front of names, courtesy phrases, etc. at the end of lines</b></li>
	<li><b>convert typographic characters to entities</b> - check this option to have the tool convert typographic characters that could be incorrectly displayed on the page, such as pauses, half-pauses, print quotes (lower/left and upper/right) to entities.</li>
	<li><b>remove spaces between words and punctuation marks</b></li>
</ul>

<p><b>Do not leave words at the ends of lines:</b><br>
Check this option to specify words you do not want to leave on the blanket of the line (they will be moved to a new one). To add a word, type it in the box below, then click <b>Add Word to</b> List (plus) on the right side of the list. To delete, select a word in the list and click Delete <b>selected word</b> (minus). You can also remove all words from the list using the <b>Clear Word List</b> command.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="charset_encoding.php">Change of national character encoding</a></li><li><a href="spelling.php">Check spelling</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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