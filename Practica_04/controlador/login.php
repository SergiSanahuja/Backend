<?php    
/********************Sergi Sanahuja******************** */
    session_start();
    require_once '../model/model.php';
    require_once '../vista/login.vista.php';

    $_SESSION['login'] = true;
        
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];      
        

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        
        //Comprovar si l'usuari existeiex y si la contrasenya es correcte
        if( comprovarUsuari($email, $password) ){
            //$_SESSION['email'] = $email;
            header('Location: ../vista/login.index.vista.php');
        }else{
            echo "Usuari o contrasenya incorrectes";
            echo "$password";
        }

        
    }
    
    function cancel(){
        header('Location: ../vista/index.php');
    }
    



?>