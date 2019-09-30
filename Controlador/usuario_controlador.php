<?php
  /**
   *
   */
  class usuario_controlador
  {

    public function __construct()
    {
      require_once "Modelo/usuario_modelo.php";
    }

    public function login()
    {
      require_once "Vista/usuario/login.php";
    }

    public function registro()
    {
      require_once "Vista/usuario/registro.php";
    }

    public function validar_ingreso(){
        extract($_REQUEST);
        $um = new usuario_modelo();
        $r = $um->validar_usuario($correo, $password);

        if (is_array($r)) {
          $_SESSION["NOMBRE"]=$r["usuNombre"];
          $_SESSION["APELLIDO"]=$r["usuApellido"];
          $_SESSION["ROL"]=$r["usuRol"];
          $_SESSION["CORREO"]=$r["usuCorreo"];
          $_SESSION["PASSWORD"]=$r["usuPass"];
          $_SESSION["ID"]=$r["idUsu"];
          header("Location: /blog-php");
          echo json_encode(array("texto" => "Bienvenido", "estado"=>"success"));
        } else {
          echo json_encode(array("texto" => "Usuario o contrasena incorrectos", "estado"=>"danger"));
        }
    }

    public function regUsuario(){
       extract($_REQUEST);
       if ($nombre != '' && $apellido != '' && $correo != '' && $password != '') {
        $um = new usuario_modelo();
         $r=$um->validarCorreo($correo);
         if ($r > 0 ) {
           echo json_encode(array("texto" => "Este correo ya existe", "estado"=>"warning"));
         }else{
            $r=$um->registroUsuario($nombre,$apellido,$correo,$password);
            if($r>0){
                echo json_encode(array("texto" => "Usuario registrado", "estado"=>"success"));
            }else{
                echo json_encode(array("texto" => "Error al registrar", "estado"=>"danger"));
            }
         }
       }else{
          echo json_encode(array("texto" => "Faltan datos por registrar", "estado"=>"danger"));
       }
    }

    public function cerrarsesion(){
       session_destroy();
       header("Location: /blog-php");
   }

   public function categorias(){
     $um=new usuario_modelo();
     $r=$um->ListadoCategoria();
     require_once "Vista/usuario/categorias.php";
   }





  }

?>
