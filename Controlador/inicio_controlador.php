<?php

class inicio_controlador{

    public function __construct()
    {
      require_once "Modelo/usuario_modelo.php";
    }
    public function index(){
      $um=new usuario_modelo();
      $r=$um->ListadoCategoria();
      vista::cargar("inicio/index", true);
    }

}

?>
