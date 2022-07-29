<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Quick Start</title>

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
<h1>Tools - Quick Start</h1>

<p>Quick Start is a tool that allows you to prepare the skeleton of a page in a few steps in the form of headers, <a href="tool_meta.php">META</a> section and <a href="tool_body.php">BODY</a> section. Creation is done in several steps. First, the window described here appears, then depending on the switch settings, the <a href="tool_meta.php">META</a> and <a href="tool_body.php">BODY</a> editor windows appear.</p><p>You can launch the Quick Start window from <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_tools.php"> Tools </a> / <a href="main_menu_tools_structure.php"> Structure </a> / Quick Start or <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_tools.php"> Tools </a> / <a href="main_menu_tools_creators.php"> Markup Code Wizards </a> / Quick Start, but also from <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_file.php"> File </a> / <a href="main_menu_file_new.php"> New </a> / <a href="main_menu_tools_creators.php"> Tag Code Wizards </a> / Quick Start. Of course also from the <a href="toolbars_often.php"> Often Used </a> toolbar and the <tt> Shift + Ctrl + Q </tt> shortcut. The command icon is shown above.</p><h2>Window appearance</h2>

<p>The window consists of several fields that allow you to describe the main parameters of the created document. There are such options as:</p><p><b>Document type declaration</b><br>
The DTD specifies the syntax of the language used in the document.</p><p><b>Document title</b><br>
Enter here the title of the document to be displayed in the title bar of the browser window.</p><p><b>Document base address</b><br>
Enter here the address that the browser will use to read the elements pointed to by relative paths. This is not required.</p><p>If you want the <b>Quick Start</b> window to allow you to create additional sections in the document, check the switches:</p><p><b>Include a META section</b><br>
Check if you want to proceed to defining the parameters of the <a href="tool_meta.php">META section</a> after pressing OK.</p><p><b>Include a BODY section</b><br>
Check if you want to proceed to specifying <a href="tool_body.php">BODY tag</a> settings after pressing OK.</p><p><b>Create a FRAMESET frame structure</b><br>
Check if you want to proceed to defining a frame structure using the <a href="tool_frameeditor.php">Frame Wizard</a> after pressing OK. This option is only available if you select a DOCTYPE suitable for documents with frame definition.</p><p><b>Include XML prologue for XML type documents</b><br>
Causes the XML prologue <tt>&amp;lt;?xml version="1.0" encoding="encoding"?&amp;gt;</tt> to be included for XML type documents. This option is available only if you select a DOCTYPE suitable for XML type documents.</p><p>When you select these switches, further tools will be launched, with which you will specify further parameters. For more information on these tools, see the help topics dedicated to them.</p><p><b>Create a new document during Quick Start</b><br>
You can disable this option so that the result of Quick Start replaces the text in the current document instead of creating a new one.</p>

<p>After going through all the steps, a new document will be created and the generated structure will be inserted into it.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_meta.php">META Settings Tool</a></li><li><a href="tool_body.php">BODY settings tool</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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