<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Formatting - Settings for Tidy</title>

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
<h1>Formatting - Settings for Tidy</h1>

<!-- tre&#347;&#263; pomocy -->
<p>In this window you can set formatting options for markup languages (like HTML, XML) that will be passed as parameters to the external <a href="https://tidy.sourceforge.net/" target="_blank">Tidy(r)</a> program. It is also possible to set formatting options for script languages.</p>

<p>You can bring up the window using the <b>Add Format</b>ting Profile command, or <b>Modify Formatting Profile</b> command in the menu next to the <b>Tidy(r) Predefined Format</b> ting Settings list in the <a href="settings_codeinsight_formatter.php">Program Settings - Formatting Source Code</a> window.</p>The window is divided into three tabs:<ul>
   <li><b>Code appearance after formatting</b></li>
   <li><b>Syntax corrections introduced</b></li>
   <li><b>Document language settings</b></li>
</ul>



<h2>Code appearance after formatting</h2>

<p>The options of this tab allow for general settings regarding the appearance of the code after formatting, setting indentation, capitalization, etc.</p>

<p><b> Breaking lines ... on a column </b> <br>
 Check this option if you want lines to be broken in a specific column. Then select the column in which to break the line.</p>

<p><b>Wrap attribute values</b><br>
Check this option to allow line breaking between the name and the tag's attribute value if the value does not fit on a single line (exceeds the line length specified above). The string inside the attribute value will not be changed, i.e. no end-of-line character will be inserted there, even if the line does not fit into the line length specified above.</p>

<p><b>Wrap strings in scripts</b><br>
Check this option if you want to wrap lines in character strings used in scripts. If the character strings must remain unchanged, do not check this option!</p>

<p><b>Wrap lines in ASP scripts (&amp;lt;% ... %&amp;gt;)</b><br>
Select this option if you want to wrap lines in ASP scripts (in the block between <tt>&amp;lt;%</tt> and <tt>%&amp;gt;</tt>).</p>

<p><b>Wrap lines in JSTE (&amp;lt;# ... #&amp;gt;)</b><br>
Select this option if you want to wrap lines in JSTE (in the block between <tt>&amp;lt;#</tt> and <tt> #&amp;gt;</tt>).</p>

<p><b>Wrap lines in PHP</b> <br>scripts
Select this option if you want to wrap lines in PHP scripts (in the block between <tt>&amp;lt;?</tt> and <tt>?&amp;gt;</tt>).</p>

<p><b> Wrap the line before the tag &amp;lt;BR&amp;gt; </b> <br>
 Check this option if you want the <tt> &amp;lt;BR&amp;gt; </tt> (HTML line break tag) a line break was inserted.</p>

<p><b>Each attribute in a new line</b><br>
Check this option if you want each tag attribute to be placed on a new line.</p><b>Indents</b><br>
Select whether and which line indentations to set in the document:<ul>
   <li><b>yes</b></li>
   <li><b>automatically</b></li>
   <li><b>no</b></li>
</ul>

<p><b>Indentation</b><br>
Select the depth of a single indentation (number of spaces).</p>

<p><b>Tabulation</b><br>
Set the number of spaces that make up one tab character.</p>

<p><b>Tags in capital letters</b><br>
Check this switch to change the case of all letters in tag names to uppercase.</p>

<p><b>Attributes in capital letters</b><br>
Check this switch to change the case of all letters in attribute names to uppercase.</p>



<h2>Syntax corrections introduced</h2>

<p>In this tab, you can set detailed options for formatting tags.</p>

<p><b>Delete blank paragraphs (<tt>&amp;lt;P&amp;gt; &amp;lt;/P&amp;gt;</tt>)</b><br>
Select this option to delete all empty paragraphs. They are most often inserted by WYSIWYG editors</p>

<p><b> Wrap the loosely written text with paragraph tags ( <tt> &amp;lt;P&amp;gt; &amp;lt;/P&amp;gt; </tt> ) </b> <br>
 Select this option if you want text placed directly in the document (but not in a table, etc.) to be included in paragraph tags ( <tt> &amp;lt;P&amp;gt; &amp;lt;/P&amp;gt; </tt> ).</p><b> Enclose text inside other tags with paragraph tags </b> <br>
 Select this option if you want text placed between other tags (such as a table, etc.) to be included in paragraph tags ( <tt> &amp;lt;P&amp;gt; &amp;lt;/P&amp;gt; </tt> ).<p><b> Replace &amp;lt;B&amp;gt; and &amp;lt;I&amp;gt; with &amp;lt;STRONG&amp;gt; and &amp;lt;EM&amp;gt; </b>
 Check this option if you want to replace the formatting-only tags with the tags that define the significance (weight, type) of the text in question:</p><ul>
   <li><tt>&amp;lt;B&amp;gt;</tt> with <tt>&amp;lt;STRONG&amp;gt;</tt></li>
   <li><tt>&amp;lt;I&amp;gt;</tt> with <tt>&amp;lt;EM&amp;gt;</tt></li>
</ul>


<p><b>Replace outdated formatting with styles</b><br>
Check this option if you want tags marked as obsolete in the HTML specification to be replaced by CSS styles.</p>

<p><b>Remove &amp;lt;FONT&amp;gt; tags</b><br>
Check this option to remove <tt>&amp;lt;FONT&amp;gt;</tt> tags from your document. These tags are marked as<i>deprecated</i> in the HTML specification.</p>

<p><b>Remove additional Word metainformation</b><br>
Check this option if you want the program to remove additional information placed in your document when you export text from MS Word to an HTML document. These meta-information are usually not necessary and cause significant degradation in the readability of HTML code.</p><p><b>Prefer numeric entities</b><br>
Check this option to allow entities (i.e. special strings that cause the browser to display the corresponding symbol) other than those embedded in HTML(&amp;amp;, &amp;lt;, &amp;gt; and &amp;quot;) to be converted from text to numeric form (e.g. a text entity for a 1 character is <tt>&amp;frac12;</tt> and its form is <tt>&amp;#189;</tt>;). Note that only entities conforming to the declared <tt>DOCTYPE</tt>will be used</p>

<p><b>Write non-breakable spaces as entities</b><br>
Select this option to replace unbreakable (hard) spaces with the &amp;nbsp; entity.</p>

<p><b>Replace " and ' with entities</b><br>
Select this option to replace quotation marks in the text with entities (&amp;quot; and &amp;#39; respectively)</p>

<p><b>Replace &amp; with entities</b><br>
Select this option to replace the &amp; characters in the text with the &amp; entity.</p>



<p><b>Replace / with / in URLs</b><br>
Check this option to replace the <tt>\</tt> character in URLs with <tt>/</tt>. The <tt>\</tt> character is used in MS Windows and inserted by programs when typing relative paths.</p>

<p><b> Don't change whitespace in attributes </b> <br>
 Check this option to leave blank spaces (spaces, line breaks) in tag attributes exactly the same.</p>

<p><b> Correct invalid comments </b> <br>
 Check this option to correct any invalid comments that contain illegal characters, e.g. a comment in a comment, etc.</p>

<p><b>Default image description (ALT) in &amp;lt;IMG&amp;gt;</b><br>
Enter the text you want to include in the graphic description in this field (if it is not typed in the tag).</p>




<h2>Document language settings</h2>

<p>Here you can set options that determine the type of document to be formatted using the current formatting style.</p><b>Parsing instructions require ?&amp;gt;</b><br>
Select this option if the program should convert delimiters from "<tt>&amp;gt;</tt>" to the required form "<tt>?&amp;gt;</tt>" into <tt>processing instructions</tt>.<p><b>Input document in XML</b><br>
Check this option if the current document is an XML document.</p>

<p><b>Output document in XML</b><br>
Check this option if you want the document to be formatted according to the XML specification.</p>

<p><b>Output document in XHTML</b><br>
Check this option if you want the document to be formatted according to the XHTML specification</p>

<p><b>Add &amp;lt;?xml declaration?&amp;gt;</b><br>
Select this option if you want because you have inserted an XML version declaration in your XML or XHTML documents into the document.</p>

<p><b>Add XML processing instructions</b><br>
Check this option if you want to add<i>processing</i> instructions to your XML document.</p>

<p><b>Skip optional closing tags</b> <br>
Select this option if you want to omit optional closing tags (such as <tt>&amp;lt;/LI&amp;gt;</tt>, <tt>&amp;lt;/P&amp;gt;</tt>).</p>

<p><b>Add xml:space="preserve" when needed</b><br>
Check this option if you want the <tt>xml:space="preserve"</tt> construct to be inserted into the document when required by the specification.</p>

<p><b>Document type</b><br>
Select from the list the type of document (DOCTYPE) that is to be generated by the program, or define your own (enter in the field below).</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="formatter_general.php"> Using the formatting features </a></li>
   <li><a href="settings_codeinsight_formatter.php">Formatting settings</a></li>
   <li><a href="formatter_markuplangs.php"> Settings for formatting tag documents </a></li>
   <li><a href="formatter_javascript.php">JavaScript formatting settings</a></li>
   <li><a href="formatter_php.php">Formatting settings for PHP scripts</a></li>
   <li><a href="formatter_stylesheets.php"> CSS formatting settings </a></li>
   <li><a href="tool_htmlcompressor.php">HTML Compressor</a></li>
   <li><a href="https://tidy.sourceforge.net/docs/quickref.php" target="_blank">Description of TIDY configuration options (requires Internet connection, opens in new window)</a></li>
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
