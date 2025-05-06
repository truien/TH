<?php
    require_once('db_connect.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $masv = $_POST['masv'];
        $sql = "DELETE FROM sinhvien WHERE MaSV='$masv'";
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Xóa thành công!');</script>";
        } else {
            echo "<script>alert('Xóa thất bại!');</script>";
        }
    }
    $sql = "SELECT * FROM sinhvien 
    INNER JOIN khoavien ON sinhvien.MaKhoaVien = khoavien.MaKhoaVien    
    WHERE khoavien.TenKhoaVien = 'Ngành Luật Học'";
    $resultSv = $conn->query($sql);

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous"> 
</head>
<body>
    <div class ="container">
        <h2 class="text-center">Danh sách sinh viên</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>MSSV</th>
                    <th>Mã khoa viện</th>
                    <th>Lớp</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Hành động</th>
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
                            echo '<td><form method="POST" action="deleteSV.php"><input type="hidden" name="masv" value="'.$row['MaSV'].'"><button type="submit" class="btn btn-danger">Xóa</button></form></td>';
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>Không có dữ liệu</td></tr>";
                    }
                ?>
            </tbody>
        </table>
        <div class="text-center mt-3">
            <a href="index.php" class="btn btn-primary">Quay lại</a>
        </div>    
    </div>
</body>
</html>