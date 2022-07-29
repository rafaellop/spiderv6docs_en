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
<title>Online tag syntax validation settings</title>

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
<h1>Online tag syntax validation settings</h1>



<!-- tre&#347;&#263; pomocy -->

<p>The online tag syntax validator tool allows you to validate tag documents using the W3C® Syntax Validator available from the W3C website. It is an alternative tool to the Spider's built-in markup document syntax validator. The Spider can send the currently edited document to the validator script, regardless of whether it is opened from the server or locally, and the validation results are displayed on the bottom panel.</p>

<p>The online markup syntax validator settings window can be displayed either through the editor settings window from the<a href="settings_editor_spelling.php#syntaxcheck">"Spelling and syntax verification</a>" tab or automatically whenever the online syntax validation tool is invoked using the command from the <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_verify.php">Code verification</a> / Check syntax online or by launching the tool from <a href="down_panel.php">the bottom results panel</a>.</p>

<p>The validator settings window allows you to define the settings of the verification report. First of all, you can choose between simple or extended mode. In simple mode, the default script settings are used. Extended mode, on the other hand, allows you to define parameters that affect the syntax verification results.</p>

<h2>Parameters of the extended operating mode</h2>

<p><b>Character encoding in the document</b><br>
Here you can force the use of a specific national character encoding in your document. This option can, for example, be used for testing purposes. However, the document should contain appropriate information about the encoding. Otherwise, the validator will complain about its absence.</p>

<p><b>Enforce soft character encoding</b><br>
Enabling this option results in a "smoother" use of the forced character encoding function, selectable via the adjacent list. It is applicable, for example, when the document being analysed does not have an encoding declaration.</p>

<p><b>Document type</b><br>
Here you can force the use of a specific document type schema during syntax analysis. This option can, for example, be used for testing purposes. However, the document should contain the relevant document type information (DOCTYPE). Otherwise, the validator will complain about its absence.</p>

<p><b>Gently enforce document type </b> <br>
Enabling this option results in "gentler" use of the document type enforcement function, selected from the list on the right. It is used, for example, when the analyzed document does not have a DOCTYPE declaration.</p>

<p><b>Display source code</b><br>
Enabling this option displays the source code of the page being analysed and links next to the error descriptions, directing to the exact point in the code where the error occurs.</p>

<p><b>Display document tree</b><br>
Enabling this option generates a document view based on H1 to H6 tags. For correctly created documents, this will result in the correct tree structure being displayed.</p>

<p><b>Verify error pages</b><br>
This function is useful for analysing documents which are opened from the server and sent to the analyser using the mapping function at preview (the link to the page is sent, not the page content). It can be used to analyse error pages, displayed, for example, when the page being analysed cannot be found.</p>

<p><b>Display an extensive report</b><br>
Enabling this option places more explanations and suggestions for the validation results in the analysis results.</p>

<h2>Additional validator settings</h2>The first tab named "Operation mode" contains the option:<p><b>Always display this window before online verification</b><br>
Check this option if you want the online validator settings window to be displayed every time you run the online syntax analysis function.</p>

<p>The second tab allows you to define the properties related to the script handling. Most likely you will not need to change these properties. However, there may be times when a script is modified by W3C employees in such a way that the names of the script handling form fields or the script address are changed. Then the validator tool may stop working properly. However, you will be able to use these fields to set the connection to the script so that it works properly also on other field names or at a different URL.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_menu_tools.php">Main Menu - Tools</a></li><li><a href="down_syntax_check.php">Document syntax validation</a></li><li><a href="settings_w3c_css.php">Settings for online CSS syntax verification</a></li><li><a href="settings_editor_spelling.php#syntaxcheck">Syntax verification settings</a></li></ul>
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