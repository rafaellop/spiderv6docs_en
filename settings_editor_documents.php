<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Program settings - Documents</title>

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
<h1>Program settings - Documents</h1>

<!-- tre&#347;&#263; pomocy -->
<p>In this category, you have control over the actions performed when opening and saving documents edited in the program. You can specify here the rules for the encoding of national characters or the settings to be remembered together with the document. This category consists of three groups: "Opening documents", "Saving documents", "Remembering settings with the document", which are described below.</p><h2>Opening documents</h2>

<p>In this group of settings you will find options for actions to be taken when opening documents for editing. The available settings are:</p><p><b>Convert entities when opening a document</b><br>
Check this option to enable conversion of special characters stored as so-called entities into national characters where possible.</p><p><b>Remind if there are to-do tasks in the document</b> <br>
Select this option to check and remind you when you open a document to see if there are to-do tasks set in the document.</p><p><b>Check if changed outside the editor</b><br>
Check this option to have the program check whether the currently edited document has been changed outside the program. Checking takes place at intervals specified in the box next to it. If changes are detected, it will be suggested to load the document from disk or save the current one to disk, or ignore it.</p><p><b>Do not convert national characters when opening</b><br>
Check this option to prevent the program from attempting to convert national characters.</p><p><b>If the document encoding is not recognized</b><br>
If Spider has not recognized the national character encoding, there are two possible courses of action:</p><ul>
	<li><b>Do not convert</b> - Check this option to prevent the program from converting national characters.</li>
	<li><b>Open using encoding</b> - Check this option to have the program attempt to convert national characters, taking the format selected from the list opposite as the input encoding.</li>
</ul>

<p><b>Automatically change the mapping if a document from a project subfolder for which a mapping has been assigned</b><br>
When this option is selected, if a mapping is assigned for the project from which the document is opened, the mapping assigned to the directory from which the document is read is set.</p><h2>Saving documents</h2>

<p>In this group of settings, you will find options for the actions performed when saving documents. Here are the available settings:</p><p><b>Save line breaks in the following format:</b><br>
Select from the list how you want the Spider to encode the end-of-line characters by default. There are three options:</p><ul>
	<li>CRLF (DOS/Windows)</li>
	<li>CR (Mac)</li>
	<li>LF (UNIX)</li>
</ul>

<p><b>Autosave documents</b><br>
Select this option to enable the automatic saving of documents every specified in the box next to the number of minutes.</p><p><a name="backups"></a><b>Back up when saving a document locally</b><br>
Check this option to have the program automatically create <a href="main_editor_backups.php">copies of saved documents</a>. The copies have the extension *.BAK.</p><p><a name="backups"></a><b>Back up when saving a document to the server</b><br>
Check this option to have the program automatically create <a href="main_editor_backups.php">copies of the saved documents</a> when <a href="network_opendoc_ftp.php">editing the online file</a>. The copies have the extension *.BAK.</p><p><b>Do not convert national characters when saving</b><br>
Check this option to disable conversion of national characters when saving.</p><p><b>Do not add a three-byte header for Unicode files</b><br>
Enable this option so that Spider does not add a 3 byte special header to Unicode files. this header is used by Spider to recognise Unicode files and is compliant with the XML specification, but some parsers, when encountering such a header, refuse to work.</p><p><b>Convert entities to UTF when saving Unicode documents.</b><br>
Check this option to convert entities to UTF characters when saving documents in Unicode encoding.</p><p><b>Default extension when saving</b><br>
Here, select which extension is to be given by default to files saved to disk when no name is assigned to them.</p><p><b>Default encoding when saving</b><br>
From this list, select the default encoding used when saving documents that do not have an encoding set in the META section.</p><p><b>If the document lacks an encoding declaration, write in the original encoding</b><br>
Check this option to save the document without the encoding assigned in the META section using the same encoding that was used when the document was read.</p><p><b>Always use the default encoding if there is no encoding declaration in the document.</b><br>
Check this option to save the document without an assigned encoding in the META section for the default encoding selected from the list above.</p><p><b>Warn if the absence of an encoding declaration may prevent browsers from recognising the encoding used</b><br>
Check this switch to have the program warn when saving documents without the character encoding assigned in the META section. If you want Spider to warn only once, on the first attempt to save each document, check the <b>Warn only on first attempt to save document</b> switch.


<a name="add_files"></a></p><h2>Remember settings with a document</h2>

<p>This group allows you to specify what <a href="main_editor_addfiles.php"> settings are remembered with the document in the ADD file </a> and automatically set when the document is reopened. You will find the following options here:</p><p><b>Disable the creation of ADD files completely</b><br>
Check this option to completely disable the creation of ADD document information files, where preferences for the edited document are stored.</p><p><b>Remember your bookmark settings</b><br>
Check this option to have the program remember your bookmark settings.</p><p><b>Remember the to-do list</b><br>
Check this option to have the program remember your to-do list settings.</p><p><b>Expand the navigator tree</b><br>
Check this option if you want Spider to remember the state of the document navigator when the file is closed.</p><p><b>Remember the assigned preview document</b><br>
Check this option to have the program remember the assigned preview document.</p><p><b>Remember the editor configuration </b> <br>
Select this option to let the program remember the editor's configuration (e.g. line wrapping, line numbering).</p><p><b>Remember the syntax scheme</b><br>
Select this option to remember the highlighting scheme used for the document.</p><p><b>Remember cursor position and selection</b><br>
Check this option to have the program remember the cursor position and selection in the document.</p><p><b>Remember the author's name</b><br>
Check this option to have the program remember the name of the person who last saved the document. This option is useful when working in groups on a project....</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="settings_editor.php#settingslisteditor">Other editor settings</a></li><li><a href="charset_encoding.php">National character encoding</a></li><li><a href="main_editor.php">Working with the editor</a></li><li><a href="main_editor_addfiles.php">ADD document information file</a></li></ul>
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