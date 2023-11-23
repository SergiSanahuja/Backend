<?php
/************************Sergi Sanahuja********************** */
require_once '../model/model.php';
session_start();


function insertar(){

    

    $article = isset($_POST['article'])? $_POST['article'] : null;
    
    if($article == null || $article == ""){
        echo "<script>alert('No has introduit cap article')</script>";
        
    }else{
        insertarArticle($article);
        header('Location: ../vista/login.index.vista.php');
    }
  
            

}

function Imatge(){
    $nom_imatge = $_FILES['foto']['name'];
    $temporal = $_FILES['foto']['tmp_name'];
    $carpeta = '../img';
    $ruta = $carpeta.'/'.$nom_imatge;
    move_uploaded_file($temporal, $ruta);

    if($nom_imatge == null || $nom_imatge == ""){
        echo "<script>alert('No has introduit cap imatge')</script>";
    }else{
        insertarImatge($ruta);
        
    }
}
include_once '../vista/insert.vista.php';
?>