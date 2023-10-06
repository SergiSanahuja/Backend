<?php
/**Sergi Sanahuja */
//funcio per a eliminar un usuari de la base de dades
function eliminar($conection, $dni){

    try {
        //Comprovar que cap camp estigui buit

        if ($dni == "") {
            # code...
            new Exception("Error: No s'han introduit tots els camps");
        }        

        //executar la query per a eliminar l'usuari
        $sql = "DELETE FROM `usuaris` WHERE `usuaris`.`DNI` = '$dni'";
        $statmet  = $conection->prepare($sql);
        $statmet->execute();

        echo "Usuari eliminat correctament";

    } catch (PDOException $t) {
        echo "Error: " . $t->getMessage();
    }


}

?>