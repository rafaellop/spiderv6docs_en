<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Keywords" content="">
<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Keyword Generator</title>

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
<h1>Tools - Keyword Generator</h1>



<p>With the Keyword Generator, you can easily create a list of words occurring in the selected document. You can launch it with a command in the <a href="tool_meta.php#keywords">"META Section Editor" under the "Indexing and Keywords" tab</a>. In addition, it is possible to launch the tool with a command in the Dynamic Code pop-up for the <tt>content</tt>  attribute in the <tt>&amp;lt;meta tag name="Keywords" content="|" &amp;gt;</tt> (<tt>the |</tt> character here indicates where the cursor is set).</p><p>The tool window consists of two tabs:</p>
<ul>
        <li><a href="#source">Source of keyword generation</a></li><li><a href="#list">Search keywords</a></li></ul>By default, the source in which the words are searched for is the current document, but you can easily change this using the tab settings



<a name="source"></a><h2>Source of keyword generation</h2>

<p>Select the source document from which the words will be extracted:</p>
<ul>
        <li><b>current document</b> open in the editor</li><li><b>all open</b> in the editor</li><li><b>select a document</b> - enter the path to the field next to it, or use the button that allows you to point to a file on disk</li><li><b>in a selected project</b> - select from the list the project whose documents are to be included in the search. In addition, you can narrow the selection to HTML files, or files of other types (enter semicolon-separated extensions of the names of such files in the field next to them, in the form, for example: <tt>*.htm;*.html;*.php</tt>)</li></ul><a name="list"></a><h2>Search for keywords</h2>
<p>Most of this tab is occupied by the list of keywords. It consists of two columns: <b>Keyword</b> and <b>Occurrences</b>. Each word found will be added to the list only once - if it occurs more times, simply increase the number in the 'Occurrences' column. Thanks to this, you can easily see which words occur most often in your documents.</p><p>When the list is populated, select the words that will be included in the list of keywords in the document.</p>

<p>To the right of the keyword list is a button bar for its operation:</p>

<p><b>Search for keywords in the selected source</b><br>
Click to have the program clear the list, then search for words and create a list of them based on the documents selected above.</p><p><b>Add keywords from the selected source</b><br>
Click to have the program search for words based on the documents selected above and add them to the words existing in the list.</p><p><b>Select all</b><br>
Click to select all words in the list.</p><p><b>Deselect all</b><br>
Click to deselect all words in the list.</p><p>Below are two fields that allow you to specify the conditions that must be met in order to be added to the list:</p>

<p><b>Minimum number of characters in a word</b><br>
Specify the minimum number of characters a word must contain to be added to the list. This allows you to avoid adding conjunctions, etc.</p><p><b>Minimum number of repetitions</b><br>
Specify the minimum number of times a word must occur for it to be added to the list.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="main_menu_tools_text.php">Other tools from the Text menu</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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