<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous">

<link rel="stylesheet" href="style.css" type="text/css">
</head>

<!-- nazwa strony pomocy -->
<title>"Templates" tab</title>

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
<h1>"Templates" tab</h1>

<!-- tre&#347;&#263; pomocy -->

<p>The Templates tab is for <a href="macrocodes.php"> templates </a> , which greatly simplifies and speeds up the process of creating documents in Spider. You can also create and use templates using this tab</p><p>You can enable the Templates tab using the panel on the left, as well as from the menu under the button shown above or from the <a href="main_menu_main.php"> Main menu </a> / <a href="main_menu_view.php"> View </a> .</p><h2>Contents - Menu and templates tree</h2>

<p>Templates are grouped into categories in the form of a tree. The toolbar in the upper part of the tab is used to perform operations on the tree:</p>

<p><b>Addition of template categories</b><br>
Click to add a new category (folder in the tree) of templates.</p>

<p><b>Adding a new template</b><br>
Click to create a new template in the currently selected category. Use the Template <a href="macrocodes_editor.php" title="Pomoc do Edytora szablonów">Editor</a> to create and make changes to templates.</p>

<p><b>Delete the selected template or category.</b> <br>
Click if you want to delete a template or category. After clicking, you will be asked for confirmation. If a template or category has been deleted accidentally, it is possible to restore it from the Windows "recycle bin".</p>

<p><b>Modification of the selected template or category name</b><br>
If a template is selected, a click will open the 'Template Editor' window.<br>
If a category is selected, a click will open the category name modification window.</p>

<p><b>Inserting a template</b><br>
Click to use a template. When you click on the arrow next to the button, four options will be available:</p>

<ul>
	<li><p><b>Insert template at cursor position</b><br>
			Click if you want to insert the template at the cursor position in the editor.</p>
			<p>If some text has been selected in the editor, it can be replaced with the middle part of the template (if it was defined in the template)</p>
			</li>
	<li><p><b>Insert template without centre</b><br>
			Click if you want to insert the template where the cursor was placed in the Create tab.</p>
			<p>The middle part of the template will not be used. If any text has been selected in the editor window, it will remain intact. The left and right parts of the template will span the selected text.</p>
			<p>This option is most often used to mark the selected text with a tag along with the attributes prepared in a template.</p>
			</li>
	<li><p><b>Insert the template with the left part into HEAD</b><br>
		Click if you want to insert a template, the left part of which will be placed in the HEAD section of the HTML document. If the current document does not have a HEAD section, one will be created.</p>
		<p>If any text has been selected in the editor window, it will remain intact. The middle and right parts of the template will span the selected text.</p>
			</li>
	<li><p><b>Create a new document</b><br>
			Click if you want to create a new document from a template. A pop-up will appear asking for the name of the destination file and where it should be saved. The name of the new document will be suggested based on the name of the template from which the document is to be created.</p>
			<p>If there are links to pictures and other documents in the template, they will be copied to the indicated place.</p>
			<p>The new document will automatically open for editing in the editor window.</p>
			<p>Unless otherwise defined in the <a href="settings_macrocodes.php">Program Settings</a>, this is the default option for templates of type 'Document Template'.</p>
			</li>
</ul>

<p><a name="default_template"></a><b>Setting the template as the default template</b><br>
Allows you to set the indicated template as the default template for a new document. This template can be called up using a keyboard shortcut (standard Ctrl+Shift+N), or from the <a href="main_menu_file.php">File</a> / <a href="main_menu_file_new.php">New Document</a> menu.</p>



<p><b>Importing macro tags from Spider 2000</b><br>
Click if you want to import macro tags the old Spider 2000 (if it was installed on your system).</p>

<p><b>Enabling or disabling automatic preview of templates</b><br>
Click if you want to enable or disable the template preview window.</p>

<p><b>Open the templates folder in Windows Explorer</b><br>
Click if you want to display the contents of the templates folder in the Windows Explorer window.</p>

<p><b>Help for the Templates tab</b><br>
Displays this Help topic.</p>

<p>You can move templates between categories by dragging. To copy a template to another category without removing it from the original category, hold down the CTRL key while dragging.</p>


<h2>Templates preview</h2>

<p>The preview window is used to familiarize yourself with the content of the template. You can follow the changes that occur as a result of editing variables and turning blocks on / off.</p>

<p>There are two preview windows:</p><ul>
	<li><p><b>Small preview window</b> - at the bottom of the Templates tab. <br>
	A small preview is enabled using the icon in the toolbar at the top of the Templates tab.</p></li>
	<li><p><b>Large preview window</b> - in the Browse window. <br>
	A large preview can be enabled if a small preview pane is not enough.</p></li>
	<p>To enable / disable large preview, you must first turn on small preview (see above). There is a " <b> Enlarge Preview </b> " (small magnifying glass) icon on the small preview pane. After turning on large preview, small preview may be turned off.</p>
</ul>

<p> <b>Choice of browser used</b><br>
Click to select the browser used for browsing on this tab. As long as it is installed on your system<a href="main_preview_embed.php">(read more about this</a>), you can use the browser:</p><ul>
	<li>MS Internet Explorer</li>
	<li>Mozilla</li>
</ul>

<p><b>Display template source</b><br>
Click to see in the template preview the code it will generate, rather than the result as displayed by the document viewer. This option is available when the <b>small preview</b> is enabled (see above).</p>

<p>Below the preview pane there is a status bar with the name of the template and its type.</p>

<h2>Variables and Blocks</h2><a name="variables"></a><p><b>Variables</b><br>
Variables in templates are used to set the parameters that will be used when using the template.</p>
<p>If any variables are defined in the template, a button appears at the bottom of the Templates tab to display the variable inspector. Here you can change the default values to your own. Return to the list of templates after clicking on the "Templates" button (on the left). The changes made do not affect the template content and are valid until you switch to another template.</p><a name="blocks"></a><p><b>Blocks</b><br>
Blocks in a template are separate sections of the template that may (but do not have to) be inserted. They allow maximum customisation of the generated code. They are used especially in complex templates, such as document templates etc.</p>

<p>If any blocks are defined in the template, a button appears at the bottom of the Templates tab to display the Block inspector. You can turn blocks on and off, which results in their inclusion (or not) in the generated code. Return to the list of templates after clicking on the "Templates" button (on the left). The changes made do not affect the template content and are valid until you switch to another template.</p>

<h2>Using keyboard shortcuts</h2><b>Default template hotkey</b> <br>
 It is possible to select one default template as the template for a new document. To do this, select the selected template in the tree, and then click the <a href="#default_template">Set the template as the default template</a> button.<p>This template can be called with a keyboard shortcut (by default Ctrl + Shift + N).</p>

<p><b>Use of keyboard shortcuts for other templates</b><br>
You can assign keyboard shortcuts to the most frequently used templates. Due to the large number of templates and the limited number of possible shortcut combinations, a two-step combination has been introduced:</p>

<ul>
	<li><tt> Ctrl + J </tt> followed by the template shortcut</li>
</ul>

<p>After pressing <tt> Ctrl + J </tt> , for the period defined in <a href="settings_macrocodes.php"> Template Settings </a> , in the Templates tab (default 3 seconds), Spider deactivates all the program's hotkeys and enables template hotkeys. After the set time has elapsed or you clicked in the editor, the shortcuts assigned to the templates are deactivated and the general shortcuts work again in the program.</p>

<p>The shortcut assigned to a given template can be seen in the template description field (under the small preview window) at the bottom of the Templates tab.</p>


<p><b>Assigning keyboard shortcuts to templates</b><br>
To assign a keyboard shortcut to a template, use the Template <a href="macrocodes_editor.php">Editor</a>. To do this, select the template you wish to edit in the tree and click on the "Modify selected template or category" button (in the menu above the template tree), or press <tt>F2</tt>.</p>


</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
	<li><a href="macrocodes.php">Templates - in general</a></li><li><a href="settings_macrocodes.php">Template settings</a></li><li><a href="macrocodes_editor.php">Template editor</a></li><li><a href="macrocodes_instruction.php">Creating a template - step-by-step instructions</a></li><li><a href="main_tabs_general.php">Other tabs</a></li><li><a href="main_window_desc.php">Main window</a></li></ul>
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