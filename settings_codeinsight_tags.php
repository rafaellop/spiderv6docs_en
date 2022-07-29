<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Program settings - Dynamic hints for tags</title>

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
<h1>Program settings - Dynamic hints for tags</h1>


<!-- tre&#347;&#263; pomocy -->
<p>This group of settings allows you to define how the dynamic hints functions for markup languages or tag completion rules work. In this window, you will find several groups, each of which covers slightly different aspects of how these functions work.</p><h2>General</h2>

<p>Here are the general options that govern how the dynamic hint feature works:</p><p><b>Disable dynamic hints functions</b><br>
Check this option to disable the operation of the balloon tooltips for tags, as well as the automatic display of a list of tag attributes. Once you have disabled dynamic tooltips and tags, you can always display such a list using the keyboard shortcuts Ctrl+Space and Ctrl+Tag.</p><p><b>Dynamic hints for tags, attributes and values</b><br>
Check this option to enable the automatic display of a list of tags, attributes and their suggested values displayed after the time specified below. You can set the range of information using the options in the Tag <a href="#tags_list">List</a> and Attribute <a href="#attrs_events_list">and Event List</a> groups (below on this page).</p><p><b>Do not automatically display hints when clicking</b><br>
If you do not want the hint list box to be restored each time you click the mouse within a tag or php code during the automatic display of the hint list, check this option.</p>

<p><b>Dynamic support for tags and attributes</b><br>
Check this option to enable the automatic display of help for the current tag in balloons after the time specified below. You can set the range of information using the options in the <a href="#dynamic_help">Dynamic help for tags and attributes</a> group (at the bottom of this page).</p><p><b>Display after ... seconds</b><br>
Use this slider to set the time (in seconds) after which, in the event of user inactivity, a list of tags or attributes or a dynamic balloon tooltip will be displayed.




<a name="tags_list"></a></p><h2>Tag List</h2>

<p>This group includes setting options for displaying the tooltip for tags.</p>
<p>Select the appropriate options depending on what you want to see in the list of suggestions. The option names explain their use.</p><a name="attrs_events_list"></a><h2>List of attributes and events</h2>

<p>This group includes setting options for the display of tooltips for the attributes and events of the tag.</p>
<p>Select the appropriate options depending on what you want to see in the list of suggestions. The option names explain their use.</p><a name="dynamic_help"></a><h2>Dynamic help for tags and attributes</h2>

<p>This group provides options for setting the help display for tags.</p>
<p>Select the appropriate options depending on what you want to see in the help hint. The option names explain their use.</p>

<!-- 
<p><b>Gdy kursor w atrybucie znacznika, poka&#380; opis tego atrybutu</b><br />
Zaznacz t&#281; opcj&#281;, aby w&#322;&#261;czy&#263; wy&#347;wietlanie podpowiedzi r&oacute;wnie&#380; wtedy, gdy kursor znajduje si&#281; wewn&#261;trz atrybutu znacznika


<p><b>Nie pokazuj dost&#281;pnych zdarze&#324; w dymkach podpowiedzi</b><br />
Zaznacz t&#281; opcj&#281;, aby w dymku pomocy nie pojawia&#322;a si&#281; lista zdarze&#324; dost&#281;pnych dla bie&#380;&#261;cego znacznika (mo&#380;e ona by&#263; bardzo d&#322;uga).

<p><b>Pokazuj informacje o wsparciu w przegl&#261;darkach</b><br />
Zaznacz ten prze&#322;acznik, aby w dymku pomocy pojawia&#322;a si&#281; informacja o wsparciu danego elementu w r&oacute;&#380;nych przegl&#261;darkach internetowych. -->




<h2>Definition file editor</h2>



<p>By using the button in this group, you will enable the <a href="tagdata_editor_tdf.php"> tag definition files editor </a> tool, which allows you to create definitions for new tags or modify definitions for markup languages already defined in Spider, e.g. rules for auto-completion or supported by attribute tags.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings_codeinsight.php#settingslistcodeinsight">Other facilitation settings</a></li><li><a href="main_editor_codeinsight.php">Dynamic code</a></li><li><a href="coding_css.php">Creating style sheets</a></li><li><a href="tagdata_editor_tdf.php">Tag definition file editor</a></li></ul>
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
