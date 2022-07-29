<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - CSS Selector Wizard</title>

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
<h1>Tools - CSS Selector Wizard</h1>



<p>This wizard allows you to quickly create a CSS selector.</p><p>The tool has a user-friendly interface that guides you by the hand through all the steps of creating a selector - from choosing a tag name, to selecting classes, pseudo-classes and other elements, to presenting and placing the finished selector in the code.</p><p>Each step is a separate page. You can navigate through the boards using the <b>Next</b> and <b>Back</b> buttons.</p><h2>Launching</h2>

<p>You can launch the wizard from the <a href="main_tabs_inspector_css.php">CSS Inspector</a> tab using one of the buttons:</p>


<ul>
	<li><b>Selector Wizard</b> - Starts the Selector Wizard</li>
	<li><b>Selector wizard based on the current</b> one - Launches the wizard of a new empty selector, which will contain the properties set in the list</li>
</ul>


<h2>Tag selection</h2>


<p>The first page allows you to select the tag for which you want the selector to apply.</p>

<p><b>Tag category</b><br>
Select from the list the category (tag language) of tags from which you want to indicate the tag name.</p><p><b>Tag</b><br>
Select from the list the name of the tag for which it wants to create a selector. Further this tag will be called <i>the current</i> one.</p><p>You can edit the categories and tag names using <a href="tagdata_editor_tdf.php">the TDF Tag Definition File Editor</a>.</p>


<p>Of the next three options, only one can be active (they are mutually exclusive):</p>

<p><b>Must be a descendant of the tag</b><br>
Check this option if you want to indicate a tag that will have to be overridden by the current tag for the selector to be applied to it.</p><p><b>Must be a successor of the tag</b><br>
Check this option if you want to indicate a tag that will have to be placed immediately before the current tag (or, in other words, the current tag must follow immediately after this tag).</p><p><b>Must be a child of the tag</b><br>
Check this option if you want to indicate a tag that will have to be a "parent" of the current tag for the selector to be applied to it.

<br><br></p><p><b>Must be the first child of its parent</b><br>
Check this option if the current tag must be the first "child" of its parent for the selector to be applied to it.</p><h2>Setting classes and text elements</h2>

<p>On this page, you can specify whether the selector will refer to elements marked with a class or identifier:</p>

<p><b>the tag must contain class designations (CLASS attribute)</b><br>
Check this switch to add to the list the class names that the current tag must have. Classes are defined in the markup using the <tt>class="class_name"</tt> attribute. You can add and remove class names using the commands next to the class list (below the switch).</p><p><b>the tag must have an identifier (ID attribute)</b><br>
Select this switch if the current tag must have an ID. Then enter the name of the required identifier in the box below the switch.</p><p>You can also narrow the effect of the selector to only the first line, or the first character of the text. To do this, select the selector (you can select at most one of them):</p>
<ul>
	<li><b>selector refers to the first line of text</b> (<tt>:first_line</tt>)</li>
	<li><b>selector refers to the first letter of text</b> (<tt>:first_letter</tt>)</li>
</ul>



<h2>Selection of specific element states</h2>

<p>The options of this page allow you to select specific states of the interface element for which the selector is to apply:</p>

<p><b>mouse cursor must be over the element (<tt>:hover</tt>)</b><br>
Check this switch if you want the selector to apply only when the mouse cursor is over the element. This is most commonly used to change the color of the link text.</p><p><b>element must be active (<tt>:active</tt>)</b><br>
Check this switch if you want the selector to apply only when the mouse button has been pressed over the element and not yet released. In this state, the element is "active".</p><p><b>element must have focus (<tt>:focus</tt>)</b><br>
Check this switch if the element created by the current tag must have focus, that is, it must be currently selected. This is applicable, for example, for form fields, where you can highlight the text field in which the cursor is located with a different color to make it stand out from other form elements.</p><p>If the tag to which the selector applies describes a link in the document, you can also specify the properties of the link:</p>

<ul>
	<li><b>default</b> - a simple link, without a specific state</li>
	<li><b>link not visited</b> - a link that you have not yet visited (there is no entry in the browser history about visiting this address)</li>
	<li><b>visited link</b> - a link that you have visited before (that is, the browser remembers the use of this address)</li>
</ul>


<h2>Define the language, attributes and position of the text in the markup</h2>

<p>In this page you can set the following selector options:</p>

<p><b>The tag must be in the language</b><br>
Check this option to select from the list the language in which the text contained in the markup is written. This language must be selected as the tag argument, e.g. <tt>lang="en"</tt>.</p><p><b>The tag must contain attributes</b><br>
Check this option if the current tag must have attributes. You can add attributes to the list and remove them from the list using the commands on the right side of the list. Clicking on the commands to add an attribute will launch the <a href="tool_new_selector_attributes.php">Attribute Selector</a> tool, which will make it easier for you to provide the required attribute names and values and format the code for the selector accordingly.</p><p>You can also specify whether the selector should refer to text contained from the tag, or to text added before or after the tag:</p>

<ul>
	<li><b>to the text in the tag</b></li>
	<li><b>to text added before the tag</b> (<tt>:before</tt>)</li>
	<li><b>to text added after the tag</b> (<tt>:after</tt>)</li>
</ul>


<h2>Preview, approve selector, insert into document</h2>

<p>The last page provides a preview of the result of the wizard. If the selector looks exactly as you want it to, click <b>END</b>.</p>

<p>If the document into which you are inserting the selector does not have a HEAD section and a STYLE tag, they will be added when you insert the selector.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_tabs_inspector_css.php">CSS Inspector tab </a></li><li><a href="coding_css.php">Support for CSS in Spider</a></li><li><a href="tagdata_editor_tdf_css.php">CSS tag definition file editor</a></li><li><a href="tagdata_editor_tdf.php">TDF tag definition file editor</a></li><li><a href="main_tabs_general.php">Other tabs</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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
