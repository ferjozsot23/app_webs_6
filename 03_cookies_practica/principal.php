<?php
// CREDENCIALES
if (!empty($_POST["recordar"])) {

    setcookie("username", $_POST["username"], time() + (2 * 3600)); // 3600 = 1 hora Experición
    setcookie("password", $_POST["password"], time() + (2 * 3600)); // 3600 = 1 hora Experición

    setcookie("sexo", $_POST["hm"], time() + (2 * 3600));


    setcookie("recordar", $_POST["recordar"], time() + (2 * 3600));

}



$username = $_POST["username"];
$sexo = $_POST["hm"];
?>


<html>

<head></head>

<body>
    <h1><b>PANLEL PRINCIPAL</b></h1>
    <h2>Bienvenido,
        <?php echo $username; ?>
    </h2>
    <h2>Tu sexo es
        <?php echo $sexo ?>
    </h2>


    <a href="borrarcookies.php?borrar=1">Borrar cookies y regresar</a> <br>
    <a href="borrarcookies.php?borrar=0">Solo regresar</a><br>




</body>


</html>