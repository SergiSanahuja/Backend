<?php
/**Sergi Sanahuja */
require_once "../model/inserir.php";
require_once "../model/eliminar.php";
require_once "../model/consultar.php";
require_once "../model/editar.php";
include_once("../vista/index.php");

$nom = "";
$dni = "";
$adreca = "";
$opciones = ["Consultar"];

$paterDNI = "/^[0-9]{8}[A-Z]{1}$/";
$paternEmail = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.([a-zA-Z]{2,4})+$/";
$paternNom = "/^[a-zA-Z]+$/";

if (isset($_POST['enviar'])) {
    $nom = $_POST['nom'];
    $dni = $_POST['dni'];
    $adreca = $_POST['adreca'];
    $opciones = $_POST['opcions'];

    try {
        //code...

        //conexio a la bd
        $connexio = new PDO('mysql:host=localhost;dbname=pt02_sergi_sanahuja', 'root', '');

        //comprovacio de la conexio
        if ($connexio == null) {
            new Exception("Error: No s'ha pogut connectar a la BDD");
            echo "Error: No s'ha pogut connectar a la BDD";
            die();
        }


        if(empty($opciones)){
            new Exception("Error: No s'ha seleccionat cap opció");
            die();
        }

        //Casos per a cada opcio
        switch ($opciones) {
            case 'insertar':
                //insertar dades a la bd
                # code...
                if (!preg_match($paterDNI, $dni) || !preg_match($paternEmail, $adreca) || !preg_match($paternNom, $nom)) {
                    new Exception("Error: No s'han introduit tots els camps");
                    echo "Error: No s'han introduit tots els camps o son incorrectes";
                    die();
                } else {
                    afegir($connexio, $nom, $dni, $adreca);
                }
                break;

            case 'Eliminar':
                //eliminar dades de la bd

                if (preg_match($paterDNI, $dni)) {

                    eliminar($connexio, $dni);
                }else{
                    new Exception("Error: No s'ha introduit el DNI");
                    echo "Error: No s'ha introduit el DNI o es incorrecte";
                    die();
                }
                break;

            case 'Modificar':
                //modificar dades de la bd

                if (preg_match($paterDNI, $dni) && preg_match($paternEmail, $adreca) && preg_match($paternNom, $nom)) {
                    modificar($dni, $nom, $adreca, $connexio);
                }else{
                    new Exception("Error: No s'han introduit tots els camps");
                    echo "Error: No s'han introduit tots els camps o son incorrectes";
                    die();
                }

            case 'Consultar':
                //consultar dades de la bd
                echo consultar($connexio, $dni, $nom, $adreca);
                break;

            default:
                new Exception("Error: No s'ha seleccionat cap opció");
                break;
        }
        
        die();
    } catch (PDOException $t) {
        echo "Error: " . $t->getMessage();
        die();
    }
} else {
    header("Location: ../vista/index_Sergi_Sanahuja.php");
}



?>