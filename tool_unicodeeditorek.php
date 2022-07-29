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
<title>Tools - Unicode Editor</title>


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
<h1>Tools - Unicode Editor</h1>

<p>Unicode Editor is used to facilitate working with Unicode-encoded texts . You can open it using the command in the <a href="main_menu_spelling.php">Spelling menu</a>, or <a href="main_menu_view.php">the Display menu</a>. Using the editor you can:</p><ul>
        <li>copy text (with automatic conversion of entities to Unicode characters) from the Spider editor to the editor, and then to other programs,</li>
        <li>paste text from other programs into the editor with simultaneous conversion of Unicode characters into entities</li>
</ul>The Unicode editor works in such a way that in the form of Entities, those characters are pasted that have no representation in the current character set. Therefore, for a string consisting of, for example, Polish characters, Entities will not be pasted, because these characters are correctly displayed in the Spider's main editor and there is simply no need for it. However, when you enter text into the Unicode Editor that has no representation in the current character set, inserting the text from the Unicode Editor into the editor will insert the entities.<p><b>For example:</b><br>
We will enter the text into the editor:</p><ul>
        <li>Greek: <b>&#932;&#943; &#949;&#7990;&#957;&#945;&#953; &#964;&#8056;</b>.</li><li>Persian: <b>&#1610;&#1608;&#1606;&#1740;&#1705;&#1615;&#1583; &#1670;&#1610;&#1587;&#1578;&#1567;</b></li></ul>When pasted from Unicode Editor into the editor (assuming the document is encoded in Unicode), it will take the form:<ul>
        <li>Greek text: <b>&amp;#932;&amp;#943; &amp;#949;&amp;#7990;&amp;#957;&amp;#945;&amp;#953; &amp;#964;&amp;#8056;</b></li><li>Persian text: <b>&amp;#1610;&amp;#1608;&amp;#1606;&amp;#1740;&amp;#8204;&amp;#1705;&amp;#1615;&amp;#1583; &amp;#1670;&amp;#1610;&amp;#1587;&amp;#1578;&amp;#1567;</b></li></ul>

<h3>The tool consists of a menu and a text edit box.</h3>

<p><b>Getting text from the editor...</b><br>
Click to take the text selected in the editor and paste it into the Unicode editor with simultaneous conversion of entities to Unicode characters.</p><p><b>Inserting text into the editor...</b><br>
Click to insert text from the Unicode editor into the editor window with simultaneous conversion of Unicode characters to entities. If a piece of text was selected in the editor, only it will be inserted into the editor.</p><p><b>Clearing the contents of the editor</b><br>
Click to clear the contents of the Unicode editor.</p><p><b>Cut</b><br>
Click to cut the selected text from the Unicode editor to the clipboard (the default shortcut <tt>Ctrl+X</tt>).</p><p><b>Paste</b><br>
Click to paste the contents of the clipboard into the Unicode editor (default shortcut <tt>Ctrl+V</tt>). You can also use the commands in the drop-down menu and paste the text with or without UTF character entity replacement (the default).</p><p><b>Select all</b> <br>
Click to select all text in the editor window.</p><p><b>Line wrapping</b><br>
Click to enable line wrapping in the Editor window.</p><p><b>Font selection in the editor</b><br>
Click to launch a tool that allows you to select the font used in the editor.</p><p><b>Help for the tool</b><br>
Click to view this help topic.</p><h2>Other options for entering text in Unicode</h2>

<p>Spider also supports entering text into Unicode-encoded documents in other ways. Simply enter text in any editor that supports this format, and then simply paste it into the editor. Any characters that might cause display problems will be converted to entities.</p>

<p>To edit such text again, just use the Unicode Editor.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="charset_encoding.php">Encoding national characters in Spider</a></li>
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
