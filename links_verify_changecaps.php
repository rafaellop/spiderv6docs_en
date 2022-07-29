<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Main menu - Tools / Code Verification</title>

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
<h1>Link validation - case-sensitive</h1>

<!-- Tre&#347;&#263; pomocy -->

<p>On servers running Unix and similar operating systems (e.g. Linux) - in contrast to MS Windows - file names are case-sensitive, and so are the links to these files in HTML documents. To avoid errors, it <b>is highly recommended that you use only lowercase letters</b>. This way you will not have to think about the case of letters in file and folder names, because they will simply always be written in lower case. It should be noted that inconsistent case in file names and in links to those files is one of the most common mistakes made by less experienced webmasters.</p><p>This menu includes commands for changing the case of links:</p>


<p><b> Local links in lowercase </b> <br>
 Click, change the case of local links (to resources located on the same computer as the edited file) to lower case.</p><p><b> Links in CAPITAL letters </b> <br>
 Click to change the case of local links (to resources located on the same computer as the edited file) to CAPITAL letters.</p><p><b> Try to correct case in the path </b> <br>
 Click to have the program try to find the files indicated by the links and adjust the case of the links to the actual state.</p><p><b> <a href="down_syntax_check_css.php"> Try to correct absolute to relative </a> </b> <br>
 Click to make the program try to find on the disk the documents to which absolute links lead (consisting of the full path to the file on the disk <tt>D:\folder\images\image.jpg</tt> possible, he turned the addresses into relative ones (of type <tt> pictures / picture.jpg </tt>).</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="main_menu_tools.php">Main menu - Tools</a></li><li><a href="down_syntax_check.php"> Document syntax validation </a></li><li><a href="settings_toolbars.php">Program settings - Toolbars, menus and shortcuts settings</a></li></ul></td>
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