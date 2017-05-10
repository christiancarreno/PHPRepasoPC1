<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 
 <center> 
<img src="images/imagenuno.png "> 
</center> 


 <table  align="center" style='border: inset 0pt' >

    <td><table  align="center" style='border: inset 0pt'>

          <tr>
          <th> For IT scientist</th>
          </tr>
          <?php
   
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios s where s.codigo_servicio = 1  union all SELECT * from servicios s where s.codigo_servicio = 2 union all SELECT * from servicios s where s.codigo_servicio = 3   ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
  
      
          <tr>
      
      		   <td style='border: inset 0pt' > <img   src=<?php echo $row['imagen_servicio']?>> </td>
       		   <td style='border: inset 0pt' ><?php echo $row['nombre_servicio']?> <br><?php  echo $row['descripcion_servicio']?></td>


      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  
  $conn->close();
  
 ?> 

</table></td>

    <td><table align="center" style='border: inset 0pt'>

          <tr>
          <th> For IT professional</th>
          </tr>
          <?php
   
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios s where s.codigo_servicio = 4  union all SELECT * from servicios s where s.codigo_servicio = 5 union all SELECT * from servicios s where s.codigo_servicio = 6   ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
  
      
           <tr>
      
      		   <td style='border: inset 0pt' > <img   src=<?php echo $row['imagen_servicio']?>> </td>
       		   <td style='border: inset 0pt' ><?php echo $row['nombre_servicio']?> <br><?php  echo $row['descripcion_servicio']?></td>


      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  
  $conn->close();
  
 ?> 

</table></td>





</table> 


<center> 
<img src="images/imagendos.png" border=0> 
</center> 
 </body>
 </html>
