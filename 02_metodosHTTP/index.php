<?php
?>


<html>
    <head></head>
    <body >

        <h1>Peticion por GET</h1>
        <form method = "GET"  action = "recepcionget.php">
            <fieldset>
                Nombre: <input type = "text" name="nombre"/><br/>
                Cedula: <input type = "text" name="cedula"/><br/>
                <input type = "submit" value="Enviar"/>
            </fieldset>
        </form>
        
        <h1>Peticion por POST</h1>
        <form method = "POST"  action = "recepcionpost.php">
            <fieldset>
                Nombre: <input type = "text" name="nombre"/><br/>
                Cedula: <input type = "text" name="cedula"/><br/>
                <input type = "submit" value="Enviar"/>
            </fieldset>
        </form>
    </body>


</html>