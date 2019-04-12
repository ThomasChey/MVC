<?php

include_once 'AbstractController.php';

class MembreController extends AbstractController
{

    // Page Inscription

    public function inscription()
    {
        $this->render('membre/inscription');
    }


    // Page Connexion

    public function connexion()
    {
        $this->render('membre/connexion');
    }
}