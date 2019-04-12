<?php


abstract class AbstractController
{

    /*
     * Afficher une page à l'utilisateur
     * ---------------------------------
     * Je passe juste à la fonction render le nom du fichier comme paramètre. Par ex: connexion, membre/connexion
     */
    public function render($page)
    {
        include_once './View/header.php';
        include_once './View/' . $page . '.php';
        include_once './View/footer.php';
    }
}