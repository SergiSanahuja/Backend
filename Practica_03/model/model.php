<?php

 function select($conection , $inici, $paginaActual, $_POSTSperPagina){
    $sql = "SELECT * FROM `1`";

    $statmet = $conection->prepare($sql);
    
    // Executem la consulta
    
    $statmet -> execute();
    
    $resultat = $statmet->fetchAll();
    
    $llista = '';
    
    foreach($resultat as $fila){
        if($fila['Id'] > $inici && $fila['Id'] <= $inici + $_POSTSperPagina){
            $llista .= "<li>". $fila['Id'] . " - " . $fila['Article'] ."</li>";

        }else{
            $llista .= "";
        }
    }

    return $llista;
    
 }

 function totalArticles($conection){
    $sql = "SELECT * FROM `1`";

    $statmet = $conection->prepare($sql);
    
    // Executem la consulta
    
    $statmet -> execute();
    
    return $statmet->rowCount();    
    
 }

?>