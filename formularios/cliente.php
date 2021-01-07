
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
      <header>
      <a class="btn btn-primary" href="/formularios/principal.html" > ATRAS</a>
        </header>
        <body>
            <aside class="principal" >
                <CENTER><h3>CLIENTE</h3></CENTER>
                <form class="form" action="/validar/RegistroCliente.php" method="post">
                    
                idcliente:<input type="number" name="id" class="form">
                <br><br>
                 nombre:<input type="text" name="nombre" class="form">
                <br><br>
                 DNI:<input type="number" name="dni" class="form3">
                <br><br>
                 Direccion:<input type="text" name="direc" class="form">
                <br><br>
                 Telefono:<input type="number" class="form" name="telefono">
                <br><br>
                 Correo:<input type="email" class="form1" name="correo">
                <br><br>
                 Genero:<input type="text" class="
                     form1" name=Genero>
                <br><br>
                                      
                 <center><input type="submit" value="Registrar" class="btn btn-primary">  </center> 
                </form>
         
                <?php
                  $conexion =mysqli_connect("localhost","id15811897_fernando","Monkey1999@@","id15811897_prestamosfinal",'3306');
                ?>
                </aside>
               <article class="principal2"  >
                   <table border="1">
                   <thead>
                       <tr>
                           <th>NOMBRE</th>
                           <th>DNI</th>
                           <th>DIRECCION</th>
                           <th>TELEFONO</th>
                           <th>CORREO</th>
                           <th>GENERO</th>
                       </tr>
                       
                       </thead>
                       
                       <?php
                       $sql="SELECT * FROM cliente";
                       $result=mysqli_query($conexion,$sql);
                       
                       while ($mostrar=mysqli_fetch_array($result)){
                           
                       
                       ?>
                        <tr>
                           <th> <?php echo $mostrar['nombre'] ?></th>
                           <th><?php echo $mostrar['dni']?></th>
                           <th><?php echo $mostrar['direccion']?></th>
                           <th><?php echo $mostrar['telefono']?></th>
                           <th><?php echo $mostrar['correo'}?></th>
                           <th><?php echo $mostrar['genero']?></th>
                       </tr>
                       <?php
                       
                           
                       }
                        ?>
                   
                   </table>
                
                   
                   
                   </article>
            
            
           
            
            
            
        
             
            
            
       
        
        </body>
</html>
             
            
            
       
        
        </body>
</html>