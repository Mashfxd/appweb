<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
$conexion =mysqli_connect("localhost","id15811897_fernando","Monkey1999@@","id15811897_prestamosfinal",'3306');

$user= mysql_fix_string($conexion,$_POST['usuario'];
             
$contraseña=mysql_fix_string($conexion,$_POST['contraseña']);
$idpermiso=mysql_fix_string($conexion,$_POST['idpermiso']);




        $consulta=mysqli_query($conexion,"select * FROM usuarios WHERE  login ='$user' and clave=$contraseña  and idpermiso=$idpermiso");
        
        if(!$consulta){
          header("location:/formularios/principal.php");
          echo mysqli_error($mysqli);
          exit;
        }
        if($user=mysqli_fetch_assoc($consulta)){
          header("location:index.html");
        }else
         echo "ups no salio como esperabas";
        header("location:/formularios/ups.html");
function mysql_entities_fix_string($con, $string)
{
    return htmlentties(mysql_fix_string($con, $string));
}

function mysql_fix_string($con, $string)
{
    if (get_magic_quotes_gpc())
        $string = stripslashes($string);
    return $con->real_escape_string($string);
}
    
         ?>
