<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<script type="text/javascript" language="JavaScript">
<!--

//-->
</script>
<title>Support for JavaScript - Dynamic Code</title>

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
<h1>Support for JavaScript - Dynamic Code</h1>



<!-- tre&#347;&#263; pomocy -->


<p>The JavaScript support in Spider also includes a hint mechanism called Dynamic Code. In fact, this mechanism consists of two tools:</p><ul>
  <li><a href="#code_completion">Dynamic code</a></li>
  <li><a href="#code_parameter">Dynamic hints</a></li>
</ul>

<p><b> NOTE! </b> <br>
 Dynamic code is not available for VBScript.</p>

<p>Dynamic code takes data from the <a href="tagdata_editor_tdf_scripts.php">definition file for scripts</a> and parses existing script code. In this way, it is possible to provide names and argument lists of built-in functions and predefined and declared JavaScript variables and constants in the script. This allows you to write scripts much more efficiently - you don't have to remember the exact names of all JavaScript functions, or a long list of variables.</p><a name="code_completion"></a><h2>Dynamic code</h2>Dynamic code works by suggesting the names of usable elements (functions, variables and constants). The tool can be called in two ways:<ol>
  <li><b> automatic display of hints </b> - use the command on the editor mini bar (the command icon is shown on the right). Hints will appear after a while of inactivity.</li>
  <li><b>using keyboard shortcut - </b> you can always call up a balloon with a hint to the currently typed function by pressing <tt>Ctrl+Space</tt>keyboard shortcut</li>
</ol>


<p>If you have activated automatic display, type the beginning of the function name and wait a moment - a list with items you can use will appear. The list will highlight the first item that most closely matches the string you entered. If automatic hints is disabled, use <tt>Ctrl+Space</tt> shortcut to get a hint.</p>

<p>For example, if there is a function:</p><pre>
<b>function</b> myfunc <b>(a, b)</b>
<b>{</b>
      a = a + b;
<b>}</b>
</pre>

<p>Now just type (vertical line means the cursor in the document): <br></p><pre>myf|</pre>and use the shortcut <tt>Ctrl+Space</tt> (or wait a moment if you activated the dynamic code). A window will appear with the name <tt>my_function</tt>.<p>You can navigate through the list using scroll bars, arrows, etc. (as in any window). To insert the selected structure into the document, press <tt>Enter</tt>, or click on it.</p>

<p>The icons next to the names indicate whether it is a variable, constant, or function name</p>

<h2><a name="code_parameter"></a>Dynamic hints</h2>Dynamic hints work by prompting for function arguments as the script is being written. The tool gets the data similarly to the dynamic code - from the definition file and from the script analysis results. Thanks to that you don't have to remember or search in the code which arguments are required by the function.<p>The tool can be invoked in two ways:<br></p><ol>
   <li><b>automatic hints</b> - use the command on the editor's mini bar. After typing the function name and opening bracket (eg. <b><tt>my_function(</tt></b> ), wait for a moment and a balloon will pop up with arguments to use. The argument you want to use will be highlighted in bold. The command icon is shown above.</li>
  <li><b>using keyboard shortcut - </b> you can always call up a balloon with a tooltip for the currently used function by pressing <tt>ctrl+</tt>keyboard shortcut</li>
</ol>

<p><b>Settings and other dynamic hints options</b><br>
To adjust the dynamic hints to your needs, use the <a href="settings_codeinsight_scripts.php">Program Settings - Dynamic hints in scripts</a> window.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="coding_scripts_jsvb.php">Support for JavaScript and VBScript in general</a></li>
  <li><a href="main_editor_codeinsight.php">Dynamic hints</a></li>
  <li><a href="settings_codeinsight_scripts.php">Program settings - Dynamic hints in scripts</a></li>
   <li><a href="tagdata_editor_tdf_scripts.php">Definition file editor for scripts</a></li>
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
