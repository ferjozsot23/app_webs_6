<?php

var_dump($_GET);
$nombre = $_GET["nombre"];
echo $nombre;


?>



<html>
    <head>
        <body>
            <h1>Hola, <?php echo $nombre?>!</h1>
        </body>

    </head>


</html>