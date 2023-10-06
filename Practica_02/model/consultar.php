<?php
/**Sergi Sanahuja */
    //funció per afegir un usuari a la base de dades
    function consultar($coneccio,$dni,$nom,$adreca){
        try{
            //Comprovar que cap camp estigui buit
            //si dni esta buit mostrar tots els usuaris else només el que coincideixi amb el dni
            if($dni == "" && $nom == "" && $adreca == ""){
                $sql = "SELECT * FROM `usuaris`";
                $statmet  = $coneccio->prepare($sql);
                $statmet->execute();

                //Creacio de la taula Tituls
                $tabla = "<table> <tr><th> ID </th> <th>DNI</th> <th>Nom</th> <th>Email</th></tr>";
                $result = $statmet->fetchAll();

                //Per cada resultat de la array agafar el valor i posarlo a la taula
                foreach ($result as $usuari) {
                    $tabla .= "<tr><td>" . $usuari['Id'] . "</td><td>" . $usuari['DNI'] . "</td><td>" . $usuari['Nom'] . "</td><td>" . $usuari['Adreca'] . "</td></tr>";
                }
        
                $tabla .= "</table>";
                return $tabla;

            }else{

                $sql = "SELECT * FROM `usuaris` WHERE `DNI` = :dni OR `Nom` = :nom OR `Adreca` = :adreca";



                $statmet  = $coneccio->prepare($sql);
                $statmet->execute(
                    array(
                        ':dni' => $dni,
                        ':nom' => $nom
                    )
                );


                $tabla = "<table> <tr><th> ID </th> <th>DNI</th> <th>Nom</th> <th>Email</th></tr>";
                $result = $statmet->fetchAll();
                foreach ($result as $usuari) {
                    $tabla .= "<tr><td>" . $usuari['Id'] . "</td><td>" . $usuari['DNI'] . "</td><td>" . $usuari['Nom'] . "</td><td>" . $usuari['Adreca'] . "</td></tr>";
                }
        
                $tabla .= "</table>";
                return $tabla;
                
            }
        }catch(PDOException $t){
            echo "Error: " . $t->getMessage();
            die();
        }
    }



?>