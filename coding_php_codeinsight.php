<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Support for PHP - Dynamic code</title>

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
<h1>Support for PHP - Dynamic code</h1>



<!-- tre&#347;&#263; pomocy -->


<p>PHP support in Spider also includes a hint mechanism called Dynamic Code. In fact, this mechanism consists of two tools:</p><ul>
   <li><a href="#code_completion">Dynamic code</a></li>
   <li><a href="#code_parameter">Dynamic hints</a></li>
</ul>

<p>Dynamic code takes data from <a href="tagdata_editor_tdf_php.php">PHP definition file</a> and parses existing script code. This way, it is possible to give names and argument lists of built-in functions (and there are well over 2000 of them in total, including the ones included in the modules) and predefined and declared PHP variables and constants in the script. This makes it much more efficient to write scripts - you don't have to remember the exact names of all PHP functions, you don't have to remember the names of methods in classes, or the long list of variables.</p>

<p>However, support for PHP begins in Spider as soon as the string <tt></tt> string indicating the beginning of a PHP block. When you enter it, and then press <tt>Space</tt> or <tt>Enter</tt>, the code will be automatically completed with the <tt>?&gt;</tt> symbol (the end of the PHP block). Depending on the selected option in <a href="settings_codeinsight_php.php">Program settings / Other settings / Enablers... / Dynamic PHP Hints</a>, an extra blank line may or may not be inserted between those symbols.</p>


<h2><a name="code_completion"></a>Dynamic code</h2>
<p>Dynamic code works by suggesting the names of usable elements (functions, class methods, variables and constants). The tool can be called in two ways:</p>
<ol>
   <li>- using the dynamic code activation command on the editor mini bar (the icon shown next). Hints will appear after a while of inactivity.</li>
   <li><b>using keyboard shortcut - </b> you can always call up a balloon with a hint to the currently typed function by pressing <tt>Ctrl+Space</tt>keyboard shortcut</li>
</ol>


<p>If you have enabled automatic display, type a function name (e.g. <b><tt>mysql_</tt></b>) and wait a moment - a list of items you can use will appear. The list will highlight the first item that most closely matches the string you typed (e.g. for <b><tt>mysql_c</tt></b> this will be the name of the function <b><tt>mysql_connect()</tt></b>). If auto-hints is disabled, use <tt>Ctrl+Space</tt> to get a hint.</p>

<p>The tool also hints method names in classes based on which objects were created. For example, if there is a class and its object:</p><pre><b>class</b> A
<b>{</b>
   <b>function</b> A <b>()</b>
   <b>{</b>
      // function code
   <b>}</b>
<b>}</b>

$obj = <b>new</b> A;
</pre>

<p>Now just type (vertical line means the cursor in the document): <br></p><pre>$obj-&amp;gt;|</pre>and use the shortcut <tt>Ctrl+Space</tt> (or wait a moment if you activated the dynamic code). <tt>A</tt> window will appear with the name of the <tt>A()</tt> method.

Similarly, you can use the described mechanism when creating a class definition <tt>extending</tt> another class (inheriting from a class) using the <tt>extends</tt> keyword. The program takes into account the scope of visibility of fields and methods:<pre><b>class</b> A
<b>{</b>
   <b>public function</b> A <b>()</b>
   <b>{</b>
      // code
   <b>}</b>

   <b>protected function</b> R <b>()</b>
   <b>{</b>
      // code
   <b>}</b>
<b>}</b>

<b>class</b> B <b>extends</b> A
<b>{</b>
  <b>public function</b> B <b>()</b>
   <b>{</b>
     // code
   <b>}</b>

   <b>private function</b> P <b>()</b>
   <b>{</b>
      // code
   <b>}</b>
<b>}</b>

$obj = <b>new</b> B;</pre>

<p>In the above example, the mechanism of dynamic code will also come to our aid when selecting the class from which class <tt>B</tt> should inherit (just press <tt>Ctrl+Space</tt> after typing the word <tt>extends</tt>, and a list of classes will appear), as well as when using the methods provided by both classes. As you know, the object created on the basis of class <tt>B</tt> will also handle the methods contained in class <tt>A</tt>, so in the construction hint:<br></p><pre>$obj-&amp;gt;|</pre>method names <tt>A()</tt> and <tt>B(</tt>) will be found, but the function names <tt>R</tt> () and <tt>P</tt>() will not.<p>In the case of PHP built-in functions, the type of the variable returned by the function is displayed before the function name, e.g.: <tt>int count(</tt> ) (which means that the count() function returns an <tt>integer</tt> result).</p>

<p>You can navigate through the list using scroll bars, arrows, etc. (as in any window). To insert the selected structure into the document, press <tt>Enter</tt>, or click on it.</p>

<p>The icons next to the names indicate whether it is a variable, constant, or function name</p>

<h2><a name="code_parameter"></a>Dynamic hints</h2>
<p>Dynamic hints work by prompting for function arguments as the script is being written. The tool gets the data similarly to the dynamic code - from the definition file and from the script analysis results. Thanks to that you don't have to remember or search in the code which arguments are required by the function.</p>
<p>The tool can be invoked in two ways:<br></p><ol>
   <li><b>automatic hints</b> - use the command in the editor's mini bar. After typing the function name and opening parenthesis (eg. <b><tt>mysql_connect(</tt></b> ), wait for a moment and a balloon will pop up with arguments to use. The argument you want to use will be highlighted in bold. The command icon is shown above.</li>
   <li><b>using keyboard shortcut - </b> you can always call up a balloon with a tooltip for the currently used function by pressing <tt>ctrl+</tt>keyboard shortcut</li>
</ol>

<p><b>Settings and other dynamic hints options</b><br>
When developing complex projects, you may also need hints for functions not directly linked to the script being edited. For example, the current script may be attached to another file or the entire system (e.g. as a module/plugin ). In this case, there are no functions declared anywhere in the current script that you may want to use. However, to make the Dynamic Code work for these functions as well, you can force the file (or files) with their declarations to be included in the Dynamic Code mechanism. To do this, you need to use the <a href="settings_codeinsight_php.php">Program Settings - Dynamic PHP Hints</a> window.</p>

<p>In the same window, you can select the pledges of functions and variables to appear in the hints.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="coding_php.php">Support for PHP - general</a></li>
   <li><a href="main_editor_codeinsight.php">Dynamic code</a></li>
   <li><a href="settings_codeinsight_php.php">Program settings - Dynamic tooltips in PHP</a></li>
   <li><a href="tagdata_editor_tdf_php.php">Definition file editor for PHP</a></li></ul>
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