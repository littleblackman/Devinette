<?php


/**
 * Class Home
 *
 * use to show the home page
 */
class Home
{

    public function showHome()
    {
        
        $manager = new DevinetteManager();
        $devinettes = $manager->findAll();

        $myView = new View('home');
        $myView->render($devinettes);

    }

    public function showContact()
    {

        $myView = new View('contact');
        $myView->render();
    }


}