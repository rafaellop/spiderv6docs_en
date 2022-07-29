<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Definition file editor for PHP - New PHP function</title>

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
<h1>Definition file editor for PHP - New PHP function</h1>



<p>This window is used to add the definition of a new function for the PHP definition file. Using the fields in this window, you can create a function definition so that Spider can handle it from the dynamic hints and the <a href="main_tabs_languages.php">Languages</a> tab. The fields in the window are as follows:</p><p><b>Function name</b><br>
In this field, enter a function name such as <tt>strlen</tt>.</p><p><b>Type of result</b><br>
This field allows you to specify what type is the result returned by the function. The result can be of the following type:</p><ul>
	<li><b>void</b></li><li><b>string</b></li><li><b>int</b></li><li><b>float</b></li><li><b>bool</b></li><li><b>array</b></li><li><b>object</b></li><li><b>mixed</b></li></ul>

<p><b>List of function arguments</b><br>
Enter here the list of arguments accepted by the function. The arguments should be separated by commas, while each argument should consist of a type statement and a name (both words should be separated by a space - according to PHP/C/C++ syntax). Optional arguments can be enclosed in square brackets. For example, for the <tt>strlen</tt> function it will be <tt>string str</tt>.</p><p><b>PHP version</b><br>
In this field, enter information about the support from the different PHP versions for the function you are adding or modifying, e.g. <tt>PHP 3, PHP 4</tt>.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tagdata_editor_tdf_php.php">PHP definition file editor</a></li><li><a href="settings_codeinsight_php.php">Dynamic Code Settings for PHP</a></li><li><a href="main_tabs_languages.php">Languages tab</a></li></ul>
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
