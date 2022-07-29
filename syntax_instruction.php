<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Creating a simple coloring scheme - step by step instruction</title>

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
<h1>Creating a simple coloring scheme - step by step instruction</h1>





<!-- tre&#347;&#263; pomocy -->

<p>Syntax coloring allows for better orientation in the code, makes it much clearer. Spider has several dozen coloring schemes (including various configurations of markup and scripting languages, etc. - it supports virtually all popular languages used for the purposes of www and more).</p>
<p>However, there may be times when you need to create a new coloring scheme for a language for which Spider does not provide a scheme, or you wish to change and adapt an existing scheme to your own preferences and tastes. For this purpose, the 'Coloring Scheme Editor' was created.</p>
<p>By default, the 'Coloring Scheme Editor' is available via the Ctrl + Shift + F8 shortcut, as well as from the 'Program Settings' window and from the 'Tools' menu.</p>

<p>The method of creating a new schema will be presented in the simplified coloring for the HTML language.</p>




<h2 name="prepare">Preparations for creating a coloring scheme</h2>

<p>At the beginning of work, it is best to gather as much information as possible about the language for which the scheme will be created, write down all the keywords.</p>
<p>It will be most convenient if the list of keywords will be a text file, in which each word must be contained on a single line. Individual groups of keywords should be placed in separate files - later it will make the work much easier.</p>

<p>For the sake of simplicity, it is assumed that there will be four groups of HTML keywords, and only a few selected items in each group (so as not to complicate the work at the moment). With more keywords, everything is the same:</p>

<ul>
	<li>HTML tags: <b>DIV</b> , <b>IMG</b> , <b>A</b> - save to tags.txt file</li>
	<li>tag attributes: <b>CLASS</b> , <b>SRC</b> , <b>HREF</b> - save to attrs.txt file</li>
	<li>JavaScript events: <b>onMouseOver</b>, <b>onClick</b> - save to events.txt file</li>
	<li>entities: <b>&amp;&amp;nbsp;</b> - save to entities.txt file</li>
</ul>The information also shows that html code can also contain comments between <b>&amp;lt;!--</b> and <b>-- &amp;gt;</b>.<h2>Create a new coloring scheme</h2>

<p>To create a new coloring scheme, open the editor (by default, the shortcut Ctrl + Shift + F8). If the editor is already open, and you are already editing a scheme in it, use the 'New Coloring Scheme' icon (in the upper left corner).</p>
<p>After creating a new coloring scheme, the basic block named 'Default' is immediately available. It cannot be renamed or deleted. However, you can edit its settings. Successive blocks created when editing the coloring scheme will be nested in this block.</p>



<h2>Entering the preview text</h2>The first step after creating the scheme will be to enter sample text, where you can observe the results of work and possible errors. To do this, click on the 'Enable modification of the preview text' icon (in the lower right corner). Then enter the following HTML code there:<pre>&amp;lt;a href="site.php"&amp;gt;Link&amp;lt;/a&amp;gt;
&amp;lt;div class="classname"&amp;gt;Mark&amp;nbsp;i&amp;nbsp;Josh&amp;lt;/div&amp;gt;
&amp;lt;img src="img.gif" onMouseOver="mouseover()" onClick="click()"&amp;gt;
&amp;lt;!-- Comment --&amp;gt;</pre>



<h2>Create a plain text coloring style</h2>

<p>Plain text is anything that is not otherwise defined in the schema (as a keyword, comment, number, etc.).</p>
<p>In order to create a regular text coloring style, click on the 'Create new style' icon (capital A on a gold background). In the window that appears, enter the name of the style (we will operate with English names - in this case 'Default text', without the quotes), and then, using the available options, specify the background and font color as well as the text style (bold, italic, etc.).</p>
<p>After performing the above-mentioned you can confirm the changes by clicking on 'OK'. If you need to change the coloring style after closing the window, you can do so in the 'Styles' tab in the upper left part of the main Editor window.</p>




<h2>Creating the first list of keywords - entity coloring</h2>

<p>To create a list of keywords, go to the 'Keywords' tab (above the preview pane on the right) and check the 'Enable keyword coloring' option.</p>
<p>Then click on the plus icon on the right side of the 'Collections' window. In the box that appears, enter the name of the collection ('Entities'). Don't close the pop-up!</p>
<p>The next step is to create an entity coloring style. Click on the icon for creating a new coloring style - same as for regular text.</p>
<p>Then confirm the selection of the collection name and its associated coloring style.</p>
<p>Now is the time to enter some keywords that will be included in the 'Entities' collection. You can enter them one by one by clicking on the 'Add a keyword' icon on the right side of the 'Current keyword set' list (plus icon). However, a much more convenient solution (especially when the set of keywords is rich) is to load it from a text file (the icon and the open workbook). Remember that each word in this file must appear on a separate line! For the 'Entities' set, read the words from the entities.txt file you created earlier.</p>




<h2>Changing the settings on the 'Identifiers' tab in order to color the entities correctly</h2>

<p>Unfortunately - despite following the above steps correctly, entities do not want to color correctly. The settings on the 'Identifiers' tab are responsible for this.</p>
<p>In order for entities to be colored correctly, it is necessary to define which characters can appear in the colored words. In this case, in the window opened with the 'First symbol' icon, we enter the character <b>&amp;</b>, 'Other symbols' defines the range of other characters that can occur in the entity (we leave the default <b>0-9A-Z_a-z</b>).</p>
<p>Then specify the suffix (the character at the end of the word) with which the entities will end. Here the suffix is a semicolon <b>;</b>. To add a suffix, select 'with suffixes' in the Special section and tick the 'with suffixes' option at the bottom of the suffix list. Now click on the 'Add ID' icon and type the <b>;</b> in the box.</p>
<p>Once you have done this, you can uncheck the 'Enable identifier coloring' option - there is no need to color non-keyword identifiers.</p>
<p>From now on, entities should color themselves according to the settings set in the style.</p>



<h2>Creation of a new block, definition of separators - HTML tag construction</h2>

<p>In order to be able to color the HTML tag, a new block needs to be created to hold the data needed to color the tag name and content.</p>
<p>To create a block, go to the 'Syntax Blocks' tab (on the left-hand side of the window) and click on the 'Add block' icon (plus icon). In the window that opens, enter a name for the block (in this case 'HTML tag'). If other blocks would already exist in the schema, you can indicate the block in which the new block could be nested.</p>

<p>The first thing to do is to define the block separators in the 'Blocks' tab.</p>

<p>To create a new separator pair, click on the 'Add separators' icon (the plus icon to the right of the 'Block separators' box). These separators will specify the from-whom-to-where settings defined in this block will apply.</p>

<p>At first glance, for HTML markup these could be the characters &amp;lt; (left separator) and &amp;gt; (right separator). However, we will define pairs of separators consisting of characters:</p><ul>
	<li>&amp;lt; + tag name (left), e.g. &amp;lt;DIV</li>
	<li>&amp;gt; right</li>
</ul>This is a better solution, because in this case only valid HTML tags would be colored. If the left separator was only the <p>In the 'Edit Separator' pane there is also an option 'Delimiters are part of block'. Please tick it. This will color the separators according to the rules set in the edited block. If it was unchecked, the separators would be colored according to the rules of the parent block.</p>




<h2>Keywords again - tag names, attributes and events</h2>

<p>The next step will be to create sets of keywords applicable to the HTML markup construction - 'HTML tags', 'HTML attributes', 'HTML events' (tag names, attribute names, event names). Proceed in the same way as creating a set for entities - create a new set, name it and create a coloring style, type or load a set of keywords from a file.</p>

<p>A minor note here - to make the tag name coloring as correct as possible, the tag names (keywords) must be prefixed with &amp;lt; in the 'HTML tags' set. The list of words would thus look like this:<br>
&amp;lt;DIV<br>
&amp;lt;A</p>
<p>Of course, the keywords for the names of attributes and events will already be given normally, without any preceding characters.</p>



<h2>Identifiers - change settings in a tag block</h2>

<p>As in the case of entities, the default settings in Identifiers must also be changed in the tag. However, this time the keywords will mostly start with any letter. Therefore, the settings for 'First Symbol' and Other Symbols' will remain the same. Instead, you need to add the prefix '&amp;lt;' that is used in tag names.</p>
<p>To add a prefix, follow the same procedure for adding a suffix for an entity</p>




<h2>Enabling symbol coloring - tag closing character &amp;gt;</h2>

<p>The &amp;lt; the opening HTML tag is colored correctly (including the tag name). However, the sign &amp;gt;, which marks the end of the tag, remains colored as 'plain text'.</p>

<p>To change this state of affairs, go to the 'Blocks' tab and, after selecting the 'color symbols' option, choose the style for the symbols, which was created for the HTML tags.</p>



<h2>Character strings - coloring of attribute values</h2>

<p>The schema is almost ready. What is still missing is the coloring of the tag attribute values. This will be implemented in the Character Strings tab.</p>

<p>To enable string coloring, click on 'Enable string coloring' under the 'Strings' tab and then select the 'Multi-line strings' option.</p>

<p>You can now define strings. click on the 'Add string' icon (plus icon). This will open a window where you can add start and end characters for the string. These will be the <b>'</b> and <b>"</b> characters (for the beginning and end of the string). In the same window you can create a style to be applied to the strings. You can call it 'String'</p>




<h2>Creation of a new block for html closing tags</h2>

<p>The opening tags are already basically colored correctly. However, the closing tags &amp;lt;/DIV&amp;gt; and &amp;lt;/A&amp;gt; are not colored.</p>

<p>To enable tag coloring for closing tags create a new block, specify as separators strings built according to the scheme '&amp;lt;/+tag name' (left) and '&amp;gt;' (right), for example '&amp;lt;DIV' (left) and '&amp;gt;' (right). When defining separators, you can define symbol coloring in the same tab (as for HTML opening tags)</p>

<p>Then create a keyword set containing closing tags. To do this, go to the 'Keywords' tab. The set in this case will look like this:</p><ul>
	<li>&amp;lt;DIV</li>
	<li>&amp;lt;A</li>
</ul>The question may arise, "Why isn't there a &amp;lt;/IMG tag here"? This is because the HTML specification does not provide a corresponding closing tag for the &amp;lt;IMG tag, so it cannot be colored either. If you enter a &amp;lt;/IMG&amp;gt; tag in your code, it will not be colored correctly. In this way, you can already visually assess the code for errors during development.<p>Coloring the set - same as for HTML tags.</p>

<p>On the identifiers tab, create the prefix '&amp;lt;/' (follow the same steps as for creating the prefix in the previous block).</p>

<p>There are no attributes, events etc. in the closing tag so you do not need to set them.</p>




<h2>Define comment coloring</h2>

<p>The last thing to do (according to simplified assumptions) is to do the coloring of the comments.</p>

<p>To define comment coloring, go to the 'Default' block and then to the 'Comments' tab. On this tab, select 'Enable comment coloring' and then 'Multi-line comments'.</p>

<p>You can now define the start and end marks of the comment. To do this, click on the 'Add comment' icon (plus icon) on the right-hand side of the window. In the window that appears, enter for HTML <b>&amp;lt!--</b> (start) and <b>--&amp;gt;</b> (end). In the same window you can create a new coloring style for comments.</p>




<h2>Using the schema in the editor</h2>

<p>After saving the coloring scheme, it is immediately available in the editor.</p>To use a particular scheme to color the syntax of the current document, use the 'Select syntax coloring scheme' button on the 'Mini editor bar' (on the left-hand side of the editor window).</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="syntax_editor.php">Highlighting scheme editor</a></li>
	<li><a href="settings_editor_syntax.php">Program Settings - Syntax Highlighting</a></li>
	<li><a href="syntax.php">General about syntax coloring in Spider</a></li>
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
