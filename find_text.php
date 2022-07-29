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
<title>Search, replace, move to selected elements of the document</title>

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
<h1>Search, replace, move to selected elements of the document</h1>


<!-- tre&#347;&#263; pomocy -->

<p>The window is used for quick search and possible replacement of text and for moving to selected elements of the document.</p><p>In the upper part of the window, there are elements that allow you to remember search templates and re-use them.</p>

<p>The lower part is divided into three tabs:</p><ul>
   <li>Search</li>
   <li>Replace</li>
   <li>Go to the selected ...</li>
</ul>


<h2>Remember search templates</h2>

<p>The feature of remembering search templates comes in handy when you often need to search for the same parts of text. The search template remembers the texts from the 'Find text' field (from <a href="#find"> Search tab </a> ), and from the 'Find text' and 'Replace with' fields (from <a href="#replace"> tabs Replace </a> ).</p>

<p>The following elements are used to remember templates and re-use them:</p>

<p><b>Search templates</b><br>
This is a list with the names of saved search templates. From it you can select the template you want to use.</p><p><b> Add template to list </b> <br>
 Click to add a search template to the list according to the current settings.</p><p><b> Remove template from list </b> <br>
 Click to remove the current search template from the list.</p><h2><a name="find"></a>Search</h2>

<p>The "Search" tab allows you to quickly search for text in the currently open document.</p>

<p>To quickly call up the tool you can use the standard shortcut <tt>Ctrl+F</tt>, or use the "Find" button in the "Search" menu.</p>

<p><b>Find Text:</b><br>
Enter the text you want to find in the document. You can use the drop-down list where recent search phrases are listed.</p>

<p><b>Settings</b> - allows you to set options for the searched text</p><ul>
   <li><b>Case-sensitive</b> - check to make the search text case sensitive.</li>
   <li><b>Regular expressions</b> - select to use <a href="find_regexp.php">regular expressions</a> in the search text.</li>
   <li><b> Match whole words </b> - check that the searched phrase must be a whole word, not a fragment of a longer word (e.g. when searching for the phrase 'mar', it will find all the words 'mar', but not 'marek').</li>
</ul>


<p><b> Direction </b> - allows you to specify the direction of the search relative to the current cursor (caret) position in the document</p><ul>
   <li><b> Forward </b> - the search will start from where the cursor is placed to the end of the document. When the end is reached, the program asks whether to search from the beginning of the document.</li>
   <li><b> Backward </b> - the search will start from where the cursor was placed to the beginning of the document. After reaching the beginning, the program asks whether to search from the end of the document.</li>
   <li><b> Entire Document </b> - the entire document will be searched from start to finish. If this option is selected, the options in the "Search" section are disabled.</li>
</ul><b> Search </b> - allows you to more precisely define the scope of the search in the document<ul>
   <li><b>the entire document</b> - the entire document will be searched,</li>
   <li><b>selected text</b> - only the text selected in the editor will be searched.</li>
   <li><b>text from line... to line ...</b> - searches for text within a specified range</li>
</ul>

<p><b>Find</b><br>
Click to start your search.</p>



<h2><a name="replace"></a>Replace</h2>

<p>The "Replace" tab allows you to quickly replace the text in the currently open document.</p>

<p>To quickly call up the tool, you can use the standard shortcut Ctrl+R, or use the "Find and Replace" button in the "Search" menu.</p>

<p><b>Find Text:</b><br>
Enter the text you want to find in the document for replacement. You can use the drop-down list that lists recent search phrases.</p>

<p><b>Replace with:</b><br>
Enter the text you want the phrase you entered in the "Find Text" field to be converted to. You can use the drop-down list, which lists the most recently used phrases in this field. Additionally, you can use the carriage return and move to the next line symbols (entered together they simply mean 'end of line')</p>

<p><b>Settings</b> - allows you to set options for the searched text</p><ul>
   <li><b>Case-sensitive</b> - check to make the search text case sensitive.</li>
   <li><b> Ask when replacing </b> - check to enable or disable the replacement of the text when finding each phrase.</li>
   <li><b>Regular expressions</b> - select to use <a href="find_regexp.php">regular expressions</a> in the search text.</li>
   <li><b> Match whole words </b> - check that the searched phrase must be a whole word, not a fragment of a longer word (e.g. when searching for the phrase 'mar', it will find all the words 'mar', but not 'marek').</li>
</ul>


<p><b>Direction</b> - allows you to specify the search direction</p><ul>
   <li><b>Forward</b> - the search will start from the beginning of the text, to the end,</li>
   <li><b>Backwards</b> - the search started from the end of the text, to the beginning.</li>
   <li><b> Entire Document </b> - the entire document will be searched from start to finish. If this option is selected, the options in the "Search" section are disabled.</li>
</ul><b> Search </b> - allows you to more precisely define the scope of the search in the document<ul>
   <li><b>the entire document</b> - the entire document will be searched,</li>
   <li><b>selected text</b> - only the text selected in the editor will be searched.</li>
   <li><b>text from line... to line ...</b> - searches for text within a specified range</li>
</ul>

<p><b>Find next</b><br>
Click to find the next occurrence of the search phrase.</p>

<p><b>Replace</b><br>
Click to find and replace the found phrase with the text specified in the "Replace with" field.</p>

<p><b>Replace all</b><br>
Click to find and replace all found phrases with the text specified in the "Replace with" field.</p>



<h2><a name="goto"></a>Go to the selected...</h2>

<p>The tab allows you to quickly move to a selected section of the document:</p>

<ul>
   <li>a<b>label</b> - or anchor, that is, to an HTML<b>tag</b> with a specific ID attribute</li>
   <li><b>bookmarks</b> - to the place where the selected <a href="main_editor_bookmarks.php#numbered">numbered bookmark</a>is set</li>
   <li>a<b>named tab</b> - to the place where the selected <a href="main_editor_bookmarks.php#named">named tab</a>is set</li>
   <li><b> tasks to be performed </b> - to where <a href="main_editor_todotasks.php"> Tasks to be performed </a> is set</li>
   <li><b>line number</b> - to a specific line in the document</li>
</ul>


<p><b>Go to</b><br>
Click to navigate to the desired location in the document. The tool window will remain open. To edit the document, place the cursor at the desired location</p>

<p><b>Go and close</b><br>
Click to move to the desired location in the document and close the tool window. The cursor will be positioned at the beginning of the row with the selected item.</p>

<p><b>When the text is found</b><br>
At the bottom of the window is a group of switches responsible for the behavior of the search window when you click Find or Replace. You can choose for the cursor to be moved to the editor window after the action, leaving the search window open (Cursor to Editor). You can choose for the cursor to remain in the window (Cursor in Window) or for the search window to close and the cursor to be moved to the editor (Close Window).</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="find.php">Search in Spider</a></li><li><a href="find_ext.php">Extended search and replace</a></li><li><a href="find_regexp.php">Search - regular expressions</a></li><li><a href="main_editor_navigation.php">Other ways to navigate a document</a></li><li><a href="main_tabs_navigator.php"> "Navigator" tab </a></li><li><a href="main_menu_find.php">Search Menu</a></li></ul>
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
