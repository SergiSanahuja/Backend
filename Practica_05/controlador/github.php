<?php
require_once '../model/model.php';
require_once '../controloador/globalfunctions.php';
include '../hybridauth/src/autoload.php';

/**
 * 
 * globalfunctions.php conté funcions com ara: 
 * 
 * /**
 * Funció per iniciar la sessió
 * @param $email string correu de l'Oauth/HybridAyth que es vol loguejar
 * @param $usuari string nom de l'usuari que es vol loguejar
 * @param $pdo objecte de la base de dades
 * @return void Si el Log-in és correcte, inicia la sessió, altrament, redirecciona al login_vista.php amb un error guardat a la variable de sessió
 * function iniciSessioOauth($pdo, $email, $usuari){
 * }
 * /**
 * Funció per registrar l'usuari amb l'Oauth/HybridAuth
 * @param $pdo objecte de la base de dades
 * @param $email string correu de l'Oauth/HybridAyth que es vol registrar
 * @param $usuari string usuari de l'Oauth/HybridAyth que es vol registrar
 * @return void Si el registre és correcte, redirecciona a login_vista.php amb un missatge avisant que el registre s'ha realitzat guardat a la variable de sessió, altrament, redirecciona al login_vista.php amb un error guardat a la variable de sessió
 * function registreOauth($pdo, $email, $usuari){ 
 * }
*/


$config = [
    'callback' => '../Controller/github_login.php',

    'keys' => [
        'key' => '908be3d8eef100f80de6',
        'secret' => '2ce0d287a846d0943e5d9522a7defc4bb6eebf5e',
    ],
];

$login = oauth($config);
$pdo = connection();
$email = $login->email;
$username = $login->displayName;
iniciSessioOauth($pdo, $email, $username);


function alert(){
    missatge("No s'ha pogut conectar amb el servidor de GitHub", "error");
}
/**
 * Funcio que comprova que el usuari i la contrasenya sigui correcte
 * @param $config array amb la configuració de l'HybridAuth
 * @return objecte amb les dades de l'usuari
 */
function oauth($config){
    $github = new Hybridauth\Provider\Github($config);
    $github->authenticate();
    $usuari = $github->getUserProfile();
    $github->disconnect();

    return $usuari;
}
?>

