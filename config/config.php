<?php
//Config : Aqui van configuraciones y validaciones de sesiones, definicion de constantes, fechas etc.
//Ruta que cae en el index: http://localhost:8081/mvcjamj3/login/ingresar

// echo "<pre>";
// var_dump($_SERVER); METODO DE RESPUESTA DEL SERVIDOR, podemos usar las variables del servidor para ssaber info que conlleva la variable

//Se llama en el index y obtenemos solo el directorio: /mvcjamj3 de la ruta completa
$folderPath = dirname($_SERVER["SCRIPT_NAME"]);

//Se llama en el index y obtenemos la ruta completa: /mvcjamj3/login/ingresar
$urlPath = $_SERVER["REQUEST_URI"];

//Se llama en el index y obtenemos : /login/ingresar
//strlen:obtiene la longitud de la cadena  /mvcjamj3 = 9 
//substr: devuelve parte de una cadena: Se extraera a $urlPath los 9 caracteres de $folderPath 
$url = substr($urlPath, strlen($folderPath));

//Se llama en el index y se define " /login/ingresar " como el valor de la constante URL
define("URL", $url);
