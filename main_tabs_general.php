<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tabs of the main program window</title>

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
<h1>Tabs of the main program window</h1>

<p>The main program window is divided into numerous logical parts with different functions. More <a href="main_window_desc.php">main window description</a> can be found in another topic. Here we will focus on the tabs that are commonly available in the main window.</p><p>Tabs in the Spider are areas, between which you can switch after clicking on the tab title bar or the button marked with an arrow, which changes the tab to the next one. This is how the tabs on the left and right panels and in the middle <a href="main_window_desc.php">the main program window</a> are built. Only on the <a href="down_panel.php">bottom panel</a> the layout of the tabs is horizontal to allow more items to be placed in a low area.</p><h2><a name="tabs_leftpanel"></a> Tabs in the left panel</h2>

<p>The panel on the left can be displayed or hidden using the F9 keyboard shortcut, <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_view.php">View</a> or the button on the bar buttons marked with the icon shown above. The panel on the left consists of the following tabs:</p><ul>
	<li><a href="main_tabs_myservices.php">Projects</a> - this tab allows you to manage files on your local disk</li><li><a href="main_tabs_inspector_tags.php">Tag inspector</a> - the tag inspector tab allows you to dynamically modify the tags in which the cursor is located.</li><li><a href="main_tabs_inspector_css.php">CSS inspector</a> - the CSS inspector tab allows dynamic modification of style selectors used in documents or linked style sheets.</li><li><a href="main_tabs_macrocodes.php">Templates</a> - this tab allows access to templates, i.e. code snippets that can be inserted into documents.</li></ul>

<h2><a name="tabs_rightpanel"></a>Tabs in the right pane</h2>

<p>The right panel can be displayed or hidden using the Ctrl + F9 hotkey, <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_view.php">View</a> or the button in the button bar indicated by the icon shown above. The panel on the right consists of the following tabs:</p><ul>
	<li><a href="main_tabs_myftpservers.php">Servers</a> - this tab enables you to work remotely on the selected FTP or WebDAV server.</li><li><a href="main_tabs_navigator.php">MySQL Inspector</a> - this tab enables you to work with the MySQL database server.</li><li><a href="main_tabs_navigator.php">Navigator</a> - the navigator tab allows easy navigation through the source code of a document whether HTML, PHP or other.</li><li><a href="main_tabs_languages.php">Programming languages</a> - this tab contains a set of definitions for several programming languages supported by Spider.</li></ul><a name="tabs_center"></a><h2>Main tabs in the middle</h2>

<p>Main tabs cannot be hidden. They are the places where documents are created and tested. However, you can switch between them by clicking and keyboard shortcuts (F10 for the Create tab and F11 for the Browse tab).</p><ul>
	<li><a href="main_editor_general.php">Creation</a> - this tab is the document editor, which works in <a href="main_editor.php">source code editing mode</a> or in <a href="main_editor_wysiwyg.php">visual mode</a>. <a href="main_preview_dynamic.php">A dynamic preview</a> is also available here.</li><li><a href="main_preview_embed.php">Browse</a> - this tab allows you to view and test edited documents, provided that MS Internet Explorer or Mozilla is installed in the system.</li></ul>

<h2>Bottom results panel tab</h2>

<p>This tab displays the results of various Spider functions, e.g. search. The tabs here are described in the <a href="down_panel.php">bottom panel</a> topic.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="main_window_desc.php">Main window</a></li><li><a href="down_panel.php">Bottom Panel</a></li></ul>
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