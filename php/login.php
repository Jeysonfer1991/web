<?php
session_start();
include 'conexion.php';
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) >0){
    $SESION['usuario'] = $correo;
    echo '
    <script>
         window.location = "../code/homepage.html";
    </script>
    ';
    exit();

    
}else{
    echo '
    <script>
         alert ("Usuario y/o contraseña no existen por favor verifique los datos ");
         window.location = "../index.php";
    </script>
    ';
    exit();
    
}






?>