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
<title>Creating a template - step by step instruction. LINK tag for attaching CSS sheets.</title>

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
<h1>Creating a template - step by step instruction. LINK tag for attaching CSS sheets.</h1>

<!-- tre&#347;&#263; pomocy -->

<p>To create the template go to the Template tab in the "Resource Panel on the left". If the panel is not visible, you can enable it in the Display menu. Another way is to use the keyboard shortcut (F9 by default), or use the "Display or hide the resource panel on the left" icon on the main toolbar.</p>

<p>You can also open and go directly to the Templates tab using the keyboard shortcut Ctrl+4</p>

<p>In the Templates tab, select (or create) a category in which to place the new template. Grouping templates into categories allows you to keep your templates organized.</p>

<p>Then click the "Add new template" icon.</p>




<h2>Preparations</h2>

<p>Before proceeding, it is a good idea to think about what the template will do. This will allow you to prepare it optimally. In this case, the assumptions will be as follows:</p><ul>
  <li>tag will only be inserted in the HEAD section of the HTML document. All content will be in the "Left section of the template",</li>
  <li>using template is to copy the CSS sheet to the place where the document, where the tag will be inserted, is saved.</li>
</ul>

<p>After opening the <a href="macrocodes_editor.php">Template Editor</a>, choose a name for it. In this case, the best one would be "LINK - attach CSS"</p>

<p>The template type can remain the default - "Just template".</p>

<h2>Create a tag skeleton</h2>

<p>It is most convenient to create the tag skeleton in the editor using the appropriate Spider tools for each tag. However, for an example as simple as the template currently being created, you can type the content manually.</p>

<p>In the "Left part of the template", type the following:<br><b>&amp;lt;link rel="stylesheet" href="" type="text/css" /&amp;gt;</b></p>


<p>At the moment, the path to the file with CSS sheets is not defined yet. To specify it, a variable of the "Link to documents" type will be used.</p>

<h2>Specifying the path to a CSS file using the variable</h2>To create a variable, click on the "Add New Variable" icon in the menu above the template content editing window.<ul>
  <li>In the "Variable name" field, enter a name (e.g. "CSS file").</li>
  <li>The "Hidden variable" option will remain unchecked (a user using the template must see it in the inspector to change the file path).</li>
   <li>Variable type - select the "Link to documents" type. This type of variable (similarly to "Links to graphics") has a special property - the file indicated in such a variable will be copied to the folder where the document, into which the macro code is inserted, is saved.</li>
   <li>Finally, you can fill in the "Default path value" field. You can enter the path manually, or point to the file using the window that opens when you click the "Select default file path" icon (on the right).</li>
</ul>

<p>Once a variable is created, it will appear in the list of variables. To insert it into the macro code content, place the cursor between the quotes of the href attribute value and click the "Insert selected variable" icon.</p>

<p>At this time, the template should be in the form of:<br><b>&amp;lt;link rel="stylesheet" href="%pvar%CSS file%pvar%" type="text/css" /&amp;gt;</b></p>

<h2>Now you can close the window with the OK button - the template is ready!</h2>

<p>You will be able to use the template using the options:</p><ul>
  <li><b>"Insert template at cursor position</b>" - if the cursor is within the HEAD section of the HTML document</li>
  <li><b>"Insert macro code with left part into HEAD</b>". - in this case, the cursor can be placed anywhere - the left part of the template will always be placed in the HEAD section of the HTML document</li>
</ul>

</td>
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