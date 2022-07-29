<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Support for PHP - File path to URL mapping</title>

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
<h1>Support for PHP - File path to URL mapping</h1>



<!-- tre&#347;&#263; pomocy -->


<p>To be able to see the effects of a PHP script, it must be executed by the PHP interpreter. To do this, you need to view such a script not directly by reading it from your hard drive, but as a page sent by the server. Therefore, you need to set the file path mapping to the server address. You can do this in the project settings window (you need to set a separate mapping for each project).</p>

<p>Remember that in order to view the page, you must have an <tt>http</tt> server running. The most popular such server today is Apache<a href="https://www.apache.org" target="_blank">(www.apache.org)</a>. This server must be hosting your site's documents.</p>

<p>It is possible to set more mappings for one project. This is useful when project elements are available not under one, but more addresses, e.g. in subdomains etc.</p>


<p><b>Example mapping</b></p>

<p>Let's assume that your project is located in a folder:<br><tt>D:\my_projects\projectname1\</tt></p>

<p>The server provides the project documents at the address: <br><tt> https://127.0.0.1/projectname1 </tt></p>

<p>To be able to view executed PHP scripts from within the Spider window in the Review window, you must set the <a href="service_properites.php#service_properties_mappings">network mapping in the Project Properties window</a>.</p>

<ul>
  <li><b> Name: </b> <tt> Any mapping name </tt> <br></li>
  <li><b>Mapped folder:</b> <tt>\</tt> <i>(path relative to the site root)</i></li>
  <li><b>To URL:</b> <tt>https://127.0.0.1/project_name1</tt></li>
</ul>


<h2>Online file editing</h2>
<p>If you do not have a local http server running, you can edit files directly from the server by opening the file from the <a href="main_tabs_myftpservers.php">Servers</a> tab.</p>

<p>To preview pages edited online, you must set the path mapping on the server to a URL. This is necessary so that Spider knows what address to direct the page display request to.</p>

<p>It is possible to set more mappings for one server. This is useful when project elements are available not under one, but more addresses, e.g. in subdomains etc.</p>

<p><b>Example mapping</b></p>

<p>Let's assume that your website is located on the server in a folder:<br><tt>/www/public_html</tt></p>

<p>The server provides the project documents at the address: <br><tt> https://mydomain.pl/ </tt></p>

<p>In this case, create a mapping in the <a href="settings_network_ftpservers_add.php">FTP Server Properties</a> window under the Mapping Settings tab:</p>

<ul>
  <li><b>Name:</b> <tt>Any mapping name</tt><br></li>
  <li><b>Mapped folder:</b> <tt>/www/public_html</tt></li>
  <li><b>To URL:</b> <tt>https://mydomain.pl/</tt></li>
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
  <li><a href="coding_php.php">Support for PHP - general</a></li>
  <li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="network_opendoc_ftp.php">Online file editing</a></li></ul>
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
