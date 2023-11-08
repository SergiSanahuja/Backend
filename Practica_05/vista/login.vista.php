<!--  Sergi sanahuja  -->
<!--La vista del formulari de login-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre</title>
    <link rel="stylesheet" href="../estils/registre.css">
    <script src="https://www.google.com/recaptcha/api.js?hl=es" async defer></script>
</head>
<body>

    <h2>
     Login
    </h2>

    <div class="error">
            <?php
            if(isset($_GET['error'])){                
                echo $_GET['error'];
            }
        ?>
    </div>

    <div class="form">

        <form action="../controlador/login.php" method="post">
                
            <input type="email" name="email"> <label for="email">email</label><br>
            <input type="password" name="password"> <label for="password">password</label><br>
            <input type="submit" name="submit" value="login"> 
            <!-- Redirecció a recuperar contrasenya per enviar un correu -->
            <a href="../vista/recuperarContrasenya.vista.php"> <button type="button">He olvidat la contrasenya</button></a>
            <!-- Redirecció a vista usuari anònim  -->
            <a href="../vista/index.php"><button type="button">cancel·lar</button></a> 
            <div class="capcha">
                <div class="g-recaptcha" data-sitekey="6LeQdv4oAAAAAJQZv8U35loEEv0cp-LlOYA881_9"></div>
                
            </div>
        </form>
    </div>
</form>
</body>

</html>