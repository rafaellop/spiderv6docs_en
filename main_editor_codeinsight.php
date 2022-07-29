<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Dynamic code</title>

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
<h1>Dynamic code</h1>


<p>Modern code editors support programmers to a significant degree. In many cases, the programmer does not need to remember the exact syntax of the command, the order of arguments of the function call, etc., because the Dynamic Code mechanism comes to his aid.</p>

<p>In fact, dynamic code in Spider consists of three mechanisms</p><ul>
	<li>Auto-completion of tags</li>
	<li><a href="#code_completion">Dynamic code</a></li>
	<li><a href="#code_parameter">Dynamic hints</a></li>
</ul><a name="tag_completion"></a><h2>Auto-completion of tags</h2>

<p>Tag autocompletion is very helpful when creating code in a markup language (like HTML, WML, MathML, SVG, etc.). Thanks to this function, it is enough to enter the beginning of the tag - the rest will stick by itself.</p>You can enable tag autocomplete by clicking on the icon on the <a href="toolbars_minitoolbar.php">editor's mini bar</a>.<p>You can read more about tag autocompletion in the topic on <a href="coding_markuplangs_codeinsight.php">support for markup languages</a>.</p><a name="code_completion"></a><h2>Dynamic code</h2>

<p>Dynamic Code suggests what you can insert in your document at a given moment. First, it recognizes the language in which you are currently writing code, analyzes it, and then compares it with the data in the definition files to present a list of possible constructions to use in the current context.</p>

<p>You can call dynamic code in two ways:</p><ol>
	<li>using the activate dynamic code command in the mini editor bar (icon shown opposite). Hints will appear after a moment of inactivity.</li>
	<li><b>using keyboard shortcut - </b> you can always call up a balloon with a hint to the currently typed function by pressing <tt>Ctrl+Space</tt>keyboard shortcut</li>
</ol>



<p>You can read more about Dynamic Code in the topics about:</p><ul>
	<li><a href="coding_markuplangs_codeinsight.php#code_completion">support for markup languages</a></li>
	<li><a href="coding_php_codeinsight.php#code_completion">support for PHP</a></li>
	<li><a href="coding_scripts_jsvb_codeinsight.php#code_completion">JavaScript support</a></li>
	<li><a href="coding_css_codeinsight.php">support for CSS style sheets</a></li>
</ul><a name="code_parameter"></a><h2>Dynamic hints</h2>

<p>Dynamic hints display tooltips for the current tag (in markup languages), or a list of arguments for the current function (in JavaScript and PHP). the tool automatically recognizes the language in which you are currently working and adjusts the hints to it.</p>

<p>The tool can be invoked in two ways:<br></p><ol>
	<li><b>automatic hints</b> - use the command on the mini bar of the editor. After typing tag name (in markup language) or function name (in scripts) wait for a moment and a tooltip will appear. The command icon is shown next to it.</li>
	<li><b>using keyboard shortcut - </b> you can always call a balloon with a hint to the current tag or function by pressing <tt>ctrl+</tt>key shortcut</li>
</ol>

<p>You can read more about dynamic hints in the topics about:</p><ul>
	<li><a href="coding_markuplangs_codeinsight.php#code_parameter">support for markup languages</a></li>
	<li><a href="coding_php_codeinsight.php#code_parameter">support for PHP</a></li>
	<li><a href="coding_scripts_jsvb_codeinsight.php#code_parameter">JavaScript support</a></li>
</ul>

<!-- tre&#347;&#263; pomocy -->


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_editor.php">Source code editor</a></li><li><a href="coding_markuplangs_codeinsight.php">Support for markup languages - CodeInsight</a></li><li><a href="coding_php_codeinsight.php">Support for PHP - CodeInsight</a></li><li><a href="coding_css_codeinsight.php">Support for CSS - CodeInsight</a></li><li><a href="coding_scripts_jsvb_codeinsight.php">Support for JavaScript - Dynamic Code</a></li></ul>
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