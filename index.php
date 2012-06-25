<html>
<head>
<TITLE>admalledd's minecraft server</TITLE>
<link rel="stylesheet" type="text/css" href="main.css" />

</head>

<body>

<p> Online players:<pre class="onlinelist">
<?php
$ops =    file_get_contents("/home/admalledd/minecraft/cur/ops.txt","r");
echo $ops;
require __DIR__ . '/rcon' . '/MinecraftQuery.class.php';

$Query = new MinecraftQuery( );
try
{
    $Query->Connect( 'localhost', 27015, 1 );
    print_r( $Query->GetInfo( ) );
    print_r( $Query->GetPlayers( ) );
}
catch( MinecraftQueryException $e )
{
    echo $e->getMessage( );
}

//$players =file_get_contents("/home/admalledd/minecraft/cur/ops.txt","r");




?>
</pre>
</p>
<h4>Plugins</h4>
<a href="">This is a link to nowhere</a>
</body>
</html>
