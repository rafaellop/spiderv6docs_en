<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring_tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>Tools - Object insertion</title>

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
<h1>Tools - Object insertion</h1>



<p>With this tool, you can embed objects of various types (Java, ActiveX, etc.) on the page. To run this tool, go to <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_objects.php">Scripts and objects</a> / Embedded object. You will also run the described tool from the <a href="toolbars_objects_scripts.php">Java, ActiveX, SSI and other</a> toolbars. It should be mentioned here that this tool appears under several icons and allows you to insert various objects using the default designation of the corresponding switches.</p><h2>Object Settings tab</h2>

<p>The first tab is used to specify the basic properties of the object to be inserted. If you select the <b>Code</b> switch, it is necessary to choose the type of object to be embedded (ActiveX, Java or other). For ActiveX controls, the selection is made from the list on the right, which contains all the controls installed in the system. For a Java applet, it will be necessary to indicate the path to the *.class or *.jar file in the field named <b>Path</b>. You can also optionally specify the MIME type of this file.</p><p>On the <b>Data</b> tab, we specify the path and MIME type of the data object that will be placed on the page (if the "Code" switch is not checked) or passed to the embedded application (if the "Code" switch is checked).</p><p>At the bottom of the first tab, other parameters are specified: the base address for the specified paths, the name of the file containing the object's archived files (this allows you to reduce transfer time from the network), the name under which the object will be seen on the page, and the message that will be displayed before the control is loaded. You should also specify the location of the object: size, margins, border and alignment on the page.</p><p>Also important is the "Tag" field, which allows you to decide with which tag the object will be inserted into the page. The <tt>OBJECT</tt> tag is compatible with HTML 4.0 and gives the greatest possibilities, but if you want to display the Java applet correctly also in older browsers, you may need to use the <tt>APPLET</tt> tag, the use of which, however, the HTML specification does not recommend.</p><h2>Parameters for the object tab</h2>

<p>On the second tab o nazm you can specify additional parameters that will be passed to the inserted object at startup. They are set using the <a href="tool_param.php">object parameter</a> tool, which is available directly in this window after clicking the button marked with a plus.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="tool_multimedia_insert.php">Embedding multimedia (Flash, Quciktime, etc)</a></li><li><a href="tool_param.php">Object parameter</a></li><li><a href="main_menu_tools_objects.php"> Other Scripts and Objects Tools </a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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
