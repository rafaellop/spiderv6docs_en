<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>HTML Help - Information for the HTML Help compiler</title>

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
<h1>HTML Help - Information for the HTML Help compiler</h1>



<p>This tool allows you to include two types of keywords in your design to facilitate both navigation and search. Both ways can function independently, but also in parallel. There are only two small tabs in the tool's window, separate for each type. We should place objects containing sets of keywords in the header of the HTML document, within the HEAD; we can combine them.</p>

<h2>Launching</h2>

<p>You can launch the described tool with the button marked with the icon shown above. The button to launch this window can be found in the HTML Help menu and on the HTML Help toolbar.</p><h2>Keywords</h2>

<p>Keywords are a supplement when creating the index. In order for them to be included, you need to check the "Include keywords from HTML files" option in the <a href="tool_htmlhelp_hhp_editor.php">project editor</a>, under the general settings tab. Note that keywords, although placed in the compilation process as index elements, are not its components registered in the index file.</p>

<p><b>Keyword </b> <br>
Enter a keyword in this field. We can add single keywords as well as any number of them at once. In this case, you should pay attention to two things: Keywords cannot contain spaces, and we separate them with a semicolon, also without spaces, for example: "Word; Word; Keyword". We add them using the plus button next to the field below.</p>
<p><b>Keywords</b><br>
This field contains a set of keywords that have been entered. We can delete them or add new ones using the buttons next to the field.</p>

<h2>ALink names</h2>

<p>ALinks are keywords that represent a link between a particular document and other documents. If an ALink refers to eight documents, using it will show a list of all those documents. Practically, it looks like we put the same ALink in the selected documents, while calling it will show a list of all those documents in which it was placed.</p>

<p><b>ALink name</b><br>
In this field we enter the name of the ALink. We can add both single words, as well as any number of them at once. In this case, two things should be noted: ALink names must not contain spaces, and we separate them with a semicolon, also without spaces, for example: "Name;Name;Name_ALink". We add them using the plus button next to the field below.</p>
<p><b>ALink Names</b><br>
This field contains a set of ALink names that have been entered. We can delete them or add new ones using the buttons next to the field.</p>

</td>
</tr>
</table><br><table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_htmlhelp_general.php">HTML Help - general information</a></li><li><a href="tool_htmlhelp_hhp_editor.php">HTML Project Editor Help</a></li><li><a href="tool_htmlhelp_hhc_editor.php">HTML Help table of contents editor</a></li><li><a href="tool_htmlhelp_hhk_editor.php">HTML Help index editor</a></li><li><a href="tool_htmlhelp_folder_to_chm.php">Quick HTML Help from folder</a></li><li><a href="tool_htmlhelp_hhp_compilation.php">Compile HTML Help document</a></li><li><a href="tool_htmlhelp_compiler_services.php">HTML Help and projects in Spider</a></li></ul>
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
