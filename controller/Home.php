<?php


/**
 * Class Home
 *
 * use to show the home page
 */
class Home
{

    public function showHome($params)
    {
        extract($params);
        $manager = new DevinetteManager();
        $devinettes = $manager->findAll();

        $myView = new View('home');
        $myView->render(array('devinettes' => $devinettes));

    }

    public function showContact($params)
    {

        $myView = new View('contact');
        $myView->render();
    }

    public function editDev($params)
    {
        extract($params);

        if(isset($id)) {
            $manager = new DevinetteManager();
            $devinette = $manager->find($id);
        } else {
            $devinette = new Devinette();
        }

        $myView = new View('edit');
        $myView->render(array('devinette' => $devinette));

    }
    
    public function addDev($params)
    {
        extract($params);

        $manager = new DevinetteManager();
        $manager->save($values);

        $myView = new View();
        $myView->redirect('home.html');
        
    }

    public function delDev($params)
    {
        extract($params);
        $manager = new DevinetteManager();
        $manager->delete($id);

        $myView = new View();
        $myView->redirect('home.html');
    }


}