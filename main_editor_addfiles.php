<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>ADD Additional Document Data Files</title>

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
<h1>ADD Additional Document Data Files</h1>

<p>When saving a document, a file containing additional information about document settings may be created.</p>

<p>In the <a href="settings_editor_documents.php#add_files">Program Settings</a> window, you can choose which information you want to keep:</p>

<ul>
  <li><a href="main_editor_bookmarks.php"> document bookmark settings </a></li>
  <li><a href="main_editor_todotasks.php"> to-do list </a></li>
  <li>assigned <a href="main_preview_prevdoc.php">preview document</a></li>
  <li><a href="settings_editor_general.php"> editor configuration </a></li>
  <li>the<a href="syntax.php">highlighting scheme</a> that was last used when editing the document</li>
  <li>cursor position and selection at the time of saving</li>
</ul>The file name of the additional information is created from the name of the original document + the <tt>.add</tt> extension. For example:<ul>
  <li>Document Name: <tt><b>index.html</b></tt></li>
  <li>Additional information file name <tt><b>index.html.add</b></tt></li>
</ul>


<h2>How can I keep ADD files from being created?</h2>

<p>Many people have asked what to do to prevent Spider from creating ADD files when saving a document. The solution is very simple - if none of the above options is checked, ADD files will not be created.</p><p>Keep in mind that this greatly limits your ability to use the advanced features of the editor<b><a href="main_editor_todotasks.php">(Tasks</a>, <a href="main_editor_bookmarks.php">bookmarks</a></b>, etc. will not be remembered when the document is closed! ) </p>


<h2>Quickly delete ADD files</h2>

<p>Over time, the additional document information files in a particular project may no longer be needed (e.g., after work is completed). To delete them all quickly, use the command in the menu <a href="main_menu_services_properties.php">Projects / Site Properties / Site Purge</a>.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="main_editor_general.php">Editor - general</a></li><li><a href="settings_editor_documents.php#add_files"> Program Settings / Documents </a></li></ul>
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
