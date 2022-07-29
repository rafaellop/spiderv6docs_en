<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Setting the preview document</title>

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
<h1>Setting the preview document</h1>

<!-- tre&#347;&#263; pomocy -->

<p>Sometimes you are editing a document that is not intended to be viewed directly, but only part of another document. This could be a JavaScript script or a CSS stylesheet that displays nothing by itself, but is attached to the HTML document. Similarly, you can edit a document to be placed in one of the frames of another document. Another common case is when you create a project that uses <i>server-side</i> technology, such as <a href="coding_php.php">PHP</a> . In this case, it is common to combine several mi function files into one document, for example with the <tt>include ()</tt> function.</p>

<p>In any such case, you can set a "preview document" for the edited document. The Spider will display the document set here when you bring up the preview of the edited document. The preview document can be located both on the local computer disk, on the Internet server, etc.</p>

<p><b>For example:</b><br>
You edit a <tt>my_script.js</tt> file, which is attached to the <tt>my_document.html</tt>. When you call the <tt>my_script.js</tt> preview, the <tt>my_dokument.html</tt> will be displayed.</p><p>The preview document can be set for the entire project (in the <a href="service_properites.php">Project Properties</a> window) and can be saved separately for each document in <a href="main_editor_addfiles.php">additional document information</a> .</p>

<p>The preview document has one more, additional meaning, not directly related to viewing documents. The above-described linking of PHP scripts can be done by dragging them to the current script from the list of files. In this case, the Spider will ask whether to create a path to the attached file relative to the preview document. If the current script is just a module located in a subdirectory, and not a standalone script that displays the finished document, it may be more appropriate to create a path to its preview document, because ultimately, it is this document that will create paths when linking scripts by the PHP interpreter.</p>

<h2>Options for the Setting Preview Document window</h2><b>Use the preview document assigned to the project</b> <br>
If you select this option, it will display the document indicated as the preview document in the <a href="service_properites.php">Project Properties</a> window when the <a href="main_preview_embed.php">Review tab</a> is activated.<p><b>Browse with a document</b><br>
Select this option and indicate the document to be used to preview the current document.</p><p><b>Do not use a preview document</b><br>
Check this option if the current document is always to be viewed directly (the preview document will not be used, even if it has been indicated in the <a href="service_properites.php">Project Properties</a> window).</p><p><b>Pass the following parameters when previewing:</b><br>
Select this option and enter the parameters to be passed on to the preview document. With this option you can simulate the transfer of form data to the document.</p><p>To add a parameter, click the plus sign on the menu next to the parameter list and in the window that will open, enter the name of the parameter and its value.</p>

<p>For parameter passing to work, <a href="service_properites.php#service_properties_mappings">browsing mapping</a> and the server that will handle the request must be enabled.</p>

<p>The parameters will be passed using the GET method, i.e. in the URL.</p>

<p>For example - assuming the address to where the preview document is shared is <tt> https: // localhost/ </tt> ), if you set the options:</p><ul>
	<li><b>preview document</b>: <tt>my_document.php</tt></li>
	<li><b>name</b>: <tt>program</tt></li>
	<li><b>value</b>: <tt>Spider</tt></li>
</ul>then the URL address of the document that will be displayed will look like this:<ul>
	<li><tt>https: //localhost/my_document.php?program=Spider</tt></li>
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
	<li><a href="main_preview_general.php">Browsing in general</a></li><li><a href="main_preview_embed.php">Browse" tab</a></li><li><a href="main_preview_external.php">Use of external browsers</a></li></ul>
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