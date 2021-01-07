<?php
error_reporting(E_ALL ^ E_NOTICE);


$conexion =mysqli_connect("localhost","id15811897_fernando","Monkey1999@@","id15811897_prestamosfinal",'3306');
$id=$_POST['id'];
$nombre = $_POST['NOMBRE'];
$apellido = $_POST['APELLIDO'];
$correo = $_POST['CORREO'];
$usuario= $_POST["login"];
$con = $_POST['clave'];
$cargo=$_POST['Cargo'];

$consulta="INSERT INTO `usuarios` values ('$id','$nombre','$apellido','$correo','$usuario','$con','$cargo')";
$result= mysqli_query($conexion,$consulta);

if(!$result){
    echo "error al registrarse";
   exit;
  }else{
    echo "usuario registrado correctamente";
      exit;
  }


  mysqli_close($conexion);

?>