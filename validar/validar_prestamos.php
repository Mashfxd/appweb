<?php
error_reporting( E_ALL ^ E_NOTICE );


$conexion = mysqli_connect("localhost","id15811897_fernando","fB-F?k9SJdaLIrB1","id15811897_prestamosfinal",'3306');
$idprestamo = $_POST['idprestamos'];
$idcliente = $_POST['idcliente'];
$usuario = $_POST['USUARIO'];
$fechaPrestamo = $_POST['FECHA'];
$monto = $_POST["monto"];
$interes = $_POST['interes'];
$saldo= $_POST['saldo'];
$formapago=$_POST['forma'];
$fechapago=$_POST['pago'];
$plazo=$_POST['plazo'];
$fechaplazo=$_POST['fechaplazo'];
$estado=$_POST['estado'];


$consulta = "INSERT INTO `prestamos` values (NULL, '$idcliente', '$usuario', '$fechaPrestamo', '$monto','$interes','$saldo', '$formapago','$fechapago','$plazo','$fechaplazo',''$estado) " ;
$resultado = mysqli_query($conexion,$consulta);

if (!$resultado ) {
    echo  "error al pagar intente de nuevo" ;
   exit;
  } else {
    echo  "pago con exito" ;
      exit;
  }


  mysqli_close($conexión );
