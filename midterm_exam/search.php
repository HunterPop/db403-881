<?php 
    include 'db_connect.php';  //เชื่อมต่อ Server ฐานข้อมูล northwind
?>
    <?php
        $sql = "SELECT CategoryID, CategoryName from categories "; //Select เพื่อดึงข้อมูลจากตาราง categories
        $hand = mysqli_query($conn,$sql); //สร้างตัวแปร $hand ติดต่อฐานข้อมูล
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Element Search</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!--ตกแต่งรูปแบบสี ช่อง-->
    <script src="bootstrap/js/bootstrap.min.js"></script> <!--ตกแต่งรูปแบบสี ช่อง-->
</head>
<body>
    <br><br>
    <div class="container">
        <form action="search.php" method="get"> <!--กำหนดให้actionไปที่หน้าsearch.php ในรูปแบบ method get-->
        <div class="row">
            <div class="col-md-5">
            <select class="form-select" name="key_type" aria-label="Default select example">
            <?php
                while($row=mysqli_fetch_array($hand)){ //ตั้งตัวแปร $row เพื่อดึงข้อมูล
                    echo "<option value='".$row['CategoryID']."'>".$row['CategoryName']."</option>"; 
                    //แสดง $row CategoryID,CategoryName ใส่ในช่อง Search
                }
            ?>
            </select>
            </div>
            <div class="col-md-3">
            <button type="submit" name="btt1" class="btn btn-primary">Search</button>
            </div>
        </div>
        </form>

    </div>
    
</body>
</html>