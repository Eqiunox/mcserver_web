<?php 
/*  this is a base file for all the plugin help. each plugin page includes this and calls the 
    _plugin_index_header("plugin name (page title)"); for everything up to the <body> tag,
    now the page is 

*/


function _plugin_index_header($plname)
{
    //set up the page all the way to the part where the plugin talks about itself (help link, comments ect)
    
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>$plname</title>";
    echo "<link rel='stylesheet' type='text/css' href='/mc/main.css' />";
    echo "</head>";
    echo "<body>";
    echo "<center>";
    echo "<h1>Welcome!</h1>";
    echo "<div id='navbar'>";
    echo "<div id='nav1'>";
    echo "<h2><a href='/index.php'>Home</a></h2>";
    echo "</div>";
    echo "<div id='nav3'>";
    echo "<h2><a href='/mc/plugins/'>Help</a></h2>";
    echo "</div>";
    echo "</div>";

}


?>