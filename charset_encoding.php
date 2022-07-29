<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>National character encoding</title>

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
<table width="100%" border="0" cellpadding="5" cellspacing="5">
<tr>
<td>

<!-- nag&#322;owek g&#322;owny tematu -->
<h1>National character encoding</h1>

<!-- tre&#347;&#263; pomocy -->
<p>Files on a computer do not actually consist of numbers and letters, but of individual numbers. The code page indicates which number corresponds to which character. For example, the decimal number 65 stands for the capital letter A, 66 stands for B and so on. However, the older code pages only have space to specify 255 characters, which is insufficient to designate all national characters. Therefore, each language (or group of languages) has its own code page. What one code page displays the letter <b>ź</b><i>(ISO-8859-2</i>), another code page displays the character <b>Ľ</b> (in this case in <i>ISO-8859-1</i>).</p>


<p>To correctly display national characters, the program must know which code page is used in the document. If there was only one code page for one language, there would be no problem, however, for example for the Polish language itself, there are several ways of encoding characters, of which two are most often used on the Internet:</p>
<ul>
   <li>ISO-8859-2 - ISO-compliant codepage, used in most systems,</li>
   <li>WIN-CP-1250 - codepage used by MS Windows.</li>
</ul>

<p>The  recommended code page is the one compliant with the Polish Standard ISO-8859-2. This is the default encoding for Polish characters in Spider. Similarly for other languages.</p>


<h2>Using different code pages while working</h2>

<p>Spider allows you to create documents in virtually any language. The program can also automatically recognize the code page used in a given document, based on entries in the META section. For options, see <a href="settings_editor_documents.php"> Program Settings - Documents </a> as well as <a href="main_menu_spelling.php"> Spelling Menu </a> .</p>

<p>When working with a <a href="services_general.php">website</a>, in the <a href="service_properites.php#charset_encoding">Project Properties</a> window, you can specify the encoding to be used by default for everyone documents of this website. This allows the project to be made independent of the global program settings.</p>

<p>Or, you can quickly open and save a document using the encoding of your choice with the commands in Menu Spelling -&amp;gt; <b>Read in encoding ... </b> and <b>Save in encoding ... </b>, which allows you to additionally use encoding independent of program and project settings.</p>

<p>The most commonly used conversion is to change the character encoding from WIN-CP-1250 (code page used in MS Windows) to ISO-8859-2 (ISO compatible code page used in most systems).</p>

<p>The encoding selected for a document has the highest priority. Then encoding for the project and finally the general encoding. In case of changing the reading encoding for a document, the document is read again with conversion according to the selected encoding. If the saving encoding is changed, the document is saved in the selected encoding.</p>

<p><b>Support for Unicode</b></p>
<p>In order to improve the working comfort when using Unicode encoding, a mini <a href="tool_unicodeeditorek.php">unicode editors</a> has been created. This tool allows you to copy and paste texts containing Unicode entities into a document, which will be automatically converted into UTF characters.</p>

<h2>Conversion of national characters</h2>

<p>Spider can convert character encodings to many different code pages. You can conduct it in several ways:</p>
<ul>
   <li>using the <a href="find_ext.php">Extended Search and Replace tool</a>, which allows you to convert the encoding in the current document, all open documents as well as in a selected document or all documents of a specific folder, or <a href="main_tabs_myservices.php">Project</a>. You can open the window using the <b>Character Encoding Converter</b> command on the Spelling menu.</li>
   <li>you can quickly convert characters in the current document by using the <b>National Characters command in the current document</b> on the Spelling menu.</li>
</ul>

<p>you can also quickly delete all Polish characters in the current document or in all open documents by using <b>the Delete Polish Characters in Current</b> and <b>Remove Polish Characters commands in the</b> Spelling menu.</p>

<p>When creating a new document, you can select a codepage in the <a href="tool_meta.php">META Section Editor</a> . The ISO-8859-2 page is set by default.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="spelling.php">Spell checking</a></li><li><a href="tool_unicodeeditorek.php">Unicode editor</a></li><li><a href="find.php">Search using Spider</a></li><li><a href="find_ext.php">Extended search and replace (conversion of national characters)</a></li><li><a href="down_find_report.php">Search Report Window</a></li><li><a href="main_menu_spelling.php">Menu Spelling</a></li></ul>
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