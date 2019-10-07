<?php

session_start();

require_once "conexion.php";//lib
require_once "rutas.php";
require_once "Vista/vista.php";
//isset(var), valida si existe una variable

if(isset($_GET["controlador"]) && isset($_GET["accion"]) ){

    //capturamos los valores de las variables
    $cnt = $_GET["controlador"];
    $acc = $_GET["accion"];

}else {

    $cnt = "inicio";
    $acc = "index";

}
rutas::cargarContenido($cnt, $acc);

// if (!isset($_POST["opcion"])) {
// 	require_once "Vista/plantilla.php";
// }else{
// 	require_once "rutas.php";
// }



?>
