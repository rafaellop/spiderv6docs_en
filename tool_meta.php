<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Document title and META section editor</title>

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
<h1>Tools - Document title and META section editor</h1>

<p>The META section of HTML documents is a very important section, especially in Polish conditions. This is because this section contains more detailed information about the content of the HTML document, such as the code page used for national characters, etc. The META section editor allows you to easily specify the parameters of the META section in a convenient way.</p><p>You launch the META section editor window from the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_structure.php">Structure</a> / <meta> section editor, as well as from the toolbars and the <tt>Shift+Ctrl+M</tt> keyboard shortcut. In addition, it is possible to specify default META section properties for each Project individually. Thus, you will find the corresponding button that launches this window in the <a href="service_properites.php#servicepropertiesdocuments">Project Properties / Documents</a> window. The command icon is shown above.</p><h2>General information</h2>

<p>It should be recalled at this point that the Polish character encoding standard is set by the <tt>ISO-8859-2</tt> standard, which should be followed (you can read more about Polish characters on the <a href="https://www.ogonki.agh.edu.pl/" target="_blank">Polish Ogonkowa Website</a>).</p><p>In addition to information about the code page used, the META section contains data to help search engine projects catalog pages (keywords, page description, document language) and others (author, utility used, etc.). You can also specify whether to store the page in the temporary memory (cache) of browsers.</p><p>The META section editor allows you to quickly define all these parameters. So it is recommended to include a META section in every document you create, even if only with basic data.</p><p>In the editor window you will find several tabs, a description of which is presented below:</p><h2>General Settings tab</h2>

<p>On this tab you have access to the basic and most important settings of the META section. Here you will find the following settings:</p><p><b>Document title</b><br>
Fill in this field if you want to enter a title for the page. It will be placed in the TITLE tag, and will be displayed in the browser's title bar.</p><p><b>Author</b><br>
Check this switch and fill in the box next to it if you want to include author information in the META section of the page.</p><p><b>Language</b><br>
Check this switch and select a language from the box next to it if you want to include information about the language used on the site in the META section of the page.</p><p><b>Email</b>, or author's email address<br>
Check this switch and enter your email address in the box next to it if you want to include the email address of the document's author in the META section of the page.</p><p><b>Website description</b><br>
Check this switch and enter the page description text next to it.</p><p><b>Encoding of characters in the document</b><br>
Check this switch if you want to set the encoding of national characters in the document. You select the encoding with the button next to it.</p><h3>Refreshing</h3>

<p>In this group you will find several settings that allow you to specify how the browser automatically refreshes the page:</p>

<p><b>Refresh the page every</b> certain time<br>
Check this switch if you want to make the page automatically reload after a certain time. You can set the time next to it.</p><p><b>... and go to</b><br>
If you want the page to refresh after the time specified above, but load a different address, check this switch and enter the new address in the field below. In other words, this is how you can create a redirect.</p><h3>Additional</h3>

<p>The last group of tabs contains options for placing additional information in the META section, such as:</p>

<p><b>Add creation date</b><br>
Check this switch if you want to include the date of creation in the META section of the document.</p><p><b>Add program information</b><br>
Check this switch if you want to include information about the program used to create it in the META section.</p><p><b>Do not store in cache</b><br>
Check this switch if you want to block browsers from storing this page in their cache. This causes your page to always be read from the server and never from the browser cache.</p><p><b>Don't show the image toolbar</b><br>
Check this switch if you want to block the showing of the image toolbar for all graphics posted on this page.<br>
By default, this bar appears only in Internet Explorer, for images larger than 130x130 pixels.</p><p><b>Include a transformation</b><br>
Check this switch if you want to define transformation effects when entering or leaving a page. Transformation effects only work in MS Internet Explorer. Transformations are set on the Transformation <a href="#transformation">Effects</a> tab.







<a name="keywords"></a></p><h2>Indexing and keywords</h2>

<p>In order to assist search engines (e.g. <a href="https://www.google.pl" target="_blank">Google</a>) in finding your document on the web, on this tab you can set parameters to help search engine programs identify your document ( <i>robots</i>).</p><p>The group named <b>Method of indexing by robots</b> contains switches that allow you to specify rules for indexing a document by search engine programs. The names of the switches are a good explanation of how they work.</p><p>The group named <b>Keywords</b> allows you to create a list of so-called <i>keywords</i>, which some search engines use to index pages. The list of keywords becomes active when you select the switch in the group name. You can add more keywords, change their order and sort them using the button next to the list.</p><p><b><a href="tool_keywords_generator.php">Keyword generator</a></b><br>
This tool allows you to quickly generate a list of words occurring in the current document.



<a name="transformation"></a></p><h2>Transformation effects</h2>

<p>Transformation effects allow you to specify the special effects displayed when entering or leaving a page. These effects only work in MS Internet Explorer and it is worth remembering. On the tab you will find the following settings:</p><p><b>Transformation effect when entering the site</b><br>
Check this switch if you want to set the transformation effect when entering this page.</p><p><b>List of transformation effects</b><br>
Select a transformation effect from the list and specify its parameters. Then you can make a preview using the button next to it. The list of available effects is as follows:</p><ol>
	<li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li><li><!-- remove --></li></ol>

<p><b>Duration of effect</b><br>
Enter here a value specifying the length of time the effect will last.</p><p><b>Transformation effect when leaving the page</b><br>
Check this switch if you want to set the transformation effect when leaving this page.</p><p><b>List of transformation effects</b><br>
Select a transformation effect from the list and specify its parameters. Then you can make a preview.</p><p><b>Duration of effect</b><br>
Enter here a value specifying the length of time the effect will last.</p><p><b>Preview the effect</b><br>
An area that displays a preview of the selected effect. To see the preview press the button marked with a magnifying glass, which will launch the preview.

<a name="classification"></a></p><h2>Content classification</h2>

<p>This tab allows you to quickly classify your document using RSACi. All you need to do is check the<b>"Include classification</b>" switch and set the appropriate parameters. You set the parameters using the corresponding sliders indicating the level of presence of specific content on the page. In addition, you can indicate the address of the classifier, the address of the classified page, and the validity date of the classification. If, on the other hand, you want the classification to be valid only within this page and not, for example, the entire project, check the<b>"Classification valid only within this page</b>" switch.</p><h2>Assign from a project button</h2>
<p>The "Assign from Project" button allows you to rewrite the META properties set for the specified <a href="services_general.php">project</a> to the META properties pane. Clicking this button expands the list of projects available in Spider. Pointing to a project in the list will transfer its properties (specified in the <a href="service_properites.php#metaindexing">Project Properties</a> window) to the corresponding fields of the "META Section Editor".</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="service_properites.php#metaindexing">Setting up META for projects</a></li><li><a href="tool_quickstart.php">Quick Start Tool</a></li><li><a href="tool_body.php">BODY settings tool</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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