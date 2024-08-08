<!DOCTYPE html>
<HTml lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="TiendaOnline" content="jmdotaciones">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>

<body>    
    <div class="container-form register" >
        <div class="information">
            <div class="info-childs">
                <h2>Bienvenido</h2>
                <p>Para unirte a nuestra comunidad inicia secion con tus datos</p>
                <form action="php/login.php" method="POST" class="form">
                    
                    <label>
                        <i class='bx bx-envelope' ></i>
                        <input type="email" placeholder="Correo electronico" name = "correo">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña" name = "contrasena">
                    </label>                      
                    <input class="btn" type="submit"  value="Ingresar" >

                    
                </form>

            </div>

        </div>
        <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear una cuenta</h2>
                <div class="icons">
                    <i class='bx bxl-google'></i>
                    <i class='bx bxl-instagram' ></i>
                    <i class='bx bxl-twitter' ></i>
                </div>
                <p>O usa tu email para registrarte</p>
                <form action= "php/registro_usuario.php" method="POST" class="form">
                    <label>
                        <i class='bx bx-user' ></i>
                        <input type="text" placeholder="Nombres Completo" name ="nombre_usuario">
                    </label>
                    <label>
                        <i class='bx bx-envelope' ></i>
                        <input type="email" placeholder="Correo electronico" name="correo">
                    </label>
                    <label>
                        <i class='bx bx-lock-alt' ></i>
                        <input type="password" placeholder="Contraseña" name= "contrasena">
                    </label>
                    <input class="btn_registrarse" type="submit" value="Registrase">
                </form>
            </div>

        </div>
    </div>

    
</body>
</html>
