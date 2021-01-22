<?php
error_reporting(E_ALL ^ E_NOTICE);


$conexion =mysqli_connect("localhost","id15811897_fernando","Monkey1999@@","id15811897_prestamosfinal",'3306');
$idPagos=$_POST['IDPagos'];
$idprestamos = $_POST['idprestamos'];
$usuariosPagos = $_POST['USUARIO'];
$fechaPagos = $_POST['fecha'];
$cuota= $_POST["cuota"];
$formaPago= $_POST['forma'];


$consulta="INSERT INTO `pagos` values ('$idPagos','$idprestamos','$usuariosPagos','$fechaPagos','$cuota','$formaPago')";
$result= mysqli_query($conexion,$consulta);

if(!$result){
    echo "error al pagar intente de nuevo";
   exit;
  }else{
    echo "pago con exito";
      exit;
  }


  mysqli_close($conexion);

?>