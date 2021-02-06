<?php
error_reporting ( E_ALL ^ E_NOTICE );
$conexion = mysqli_connect ( "localhost" , "id15811897_fernando" , "fB-F?k9SJdaLIrB1" , "id15811897_prestamosfinal" , '3306');
$consulta="SELECT * FROM `clientes`" ;
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


        <div  class='container-table'>
     
        <div class='table-title'>LISTA DE CLIENTES</div>
        <div class='table-header'>IDCLIENTE</div>
        <div class='table-header'>NOMBRE</div>
        <div class='table-header'>DNI</div>
        <div class='table-header'>DIRECCION</div>
        <div class='table-header'>TELEFONO</div>
        <div class='table-header'>CORREO</div>
        <div class='table-header'>GENERO</div>
        <div class='table-header'>EDAD</div>
        <div class='table-header'>OPERACION</div>
     <?php $datos= mysqli_query($conexion,$consulta);

    //obtenemos los datos resultado de la consulta 
    while ($row = mysqli_fetch_assoc($datos)){ ?>
        
           <div class='table-item'> <?php echo $row['idcliente'];?></div>
            <div class='table-item'> <?php echo $row['nombre'];?></div>
           <div class='table-item'> <?php echo $row['dni'];?></div>
           <div class='table-item'>  <?php echo $row['direccion'];?></div>
           <div class='table-item'> <?php echo $row['telefono'];?></div>
          <div class='table-item'>  <?php echo $row['correo'];?></div>
          <div class='table-item'>   <?php echo $row['genero'];?></div>
          <div class='table-item'>  <?php echo $row['edad'];?></div>
        <div class='table-item'>  
        <a href='/acciones/actualizar.php?id=<?php echo $row['idcliente'];?>' class='table-item'>Editar</a> 
        |
        
        <a href='/acciones/eliminar.php?id=<?php echo $row['idcliente'];?>'class='table-item'>Eliminar</a>
        </div>
         <?php   } mysqli_free_result($datos);?>
         </div>
          
      
        

    

    
<?php

mysqli_close($conexion);

    
    

?>
</html>