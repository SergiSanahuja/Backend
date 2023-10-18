<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../registre.css">
</head>
<body>
    <?php 
           require_once "../model/model.php";
    ?>


    <h2>Recuperar contrasenya</h2>

    <form action="../controlador/sendEmail.php" method="post">

        <input type="email" name="email"><label for="email">Email</label>
        <input type="submit" value="Enviar">
        <a href="../vista/login.vista.php"><button type="button">cancel·lar</button></a>
    </form>
    
</body>


<?php


    if(isset($_POST['email'])){

        $email = $_POST['email'];

        if(comprovarCorreu($email)){
            sendEmail($email,"Recuperar contrasenya. <br>Hola, has demanat recuperar la contrasenya ve a aquest enllaç per recuperar-la: http://localhost/Backend/Practiques/Practica_04/controlador/sendEmail.php");
            
        }else{
            header('Location: ../vista/recuperarContrasenya.vista.php?error=Email incorrecte');
        }
    }

    if(isset($_GET['error'])){
        echo "<br>";                
        echo $_GET['error'];
    }

?>
</html>