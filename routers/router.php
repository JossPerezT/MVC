<?php
class router
{
    private $controller;
    private $method;
    public function __construct()
    {
        $this->matchRoute();//Simpre se ejecutara este metodo porque queremos leer la estructura de la URL.
    }
    public function matchRoute()
    {
//Tomamos la URl de la constante, la dividimos en base al delimitador "/" la constante URL que contiene "/login/ingresar?usuario=jose" y obtenemos un array    en $url[0] no hay nada    
        $url = explode('/', URL); 
        $this->controller = $url[1]; //Asignamos a this->controller el valor del array $url[1] que es "login" 
        $method = explode("?", $url[2]);//ya que hay variables que pasan por el metodo y no las necesitamos, a $url[2] que tiene "ingresar?usuario=jose" lo dividimos en base al delimitador "?"
        $this->method = $method[0];//Asignamos a this->method el valor del array $method[0] que es "ingresar" 
        $this->controller = $this->controller . "Controller";//Concatenamos a this->controller la cadena "Controller" 
        require_once "controllers/" . $this->controller . ".php";
    }
    public function run()
    {
        $controller = new $this->controller();
        $method = $this->method;
        $controller->$method();
    }
}


