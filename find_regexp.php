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
<title>Search - regular expressions</title>

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
<h1>Search - regular expressions</h1>



<!-- tre&#347;&#263; pomocy -->

<p>The Spider in the <a href="find_ext.php"> extended search and replace </a> tool and in the <a href="find_text.php"> text search </a> tool allows you to use regular expressions ( <i> regular expressions) </i> .</p><p>Regular expressions are special strings of characters that are rules or patterns that allow you to check whether the text you are searching for matches a set pattern. Special metacharacters allow, for example, to specify that the searched string must occur at the beginning or end of a line, contain a certain number of repetitions of selected characters, etc.</p><p>Regular expressions look complicated to beginners, but they are actually usually quite simple, handy and very useful.<!-- <h1>Wyra&#380;enia regularne u&#380;ywane w polu <i>Znajd&#378;</i></h1>

<p>Wyra&#380;e&#324; regularnych mo&#380;esz u&#380;ywa&#263; zar&oacute;wno podczas wyszukiwania fraz w tek&#347;cie (w polu <b>Znajd&#378;</b>), jak i podczas zamiany. </p>
<p>W drugim przypadku mo&#380;liwe jest wstawienie odnalezionych fragment&oacute;w tekstu do umieszczonego w polu <b>Zamie&#324; na</b>. Opis u&#380;ycia znajdziesz <a href="#change">tutaj</a>.</p> -->

</p><h2>Simple match</h2>

<p>Each individual character matches itself until it is a metacharacter with a special meaning, described below.</p><p>A group of characters matches a group of characters in the target string, so for example the text <tt>lubudu</tt> will match the string <tt>lubudu</tt> in the target string.</p><p>You can make characters that normally function as metacharacters or <i> escape sequences </i> interpreted as regular characters by prefixing them with a backslash <tt> \ </tt> . For example, the metacharacter <tt> ^ </tt> matches any string that begins at the beginning of a line. However, <tt> \ ^ </tt> matches the <tt> ^ </tt> character in that string, <tt> \\ </tt> matches the <tt> \ </tt> character, etc.</p><p><b>Examples:</b></p><table>
<tr><td nowrap><tt>lubudu</tt></td><td>matches <tt> lubudu </tt></td></tr>
<tr><td nowrap><tt>\^LuBuDu</tt></td><td>matches <tt>^LuBuDu</tt></td></tr>
</table>

<h2>Escape sequences</h2>

<p>Individual characters can be escaped by using an escape sequence, the syntax of which is similar to that known from, for example, C or Perl. For example, <tt> \n </tt> stands for a newline, <tt> \t </tt> stands for a TAB character, and so on. A more general construct is <tt> \ xnn </tt> , where <tt> nn </tt> is a string of hexadecimal digits that matches a character whose ASCII code matches the value <tt> nn </tt> . For Unicode characters, you can use <tt> \ x {nnnn} </tt> where <tt> nnnn </tt> is one or more hexadecimal digits.</p><p>
</p><table>
<tr><td nowrap><tt>\xnn</tt></td><td>ASCII character <tt>nn</tt></td></tr>
<tr><td valign="top" nowrap><tt>\x{nnnn}</tt></td><td>character with the code <tt>nnnn</tt> (one byte for ASCII text, two bytes for Unicode characters)</td></tr>
<tr><td nowrap><tt>\t</tt></td><td>TAB character (HT / TAB), same as <tt>\x09</tt></td></tr>
<tr><td nowrap><tt>\n</tt></td><td>new line (NL), same as <tt>\x0a</tt></td></tr>
<tr><td nowrap><tt>\r</tt></td><td>ambulance return (CR), same as <tt>\x0d</tt></td></tr>
<tr><td nowrap><tt>\f</tt></td><td>form feed (FF), same as <tt>\x0c</tt></td></tr>
<tr><td nowrap><tt>\a</tt></td><td>alarm (BEL), same as <tt>\x07</tt></td></tr>
<tr><td nowrap><tt>\e</tt></td><td>escape (ESC), same as <tt>\x1b</tt></td></tr>
</table>

<p><b>Examples:</b><br></p><table>
<tr><td valign="top" nowrap><tt>lubudu\x20trach</tt></td><td>matches the string <tt>lubudu trach</tt> (space character between)<br></td></tr>
<tr><td valign="top" nowrap><tt>\tlubudu</tt></td><td>matches the <tt>lubudu</tt> string preceded by the TAB character</td></tr>
</table>

<h2>Character classes</h2>

<p>You can specify a character class by enclosing a list of characters in square brackets <tt>[]</tt> that cause a match to any character in the bracketed list.</p>

<p>If the first character after <tt>[</tt> is a <tt>^</tt> character, the class matches characters that are outside of it. This contradicts the list of characters present in the class.</p>

<p><b>Examples:</b><br></p><table>
<tr valign="top"><td nowrap><tt>lubu[cdf]u</tt></td><td>finds the strings <tt>lubucu</tt>, <tt>lubudu</tt>, <tt>lubufu</tt>, but does not find the strings <tt>lubuau</tt>, <tt>lububu</tt>, <tt>lubueu</tt>, etc.</td></tr>
<tr valign="top"><td nowrap><tt>lubu[^cdf]u</tt></td><td>finds strings of characters e.g. <tt>lubuau</tt>, <tt>lububu</tt>, <tt>lubueu</tt>, etc., but does not find <tt>lubucu</tt>, <tt>lubudu</tt>, <tt>lubufu</tt>.</td></tr>
</table>
<p>In the list, you can use <tt>the -</tt> character to specify a range of characters, e.g. <tt>a-z</tt> represents the range of characters between <tt>a and</tt> <tt>z</tt> including all between.</p><p>If you want to use the <tt>-</tt> character as a member of a class, that is, a search character, place it at the beginning of the list or mark it with a backslash character. If you want to search for the bracket character <tt>]</tt> you can also place it at the beginning of the list or use the backslash character.</p><p><b>Examples:</b><br></p><table>
<tr valign="top"><td nowrap><tt>[-az]</tt></td><td>matches <tt>the characters a</tt>, <tt>z</tt> and <tt>-</tt></td></tr>
<tr valign="top"><td nowrap><tt>[az-]</tt></td><td>matches <tt>the characters a</tt>, <tt>z</tt> and <tt>-</tt></td></tr>
<tr valign="top"><td nowrap><tt>[a\-z]</tt></td><td>matches <tt>the characters a</tt>, <tt>z</tt> and <tt>-</tt></td></tr>
<tr valign="top"><td nowrap><tt>[a-z]</tt></td><td>matches all characters from <tt>a</tt> to <tt>z</tt></td></tr>
<tr valign="top"><td nowrap><tt>[\n-\x0D]</tt></td><td>matches any of the characters with codes <tt>#10</tt>, <tt>#11</tt>, <tt>#12</tt>, <tt>#13</tt></td></tr>
<tr valign="top"><td nowrap><tt>[\d-t]</tt></td><td>matches any digit, character <tt>-</tt> or <tt>t</tt></td></tr>
<tr valign="top"><td nowrap><tt>[]-a]</tt></td><td>matches any character from <tt>]</tt> to <tt>a</tt></td></tr>
</table>

<h2>Metacharacters</h2>

<p>Metacharacters are special characters that are the essence of regular expressions. There are different types of metacharacters, described below.</p>

<h2>Metacharacters - line separators</h2>

<table>
<tr valign="top"><td nowrap><tt>^</tt></td><td>beginning of line</td></tr>
<tr valign="top"><td nowrap><tt>$</tt></td><td>end of line</td></tr>
<tr valign="top"><td nowrap><tt>\A</tt></td><td>beginning of text</td></tr>
<tr valign="top"><td nowrap><tt>\Z</tt></td><td>end of text</td></tr>
<tr valign="top"><td nowrap><tt>.</tt></td><td>any character in a line</td></tr>
</table>

<p><b>Examples</b></p><table>
<tr valign="top"><td nowrap><tt>^lubudu</tt></td><td>matches the string <tt> lubudu </tt> only if it is at the beginning of a line</td></tr>
<tr valign="top"><td nowrap><tt>lubudu$</tt></td><td>matches the <tt> lubudu </tt> character only if it appears at the end of a line</td></tr>
<tr valign="top"><td nowrap><tt>^lubudu$</tt></td><td>matches the <tt> lubudu </tt> character only if it is the only string on the line</td></tr>
<tr valign="top"><td nowrap><tt>lubu.u</tt></td><td>matches the strings <tt>lubuau</tt>, <tt>lububu</tt>, <tt>lubucu</tt> and so on</td></tr>
</table>

<p>The <tt>^</tt> metacharacter implicitly guarantees matching only for the beginning of the input string, and <tt>$</tt> for the end. Internal line spearators will therefore not be matched by the <tt>^</tt> or <tt>$</tt> metacharacters.</p><p>However, you may wish to treat the string as multi-line such that <tt>^</tt> will match after any line separator and <tt>$</tt> will match before any line separator. You can do this with the <tt>/m</tt> switch.</p><p>The metacharacters <tt>\A</tt> and <tt>\Z</tt> work like <tt>^</tt> and <tt>$</tt> except that they will not match to multiline strings when the <tt>/m</tt> switch is used, and <tt>^</tt> and <tt>$</tt> match to each internal row separator.</p><p>The <tt>.</tt> metacharacter matches any character by default, but if you disable the <tt>/s</tt> switch, then the <tt>.</tt> metacharacter will not match internal row separator characters.</p><h2>Metacharacters - predefined classes</h2>

<table>
<tr><td><tt>\w</tt></td><td>alphanumeric character (including <tt>_</tt>)</td></tr>
<tr><td><tt>\W</tt></td><td>non-alphanumeric character</td></tr>
<tr><td><tt>\d</tt></td><td>digit</td></tr>
<tr><td><tt>\D</tt></td><td>not a digit</td></tr>
<tr><td><tt>\s</tt></td><td>any spacing (same as <tt>[ \t\n\r\f]</tt>)</td></tr>
<tr><td><tt>\S</tt></td><td>not spacing</td></tr>
</table>

<p>You can use <tt>\w</tt>, <tt>\d</tt>, and <tt>\s</tt> inside your own character classes.</p>

<p><b>Examples:</b></p><table>
<tr valign="top"><td nowrap><tt>lubu\du</tt></td><td>matches the strings <tt>lubu1u</tt>, <tt>lubu6u</tt> and so on, but does not match the strings <tt>lubudu</tt>, <tt>lubucu</tt>, etc.</td></tr>
<tr valign="top"><td nowrap><tt>lubu[\w\s]u</tt></td><td>matches the strings <tt>lubudu</tt>, <tt>lubu u</tt>, <tt>lubuuu</tt>, but does not match the strings <tt>lubu1u</tt>, <tt>lubu=u</tt>, etc.</td></tr>
</table>

<h2>Metacharacters - iterators</h2>

<p>Each element of a regular expression can be followed by a metacharacter type called an iterator. Using iterators you can specify the number of times a preceding character, metacharacter or subexpression repeats in a string.</p><table>
<tr valign="top"><td><tt>*</tt></td><td>zero or more, similar to <tt>{0,}</tt> (greedy)</td></tr>
<tr valign="top"><td><tt>+</tt></td><td>one or more, similar to <tt>{1,}</tt> (greedy)</td></tr>
<tr valign="top"><td><tt>?</tt></td><td>zero or one, similar to <tt>{0,1}</tt> (greedy)</td></tr>
<tr valign="top"><td><tt>{n}</tt></td><td>exactly <tt>n</tt> times (greedy)</td></tr>
<tr valign="top"><td><tt>{n,}</tt></td><td>at least <tt>n</tt> times (greedy)</td></tr>
<tr valign="top"><td><tt>{n,m}</tt></td><td>at least <tt>n</tt> times, but not more than <tt>m</tt> times (greedy)</td></tr>
<tr valign="top"><td><tt>*?</tt></td><td>zero or more, similar to <tt>{0,}? (not greedy)</tt></td></tr>
<tr valign="top"><td><tt>+?</tt></td><td>one or more, similar to <tt>{1,}? (not greedy)</tt></td></tr>
<tr valign="top"><td><tt>??</tt></td><td>zero or one, similar to <tt>{0.1}? (not greedy)</tt></td></tr>
<tr valign="top"><td><tt>{n}?</tt></td><td>exactly <tt>n</tt> times (not greedy)</td></tr>
<tr valign="top"><td><tt>{n,}?</tt></td><td>at least <tt>n</tt> times (not greedy)</td></tr>
<tr valign="top"><td><tt>{n,m}?</tt></td><td>at least <tt>n</tt> times, but not more than <tt>m</tt> times (not greedy)</td></tr>
</table>

<p>So as you can see, the numbers in the braces of the form {n, m} specify the minimum ( <tt> n </tt> ) and maximum ( <tt> m </tt> ) number of repetitions for a match to occur. You can use the <tt> {n} </tt> form interchangeably instead of <tt> {n, n} </tt> and this allows for an exact match to the number of occurrences indicated. The <tt> {n,} </tt> form, on the other hand, allows for a match of at least <tt> n </tt> times or more. There is no limit to the size of <tt> n </tt> or <tt> m </tt> , but large values can consume more memory and slow down regular expressions.</p><p>If the curly bracket occurs in another context, it is treated as a regular character.</p><p><b>Examples</b></p><table>
<tr><td><tt>lubu.*u</tt></td><td>matches strings such as <tt>lubuau</tt>, <tt>lubuajhkjsd33j8dsu</tt> and <tt>lubuu</tt>, etc.</td></tr>
<tr><td><tt>lubu.+u</tt></td><td>matches strings such as <tt>lubuau</tt>, <tt>lubuajhkjsd33j8dsu</tt>, etc, but not <tt>lubuu</tt></td></tr>
<tr><td><tt>lubu.?u</tt></td><td>Matches strings such as <tt>lubuau</tt>, <tt>lububu</tt>, and <tt>lubuu,</tt> but not <tt>lubualkj9u</tt></td></tr>
<tr><td><tt>lubua{2}u</tt></td><td>matches <tt>lubuaau</tt></td></tr>
<tr><td><tt>lubua{2,}u</tt></td><td>matches strings such as <tt>lubuaau</tt>, <tt>lubuaau</tt>, <tt>lubuaaau</tt>, etc.</td></tr>
<tr><td><tt>lubua{2,3}u</tt></td><td>matches strings such as <tt>lubuaau</tt> or <tt>lubuaaau</tt>, but not <tt>lubuaaaau</tt></td></tr>
</table>

<p>The <tt> greedy </tt> annotation (Polish <i> greedy </i> ) and <tt> not greedy </tt> used in the iterator enumeration should be explained. In short, <tt> greedy </tt> answers as many as possible, and <tt> not greedy </tt> as few as possible. For example, <tt> b + </tt> and <tt> b * </tt> applied to <tt> abbbbc </tt> will return <tt> bbbb </tt> , <tt> b +? </tt> will return <tt> b </tt> and <tt> b *? </tt> will return an empty string. <tt> b {2,3}? </tt> will return <tt> bb </tt> and <tt> b {2,3} </tt> will return <tt> bbb </tt> .</p><p>All iterators can be put into <tt>non-greedy</tt> mode using the <tt>/g</tt> modifier.</p><h2>Metacharacters - Alternatives</h2>

<p>You can specify a group of alternatives to a pattern using <tt> | </tt> to separate groups so that e.g. <tt> Feb | lup | gap </tt> will match any <tt> Feb </tt> , <tt> lup </tt> or <tt> vulnerability </tt> in the target string ( <tt> lu (t | p | k) </tt> will do the same). The first alternative contains everything from the last pattern separator ( <tt> ( </tt> , <tt> [ </tt> or the beginning of the pattern) up to the first character <tt> | </tt> , and the last alternative contains everything from the last character <tt> | </tt> to the next pattern separator, for this reason it is common practice to put alternatives in parentheses to minimize confusion about their beginning and end.</p><p>Alternatives are matched from left to right, so the first alternative found for which the entire expression matches is the one that is selected. This means that alternatives are not usually "greedy". For example, when <tt>foo|foot</tt> is compared with <tt>baerfoot</tt> only <tt>foo</tt> will match due to the fact that it is the first matching alternative that successfully matches the string being compared.</p><p>Also note that <tt>|</tt> in square brackets is interpreted as a normal character, so if you write <tt>[luk|lup|lut]</tt> you are actually looking for the expression <tt>[lukpt|</tt>].</p><p><b>Example:
</b><tt>luk(asz|iem)</tt> matches two strings: <tt>luk</tt> or <tt>luk</tt>.</p><h2>Metacharacters - subexpressions</h2>

<p>The parenthesis construction <tt>( ... )</tt> can also be used to define regular subexpressions. Subexpressions are numbered in order from left to right depending on the opening parentheses. The first subexpression is numbered 1 (the entire result of the regular expression is numbered 0).</p><p><b>Examples:</b></p><table>
<tr><td><tt>(lubudu){8,10}</tt></td><td>matches strings that contain 8, 9, or 10 occurrences of the word <tt>lubudu</tt>.</td></tr>
<tr><td><tt>lubu([0-9]|d+)u</tt></td><td>matches the strings <tt>lubu0u</tt>, <tt>lubu1u</tt>, <tt>lubudu</tt>, <tt>lubuddu</tt>, etc.</td></tr>
</table>

<h2>Metacharacters - backward references</h2>

<p><tt>Metacharacters \1</tt> through <tt>\9</tt> are interpreted as backward references. <tt>\<n></n></tt> matches the previous matched subbalance <tt>#<n></n></tt>.</p>

<p><b>Examples:</b></p><table>
<tr><td><tt>(.)\1+</tt></td><td>matches <tt>aaaa</tt> and <tt>cc</tt>.</td></tr>
<tr><td><tt>(.+)\1+</tt></td><td>also matches <tt>abab</tt> and <tt>123123</tt></td></tr>
<tr><td nowrap><tt>'(["]?)(\d+)\1</tt></td><td>matches <tt>"13"</tt> (in quotation marks) or <tt>'4'</tt> (in apostrophes) or <tt>77</tt> (without quotation marks or apostrophe), etc.</td></tr>
</table>

<h2>Modifiers</h2>

<p>Modifiers allow you to change the behavior of the regular expression search function.</p>

<p>There are many ways to set modifiers. Each of the modifiers can be included in a regular expression using the <tt>(?...)</tt> construct.</p>.<table>
<tr><td valign="top"><tt>i</tt></td><td>Performs a case-insensitive pattern search.</td></tr>
<tr><td valign="top"><tt>m</tt></td><td>Treats the string as multi-line, i.e., changes the operation of <tt>^</tt> and <tt>$</tt> from always matching the beginning or end of the string to always matching the beginning or end of any line anywhere within the string.</td></tr>
<tr><td valign="top"><tt>s</tt></td><td>Treats the string as a single line i.e. changes the action of <tt>.</tt> to match any characters, even line separators, that would not normally be qualified as matching the pattern.</td></tr>
<tr><td valign="top"><tt>g</tt></td><td>Not a standard modifier. Disabling this modifier causes all subsequent operators to start operating in <tt>non-greedy</tt> mode. So if the <tt>/g</tt> modifier is disabled, then <tt>+</tt> works like <tt>+?</tt>, <tt>*</tt> like <tt>*?</tt> and so on.</td></tr>
<tr><td valign="top"><tt>x</tt></td><td>It augments the pattern by allowing blanks and comments (explained below).</td></tr>
</table>

<p>The <tt> / x </tt> modifier needs some explanation. It tells the program to ignore blanks that are backslash or inside the class. You can use this modifier to break regular expressions into more readable parts. The <tt> # </tt> character is also treated as a metacharacter to denote a comment, e.g .:</p><i>
<tt>( <br>
(abc) # comment 1<br>
 | # You can use spaces to comment regexp<br>
(efg) # comment 2<br>
)
</tt>
</i><p>This means that if you want to include spaces and the # character in a pattern (except in the character class, where the <tt>/x</tt> modifier does not apply to them), you must either use a backslash character to denote them or encode them with hexadecimal or octal character code values. In summary, these properties allow you to make the regular expression more readable.</p>

<h2>Extensions from Perl</h2>

<p><tt>(?imsxr-imsxr)</tt></p><p>You can use them inside regular expressions on the fly. If such a construct is included in a subexpression, it affects only that subexpression.</p><p><b>Examples:</b></p><table>
<tr><td><tt>(?i)New-year</tt></td><td>matches the <tt>New-year</tt> and <tt>New-Year</tt> sequences</td></tr>
<tr><td><tt>(?i)New-(?-i)Year</tt></td><td>matches the <tt>New-Year</tt> sequence, but does not match the <tt>New-year</tt> sequence</td></tr>
<tr><td><tt>(?i)(New-)?Year</tt></td><td>matches the <tt>New-year</tt> and <tt>new-year</tt> sequence</td></tr>
<tr><td><tt>((?i)New-)?Year</tt></td><td>matches the <tt>new-Year</tt> sequence, but does not match the <tt>new-year</tt> string</td></tr>
</table>

<p><tt>(?#text)</tt></p><p>A comment whose text is ignored. Note that the program closes the comment as soon as it encounters the metacharacter <tt>)</tt>, so there is no way to include the character <tt>)</tt> in the comment.</p><a name="change"></a><h1>Using "Replace with" in regular expression search results</h1>

<p>You will want to use the phrases you find frequently in the <b> Replace with </b> field. In this case, in the text that will be inserted in place of the phrase, the appropriate symbol should be placed, e.g. <tt> <b> $ 1 </b> </tt> , <tt> <b> $ 2 </b> </tt> , <tt> <b> $ 0 </b> </tt> (where <tt> $ 1 </tt> is the first fragment matched with the expression, <tt> $ 2 </tt> the second, and so on, and <tt> $ 0 </tt> matches the entire matching phrase - all fragments)</p>

<p><b> Examples: </b>

 Let us assume that the content of many documents includes, among others text:</p><pre>&amp;lt;a href="gallery_first.php"&amp;gt;First gallery&amp;lt;/a&amp;gt;
&amp;lt;a href="gallery_second.php"&amp;gt;Second gallery&amp;lt;/a&amp;gt;
&amp;lt;a href="gallery_third.php"&amp;gt;Third gallery&amp;lt;/a&amp;gt;
&amp;lt;a href="https://guestbook.com/index.php"&amp;gt;Guest book&amp;lt;/a&amp;gt;</pre>
<p>However, you have decided to rewrite the whole site to use PHP and all the links should be fixed. At first glance, the easiest way would be to simply change the <tt>.html</tt> string to <tt>.php</tt> everywhere. However this is not a good idea, because the extension in the guestbook links will also be changed. Therefore, you should use the regular expression capabilities in the <a href="find_ext.php">Extended Search and Replace</a> tool.</p>
<p><b>In the<b>'Find</b>' field, enter:</b></p>
<pre>gallery_([a-z0-9]+){1}.html</pre>
<p>All strings containing ' <tt> gallery_ </tt> ' will be found, followed by a string of lowercase letters or numbers (the entire substring will be treated as one occurrence because it is enclosed in parentheses followed by <tt> {1} </tt> ) and finally the <tt> .html </tt> extension</p>

<p><b>In the<b>'Replace with</b>' field, enter:</b></p>
<pre>gallery_$1.php</pre>
<p>The above entry means that the searched phrase will be changed to ' <tt> gallery_ </tt> ', further searched for lowercase letters or numbers (respectively ' <tt> first </tt> ', ' <tt> second </tt> ',' <tt> third </tt> ') and the extension' <tt> .php </tt> '. The guest book reference will of course remain unchanged.</p>

<p>The result will be the following content:</p>
<pre>&amp;lt;a href="gallery_first.php"&amp;gt;First gallery&amp;lt;/a&amp;gt;
&amp;lt;a href="gallery_second.php"&amp;gt;Second gallery&amp;lt;/a&amp;gt;
&amp;lt;a href="gallery_third.php"&amp;gt;Third gallery&amp;lt;/a&amp;gt;
&amp;lt;a href="https://guestbook.com/index.php"&amp;gt;Guest book&amp;lt;/a&amp;gt;</pre>

</td>
</tr>
</table>

<table>
<tr>
<td width="100%" class="tbrelatedtopics">
<!-- pokrewne tematy -->
<h4>Related topics</h4>
<ul>
  <li><a href="find.php">Search in Spider</a></li><li><a href="find_text.php">Search, replace</a></li><li><a href="find_ext.php">Extended search and replace</a></li></ul>
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