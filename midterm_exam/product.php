<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products</title>
</head>
<body>
  <?php
  $sever="localhost";
  $user="root";
  $pass="P@ssw0rd";
  $db="select";

  $con =new mysql($sever,$user,$pass,$db);

  if($con->connect_error){
    die(Connection failed : ".$con->connect_error);
  }
  $con->set_charset("utf8");


  $sql="SELECT * FROM db_connect.php"
  $result =$con->query($sql);

  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){

      echo $row["CategoryID"]."."." ไอดี : ".$row["CategoryName"]." ".$row["categories"]." <br>";
    }
  }else{
    echo "0 row";
  }

  ?>



  <table>
    <tr>
      <th>Product name</th>
      <th>Units in stock</th>
    </tr>
       <tr>
      <td>Chai</td>
      <td>39</td>
    </tr> 
    <tr>
      <td>Chang</td>
      <td>17</td>
    </tr> 
    <tr>
      <td>Guarana Fantastica</td>
      <td>20</td>
    </tr> 
    <tr>
      <td>Sasquatch Ale</td>
      <td>111</td>
    </tr> 
    <tr>
      <td>Steeleye Stout</td>
      <td>20</td>
    </tr> 
    <tr>
      <td>Cote de Blaye</td>
      <td>17</td>
    </tr> 
    <tr>
      <td>Chartreuse verte</td>
      <td>69</td>
    </tr> 
    <tr>
      <td>Ipoh Coffee</td>
      <td>17</td>
    </tr> 
    <tr>
      <td>Laughing Lumberjack Lager</td>
      <td>52</td>
    </tr> 
    <tr>
      <td>Outback Lager</td>
      <td>15</td>
    </tr> 
    <tr>
      <td>Rhonbrau Kloserbier</td>
      <td>125</td>
    </tr> 
    <tr>
      <td>Lakkalikoori</td>
      <td>57</td>
    </tr>
  </table>
</body>
</html>