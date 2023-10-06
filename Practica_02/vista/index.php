<?php
/*Sergi Sanahuja*/
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estils/style.css">
</head>

<body>    

    <title>Practica 2</title>

    <h1>Practica 2</h1>

    <h2>Formulario</h2>
    <form action="../controlador/controlador.php" method="POST">
        <label for="nombre">Nom</label>
        
        <input type="text" name="nom" id="nombre" placeholder="Nom" value="<?php validarnom() ?>">
                                                                                        
        <br>
        <label for="apellido">DNI</label>
        <input type="text" name="dni" id="apellido" placeholder="Dni" value="<?php validarDNI() ?>" >
        <br>
        <label for="edad">Adreça</label>
        <input type="text" name="adreca" id="edad" placeholder="Adreça" value="<?php validarEmail() ?>">
        
        
        <h2>Que vols fer</h2>
        <input type="radio" name="opcions" id="Insertar" value="insertar">
        <label for="">Insertar</label>
        <input type="radio" name="opcions" id="Modificar" value="Modificar">
        <label for="">Modificar</label>
        <input type="radio" name="opcions" id="Eliminar" value="Eliminar">
        <label for="">Eliminar</label>
        <input type="radio" name="opcions" id="Consultar"  value="Consultar" checked="checked">
        <label for="">Consultar</label>
        <br>
        <input type="submit" name="enviar" value="Enviar" >
        <div>

        </div>
       
    </form>
    
    
    <?php
        function validarnom(){
           echo htmlentities("");
           if (isset($_POST['enviar'])) {
            # code...
               if (preg_match("/^[a-zA-Z]+$/", $_POST['nom']))  {
                # code...
                echo htmlentities($_POST['nom']);
               }else{
                   echo htmlentities("");
               }
            
           }
        }

        function validarEmail(){
            echo htmlentities("");
            if (isset($_POST['enviar'])) {
                # code...
                if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/", $_POST['adreca'])) {
                    # code...
                    echo htmlentities($_POST['adreca']);
                }else{
                    echo htmlentities("");
                }
            }
        }

        function validarDNI(){
            echo htmlentities("");
            if (isset($_POST['enviar'])) {
                # code...
                if (preg_match("/^[0-9]{8}[A-Z]{1}$/", $_POST['dni'])) {
                    # code...
                    echo htmlentities($_POST['dni']);
                }else{
                    echo htmlentities("");
                }
            }
        }
?>

</body>
  
</html>