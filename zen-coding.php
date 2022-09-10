<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.2.0.1)">

<!-- nazwa strony pomocy -->
<title>Support for zen-coding library in Spider</title>
<style type="text/css">

pre {
  
  white-space:pre-wrap;
}

</style>

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
 <h1>Support for zen-coding library in Spider</h1>




<p>Zen-coding is a JavaScript library originally created by Sergey Chikuyonok and currently being developed under an MIT license. The premise of the developers of this library was to make it easier and faster for web authors to create code using (x)HTML, CSS, XML or any other structured code format. The basic function of the zen-coding library is a mechanism of unfolding shortcodes, which can be written quickly, into large code structures. For example, typing the following code:</p>

<pre>
div#page&gt;div.logo+ul#navigation&gt;li*5&gt;a
</pre>

<p>and calling the code development command, will cause the above shortcut to be replaced by the code:</p>

<pre>
&lt;div id="page"&gt;
        &lt;div class="logo"&gt;&lt;/div&gt;
        &lt;ul id="navigation"&gt;
                &lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
                &lt;li&gt;&lt;a href=""&gt;&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
&lt;/div&gt;
</pre>

<p>The shortcut mechanism has a modular structure, which makes it possible to develop code in different languages. Currently zen-coding supports CSS, HTML, XML/XSL and HAML languages. With zen-coding syntax and examples of shortcodes can be found at <a href="#zen-coding-examples">the bottom of the page</a>.</p>

<h2>Current features of the zen-coding shortcodes unfolding mechanism</h2>

<ul>
  <li>ID and CLASS attributes: e.g. <tt>div#page.section.main</tt></li>
  <li>User attributes: e.g. <tt>div[title]</tt>, <tt>a[title="Hello world" rel]</tt>, <tt>td[colspan=2]</tt></li>
  <li>Duplicating elements: For example<tt>, li*5</tt> will result in a &lt;li&gt; tag duplicated five times.</li>
  <li>Numbering elements using the '$' character: for example, <tt>li.item$*3</tt> will result in a &lt;li tag&gt; a tag duplicated three times, and the character '$' will be replaced with the item number.</li>
  <li>Repeated use of the '$' character aligns the number with zeros: for example, <tt>li.item$$$</tt> will give out the same as <tt>li.item001/li&gt;
  <li>Infinite nested shortcut grouping: e.g. <tt>div#page&gt;(div#header&gt;ul#nav&gt;li*4&gt;a)+(div#page&gt;(h1&gt;span)+p*2)+div#footer</tt>. You can literally save the entire document in one line of code with a shortcut!</li>
  <li>Filter support (<a href="https://code.google.com/p/zen-coding/wiki/Filters" target="_blank">more about filters</a> on zen-coding)</li>
  <li>You can skip writing a div tag when the hash element starts with ID or CLASS: e.g. <tt>#content&gt;.section</tt> results in the same result as div#content&gt;div.section</li>
</tt></li></ul>

<p>Zen-coding is not only a mechanism for unfolding shortcodes. The library also offers extremely useful actions for web developers like: covering text with code developed from shortcodes, collapsing tags, commenting code, removing tags, etc. Spider, on the other hand, is one of the few code editors that fully support the Zen-Coding library!</p>

<h1>Using the zen-coding library in Spider</h1>

<p>Full support for all zen-coding features is offered by a small number of programs, and Spider is among this group, offering the following zen-coding commands (in parentheses are the default keyboard shortcuts, which can be modified in the <a href="settings_toolbars_hotkeys.php">keyboard shortcut settings window</a>):</p>

<ul>
  <li>Expand shortcode (Alt+E)</li>
  <li>Embrace with an expanded shortcut (Ctrl+Alt+W)</li>
  <li>Corresponding tags backward (Alt+Up arrow)</li>
  <li>Corresponding tags forward (Alt + Down Arrow)</li>
  <li>Go to the edit area forward (Alt+Right arrow)</li>
  <li>Go to the edit area backwards (Alt+Left arrow)</li>
  <li>Remove tag (Alt+Del)</li>
  <li>Merge rows (Alt+M)</li>
  <li>Abbreviated/expanded tag (Alt+J)</li>
  <li>Comment (Alt+K)</li>
  <li>Corresponding tags (Alt+P)</li>
  <li>Select whole row (Alt+L)</li>
</ul>

<p>These commands are also available from the <a href="main_menu_tools.php"> Tools menu </a> / Zen-coding Commands and from the <a href="toolbars_often.php">Frequently used</a> toolbar.</p>

<p>Now a simple example of using zen-coding in Spider. First quite complicated to see all the magic So please open a new blank document and paste the following code in it:</p>

<pre>
table+
</pre>

<p>After pasting this text, please place the text cursor at the end (after <i>the footer</i>) and call the command "zen-coding: Expand Shortcut" from the <a href="main_menu_tools.php">Tools</a> / zen-coding commands menu, or run this command with the keyboard shortcut ALT+E. As a result, the entered shortcut will expand to the form:</p>

<pre>
&lt;table&gt;
 &lt;tr&gt;
  &lt;td&gt;&lt;/td&gt;
 &lt;/tr&gt;
&lt;/table&gt;
</pre>

<p>And now a more complicated, sort of magical example of how zen-coding speeds up coding. Let's type the following in the editor:</p>

<pre>
About me
My Pages
News
Blog
Contact
</pre>

<p>Next, let's use the function of covering the expanded shortcut. Let's select all the text typed above and run the command to cover the selected text with an expanded shortcut using the above menu or keyboard shortcut (CTRL+ALT+W). A window will be displayed where you need to enter a shortcut. Enter the abbreviation in this window, for example:</p>

<pre>
div#header&gt;ul#navigation&gt;li.item$*&gt;a&gt;span
</pre>

<p>and click the OK button. As a result, the following content will be created, and the cursor will be positioned at a convenient place to enter the URL for the first menu item!</p>

<pre>
&lt;div id="header"&gt;
  &lt;ul id="navigation"&gt;
    &lt;li class="item1"&gt;&lt;a href=""&gt;&lt;span&gt;About me&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class="item2"&gt;&lt;a href=""&gt;&lt;span&gt;My pages&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class="item3"&gt;&lt;a href=""&gt;&lt;span&gt;News&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class="item4"&gt;&lt;a href=""&gt;&lt;span&gt;Blog&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class="item5"&gt;&lt;a href=""&gt;&lt;span&gt;Contact&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</pre>

<p>These are just two simple examples regarding HTML. <a href="#zen-coding-examples">More examples</a> can be found below, in the description of zen-coding shortcut syntax. In addition to HTML, zen-coding allows CSS, XML code expansion, and Spider automatically toggles the way zen-coding works, based on the currently edited document type or block the cursor is in, such as in a CSS code or XML document. For example, in a CSS document or in a <script></script> block, expanding the code: <tt>fl:l|fc</tt> will generate the code: <tt>float: left;</tt></p>

<p>The source code for the zen-coding library used by Spider can be found in the <i>Settings/zen-coding</i> directory in the file <i>ispidey_zencoding.js</i>.</p><a name="zen-coding-examples"> </a><h2>Zen-coding syntax and examples</h2>

<pre>
Syntax: <b>E#name</b>

Example: div#name
Result: &lt;div id="name"&gt;&lt;/div&gt;
</pre>

<pre>
Syntax: <b>E.name</b>

Example: div.name
Result: &lt;div class="name"&gt;&lt;/div&gt;

Example: div.one.two
Result: &lt;div class="one two"&gt;&lt;/div&gt;

Example: div#name.one.two
Result: &lt;div id="name" class="one two"&gt;&lt;/div&gt;
</pre>

<pre>
Syntax: <b>E&gt;E</b>

Example: head&gt;link

Result:
&lt;head&gt;
    &lt;link/&gt;
&lt;/head&gt;

Example: table&gt;tr&gt;td

Result:
&lt;table&gt;
&lt;tr&gt;
    &lt;td&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;

Example: ul#name&gt;li.item

Result:
&lt;ul id="name"&gt;
    &lt;li class="item"&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

<pre>
Syntax: <b>E+E</b>

Example: p+p

Result:
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;

Example: div#name&gt;p.one+p.two

Result:
&lt;div id="name"&gt;
    &lt;p class="one"&gt;&lt;/p&gt;
    &lt;p class="two"&gt;&lt;/p&gt;
&lt;/div&gt;
</pre>

<pre>
Syntax: <b>E[attr]</b>

Example: p[title]
Result: &lt;p title=""&gt;&lt;/p&gt;

Example: td[colspan=2]
Result: &lt;td colspan="2"&gt;&lt;/td&gt;

Example: span[title="Hello" rel]
Result: &lt;span title="Hello" rel=""&gt;&lt;/span&gt;
</pre>

<pre>
Syntax: <b>E|filter</b>

Example: p.title|e
Result: &lt;p class="title"&gt;&lt;/p&gt;
</pre>

<pre>
Syntax: <b>E*N</b>

Example: p*3
Result:
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;

Example: ul#name&gt;li.item*3
Result:
&lt;ul id="name"&gt;
    &lt;li class="item"&gt;&lt;/li&gt;
    &lt;li class="item"&gt;&lt;/li&gt;
    &lt;li class="item"&gt;&lt;/li&gt;
&lt;/ul&gt;
</pre>

<pre>
Syntax: <b>E*N$</b>

Example: p.name-$*3
Result:
&lt;p class="name-1"&gt;&lt;/p&gt;
&lt;p class="name-2"&gt;&lt;/p&gt;
&lt;p class="name-3"&gt;&lt;/p&gt;

Example: select&gt;option#item-$*3
Result:
&lt;select&gt;
    &lt;option id="item-1"&gt;&lt;/option&gt;
    &lt;option id="item-2"&gt;&lt;/option&gt;
    &lt;option id="item-3"&gt;&lt;/option&gt;
&lt;/select&gt;
</pre>

<pre>
Syntax: <b>E+</b>

Example: ul+
Result:
&lt;ul&gt;
    &lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;

Example: table+
Result:
&lt;table&gt;
&lt;tr&gt;
    &lt;td&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;

Example: dl+
Result:
&lt;dl&gt;
    &lt;dt&gt;&lt;/dt&gt;
    &lt;dd&gt;&lt;/dd&gt;
&lt;/dl&gt;
</pre><br><br><small>Prepared from <a href="https://code.google.com/p/zen-coding/" target="_blank">zen-coding documentation</a></small></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="https://code.google.com/p/zen-coding/" target="_blank">Online zen-coding documentation</a></li>
  <li><a href="main_editor_navigation.php">Different ways to navigate a document</a></li>
  <li><a href="main_menu_tools_navigation.php">Commands to help you navigate the document</a></li>
  <li><a href="main_tabs_navigator.php">Navigator tab</a></li>
  <li><a href="settings_toolbars.php">Program Settings - Toolbars, menu, and shortcut settings</a></li>
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