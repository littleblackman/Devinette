<?php


class Request
{

    private $params;
    private $route;

    public function __construct()
    {
        $this->params = array();
    }

    public function setParams($params)
    {
        $this->params = $params;
    }

    public function addParam($key, $value)
    {
        $this->params[$key] = $value;
    }

    public function getParam($key)
    {
        if(!isset($this->params[$key])) return null;
        return $this->params[$key];
    }

    public function setRoute($route)
    {
        $this->route = $route;
    }
    
    public function getRoute()
    {
        return $this->route;
    }



}