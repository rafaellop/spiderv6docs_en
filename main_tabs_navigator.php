<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>"Navigator" tab</title>

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

<h1>"Navigator" tab</h1>

<p>The "Navigator" tab allows you to conveniently navigate in the source code of documents of various languages supported by Spider. It quickly helps to find the structure of the document, with one click it allows you to move to the selected HTML tag, class, function or structure in scripting languages, or selector in CSS sheets.</p><p>You can turn on the "Navigator" tab using the right panel or the CTRL + 7 keyboard shortcut, and from the menu under the button shown above from <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_view.php"> View </a> .</p><p>The navigator window consists of a menu and a dynamically created document structure tree.</p>

<p>Tree branches can be expanded by clicking on the plus sign on the left side of the name. Clicking on the name of a given element takes you to the place where it appears in the document</p>

<p>The tree is created dynamically - if some elements are not present in the script, there will also be no corresponding main branches. For example - if there are no images in the HTML document, the <b> categorized HTML navigator </b> will not show the <b> Images </b> branch</p>


<h2>Tab menu</h2>Different languages may be used in one document, such as HTML, PHP, JavaScript, and CSS. It is not possible to display a navigator for such a complex document, but you can switch to individual navigators using the menu at the top of the window.<p><b>The following navigators are available:</b></p>

<ul>
   <li><a href="#html">HTML navigator</a></li>
   <li><a href="#html_categorized">categorised HTML navigator</a></li>
   <li><a href="#css">CSS navigator</a></li>
   <li><a href="#js">JavaScript navigator</a></li>
   <li><a href="#vbs">VBScript navigator</a></li>
   <li><a href="#php">PHP navigator</a></li>
   <li><a href="#asp">ASP navigator</a></li>
</ul>

<p>In addition, there are two commands available in the menu:</p>
<p><b>Refresh the navigator tree</b>. <br>
Spider automatically refreshes the tree view when you save the document, or when you switch from one navigator to another. However, if you want to refresh the tree manually, use the button shown next to it.</p>

<p><b>Lock current navigator </b> . <br>
The navigator can handle block documents in different languages. The program detects whether the cursor is in the script block, in the CSS sheet, or maybe in the part containing the HTML code and automatically changes the navigator to the appropriate one.</p>
<p>In some cases, however, you may want to see only one navigator at a time. For example: you create an HTML document and sometimes use PHP script in it - constantly switching the navigator is not only distracting, it also takes up time and computer resources. In this case, you can lock the window using the command with the icon shown above.</p>
<p>When the navigator is locked, automatic detection of the block of code where the cursor is located stops working. However, you can still change the navigator manually using the menu buttons.</p>
<p>In addition, by using the arrow to the right of the button, you can display a submenu containing two additional commands that allow you to lock the current navigator type for all open documents of the same type (with the same filename extension as the current document), and to unlock the navigator for all similar documents.</p>

<h2>Tree branches common to all navigators</h2>
<p>Each of the navigators displays different data. However, they always have three branches in common - they are:</p><ul>
   <li><b>Numbered bookmarks</b></li><li><b>Named bookmarks</b></li><li><b>To-Dos</b></li></ul>
<p>They only appear when there are bookmarks or tasks defined in the editor. Using them, you can quickly find and go to the selected element regardless of the currently displayed navigator - clicking on the selected position will move the cursor to the appropriate place in the editor.</p>


<h2><a name="html"></a>Tag navigator</h2>

<p>The tree is built according to the order of the tags (all types of tag documents supported by the Spider) in the document and presents the tag hierarchy. Child elements are placed in the branches of the parent element.</p>

<p>For example, an HTML table will be represented by a tree that looks something like this:</p>
<p>+ <tt>&lt;table&gt;</tt><br>
    + <tt>&lt;tr&gt;</tt><br>
        + <tt>&lt;td&gt;</tt><br>
            + <tt><i>table cell contents</i></tt></p>

<h2><a name="html_categorized"></a>Categorised HTML navigator</h2>

<p>Document elements are grouped in the tree by type, in separate branches there are:</p><ul>
   <li><b>Images</b> - list of images inserted in the document</li>
   <li><b>Links</b> - a list of links to other documents</li>
   <li><b>Forms</b> - a list of forms and their fields,</li>
   <li><b>Style sheets</b> - a list of style sheets (nested and included), as well as their elements (even from attached sheets!)</li>
   <li><b>Scripts</b> - list of client-side scripts (JavaScript, VBScript), nested and included</li>
   <li><b>Server-side scripts</b> - a list whose elements point to server-side script blocks, such as PHP or ASP</li>
</ul>





<h2><a name="css"></a>CSS navigator</h2>

<p>Sheet elements are grouped according to their type - in separate branches of the tree there are:</p><ul>
   <li><b>AT-instructions</b> - CSS instructions preceded by <tt>@</tt> - <tt>@import</tt>, <tt>@media</tt>, <tt>@page</tt>, <tt>@font-face</tt>, <tt>@charset</tt></li>
   <li><b>element selectors</b> - the tag names used to create the style,</li>
   <li><b>classes</b> - have a prefix <b>.</b> (dot), used in the markup document with the <tt>class</tt> attribute),</li>
   <li><b>identifiers</b> - have a prefix <b>#</b> (hash) before the name, assigned to the elements of the markup document on the basis of the <tt>id</tt> attribute</li>
</ul>


<h2><a name="js"></a>JavaScript navigator</h2>

<p>There are branches on the tree containing:</p><ul>
   <li><b>Global variables</b> - contains a list of all global variables used in the script</li>
   <li><b>JavaScript functions</b> - contains a list of all functions declared in the script. If a function contains conditional statements, loops etc. these will be shown as branches starting from the branch with the function name.</li>
   <li><b>Script constructs</b> - contains a list of script constructs (conditional statements, loops, etc.) used outside the script functions.</li>
</ul>





<h2><a name="vbs"></a>VBScript navigator</h2>

<p>The VBScript component tree contains the following branches:</p><ul>
   <li><b>Global constants</b> - lists all global constants in the script</li>
   <li><b>Global variables</b> - contains a list of all global variables in the script</li>
   <li><b>Classes</b> - contains a list of all classes in the script. If a class has methods, these will be shown as branches starting from the branch with the class name. The content of the methods is shown similarly.</li>
   <li><b>Functions</b> - contains a list of functions in the script. Analogous to methods in a class, you can access the constructs used in a function.</li>
   <li><b>Script constructs</b> - contains a list of script constructs (conditional statements, loops, etc.) used outside the script functions.</li>
</ul>





<h2><a name="php"></a>PHP navigator</h2>

<p>The tree contains two main branches where all the elements of the PHP script will be placed.</p>


<p><b>PHP scripts in the current document</b><br>
 The first main branch of the tree contains a list consisting of:</p>
<p></p><ul>
   <li><b>Constants</b></li>
   <li><b>Global variables</b></li>
   <li><b>Classes</b> declared in the script. A Class branch may have sub-branches containing the <b>Properties</b> and <b>Methods of</b> the class. Methods of a class may contain further sub-branches - identical to the branch <b>Functions</b></li>
   <li><b>Functions</b> - contains a list of all functions declared in the script. A branch of a function may contain branches Nested <b>functions</b>, <b>Local variables</b>, <b>Script constructs</b></li>
   <li><b>Script constructs</b> - contains a list of script constructs (conditional statements, loops, etc.) used outside the script functions.</li>
</ul>

<p><b>Imported scripts</b><br>
The second branch contains a list of scripts attached to the current script (e.g. using <tt>include()</tt>).</p>

<p>The content of each link script branch is analogous to the <b> PHP Scripts branch in the current document </b> and allows you to go to specific places in the linked document!</p><b>Forced include</b> - contains a list of files and folders that have been forced to be included for the project or for the current script. More about <a href="service_virtual_include.php">forced onboarding</a>.<h2><a name="asp"></a>ASP navigator</h2>

<p>Due to the possibility of using different languages in ASP technology, the ASP navigator will contain a tree for the language in which the script was written (JS or VBS).</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="main_editor_navigation.php">Different ways to navigate a document</a></li><li><a href="find.php">Search using Spider</a></li><li><a href="main_tabs_general.php">Other tabs</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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
