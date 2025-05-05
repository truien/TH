<?php
    require_once("./db_connect.php");
    $sqlKhoa = " SELECT * FROM khoavien";
    $resultKhoa = $conn->query($sqlKhoa);
    if (!$resultKhoa) {
        die('Lỗi truy vấn: ' . $conn->error);
    }
    $sqlsinhvien = "SELECT * FROM sinhvien";
    $resultSV = $conn->query($sqlsinhvien);
    if (!$resultSV) {
        die('Lỗi truy vấn: ' . $conn->error);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">    <title>Document</title>
    <style>
    table { border-collapse: collapse; width: 80%; margin-bottom: 20px; }
    th, td { border: 1px solid #666; padding: 8px; text-align: left; }
    th { background: #eee; }
  </style>
</head>
<body class="container my-5">
    <div>
        <table>
            <tr>
                <th colspan="5">Danh sách sinh viên</th>
            </tr>
            <tr>
                <th>Mã SV</th>
                <th>Mã Khoa Viện</th>
                <th>Lớp</th>
                <th>Họ Tên</th>
                <th>Ngày Sinh</th>
            </tr>
            <?php 
            if($resultSV -> num_rows >0){
                while ($row = $resultSV ->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['MaSV']."</td>";
                    echo "<td>".$row['MaKhoaVien']."</td>";
                    echo "<td>".$row['Lop']."</td>";
                    echo "<td>".$row['HoTen']."</td>";
                    echo "<td>".$row['NgaySinh']."</td>";
                    echo "</tr>";   
                }
            }
            ?>
        </table>
        <a class= "btn btn-primary" href ="./addcntt.php">Thêm sinh viên ngành cntt</a>
    </div>
    <div class="mt-2">
        <table>
            <tr>
                <th colspan="5">Danh sách khoa viện</th>
            </tr>
            <tr>
                <th>Mã Khoa Viện</th>
                <th>Tên Khoa Viện</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
            <?php 
            if($resultSV -> num_rows >0){
                while ($row = $resultKhoa ->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row['MaKhoaVien']."</td>";
                    echo "<td>".$row['TenKhoaVien']."</td>";
                    echo "<td>".$row['Phone']."</td>";
                    echo "<td>".$row['Email']."</td>";
                    echo "</tr>";   
                }
            }
            ?>
        </table>
        <a class = "btn btn-info" href ="./cntt.php">Xem tất cả sinh viên ngành cntt</a>
    </div>
</body>
</html>