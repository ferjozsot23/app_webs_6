<?php
if (isset($_GET)) {
    if ($_GET["borrar"] == 1) {
        setcookie("username", "");
        setcookie("password", "");
        setcookie("sexo", "");
        setcookie("recordar", "");

    }
}
header("Location: index.php")
    ?>