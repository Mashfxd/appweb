<?php
error_reporting(E_ALL ^ E_NOTICE);


$conexion =mysqli_connect("localhost","id15811897_fernando","Monkey1999@@","id15811897_prestamosfinal",'3306');
$idCliente=$_POST['cliente'];
$nombreCliente = $_POST['NOMBRE'];
$DniCliente = $_POST['DNI'];
$DireccionCliente = $_POST['DIRECCION'];
$telefonoCliente= $_POST["TELEFONO"];
$correp = $_POST['correo'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];

$consulta="INSERT INTO `clientes` values ('$idCliente','$nombreCliente','$DniCliente','$DireccionCliente','$telefonoCliente','$correp','$genero','$edad')";
$result= mysqli_query($conexion,$consulta);

if(!$result){
    echo "error al registrarse el cliente";
   exit;
  }else{
    echo "cliente registrado correctamente";
      exit;
  }


  mysqli_close($conexion);

?>
