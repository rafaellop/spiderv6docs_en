<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Formatting - Settings for PHP</title>
<style type="text/css">
<!--

.scriptsymbol {
font-weight: bold;
color: #FF0000;
}

.scriptvarname {
color: #0000FF;
}

.scriptcomment {
color: #888888;
font-style: italic;
}

.scriptkeyword {
font-weight: bold;
color: #008000;
}

-->
</style>
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
<h1>Formatting - Settings for PHP</h1>





<!-- tre&#347;&#263; pomocy -->
<p>In this window you can set formatting options for PHP scripts</p>

<p>The PHP settings window can be called from the <a href="formatter_general.php#php">Formatting Source Code</a> window, or from the <a href="settings_codeinsight_formatter.php">program settings window</a>.</p>


<h2>Block settings</h2>


<p>Choose how the code is formatted:</p><b>Opening brackets in a new line</b><br>
Select this option if you want the curly brackets marking the beginning of the function body to always be placed on a new line, as in the example below:<pre>
<b>function</b> function_name<b>()</b>
<b>{</b>
   // function contents
<b>}</b>
</pre><b>Opening brackets at the end of the line</b><br>
Select this option if you want the curly brackets marking the beginning of the function body to be placed at the end of the line where the function name is, as in the example below:<pre>
<b>function</b> function_name<b>() {</b>
   // function contents
<b>}</b>
</pre>


<p><b>Single indent size</b><br>
 Select how many characters should be used for one line indentation.</p>

<p><b>Use tabs instead of spaces</b><br>
Check if you want to use a tab character for indentation instead of spaces.</p>

<p><b>Do not indent blank lines</b><br>
Check if indentation is not to be created in empty lines.</p>






<h2>Line spacing</h2>

<p>In this section you can define whether to add extra blank lines between individual functions and classes. This increases the readability of the code.</p>

<p><b>Blank lines between functions</b><br>
Select this option if you want additional blank lines to be inserted between successive function declarations.</p>

<p><b>Blank lines between classes</b><br>
Select this option if you want additional blank lines to be inserted between successive class declarations.</p>

<p><b>Move instructions after semicolon to a new line</b><br>
Check this option to break up instructions that are on one line (separated by semicolons) into multiple lines.</p><p><b>Closing a block on a separate line</b><br>
Check this option to enable moving constructions following <tt>}</tt> to a new line, e.g. in the case of <tt>} else {</tt>.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="formatter_general.php">Using the formatting function</a></li>
   <li><a href="settings_codeinsight_formatter.php">Formatting settings</a></li>
   <li><a href="formatter_markuplangs.php">Formatting settings for tag documents</a></li>
   <li><a href="formatter_stylesheets.php">Formatting settings for CSS style sheets</a></li>
   <li><a href="formatter_javascript.php">JustScript formatting settings</a></li>
   <li><a href="formatter_tidy.php">Settings for Tidy formatting</a></li>
   <li><a href="tool_htmlcompressor.php">HTML Compressor</a></li><li><a href="coding_php.php">Using PHP in Spider </a></li></ul>
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