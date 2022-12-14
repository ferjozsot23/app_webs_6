<?php

echo "Con GET <br/>";
var_dump($_GET);
echo "Con POST <br/>";
var_dump($_POST);
$nombre = $_POST["nombre"];
echo $nombre;

$cedula = $_POST["cedula"];
$cod_provincia = substr($cedula, -2);
$provincia = "";

if ($cod_provincia = 17){
    $provincia = "Pichincha";
}
/*if else ($cod_provincia = 09){
    $provincia = "Guayas";
} */
else
$provincia ="Guayas";

?>



<html>
    <head>
        <body>
            <h1>Hola, <?php echo $nombre . " de " . $provincia ?>!</h1>
        </body>

    </head>


</html>