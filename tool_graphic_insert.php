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
<title>Tools - Inserting graphics</title>

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
<h1>Tools - Inserting graphics</h1>

<!-- tre&#347;&#263; pomocy -->

<p>The window is used to insert graphics into the document ( <tt>IMG</tt> tag in HTML).</p><p>The tool can be launched from the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools.php">Tools</a> / <a href="main_menu_tools_gfx.php">Graphics and Multimedia</a> menu, as well as from the toolbars and using the standard keyboard shortcut <tt>Ctrl+Shift+I</tt>. The command icon is shown above.</p>

<p>The window contains two tabs:</p><ul>
	<li><b> Settings </b> - here you can set any attributes of the <tt> IMG </tt> tag</li>
	<li><b>Preview</b> - allows you to preview the image as it will be inserted into the document.</li>
</ul>



<h2>Settings</h2>

<p><a name="localization"></a><b>Location</b><br>
Enter the path to the image file. Use the drop-down list to select one of the most recently inserted addresses. You can also use the button next to the field to launch <a href="tool_graphic_browser.php">a graphic viewer</a> that allows you to select an image.</p>

<p><b>Image description</b><br>
Provide a description of the image, which will be used as the <tt>ALT</tt> attribute of the <tt>IMG</tt> tag. This will allow a user who cannot see the image to figure out what it represents (for example, in text-based browsers like Lynx).</p>

<p><b>Hint</b><br>
Provide a description of the image, which will be used as the <tt>TITLE</tt> attribute of the <tt>IMG</tt> tag. A graphics browser (such as Internet Explorer, or Mozilla, Opera, etc.) will display this description as a 'balloon above the image'. Using the button next to this field, you can easily copy the text here from the <b>Image Description</b> field (above).</p>

<p><b>Dimensions</b><br>
Enter the height and width of the image. If you have pointed to the image using the image <a href="tool_graphic_browser.php">viewer</a>,the program will automatically insert the correct original dimensions stored in the image.</p>
<p>If the image is to be scaled relative to the size of the browser window, you can specify a percentage - to do so, check the '<tt>'%</tt>' switch.</p>
<p>If you have forced a change in image dimensions by entering different values in the fields, you can restore the original values by clicking on the button between the 'vertical' and 'horizontal' fields.</p>

<p><b>Spacing</b><br>
Specify the spacing to be maintained between the image and the rest of the page elements.</p>

<p><b>Alignment</b><br>
Choose how you want the image to be aligned with other elements of the page.</p>
<p>This setting has a <i>deprecated</i> status and it is not recommended to use it. It is recommended to use <a href="coding_css.php">CSS styles</a>.</p>

<p><b>Use map</b><br>
If you have defined link maps in your document, you can choose which map to apply to the image.</p>
<p>By clicking on the button next to the field , you can launch the Link Map Editor and create a new link map for the image.</p>

<p><b>Border</b><br>
Enter a number that specifies the thickness of the border ( <tt>border</tt> attribute). The default value is "0" (most commonly used).</p>
<p>This setting has a <i>deprecated</i> status and it is not recommended to use it. It is recommended to use <a href="coding_css.php">CSS styles</a>.</p>
<p>Checking the "<b>Always insert</b>" switch will cause the <tt>border</tt> attribute to be inserted into the <tt>IMG</tt> tag always, even when its value is 0.</p>
<p>If you enable the<b>"Never insert</b>" switch, the value of the <tt>border</tt> attribute will never be inserted. However, if you specify a border value different from 0, then with this option checked and at the same time with<b>"Insert dimensions, borders, etc. as a style</b>" enabled, its value will be inserted, but only as an inline style definition.</p>




<h2><a name="rollover"> </a> Apply the rollover effect</h2>

<p>If you check the switch next to the section title, it will be possible to select the image to be replaced when you hover the mouse over the inserted image ( <i>rollover</i>).</p>

<p><b>Replace with</b><br>
Use this field to specify the file to swap (identical to the <a href="#localization">Location</a> field)</p>




<h2>Element style</h2>

<p>This group allows you to specify the style for the tag. Here you will find three fields that allow you to specify:</p><p><b>Style definition</b> <br>
In this field you define the style for the element placed in the document. The button next to it launches the <a href="tool_style_editor.php">style editor </a> tool to create a style definition in a user-friendly and convenient way. By clicking there you can also modify an existing style.</p><p><b>Class selection</b><br>
In this field you specify the class identifier assigned to the tag. The drop-down list allows you to access classes defined in the current document and in external style sheets attached to it. The button next to it launches the <a href="tool_style_class.php">tool for creating a new class</a>.</p><p><b>Item ID</b><br>
Here you provide a unique identifier for this element in the document. These identifiers can be used, for example, when making jumps to specific parts of the page or in scripts.</p><p><b>Insert dimensions, borders, etc. as a style</b><br>
If you check this switch, the image dimension, spacing and border parameters will be inserted as CSS style within the STYLE attribute instead of the corresponding HTML attributes.</p><h2>Preview</h2>

<p>On this tab you can see how the image will look in the browser (taking into account transparency, forced resizing, etc.).</p>



<h2>"Events and Attributes" button</h2>

<p>The "Events and Attributes" button allows you to open the <a href="tool_events_attributes.php">Events and Other At</a>tributes window. This window allows you to specify additional attributes of the edited tag that do not have their counterparts in the tool window. There you can also specify events for scripting languages that allow you to achieve various special effects.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="tool_graphic_browser.php">Image viewer</a></li><li><a href="tool_gallery.php">Image Gallery Wizard</a></li><li><a href="tool_graphic_converter.php">Image converter</a></li><li><a href="main_menu_main.php">Program menu</a></li><li><a href="toolbars_general.php">Other tools on toolbars</a></li></ul>
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