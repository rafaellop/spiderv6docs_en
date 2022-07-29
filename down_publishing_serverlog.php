<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Bottom results panel - Record of communication between Spider and a server</title>

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
<h1>Bottom results panel - Record of communication between Spider and a server</h1>

<!-- tre&#347;&#263; pomocy -->
<p>This view of the <a href="down_publishing.php"> Publishing Operations </a> tab on the <a href="down_panel.php"> bottom results pane </a> shows what is known as server log, i.e. a record of communication between the Spider and the server. A log is created for each operation performed on the server, be it from the <a href="main_tabs_myftpservers.php">Servers</a> , <a href="down_publishing_ftpqueue.php"> file queue </a> or <a href="service_tool_synchronization.php"> tabs </a><a href="service_tool_synchronization.php"> sync </a> .</p><p>An example log might look like the following:</p><pre>
USER creams
PASS ********
TYPE I
PWD
CWD /
PORT 192,168,1,2,4,119
LIST


<p>Recording the connection log can be helpful in diagnosing the causes of connection problems or access rights problems, for example.

</p></pre></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="down_publishing.php#downpanelpublishinglist">Other publishing operation tabs</a></li><li><a href="down_panel.php#downpanellist">Other bottom panel tabs</a></li><li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="settings_network_ftpclient.php">FTP and WebDAV client settings</a></li><li><a href="main_window_desc.php">Main program window</a></li></ul>
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