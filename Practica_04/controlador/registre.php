<?php
    session_start();
    require_once '../model/model.php';


    if($_SERVER['PHP_SELF']){
        if(isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password'])){
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            //$password = password_hash($password, PASSWORD_DEFAULT);
            $password = md5($password);
            
            insertarUsuari($nom, $email, $password);
            
            header('Location: ../controlador/index.php');
        }
    }


    if(isset($_POST['cancel'])){
        header('Location: ../controlador/index.php');
    }


    require_once '../vista/registre.vista.php';
?>