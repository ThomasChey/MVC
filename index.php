<?php

/*
 * Ici, notre fichier index.php représente notre controller frontal.
 * -----------------------------------------------
 * C'est donc lui qui se charge de rediriger la requète de l'utilisateur vers le bon controller
 * en s'aidant des paramètres dans l'URL.
 */

include_once 'Controller/DefaultController.php';
include_once 'Controller/MembreController.php';

# Appercu de GET
// var_dump($_GET);

# Récupération des paramètres GET
$controller = $_GET['controller'] ?? 'default';
$action = $_GET['action'] ?? 'home';

// --- Zone de Routage du Front Controller

if ($controller == 'default' && $action == 'home') {

    /*
     * Ici, notre front controller, transmet la requète de l'utilisateur vers l'action "home" du "default" controller.
     */
    $defaultCtrl = new DefaultController();
    $defaultCtrl->home();
}

if($controller == 'default' && $action == 'contact'){

    $defaultCtrl = new DefaultController();
    $defaultCtrl->contact();
}

if ($controller == 'membre' && $action == 'inscription') {

    $inscriptionCtrl = new MembreController();
    $inscriptionCtrl->inscription();
}

if ($controller == 'membre' && $action == 'connexion') {

    $membreCtrl = new MembreController();
    $membreCtrl->connexion();
}




//if ($controller == 'default' && $action == 'categorie') {
//    echo "<h1>JE SUIS LA PAGE CATEGORIE</h1>";
//}
//
//if ($controller == 'default' && $action == 'article') {
//    echo "<h1>JE SUIS LA PAGE ARTICLE</h1>";
//}
//
//
//// --- Pour les Membres
//
//if ($controller == 'membre' && $action == 'connexion') {
//    echo "<h1>JE SUIS LA PAGE DE CONNEXION</h1>";
//}

