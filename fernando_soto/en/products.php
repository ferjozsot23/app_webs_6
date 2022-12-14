<?php

$nombreUsuario = $_POST["username"];
echo $_COOKIE['lang'];

if (
    !isset($_COOKIE['lang']) ||
    $_COOKIE['lang'] != $_SERVER['PHP_SELF']
) {
    setcookie(
        'lang', $_SERVER['PHP_SELF'],
        time() + 24 * 3600
    );
}

?>





<html>

<head>

<body>
    <h1><b>PANLEL PRINCIPAL</b></h1>
    <h2>Bienvenido,
        <?php echo $nombreUsuario ?>!
    </h2>

    <a href="../es/productos.php" <?php if (        !isset($_COOKIE['lang']) ||        $_COOKIE['lang'] !=$_SERVER['PHP_SELF']
    ) {
        setcookie(            'lang', $_SERVER['PHP_SELF'],     time() + 24 * 3600     );
    }


    ?>ES (Español)</a>
    <a href="products.php">EN (English)</a><br />

    <a href="../index.php">Cerrar Sesión</a></br>
    <a href="../principal.php">Ir a principal</a></br>



    <object data="./categorias_en.txt" type="text/plain" width="500" style="height: 300px">

    </object>




</body>

</head>


</html>