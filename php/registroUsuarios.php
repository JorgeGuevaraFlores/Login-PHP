 <?php
    include("connect.php");
    $nombreCompleto = $_GET['nombreCompleto'];
    $email = $_GET['email'];
    $nombreUsuario = $_GET['nombreUsuario'];
    $password = $_GET['password'];

    $insert = mysqli_query($conexion, "INSERT INTO registrados (nombreUsuario,nombreCompleto,email,contrasenia) VALUES ('$nombreUsuario', '$nombreCompleto', '$email', '$password')");

    if($insert){
        echo '<script language="javascript">alert("Te has dado de alta correctamente");
        window.location.href="../index.php";
        </script>';
    } else {
        echo '<script language="javascript">alert("Hubo un error, el nombre de usuario ya está registrado.");
        window.location.href="registro.php";
        </script>';
    }
    mysqli_close($conexion);
?>