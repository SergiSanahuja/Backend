<!--  Sergi sanahuja  -->
<!--La vista del formulari de login-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre</title>
    <link rel="stylesheet" href="../estils/registre.css">
</head>
<body>

    <h2>
     Login
    </h2>
    
    <form action="../controlador/login.php" method="post">

        <input type="email" name="email"> <label for="email">email</label><br>
        <input type="password" name="password"> <label for="password">password</label><br>
        <input type="submit" value="login"> 
        <!-- Redirecció a recuperar contrasenya per enviar un correu -->
       <a href="../vista/recuperarContrasenya.vista.php"> <button type="button">He olvidat la contrasenya</button></a>
       <!-- Redirecció a vista usuari anònim  -->
        <a href="../vista/index.php"><button type="button">cancel·lar</button></a> 
    </form>
</form>
</body>
</html>