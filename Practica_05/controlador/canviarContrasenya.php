<?php      

require_once '../model/model.php';


//Comprovem que el formulari s'ha enviat
if(isset($_SERVER['POST'])){
    //Comprovem que les dades siguin correctes
    if(comprovarCorreu($email)){
        //enviar email
        $token = $_GET['token'];
        if(comprovarToken($token)){
            if($_POST['password'] == $_POST['password2']){
                $password = $_POST['password'];
                $password = password_hash($password, PASSWORD_DEFAULT);
                modificarContrasenya($password, $email);
                header('Location: ../vista/login.vista.php');
            }else{
                header('Location: ../vista/canviarContrasenya.vista.php?error=Els tokens no coincideixen');
            }
        }
    }else{
        header('Location: ../vista/recuperarContrasenya.vista.php?error=Email incorrecte');
    }
    
}




include_once '../vista/canviarContrasenya.vista.php';





?>