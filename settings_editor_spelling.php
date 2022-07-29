<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Program settings - Spell check and syntax verification</title>

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
<h1>Program settings - Spell check and syntax verification</h1>

<!-- tre&#347;&#263; pomocy -->
<p>In this group of settings you will find options to configure the spell checker and <a href="down_syntax_check.php"> syntax validation </a> that are built into Spider. This category includes the following groups of settings:</p><h2>Ignoring words as correct</h2>

<p>In this group you will find a set of switches responsible for ignoring words and considering them as correct. Select which kinds of document components are ignored during the spell check and considered valid (skipped) by checking the appropriate switches.</p><h2>User dictionary</h2>

<p>This group applies to the user dictionary that is created when you add words to the dictionary. By checking the <b> Generate suggestions based on the main dictionary only </b> switch, you will cause the words added to the user dictionary to be suggested with suggestions from the main dictionary of the program. Additionally, in this group there is a button that allows you to start the user dictionary editor, where you can modify its content.</p><h2>Highlight spelling errors in the document</h2>

<p>Here you can define the behavior of the dynamic spell checker as you type. The following settings are available:</p><p><b>Underline spelling errors by default in newly opened documents</b><br>
Check this option if you want on-the-fly underlining of misspelled words to be applied to newly opened documents. Newly opened documents are those that have not yet been assigned an ADD document information file. This file remembers the error highlighting settings independently of this option for each document separately.</p><p><b>Underline color</b><br>
From this list, select the color to be used to underline misspelled words.


<a name="autocorrect"></a></p><h2>Autocorrect</h2>
<p><b>Correct the FIrst TWo CAps </b><br>
Check this option if you want to correct the two initial capitals so that the first letter remains capital and the second letter is converted to lower case.</p><p><b>Replace when typing</b><br>
Check this switch to allow word pairs to be entered in the list<b>(Word</b> - <b>Replace with:</b>) to be automatically replaced. 

<a name="syntaxcheck"></a></p><h2>Syntax verification</h2>
<p>This group of settings corresponds to the <a href="down_syntax_check.php"> syntax verification </a> functions and CSS provided by Spider. You will find two tabs here:</p><ul>
<li>Tags and general verification</li>
<li>CSS syntax verification</li>
</ul>
<p>These tabs contain options whose names explain their use. In addition, on each of the tabs you will find a tool that allows you to configure the online code validation function using validators provided by W3C®. These are the <a href="settings_w3c_html.php"> online markup verifier </a> and <a href="settings_w3c_css.php"> online CSS syntax verifier settings </a> .</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings_editor.php#settingslisteditor">Other editor settings</a></li><li><a href="spelling.php">Spell checking</a></li><li><a href="down_syntax_check.php">Syntax verification</a></li></ul>
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