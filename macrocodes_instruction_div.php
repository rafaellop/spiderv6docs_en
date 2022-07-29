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
<title>Creating template - step by step instructions. DIV tag with attributes.</title>

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
<h1>Creating template - step by step instructions. DIV tag with attributes.</h1>

<!-- tre&#347;&#263; pomocy -->

<p>To create macro code, go to the Template tab in the "Resources panel on the left". If the panel is not visible, you can enable it in the Display menu. Another way is to use a keyboard shortcut (F9 by default), or to use the "Show or hide left panel" icon on the main toolbar.</p>
<p>You can also open and go directly to the Templates tab using the keyboard shortcut Ctrl+4</p>

<p>In the Templates tab, select (or create) a category in which to place the new template. Grouping templates into categories allows you to keep your templates organized.</p>

<p>Then click the "Add new template" icon.</p>



<h2>Preparations</h2>

<p>Before proceeding, it is a good idea to think about what the template will do. This will allow you to prepare it optimally. In this case, the assumptions will be as follows:</p><ul>
  <li>if used when text is selected in the editor, the text is to be enclosed on the left and right by <tt>  </tt> and <tt>  </tt> - the left and right sides of the macro will be used</li>
  <li>the macro code is to allow for the following attributes: <tt> id </tt> and <tt> class </tt> - variables will be used</li>
  <li>Attributes do not necessarily have to be used (eg class will not always be needed) - they will be placed in blocks</li>
</ul>

<p>After opening the <a href="macrocodes_editor.php"> Macro Editor </a> , choose a name for it. In this case, " <tt> DIV + id + class </tt> " will be best</p>

<p>The template type can remain the default - "Just template".</p>




<h2>Create a tag skeleton</h2>

<p>It is most convenient to create the tag skeleton in the editor using the appropriate Spider tools for each tag. However, for an example as simple as the template you are currently creating, you can type the content manually.</p>

<p>The assumptions imply that if there was selected text in the editor when the macro code was inserted, it should be covered by the <tt><div> (left side) and <tt></tt></div></tt> (right side) tags. To achieve this, type <tt><div> in the "Left side of the template" tab and <tt></tt></div></tt> in the "Right side of the template" tab. The center will remain empty.</p>

<p>The next step will be to insert attributes. To make attributes optional to insert, use blocks. However, in order to have a view of the final, complete view of the template at the beginning of the work, it is most convenient to enter the content in the markup in the "Left side of the template" tab. The text will be moved to the sides later.</p>

<p>After completing the tag with the attributes will, the text in the "Left side of macro code" tab will look like this:<br><tt>&amp;lt;div class="" id=""&amp;gt;</tt></p>




<h2>Use of variables</h2>

<p>Now you need to fill in the attribute values that are currently empty. You can enter them there directly, but the best option is to use variables for this purpose - when using the macro code, you will be able to adjust the attribute values to the current needs.</p>

<p>The first thing to do is create a variable for the value of the <tt> class </tt> attribute. To create a variable, click the "Add new variable" icon in the menu above the template content editing window.</p>
<ul>
  <li>In the "Variable Name" field, enter a name (for example, "Class Name").</li>
  <li>The "Hidden Variable" option will remain unchecked (a user using the macro code must see it in the inspector to change its value).</li>
  <li>Variable type - since this is a <tt>class</tt> argument, select the "CSS class name and list" type. Selecting this type will automatically populate the list if there is an external CSS stylesheet inserted or attached in the document that the user wants to insert the template into.</li>
  <li>Finally, you can fill in the "Default class name" field. This will cause this value to be included in the list of classes, even if there is no such class in the CSS stylesheet.</li>
</ul>

<p>Do the same for the <tt>id</tt> attribute value. The only difference will be the choice of the variable type - this time "Value type text".</p>

<p>Once a variable has been created, it will appear in the list of variables. To insert it into the body of the macro code, place the cursor between the quotes of the value and click the "Insert selected variable" icon.</p>




<h2>Move tag attributes to blocks</h2>

<p>When the attributes along with the variables are ready, they can be moved into blocks.</p>

<p>To move content into a block, you must first cut it and place it on the clipboard. This can be done with the context menu (right-click on the selected text), or with the standard shortcut Ctrl+X. It is best to cut the text together with a space before it - then when inserting a block it will always be separated with a space from the preceding tag name or content of another block.</p>

<p>Then create a new block - using the "Add new block" icon. In the "Edit template Block" window, give the block a name (e.g. "CLASS Attribute", or "ID Attribute") and paste the copied text (using the context menu or Ctrl+V shortcut).</p>

<p>After creating the block, insert its callout in place of the cut attribute. To insert a block in a tag, place the cursor in the appropriate place in the tag (where the text for the block was cut from) and click the "Insert selected block" icon.</p>

<p>After inserting block calls into the content of the left part of the template, it should be in the form:<br><tt>&amp;lt;DIV%pblock%Class%pblock%%pblock%Attribute ID%pblock%&amp;gt;</tt></p>



<h2>Now you can close the window with the OK button - the template is ready!</h2>

<p>You will be able to use the template using the options:</p><ul>
  <li><b>"Insert template at cursor position</b>"</li>
  <li><b>"Insert template without center</b>"</li>
</ul>In both cases, the macro code will be inserted at the position of the cursor. If any text was selected in the editor, it will be enclosed from left to right by the appropriate part of the macro code.</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="settings_macrocodes.php">Program Settings - Templates.</a></li><li><a href="macrocodes_editor.php">Template Editor.</a></li><li><a href="macrocodes_instruction.php">Creating macro code - step by step instructions - introduction.</a></li><li><a href="main_tabs_macrocodes.php">Template tab</a></li><li><a href="macrocodes.php">Templates - general</a></li></ul>
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