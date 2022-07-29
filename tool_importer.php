<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Tools - File importer</title>

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
<h1>Tools - File importer</h1>



<p>The importer tool will help you import and convert documents of various types, including Office-supported documents (e.g. Word, Excel), RTF documents, CSV database files and text files, into Web pages. Using a user-friendly interface that guides you by the hand through every step of the file import process, you will quickly and conveniently convert your selected documents into a format suitable for web publication.</p><p>The converter can not only convert text to HTML with formatting, but also reads graphics placed in documents. It handles tables very well, and a valuable advantage is that it also saves all text formatting markings as a CSS sheet.</p><h2>Launching</h2>

<p>You can import files using the command marked with the icon shown above in the <a href="main_menu_main.php">The main menu</a> / <a href="main_menu_file.php">File</a> / Import files, as well as using the pop-up menu of the file list on the <a href="main_tabs_myservices.php">Projects tab</a>. This tool can also be found on the <a href="toolbars_main.php">The main toolbar</a>.</p><h2>Selecting the format of imported documents</h2>

<p>The first page allows you to choose the format of files that will be converted into HTML documents. You can choose between:</p><ul>
        <li><a href="#import_txt">text files</a></li><li><a href="#import_csv">CSV databases</a></li><li><a href="#import_rtf"> RTF (Rich Text Format) </a></li><li><a href="#import_office">Office documents</a></li></ul>

<p><b>Note that</b> the ability to import Office documents applies only to systems where MS Office is installed and the Office converters that Spider uses for importing are available.

<a name="import_txt"></a></p><h1>Importing text files</h1>

<p>Importing text files allows you to convert TXT files to HTML. Importing allows you to maintain the layout of such a file, assign a style sheet, or convert all addresses contained in the file into clickable links.</p><h2>Selecting files to import</h2>

<p>After selecting "text files" on the first page and moving on, you will see a page where you can select files to import. The files are placed in the list when you select them using the button marked with a plus next to the list.</p><p>Below the list are several options:</p><p><b>Import using &amp;lt;BR&amp;gt;</b><br>
Check this switch if you want to import a text file by inserting a BR line break tag at the end of each line. This will give you similar formatting as the original text document, however, the redundant spaces used, for example, for spacing formatting will not be taken into account when the document is rendered.</p><p><b>Import using &amp;lt;PRE&amp;gt;</b><br>
Check this switch if you want to import a text file by inserting a PRE preformatting tag at the beginning and end of the document. This will give you identical formatting to the original text document.</p><p><b>Turn URLs into clickable links</b><br>
Check this switch if you want URLs (e.g. Web pages or email addresses) placed in the text to be converted into clickable links.</p><h2>Selection of default national character encoding</h2>

<p>On this tab, specify the standard in which the national characters in the imported document are encoded. <b>NOTE:</b> The automatic encoding recognition function supports only the CP-1250 and ISO-8859-2 standards. For the other standards, a manual selection is necessary. You have two options to choose from on this page:</p><ul>
        <li>Automatically recognize encoding</li><li>Use the encoding of your choice</li></ul>

<p>If you choose the second option, select an encoding from the list.</p><h2>Post-import location and styles</h2>

<p>The next tab allows you to select where the HTML files resulting from converting imported files to HTML will be placed. Using the button next to the edit box, you can choose where the resulting files will be placed. If you check the option <b>save files in XHTML standard</b>, the documents will be saved just in XHTML.</p><p>The <b>Document Style</b> group allows you to specify the styles to be assigned to the resulting HTML document. You can choose to assign a direct style or indicate the style sheet to be used.</p><p>If you select <b>Assign Style</b>, you have access to two edit boxes where you can specify a style for text and a style for links. In both cases, editing the style is done using the <a href="tool_style_editor.php">style editor</a> window.</p><p>If you select the <b>Select style sheet</b> option you will be able to point to a style sheet on disk that you want to use in the resulting HTML files. In addition, you can check the <b>Copy sheet with document</b> option if you want the style sheet indicated below to be copied with the resulting document. If you do not check this switch, the selected style sheet will be included in the content of the document.</p><h2>Performing the import</h2>

<p>The last tab is also the final step. You can now press the "Finish" button to start the import function. During importing, a progress indicator is displayed. By checking the <b>Open imported documents in the editor</b> option, you can cause all transformed documents to be opened for editing in the Spider editor when the import process is complete.

<a name="import_csv"></a></p><h1>Importing CSV database files</h1>

<p>Importing CSV database files allows you to convert database tables into HTML format. CSV files are a text format for tables, and most database or spreadsheet programs allow you to save a table or sheet in this format. So if you want to convert an Excel document to HTML format, for example, save it as CSV, and then use this option. You can also use the import function for Office documents. Importing additionally allows you to assign a style sheet, or convert all addresses contained in the file into clickable links.</p><h2>Selecting files to import</h2>

<p>After selecting "CSV databases" on the first screen and proceeding, you will see a screen where you can select the files to import. Files are placed on the list after selecting them with the button marked with a plus sign next to the list.</p><p>Below the list are two separate groups of settings. The first one allows you to indicate to the program how to recognize columns in the table. Here you can select one of the following separators:</p><ul>
        <li>new line as cell and row</li><li>comma</li><li>semicolon</li><li>tab</li><li>space</li><li>sign (you specify the character yourself)</li></ul>

<p><b>Turn URLs into clickable links</b><br>
Check this switch if you want URLs (e.g. Web pages or email addresses) placed in the text to be converted into clickable links.</p><p>The second group allows you to define a header column and row that will be specifically highlighted. Simply check the appropriate switches indicating that the first column or row is a header. In this group you will also find a button that allows you to launch <a href="tool_table_tag.php">the <tt>TABLE</tt></a> tag editor, because the CSV file is placed in a table after import.</p><h2>Selection of default national character encoding</h2>

<p>On this tab, specify the standard in which the national characters in the imported document are encoded. <b>NOTE:</b> The automatic encoding recognition function supports only the CP-1250 and ISO-8859-2 standards. For the other standards, a manual selection is necessary. You have two options to choose from on this page:</p><ul>
        <li>Automatically recognize encoding</li><li>Use the encoding of your choice</li></ul>

<p>If you choose the second option, select an encoding from the list.</p><h2>Post-import location and styles</h2>

<p>The next tab allows you to select where the HTML files created by converting the imported files to HTML will be placed.  If you check the option <b>save files in XHTML standard</b>, the documents will be saved just in XHTML. Using the button next to the edit box, you can choose where the resulting files will be placed.</p><p>The <b>Document Style</b> group allows you to specify the styles to be assigned to the resulting HTML document. You can choose to assign a direct style or indicate the style sheet to be used.</p><p>If you select <b>Assign Style</b>, you have access to two edit boxes where you can specify a style for text and a style for links. In both cases, editing the style is done using the <a href="tool_style_editor.php">style editor</a> window.</p><p>If you select the <b>Select style sheet</b> option you will be able to point to a style sheet on disk that you want to use in the resulting HTML files. In addition, you can check the <b>Copy sheet with document</b> option if you want the style sheet indicated below to be copied with the resulting document. If you do not check this switch, the selected style sheet will be included in the content of the document.</p><h2>Performing the import</h2>

<p>The last tab is also the final step. You can now press the "Finish" button to start the import function. During importing, a progress indicator is displayed. By checking the <b>Open imported documents in the editor</b> option, you can cause all transformed documents to be opened for editing in the Spider editor when the import process is complete.

<a name="import_rtf"></a></p><h1>Importing RTF (Rich Text Format) files.</h1>

<p>Importing RTF files allows you to convert Rich Text Format files into HTML format. RTF files are the document file format in which most word processors can save their documents. So if you want to convert a Word document to HTML format, for example, save it as RTF and then use this option. You can also use Office's document import feature. Importing allows you to additionally assign a style and import images or tables placed in the RTF file.</p><h2>Selecting files to import</h2>

<p>After selecting "RTF (Rich Text Format)" on the first page and moving on, you will see a page where you can select files to import. The files are placed in the list when you select them using the button marked with a plus next to the list.</p><h2>Selection of default national character encoding</h2>

<p>On this tab, specify the standard in which the national characters in the imported document are encoded. <b>NOTE:</b> The automatic encoding recognition function supports only the CP-1250 and ISO-8859-2 standards. For the other standards, a manual selection is necessary. You have two options to choose from on this page:</p><ul>
        <li>Automatically recognize encoding</li><li>Use the encoding of your choice</li></ul>

<p>If you choose the second option, select an encoding from the list.</p><h2>Post-import location and styles</h2>

<p>The next tab allows you to select where the HTML files resulting from converting imported files to HTML will be placed. Using the button next to the edit box, you can choose where the resulting files will be placed.</p><p>Additionally, you can select two options that affect how the resulting HTML files are placed on disk:</p><p><b>Each document and its files in a new subfolder</b><br>
By checking this switch you will cause all the component files of each document to be placed in a separate folder, which will be created as a subfolder of the destination folder selected above. Checking this switch is useful when the imported documents are complex and contain graphics and styles that will be saved in a separate CSS file.</p><p><b>Save related graphics in a subfolder</b><br>
Check this switch to have the program save all images embedded in the imported document to a separate folder. You can choose the name of the folder next to it.</p><p>The <b>Document Style</b> group allows you to specify the styles to be assigned to the resulting HTML document. You can select the following options:</p><p><b>Don't use styles</b><br>
Check this switch if you want the document that will result from the import to contain no references to CSS style definitions, only simple formatting using HTML tags.</p><p><b>Save the style sheet by including it in the document</b><br>
Check this switch if you want the document that will result from the import to be formatted using style sheets. The styles will be declared inside the imported document.</p><p><b>Save the style sheet in a separate file</b><br>
Check this switch if you want the document that will result from the import to be formatted using stylesheets. The styles will be saved in a separate CSS sheet file, which will be copied to the same folder as the imported document. The imported document will be linked to the CSS sheet created.</p><p><b>Attach the selected sheet</b><br>
By selecting this switch you will have the option to indicate the stylesheet file that will be saved next to the imported one.</p><h2>Performing the import</h2>

<p>The last tab is also the final step. You can now press the "Finish" button to start the import function. During importing, a progress indicator is displayed. By checking the <b>Open imported documents in the editor</b> option, you can cause all transformed documents to be opened for editing in the Spider editor when the import process is complete.

<a name="import_office"></a></p><h1>Importing MS Office documents</h1>

<p>Importing Office documents allows you to convert files supported by MS Office (such as Word or Excel) into HTML format. This option requires any program included in the MS Office suite to be installed, which will make available so-called <i>office converters (office converters</i>). With this feature, it is possible to import into HTML documents supported by the Office suite, such as MS Sheets . Importing additionally allows you to assign styles and import images or tables placed in Office files.</p><h2>Selecting files to import</h2>

<p>After selecting "Office-supported documents" on the first page and moving on, you will see a page where you can select files to import. The files are placed in the list when you select them using the button marked with a plus next to the list.</p><p><b>Note:</b> When importing Office documents when adding files, it is necessary to indicate the correct file type in the file selection window - the "Files type "drop-down list at the bottom of the window. If you select the wrong type (converter) for the file to be added, the conversion cannot be performed.</p><h2>Selection of default national character encoding</h2>

<p>On this tab, specify the standard in which the national characters in the imported document are encoded. <b>NOTE:</b> The automatic encoding recognition function supports only the CP-1250 and ISO-8859-2 standards. For the other standards, a manual selection is necessary. You have two options to choose from on this page:</p><ul>
        <li>Automatically recognize encoding</li><li>Use the encoding of your choice</li></ul>

<p>If you choose the second option, select an encoding from the list.</p><h2>Post-import location and styles</h2>

<p>The next tab allows you to select where the HTML files resulting from converting imported files to HTML will be placed. Using the button next to the edit box, you can choose where the resulting files will be placed.</p><p>In addition, you can check two options that affect how the resulting HTML files are placed on disk:</p><p><b>Each document and its files in a new subfolder</b><br>
Checking this switch will cause all the component files of each document to be placed in a separate folder, which will be created as a subfolder of the destination folder selected above. Checking this switch is useful when the imported documents are complex and contain graphics and styles that will be saved in a separate CSS file.</p><p><b>Save related graphics in a subfolder</b><br>
Check this switch to have the program save all images embedded in the imported document to a separate folder. You can choose the name of the folder next to it.</p><p>The <b>Document Style</b> group allows you to specify the styles to be assigned to the resulting HTML document. You can select the following options:</p><p><b>Don't use styles</b><br>
Check this switch if you want the document that will result from the import to contain no references to CSS style definitions, only simple formatting using HTML tags.</p><p><b>Save the style sheet by including it in the document</b><br>
Check this switch if you want the document that will result from the import to be formatted using style sheets. The styles will be declared inside the imported document.</p><p><b>Save the style sheet in a separate file</b><br>
Check this switch if you want the document that will result from the import to be formatted using stylesheets. The styles will be saved in a separate CSS sheet file, which will be copied to the same folder as the imported document. The imported document will be linked to the CSS sheet created.</p><p><b>Attach the selected sheet</b><br>
By selecting this switch you will have the option to indicate the stylesheet file that will be saved next to the imported one.</p><h2>Performing the import</h2>

<p>The last tab is also the final step. You can now press the "Finish" button to start the import function. During importing, a progress indicator is displayed. By checking the <b>Open imported documents in the editor</b> option, you can cause all transformed documents to be opened for editing in the Spider editor when the import process is complete.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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
