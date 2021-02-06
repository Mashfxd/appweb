<html>
    <head>
    <title>PRESTAMOS</title>
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/estilos.css ">
          <link rel="shortcut icon" href="/imagenes/dolar.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
    </head>
   
<body class="boyd">




<center><div class="ini">
    <h1>permisos disponibles</h1>
  <?php
error_reporting ( E_ALL ^ E_NOTICE );
$conexion = mysqli_connect ( "localhost" , "id15811897_fernando" , "fB-F?k9SJdaLIrB1" , "id15811897_prestamosfinal" , '3306');

$consulta="SELECT * FROM `permisos` where 1" ;

$datos= mysqli_query($conexion,$consulta);


if (!$datos){
    echo "La consulta SQL contiene errores.".mysqli_error($conexion);
    exit();
} else {
    echo "<table border='5' width='400'>
      <tr>
        <td >idPermiso</td>
        <td >Permiso</td>
      
      </tr>";

    //obtenemos los datos resultado de la consulta 
    while ($row = mysqli_fetch_assoc($datos)){
        echo "<tr>
            <td>".$row['idpermiso']."</td>
            <td>".$row['permiso']."</td>
         
        </tr>";
    }
    echo "</table>";

    mysqli_free_result($datos);
}

mysqli_close($conexion);

    
    

?>  
    
 <div class="col-md-6">
        <center><a class="btn btn-primary" href="/formularios/principal.html" > ATRAS</a></center>
        </div>   
</div>
</center>

</body>

</html>