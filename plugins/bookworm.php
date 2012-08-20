<?php
include("_plugin_index.php"); 
_plugin_index_header("bookworm");
?>

<h1>Bookworm</h1> 
<p>Bookworm takes writing in books to a new level. This plugin allows you to place books in bookshelves for storage by left-clicking the bookshelf with the book in hand. Then make a copy of the book by right-clicking the bookshelf.</p>
<p>Here are the commands for Bookworm:</p>
<ul>
<li> /write -help : shows this list of commands </li>
<li>/write -chat : toggle chat write mode</li>
<li>/write -read <page> : read the specified page </li>
<li>/write -author <author> : sets the displayed author (this is just the displayed author, the real author will stay the same)</li>
<li> /write -title <new title> : change a book's title </li>
<li>/write -undo : Undo your last write action. Only has one level of undo. Things that can be undone: written text, replacements, erasings. </li>
<li> /write -erase <text> : erases the specified text from the book </li>
<li>/write -replace <old text>  <new text> : replaces text </li>
<li>/write -eraseall : erases all text from the book </li>
<li>/write -get <id> : gets the book with the given id </li>
<li>/write -id : gets the id of the currently held book </li>
<li>/write -delete <id> : completely deletes the book with the specified id </li>
</ul>

<h2><a href="http://dev.bukkit.org/server-mods/bookworm/">Bookworm on Bukkit</a></h2>
</center>
</body>
</html>