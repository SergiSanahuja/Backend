<?php    
/********************Sergi Sanahuja******************** */
    session_start();
    require_once '../model/model.php';
    require_once '../vista/login.vista.php';
   
     // Establecer tiempo de vida de la sesión en segundos

    $inactividad = 6;

    // Comprobar si $_SESSION["timeout"] está establecida




    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];      
        

        
        //Comprovar si l'usuari existeiex y si la contrasenya es correcte
        if( comprovarUsuari($email, $password) ){
            
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            $_SESSION['login'] = true;
            //$_SESSION['email'] = $email;
            header('Location: ../vista/login.index.vista.php');
        }else{
            if($_SESSION['intentos'] == 3){
                echo "<script>alert('Has superat el numero d\'intents')</script>";
                header('Location: ../vista/index.php');
            }else{
                echo "<script>alert('Usuari o contrasenya incorrecte ')</script>";
                echo "<script>alert('Tens ". $intentos." intents')</script>";
                $intentos++;
            }
            
            
        }

        
    }
    
    function cancel(){
        header('Location: ../vista/index.php');
    }
    



?>