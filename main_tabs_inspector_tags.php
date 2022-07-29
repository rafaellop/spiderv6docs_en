<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>"Tag inspector" tab</title>

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
<h1>"Tag inspector" tab</h1>

<p>The "Tag Inspector" tab is used to create and re-edit tags. Allows you to edit tags in different languages for which you entered data in the <a href="tagdata_editor_tdf.php"> TDF Tag Definition File Editor. </a></p><p>To enable the Tag Inspector tab, use the panel on the left , as well as from the menu under the button shown above or from the <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_view.php"> View </a> . This tab is also opened by using the <tt> F6 </tt> shortcut when the cursor is within the tag.</p><p>Currently, languages are supported according to the following specifications:</p>

<ul>
        <li>HTML 4.01 and 5</li>
        <li>MathML 2.0</li>
   <li>P3P 1.0</li>
        <li>RSS 2.0</li>
        <li>SMIL 1.0</li>
        <li>SVG 1.0</li>
   <li>WML 1.1</li>
   <li>WML 1.2</li>
        <li>WML 1.3</li>
        <li>WML 2.0</li>
   <li>XTHML 1.0</li>
   <li>XTHML 1.1</li>
</ul>

<p>This tab allows you to edit tags that do not have dedicated editing windows.</p>

<p>The tab window is divided into three parts:</p>
<ul>
        <li>Inspector menu</li>
        <li>Attribute and event lists and tag description</li>
        <li>Preview pane</li>
</ul>


<h2>Menu</h2>
<p>The following items are available in the menu:</p>

<p><b>Group</b><br>
Contains a list of the markup languages supported by the inspector. You can edit the settings for the languages using the <a href="tagdata_editor_tdf.php">TDF Markup Definition File Editor</a> If Spider cannot specify which markup language the document is being created in, the default is assumed to be HTML 4.01. If you have selected a different language, lock the selection using the padlock button on the right of the list.</p>

<p><b>Tag</b><br>
Contains a list of all tags of the selected group.</p>

<p><b>Inserting a tag</b><br>
Inserts a new tag with the attributes and events set.</p>

<p><b>Help</b><br>
This opens a help window.</p>



<h2>List of attributes and events</h2>

<p><b>Attributes</b><br>
Contains a list of attributes supported by the selected tag. Next to the attribute name is a field into which you can enter a value. If the value in question is e.g. a color, CSS class, etc., you can use the tool activated by clicking on the button that appears to the right of this field. This will make it easier to enter the correct value for the attribute.</p>

<p><b>Events</b><br>
Contains a list of events handled by the selected tag. In the field to the right, enter the name of the function that will handle the event. You can also create a new function by clicking on the arrow that appears to the right of this field.</p>



<h2>Tag description</h2>

<p>Below the list of attributes and events there is a tag description field containing its description. For example, for the <tt> A </tt> HTML tag, the description will look like this:</p>

<p><tt>Name: <b>A</b><br>
Description: <b>Creating connections between documents</b><br>
Status: <b>Normal</b><br>
Closure: <b>Required</b></tt></p>


<h2>Preview pane</h2>
<p>The preview pane is at the bottom of the tab. It allows you to preview the formatting of the selected tag before inserting it into the document.</p>

<p> <b>Choice of browser used</b><br>
Click to select the browser used for browsing on this tab. As long as it is installed on your system<a href="main_preview_embed.php">(read more about this</a>), you can use the browser:</p><ul>
        <li>MS Internet Explorer</li>
        <li>Mozilla</li>
</ul>


<p>Preview using the current document's style sheets <br>
This button is a toggle that allows you to preview the formatting of the current tag (selected at the top of the tab), using the style sheets created in, or attached to, the current document opened in the editor or attached to it. This way, you can keep an eye on how the element will look in the current document and how the changes you make in the inspector affect the tag.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="main_tabs_general.php">Other tabs</a></li><li><a href="tagdata_editor_tdf.php">Editor of the TDFfiles (tag definition files)</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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