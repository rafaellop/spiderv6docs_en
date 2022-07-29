<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Program settings - Date and time templates</title>

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
<h1>Program settings - Date and time templates</h1>

<!-- tre&#347;&#263; pomocy -->
<p>This window lists the templates used when pasting the date and time with the Time / Date command in <a href="main_menu_edit.php"> Edit Menu </a>, or in the drop-down menu by clicking the arrow next to this command. The buttons next to the list allow you to add, delete, change the order of templates, as well as restore default templates.</p><p>When creating a template, use the following symbols, which will be replaced by the program with the appropriate date and time values:</p><ul>
        <li><b>y</b> or <b>yy</b> - year (always 2 digits, e.g. "99", "05")</li><li> <b>yyy</b> or <b>yyyy</b> - year (always 4 digits, e.g. "1999", "2005")</li><li><b>m</b> - month number (1 or 2 digits, from 1 to 12)</li><li><b>mm</b> - month number (always 2 digits, preceded by a zero, from 01 to 12)</li><li><b>mmm</b> - abbreviation of the month name (e.g. "Jan", "Jun", "Dec")</li><li><b>mmmm</b> - full name of the month (e.g. 'January', 'June', 'December')</li><li><b>d</b> - number of the day of the month (1 or 2 digits, from 1 to 31)</li><li><b>dd</b> - number of the day of the month (always 2 digits, from 01 to 31)</li><li><b>h</b>, <b>hh</b> - time (1 or 2 respectively, and always 2 digits)</li><li><b>hampm</b>, <b>hhampm</b> - hour in 12-hour format (1 or 2 respectively, and always 2 digits between 0-12 or 00-12)</li><li><b>n</b>, <b>nn</b> - minute (1 or 2 respectively, and always 2 digits)</li><li><b>s</b>, <b>ss</b> - second (1 or 2 respectively, and always 2 digits)</li><li><b>unixtimestamp</b> - Unix timestamp (number of seconds elapsed since 00:00:00 on 1 January 1970)</li></ul>

<p><b>NOTE:</b> All other characters you wish to include in the date and time template must be enclosed in inverted commas!</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="settings.php#settingslist">Main settings</a></li><li><a href="main_menu_edit.php">Edit menu</a></li></ul>
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
