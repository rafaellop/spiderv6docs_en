<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Spider V6 (6.0.1.1)">

<!-- nazwa strony pomocy -->
<title>Tools - Text Attributes</title>

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
<h1>Tools - Text Attributes</h1>

<p>The <b>Text Attributes</b> tool allows you to specify the properties of the font used for the selected text fragment. In the list of font typeface selections, simply select the desired font and add it to the list with the button marked with a plus. You can specify several font typefaces that are used depending on whether they are installed on the computer where the page is viewed. You will launch this tool from the <a href="main_menu_main.php">Main Menu</a> / <a href="main_menu_tools_text.php">Text</a> / Text Formatting, as well as from the Text <a href="toolbars_link_format.php">References and Formatting</a> toolbar.</p><h1>Basic formatting tab</h1>

<p>The first tab contains controls that allow you to select basic formatting such as colors, size, typeface and style for the text. There you will find the appropriate elements in three groups: Simple design, Font style, Element style.</p><h2>Simple Appearance Group</h2>

<p>In this group you can specify the size and color of the font:</p><p><b>Font size</b><br>
In this field you can choose how to specify the font size. It can be exactly the size you specify in the next field, or it can be increased or decreased by the indicated number from the current size. Selecting "disregard" does not affect the font size.</p><p><b>Font size</b><br>
Specifies the font size, determined according to the rule in the box on the left.</p><p><b>Text color</b><br>
Select a color for the text using the list.</p><h2>Typeface group</h2>

<p>This group allows you to specify the typeface or typefaces that will be used. You will find the following fields here:</p><p><b>List of system fonts</b><br>
Select the font you want to add to the list of fonts available for text here, and then press the button marked with a "+" icon.</p><p><b>List of assigned fonts</b><br>
This is a list of fonts set in order of priority. If any of these fonts is not available in the user's browser, the next in order will be used. You can add and remove fonts using the buttons next to the list.</p><h2>Element Style group</h2>

<p>Formatting and text attribute markup can be inserted into a document in several ways. In this group you specify what method it will be. You can choose:</p><ul>
        <li><b>As</b> a <b> <tt>font</tt></b> tag - this way is marked in the HTML specification as not recommended. You should rather use <tt>span</tt> or <tt>div</tt></li><br><br><li><b>As</b> a <b> <tt>basefont</tt></b> tag - this way is absolutely not recommended because it basically works only in MS Internet Explorer. It sets selected attributes for all fonts used in the document. Here it is definitely better to use <a href="coding_css.php">a style sheet</a>.</li><br><br><li><b>As</b> a <b> <tt>span</tt></b> tag - this method places the definition of text formatting in the document using the <tt>span</tt> tag and the text formatting property stored in its <tt>style</tt> attribute. Use this method if you want to highlight a word in the text, as it does not start a new paragraph. An example use of this method will place text in the document: <tt>&amp;lt;span style="font-size: xx-small; color: #FFFF00"&amp;gt;&amp;lt;/span&amp;gt;.</tt></li><br><br><li><b>As</b> a <b> <tt>div</tt></b> tag - this way works similarly to the above however, it creates a new style block, that is, usually a new paragraph. </li>
</ul>

<h1>Additional tab</h1>

<p>The formatting described above, however, is not all. There are 30 switches on the Additional tab, which allow you to introduce various styles and additional effects, sometimes very interesting and sometimes even necessary, such as bold or italic text. When using this tool, the user doesn't need to know all the text formatting tags by heart - Spider will do everything for him. Simply select the appropriate switches according to the formatting you want to achieve.</p><h1>Tips</h1>

<p>When creating pages using fonts, keep in mind that not all systems have the same fonts installed as on the computer used to create the page. So you need to use the lists used to select fonts in moderation.</p><p>Checking the "Base Font" box inserts the basefont tag into the document. It is used to specify the base font parameters in the document, used where other formatting tags have not been used. However, its use is not recommended by the latest HTML specification - again, it is more advisable to use styles.</p></td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
        <li><a href="main_menu_tools_text.php">Text formatting menu</a></li><li><a href="coding_css.php">Using styles in Spider</a></li><li><a href="toolbars_general.php">Tools on toolbars</a></li></ul>
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