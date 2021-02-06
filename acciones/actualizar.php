<?php
error_reporting ( E_ALL ^ E_NOTICE );
$conexion = mysqli_connect ( "localhost" , "id15811897_fernando" , "fB-F?k9SJdaLIrB1" , "id15811897_prestamosfinal" , '3306');
$id=$_GET['id'];
$consulta="SELECT * FROM `clientes` where idcliente='$id'" ;
?>

<html>
<head>
    <title>PRESTAMOS</title>
       <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/estilos.css ">
          <link rel="shortcut icon" href="/imagenes/dolar.png">
       
    </head>
     <a class="btn btn-primary" href="/formularios/cliente.html" > ATRAS</a>
<body>

        <form  class='container-table1' action='/acciones/insertar_nuevos_Datos.php' method='post'>
     
        <div class='table-title1'>DATOS CLIENTES</div>
        <div class='table-header1'>NOMBRE</div>
        <div class='table-header1'>DNI</div>
        <div class='table-header1'>DIRECCION</div>
        <div class='table-header1'>TELEFONO</div>
        <div class='table-header1'>CORREO</div>
        <div class='table-header1'>GENERO</div>
        <div class='table-header1'>EDAD</div>
        <div class='table-header1'>OPERACION</div>
     <?php $datos= mysqli_query($conexion,$consulta);

    //obtenemos los datos resultado de la consulta 
    while ($row = mysqli_fetch_assoc($datos)){ ?>
    <input type="hidden" class='table-item' value='<?php echo $row['idcliente'];?>' name='idcliente'></input>
 <input type='text' class='table-item1' value='<?php echo $row['nombre'];?>' name='nombre'> </input>
 <input type='text' class='table-item1' value='<?php echo $row['dni'];?>' name='dni'> </input>
 <input type='text' class='table-item1' value='<?php echo $row['direccion'];?>' name='direccion'> </input>
 <input type='text' class='table-item1' value='<?php echo $row['telefono'];?>'name='telefono'> </input>
<input type='text' class='table-item1' value='<?php echo $row['correo'];?>' name='correo'> </input>
<input type='text' class='table-item1' value='<?php echo $row['genero'];?>' name='genero'> </input>
<input type='text' class='table-item1' value='<?php echo $row['edad'];?>' name='edad'> </input>
  
         <?php   } mysqli_free_result($datos);?>
          <input type='submit' value="actualizar" class='container_submit'></input>    
         </form>


    

    
<?php

mysqli_close($conexion);

    
    

?>
</html>