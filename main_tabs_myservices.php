<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>"Projects" tab</title>

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
<h1>"Projects" tab</h1>




<p>The "Projects" tab is used to work with files and folders located on the local disk. You can also use this tab to create <a href="services_general.php"> projects </a> and switch between them. Here you see your folders, files, you can open them, rename them, create new ones and much more.</p><p>You can enable the Projects tab using the panel on the left, as well as from the menu under the button shown above or from the <a href="main_menu_main.php"> Main menu </a> / <a href="main_menu_view.php"> View </a> .</p><p>Unlike the Projects tab, the <a href="main_tabs_myftpservers.php"> Servers </a> tab is for remote file operations on FTP servers.</p><h2>Content - Projects control</h2>

<p>At the top of the Projects tab, next to the folder tree, you will find a set of buttons related to <a href="services_general.php"> projects </a> . With these buttons you can create new projects, view the properties of the selected project, etc. The button set here is identical to the <a href="main_menu_main.php"> Main Menu </a> / <a href="main_menu_services.php"> Projects </a> and there you will find a description of how the commands here work.</p><p>Above the folder tree there is a list of projects. If you are starting to work with Spider, this list contains only one item called "File List". It allows you to enable the view of the list of files and directories in the tree and the list of files below for the entire computer. <br>
 However, if you create any projects using the buttons above, you will find a list of your created projects in this list. Selecting a project restricts the view in the folder tree and the file list only to the contents of the folder, which is also the project startup folder. This allows you to limit yourself to working only with those folders and files that are part of the current project.</p><p>The icon next to the project name additionally specifies:</p><ul>
   <li>- File list</li><li>- Normal project</li><li>- A project that is also <a href="tool_htmlhelp_general.php">HTML Help project</a></li></ul>

<p>In addition, it is possible to restore recently opened files for each project separately. You can find the relevant options in the <a href="settings_startup.php"> Program Settings / On startup </a> window.</p><h3>Grouping of projects</h3>
<p>It is possible to group projects. Groups are listed above ungrouped projects. Clicking on a group name will expand the list of projects collected in it. This is especially useful when working on a large number of different projects. You can define the group to which the current project is assigned in the <a href="service_properites.php"> Project Properties Window </a> .</p>

<h2>Contents - Folder selection and folder tree</h2>

<p>Below the list containing the list of projects you will find a tree of folders. The folder tree displays the folders on the disk or in the current project in the form of a hierarchical tree. The tree is identical to the one in Windows explorer. It also has a pop-up menu identical to the system one, with which you can perform various operations in the tree. So you can rename, delete or compress (as long as the appropriate system extension is installed) selected folders.</p><h2>Contents - File List</h2>

<p>Below the folder tree is a list of files which, depending on <a href="settings_filelist.php"> settings </a> , displays both folders and files, or only files in the current folder. The list of files is identical to the one known from Windows explorer, however, it has many more functions.</p><p>By default, the list shows files by default in a detailed view. Of course, you can change the view to icon view or, for example, thumbnail view using the popup menu or the buttons next to them, which are described below. If the thumbnail view is turned on, only graphic files will be shown - if such files are not in the current folder, appropriate information will be displayed. You can filter the files displayed here, narrowing down the number of displayed files only to selected types or sort files according to various criteria. Of course, you can rename files, delete them, and open them by double-clicking on the file. The list is arranged in columns, and the information presented in the columns is:</p><ul>
   <li><b>File name</b> - displays the name of the file or folder</li><li><b>Size</b> - file size</li><li><b>Type</b> - the type of file is also determined by the icons</li><li><b>Modified</b> - date and time of last modification</li></ul>

<p>The file list also has two right-click menus, of which only one can be used at a time. The first menu is identical to the system pop-up menu, with which you can perform various operations on the tree as in the Windows explorer. You can rename, delete or compress (if the appropriate system extension is installed) selected files or folders. The second menu is the application menu and allows many additional operations. The popup menu is identical to the buttons on the right side of the list and is described together with the buttons below. You define the currently used menu with the "Use system menu" switch on the button bar on the right side of the list or in the program's context menu. Enabling the system menu is necessary if you want to use <a href="how_tousecvs.php"> CVS support </a> .</p><h2>Contents - file list menu</h2>

<p>In the file list, you also have access to a context menu that contains commands that allow you to operate on the contents of the file list view. This menu is identical to the button bar next to the list. The commands there are described below.

 <a name="myservices_menubuttons"></a></p><h2>Contents - the toolbar next to the file list</h2>

<p>Next to the button list there is a button bar. The file list menu has the same content and consists of the following buttons:</p><p><b>Edit</b><br>
Use this button to open the documents selected in the file list for editing in Spider. You can select several documents and click this button and they will all be loaded into Spider. This button also has a menu available by clicking to the right of the button. Using the menu assigned here, you can access the list of recently used files, as well as the command to open files from the list of <a href="service_properites.php#servicepropertiesoftenused">frequently used files of the project</a> that is selected.</p><p><b>Open as</b><br>
This command allows you to open a file or files under a new name. When you select a document in the file list and click this button, you will be asked to indicate the name and location of the new file. Once accepted, it will be opened for editing. In this way, you can create copies of the selected documents and open them immediately for editing.</p><p><b>Import</b><br>
This tool will help you import and convert documents of various types into web pages, including Office-supported documents, RTF documents, CSV database files and text files. Import is described in more detail in the <a href="tool_importer.php">File Importer</a> description.</p><p><b> Preview </b> <br>
 With this command you can view HTML documents in the <a href="main_preview_embed.php"> preview </a> embedded in Spider.</p><p><b>Quick overview</b><br>
This command launches the <a href="tool_quickpreview.php">Quick View</a> tool, with which you can view files of various types, such as graphics, sounds, videos, HTML documents and more.</p><p><b>Insert link</b><br>
This command launches the <a href="tool_link.php">Insert Link</a> window, with which you can insert a link to a file selected in the list into the currently edited document.</p><p><b>Document information</b><br>
This command launches the <a href="tool_docinfo.php">Document Information</a> window, where you have access to a range of information associated with the file selected in the list.</p><p><b>Rename</b><br>
With this button you can rename both the directory and the file. If you rename a document opened in Spider, a corresponding message will be displayed.</p><p><b>Restore from a backup file</b><br>
Click to restore the last saved content of a file from a backup. This command is only available for files that have a <a href="main_editor_backups.php">backup</a>.</p><p><b>Publish on the web</b><br>
This command allows you to publish the selected file(s) or folder(s) to the currently selected FTP server. <a href="network_publishing_general.php#publish_current">Read more about the advanced capabilities of this command</a>.</p>

<p><b>Delete</b><br>
This button allows you to delete documents and folders selected in the list.</p><p><b> New file </b> <br>
 Use this command to create a new file in the current directory. The name is derived from <a href="service_properites.php#servicepropertiesdocuments"> the default file name settings for the current project </a> , otherwise it is given the name <tt> index.html </tt> (or from sequence number, if a file with that name already exists).</p><p><b>New folder</b><br>
Use this command to create a new folder in the current directory.</p><p><b>Refresh</b><br>
If you wish to refresh the list of displayed items use this button.</p><p><b>Select all items</b><br>
This button allows you to quickly select all the items in the list. In addition, it has a drop-down menu in which you will find commands that launch tools to narrow the range of selected files:</p><ul>
        <li><p><b>Select by Extensions</b><br>Displays a window that lists all file types (file name extensions) that exist in the current folder. Select the file name extensions you want to select from the list.</p></li><li><p><b>Select by Filenames</b> <br> Displays a window where you can enter a template for the names of the files you want to select. In this template you can use the so-called wildcards described in the help topic for the <a href="find_ext.php#wildcards"> Enhanced Search and Replace </a> tool. This way you can, for example, enter the name template <tt> offer * .html </tt> . After approving the template with the <tt> OK </tt> button on the list of files, all files matching this template will be selected (e.g. <tt> offer_1.html </tt> , <tt> offer_2.html </tt> etc.) .</p></li></ul>

<p><b>Properties</b><br>
With this command you access the system properties window of a file or folder.</p><p><b>Use the system menu</b><br>
This is a toggle switch that assigns the system menu to the pop-up file list menu as in Windows Explorer. If the switch is off, the Spider menu is used. Enabling the system menu is necessary if you want to use <a href="how_tousecvs.php">CVS support</a> features.<!-- dodane w 5.6 -->
</p><p><b>Hide the file list toolbar</b><br>
This is a switch to disable or enable the display of the button bars next to the file list and folder tree (above). You will also find an identical command ("Hide file list and folder tree button bar") in the <a href="settings_filelist.php">Program Settings - File list</a> window.</p><p><b>Convert national characters to ...</b> <br>
This command runs the <a href="charset_encoding.php"> National Character Conversion </a> tool in the current folder.</p><p><b>Search or search and replace</b><br>
This command runs the <a href="find_ext.php">Extended Search and Replace tool</a> in the current folder.</p><p><b>Renaming multiple files</b><br>
This command launches the <a href="tool_chameleon.php">Chameleon file ren</a> aming tool and allows files in multiple folders to be renamed at once using set rules.</p><p><b>Add to forced include list</b> <br>
With this command you can add the selected file (CSS, JS or PHP) to the list of files that are virtually attached to each component document of the project. More on <a href="service_virtual_include.php"> forced inclusion </a> .</p><p><b>Favorite folders</b><br>
This command has a related menu that displays your favorite folders. You can add favorite folders using the button marked with a splash. Selecting a folder in this list quickly navigates to it.</p><p><b>Add folder to favorites</b><br>
Use this button to add the current folder to your list of favorite folders, so you can quickly switch to them.</p><p><b>Delete selected favorite folders</b><br>
Click to specify the folder in the Folder List to remove from the Folder List. No folder will be deleted from your hard drive!</p><p><b>Opening the current folder in a new Windows Explorer window</b><br>
Click to display a new Windows Explorer window and view the contents of the current folder in it.</p><p><b>View</b><br>
Using the menu under this button, you can choose how the items are presented in the list. You can select different views just like in Windows Explorer, as well as a thumbnail view of the graphics.</p><p><b>File filter</b><br>
In the menu under this button, you can select the type of files that are displayed in the list. In addition, you can narrow the view of files only to those modified after the specified date or with the specified extension. This is done using the "Display only newer than date" and "Set user filter" commands. The file names in the list will be colored according to the selected filter.<!-- usuniete w 5.6
<p><b>Rozmie&#347;&#263; elementy</b><br>
Za pomoc&#261; menu przypisanego do tego polecenia mo&#380;esz zmieni&#263; spos&oacute;b sortowania element&oacute;w na li&#347;cie.
 -->

</p><p><b>File list help</b><br>
This button displays this help page.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="services_general.php">Projects in general</a></li><li><a href="service_properites.php">Project properties window</a></li>
   <li><a href="settings_filelist.php">File list settings</a></li><li><a href="main_tabs_myftpservers.php">Servers tab</a></li><li><a href="main_tabs_general.php">Other tabs</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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