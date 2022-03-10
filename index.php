<?php
    include("php/connect.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="php/login.php" method="GET" id="formulario">
        <input type="text" placeholder="Nombre de Usuario o Correo electrónico" name="usuario" id="usuario">
        <input type="password" placeholder="Contraseña" name="password" id="password">
        <button type="submit">Iniciar Sesion</button>
        <a href="php/registro.php">Registrarse</a>
    </form>
    <script src="js/validarIndex.js"></script>
</body>
</html>