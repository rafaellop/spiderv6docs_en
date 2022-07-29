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
<title>Program Settings - Syntax Coloring - Highlighting scheme properties</title>

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
<h1>Program Settings - Syntax Coloring - Highlighting scheme properties</h1>

<!-- tre&#347;&#263; pomocy -->

<p>The 'Coloring Scheme Properties' dialog allows you to make changes to the coloring scheme settings. You can adjust the colors and styles of the text as well as the file name extensions associated with the coloring scheme.</p>

<p>Unlike the<a href="syntax_editor.php">'Highlighting Scheme Editor</a>', changes to the color and text style settings made in this window do not affect the scheme itself and it is possible to restore the default settings of a particular scheme.</p>

<p>The window is divided into three main parts - 'Scheme Extensions', 'Styles Coloring Settings' and 'Coloring Preview Window'.</p>

<h2>Extensions assigned to the scheme</h2>Each coloring scheme can have file name extensions assigned to it by default.<p><b>Note!</b> <br>
Spider allows you to change the coloring scheme as you work. To do this, use the 'Syntax highlighting scheme selection' button on the 'Editor mini bar' (on the left side of the editor window). If the coloring scheme has been changed during the work, it will be remembered for this document and applied the next time you open it.</p><b>Extensions assigned to the scheme</b><br>
In this field you can enter file name extensions for which the selected coloring scheme will be the default one. The extensions should be entered in the form <tt>*.extension1;*.extension2</tt>, i.e. for HTML documents, for example, they could be: <tt>*.html;*.htm</tt>. The asterisk before the dot stands for any string, so the file can have any name + extension as defined here.<p><b>Type of coloring scheme</b><br>
The type of coloring scheme determines the group to which the selected scheme belongs. Grouping coloring schemes makes it easier to manage schemes and also affects their presentation in the list of coloring schemes in the main program window. Schemes can be displayed in groups or individually depending on the setting of the <b>Display grouped</b> schemes option in the <a href="settings_editor_syntax.php">Program Settings - Syntax</a> coloring window.</p>

<h2>Styles coloring settings</h2>

<p><b>List of styles</b><br>
Select the coloring style you wish to make changes to from the list. Highlighting schemes have style names structured in such a way that it is as easy as possible to see what a style is assigned to in the scheme.</p>


<p><b>Text properties</b><br>
Allows selection of text color and style</p>
<ul>
  <li><b>Text color</b> - allows you to select any color for the text from a list. There are several predefined colors first in the list. Selecting the last item 'Select...' will open a window where any color can be selected.</li>
  <li><b>Text style</b> - you can select the styles to be applied to the text (bold, italic, underline, strike through)</li>
</ul><b>Background color</b><ul>
  <li><b>default</b> - select this option if you want the background color to remain the default (defined in the system). This is the recommended option.</li>
  <li><b>selected</b> - allows any background color to be selected from a list. A number of predefined colors are listed first. Selecting the last item 'Select...' will open a window where any color can be selected.</li>
</ul>


<h2>Coloring preview window</h2>The Coloring Preview lets you keep track of changes to your coloring style. It is also possible to modify the preview text. To do this, use the menu on the right.<p><b>Use the default preview text</b><br>
Click to restore the preview text saved in the coloring scheme.</p>

<p><b>Use the current document as preview text</b><br>
Click to insert the document currently open in the editor into the preview pane.</p>

<p><b>Use the indicated document as preview text</b><br>
Click to open a document from disk, the contents of which will be entered as preview text.</p>

<p><b>Allow modification of the preview text</b><br>
Click to allow modifications to the preview text. These modifications will not be saved when the window is closed.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="settings.php#settingslist">Other settings</a></li><li><a href="settings_editor_syntax.php"> Program Settings - Syntax Highlighting</a></li><li><a href="syntax_editor.php">Highlighting scheme editor</a></li><li><a href="syntax.php">General about syntax coloring in Spider</a></li><li>
</li></ul>
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