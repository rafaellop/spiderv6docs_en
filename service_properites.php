<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Projects - Project properties window</title>

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
<h1>Projects - Project properties window</h1>

<p>The project properties window allows you to set parameters for a project created in Spider. Find out more about projects in <a href="services_general.php"> projects </a> . This window appears when creating a new project. They can also be called from the Projects / Project Properties menu or from the <a href="main_tabs_myservices.php"> Projects </a> tab. The button icon for this command is shown above.</p><p>The window consists of a series of pages, additionally divided into 2 categories:</p><ul>
  <li>Main</li>
  <ul>
     <li><a href="#glowne_podstawowe">Basic</a></li>
     <li><a href="#htmlhelp">HTML Help</a></li>
     <li><a href="#service_properties_mappings">Mappings</a></li>
      <li><a href="#servicepropertiesoftenused">Excluded folders and Frequently used</a></li>
     <li><a href="#servicepropertiesdocuments">Documents</a></li>
     <li><a href="#virtual_include">Forced include</a></li>
  </ul>
  <li>Statistics</li>
  <ul>
     <li><a href="#stat_statystyki">Statistics</a></li>
     <li><a href="#stat_autorzy">Statuses and authors</a></li>
  </ul>
</ul>With their help you can establish various properties of the project. Here is the description of the tabs:

 <a name="glowne_podstawowe"></a><h2>Main - Basic</h2>

<p>This tab allows you to define general project properties and additionally allows you to perform the <a href="tool_htmlhelp_general.php"> HTML Help </a> operation if the project is also an HTML Help project. There you will find two groups called <b> Basic Info </b> and <b> HTML Help Project Settings </b>.</p><p>In this group you can define the paths to the folder or the main project file. You will find the following settings here:</p><p><b>Name of project</b><br>
This is where you find the name assigned to the project when it was created.</p><p><b>Main folder of the project</b><br>
Here you can see what folder the project is set to. You can change it by clicking the button next to it.</p><p><b>Project start-up folder</b><br>
If you want the program to set a different folder as the start folder than the project's main folder when switching to the selected project, select such a folder using the button next to it.</p><p><b>Main project file</b><br>
Using the button next to it, you can indicate the main project file, which is used by the program for a number of different functions (e.g. project consistency check).</p><p><b>Preview document</b><br>
Select the preview document to be used for the documents in the project. If you select it, this document will be used for all documents from the project for which no preview document has been individually defined.</p><p><b>Project group</b><br>
Here you can enter the name of the group to which the project is to belong. Project groups are displayed at the beginning of the list of projects in the "Projects" tab. This makes it easier to find the right project in the list, which is especially important when working on many projects.</p><p><b>Project description</b><br>
This field allows you to enter a description of the project so you know what it is about. You can check the switch below to cause a description to be displayed every time you switch to this project.</p><p><b>Show description when switching between projects</b>
Check this switch to cause a description to be shown every time you switch to this project.
<a name="charset_encoding"></a>





<a name="htmlhelp"></a></p><h2>Main - HTML Help</h2>


<p>This tab contains HTML Help related commands. You will find the following commands here:</p><p><b>This project is an HTML Help project</b><br>
Check this switch if you want to enable additional HTML Help-related functions for this project (e.g. compilation).</p><p><b>HTML Help main project file</b><br>
Use the buttons to create a new empty HTML Help project file or to select an existing one on disk.</p><p><b>Compile project button</b><br>
Click to <a href="tool_htmlhelp_hhp_compilation.php">compile</a> the project into a CHM form.</p><p><b>Quickly compile this project</b><br>
Click to <a href="tool_htmlhelp_folder_to_chm.php">quickly compile</a> the current project into HTML Help.</p><p><b>Edit project button</b><br>
Click to launch the <a href="tool_htmlhelp_hhp_editor.php">HTML Help</a> project editor built into Spider.</p><p><b>Browse compiled button</b><br>
Click to open and view the compiled CHM file.</p><p><b>Compilation report button</b><br>
Click to view the compilation report.</p><p><b>Start Help Workshop</b><br>
Click to launch the MS HTML Help Workshop program.




<a name="service_properties_mappings"></a></p><h2>Main - Mappings</h2>



<p>This tab allows you to set project mappings to network addresses. Mappings are useful in many cases, e.g. when testing components of projects written in scripting languages for which the preview must be called via a URL, or in another situation e.g. by the function <a href="service_tool_synchronization.php"> project synchronization </a> with a remote server or to insert local files into files opened from an FTP or WebDAV server, while setting paths relative to them. On this tab you will find two groups regarding mappings in preview and mappings in sync.</p><p><b>Mapping at preview</b> <br>
 Preview mapping means "translating" the path to a file on disk to an address where the document can be viewed in a web browser. This allows easier viewing and testing of documents using a local web server, such as PHP scripts that must be viewed via a URL. Using the buttons next to you, you can manage the list of mappings assigned to projects. You can change the mappings on the Preview tab in the main program window. The default mapping is marked with a red ball icon (). You can add a new mapping via the <a href="settings_network_ftpservers_add_map.php"> add mapping dialog </a> .</p><p><b>Mapping at synchronization</b><br></p><p>Synchronization mapping determines from which folder on your computer's disk to which folder on the selected server files will be sent. You can create one or more mappings, which allows you to choose separate subdirectories of your local project or FTP (or WebDAV) server to <a href="service_tool_synchronization.php"> synchronized </a> with each other. You can add a new mapping via the <a href="settings_network_ftpservers_add_map.php"> add mapping dialog </a> . Additionally, you can specify which mapping is the default - it will be used e.g. in the document publishing function using <a href="network_publishing_general.php#publish_current"> the current document publication commands from the File menu, or the publication of documents in the Projects tab </a> . The default mapping is marked with a red ball icon ().</p><p><b>Assigned Server</b> <br>
Assigning an FTP or WebDAV server to a Project allows you to change the active server on the <a href="main_tabs_myftpservers_rights.php"> Servers </a> tab depending on the selected project. To activate this mechanism, check the ' <b> When switching between projects, activate the server: </b> ' and select the server from the list.
 If, at the moment of changing the project, there is an active connection to another server, you will be asked if you want the connection to the current server to be terminated and the server to be changed or not.</p>
<p>The server indicated here will be selected as the default when creating a new mapping at synchronisation in the <a href="settings_network_ftpservers_add_map.php">add mapping window</a>.</p><a name="servicepropertiesoftenused"></a><h2>Main - Excluded Folders and Frequently Used Files</h2>

<p>On this tab, you have access to two lists:</p><ul>
   <li><b>Folders excluded from view</b> - You can add subfolders of the main project folder to this list, which will be hidden in the file list and folder tree in the <a href="main_tabs_myservices.php">Projects tab</a> of the main program window</li>. <br><b> Attention! </b> This setting also affects <a href="find_ext.php"> Extended Search and Replace </a> . Note, however, that when you drag folders to the <a href="main_tabs_myftpservers.php"> Servers </a> tab, the contents of the excluded folders will also be uploaded for publishing!<li><b>Frequently used files</b> - This is a list of frequently used files in this project. You can add files that you use frequently here and open them quickly with the menu command "Projects / Project Properties / Open Project Frequently" as well as the file list pop-up menu on the <a href="main_tabs_myservices.php"> Projects </a> . It is not an automatically generated list based on individual file usage.</li></ul>
<p>Next to each list you will find buttons with which you can manage it, i.e. add and remove individual items, as well as change their position.</p><a name="servicepropertiesdocuments"></a>
<a name="metaindexing"></a><h2>Main - Documents</h2>

<p>On this tab you will find options that allow you to define the default content of the META section of project documents, the method of tag insertion and the encoding of national characters and line breaks.</p><p><b>Default document name and extension</b><br></p><p>The settings of this group allow you to define the name to be created by default for new documents of the current project. As a result, one project can contain by default <tt> * .html </tt> files, another <tt> * .php </tt> etc.</p>

<p>There are two fields - <b> Name </b> and <b> Extension </b> , the latter additionally containing a drop-down list with the most frequently used extensions.</p>


<p><b>Default META properties of documents in the project</b><br></p><p>You can assign default META section properties to a project that will be automatically applied when creating new documents in that project. To change the META section settings, click the Edit META Defaults button, which will open the <a href="tool_meta.php"> META Section Editor </a> .</p><p><b>Coding settings for this project's documents</b><br></p><p><b>Default document coding in the project</b><br>
Select the encoding to be used for this project's documents from the list. By default, the encoding indicated in the <a href="settings.php">Program Settings</a> /<a href="settings_editor.php"> Editor</a>... / <a href="settings_editor_documents.php">Documents</a>. Read more about this in <a href="charset_encoding.php">Encoding national characters</a>, but this setting has a higher priority.</p><p><b>Default encoding of end-of-line characters in the project</b><br>
Select the end-of-line character encoding to be used for this project's documents from the list. By default, the encoding indicated in the <a href="settings.php">Program Settings</a> / <a href="settings_editor.php"> Editor...</a> / <a href="settings_editor_documents.php">Documents</a>, but this setting has a higher priority. Characters can be encoded as in Windows, Unix, or macOS.</p><p><b>Inserting tags into the documents of this project</b><br></p><p><b>Default document language in the project</b><br>
Select from the list the markup language that will be used by default for documents in the current project. In this way, you can change the program behaviour specified in the program Settings window. This setting will be used when it is not possible to recognise the document type using standard methods (DOCTYPE, xlmns). The list contains the names of all categories (all markup languages) supported by Spider. You can change the contents of the list (add and remove languages, as well as modify their settings) using the <a href="tagdata_editor_tdf.php">TDF Editor</a>.</p><p><b>Insert non-XML tags (e.g. HTML 4):</b><br>
Select the method of inserting tags from the list. By default, the tag insertion style indicated in <a href="settings.php">Program Settings</a> / <a href="settings_editor.php"> Editor</a> is used. / <a href="settings_editor_documents.php">Documents</a>, but you can force tags to be inserted in lowercase or uppercase.


<a name="virtual_include"></a></p><h2>Forced file includes</h2>


<p>This page contains a list of files that are forced to be analyzed by the mechanisms of dynamic hints. With the buttons next to the list you can add files of different types (PHP scripts, CSS style sheets and JS scripts) and entire folders.</p>Read more in<a href="service_virtual_include.php"> Projects - Forced file includes</a>.


<a name="stat_statystyki"></a><h2>Statistics</h2>

<p>This tab is informative and allows you to see the project statistics. <b> Note! </b> For large projects, generating the information on this tab may take a while! Here you will find the following stats:</p><p><b>List of project items</b><br>
In this list you can quickly see what components are in the project, how many there are and their total size.</p><p><b>The oldest and newest document</b><br>
This list presents information about the documents that were modified first and last in Spider.</p><p><b>Number of tasks to be performed</b><br>
In this list, you can quickly see how many to-do tasks there are in the entire project, as well as in which document you have the most.</p><p><b>Number of words, characters, lines in documents</b><br>
In this list, you can quickly check the number of words, characters and pages in your project documents. You can use the field below the list of the number of words and pages to determine how many characters with spaces correspond to one typed page. The numbers shown do not relate to the content of the HTML tags, but only to the text displayed by the browser. More precisely, the function counting words and characters ignores everything contained between the <tt>&amp;lt;</tt> and <tt>&amp;gt;</tt> characters and is only intended to provide an estimate of the volume of text in HTML files - for other types of documents the data may not be correct.


<a name="stat_autorzy"></a></p><h2>Statistics - Statutes and authors</h2>This tab contains two lists:<p><b>List of statuses</b><br>
The status list displays information about the number of files that have different statuses, which are specified in the document information window.</p><p><b>List of authors</b><br>
Spider remembers in files with ADD extensions information about the users who modify documents. This list shows all co-authors of a project and the number of documents modified by them.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="services_general.php">About projects in general</a></li><li><a href="service_tool_synchronization.php">Synchronization of projects</a></li><li><a href="tool_htmlhelp_general.php">HTML Help</a></li><li><a href="main_tabs_myservices.php">Projects tab</a></li><li><a href="tool_meta.php">Editor of the META section of the document</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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