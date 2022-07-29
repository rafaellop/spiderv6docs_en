<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Program settings - Additional facilities</title>

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
<h1>Program settings - Other facilities</h1>


<!-- tre&#347;&#263; pomocy -->
<p>In this category of settings you will find numerous toggles that allow you to enable or disable additional program functions that facilitate the work of creating documents. You will find the following groups of settings here:</p><h2>Tag insertion settings</h2>

<p>This group is fairly general and includes switches that specify, for example, inserting double quotes when inserting a single one or completing the ALT attribute when inserting a graphic. Here is the list of options:</p><p><b>Insert <tt>BR</tt> tag after pressing the enter key</b><br>
Check this option to cause the <tt>BR</tt> tag to be inserted when the ENTER key is pressed.</p><p><b>Do not move to a new line after inserting <tt>BR</tt>.</b><br>
Check this option to ensure that inserting a <tt>BR</tt> tag using the ENTER key or menu commands or keyboard shortcuts does not move the cursor to a new line.</p><p><b>Insert <tt>LI</tt> tag on a new line when Enter on a line with <tt>LI</tt>.</b><br>
Check this option to cause the <tt>LI</tt> tag to be inserted when the ENTER key is pressed on a line where the <tt>LI</tt> tag is already present. This makes creating an enumeration list much easier.</p><p><b>Use <tt>&amp;lt;STRONG&amp;gt;</tt> and <tt>&amp;lt;EM&amp;gt;</tt> tags instead of <tt>&amp;lt;B&amp;gt;</tt> and 
<tt>&amp;lt;I&amp;gt;</tt></b> <br>
Select this option to use highlight marks (<tt>&amp;lt;STRONG&amp;gt;, &amp;lt;EM&amp;gt;</tt>) instead of <tt>&amp;lt;B&amp;gt;</tt> and <tt>&amp;lt;I&amp;gt;</tt> when inserting text formatting tags.</p><p><b>Complete ALT in <tt>&amp;lt;IMG ... &amp;gt;</tt> when inserting</b><br>
Select this option to automatically complete the ALT field for the inserted graphics.</p><p><b>Insert <tt>&amp;lt;META&amp;gt;</tt> and <tt>&amp;lt;BODY&amp;gt;</tt> in place of cursor</b><br>
Check this option to ensure that the program does not attempt to place <tt>META</tt> and <tt>BODY&amp;gt</tt> tags at the beginning of the document, but inserts them at the cursor position.</p><p><b>According to the XML standard, place the content of <tt>&amp;lt;SCRIPT&amp;gt;</tt> and <tt>&amp;lt;STYLE&amp;gt;</tt> tags in the <tt>&amp;lt;![ CDATA [... ]] </tt></b><br>&amp;gt;
Check this option to enable the inclusion of script blocks and stylesheets embedded in HTML documents using the <tt>&amp;lt;![CDATA[</tt>... ]]&gt; XML construct to make the pages you create compliant with the XHTML standard.</p><p><b>Don't hide <tt>&amp;lt;SCRIPT&amp;gt;</tt>.. <tt>&amp;lt;/SCRIPT&amp;gt;</tt></b> <br>
Check this option to ensure that the program does not add comments around scripts that cause scripts to be hidden from browsers without scripting language support.</p><p><b>Don't hide <tt>&amp;lt;STYLE&amp;gt;</tt>.. <tt>&amp;lt;/STYLES&amp;gt;</tt></b> <br>
Check this option to ensure that the program does not add comments around style sheets that cause them to be hidden from browsers without style support.</p><p><b>Cover text with style using the tag</b><br>
This group specifies how the selected text is covered in style. Here you can select your preferred method of encompassing the selected text in style according to either the <tt>&amp;lt;div style="..."&amp;gt; ... &amp;lt;/div&amp;gt;</tt> or using <tt>&amp;lt;<span style="..." ....>&amp;gt;</span></tt></p><h2>Additional editing facilities</h2>

<p>Another group of settings includes options that are important not only when editing tags, but also when editing code written in scripting and CSS languages.</p>


<p><b>Automatically double " ( { [ characters</b><br>
Check this option to have the program automatically convert the quotation mark entered from the keyboard into double inverted commas, and also automatically insert the appropriate enclosing brackets when the opening bracket is entered. In the case of selected text, use of this function will enclose the selected text with a pair of appropriate characters. In addition, this function has a reverse function, i.e. the automatic removal of double brackets and inverted commas when no other text is between them, and the BACKSPACE or DELETE key is pressed with the CTRL key held down at the same time. For example, in the situation (|) where | is the cursor position, pressing DELETE or BACKSPACE removes both the opening and closing characters of the brackets. For inverted commas preceded by \ characters (e.g. in PHP), the entire sequence is removed, i.e. in the example of (|) where | is the cursor, pressing DELETE or BACKSPACE will remove the entire \ sequence. The function also works for the DELETE key in the |() situation and BACKSPACE in the ()| situation, where | is the cursor position. Of course, the function works for all autocomplete characters, i.e. ',',`,(),{},[], and only when autocomplete is enabled.</p><p><b>Double " ( { [ only when selected text</b><br>
Check this option to ensure that opening brackets and inverted commas are converted to double (closing brackets) only when there is selected text in the editor. Otherwise a single character will be inserted.</p><p><b>Double " ( { [ also when adjacent</b><br>
Check this option to ensure that the program automatically converts a " or ( or { or [ character entered from the keyboard into a double equivalent (e.g. {}) also when there is a closing character right next to the inserted character.</p>

<p><b>Update the date in META when saving</b><br>
Check this option to ensure that each time the edited document is saved, the program updates the modification date stored in the META section to the date the document was saved.</p><p><b>Update the "Authoring_tool" field in META</b><br>
Check this option to have the program update the 'Authoring_tool' field in the META section each time the document is saved. This field contains information about the tool used to create the document.</p><p><b>Do not warn when nesting tags</b><br>
By default, the program warns you with a message when you try to place one tag inside another. By disabling this option you will cause the program to no longer report the warning.</p><p><b>Insert HTML 4.0 tags and attributes in lower case</b><br>
Check this option to have the program insert all tags from toolboxes (as well as their attributes) in lowercase.</p><p><b>Insert hexadecimal color codes in capital letters</b><br>
Select this option to capitalize the hexadecimal color codes that you insert.</p><p><b>Insert shortened color codes in CSS if possible</b><br>
Select this option to format the color codes inserted from the color palette in CSS style sheets with short-coded encoding, such as #FFF instead of #FFFFFF, #ABC instead of #AABBCC, and so on.</p>

<p><b>Insert a space before "/&amp;gt;" in XHTML</b><br>
Check this option to have the program insert an extra space before the closing character of tags that do not have a closing tag.</p><p><b>By default, insert \ before special characters</b><br>
Check this option if you want the program to always insert the character '\' before special characters (e.g. ") in tags placed inside scripts by default.</p><p><b>Enclose a tag event value with apostrophes</b><br>
Check this option to include apostrophes in event values (defined in the<a href="tool_events_attributes.php">'Additional events and attributes</a>' window) when creating or re-editing tags using the tag creation tools.



<a name="default_lang"></a></p><h2>Default document language</h2>

<p>Select a language from the list to use by default if automatic recognition based on DOCTYPE or xmlns is not possible.

<a name="span_div"></a></p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="settings_codeinsight.php#settingslistcodeinsight">Other facilitation settings</a></li><li><a href="down_syntax_check.php">Syntax check</a></li></ul>
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