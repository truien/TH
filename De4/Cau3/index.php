<?php
    require_once 'db_connect.php';
    $sqlSV = "SELECT * FROM sinhvien";
    $resultSV = $conn->query($sqlSV);
    $sqlKhoa = "SELECT * FROM khoavien";
    $resultKhoa = $conn->query($sqlKhoa);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    
</body>
</html>