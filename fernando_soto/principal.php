<?php


echo $_COOKIE['lang'];


// CREDENCIALES
if (!empty($_POST["recordar"])) {
    // Si el checkbox NO está vacío, es decir, está marcado, creamos la cookie
    setcookie("username", $_POST["username"], time() + (2 * 3600)); // 3600 = 1 hora Experición
    setcookie("password", $_POST["password"], time() + (2 * 3600)); // 3600 = 1 hora Experición
} else {
    // Si el checkbox está vacío, es decir, no está marcado, borramos la cookie
    setcookie("username", "");
    setcookie("password", "");
}

$nombreUsuario = $_POST["username"];



if (
    isset($_COOKIE['lang']) && $_COOKIE['lang'] !=
    ''
) {
    header("Location: {$_COOKIE['lang']}");
}






?>


<html>

<head>

<body>
    <h1><b>PANLEL PRINCIPAL</b></h1>
    <h2>Bienvenido,
        <?php echo $nombreUsuario ?>!
    </h2>

    <a href="es/productos.php">ES (Español)</a>
    <a href="en/products.php">EN (English)</a><br />

    <a href="index.php">Cerrar Sesión</a></br>










</body>

</head>


</html>