<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Program settings - Dynamic PHP hints</title>

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
<h1>Program settings - Dynamic PHP hints</h1>



<!-- tre&#347;&#263; pomocy -->
<p>This group of settings allows you to define how the dynamic hint functions for the PHP language work. In this window, there are several groups of settings responsible for the various functions of the tooltip.</p><h2>Dynamic PHP hints</h2>

<p>In this group of settings there are toggles that allow you to specify the content presented in the dynamic help for PHP. Check the options that should be considered when creating a dynamic help list for PHP. In the case of PHP functions, you can also indicate which function categories should be included in the hint list.</p><p>This group also includes a list containing a list of PHP function categories, the content (functions) of which will be presented on the dynamic list of PHP hints. The following options are also available for the function category list:</p><p><b>Display only compatible with PHP 3</b><br>
Check this option to only display functions from PHP version 3 in the dynamic hint list.</p><p><b>Display the returned type for PHP built-in functions</b><br>
Check this option to include information about the type of data returned by the function in the tooltip (as PHP performs type conversion on-the-fly and this is not provided at function declaration, this information is only available for built-in functions).</p><p><b>Type compatibility</b><br>
Select the option that corresponds to your preferred verification of the compatibility of the function proposals in the dynamic help list with what you want.</p><p>There are three more options in the group of dynamic hints for PHP:</p><p><b>Do not treat the ?&amp;gt; characters in inverted commas as PHP block delimiters</b><br>
Dynamic hints for PHP work within the block &amp;lt;? .. ?&amp;gt;. Sometimes, however, the program may get lost when a string containing such a fragment is used in a PHP block. If the program encounters such a place, it disables support for dynamic hints for PHP. If you want to guard against this, you can check this option. The program will then check whether the encountered end of the ?&amp;gt; block is by any chance part of the string. This preserves the operation of dynamic hints, however, checking this option significantly delays the operation of dynamic hints for PHP.</p><p><b>Display only phrases beginning with the text under the cursor</b><br>
Check this option if you want only items matching the text entered to be included in the hints.</p><p><b>When completing the &amp;lt;? and &amp;lt;?php insert a blank line between them</b><br>
Check if you want the completion of &amp;lt;? and &amp;lt;?php into ?&amp;gt; automatically insert an empty line and place the cursor there</p><h2>Dynamic PHP help</h2>

<p>This group includes the settings for the balloon help displayed for PHP code:</p><p><b>Display function argument types in hints</b><br>
Check this option if you want the program to display the types of arguments the function expects during dynamic balloon help.</p><p><b>Highlight current function</b> <br>argument
Select this option if you want the program to display in the tooltip for the function in the appropriate bold the attribute of the function that should be entered at the time.</p><h2>Definition file editor for PHP</h2>

<p>By using the button in this group, you will enable the <a href="tagdata_editor_tdf_php.php"> definition file editor for PHP </a> tool, which allows you to create definitions for new elements of the PHP language or modify definitions for already defined functions and objects PHP.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings_codeinsight.php#settingslistcodeinsight">Other facilitation settings</a></li><li><a href="main_editor_codeinsight.php">Dynamic code</a></li><li><a href="coding_php.php">Using PHP in Spider</a></li><li><a href="tagdata_editor_tdf_php.php">Definition file editor for PHP</a></li></ul>
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
