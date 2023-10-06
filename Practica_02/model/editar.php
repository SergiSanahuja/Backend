<?php
/**Sergi Sanahuja */
    //funcio per a modificar un usuari de la base de dades
    function modificar($dni, $nom, $adreca, $connexio){
            
            try{
                
                //Comprovar que cap camp estigui buit
                if($nom == "" || $dni == "" || $adreca == ""){
                    new Exception("Error: No s'han introduit tots els camps");
                }else{
    
                    //executar la query per a modificar l'usuari
                    $sql = "UPDATE `usuaris` SET `Nom` = '$nom', `Adreca` = '$adreca' WHERE `usuaris`.`DNI` = '$dni';";
    
                    $statmet  = $connexio->prepare($sql);
    
                    $statmet->execute();
                }
            
            }catch(PDOException $t){
                echo "Error: " . $t->getMessage();
                die();

        }
    }


?>