<?php
$conn = new mysqli('db403-mysql', 'root', 'P@ssw0rd', 'northwind');
if ($conn->connect_errno) {
    die($conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>db_connect.php</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "username";
        $password = "password";

            // Create connection
        $conn = db_connect($servername, $username, $password);

            // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
    ?>
    
</body>
</html>