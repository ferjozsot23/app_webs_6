<html>

<head>

</head>

<body>
    <h1>Actividad de formulario</h1>
    <form>
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" required /> <br>
        <label for="apellido">Apellido</label><br>
        <input type="text" name="apellido" required /> <br>
        <label for="email">Correo</label><br>
        <input type="email" name="email" required /> <br>
        <label for="tel">Teléfono</label><br>
        <input type="text" name="tel" pattern="^[9|8|7|6]\d{8}$" required /> <br>
        <label for="password">Password</label><br>
        <input type="password" name="password" minlength="8" required /> <br>
        <label for="cargo">Cargo</label><br>
        <select name="marca" id="cmbMarca">
            <option value="1">Director</option>
            <option value="2">Operador</option>
            <option value="3">Supervisor</option>
        </select>
        <br><br>
        <input type="submit">

        <input type="submit" value="Enviar" />
    </form>
</body>

</html>