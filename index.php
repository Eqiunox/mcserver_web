<html>
<head>
<TITLE>admalledd's minecraft server</TITLE>
<link rel="stylesheet" type="text/css" href="main.css" />

</head>

<body>

<p> Moderators/Admins:
<pre class="modlist">
<?php
//first, get mods/admins
$ops =    file_get_contents("/home/admalledd/minecraft/cur/ops.txt","r");
echo $ops;

//now we get players, using the rcon package
require __DIR__ . '/rcon' . '/MinecraftQuery.class.php';

$Query = new MinecraftQuery( );
try
{
    $Query->Connect( 'localhost', 25565, 1 );
    //if we can connect to the server: get the playerlist
    $players = $Query->GetPlayers( );
}
catch( MinecraftQueryException $e )
{
    echo $e->getMessage( );
    //seems we failed to connect to the mc server, echo the error and a human explination
    $players = "could not connect to server for data, try again later";
}

?>


</pre>
</p>
<p> Online players:<pre class="onlinelist">
<?php print_r( $players );/*print players here and now, I know i could have done it sooner, but meh*/ ?>
</pre>
</p>
<h4>Plugins</h4>
<a href="">This is a link to nowhere</a>
</body>
</html>
