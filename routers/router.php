<?php

class router
{
    private $controller;
    private $method;

    public function __construct()
    {
        $this->matchRoute();
    }
    public function matchRoute()
    {
        $url = explode('/', URL);

        $this->controller = $url[1];
        $method = explode("?", $url[2]);
        $this->method = $method[0];

        $this->controller = $this->controller . "Controller";
        require_once "controllers/" . $this->controller . ".php";
    }

    public function run()
    {

        $controller = new $this->controller();
        $method = $this->method;
        $controller->$method();
    }
}
//$_SESSION
