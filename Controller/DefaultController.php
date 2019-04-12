<?php

include_once 'AbstractController.php';

/*
 * Une action correspond à une page de mon site.
 * Une action n'est rien d'autre qu'une fonction.
 */

class DefaultController extends AbstractController
{
    /*
     * Page d'Accueil
     */
    public function home()
    {
        $this->render('default/home');
    }


    /*
    * Page Contact
    */
    public function contact()
    {
        $this->render('default/contact');
    }

}