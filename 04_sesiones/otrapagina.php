<?php
session_start();


if (!isset($_SESSION["s_username"]) && !isset($_SESSION["s_password"])) {
    header("Location: index.php");
}

?>
<html>

<head></head>

<body>
    <h1><b>ZONA VIP</b></h1>
    <h2>Bienvenido,
        <?php echo $_SESSION["s_username"] ?>
    </h2>


    <a href="mipanel.php">Regrese al panel</a> <br>
    <a href="cerrarsesion.php">Cerrar sesión</a><br>




</body>


</html>