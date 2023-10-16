<?php
    session_start();
    require_once '../model/model.php';

    $nom = isset($_POST['nom'])? $_POST['nom'] : null;
    $email = isset($_POST['email'])? $_POST['email'] : null;
    $password = isset($_POST['password'])? $_POST['password'] : null;

    echo $nom;

    //Comprovem que el formulari s'ha enviat
    if($_SERVER['PHP_SELF']){
        if(isset($_POST['registre'])){
            if(verificar($nom, $email, $password)){
                
                //encriptar password
                $password = md5($password);
            
                //insertar usuari
                insertarUsuari($nom, $email, $password);
                
                $_SESSION['nom'] = $nom;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;

                echo $nom;
            }else{
                $_SESSION['error'] = "Error en el registre";
                header('Location: ../controlador/registre.php');
            }
            //$password = password_hash($password, PASSWORD_DEFAULT);
           
        }
    }
    

//Funció per verificar que les dades introduides siguin correctes
    function verificar($nom, $email, $password){
        $n = $n = $p = false;
       
        preg_match("/^[a-zA-Z-' ]*$/",$nom)? $n = true : $n = false;
        filter_var($email, FILTER_VALIDATE_EMAIL)? $e = true : $e = false;
        preg_match("/{9,20}/",$password)? $p = true : $p = false;
        
       
        if($n && $e && $p){
            
            return true;
        }else{
            return false;
        }
    }

    require_once '../vista/registre.vista.php';
?>