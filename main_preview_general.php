<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Browsing documents - general</title>

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
<h1>Browsing documents - general</h1>

<!-- tre&#347;&#263; pomocy -->


<p>The "Browse" tab is located in the <a href="main_tabs_general.php#tabs_center">middle pane</a> , which you cannot disable. On this tab you can view the currently created document. It also allows you to preview templates if this option has been set on the <a href="main_tabs_macrocodes.php">Templates tab</a> .</p>


<h2>Built-in preview</h2>

<p>Due to the rapidly changing programming offer of large companies and newer extensions introduced by them to the HTML language, it was decided that Spider would not be equipped with its own preview system of the created page. However, strong emphasis was placed on facilitating work with browsers available on the market. At the moment you can use one of the browsers to preview:</p>


<p>From the Spider's level, you can immediately preview the edit field (default <tt> F11 </tt> key) of the currently edited page using the "Browse" tab. This function requires one of the browsers installed on the system</p><ul>
	<li>MS Internet Explorer version 3.02 or later</li>
	<li>Mozilla 1.x</li>
</ul>


<h2>External browser</h2>

<p>For people who use other browsers, the Spider has also been equipped with a different option to preview the page. The DDE communication mechanism used causes the page currently displayed in the editor to immediately appear in the default browser window after pressing Ctrl + F11 (you can set the default browser in the <a href="settings_browse.php">Program Settings window</a> ) as seen by Internet users around the world. This way, the Spider can work with several different browsers at once.</p>

<p>Browsers are detected by the Spider on startup. You can also define browsers manually using the <a href="settings_browse.php">Program Settings</a> window or (also from the same window) redetect them.</p>


<h2>Setting the preview document</h2>Sometimes you are editing a document that is not intended to be viewed directly, but to be only a part of another document. Or, you may want to pass some parameters to the document using the GET method (in the URL). In this case, use the window<li><a href="main_preview_prevdoc.php">Setting the preview document</a>.</li></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_preview_embed.php">Browse" tab</a></li><li><a href="main_preview_external.php">Use of external browsers</a></li><li><a href="main_preview_prevdoc.php">Setting the preview document</a>.</li><li><a href="main_editor.php">Editor - general</a></li><li><a href="main_tabs_general.php">Other tabs</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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
