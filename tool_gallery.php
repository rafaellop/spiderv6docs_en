<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.0.0.0)">

<!-- nazwa strony pomocy -->
<title>Tools - Image gallery creator</title>

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
<h1>Tools - Image gallery creator</h1>

<p>The image gallery creator allows you to create a gallery from pictures very quickly. It can automatically generate thumbnails, arrange them in a table, and create documents for each graphic.</p>

<p>The image gallery creator has a user-friendly interface that guides you through all stages of the gallery creation process, from creating a list of images, through choosing the layout of thumbnails and buttons, to saving the gallery in a selected folder, which is quick and efficient.</p><p>Before starting to create a gallery, you can prepare buttons for navigating through the gallery - Next, Previous, First, Last, Gallery (not necessary, you can insert text), as well as a CSS style sheet (also optional).</p>


<h2>Launching</h2>

<p>You can launch the Graphics Gallery Wizard by using the command marked with the icon shown above located in the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_gfx.php">Graphics and Multimedia</a>, as well as by using the button shown above located on the toolbar.</p><p>The first page of this tool is informative and welcomes you to the tool.</p><p>You can move between the pages using the Next and Back buttons.</p><h2>File selection</h2>

<p>The second page allows you to select graphics to be placed in the gallery.</p><p>At the top of the window, you can select the folders from which the files are to be placed in the gallery. You can indicate more than one location with graphics. If you check the <b>Include subfolders</b> switch, all subfolders of the selected folder will also be included when searching for files for the gallery.</p>

<p>Using the <b>Add only files type:</b> switches, you can specify the types of files only to be added to the gallery.</p>

<p>At the bottom there is a list of files to create a gallery from. Using the menu on the right side of the list, you can add or remove files from it, as well as change their order (this affects the order in which the graphics are placed in the gallery).</p>

<p>You can also quickly sort files by date, type, or name by clicking on the column header in the list. Another click on the same header will reverse the sort order.</p>

<p>To remove all files from the list, click the trash can icon. This will only remove the names from the list, the files on the disk will remain intact!</p>




<h2>Gallery appearance</h2>

<p>The third page allows you to set the appearance of the gallery.</p>

<p><b>Include a style sheet</b><br>
Check if you want to use a previously prepared stylesheet in the gallery. If you check the <b>Copy with</b> gallery switch, the indicated sheet will be copied to the gallery save location. Otherwise, only the path to it will be inserted.</p>

<p><b>Create separate documents with gallery elements</b><br>
Check this option if a separate document is to be created for each graphic image. Otherwise, links in the thumbnail file will point directly to large images in the gallery.</p>

<p><b>Buttons in the gallery</b><br>
Choose where in the gallery item files you want to place buttons that are links to documents in the gallery. If you do not enter any paths, the default captions <tt>[next]</tt>, <tt>[previous]</tt>, etc. will be inserted.</p>
<p>If the option <b>Create separate documents with gallery elements</b> is not checked, these fields will be inactive.</p><b>Thumbnail table and gallery looks</b><br>
In this section you can set the appearance of documents in the gallery. You can:<ul>
   <li>adjust the layout of the table (number of rows and columns - the program tries to automatically adjust the values),</li>
   <li>select a color (from the list of predefined colors, or after selecting "Select..." from the list, any color using the <a href="tool_colorpalette.php">Color Palette</a>), or an image for the table background (using the <a href="tool_graphic_browser.php">Graphic Viewer</a>),</li>
   <li>assign Meta section settings (using the <a href="tool_meta.php">META Section Editor</a>)</li>
   <li>select, or create a style<a href="tool_style_editor.php">(Style for tag</a>), or CSS class<a href="tool_style_class.php">(select or create class</a>) for the table with graphics,</li>
   <li>specify item identifier</li>
</ul>




<h2>Gallery destination files</h2>

<p>In the fourth page, you need to specify file paths and destination formats for graphics.</p>

<p>Specify whether the gallery (file with thumbnails) should be opened in the Spider after being created, or only saved to disk. Also specify the path and name of the main gallery file.</p>

<p><b>Images to create a gallery</b><br>
In this section, select the file format of the large image in the gallery (mostly unchanged).</p>

<p><b>Save files to a folder</b><br>
If you select this option, large files will be copied to the specified folder. It is necessary to specify absolute paths, which will be converted to relative paths from the main document during gallery creation. If you do not check this option, the gallery will use only the paths to those graphics in their current location.</p>

<p>Next, specify a document name template with a large image (where <tt>%o</tt> is the sequence number, <tt>%n</tt> the original name without extension). Do not specify the file name extension.</p>


<p><b>General settings for thumbnail images</b><br>
In this section, specify the format of the thumbnail file, the absolute path to the folder where the thumbnails are to be placed (this will also be converted to relative), and the file name template for the thumbnail (where <tt>%o</tt> is the ordinal number, <tt>%n</tt> the original name of the large image without extension).  Do not specify the file name extension.</p>




<h2>Detailed settings for thumbnails</h2>

<p>The settings of the fifth page apply only to thumbnails</p>

<p><b>Thumbnail image detail settings</b><br>
In this section, set the details for thumbnails:</p>

<p><b><b>Image width and height</b> - set the maximum width and height of the thumbnail. </b></p>

<p><b>Blank color</b> - if the image is scaled proportionally with filling the blank space with color, select the color with which to fill the blank space</p>

<p><b>Transparent GIF</b> - if the image scaled proportionally with filling the empty space with color, then you can check this option to make the filled spaces transparent in the image (only for GIF files)</p>

<p><b>Greyscale</b> - check this option to make the thumbnails in shades of gray (this reduces the file size)</p><b>Scaling</b> select the type of scaling of the thumbnail:<ul>
   <li><b>Proportional, height matched to width</b> - thumbnails will be scaled so that they all have the same width, the height will be calculated according to the proportions of the original image</li>
   <li><b>Proportional, width matched to height</b> - thumbnails will be scaled so that they all have the same height, the width will be calculated according to the proportions of the original image</li>
   <li><b>Proportionally, with filling the empty space with color</b> - the thumbnails will be adjusted to the given image size as best as possible ("inscribed" in a rectangle of the given size) , proportions will be preserved, and any space left on the periphery will be filled with the color given above.</li>
   <li><b>Disproportionate</b> - thumbnails will be scaled exactly to the specified dimensions, without preserving proportions</li>
</ul>

<p><b>Do not re-create thumbnails that have already been created</b><br>
Check this option so that the program does not re-create the same thumbnails when you make any corrections to the table layout, styles, etc. (this reduces the gallery re-creation time significantly). Remember that after a change concerning the thumbnail files themselves, you should uncheck this option for it to have an effect.</p>

<p><b>When you click load into the target window</b><br>
Select from the list the frame into which documents with large images are to be loaded ( <tt>TARGET</tt> attribute of tag <tt>A</tt>. Most often, the field can be left blank.</p>

<p><b>Description under th</b>umbnail, <b>Description in tooltip balloon</b><br>
Select options for thumbnail descriptions</p>

<p><b>Style of the table cell containing the thumbnail</b><br>
Choose a style for the table cells where the thumbnails will be placed - just like for the entire gallery table in page three.</p>




<h2>Image compression settings</h2>

<p>This page allows you to set the compression of your images. It will only be shown if the images are in formats that are subject to compression (GIF, JPG, PNG), while it will not be displayed if you are using BMP files.</p>




<h2>Preview the image gallery and complete the wizard</h2>

<p>This is the last page of the wizard. In the preview window you can see the results of your work.</p>

<p>Using the buttons in the menu below the preview window, you can preview the gallery in a new browser window, refresh the image or print it.</p>

<p>If you are satisfied with the results of the wizard, click on the<b>"Execute</b>" button, which will save the gallery to disk at the indicated location. Otherwise, you can click the<b>"Back</b>" button and go back to any page.</p>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
   <li><a href="tool_graphic_converter.php">Image file converter</a></li><li><a href="tool_graphic_browser.php">Image viewer</a></li><li><a href="tool_graphic_insert.php">Inserting images into a document</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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