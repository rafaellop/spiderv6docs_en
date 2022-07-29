<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<!-- nazwa strony pomocy -->
<title>Support for CSS</title>

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
<h1>Support for CSS</h1>

<!-- tre&#347;&#263; pomocy -->




<p> <i>Cascading Style Sheets</i>(CSS) are the recommended way to format text. You can also use them to define the appearance and behaviour of other page elements, such as background images, sounds, the appearance of buttons and form fields, and much more.</p>

<p>Spider supports the creation of pages using CSS, which consists of the following functions and tools:</p><ul>
   <li><a href="main_tabs_inspector_css.php"> "CSS Inspector" tab on the left resource panel </a></li><li><a href="coding_css_syntax.php">Syntax highlighting</a></li>
   <li><a href="coding_css_codeinsight.php">Dynamic code</a></li>
   <li><a href="main_tabs_navigator.php#css">CSS navigator</a></li>
   <li><a href="coding_css_help.php">Context-sensitive help for CSS on the bottom panel</a></li><li><a href="coding_css_macrocodes.php">Document templates using CSS</a></li>
   <li><a href="coding_css_formatting.php">Formatting style sheets code</a></li>
</ul>

<p>Many tag editing tools also have options to <a href="tool_style_editor.php">create CSS styles</a> and <a href="tool_style_class.php">use classes</a>.</p>


<h2>Create a simple CSS selector in the current document</h2>

<p><b>Create a new, empty selector</b><br></p><p>To create a simple CSS sheet, activate the <a href="main_tabs_inspector_css.php">CSS Inspector</a> tab (standard shortcut <tt>Ctrl+3</tt>). Then use the <b>New Selector</b> command . This will create a style section in the current document and the skeleton of an empty selector without a name.</p>

<p>Now you need to give a name to the selector - it can be, for example, the name of the tag - <tt>DIV</tt>. Type it before the curly brace <tt><b>{</b></tt>. In this way, we will make sure that all <tt>div</tt> tags in the document use this style.</p>

<p><b>How do I create and edit style properties?</b></p>

<p>The next most important step is to create a style. Place the cursor between <tt><b>{</b></tt> and <tt><b>}</b></tt> and go to the CSS inspector. In the upper part of the tab, the name of the <tt>DIV</tt> selector will appear in the list on the right.</p>

<p>Previously, you were just setting up a document to create a style - at this point, you start to really style for the selected tag. A style is created by assigning appropriate values to the style properties that are listed below the menu. These properties are grouped into categories by default, but you can change this (<a href="main_tabs_inspector_css.php">more in CSS Inspector help</a>).</p>

<p>To make it easier to enter values for CSS properties, use the dedicated tools for selecting fonts, colors etc. You can open them using the buttons to the right of the field for entering values. In each such field you will find the corresponding tools adapted to the values required in it.</p>

<p><b>Creating a style for a new selector</b><br></p><p>To set font formatting, expand the <b>Font</b> category and set the appropriate style properties, such as:</p><ul>
   <li><b>font family</b>: <tt>Arial, Tahoma, sans-serif</tt> <br>(typeface - you can use the <a href="tool_fonts_select.php">Select fonts</a> window)</li>
   <li><b>font-size</b>: <tt>9pt</tt> <br>(font-size - see list of predefined values and list of adjustable options)</li>
</ul>You can set a text color (burgundy in this example) in the <b>Colors and Background</b> category:<ul>
 <li><b>color</b>: <tt>#800000</tt> <br>(use the window <a href="tool_colorpalette.php">Paleta colors</a>)</li>
</ul>



<p>You can set the text layout options in the <b>Text</b> category:</p><ul>
 <li><b>text-align</b>: <tt>justify</tt> <br>(text alignment - a list with available values will help)</li>
 <li><b>text-indent</b> : <tt>2em</tt><br>(the dialog for selecting a number with a unit will help)</li>
</ul>


<p><b>Summary</b></p>

<p>Above is a simple (but probably the most commonly used) example of using CSS stylesheets. As you browse through the contents of the property list, you will find many more options for formatting text and other page elements. You can affect the appearance of tables, scroll bars (currently only in Internet Explorer), the zoom, position and visibility of items, and much, much more. For example, it is possible to use different styles on the screen and for printing.</p>

<p>By using scripting languages simultaneously with HTML and CSS, you will get the new DHTML (Dynamic HTML) technology, which offers almost unlimited freedom in website design.</p>

<p>CSS property names in many cases explain their purpose themselves. However, if you don't know what a property is used for, move the mouse cursor over the property name and wait a moment - a hint will appear in a balloon.</p>


<h2>How to use external CSS files</h2>

<p>The most convenient way to create stylesheets is to create a separate file in which all selectors, classes, etc. used in documents will be saved. Thanks to this, any changes to this file will take effect in all documents to which they are attached.</p>
<p>Attaching a * .css file to a document is very easy - just drag it from the file list to the document opened in the editor. Spider will automatically create and paste the appropriate code into the document. This way you can link to * .css files in HTML documents (the <tt>&amp;lt;link&amp;gt;</tt> tag will be created) and you can link several CSS files together (the <tt>@import</tt>).</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="syntax.php">Syntax highlighting in Spider</a></li><li><a href="main_editor_codeinsight.php">Dynamic code</a></li>
   <li><a href="main_tabs_navigator.php">Navigator" tab</a></li>
   <li><a href="main_tabs_macrocodes.php">Templates tab</a></li>
   <li><a href="settings_codeinsight.php">Program Settings - Facilitations, Dynamic Attributes, Other</a></li><li><a href="formatter_general.php">Source code formatting</a> - <a href="formatter_stylesheets.php">Settings for CSS</a></li>
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