<?php

?>


<html>

<head></head>

<body>
    <h1>LOGIN - EJEMPLO COOKIE</h1>
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

            <h3>Seleccione su sexo</h3>


            <input type="radio" name="hm" value="Hombre" 

            <?php echo isset($_COOKIE["sexo"])?"checked":""   

            ?>> Hombre <br />





            <input type="radio" name="hm" value="Mujer"
            
            <?php echo isset($_COOKIE["sexo"])?"checked":""

            ?>> Mujer <br /> <br>






            <input type="checkbox" name="recordar" value="recordar" 
            
            <?php echo isset($_COOKIE["recordar"]) ? "checked" : ""
            
            
            ?>> Recordar mis preferencias <br />

            <input type="submit" value="Enviar" />
        </fieldset>
    </form>
</body>


</html>