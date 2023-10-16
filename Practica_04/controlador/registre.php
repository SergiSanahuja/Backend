<?php
    session_start();
    require_once '../model/model.php';

    $nom = isset($_POST['nom'])? $_POST['nom'] : null;
    $email = isset($_POST['email'])? $_POST['email'] : null;
    $password = isset($_POST['password'])? $_POST['password'] : null;

    echo verificar($nom, $email, $password);
    //Comprovem que el formulari s'ha enviat
    if($_SERVER['PHP_SELF']){
        //Comprovem que les dades siguin correctes
            if(verificar($nom, $email, $password)){
                
                //encriptar password
                $password = md5($password);
            
                //insertar usuari
                insertarUsuari($nom, $email, $password);
                
                $_SESSION['nom'] = $nom;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;

                header("Location: ../vista/login.vista.php");
            }else{
                
                $Error['error'] = "Error en el registre";
                  
               
            }
            //$password = password_hash($password, PASSWORD_DEFAULT);
           
        
    }
    

//Funció per verificar que les dades introduides siguin correctes
    function verificar($nom, $email, $password){
        $n = $n = $p = false;
    
        if(empty($nom) || empty($email) || empty($password) || $nom == null || $email == null || $password == null){
            return false;
        }else{
            return true;
        }
       
      
    }

    require_once '../vista/registre.vista.php';
?>