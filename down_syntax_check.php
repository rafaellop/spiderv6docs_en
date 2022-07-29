<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">


<!-- nazwa strony pomocy -->
<title>Bottom Results Panel - Document Syntax Validation</title>

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
<h1>Bottom Results Panel - Document Syntax Validation</h1>


<!-- tre&#347;&#263; pomocy -->

<p>The syntax checker checks documents for compliance with the appropriate specifications and displays comments about the correctness and handling of document elements by browsers. It is possible to verify documents created in markup languages (such as HTML, SVG, WML) and CSS style sheets (CSS sheets can be nested in other documents).</p>

<p>You can run the Syntax Checker tool from <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_verify.php">Code Verification</a> with the Check Syntax command or by running this tool from the <a href="down_panel.php">bottom results panel</a>.</p>

<p>Spider allows you to directly verify documents opened in the editor or using the preview document, which is especially useful when editing documents that are correct only when they are included in other documents, such as files attached in PHP using the <tt>include</tt> command.</p>

<p>The results of syntax checking and browser compatibility are displayed on the Syntax Correctness tab of the lower results panel.</p>

<h2>Syntax validation of markup languages</h2>


<p>Spider allows you to check the syntax of different languages and their versions. These include:</p><ul>
	<li>HTML (HyperText Markup Language) and XHTML</li>
	<li>MathML (Mathematical Markup Language)</li>
	<li>SMIL (Synchronized Multimedia Integration Language)</li>
	<li>SVG (Scalable Vector Graphics)</li>
	<li>WML (Wireless Markup Language)</li>
</ul>

<p>An accurate list of all versions of supported languages can be obtained using the <a href="tagdata_editor_tdf.php">TDF Definition File Editor</a> tool.</p>

<p>Additionally, the program offers the possibility to verify the syntax of markup languages online using the W3C® validator. In this case, the program sends the code of the edited document or its address (if opened directly from the server) to the analyzer script on the W3C® servers. More about the <a href="settings_w3c_html.php"> online markup validator settings </a> .</p>

<p>To run the syntax checker, use the "Check Document Syntax" command from <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_verify.php">Code Validation</a></p>


<h2>CSS validation</h2>

<p>Spider allows you to check for syntax correctness and to check the compatibility of CSS sheets with different browsers.</p>

<p>To run a CSS syntax checker, use the "CSS Syntax Checker" command from the <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_verify.php">Code Validation</a>.</p>

<p>Additionally, the program offers the possibility to verify the CSS syntax online using the W3C® validator. In this case, the program sends the code of the edited document or its address (if opened directly from the server) to the analyzer script on the W3C® servers. More about the <a href="settings_w3c_css.php"> online CSS syntax validator </a> .</p>

<p>To run a cross-browser compatibility check of CSS sheets, use the menu associated with the "CSS Syntax Check" command:</p><ul>
	<li><b>Check CSS syntax</b> - action as if clicking a button - checks for correct CSS syntax,</li>
   <li><b>Check compliance with CSS Level 1.0</b>, <b>...CSS Level 2.0</b>, ...CSS Level <b> 2.1</b>, ...CSS <b> Level 3</b>.0, ...CSS <b> Mobile Profile 1</b>.0, ...CSS <b> TV Profile 1</b>.0 - checks the compliance of style sheets with the specifications of the corresponding CSS versions.</li>
	<li><b> Check Browser Compatibility </b> - checks CSS compatibility with different versions of browsers and displays information about their handling of individual stylesheet elements</li>
</ul>


<p>Compatibility options for CSS elements with browsers can be set in the "CSS definition file editor" window available from: menu "View" - "General program settings" or the drop-down list of the "Program settings" button on " <a href="toolbars_main.php"> Main bar </a> ".</p>

<h2>Syntax validation and CSS compliance results</h2>

<p>The results of the tool are presented in the "Syntax Correctness" tab on the "Results Panel", which appears automatically if there are comments, warnings or information about the document.</p>

<p>The results window contains three columns:</p><ul>
	<li>the left column - the icon with a ball indicates the type of message: <br><table border="0">
			<tr>
				<td></td>
				<td>- Information about incompatibilities with browsers, suggestions for better solutions,</td>
			</tr>
			<tr>
				<td></td>
				<td>- warning of possible problems in some browsers,</td>
			</tr>
			<tr>
				<td></td>
				<td>- syntax error.</td>
			</tr>
			</table></li>
	<li><b>Syntax verification message</b> - information about errors and incompatibilities found</li>
   <li><b> Name of the file </b> where the error was found</li>
	<li><b> Line number </b> - line number the item refers to</li>
</ul>

<p>After clicking on an item in the verification results, the editor will go to the appropriate line and it will be highlighted.</p><p>You can export the report to a file in TXT or HTML format. To do this, use the button on the bar on the right side of the tab.</p><p>If you think that one of the listed elements is not an error, or that this is how you want your document to be, you can remove all errors of that type from the list. To do this, right-click on the element, and then use the<b>"Delete all errors of this type</b>" command from the context menu.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="down_syntax_check_css.php">Options for checking CSS against specifications and browsers</a></li>
   <li><a href="settings_editor_spelling.php#syntaxcheck">Program settings - Syntax check settings</a></li>
   <li><a href="tagdata_editor_tdf.php"> Tag Definition File Editor (TDF) </a></li>
   <li><a href="tagdata_editor_tdf_css.php">CSS definition file editor</a></li>
   <li><a href="down_panel.php#downpanellist">Other tabs of the bottom results panel</a></li>
   <li><a href="main_window_desc.php">Main program window</a></li>
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
