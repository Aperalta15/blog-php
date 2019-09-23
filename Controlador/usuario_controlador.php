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

        extract($_POST);
        $um = new usuario_modelo();
        $r = $um->validar_usuario($usuario, $password);

        if (is_array($r)) {
          $_SESSION["NOMBRE"]=$r["USU_NOMBRE"];
          $_SESSION["APELLIDO"]=$r["USU_APELLIDO"];
          $_SESSION["ROL"]=$r["USU_ROL"];
          $_SESSION["CORREO"]=$r["USU_CORREO"];
          $_SESSION["PASSWORD"]=$r["USU_PASSWORD"];
          $_SESSION["ID"]=$r["USU_ID"];
          header("Location: /APPREGISTRO");
          echo json_encode(array("texto" => "Bienvenido", "estado"=>"success"));
        } else {
          echo json_encode(array("texto" => "Usuario o contrasena incorrectos", "estado"=>"danger"));
        }
    }

    public function regUsuario(){
       extract($_REQUEST);
       if ($nombre != '' && $apellido != '' && $usuario != '' && $password != '') {
        $um = new usuario_modelo();
         $r=$um->validarCorreo($usuario);
         if ($r > 0 ) {
           echo json_encode(array("texto" => "Este correo ya existe", "estado"=>"warning"));
         }else{
            $r=$um->registroUsuario($nombre,$apellido,$usuario,$password);
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
  }

?>
