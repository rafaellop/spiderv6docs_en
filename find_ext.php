<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Extended search and replace</title>

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
<h1>Extended search and replace</h1>


<!-- tre&#347;&#263; pomocy -->

<p>With the "Extended Search and Replace" tool, you can perform three basic types of operations: search and replace text, convert national characters, and run a spell checker. You can also specify the scope of the operation - from a single document, to an entire site (or even more broadly).</p>

<h2>How it works</h2>

<p><b>Search and replace text</b> - allows advanced search and replace text in documents.</p>

<p><b>Character encoding conversion</b><br>
Select this option to change the code page used in documents to the one selected from the list. For example, you can change the encoding page from WINDOWS-CP-1250 used exclusively in MS Windows to ISO-8859-2 (the ISO standard used on other platforms).</p>
<p>To read more about character encoding conversion - <a href="charset_encoding.php">click here</a>.</p>

<p><b>Spell check</b><br>
Select this option to run a spell checker.<br>
To read more about spell check - <a href="spelling.php">click here</a>.</p>

<h2><a name="find_settings"> </a> How it works - Search and replace text</h2>

<p>If <b>Search and replace text</b> is selected the following options can be set:</p>

<p><b> Normal search </b> <br>
 The search text will be the text exactly as entered.</p>


<p><a name="wildcards"></a><b>Use wildcards</b><br>
Search text can contain wildcards that replace the corresponding characters. The following symbols are available:</p><ul>
  <li><tt>*</tt> - replaces any string (also empty)</li>
  <li><tt>?</tt> - replaces any character</li>
  <li><tt>#</tt> - replaces any digit<tt>(from 0 to 9</tt>)</li>
  <li><tt>@</tt> - replaces any letter<tt>(a-z, A-Z</tt>)</li>
  <li><tt>$</tt> - replaces any alphanumeric character (digit or letter)</li>
  <li><tt>~</tt> - replaces any character that is not an alphanumeric character or a space</li>
</ul>

<p>Example of using wildcards: to find all opening and closing tags in an HTML document, enter the text <tt>&amp;lt;*&amp;gt;</tt>.</p>

<p>Note that if you search for a string specified by <tt>abc*</tt>, the result will be <tt>abc</tt> followed by any character after it. No further characters will be included in the search result. Thus, if you search for <tt>abcdefgh</tt> in a string specified by you, only the phrase <tt>abcd</tt> will be found.</p>


<p><b>Use regular expressions</b><br>
Search text may contain <a href="find_regexp.php">regular express</a> ions, described in more detail in a separate topic.</p>

<p>An example of using regular expressions: to find all the opening tags of a header of any degree<tt>(&amp;lt;H1&amp;gt; to &amp;lt;H6&amp;gt;</tt>) in an HTML document, whether in upper or lower case, enter the text <tt>&amp;lt;[hH]\d&amp;gt;</tt>.</p>

<p><b>Case sensitive</b><br>
Check to make the search text case-sensitive.</p>

<p><b> Match whole words </b> <br>
 Check that the searched phrase must be a whole word, not a fragment of a longer word (e.g. when searching for the phrase 'mar', it will find all the words 'mar', but not 'marek').</p>

<p><b> Don't show replacement results </b> <br>
 Check this option if you do not want a "Results pane" to be shown with a <a href="down_find_report.php"> search and replace report </a> after a replacement is performed.</p><a name="backups"></a><p><b>Create backup copies when modifying files</b><br></p><p>Check this option if you want to create <a href="main_editor_backups.php">backup copies</a> of the original, unchanged documents when changes are made to documents opened directly from your hard drive (the 'in selected project', 'in folders', or 'in files' options in the Source section). With this option, in case the changes are different from what you intended, you can restore the original documents.</p>

<p><b>Do not convert when searching</b><br>
Check to not convert encoding during text search. Checking this option is needed, if in searched documents there is no encoding in HEAD section, but at the same time the encoding is not to be changed (e.g. for files attached to other documents in server-side scripts, e.g. using include in PHP).</p>


<p>Use the second tab,<a href="#find_change">"Search and Replace</a>," to enter texts.</p>

<h2>Source</h2>

<p>Using the settings in this section of the "Search and replace settings" tab, it is possible to define the scope of the tool - from the currently edited document, to strictly defined types of documents in the selected Project, folders, etc. Depending on the selected scope (data source), options are available:</p>

<p><b>in the active document</b> - operations will be performed on the document currently open in the editor. There are no additional options.</p>

<p><b>in all open</b> - operations will be performed on all documents currently open in Spider. There are no additional options.</p>

<p><b> in the selected project </b> - operations will be performed on all files <a href="services_general.php"> Project </a> selected from the list (files and folders <a href="service_properites.php#servicepropertiesoftenused"> disabled from view in site settings </a> . You can narrow down file types to:</p><ul>
    <li><b>HTML documents</b> - files with extensions specified as "HTML documents" in the "Program settings" window on the "File list" tab</li>
    <li><b>files:</b> - This text box allows you to enter file extensions to narrow down the types of documents to be considered. Extensions should be given in the form e.g. <tt>*.php;*.php3;*.php4</tt>.</li>
    <li><b> Skip files / folders when searching and replacing </b> - add files or folders to the list below that should be omitted when searching and replacing in the selected project</li>
  </ul>




<p><b>in folders</b> - operations will be performed on all files in folders included in the list. The list of folders can be edited using the buttons on the right.</p><ul>
    <li><b>Files with extension</b> - this text field allows you to enter file extensions to narrow down the types of documents to be considered. Extensions should be given in the form e.g. <tt>*.php;*.php3;*.php4</tt>.</li>
    <li><b>including all subfolders</b> - check to extend the operation to files from all subfolders in the selected folders</li>
    <li><b> Skip files while searching and replacing </b> - add files to the list below that should be excluded from searching and replacing in selected folders</li>
  </ul>


<p><b>in files</b> - operations will be performed on all files on the list. The file list can be edited using the buttons on the right.</p>


<h2><a name="find_change"></a>Search and replace</h2>

<p>There are two text boxes for entering text:</p>

<p><b>Find</b><br>
This field is used to enter the search text. If the corresponding options are checked in the<a href="#find_settings">"Search and replace settings</a>" tab, it is possible to use wildcards or regular expressions.</p>

<p><b>Replace with</b><br>
Use this field to enter the text to be inserted in place of the found text if "Replace" has been run</p>

<p>The contents of both fields are remembered by the program even after it is closed and reopened.</p>

<p><a name="templates"></a><b>Search templates</b><br>
This list contains search templates. By default, the most commonly used ones are available, like the email address template, etc. You can add and remove templates using the buttons to the right of the list:</p><ul>
  <li><b>Add current search template</b> - click to create a new search template from the text in the "Find" field.</li>
  <li><b>Remove search template</b> - click to remove the selected search template from the list</li>
</ul>


<p>To make using text replacement easier, you can use the menu above the "Replace with" box:</p><ul>
   <li><a name="variables"></a><p><b>Insert Variable...</b> - click and select the variable you want to use from the menu. After selecting a variable, its symbol will be inserted in the "Convert to" field, which will be converted to the appropriate selected value when the function runs:</p>
        <ul>
             <li><b>File name without path</b>: (variable <tt>%paj_filename%</tt>) inserts the name of the file where the replacement is performed,</li>
             <li><b> Name of the file with the path </b> : (the <tt> %paj_filefullpath% </tt> variable) inserts the access path and the name of the file where the replacement is performed,</li>
             <li><b>Path without filename</b>: (variable <tt>%paj_filepath%</tt>) inserts the path to the file where the replacement is performed,</li>
             <li><b>File name with relative path (Web project only)</b>: (variable <tt>%paj_filerelfullpath%</tt>) inserts the path (relative to the project's root directory) and filename of the file in which the replacement is being performed,</li>
             <li><b>Relative path of a file in a Web project</b>: (variable <tt>%paj_filerelpath%</tt>) inserts the path (relative to the root directory of the project) of the file where the replacement is performed,</li>
             <li><b>Document modification date and time</b>: ( <tt>%paj_filedatetime%</tt> variable) inserts the date and time of the last document record where the modification is made (in YYYY-MM-DD HH-MM-SS format),</li>
             <li><b>Document Status</b>: (variable <tt>%paj_filestatus%</tt>) inserts the status of the document in which the conversion is performed (document status can be set in the "Document Information" window)</li>
             <li><b>File comment</b>: (variable <tt>%paj_filecomment%</tt>) inserts a comment for the document in which the replacement is performed (the document comment can be specified in the "Document Information" window)</li>
             <li><b>Last file author</b>: (variable <tt>%paj_filelastmodifiedby%</tt>) inserts the name of the user who last saved the document,</li>
             <li><b>Current Date</b>: (variable <tt>%paj_date%</tt>) inserts the current date (in the format <tt>YYYY-MM-DD</tt>)</li>
             <li><b>Current</b> time: ( <tt>%paj_time%</tt> variable) inserts the current time (in <tt>HH-MM-SS</tt> format)</li>
             <li><b>Current date and time</b>: ( <tt>%paj_datetime%</tt> variable) inserts the current date and time (in the format <tt>YYYY-MM-DD HH-MM-SS</tt>)</li>
        </ul>
   </li>
   <li><p><b>Enable display of special characters</b> - click to enable or disable the display of special characters, such as the end-of-line character, etc.</p></li>
   <li><p><b>Enable line wrapping</b> - click to enable or disable line wrapping.</p></li>
   <li><p><b> Copy the text from the "Find" field to "Replace with" </b> - click to copy the text from the "Find" field to "Replace with". This feature is very useful when there is other text you want on the clipboard.</p></li>
   <li><p><b> Replace text between "Find" and "Replace with" fields </b> - click to replace the contents of "Find" and "Replace with" fields.</p></li>
   <li><p><b> Clear text from selected field </b> - click to expand a submenu containing commands to clear the contents of the field 'Find', 'Replace with', or both of these fields.</p></li>
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
  <li><a href="find.php">Search in Spider</a></li><li><a href="find_text.php"> Search, replace, move to selected document elements </a></li><li><a href="down_find_report.php">Search Report" window</a></li><li><a href="find_regexp.php">Search - regular expressions</a></li><li><a href="spelling.php">Check spelling</a></li><li><a href="charset_encoding.php">Conversion of national characters</a></li><li><a href="main_menu_find.php">Search Menu</a></li></ul>
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
