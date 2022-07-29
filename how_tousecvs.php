<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Using GIT, SVN or CVS in Spider</title>

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
<h1>Using GIT, SVN or CVS in Spider</h1>

<!-- Tre&#347;&#263; pomocy -->



<p>Starting with version 5.6.0 of Spider, there is simple support for version control features (GIT, SVN or CVS) for projects on the <a href="main_tabs_myservices.php">Projects</a> tab. This support mainly consists of support for features offered by a free GIT, SVN or CVS client called Tortoise. <a href="https://www.tortoisegit.net/" target="_blank">GIT</a> version, <a href="https://www.tortoisesvn.net/" target="_blank">SVN</a> version or <a href="https://www.tortoisecvs.org/" target="_blank">CVS</a> version.</p>

<p>TortoiseGIT, TortoiseSVN or TortoiseCVS, which can be downloaded from <a href="https://www.tortoisegit.net/" target="_blank">https://www.tortoisegit.net/,</a> <a href="https://www.tortoisesvn.net/" target="_blank">https://www.tortoisesvn.net/</a> or <a href="https://www.tortoisecvs.org/" target="_blank">https://www.tortoisecvs.org/,</a> offers the ability to access both local and remote GIT, SVN or CVS repositories. Using it is very simple and is done entirely through commands invoked using the context menu, available by right-clicking on a folder or file on a local drive in Spider.</p>

<p>In addition to offering access to TortoiseGIT, TortoiseSVN or TortoiseCVS commands in the context menu, Spider now also supports so-called <i>overlay icons</i>, which TortoiseGIT, TortoiseSVN or TortoiseCVS uses to visually mark the status of local copies of files and directories from the repository. For example, locally modified files that have not yet been uploaded to the repository can have red icons.</p>

<p>To use the features supporting GIT, SVN or CVS and TortoiseGIT, TortoiseSVN or TortoiseCVS from within Spider, download <a href="https://www.tortoisesvn.net" target="_blank">TortoiseSVN, download TortoiseSVN</a> or <a href="https://www.tortoisecvs.org" target="_blank">TortoiseCVS</a> and install on your system. The program is also available in Polish language version. After installation, you can immediately download the contents of any repository and place it in the Spider site of your choice. To do this, create a new site in Spider, then right-click on the list of contents in the site directory and select "SVN Checkout" or "CVS Download to Checkout" from the context menu. Using this function will bring up the download module window for the checkout, where you need to indicate the settings of the server storing the main repository and the authorization data for accessing the server.</p>

<p>Once the module has been downloaded to the local copy on the Spider site, we can proceed to edit the contents of the module simply by working on the files as before. At any time we can validate the modified file in the repository using the file list popup menu and the "SVN Validate" or "CVS Validate" command. We can view the modification history of the file, and if we have a diff tool (like <a href="https://www.prestosoft.com/ps.asp?page=edp_examdiff" target="_blank">ExamDiff</a>) installed, we can also view the differences in the local copy of the file compared to the original in the GIT, SVN or CVS repository.</p>

<p>TortoiseGIT, TortoiseSVN or TortoiseCVS of course offers many more features typical of GIT, SVN or CVS that cannot be described here. Please refer to the TortoiseGIT, TortoiseSVN or TortoiseCVS documentation to take full advantage of its features in Spider.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a target="_blank" href="main_tabs_myservices.php">Projects tab</a></li>
   <li><a target="_blank" href="https://www.tortoisegit.net/">TortoiseGIT homepage</a></li>
   <li><a target="_blank" href="https://www.tortoisesvn.net/">TortoiseSVN homepage</a></li>
   <li><a target="_blank" href="https://www.tortoisecvs.org/">TortoiseCVS homepage</a></li>
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