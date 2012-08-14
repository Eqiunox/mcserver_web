<html>
<head>
<TITLE>admalledd's minecraft server</TITLE>
<link rel="stylesheet" type="text/css" href="main.css" />

</head>
<body>
<?php include("navbar.php");?>
<h2>Recent news</h2>
<p>Please Do not update to 1.3 until you see the server respoding with "Admalledd's server v1.3" meaning that the server is
up to date. If you update to 1.3 before this you will be unable to play as the server software (craftbukkit) takes time to
update after a minecraft release.</p>
<p>Email admalledd at admalledd+mc@gmail.com if you have any questions or comments concerning the server.</p>

<h2>Server rules</h2>
<ul>
<li>No Griefing! Griefing includes stealing objects</li>
<li>No Spamming eggs! An excess of chickens could crash the server!</li>
</ul>


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
<h2>Plugins</h2>
<h3><a href="plugins/index.php">plugin index and help page</a></h3>

<?php include("plindex.php"); /*plugin index table*/?>


<h2>Projects</h2>

<p>There will be links to projects here coming soon, email admalledd+mcweb@gmail.com if you want to add a project.</p>

<h2>Helpful links</h2>

<h3>Enchanting-
  <a href="http://www.minecraftwiki.net/wiki/Enchanting">Wiki</a>
  <a href="http://pernsteiner.org/minecraft/enchant/">Tables</a>
</h3> 

<h3><a href="http://www.minecraftforum.net/topic/345806-nether-portal-science/">Nether Portals</a></h3>

<h3><a href="http://www.minecraftwiki.net/wiki/Classic_server_protocol#Color_Codes">Chat Codes</a></h3>

<h3><a href="http://wiki.sk89q.com/wiki/WorldEdit/Reference">World edit reference</a></h3>

<h3><a href="http://redd.it/vcjzf">Villager Spawning</a></h3>

<p>Donate now and you could get an array of rewards that will make everyone jealous and many more. Just email admalledd at admalledd+mc@gmail.com if you have any questions or press the button below and donate now.</p>

<?php include("/var/www/donate.htm");?>

<p>Webpage coded by Eqiunox, Charyoshi, Admalledd. &#169; Admalledd 2012 </p>
</body>
</html>
