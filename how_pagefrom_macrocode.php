<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>How to quickly create an attractive webpage</title>

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

<h1>How to quickly create an attractive webpage?</h1>

<h2>Introduction</h2>

<p>Not every novice user of Spider will immediately notice the full potential of the program. The vastness of different tools, icons, etc. may scare you at first. In this tutorial we will try to present some of the more interesting features of the program that are not immediately noticeable. In this article we present a method for quickly preparing a visually attractive website based on templates built in Spider.</p>

<h2>About templates</h2>

<p>The fastest way to create a new and attractive website is to use templates built in the program. Templates of ready-made pages have been prepared by a professional graphic designer and embedded in the program using the mechanism of the so called <a href="macrocodes.php">Templates</a>.</p>

<h3>New page from template wizard</h3>

<p>In order to facilitate the creation of new documents by novice webmasters, Spider has been equipped with the <a href="tool_new_page_wizard.php">New Page Wizard from Template</a> tool. This tool is a simple and intuitive way to prepare and save a complete document with graphics and other necessary files. It provides an alternative way to use the page templates described below, available in the Templates tab described later.</p>

<h3></h3>

<p>Templates are, in simple terms, modifiable templates of various types of examples which, provided with variables, can be modified before inserting them into the content of a web page. In Spider, among the Templates we can find such elements as ready-made JavaScript scripts, banners, frequently used PHP code, etc. or complete website templates or web pages.</p>

<p>To see the content of Templates, select <a href="main_tabs_macrocodes.php">the Templates tab</a> from the panel on the left of the program window. This tab displays a tree with different categories of templates. If you expand a branch and select a macro from the list, you will see additional options, such as a preview of the macro code or its source, and additional tabs for <a href="macrocodes_editor_vars.php">variables</a> and <a href="macrocodes_editor_blocks.php">blocks</a> if the macro code has such variables defined. Variables allow you to modify the appearance or content of your template, depending on your preferences, before placing it on the page.</p>

<h2>Choosing a template for your website</h2>

<p>Templates also contains, as already mentioned, ready-made website templates. To browse the available templates, expand the "Page Templates" branch.</p>

<p>After expanding the branches mentioned above, a list of template names will appear. The templates can be viewed again by expanding the branch. Since we are viewing page templates after expanding the branch, the list will contain names of pages that are part of the website, e.g. "About me", "Contact", "Homepage", etc. If you select one of the pages, a macro code preview will appear at the bottom of the Templates tab. The preview window is small, but it is possible to enlarge the preview to full screen using the magnifying glass button above the macro code mini preview. You can also preview the source code of a macro by checking the appropriate option above the mini-view.</p>

<h2>Modifying the selected template</h2>

<p>Once a site is selected, we can proceed to create the individual components of the site. Let's start with the home page by selecting the item in the list named "Home Page". As already mentioned, at the bottom of the Templates tab you will see a preview of the template and additional tabs named "Variables" and "Blocks", which can be used to control the page content. The picture on the right shows a selection of templates. To make it easier to define the appearance of the page, it is a good idea to enable the full-screen preview of the template using the magnifying glass button located above the mini-view of the template. This will make the entire template visible and the changes you make can be easily seen in action.</p>

<p>To make changes to the template, we now switch to the "Blocks" tab, as shown in the image opposite. The "Blocks" tab is a list of the components of a page or site. In this case, for our chosen template named "Speedbike", it is the definition of the main menu of the page, i.e. links to other pages that are part of the site. If for some reason you do not want your page to include a gallery or a "Links" section, disable this option on the "Blocks" tab. In the macro code preview, you will immediately notice the change. The main menu will be modified and the menu item you have disabled will not be visible.</p>

<p>The next place we will now visit is the "Variables" tab. It performs a similar function to the "Blocks" tab but there is access to a much larger number of different types of options that allow you to influence the content of the page. The appearance of the "Variables" tab is shown in the figure below.</p>

<p>We will now show how to change some of the options that affect the appearance of the page. We will start with the content of the page displayed in the template. To do this, switch to the "Variables" tab mentioned above and from the long list of options, select the one described as "Document content". The right part of the clicked line will become editable and now you can enter the content you would like to put on your homepage in this place. It can be a greeting, an invitation to browse or some other general information - just like on the home page. In the picture on the right you can compare how it looks in practice. In our case, we replaced the sample text with a snippet:</p><code>
&amp;lt;BR&amp;gt;&amp;lt;BR&amp;gt;&amp;lt;BR&amp;gt;&amp;lt;BR&amp;gt;&amp;lt;BR&amp;gt;&amp;lt;BR&amp;gt;<br>
Welcome to my website. I am very pleased that you have come here. I hope that you will spend nice moments here and read interesting information. Click on the selected menu to look into individual parts of my website. &amp;lt;br&amp;gt;&amp;lt;br&amp;gt; If you want to write me an e-mail, here is my address: &amp;lt;a href="mailto:email@domain"&amp;gt;email@domain&amp;lt;/a&amp;gt;.</code><p>As you can see, in this field you can use HTML to place links or define some formatting.</p>

<p>Other variables in the macro allow you to define many different aspects of the edited template, such as links to other files on the site, text and link colors, page alignment, etc.</p>

<p>You've probably noticed that every macro has a logo that looks like "First Name Last Name - My Home Page". We will show you how to change this logo later in this article.</p>

<h2>Saving the finished page to disk</h2>

<p>To save the modified template to disk as a finished web page, select the "Create New Document from Template" command. This command is located in the menu under the fifth button from the left at the top of the macro code. The button is called "Insert Template". If you click on this command, the program will ask you to specify a place on your disk where the page should be saved. It is a good idea to designate a separate folder for this. We also recommend that you change the default name of the homepage file to, for example, index.html, because Web servers usually do not support file names with Polish letters.</p>

<p>After selecting a file name and approving the save, the document will be created and opened in Spider, where you can edit it further. In the meantime you may see a message asking you to add a declaration of national character encoding. We recommend clicking the YES button, thanks to which Polish characters will be displayed correctly in most Internet browsers.</p>

<p>As already mentioned, a page created and opened automatically for editing can be edited in Spider by changing various HTML parameters. It should be added here that the page is saved to disk along with all the image files included in the template. Those files are saved in a folder named hid_mc_gfx.</p>

<h2>Change the project logo to your own</h2>

<p>We have already mentioned that the site's logo is in all cases identical with the form "First Name Last Name - My Home Page". To change it, you will need a graphics program in which you need to open the logo.gif file located in the hid_mc_gfx folder. In the graphics program, you can change the logo.gif file so that instead of the default text, it has your name or nickname or anything else that fits your site concept. However, remember to keep the dimensions of the logo image for the sake of the page layout. That way, the page will retain its original layout.</p>

<h2>Creating more project components</h2>

<p>To create other pages on the site, e.g. "About me", "Links", "Contact", etc., you need to select the next, appropriately named templates in the Templates tab and repeat the steps described above for the main page, changing the content or highlighting scheme at your own discretion. When saving subsequent pages on disk, remember to place them in the same folder as the main page of the site, because then you will have a well-organized site, and all the links will work correctly. Note: if you change the names of files under which you save templates, remember to indicate those names in the "Variables" tab. Otherwise, links between pages on the site may not work. It's best to write down the names of pages somewhere on a piece of paper before you start creating the site, and assign them to appropriate variables from the moment you create the main page.</p>

<h2>Publication of the website on the Internet</h2>

<p>Before publishing the project on the web, you should first test its operation on a local computer. To do this you can open one of the generated pages in a browser and "walk" through its links checking if there are no wrong links and everything works as expected. You can also use the verification tools built into Spider for this purpose, but this task is meant for more advanced users, but that doesn't mean it's not worth getting familiar with.</p>

<p>To publish a site on the Internet, you must first of all have a place to publish, in other words, an Internet account with the ability to publish web pages. If you have such an account, you need to configure it in Spider in the <a href="settings_network_ftpservers.php">FTP settings</a> ("Customize network and connections").</p>

<p>Once you have defined an account, you can connect to it using the resource panel on the right side of the screen and <a href="main_tabs_myftpservers.php">the "Servers" tab</a> there. Again, see the program help for additional information. Remember to upload all files to the server in the same layout as they are on the hard drive, i.e. according to appropriate folders, with subfolders and assigned graphics. Otherwise the website may not work properly. Again, we recommend that you test the published project from the Internet.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="macrocodes.php">About templates or templates</a></li>
   <li><a href="main_tabs_macrocodes.php">Template tab</a></li>
   <li><a href="settings_network_ftpservers.php">FTP server configuration for publishing</a></li>
   <li><a href="main_tabs_myftpservers.php">Using the "Servers" tab</a></li>
</ul></td>
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