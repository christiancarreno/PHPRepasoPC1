<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  <h1 style="text-align:center;">Noseque</h1>
  <table>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b70bfec21d58a0";
  $password = "f51af21d";
  $dbname = "ad_933d983b3cfac5e";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicio";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
      <td><?php echo $row['codigo_servicio']?></td>
      <td><?php echo $row['nombre_servicio']?></td>
      <td><?php echo $row['descripcion_servicio']?></td>
      <td><?php echo "<img src='images/". $row['imagen_servicio']?.'/>"</td>;
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 </body>
 </html>
