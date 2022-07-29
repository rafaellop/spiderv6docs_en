<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Support for CSS - Dynamic code</title>

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
<h1>Support for CSS - Dynamic code</h1>

<!-- tre&#347;&#263; pomocy -->


<p>The support for CSS in Spider also includes, among other things, the mechanism of dynamic code.</p>

<p>The dynamic code retrieves data from the the <a href="tagdata_editor_tdf_css.php">CSS definition file</a> and parses the existing CSS code (including those included in the current sheet using the <tt> @import </tt> clause). This makes possible to specify appropriate CSS property names in the tooltips. Thanks to this, you can write sheets much more efficiently, because despite the fact that there are tools for creating sheets, sometimes it is faster to enter the code directly from scratch.</p>


<p>Dynamic code works by suggesting the names of elements that can be used (functions, class methods, variables and constants). The tool can be called in two ways:</p><ol>
  <li><b>automatic display of hints</b> - use the command on the mini editor bar. Hints will appear after a while of inactivity.</li>
 <li><b>using the keyboard shortcut </b> - you can at any time call a balloon with a hint to the currently typed function by pressing the keyboard shortcut <tt>ctrl + spacebar</tt>.</li>
</ol>


<p>If you have activated automatic display of hints, enter the beginning of the property name (e.g. <tt><b>font-</b></tt>) and wait for a sec - a list will appear with items that fits and which you can use. The list will highlight the first item that fits the most the string you typed (e.g. for <tt><b>font-</b></tt> this will be the name of <tt><b>the font-family</b></tt> function). In the event that automatic display is disabled, to get a hint, use the shortcut.</p>

<p>You can move around the list using scroll bars, arrows, etc. (as in any window). To insert the selected structure into the document, press <tt>Enter</tt> or click on it.</p>

<p><!-- ignored --></p>

<ul>
  <li>- Sound</li>
  <li>- Blocks</li>
  <li>- Classification</li>
  <li>- Colors and background</li>
  <li>- Font</li>
  <li>- Generated</li>
  <li>- Scroll bars</li>
  <li>- Page</li>
  <li>- Tables</li>
  <li>- Text</li>
  <li>- Visual</li>
</ul>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="coding_css.php">Support for CSS - in general</a></li>
  <li><a href="main_editor_codeinsight.php">Dynamic code</a></li>
  <li><a href="tagdata_editor_tdf_css.php">Definition file editor for CSS</a></li></ul>
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