<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Support for markup languages - Dynamic code</title>

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
<h1>Support for markup languages - Dynamic code</h1>





<!-- tre&#347;&#263; pomocy -->


<p>The support for markup languages in Spider also includes the Dynamic Code mechanism. In fact, this mechanism consists of three tools:</p><ul>
	<li><a href="#tag_completion">Auto-completion of tags</a></li>
	<li><a href="#code_completion">Dynamic code</a></li>
	<li><a href="#code_parameter">Dynamic hints</a></li>
</ul>

<p>Spider gets the information provided by the Dynamic Code from special definition files for markup languages - TDF. There is a special tool to edit the data - <a href="tagdata_editor_tdf.php">definition files editor</a>. Using it, you can also add and remove supported markup languages. This makes Spider a versatile and very flexible editor, perfect for creating documents in any markup language.</p><a name="tag_completion"></a><h2>Auto-completion of tags</h2>

<p>Tag autocompletion is very helpful when creating code in a markup language (like HTML, WML, MathML, SVG, etc.). Thanks to this function, it is enough to enter the beginning of the tag - the rest will stick by itself.</p>For example, you type:<pre><b>&amp;lt;a</b></pre>followed by a space, or the closing character of the <tt> tag. With this function, the tag will be completed (the | character indicates where the cursor will be):</tt><pre><b>&amp;lt;a href</b>="|" <b>&amp;gt;&amp;lt;&amp;gt;</b></pre>

<p>Using the Markup <a href="tagdata_editor_tdf.php">Language Definition File Editor</a>, you can change the text with which the markup is completed. If you have set the appropriate options in the <a href="settings_codeinsight_tags.php">program's Settings</a> window, the case of the tag will also be changed.</p>




<h2><a name="code_completion"></a>Dynamic code</h2>

<p>Dynamic code works by suggesting the names of usable elements (markup attributes, attribute content). The tool can be invoked in two ways:</p>
<ol>
	<li>- using the dynamic code activation command on the editor mini bar (the icon shown next). Hints will appear after a while of inactivity.</li>
	<li><b>using keyboard shortcut - </b> you can always call up a balloon with a hint to the currently typed function by pressing <tt>Ctrl+Space</tt>keyboard shortcut</li>
</ol>


<p>If you have activated the automatic display, type put the cursor within the tag. Dynamic hints will concern:</p><ul>
	<li><b> possible tag attributes </b> - if you put the cursor anywhere except the value of the attribute</li>
	<li><b> possible values of the given attribute </b> - if you put the cursor inside the value of the attribute. In this case, the first item will be the command to run the tool, which you can use to set the value of the attribute (e.g. image selection window)</li>
	<li><b>entities that can be inserted</b> - if you place the cursor outside the tag</li>
</ul>

<p>If the automatic display of hints is disabled, use the shortcut <tt>Ctrl+Space</tt> to get a hint.</p>

<p>You can navigate through the list using scroll bars, arrows, etc. (as in any window). To insert the selected structure into the document, press <tt>Enter</tt>, or click on it.</p>

<p>The icons next to the names specify what type of argument value will be inserted (link, style, etc.).</p>

<h2><a name="code_parameter"></a>Dynamic hints</h2>
<p>Dynamic hints work by displaying, as you write your document, hints for the current tag. In the tooltips you will find information about the purpose of the tag, possible attributes to use, required attribute values.</p>

<p>The hint can be triggered in two ways:<br></p><ol>
	<li><b>automatic hints</b> - use the command on the mini bar of the editor. After placing the cursor inside the tag, wait for a moment and a tooltip will appear.</li>
	<li><b>using keyboard shortcut - </b> you can call up a balloon with a hint to the currently used tag at any time by pressing the keyboard shortcut <tt>ctrl+</tt></li>
</ol>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="coding_html.php">Support for HTML - general</a></li>
	<li><a href="coding_markuplangs.php">Support for markup languages - general</a></li>
	<li><a href="main_editor_codeinsight.php">Dynamic hints</a></li>
	<li><a href="settings_codeinsight_tags.php">Program settings - Dynamic hints</a></li>
</ul>
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
