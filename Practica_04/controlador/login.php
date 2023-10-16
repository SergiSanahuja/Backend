<?php    
    session_start();
    require_once '../model/model.php';
    require_once '../vista/login.vista.php';

         
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];      
        echo md5($password);
        
        //Comprovar si l'usuari existeiex y si la contrasenya es correcte
        if( comprovarUsuari($email, $password) ){
            //$_SESSION['email'] = $email;
            header('Location: ../controlador/index.php');
        }else{
            echo "Usuari o contrasenya incorrectes";
        }

        
    }
    
    function cancel(){
        header('Location: ../controlador/index.php');
    }
    



?>