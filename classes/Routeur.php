<?php

/**
 * Class Routeur
 *
 * create routes and find controller
 */
class Routeur
{
    private $url;
    private $request;
    private $routes = [
                            "home.html"             => ["controller" => 'Home', "method" => 'showHome'],
                            "contact.html"          => ["controller" => 'Home', "method" => 'showContact'],
                            "create-devinette.html" => ["controller" => 'Home', "method" => 'editDev'],
                            "ajout.html"            => ["controller" => 'Home', "method" => 'addDev'],
                            "delete"                => ["controller" => 'Home', "method" => 'delDev'],
                            "modification.html"     => ["controller" => 'Home', "method" => 'editDev'],

    ];


    public function __construct($url)
    {
        $this->url = $url;

        $request = new Request;

        $this->extractParams();
        $this->extractRoute();

        $this->request = $request;
    }

    public function extractRoute()
    {
        $elements = explode('/', $this->url);
        $this->request->setRoute($elements[0]);
    }

    public function extractParams()
    {

        $request = $this->request;

        // extract GET params
        $elements = explode('/', $this->url);
        unset($elements[0]);

        for($i = 1; $i<count($elements); $i++)
        {
            $request->addParam($elements[$i], $elements[$i+1]);
            //$params[$elements[$i]] = $elements[$i+1];  //delete/id/4 => id/4
            $i++;
        }

        // extract POST params
        if($_POST)
        {
            foreach($_POST as $key => $val)
            {
                $request->addParam($key, $val);
                //$params[$key] = $val;
            }
        }

        //return $params;

    }

    public function renderController()
    {

        $request = $this->request;
        
        if(key_exists($request->getRoute(), $this->routes))
        {

            // authorisation
            $controller = $this->routes[$route]['controller'];
            $method     = $this->routes[$route]['method'];

            $currentController = new $controller();
            $currentController->$method($request);

        } else {
            echo '404';
        }

    }
}