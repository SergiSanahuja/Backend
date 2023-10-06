<?php
    /**Sergi Sanahuja */
   //funció per afegir un usuari a la base de dades
    function afegir($connexio, $nom, $dni, $adreca){

        try{
            //Comprovar que cap camp estigui buit
            
            if($nom == "" || $dni == "" || $adreca == ""){
                new Exception("Error: No s'han introduit tots els camps");
            }else{
                //executar la query

                $sql = "INSERT INTO `usuaris` (`Nom`, `DNI`, `Adreca`) VALUES ( '$nom', '$dni', '$adreca');";

                $statmet  = $connexio->prepare($sql);

                $statmet->execute();

                echo "Usuari afegit correctament";
            }
        
        }catch(PDOException $t){
            echo "Error: " . $t->getMessage();
            die();


        }

    };




?>