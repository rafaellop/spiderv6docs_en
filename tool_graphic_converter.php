<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.1.1.0)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>Tools - Image File Converter</title>

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
<h1>Tools - Image File Converter</h1>



<!-- tre&#347;&#263; pomocy -->

<p>The image file converter is primarily used to convert graphics from one format to another, such as from BMP to JPEG. It also allows you to change the dimensions of the image.</p><p>The tool has a user-friendly interface that guides you by the hand through all the steps of file conversion, from creating a list of images, to selecting the format and name of the target files, to saving the images to the indicated folder, which is quick and efficient.</p><h2>Launching</h2>

<p>You can run the image file converter using the command marked with the icon shown above located in the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_gfx.php">Graphics and Multimedia</a>, as well as the button shown above located on the toolbar.</p><p>The first page of this tool is informative and welcomes you to the tool.</p><p>You can move between the pages using the Next and Back buttons.</p><h2>File selection</h2>

<p>The second page allows you to select graphics to place the conversion.</p>

<p>At the top of the window, you can select the folders where the files to be converted are located. You can indicate more than one location with graphics. If you check the <b>Search also in subfolders</b> switch, all subfolders of the selected folder will also be considered when searching for files for conversion.</p>

<p><b>Search only for files in the following formats</b><br>
Select the file formats you want to add to the list of files to be converted.</p>

<p><b>Image files found</b><br>
The list will include all images of selected formats found in subfolders.</p>

<p>You can also add and remove files from the list using the menu on the right.</p>

<p>To remove all files from the list, click the trash can icon. This will only remove the names from the list, the files on the disk will remain intact!</p>




<h2>Conversion settings</h2>

<p>The third page allows you to choose the file and folder format and the naming rule for the resulting files.</p>


<p><b>Format of the resulting files</b><br>
Select the format in which you want to save all files.</p>

<p><b>Folder for result files</b><br>
Select the folder in which you want to save the files. You can also create a new folder using the window opened by the button on the right.</p><b>Rule for creating file names</b><br>
Specify the rule for naming the resulting files. The following symbols are available:<ul>
	<li><b>%n</b> - old file name (without extension)</li>
	<li><b>%d</b> - current date (in YYYY-MM-DD format)</li>
	<li><b>%o</b> - sequence number. You can set the starting number (from which the numbering will start), as well as the number of digits that will be used (for example, if you choose the value "<tt>3</tt>", the digits will be completed in front with zeros, such as "<tt>001</tt>", "<tt>002</tt>", etc.).</li>
</ul>




<h2>Image compression settings</h2>

<p>This page allows you to set the compression of the output files. It will only be shown if the images are in compressible formats (GIF, JPG, PNG), it will not be shown if you are using BMP files.</p>




<h2>Scaling</h2>The options of this page allow you to scale the images to the given sizes.<p><b>Scale images</b><br>
Check this option if you want to scale the images.</p>

<p><b><b>Image Width and Height</b> - set the target width and height of the images. </b></p>

<p><b>Grayscale</b> - select this option to change the colors of the images to grayscale (this reduces the file size)</p>

<p><b>Empty space with color</b> - if the images will be scaled proportionally with filling the empty space with color, select the color with which this empty space is to be filled</p><b>Scaling</b> select the type of scaling of images:<ul>
	<li><b>Proportional, height matched to width</b> - the images will be scaled so that they all have the same width, the height will be calculated according to the proportions of the original images</li>
	<li><b>Proportional, width matched to height</b> - the images will be scaled so that they all have the same height, the width will be calculated according to the proportions of the original images</li>
	<li><b>Proportionally, with filling the empty space with color</b> - the images will be fitted as best as possible to the given image size ("inscribed" in a rectangle of the given size) , proportions will be preserved, and any space left on the periphery will be filled with the color given above.</li>
	<li><b>Disproportionate</b> - the images will be scaled exactly to the given dimensions, without preserving the proportions</li>
</ul>


<h2>Summary</h2>

<p>The last page shows a summary of the tasks to be performed by the Converter. If everything is set as it should be, click<b>"Execute</b>." Otherwise, you can go back to previous boards to make corrections.</p>



</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_gallery.php">Image Gallery Wizard</a></li><li><a href="tool_graphic_browser.php">Image viewer</a></li><li><a href="tool_graphic_insert.php">Inserting images into a document</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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
