<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Chameleon - Conversion Rule Editor</title>

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
<h1>Tools - Chameleon - Conversion rules editor</h1>



<p>The file name conversion rules editor is a sub-window of the tool called <a href="tool_chameleon.php">Chameleon</a>. In this window, you can set up file name conversion rules using the settings found here.</p><h2>Set conversion rules</h2>

<p>We will now discuss the next elements of the conversion rules editor window. Here you will find the following settings:</p><p><b>Rule for files of type</b><br>
From this list you can select the file extension for which you want to set a renaming rule. You can also select "All" to set a rule for all files selected in the previous boards.</p><p><b>Copy renamed files</b><br>
If you check this box, renamed files will be copied to the folder indicated in the folder box below, and the original files will remain intact unless you check the switch below the folder box.</p><p><b>Folder for renamed files</b><br>
If you have checked the switch above, you can use the button next to it to select the folder to which renamed files will be copied.</p><p><b>Remove copied files from original location</b><br>
If you check this box, the original files copied to the folder above will be deleted.</p><p><b>Changing the case of file names</b><br>
These three switches allow you to change the case of the file names undergoing conversion.</p><p><b>Set a rule for renaming</b><br>
Check this switch to be able to set additional file renaming rules.</p><p><b>Name by rule and original extension</b><br>
If you select this switch, you will not be able to change the file extension and it will remain the same as for the original file.</p><p><b>Name by rule and new extension</b><br>
If you select this switch, you will be able to set a new extension for the file in addition to the rule.</p><p><b>Original name</b><br>
If you check this switch, the new file name will include the original name.</p><p><b>Additional part of the name</b><br>
Enter here the additional text you want to make part of the new file name.</p><p><b>Numbering enabled</b><br>
If you want the files to be numbered sequentially, turn this switch on.</p><p><b>Start numbering from</b><br>
Select the number you want to start numbering from.</p><p><b>Index before name</b><br>
If consecutive file numbers are to be placed before the name, check this switch.</p><p><b>Create an index using n places</b><br>
Check this switch to create numbering on a certain number of fields, for example: an index on 2 fields will result in numbering according to the following rule: <tt>01 02 03 04 ...</tt>, etc.</p><p><b>Number of numbering fields</b><br>
Enter the number of fields, for example: an index on 2 fields will result in numbering according to the following rule: <tt>01 02 03 04 ...</tt>, etc.</p><p><b>New extension</b><br>
Enter a new extension as long as you have checked the option to create new names with a new extension, and remember that the extension must start with a dot and have less than 6 characters including the dot.</p><p><b>Replace spaces with character...</b><br>
Check this option to have the spaces in the original file names replaced with the character entered in the box next to it. Remember that spaces in URLs, although they may be handled correctly by browsers, are invalid characters.</p><p><b>Replace Polish characters and special characters</b><br>
Check this option to convert Polish diacritical characters (ą, ć, ę, etc.), as well as other special characters, into characters without "tails".</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_chameleon.php">Chameleon - File renaming tool</a>
a&amp;gt;</li></ul>
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
