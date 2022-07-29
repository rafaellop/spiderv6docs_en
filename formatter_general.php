<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Source code formatting</title>

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
<h1>Source code formatting</h1>




<!-- tre&#347;&#263; pomocy -->
<p>With the source code formatting tool, you can quickly organize and format the code in your documents. In addition, you can define code formatting rules for different languages yourself.</p>

<p>You can run the code formatting tool using the command marked with the icon shown above located in the <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_formatting.php">Code Formatting and Compression</a> menu, as well as using the button shown above located in the toolbar.</p>

<p><b>The tool window contains two tabs:</b></p><ul>
  <li><b>Formatting source</b> - allows you to specify where to format the code</li>
  <li><b>Formatting</b> options - contains options for formatting the code</li>
</ul>You can also use previously created formatting styles by selecting a specific style from the drop-down list when you click the arrow next to the formatting tool icon on the <b>Frequently Used Tools</b>, or by using the <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_formatting.php">Formatting and Code Compression</a> / <b>Quick Format Current</b> menu. If you select a section of text in a document, only that section will be formatted.<h2>Formatting source</h2><br><p>Using the settings of this tab, it is possible to define the scope of the tool - from the currently edited document, to strictly defined types of documents in the selected project, folders, etc. Options are available:</p>

<p><b>in the active document</b> - operations will be performed on the document currently open in the editor.</p>

<p><b>in selected text</b> - operations will be performed on the selected text in the document currently open in the editor.</p>

<p><b>in all open</b> - operations will be performed on all documents currently open in Spider.</p>

<p><b>in the selected project</b> - operations will be performed on all files of the <a href="services_general.php">project</a> selected from the list. You can restrict file types to files with a specific extension:</p><ul>
    <li><b>files:</b> - This text box allows you to enter file extensions to narrow down the types of documents to be considered. Extensions should be given in the form e.g. <tt>*.php;*.php3;*.php4</tt>.</li>
  </ul>


<p><b>in folders</b> - operations will be performed on all files in folders included in the list. The list of folders can be edited using the buttons on the right.</p><ul>
    <li><b>Files with extension</b> - this text field allows you to enter file extensions to narrow down the types of documents to be considered. Extensions should be given in the form e.g. <tt>*.php;*.php3;*.php4</tt>.</li>
    <li><b>including all subfolders</b> - check to extend the operation to files from all subfolders of the selected folder</li>
  </ul>


<p><b>in files</b> - operations will be performed on all files on the list. The file list can be edited using the buttons on the right.</p>


<p><b>Create backup copies</b><br>
Check this if you want selected documents in folders or in the Project to be backed up when they are formatted.</p>




<h2>Formatting options</h2>

<p>In this tab, you can select the language whose code you want to format, as well as the formatting type of the selected language. You can select more than one language at a time - Spider will automatically recognize and match the formatting to the language!</p>

<p>Spider contains two separate formatting tools - one built directly into the program, and one that uses an external program, <a href="https://www.w3.org/People/Raggett/tidy/" target="_blank">Tidy(r)</a></p>


<h2>Use the formatting rules built into the program</h2>

<p>The options in this section allow you to select the language you want the code to be formatted in. This is a tool directly built into the program.</p>

<p>To format the code of a language, check the switch next to its name and then select a formatting scheme from the list.</p>

<p><b>Format HTML</b><br>
Check this option to format the HTML code. Then select a formatting scheme from the list:</p><ul>
  <li><b>Very parsimonious</b> formatting - formats the code in a way that reduces the size of the document as much as possible, but leaves it relatively clear. Code for subordinate elements will be indented with a single space. Unnecessary blank lines will be removed.</li>
  <li><b>Parsimonious format</b> ting - formats the code in a clear manner. Subordinate element code will be indented with a single tab. A single line break will be left between some tags, such as between tables. Unnecessary blank lines will be removed.</li>
  <li><b>Clean format</b> ting - formats the code in the clearest way possible. Formatting tags. Tags that define the structure of the document, insert images, etc. will be placed on separate lines. Unnecessary empty lines will be removed.</li>
  <li><b>Code compression</b> - formats the code as compactly as possible by removing all unnecessary spaces, end-of-line characters, etc. This keeps the HTML code as compact as possible and makes it load faster.</li>
</ul><b>Format CSS</b><br>
Check this option to format CSS sheets (embedded in documents, or in separate files). Then select a formatting scheme from the list..:<ul>
  <li><b> Shortest Formatting </b> - formats the CSS code by placing each class on a single line, one directly below the other. Deletes all blank lines.</li>
  <li><b> Short Formatting </b> - formats the CSS code by placing each class on a single line, separating each class with one blank line. Deletes all remaining blank lines.</li>
  <li><b> Clean formatting </b> - formats CSS code by placing each class element on a single line. The code of the child elements will be indented with one tab. Individual classes will be separated by a single blank line. Any remaining blank lines are removed.</li>
</ul><a name="javascript"></a><p><b>Format JavaScript</b><br>
Select this option to format the JavaScript code. Use the <a href="formatter_javascript.php">Formatting Settings</a> command to customize the formatting style for JavaScript.</p><a name="php"></a><p><b>Format PHP scripts</b><br>
Check this option to format PHP script code. You can use the <a href="formatter_php.php">Formatting Settings</a> command to customize the formatting style for PHP.</p>

<p><b>Customizing formatting styles</b><br>
You can also create your own formatting styles or customize existing ones using the <a href="settings_codeinsight_formatter.php">Program Settings - Formatting Source Code</a>window options</p>




<h2>Only change the case of tags in documents</h2>

<p>Select this option if you want the formatter to only change the case of the tags in the documents that will be formatted. Then select the case (lowercase / uppercase).</p>



<h2>Use an external W3C Tidy (r) program</h2>

<p>Selecting this option allows you to use the Tidy program to format HTML documents that came with Spider. You can use the following formatting styles:</p>

<ul>
  <li><b> Format for code editing </b> - formats the code in a transparent manner, making it easier to edit. The code of the secondary elements will be indented with two spaces, individual tags separated by a blank lines</li>
  <li><b> Format for publication </b> - formats the code compactly, removing indentation, unnecessary blank lines, etc.</li>
  <li><b>Convert HTML to XHTML</b> - converts HTML code to conform to the XHTML specification</li>
  <li><b>Remove Word formatting</b> - removes the usually unnecessary tags, styles, etc. that are inserted into HTML when exporting documents to HTML from MS Word.</li>
  <li><b> Remove deprecated formatting </b> - removes tags marked as deprecated in the specification ( <i> deprecated </i> ) from the document, mostly related to text formatting, replacing them with CSS styles.</li>
</ul>



<p>You can read more about this program on the <a href="https://tidy.sourceforge.net/" target="_blank">Tidy(r) website</a>.</p>


<h2>Buttons on the right</h2>

<p><b> Format </b> <br>
 Use this button to format documents using the selected options.</p>

<p><b>Settings</b><br>
Use this button, open the <a href="settings_codeinsight_formatter.php">Program Settings / Other Settings / Facilitation(...) / Source Code Formatting</a> window to adjust formatting options. In this window you can also edit and create new code formatting styles</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="settings_codeinsight_formatter.php">Formatting settings</a></li>
   <li><a href="formatter_markuplangs.php"> Settings for formatting tag documents </a></li>
   <li><a href="formatter_stylesheets.php">Formatting settings for CSS style sheets</a></li>
   <li><a href="formatter_javascript.php">JavaScript formatting settings</a></li>
   <li><a href="formatter_php.php">Formatting settings for PHP scripts</a></li>
   <li><a href="formatter_tidy.php">Formatting settings for Tidy</a></li>
   <li><a href="tool_htmlcompressor.php">HTML Compressor</a></li>
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
