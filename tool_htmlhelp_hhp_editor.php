<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Authoring-tool" content="Spider V6">

<!-- nazwa strony pomocy -->
<title>HTML Help - HTML Help Project Editor</title>

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
<h1>HTML Help - HTML Help Project Editor</h1>


<p>Using the HTML Help project editor, we set all the parameters of the project, and decide on the later properties that the CHM file created from the project will have. Also in this editor we determine what components we add to the project.</p>

<h2>Launching</h2>

<p>You can start the described tool using the button marked with the icon shown above. The launch button for this window can be found, for example, in the HTML Help menu and in the HTML Help toolbar.</p><h2>Use the project editor</h2>

<p>The project editor is divided into four parts-tabs, each performing a different function in the project development process.</p>

<h2>Project component files</h2>

<p><b>Project files to be compiled</b><br>
In the only large window, you need to load from disk all the files you want to include in the project. The plus icon on the right side of the window is used for this purpose. You can add multiple files at once, or, as you continue to create the project, you can also add individual files. The minus icon is used to delete unnecessary files.</p>

<h2>General project settings</h2>

<p>In this tab, we set such parameters as default general settings, international language and font parameters, types of definition files, and settings for the compiler itself.</p><br><p><b>Default parameters</b></p>
<ul>
   <li><p><b>Default title </b> <br>
Enter the default title of the help window in this field. However, this value is less significant than the title defined for the default window.</p>
   </li><li><p><b>Default homepage</b><br>
   		Use the drop-down list to select the file that will be loaded into the HTML Help window when the CHM file is launched. However, this value is less important than the start page defined for the default window.</p>
   </li><li><p><b>Default window</b><br>
		Use the drop-down list to select the window that will be used to display the HTML Help content. The list may be empty at this stage, as windows are defined in the next tab.</p>
</li></ul>

<p><b>International settings</b></p>
<ul>
   <li><p><b>Language</b><br>
		From this list you can select the language in which the pages included in the HTML Help project are written.</p></li><li><p><b>Character set</b><br>
		From this list you can select the appropriate script for the font used in the HTML Help project pages.</p></li><li><p><b>Font</b><br>
		Using the button next to it marked with the letter "A" you can select the type of font, and its size. This font will be used in the interface of the compiled CHM file - not for displaying page content.</p></li></ul>

<p><b>Project definition files</b></p>
<ul>
   <li><p><b>CHM file name after compilation</b><br>
		In this field there is space to enter the file name that will be given to the compiled HTML Help file. If you do not enter the file name extension (<tt>.chm</tt>), Spider will do it automatically.</p>
   </li><li><p><b>Report file name</b><br>
		If you want a compilation report, enter the name of the report file with an extension (e.g. <tt>report.txt</tt>) in this field.</p>
   </li><li><p><b>Name of the table of contents file </b> <br>
In this field, enter the name of the table of contents file to be used for this HTML Help project. <a href="tool_htmlhelp_hhc_editor.php"> Table of Contents </a> can be created with the editor that will open after clicking on the icon next to the field. If the file with the table of contents already exists on the disk, you can select it using the window opened by the button next to it.</p>
   </li><li><p><b>File name of the index</b><br>
   		In this field, enter the name of the index file (index) to be used for this HTML Help project. You can create <a href="tool_htmlhelp_hhk_editor.php">the</a> index with the editor that will open when you click on the icon next to the field. If the index file already exists on disk, you can point to it using the box that opens with the button next to it.</p>
   </li><li><p><b>Automatic creation of table of contents (<tt>.hhc</tt>) during compilation</b><br>
   		Enabling this option allows you to automatically create a table of contents based on the degree one, degree two, etc. titles in the project's component files, nesting the levels accordingly. This function works the more correctly the fewer levels we consider. The names in the table of contents become the titles of the degree.</p>
        <ul type="circle">
   		<li><p><b>Maximum depth: </b> <br>
In this field, you can define how many depth levels the automatically created table of contents should take into account.</p>
        </li></ul>
   </li><li><p><b>Include keywords from HTML files</b><br>
		Enabling this option automatically creates a keyword index based on keywords found in the project's component files. Keywords are created in a special way. An example definition of a keyword in an HTML file might look like the following:</p><pre>
<b>&amp;lt;object type</b>="aplication/x-oleobject"
<b>classid</b>="clasid:1e2a7bd0-dab9-11d0-b93a-00c04fc99f9e"&amp;gt;
   <b>&amp;lt;param</b> <b>name</b>="Keyword" <b>value</b>="Spider"&amp;gt;
   <b>&amp;lt;param</b> <b>name</b>="Keyword" <b>value</b>="HTML"&amp;gt;
   <b>&amp;lt;param</b> <b>name</b>="Keyword" <b>value</b>="PHP"&amp;gt;
   <b>&amp;lt;param</b> <b>name</b>="Keyword" <b>value</b>="XHTML"&amp;gt;
<b>&amp;lt;/object&amp;gt;</b>
</pre>In Spider, on the "HTML Help" toolbar, there is a tool for creating <a href="tool_htmlhelp_compiler_info.php">lects of HTML Help</a>.</li></ul>   
   
<p><b>Compiler settings</b></p>
<ul>
   <li><p><b>Compatibility</b><br>
   The option selected from the list determines compatibility with HTML Help libraries. The newer version requires that you have a newer version of MS Internet Explorer on your system, but it also gives you more capabilities, such as creating binary indexes.</p>
   </li><li><p><b>No folders in the resulting file</b><br>
   Checking this option will exclude all subfolders in the project directory from compilation.</p>
   </li><li><p><b>Support for extended decompilation</b><br>
   This option was added due to the presence of HTML Help in the specification, however, even disabling it does not make decompiling the project impossible. Everything but the project definition (HHP file) can be recovered.</p>
   </li><li><p><b>Compile full-text search information</b><br>
   Checking this option allows you to create a base for full-text search. It is in the form of a separate tab in the compiled CHM file.</p>
	</li><li><p><b>The name of the stop list file for full-text search</b><br>In this field, enter the name of the stop list definition file for full-text search. By defining such a file and entering words in it that should not be included when compiling full-text search information, you can reduce the size of the resulting CHM file. An example list of such words can include conjunctions or other words that are not relevant to the search. The stop file of the list is defined by entering into it one word per line.</p>
   </li><li><p><b>Create a binary index</b><br>
   Checking this option allows you to create a binary version of the index. There are two versions of the index in HTML Help: binary, and as a site map. The binary one is smaller, faster in operation, allows you to merge together indexes of different files, is automatically sorted during compilation, and allows you to merge key words contained in HTML documents (KLinks). Map, on the other hand, does not need to be compiled, it can be used not only in the <tt>*.chm</tt> file, but also on the Web pages, the user has full control over its content (it is a text file with HTML formatting).</p>
   </li><li><p><b>Create a binary table of contents</b><br>
   Allows you to create a binary version of the table of contents, which speeds up its loading when the table of contents is very large. One of its advantages is the ability to use the Next/Previous option in the toolbar, which is absent in HTML Help Workshop (this allows you to browse forward or backward through documents one by one using the buttons on the toolbar). The binary version has limitations, for example, it does not support icons other than book and page, as well as information types. Under normal circumstances, creating a binary table of contents is not necessary. If you want to merge archive files later (Merge), this is not even allowed.</p>
</li></ul><br><a name="definiowanie-okien"></a><h2>Defining windows</h2>
   
<p>Defining windows is not mandatory. However, creating at least one window allows you to define a myriad of additional parameters for the appearance and behavior of the HTML Help window. Additional window definitions can also be useful if some topics are to be displayed in separate windows. Window definitions take precedence over some project defaults.</p>

<p>Note: In this window, after making any change, you must approve it by clicking on the "Remember current window settings" button marked with an icon, otherwise the changes made will not be taken into account.</p><br><p><b>Window name</b><br>
The list contains the names of all windows defined for the current project. Windows can be added and removed using the buttons next to them, marked with "+" and "-".</p><p>Below the list of windows are five tabs with buttons above them for switching them:</p>

<ul>
        <li><b>Information</b></li><li><a href="#dimensions">Sizes, panel</a></li><li><a href="#toolbar">Toolbar</a></li><li><a href="#main_files">Master files</a></li><li><a href="#design">Appearance style</a></li></ul><a name="dimensions"></a><h3>Sizes, panel</h3>
<ul>
   <li><p><b>Window title</b><br>
	In this field, enter the title that will show on the title bar of the HTML Help window.</p>
   </li><li><p><b>Remember the position and size of the window when changed by the user</b><br>
	Checking this option will remember the position and size of the window after it is changed the next time it is opened.</p>
   </li><li><p><b>HTML Help window always on top</b><br>
	Checking this option will make the HTML Help window always on top in relation to other system windows.</p>
   </li><li><p><b>Window size and position</b><br>
	In four fields: "From left", "From top", "Width", "Height" set the position of the window in relation to the screen.</p>
   </li><li><p><b>Autosetting</b><br>
	When you click on the "Autoset" button, a sample window will open, whose manual setting will enter the selected dimensions and position into the settings.</p>
   </li><li><p><b>Default sizes</b><br>
   When you click on the "Default sizes" button, it will set the size of the HTML Help window according to the default size.</p>
</li></ul>

<p><b>Navigation panel</b></p>
<ul>
   <li><p><b>Display navigation panel</b><br>
   If unchecked, the following tabs will not be shown: table of contents, index, search, favorites.</p>
   </li><li><p><b>When opened, panel hidden</b><br>
   Checking this option causes the tabbed navigation panel to be hidden when the HTML Help window is opened.</p>
   </li><li><p><b>Automatically hide or display</b><br>
   Enabling this option will automatically hide or show the navigation panel when the user leaves or activates the HTML Help window.</p>
   </li><li><p><b>Width</b><br>
   In this window you can set the width of the navigation panel in the HTML Help window.</p>
   </li><li><p><b>Bookmarks position</b><br>
   From the drop-down list we choose the position of the navigation panel's tabs. There are three possibilities: the standard "On top", and "On the left" and "On the bottom".</p>
   </li><li><p><b>Synchronize table of contents automatically</b><br>
   Enable this option to automatically synchronize the viewed document with the table of contents - the currently viewed item is then selected in the table of contents.</p>
   </li><li><p><b>Hide the button bar</b><br>
      Selecting this option causes the function button bar to be hidden. You can activate it by selecting the appropriate item in the menu.</p>
   </li><li><p><b>Hide text on the button bar</b><br>
   When checked, this option will cause the subtitles under the buttons on the bar not to be shown.</p>
   </li><li><p><b>Default tab</b><br>
   From the drop-down list, we can choose which of the navigation panel's tabs will be exposed when HTML Help is opened. The default is "Table of Contents." The number of tabs in the list depends on how many we define in the options below.</p>
   </li><li><p><b>"Search" tab</b><br>
   Checking this option will activate the search tab. This is used for large and very large projects, or because of the nature of the project, such as a database.</p>
	<ul>
		   <li><p><b>Advanced</b><br>
   				Enabling this option will make the search tab have an additional option of logical search conditions. This is done by adding a drop-down list with operators next to the field for entering the search string: AND, OR, NEAR, NOT. This gives the search new capabilities and makes it more precise.</p>
	</li></ul>
   </li><li><p><b>"Favorites" tab</b><br>
   Checking this option adds an additional bookmark to the navigation panel. To it you can add any of the currently viewed pages, which allows you to get to them more quickly later.</p>
</li></ul><br><a name="toolbar"></a><h3>Toolbar</h3>

<p><b>Basic buttons</b></p>
<ul>
   <li><p><b>Show/Hide</b><br>
   Checking this option adds a button on the toolbar that hides or shows the hidden navigation panel.</p>
   </li><li><p><b>Back</b><br>
   Checking this option adds a button on the toolbar that takes you back to the previously viewed page.</p>
   </li><li><p><b>Next </b> <br>
Selecting this option adds a button on the toolbar that takes us to the next page if we go back to the previous one.</p>
   </li><li><p><b>Stop</b><br>
   The button is especially useful when using HTML Help to navigate through Internet resources. The button stops the loading of the page.</p>
   </li><li><p><b>Refresh</b><br>
   This button reloads the contents of the window.</p>
   </li><li><p><b>Start </b> <br>
This button loads the page defined in the next tab " <b> Main files </b> " as the start page.</p>
   </li><li><p><b>Options</b><br>
   The button launches a list that includes all user-defined HTML Help options, in addition: system Internet options, printing, and a highlighting switch when searching (highlighting with a block of searched phrases)</p>
   </li><li><p><b>Print</b><br>
   The button allows you to print. When it is clicked, a window shows a choice of two options: print the selected topic, or print the selected heading with all subtopics.</p>
   </li><li><p><b>Locate</b><br>
   Click on this button to indicate the position of the currently viewed page in the table of contents.</p>
</li></ul>

<p><b>Additional buttons</b></p>
<ul>
   <li><p><b>Jump 1</b><br>
   A button defined entirely by the user. In two fields there is space for a description of the button, which will appear under its icon on the bar, and for a reference to a local page, or for entering a web address.</p>
   </li><li><p><b>Jump 2</b><br>
   A button defined entirely by the user. There is space in two fields for a description of the button, which will appear under its icon on the bar, and for a reference to a local page, or for entering a web address.</p>
   </li><li><p><b>Back</b><br>
   The button takes you back to a previously viewed page. Note: Requires the presence of a binary table of contents.</p>
   </li><li><p><b>Next</b> <br>
The button takes you to the next page. Attention! Requires the presence of a binary table of contents.</p>
   </li><li><p><b>Increase font size</b><br>
   This button toggles between the font sizes, as defined in the browser's View-&gt;Text Size menu. You can choose from the following font settings: largest, larger, medium, smaller, smallest. Note: Changing the font size with this button causes an identical change in all windows of the system browser.</p>
</li></ul>

<p><b>Unusual buttons</b><br>
	Selecting these buttons allows you to place non-standard buttons on the toolbar. In this version of HTML Help Workshop, however, they have not been enabled by Microsoft for use. While they are displayed, they are not active for their intended purpose.</p>
<p>The following buttons are available: "Table of Contents", "Index", "Search", "History", "Favorites", "Notes", "Back", "Next".</p><a name="main_files"></a><h3>Main files</h3>

<ul>
   <li><p><b>Table of contents</b><br>
   In this field we enter the name of the HHC table of contents file along with the extension. It can be loaded from disk using the icon next to the field. If you open the editor, when the table of contents file is already made and located in the project directory, it is automatically included in this field.</p>
   </li><li><p><b>Index</b><br>
   In this field, you enter the name of the HHK cursor file along with the extension. It can be loaded from disk using the icon next to the field. If you open the editor, when the index file is already made and located in the project directory, it is automatically included in this field.</p>
   </li><li><p><b>Default theme</b><br>
   In this field, enter the name of the project file along with the extension that will be opened when HTML Help is opened. You can also load this file from disk using the icon next to the field.</p>
   </li><li><p><b>Home page</b><br>
   In this field, we enter the name of the file along with the extension that will be activated if the "Start" button is defined in the previous tab. This file can also be loaded from disk using the icon next to the field.</p>
</li></ul><a name="design"></a><h3>Appearance style</h3>
<p>The following options are only of minor importance for the appearance of HTML Help. Many of them are never used when building a project - these will not be described.</p>

<p><b>Basic</b></p>
<ul>
   <li><p><b>Maximize button</b><br>
	Only when this option is selected will the maximize button of the HTML Help window be shown.</p>
   </li><li><p><b>Show maximized</b><br>
	When this option is checked, the HTML Help window will open as maximized.</p>
   </li><li><p><b>Minimize button</b><br>
	Only when this option is selected will the minimize button of the HTML Help window be shown.</p>
   </li><li><p><b>Show minimized</b><br>
	When checked, the HTML Help window will open as minimized to the taskbar.</p>
   </li><li><p><b>Pop-Up Window</b><br>
	When this option is checked, Pop-Up windows will be allowed to open in HTML Help windows.</p>
   </li><li><p><b>Child type window</b><br>
	When this option is checked, child type windows will be allowed to open in HTML Help windows.</p>
   </li><li><p><b>Clip children's windows</b><br>
	Child type windows will be clipped.</p>
   </li><li><p><b>Clipped peer windows</b><br>
	Peer windows will be clipped.</p>
   </li><li><p><b>Horizontal scrollbar</b><br>
	Only when this option is checked will a horizontal scrollbar appear when the window is shrunk. Otherwise, the contents of the window will be automatically adjusted to its size.</p>
   </li><li><p><b> Vertical scrollbar</b> <br>
Only when this option is checked will a vertical scrollbar appear when the window is reduced. Otherwise, the contents of the window will be automatically resized to fit its size.</p>
   </li><li><p><b>Border </b> <br>
When this option is selected, a decorative page border will appear. The other options determine the type of border.</p>
   </li><li><p><b>Dialog type window</b><br>
	When this option is checked, dialog type windows will be allowed to open in HTML Help windows.</p>
   </li><li><p><b>Overlapping</b><br>
	When this option is checked, overlapping windows will be allowed in HTML Help windows.</p>
   </li><li><p><b>Thicker border</b><br>
	When this option is checked, the border of the page will be much thicker than the standard one.</p>
   </li><li><p><b>Locked size</b> <br>
If you check this option, the HTML Help window will be locked in size.</p>
</li></ul> 
  
<p><b>Expanded</b></p>
<ul>
   <li><p><b>Tool type window</b><br>
	When this option is checked, tool type windows will be allowed to open in HTML Help windows.</p>
   </li><li><p><b>Sunken border</b><br>
	When this option is selected, the borders will be of sunken type.</p>
   </li><li><p><b>3D border</b> <br>
When selected, the borders will be three-dimensional.</p>
   </li><li><p><b>Alignment to the right</b><br>
	In non-style-defined texts, right alignment will be enforced. This is mainly applied to Hebrew-type nationality texts, where it reads from right to left.</p>
   </li><li><p><b>Reading from right to left.</b><br>
	This is mainly applied to texts of Hebrew-type nationalities, where one reads from right to left.</p>
   </li><li><p><b>Control the parent window</b><br>
	A close relationship between the subordinate window and the parent window follows.</p>
   </li><li><p><b>Accept dropped  files</b><br>
	When this option is checked, the dropped files are accepted.</p>
   </li><li><p><b>Always on top</b><br>
	When this option is checked, the HTML Help window will be set against other windows of the system always on top.</p>
   </li><li><p><b>Context-sensitive help button</b><br>
	When this option is checked, a context-sensitive help button will be allowed.</p>
   </li><li><p><b>Don't inform the parent's window</b><br>
	When checked, this option will enforce no control between the subordinate window and the main window.</p>
   </li><li><p><b>Transparent</b><br>
	When this option is checked, additional windows will be transparent.</p>
</li></ul>

<h2>HTML Help API and included help</h2><br><p><b>List of other help files linked to the current help</b><br>
	HTML Help can also consist of many subordinate HTML Help files incorporated into the main file. Including them is done through this list. Use the buttons next to it to select the CHM files to include. Note, however, that the included CHM files must always be in the same directory as the main project file. You also need to add a link to the table of contents of the main project to the tables of contents of the included CHM files.</p>

<p><b>List of constants assigned to the topic</b><br>
	In this list, you can assign text constants to selected HTML Help files, or point to header files containing these definitions. The definitions here are useful when using the HTML Help API in Windows programs, so you can call specific help topics directly from these programs.</p>

<p><b>When this constant or number is passed to the HTML Help API</b><br>
	In this field, enter the name of the constant that will be assigned to the file selected in the field below.</p>

<p><b>Let it refer to this file</b><br>
	From the drop-down list of this field, select the file to be associated with the name or number from the field above.</p>

<p><b>Mapping for HTML Help API</b><br>
	The list is intended to indicate header files containing links between help context numbers and file-related constants. In programming languages, context help is most often called by numeric values. This section allows you to bind (map) numeric constants to file-related constants An example of the contents of a header file might look as follows:<br><br><tt>#define IDH_CI_CONTENTS 1060<br>
#define IDH_CI_INTRO 1040<br>
#define IDH_CI_STEP 1010</tt></p>

<p><b> Pop_Up popup windows </b> <br>
 The list is intended to indicate header files containing Pop_Up popup definitions.</p><br></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_htmlhelp_general.php">HTML Help - general information</a></li><li><a href="tool_htmlhelp_hhc_editor.php">HTML Help table of contents editor</a></li><li><a href="tool_htmlhelp_hhk_editor.php">HTML Help index editor</a></li><li><a href="tool_htmlhelp_folder_to_chm.php">Quick HTML Help from folder</a></li><li><a href="tool_htmlhelp_hhp_compilation.php">Compile HTML Help document</a></li><li><a href="tool_htmlhelp_compiler_info.php">HTML compiler information Help</a></li><li><a href="tool_htmlhelp_compiler_services.php">HTML Help and projects in Spider</a></li></ul>
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
