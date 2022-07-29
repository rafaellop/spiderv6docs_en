<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Program settings - Dynamic CSS hints and other tools</title>

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
<h1>Program settings - Dynamic CSS hints and other tools</h1>

<p>This group of settings allows you to specify how the dynamic hints for cascading style sheets (CSS) work, options <a href="coding_markuplangs_codeinsight.php"> tag completion </a> , tool settings <a href="down_syntax_check.php"> verification syntax </a> and <a href="main_tabs_navigator.php"> document navigators </a> . In this window, you will find several groups, each of which covers slightly different aspects of how these functions work.</p>


<h2>Dynamic hints for the STYLE attribute</h2>

<p><b>Only the command "Edit style..."</b><br>
Check this option so that when displaying the list of properties for styles when using the dynamic tooltip function, the list created contains only the item to open the style editor.</p><p><b>Dynamic CSS hints</b><br>
Check this option to ensure that when displaying a list of properties for styles when using the dynamic hints feature, the list contains properties relevant to the situation.</p><p><b>The command "Edit style..." and dynamic CSS hints</b><br>
Check this option to ensure that when displaying a list of properties for styles when using the dynamic hints feature, the list contains both a command to edit the style and a list of properties relevant to the situation.</p><h2>Dynamic help for CSS</h2>

<p>In this group, there are setting options for specifying the scope of the data displayed in the CSS Help hover. The option names describe their meaning well:</p>

<ul>
	<li>CSS property support in standards</li>
	<li>Support for CSS properties in browsers</li>
</ul>

<h2>Tag completion</h2>

<p>This group includes options responsible for automatic completion of tags when entering them. The option names describe their meaning well:</p>

<ul>
	<li>Enable tag completion</li>
	<li>Treat pressing space the same as pressing "&amp;gt;"</li>
	<li>Automatically correct when wrong case (in XML)</li>
	<li>Case-sensitive in non-XML tags (e.g. HTML 4.01):</li>
<ul>
	<li>Keep the case of the typed part of the tag</li>
	<li>Use the case from the definition file and/or settings</li>
<ul>
	<li>correct the case of the hand-typed part</li>
</ul>
</ul>
</ul>

<h2>Document navigator</h2>

<p>This group gathers the <a href="main_tabs_navigator.php"> document navigators </a> settings located on the tab on the right resource pane. The names of the options explain their use well:</p>

<ul>
	<li>Refresh the navigator on save</li>
	<li>Sort in the navigator</li>
	<li>No script constructs in the navigator</li>
	<li>Inherited PHP methods in a separate branch</li>
</ul>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<h4>Related topics</h4>
<ul>
     <li><a href="main_editor_codeinsight.php">Dynamic hints and dynamic code in general</a></li>
     <li><a href="coding_css_codeinsight.php">Dynamic hints in CSS</a></li>
     <li><a href="main_tabs_navigator.php">Document code navigators</a></li></ul>
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