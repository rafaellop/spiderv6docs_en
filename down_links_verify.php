<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Bottom results panel - Link validation</title>

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
<h1>Bottom results panel - Link validation</h1>

<!-- tre&#347;&#263; pomocy -->


<p>This tool is for checking correctness of links in documents. It is possible to check currently opened document or all documents in currently opened Project. Remote links to files outside the Project are checked separately (due to the possible need of an Internet connection, which may prolong the verification process).</p>

<p><b> Note </b> <br>
 It is not possible to validate links in documents edited remotely (opened directly from the server)</p>

<p>Links which will be validated are:</p><ul>
  <li>other HTML and similar documents,</li>
  <li>images,</li>
  <li>included CSS sheets, HTML documents,</li>
  <li>JavaScript and VBScript scripts,</li>
  <li>embedded objects, such as Java applets, Flash animations, etc.</li>
   <li>and even files included in server-side scripts (eg with <tt> include </tt> in PHP)!</li>
</ul>

<h2>Validating links in the current document</h2>

<p>You can run the link check in the current document in two ways:</p><ul>
   <li>from <a href="main_menu_main.php">Main menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_verify.php">Code verification</a></li>
  <li>from the Link Validation tab - open the <a href="down_panel.php">bottom results panel</a> - click the "Verify links in current document" button.</li>
</ul>

<p><b> Note! </b> <br>
 Due to the possible need to connect to the Internet, which can significantly extend the verification process, this option will not check remote links (given with an absolute address, i.e. along with the domain and protocol). You can, however, trigger the verification of remote links with a separate button.</p>

<h2>Checking the validity of links in the current project</h2>

<p>Checking for links on the current Website (selected in the <a href="main_tabs_myservices.php"> Projects </a> tab) includes all documents placed in folders belonging to the current Website. The tool can be launched from <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_services.php"> Projects </a> / Check Links.</p><p><b> Note! </b> <br>
 Due to the possible need to connect to the Internet, which can significantly extend the verification process, this option will not check remote links (given with an absolute address, i.e. along with the domain and protocol). You can, however, trigger the verification of remote links with a separate button.</p>

<h2>Validate remote links</h2>

<p>Remote link checking includes all links whose address is a URL ( <i>Universal Resource Locator</i> ) consisting of a protocol name, host address (IP or domain name), and document name.</p>

<p>To run remote link verification, open the <a href="down_panel.php">bottom results panel</a> and then click the "Remote Link Verification" button.</p>

<p><b> Note! </b> <br>
 Checking remote links can take a long time if the network is very busy, or if there is a long delay in replies from servers. An active network connection is required to run this option.</p>

<h2>Links validation results</h2>

<p>The results of the tool's operation are listed in the Link validity tab on the <a href="down_panel.php"> bottom results panel </a> . The results window contains six columns:</p>

<ul>
  <li>left column - the icon with a ball indicates the type of message:<br><table border="0">
      <tr>
        <td></td>
        <td>- information about the correct link,</td>
      </tr>
      <tr>
        <td></td>
        <td>- information about an incorrect link,</td>
      </tr>
      <tr>
        <td></td>
        <td>- information about the link not being checked (e.g. if it is a remote link and only local links are checked),</td>
      </tr>
      </table></li>
   <li><b>Source</b> - path and file name of the file in which links were checked</li>
  <li><b> Title </b> - The title of the document (enclosed between the <tt>  </tt> and <tt>  </tt> tags in the document. Showing titles that slow down a bit the search process can be turned off in the menu on the right side of the window.</li>
  <li><b> Link </b> - link that has been verified</li>
  <li><b> Link type </b> - informs about the link type (to documents, graphics, style sheets, etc.)</li>
  <li><b>Verification result</b> - informs about the correctness or incorrectness of the link.</li>
</ul>

<p><b>Display document titles</b><br>
Use this button to enable the display of document titles (contained in documents between <tt><title></title></tt> and <tt><title></title></tt> tags). This slows down the search process a bit. The titles will be placed in the "Title" column.</p>

<h2>Exporting Link Validation Results</h2>

<p>To export link validation results, use the buttons on the menu to the right of the results window. You can export data to:</p><ul>
  <li>file in HTML format</li>
  <li>file in TXT format</li>
</ul>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="down_integrity.php">Checking project integrity</a></li>
   <li><a href="down_syntax_check.php">Syntax validation</a></li>
   <li><a href="network_publishing_general.php">Publishing in the Spider</a></li>
   <li><a href="service_tool_synchronization.php">Automatic project synchronization</a></li>
   <li><a href="services_general.php">Projects in general</a></li>
   <li><a href="down_panel.php#downpanellist">Other tabs of the bottom results panel</a></li>
   <li><a href="main_window_desc.php">Main program window</a></li>
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