<?php
    include("connect.php");
    $usuario = $_GET["usuario"];
    $password = $_GET["password"];
    $check = False;

    if(filter_var($usuario, FILTER_VALIDATE_EMAIL)){
        $consulta = mysqli_query($conexion, "SELECT * FROM registrados WHERE email='$usuario' AND contrasenia='$password'") or die ("Problemas al buscar");
        if(mysqli_num_rows($consulta)>0){
            $check = True;
        }
    } else {
        $consulta = mysqli_query($conexion, "SELECT * FROM registrados WHERE nombreUsuario='$usuario' AND contrasenia='$password'") or die ("Problemas al buscar");
        if(mysqli_num_rows($consulta)>0){
            $check = True;
        }
    }

    if($check){
        echo '<script language="javascript">
        window.location.href="../Bienvenido.html"
        </script>';
        echo "<script language='javascript'>
        console.log($consulta)
        </script>";
    } else {
        echo '<script language="javascript">
        alert("El usuario o la contraseña no son correctos, verificalo");
        window.location.href="../index.php"
        </script>';
    }

    mysqli_close($conexion);
?>