<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.0.0.1)">

<!-- nazwa strony pomocy -->
<title>Program settings - Templates</title>

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
<h1>Program settings - Templates</h1>

<!-- tre&#347;&#263; pomocy -->
<p>The category called "Templates" allows you to customize some aspects of the <a href="macrocodes.php"> templates </a> function. This group includes the following subgroups:</p><h2>Templates</h2>

<p><b>Use the text "Sample Text" when previewing the template without the middle part set</b> <br>
 Select this option if you want sample text to be used when previewing templates without a fixed center portion.</p><p><b>Replace with a path relative to the document path</b><br>
Check this option to ensure that when inserting a template that contains a path to an image file, it is converted into a path relative to the document into which the template is inserted.</p><p><b>Replace only with the file name</b><br>
Check this option to ensure that when inserting a template containing a path to an image file, it is replaced only by the name of the file being inserted.</p><p><b>Copy the image file to the document folder</b><br>
Check this option to cause the image files used in the template to be copied to the folder containing the document into which the template is inserted.</p><p><b>Pressing ENTER on the template calls up the default insert function instead of the command menu</b><br>
By default, pressing ENTER on the template shows a menu from which you can choose how to insert the template. By checking this option you can change this behaviour. ENTER can then act as a call to the default insert function of the template.</p><p><b>Default insertion function for templates of type "document template" always creates a new document</b>
By checking this option, you can cause the default insert function for templates of type "document template" to always be "new document based on template".</p><p><b>Waiting for a template shortcut</b><br>
In this field, enter the time in seconds that the program will wait for the template shortcut to be pressed after the activation shortcut for templates has been pressed. This is because template shortcuts work in two stages. First press the activation shortcut and then, within the time specified here, another shortcut suitable for the template you wish to insert.</p><p><b>Display template preview when template is selected</b><br>
Check this option to enable the display of a template preview when the template is selected.</p><p><b>Remember the method used to insert the template</b><br>
Check this option to ensure that the program remembers the last used template insertion method and also applies it to templates inserted later.</p><h2>Template source preview for templates of the type:</h2>

<p>In this subgroup, select those types of templates for which the default preview will be the source code preview instead of the browser preview.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings.php#settingslist">Other settings</a></li><li><a href="macrocodes.php">Templates - using</a></li></ul>
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