<?php
    include("connect.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <form action="registroUsuarios.php" method="GET" id="formulario">
        <input type="text" placeholder="Nombre Completo" name="nombreCompleto" id="nombre">
        <input type="email" placeholder="EMAIL" name="email" id="email">
        <input type="text" placeholder="Nombre de Usuario" name="nombreUsuario" id="nomUsuario">
        <input type="password" placeholder="Contraseña" name="password" id="password">
        <button type="submit">Registarse</button>
    </form>
    <script src="../js/validarRegistro.js"></script>
</body>
</html>