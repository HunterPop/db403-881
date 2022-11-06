<?php 
    include 'db_connect.php'; //เชื่อมต่อ Server ฐานข้อมูล northwind
?>
    <?php
        $sql="SELECT * FROM categories"; //Select เพื่อดึงข้อมูลจากตาราง categories
        $hand = mysqli_query($conn,$sql); //สร้างตัวแปร $hand ติดต่อฐานข้อมูล
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> <!--ตกแต่งรูปแบบสี ช่อง-->
    <script src="bootstrap/js/bootstrap.min.js"></script> <!--ตกแต่งรูปแบบสี ช่อง-->
</head>
<body>
    <br><br>
    <div class="container">
        <form action="product.php" method="POST"> <!--กำหนดให้actionไปที่หน้าproduct.php ในรูปแบบ method POST-->
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
            <button type="submit" name="btt1" class="btn btn-primary">Search</button> <!--ปุ่ม Search-->
            <button type="submit" name="btt2" class="btn btn-primary">All</button> <!--ปุ่ม All-->
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-md-3">
               <table class="table table-striped table-hover">
                <tr>
                    <th>Product Name</th>
                    <th>UnitsIn Stock</th>
                 </tr>
            <?php
                $keyType = @$_POST['key_type'];
                    if(isset($_POST['btt1'])){ //ใช้คำสั่ง isset($_POST['btt1']) ตรวจสอบตัวแปร btt1
                        $sql="SELECT * FROM categories c, products p WHERE c.CategoryID=p.ctr_id and c.CategoryID='$keyType' ORDER BY CategoryID";
                    }elseif(isset($_POST['btt2'])){ //ใช้คำสั่ง isset($_POST['btt2']) ตรวจสอบตัวแปร btt2
                        $sql="SELECT * FROM categories c, products p WHERE c.CategoryID=p.ctr_id ORDER BY CategoryID";
                    }else{
                        $sql="SELECT * FROM categories c, products p WHERE c.CategoryID=p.ctr_id ORDER BY CategoryID";
                    }
                    
                    $hand = mysqli_query($conn,$sql); //ตัวแปร $hand ติดต่อฐานข้อมูล 
                        while($row=mysqli_fetch_array($hand)){ //ตั้งตัวแปร $row เพื่อดึงข้อมูล
                            echo "<tr>"; 
                            echo "<td>".$row['ProductName']."</td>"; //เรียกแสดงข้อมูล ProductName
                            echo "<td>".$row['UnitsInStock']."</td>"; //เรียกแสดงข้อมูล UnitsInStock
                            echo "</tr>";
                        }
                    mysqli_close($conn); //ปิดการติดต่อฐานข้อมูล 
            ?>
        </div>
    </div>
</body>
</html>