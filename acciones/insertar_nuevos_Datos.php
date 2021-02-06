<?php
error_reporting(E_ALL ^ E_NOTICE);
$conexion =mysqli_connect("localhost","id15811897_fernando","fB-F?k9SJdaLIrB1","id15811897_prestamosfinal","3306");

$idcliente=$_POST['idcliente'];
$nombreCliente = $_POST['nombre'];
$DniCliente = $_POST['dni'];
$DireccionCliente = $_POST['direccion'];
$telefonoCliente= $_POST['telefono'];
$correo = $_POST['correo'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];

$actualizar="UPDATE clientes SET nombre='$nombreCliente',dni='$DniCliente',direccion='$DireccionCliente',telefono='$telefonoCliente',correo='$correo',genero='$genero',edad='$edad' WHERE idcliente='$idcliente'";
$result= mysqli_query($conexion,$actualizar);

if(!$result){
    echo "<script>alert('Se han actualizado correctamente, actualiza la pagina para ver los resultados'); window.location='/acciones/actualizar.php';</script>";
  
  }else{
    echo "<script>alert('No se pudieron actualizar correctamente); window.history.go(-1);</script>";
     
  }


  mysqli_close($conexion);

?>