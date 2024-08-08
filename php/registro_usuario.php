<?php

include 'conexion.php';

$nombre_usuario = $_POST['nombre_usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

//ENCRIPTAR CONTRASEÑA
//$contrasena = hash('sha512', $contrasena);


$query = "INSERT INTO usuarios(nombre_usuario, correo, contrasena) VALUES ('$nombre_usuario', '$correo', '$contrasena')";

//Verificar que los datos de la BD no se repitan


$verificar_nombre = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_usuario = '$nombre_usuario'");
if (mysqli_num_rows($verificar_nombre) >0){
    echo '
    <script>
         alert ("Este usuario ya esta registrado, intenta con otro diferente");
         window.location = "../index.php";
    </script>
    ';
    exit();
    
    
}


$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) >0){
    echo '
    <script>
         alert ("este correo ya esta registrado, intentar con otro diferente");
         window.location = "../index.php";
    </script>
    ';
    exit();
    
}

$verificar_contrasena = mysqli_query($conexion, "SELECT * FROM usuarios WHERE contrasena = '$contrasena'");
if (mysqli_num_rows($verificar_contrasena) >0){
    echo '
    <script>
         alert ("esta contraseña ya esta registrada, intenta con otra diferente");
         window.location = "../index.php";
    </script>
    ';
    exit();
    
}





$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){

        echo '
        <script>
             alert ("usuario almacenado correctamente");
             window.location = "../index.php";
        </script>
        ';
    
}else{
    echo '
    <script>
         alert ("Usuario no almacenado, intentelo de nuevo");
         window.location = "../index.php";
    </script>
    ';

    

}

mysqli_close  ($conexion);


?>

