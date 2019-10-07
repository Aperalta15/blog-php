<?php
use phpDocumentor\Reflection\Location;

// este codigo gestionara el contenido a mostrar o procesar
/**
 *
 */
class rutas
{
  public function cargarContenido($cnt , $acc){
      //validar si archivo existe
      if(file_exists("Controlador/".$cnt."_controlador.php")){
          require_once "Controlador/".$cnt."_controlador.php";
          $clase = $cnt."_controlador";
          $i = new $clase();
          if (method_exists($i, $acc)) {
              $i->$acc();
          } else {
              echo "Este metodo no existe ";
          }
      }else {
          echo "Este metodo no existe ";
      }
  }
}



?>
