<?php

class conexion{

  private $con;

  public function __construct(){

    try {

      $this->con = new PDO("mysql:host=localhost;dbname=db_blog","root","");
      $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {

      echo "Error: ".$e->getMessage();

    }


  }

  public function getConexion(){

    if ($this->con instanceof PDO) {

      return $this->con;

    }

  }

  public function cerrarConexion(){

    //codigo despues de vacaciones

    }

  }


// PROBAR CONEXION

//$i = new conexion();                      //CREAMOS OBJETO TIPO CONEXION
//$c = $i->getConexion();                   //ACCEDEMOS MEDIANTE EL OBJETO AL METODO
//$sql = "SELECT * FROM t_usuarios";        //ESTABLECEMOS LA CONSULTA
//$s = $c->prepare($sql);                   //PREPARAMOS LA CONSULTA
//$s->execute();                            //EJECUTAMOS LA CONSULTA
//$filas = $s->rowCount();                  //RETORNA EL NUMERO DE REGISTROS
//echo $filas;                              //IMPRIME LOS REGISTROS ENCONTRADOS

 ?>
