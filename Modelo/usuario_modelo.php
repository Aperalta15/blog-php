<?php

/**
 *
 */
class usuario_modelo
{

  public function validar_usuario($usuario, $password)
  {
    $i = new conexion();
    $c = $i->getConexion();
    $sql = "SELECT * FROM user WHERE usuCorreo = :usu AND usuPass = :pass";
    $s = $c->prepare($sql);
    $s->execute( array("usu" => $usuario, "pass" => sha1($password)));
    $r = $s->rowCount();
    if ($r > 0) {
      $datos = $s->fetch();
    }else{
      $datos = 0;
    }
    return $datos;
  }

  public function validarCorreo($correo){
      $i = new conexion();
      $c = $i->getConexion();
      $sql = "SELECT * FROM user WHERE usuCorreo='".$correo."'";
      $s = $c->prepare($sql);
      $s-> execute();
      $datos = $s->rowCount();
      return $datos;
  }
}

?>
