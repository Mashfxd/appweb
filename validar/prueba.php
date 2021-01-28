<?php
error_reporting ( E_ALL ^ E_NOTICE );
$conexion = mysqli_connect ( "localhost" , "id15811897_fernando" , "Monkey1999@@" , "id15811897_prestamosfinal" , '3306');

$consulta="SELECT * FROM `clientes`" ;

$datos= mysqli_query($conexion,$consulta);


if (!$datos){
    echo "La consulta SQL contiene errores.".mysqli_error($conexion);
    exit();
} else {
    echo "<table border='1'>
      <tr>
        <td>id</td>
        <td>Nombre</td>
        <td>Dni</td>
        <td>Direccion</td>
        <td>Telefono</td>
        <td>Correo</td>
        <td>Genero</td>
        <td>Edad</td>
      </tr>";

    //obtenemos los datos resultado de la consulta 
    while ($row = mysqli_fetch_assoc($datos)){
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nombre']."</td>
            <td>".$row['dni']."</td>
             <td>".$row['direccion']."</td>
            <td>".$row['telefono']."</td>
            <td>".$row['correo']."</td>
             <td>".$row['genero']."</td>
            <td>".$row['edad']."</td>
        </tr>";
    }
    echo "</table>";

    mysqli_free_result($datos);
}

mysqli_close($conexion);

    
    

?>