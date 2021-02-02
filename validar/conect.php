<?php



$conexion =mysqli_connect("localhost","id15811897_fernando","fB-F?k9SJdaLIrB1","id15811897_prestamosfinal","3306");


$nombreCliente = $_POST['NOMBRE'];
$DniCliente = $_POST['DNI'];
$DireccionCliente = $_POST['DIRECCION'];
$telefonoCliente= $_POST['telefono'];
$correo = $_POST['correo'];
$genero=$_POST['genero'];
$edad=$_POST['edad'];

$consulta="INSERT INTO `clientes` VALUES (null,'$nombreCliente','$DniCliente','$DireccionCliente','$telefonoCliente','$correo','$genero','$edad')";
$result= mysqli_query($conexion,$consulta);
if (!$result){
    echo "La consulta SQL contiene errores.".mysqli_error($conexion);
    exit();
}else{
    echo "consulta correcta";
}

?>