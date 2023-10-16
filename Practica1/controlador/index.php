<?php  


$name = "";
$email = "";
$text = "";

//Recollir les dades del formulari
if (isset($_POST['submite'])) {
    $name = $_POST['nom'];
    $email = $_POST['email'];
    $text = $_POST['AreaText'];
}  


//Validar que el text no estigui buit
function validarTexto($texto){
    $texto = trim($texto);
    if($texto=="" && trim($texto)==""){
        return false;
    }else{
        $patron = "/^[a-zA-Z, ]*$/";
        
        if(preg_match($patron,$texto)){
            return true;   
        }else{
            return false;
        }
    }   
}   


//validar que el email no estigui buit i que tingui el format correcte
function validarEmaul($email){
    $email = trim($email);
    if($email=="" && trim($email)==""){
        return false;
    }else{
        $patron = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
            
        if(preg_match($patron,$email)){
            return true;   
        }else{
            return false;
        }
    }   
}

include("../vista/vista.php");
?>