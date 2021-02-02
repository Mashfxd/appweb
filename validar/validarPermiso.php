<?php
error_reporting(E_ALL ^ E_NOTICE);

$conexion =mysqli_connect("localhost","id15811897_fernando","fB-F?k9SJdaLIrB1","id15811897_prestamosfinal","3306");

$idPermiso = $_POST['idpermiso'];
$permiso =$_POST['permisos'];

$consulta = "insert into permisos value(NULL,'$permiso')";
$resultado= mysqli_query($conexion,$consulta);


if(!$resultado){
    echo "error sentencia sql incorrecta";
    
}else{
    echo "permiso registrado correctamente";

}
mysqli_close($conexion);
?>