<?php

?>


<html>

<head></head>

<body>
    <h1>LOGIN</h1>
    <form method="POST" action="principal.php">
        <fieldset>
            Usuario: <input type="text" name="username" value="<?php

            if (isset($_COOKIE["username"])) {
                echo $_COOKIE["username"]; // Toma de la cookie el valor del username y lo escribe en el espacio
            }

            ?>" /><br />
            Clave: <input type="password" name="password" minlength="8" value="<?php

            if (isset($_COOKIE["password"])) {
                echo $_COOKIE["password"]; // Toma de la cookie el valor de la clave y lo escribe en el espacio
            }

            ?>" /><br />

            <input type="checkbox" name="recordar" /> Recordarme <br />

            <input type="submit" value="Enviar" />
        </fieldset>
    </form>
</body>


</html>