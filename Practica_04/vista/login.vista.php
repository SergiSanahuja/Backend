<!--  Sergi sanahuja  -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre</title>
    <link rel="stylesheet" href="../registre.css">
</head>
<body>

    <h2>
     Login
    </h2>
    <form action="../controlador/login.php" method="post">

        <input type="email" name="email"> <label for="email">email</label><br>
        <input type="password" name="password"> <label for="password">password</label><br>
        <input type="submit" value="login"> 
        <button type="button">Recuperar contrasenya</button>
        <a href="../vista/index.vista.php"><button type="button">cancel·lar</button></a> 
    </form>
</form>
</body>
</html>