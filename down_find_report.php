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
<title>Bottom Results Panel - Search Reports</title>

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
<h1>Bottom Results Panel - Search Reports</h1>

<!-- tre&#347;&#263; pomocy -->

<p>The window opens when you perform <a href="find_ext.php">an extended search</a> in Spider (when strings matching a pattern are found), invoke a file or folder search command or a <a href="spelling.php">spell checker</a> (when errors are found), and when you use the <a href="find.php#filesearchinfo">Search files in specified folder</a> command. You can sort the list of items by clicking on the header of each column. If no words are found by the search function, or if there are no errors in spell checking, the window will not be displayed.</p>

<h2>Extended search and spell check reports</h2>

<p>To view a file with a found word in the editor, just double-click on that line of the report. Additionally, you can drag files from the search report to the <a href="main_tabs_myftpservers.php">Servers</a> tab for quick publishing.</p>

<p>The menu on the right is used to handle the results in the window:</p>

<p><b>Enhanced search and replace</b><br>
Click to reopen the extended search <a href="find_ext.php">and</a> replace window. In addition to text search and replace options, this window also provides options for changing character encoding and spell checking.</p>

<p><b>Repeat extended search using the same settings</b><br>
Click to re-run the extended search or spell check function using the same settings for which the function was previously run. The function does not work if the last action in the "Extended Search and Replace" window was to change the character encoding.</p>

<p><b>Open selected files for editing</b><br>
Click to load the selected files in which the searched text was found into the editor.</p>

<p><b>Report loading</b><br>
Click to load a search or spell check report file from disk.</p>

<p><b>Saving a report</b><br>
Click to save a search or spell check report to disk.</p>


<p><b>Export report to HTML file</b><br>
Click to export a search or spell check report in HTML document format.</p>

<p><b>Export report to TXT format</b><br>
Click to export a search or spell check report in TXT file format.</p>

<p><b>Display document titles</b><br>
Click to enable the display of document titles (contained in documents between <tt><title></title></tt> and <tt><title></title></tt> tags). This slows down the search process somewhat. The titles will be placed in the "Title" column.</p>

<p><b>Bookmark Help</b><br>
Displays this help topic.</p>


<h2>File Search Report</h2>

<p>This view is divided into two parts. On the left side there is a list of found files, on the right side there are tabs with options to define search criteria (file name, folder to search in, date, file size and others).</p>
<p>Next to the list, there is a button bar, thanks to which you can start and stop the search, display (or hide) the search criteria tabs, and change the view of the list of found files.</p>For more on this topic, see <a href="find.php#filesearchinfo">the help topic about searching in Spider</a>.</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="find_ext.php">Extended search and replace</a></li>
   <li><a href="spelling.php">Check spelling</a></li>
   <li><a href="charset_encoding.php">Changing the character encoding</a></li>
   <li><a href="down_panel.php#downpanellist">Other tabs of the bottom results panel</a></li>
   <li><a href="main_window_desc.php">Main program window</a></li>
</ul>
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
