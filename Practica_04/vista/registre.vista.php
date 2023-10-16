<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre</title>
    <link rel="stylesheet" href="../registre.css">
</head>
<body>
    
<form action="../controlador/registre.php" method="post">
    <input type="text" name="nom" value="<?php if (isset($_POST['nom'])) { echo htmlentities($_POST['nom']); } ?>"> <label for="nom">nom</label><br>
    <input type="email" name="email"> <label for="email">email</label><br>
    <input type="password" name="password"> <label for="password">password</label><br>
    <input type="submit" value="Registre"> 
    <button name="cancel">cancel</button>
</form>
</body>
</html>