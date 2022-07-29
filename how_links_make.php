<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Creating Links</title>

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

<h1>Creating Links</h1>
<!-- nag&#322;owek g&#322;owny tematu -->

<!-- Tre&#347;&#263; pomocy -->

<p>The main idea and purpose of hypertext (i.e. HTML web pages, among other things) is to be able to create links in documents to other documents. These can be links to other HTML documents that you click on a link in the text of the page, but also links to images displayed on the page, etc.</p>


<h2>Creating normal links</h2>

<p>A regular link in HTML is marked with the <tt>&amp;lt;A href="address"&amp;gt;</tt> tag. Links can be both text and an image.</p>

<p><b>The simplest way to create a link</b><br>
To create a link in the fastest way:</p>
<ol>
  <li>Drag a document from the file list on the <a href="main_tabs_myservices.php">Projects</a> tab into the document you are editing.</li>
  <li>In the <a href="tool_link.php"> Insert a link </a> window that opens, enter the text you want to link (e.g. 'Click here to go to the next page ...'), press the OK button and ... that's all.</li>
</ol>


<p><b>Creating a link from an image or text</b><br>
To create a link from an image or text that already exists in the document:</p><ol>
  <li>Select the image tag or text in the editor.</li>
  <li>Enable the <a href="tool_link.php"> Insert Link </a> ( <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_tools.php"> Tools </a> / <a href="main_menu_tools_links.php"> Links </a> / <b> Link editor </b> , or on toolbars <a href="toolbars_link_format.php"> Links, text and formatting </a> and <a href="toolbars_often.php"> Often Used </a> ). Standard keyboard shortcut every <tt> Shift + Ctrl + A </tt> .</li>
  <li>Use the button dialog box next to the "Link URL" field to select the document you want to link to.</li>
  <li>Click OK in the Insert Reference window - the text selected in the editor will be included in the link tag.</li>
</ol>


<p><b> Creating a link to a file on an FTP server </b> <br>
 In a similar way, you can create a link to a file located on the server - just drag the target document from the list of files on the tab <a href="main_tabs_myftpservers.php">Servers</a> . If you have <a href="service_properites.php#service_properties_mappings"> FTP server to URL mapping </a> set, the link will point to the appropriate URL. Otherwise, the FTP server address will be used.</p>


<h2>Creating link maps</h2>

<p>Link maps are hotspots in an image defined with HTML tags. Clicking on such an area works in the same way as clicking on a regular link.</p>

<p>To create a simple link map, run <a href="tool_link_map_editor.php"> Map </a> and then:</p>

<ol>
  <li>Enter in the <b> General map settings </b> tab in the <b> Map name </b> field the name that will be used to handle the map in the document,</li>
  <li>in the <b> Map graphics location </b> field, the access path and name of the image file for which the map will be created.</li>
  <li>In the <b> Define areas </b> tab, use the drawing tools (on the left - rectangle, ellipse, irregular) to draw hotspots.</li>
  <li>In the <b> Settings of selected areas </b> tab, in the <b> URL reference </b> field, enter the address of the document to which the link should lead. The currently edited active area is marked with a yellow box on the <b> Areas definition </b> tab.</li>
  <li>Click <b>OK</b> - the map (<tt>&amp;lt;MAP tag&amp;gt;</tt> along with <tt>the &amp;lt;AREA&amp;gt;</tt> tags) along with the image will be placed in the document.</li>
</ol>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="tool_link.php">Insert a link</a></li><li><a href="tool_link_map_editor.php">Link Maps</a></li></ul></td>
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