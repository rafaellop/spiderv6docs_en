<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<meta name="Author" content="Cream Software">
<meta name="Generator" content="Pajak V6 (6.1.1.0)">

<!-- nazwa strony pomocy -->
<title>Editor - visual editing mode</title>

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

  <table cellspacing="5" cellpadding="5" width="100%" border="0">
  <tr>
    <td>
      <!-- nag&#322;owek g&#322;owny tematu -->
      <h1>Editor - visual editing mode</h1>
      <p>The visual editing mode makes it much easier to work with the site.
        It is especially useful for novice webmasters, who do not
        have not yet enough experience in creating web pages directly in
        HTML language in source <a href="main_editor.php">code editing</a> mode).
        </p><p>To switch the editor from code editing mode to visual mode, use the "Visual Editor" command in the <a href="main_menu_editor.php">code editing editor popup menu</a> (the command icon shown opposite), or the <a href="toolbars_minitoolbar.php">mini toolbar</a> (the thumbnail icon shown next to it)</p>
        <p>Only HTML documents can be edited in visual editing mode.</p>
        <h2>Limitations of visual editing mode</h2>
        <p>Most of the tools for inserting tags work same as in the source <a href="main_editor.php">code editing mode</a>.</p><p>The most important tools and properties that are disabled in the visual mode include:</p>
          <ul>
            <li><a href="main_tabs_inspector_tags.php">Tag Inspector</a></li><li><a href="find_text.php">Find and replace</a></li><li>Editing windows for some tags, such as <tt>the &amp;lt;FRAMESET&amp;gt;</tt>and, etc. tag. If you enable tag editing windows or document structure, such as<tt>&amp;lt;BODY&amp;gt;</tt> or<tt>&amp;lt;META&amp;gt;</tt>, the editor will automatically switch to text mode.</li><li>Highlighting spelling errors and some <a href="spelling.php">spell check</a>tools</li><li><a href="main_editor.php#gutter"> Editor gutter </a> where additional information can be placed</li><li>Split editor window into two parts</li><li><a href="main_preview_dynamic.php">Dynamic preview</a></li><li>Code navigators on <a href="main_tabs_navigator.php"> bookmark
                          Navigator</a> (after using <a href="main_tabs_navigator.php#html_categorized"> navigator
                          categorized HTML</a> Spider will be automatically switched to <a href="main_editor.php">code editing mode</a>)</li><li>Script insertion tools</li><li><a href="tool_docinfo.php">Document information</a></li>
          </ul>
          <h2>Visual mode operation</h2>
          <p>By creating a page in visual mode you can immediately see how it will look like. This makes it easier to arrange page elements in the way they will be displayed later in the browser.</p>
          <p><b>Tag icons</b>
            <br>
            For easier to find
            paragraph formatting tags (<tt>&amp;lt;P&amp;gt;</tt>, <tt>&amp;lt;DIV&amp;gt;</tt>, <tt>&amp;lt;BR&amp;gt;</tt>,<tt>&amp;lt;SPAN&amp;gt;</tt>, as well as for comments), in
            editor window, in the place where the tag is inserted in the code its symbol will be placed.</p><p><b>Create and format a table</b>
              <br>
              Table frames and table cells
              are marked in the editor with gray lines. When you click on a frame
              table, you can change its dimension by dragging it to the desired location.</p><p><b>Insert images</b>
                <br>
                To insert an image into a page, use
                <a href="tool_graphic_insert.php">Image inserting tools</a>.
                You can also double-click the file name of the image in the file list in the <a href="main_tabs_myservices.php">Projects</a>. You can also use the shortcut
                 (<tt>standardShift+Ctrl+I</tt>). </p><h2>Visual editing settings</h2>
                <p>To ensure that code created while working in visual mode can be easily
                   <a href="main_editor.php">editable</a>, it can be formatted using the <a href="formatter_general.php">formatting</a> tools. In the <a href="settings_editor_wysiwyg.php">program's Settings</a> window, you can select the <a href="formatter_markuplangs.php">HTML formatting scheme</a> to be
                  to be applied. In the same window, you can set other options for the
                  visual mode.</p>
                <!-- tre&#347;&#263; pomocy -->
    </td>
  </tr>
  </table>

  <table>
  <tr>
    <td width="100%" class="tbrelatedtopics"><!-- pokrewne tematy -->
      <ul>
        <li><a href="main_editor_general.php">Editor - general</a></li><li><a href="main_editor.php">Editing in source code editing mode</a></li><li><a href="toolbars_minitoolbar.php"> Editor mini bar </a></li><li><a href="main_tabs_general.php"> Other tabs </a></li><li><a href="main_window_desc.php">Main program window</a></li>
      </ul>
    </td>
    <td valign="top" class="srodek"><a href="#top">To top</a></td>
  </tr>
  </table>



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