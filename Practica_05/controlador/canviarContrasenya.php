<?php      

require_once '../model/model.php';
include_once '../vista/canviarContrasenya.vista.php';


echo $_GET['id'];
//Comprovem que el formulari s'ha enviat

    //Comprovem que les dades siguin correctes

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $token = $_GET['token'];
        if (comprovarToken($token)) {

            //todo Entra al codi pero automaticament es redirigeix a la pagina login.vista.php, s'ha de fer que es quedi a la mateixa pagina i que es pugui canviar la contrasenya
            $password = $_POST['password'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            modificarContrasenya($password,$id);
            header('Location: ../vista/login.vista.php');

        } else {
            header('Location: ../vista/canviarContrasenya.vista.php?error=Token incorrecte');
        }
    }


if(isset($_GET['error'])){
    echo "<br>";                
    echo $_GET['error'];
}
    








?>