<?php /**
 *
 */
class vista
{
  public function cargar($contenido ,$cargarEstructura = false)
  {
    if ($cargarEstructura == false) {
      require_once "usuario/".$contenido.".php";
    }else {
      require_once "header.php";
      require_once $contenido.".php";
      require_once "footer.php";


    }
  }
}
 ?>
