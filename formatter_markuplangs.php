<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Formatting - Settings for markup languages</title>

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
<h1>Formatting - Settings for markup languages</h1>

<!-- tre&#347;&#263; pomocy -->
<p>In this window you can set options for an existing or a new formatting style for markup languages (like HTML, XML).</p>

<p>The window can be invoked with the command <b> Add formatting profile </b> , or <b> Modify formatting profile </b> in the menu next to the <b> Tag formatting predefined settings </b> in the <a href="settings_codeinsight_formatter.php"> window. </a><a href="settings_codeinsight_formatter.php"> Program Settings - Source Code Formatting </a> .</p>




<h2>Global settings</h2>

<p>In this section, you can set the options that will apply when formatting the entire document.</p>

<p><b> Do not tamper with the content of the tags </b> <br>
 Select this switch so that no changes are made inside the tags when formatting.</p>

<p><b>Single indentation</b><br>
Select how many characters are to be used for indenting one line, and the character to be used for indenting (space or tab).</p>

<p><b> The case of tags </b> <br>
 Choose the case of letters to be used in the tags:</p><ul>
	<li>uppercase</li>
	<li>lowercase</li>
	<li>no change</li>
</ul>




<h2>Formatting individual tags</h2>The options in this section allow you to adjust the formatting of selected tags. You can add and remove tags that you want to format, set the spacing before and after the tag, and so on.<p><b> List of tags </b> <br>
 This list includes the tags that will be formatted. You add and remove tags using the buttons below the list, and you can modify the settings using the fields to the right of the list.</p>

<p>The first entry is the default "<b>Other Tags</b>". It specifies formatting options for all tags not included in the list. You cannot delete or rename this item.</p>


<h2>Spacing around the tag</h2>

<p>With the options in this group, you can set the spacing to be inserted before and after the tag.</p><b> Keep Existing Spacing </b> <br>
 Select this option to maintain any existing tag spacing in the document.<p><b> Modify Spacing </b> <br>
 Check this option if you want to influence the spacing between tags.</p>

<p>It is possible to individually select spacing for :</p><ul class=",">
	<li><b>opening tag</b> - e.g. a <tt>&amp;lt;A tag&amp;gt;</tt></li>
	<li><b>closing tag</b> - e.g. <tt>a &amp;lt;/A tag&amp;gt;</tt></li>
</ul>

<p>For each of the options listed, you can choose the spacing settings before and after the tag.</p>

<p>Settings for spacing <b>before</b> the tag:</p><ul>
	<li><b>no spacing</b> - the tag will be placed directly after the preceding text or other tag. Exceptionally, it can be placed on a new line, if the settings for the preceding tag force inserting a blank line after it. This makes the code more compact, but less readable,</li>
	<li><b> possible space </b> - a space may be inserted before the tag, if there is plain text (not a tag) before and after the tag,</li>
	<li><b>from a new line</b> - the tag will be placed on a new line. It results in better code readability,</li>
	<li><b>add blank lines</b> - allows you to specify the number of blank lines to be inserted before the tag (useful, for example, to highlight the tag opening the header <tt>&amp;ltH1&amp;gt;</tt>).</li>
</ul>

<p>Settings for spacing <b>after</b> the tag:</p><ul>
	<li><b> no spacing</b> - the next code element (text or tag) will be placed immediately after the current tag. Exceptionally, the next tag may be placed on a new line, if its formatting options are so set. Such setting makes the code more compact, but at the same time less readable.</li>
	<li><b> from new line </b> - the next tag or text will be placed on a new line. Makes the code easier to read.</li>
	<li><b> add blank lines </b> - allows you to specify the number of blank lines to be inserted after the tag (useful for example to highlight the tag closing the header <tt> &amp; lt / H1 &gt; </tt> ).</li>
</ul>




<h2>Other settings for this formatting</h2>

<p><b> Indent the contents of this tag </b> <br>
 Check this option if you want the current tag to be indented according to the global settings of the formatting style.</p>

<p><b> Keep contents of this tag </b> <br>
 Select this option if you want to keep the contents of the current tag exactly as it is in the document.</p>


<p><b> Remove this tag from document </b> <br>
 Select this switch if you want the current tag to be removed from the document during formatting. This is useful for removing e.g. tags that are not properly supported by browsers (e.g. <tt>&amp;ltBLINK&amp;gt; </tt> only supported by Netscape browsers)</p><ul>
	<li><b>Remove only closing tag</b> - Select this option to remove only the closing tags. This is useful for removing closing tags that are not required, but may optionally occur (e.g. <tt>&amp;lt/P&amp;gt;</tt> at the end of a paragraph, <tt>&amp;lt;/LI&amp;gt;</tt> at the end of a list item, etc.). This option is active only when the <b>Remove this tag from document</b> switch is selected.</li>
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
	<li><a href="formatter_general.php"> Using the formatting features </a></li><li><a href="settings_codeinsight_formatter.php">Formatting settings</a></li><li><a href="formatter_stylesheets.php">Formatting settings for CSS style sheets</a></li><li><a href="formatter_javascript.php">JavaScript formatting settings</a></li><li><a href="formatter_php.php">Formatting settings for PHP scripts</a></li><li><a href="formatter_tidy.php">Formatting settings for Tidy</a></li><li><a href="tool_htmlcompressor.php">HTML Compressor</a></li></ul>
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