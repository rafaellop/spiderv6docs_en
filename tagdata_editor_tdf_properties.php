<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.0.0.0)">

<!-- nazwa strony pomocy -->
<title>TDF Editor - Tag Category Properties</title>

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
<h1>TDF Editor - Tag Category Properties</h1>







<p>With this tool, you can specify the basic properties of the markup category (markup language) currently being edited in the Markup <a href="tagdata_editor_tdf.php">Language Definition File Editor</a>. The following settings are available:</p><p><b>Category name</b><br>
The name of the category (language) whose tag definition you are editing (preview only, without the ability to change it - the corresponding command in the TDF editor is used for this).</p><p><b>Language description</b><br>
Description of the language whose tag definition is contained in the selected category.</p><p><b>It is an XML-type language</b><br>
This option makes tags case-sensitive. For example, in XHTML, all tag names must be lowercase. It also changes the behavior of the program in certain situations, such as when automatically closing tags. If this option is disabled, the case will depend on the program settings and the settings of the current project.</p><p><b>Path to documentation</b><br>
The name of the directory where the documentation files for this language are located. This directory must be a subdirectory of the Docs folder in the root directory of Spider (by default <tt>C:\Program Files (x86)\CREAM.SOFTWARE\SpiderEditor</tt>).</p><p><b>Matching DOCTYPE</b><br>
A list containing Document Type Declarations (DOCTYPE). Thanks to them it is possible to verify the correctness of the syntax of this document. You can add Doctype to the list and remove them using the buttons next to them.</p><p><b>Matching NAMESPACES</b><br>
Locations of documents with namespace definition (NAMESPACE). They make it possible to verify the correct syntax of the document. You can add Namespace to the list and remove it using the buttons next to it.

<a name="nadrzedny"></a></p><p><b>Recognize a tag category based on the document's parent tag</b><br>
Checking this switch will cause Spider to recognize documents written in this language not only by the DOCTYPE declaration or namespace identifier used, but also by the name of the document's main (parent) markup. This method is taken into account as a last resort if attempts to recognize by DOCTYPE and namespace fail.<br>
This is useful for languages that do not have a single, fixed DTD or namespace identifier. (e.g., RSS 2.0)</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tagdata_editor_tdf.php">Markup Language Definition File Editor</a></li>
	<li><a href="main_editor_codeinsight.php">Tag completion</a></li><li><a href="settings_codeinsight_tags.php">Dynamic Code Settings</a></li></ul>
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