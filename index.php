<?php
//Todas las peticiones caen sobre el index por lo que se crea un enrutado con htacces
//htacces es un archvio de configuracion de sistema, se pueden crear regla de insercion, excluir ips etc
//En htacces se configura para que todas las peticiones caigan sobre el index
//Cualquier cosa que se escriba en la barra del navegador retornara siempre al index

require_once "config/config.php"; //Se llaman los metodos de config.php

//Obtenemos la constante URL y en base al delimitador "/" obtenemos "index.php" devolviendo un array
//En el que $url[1] contiene un string con el valor de "index.php"

echo $url; 
require_once "routers/router.php"; //Se llaman los metodos de router.php
$routers = new router();// Se crea una instancia del la clase router
$routers->run();//Se ejecuta el metodo run de la instancia de la clase router


?>