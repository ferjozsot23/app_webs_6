<?php
// Va en la cabecera
session_start();



if (isset($_POST["username"]) && isset($_POST["password"])) {
    $_SESSION["s_username"] = $_POST["username"];
    $_SESSION["s_password"] = $_POST["password"];
}

if (!isset($_SESSION["s_username"]) && !isset($_SESSION["s_password"])) {
    header("Location: index.php");
}



?>
<html>

<head></head>

<body>
    <h1><b>PANLEL PRINCIPAL</b></h1>
    <h2>Bienvenido,
        <?php echo $_SESSION["s_username"] ?>
    </h2>


    <a href="otrapagina.php">Ir a otra página de la zona VIP</a> <br>
    <a href="cerrarsesion.php">Cerrar sesión</a><br>




</body>


</html>