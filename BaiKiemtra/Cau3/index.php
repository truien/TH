<?php
    require_once './db_connect.php';
    $sqlSv = "SELECT * FROM sinhvien";
    $resultSv = $conn->query($sqlSv);
    $sqlKhoa = "SELECT * FROM khoavien";
    $resultKhoa = $conn->query($sqlKhoa);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">    <title>Document</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f0f0f0;
        }
        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th{
            background-color: #4CAF50 !important;
            color: white;
        }
    </style>
</head>
<body class="container my-2">
    <h2 class="text-center py-3">Quản lý sinh viên</h2>
    <div class="mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="5" class="text-center">Danh sách sinh viên</th>
                <tr>
                    <th>MSSV</th>
                    <th>Mã khoa viện</th>
                    <th>Lớp</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($resultSv->num_rows > 0){
                        while($row = $resultSv->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$row['MaSV']."</td>";
                            echo "<td>".$row['MaKhoaVien']."</td>";
                            echo "<td>".$row['Lop']."</td>";
                            echo "<td>".$row['HoTen']."</td>";
                            echo "<td>".$row['NgaySinh']."</td>";
                            echo "</tr>";
                        }
                    }else{
                        echo "<tr><td colspan='6' class='text-center'>Không có dữ liệu</td></tr>";
                    }
                ?>
            </tbody>
    </div>
    <div class="mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th colspan="5" class="text-center">Danh sách khoa viện</th>
                <tr>
                    <th>Mã khoa viện</th>
                    <th>Tên khoa viện</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($resultKhoa->num_rows > 0){
                        while($row = $resultKhoa->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$row['MaKhoaVien']."</td>";
                            echo "<td>".$row['TenKhoaVien']."</td>";
                            echo "<td>".$row['Phone']."</td>";
                            echo "<td>".$row['Email']."</td>";
                            echo "<td><a href='editKhoa.php?makhoavien=".$row['MaKhoaVien']."' class='btn btn-primary'>Sửa</a></td>";
                            echo "</tr>";
                        }
                    }else{
                        echo "<tr><td colspan='6' class='text-center'>Không có dữ liệu</td></tr>";
                    }
                ?>
            </tbody>
                </table>
    </div>
    <div>
    <button class= "btn btn-success " ><a href="./DeleteSV.php" style=" text-decoration: none;color:black;">Xóa sinh viên ngành luật</a></button>
    </div>
</body>
</html>