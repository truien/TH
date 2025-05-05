<?php
        require_once "./db_connect.php" ;
        $sqlCNTT = "SELECT * FROM sinhvien WHERE MaKhoaVien = 'CNT'";
        $resultCNTT = $conn->query($sqlCNTT);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinh viên ngành cntt</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin-bottom: 20px; }
        th, td { border: 1px solid #666; padding: 8px; text-align: left; }
        th { background: #eee; }
    </style>
</head>
<body>
    <div>
        <table>
            <tr>
                <th colspan ="5" style = "text-align:center;" >Sinh viên ngành cntt</th>
            </tr>
            <tr>
                <th>Mã SV</th>
                <th>Mã Khoa Viện</th>
                <th>Lớp</th>
                <th>Họ Tên</th>
                <th>Ngày Sinh</th>
            </tr>
            <?php
                if($resultCNTT->num_rows >0){
                    while ($row = $resultCNTT->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row['MaSV']."</td>";
                        echo "<td>".$row['MaKhoaVien']."</td>";
                        echo "<td>".$row['Lop']."</td>";
                        echo "<td>".$row['HoTen']."</td>";
                        echo "<td>".$row['NgaySinh']."</td>";
                        echo "</tr>";
                    }
                }
                else {
                    echo "<tr><td colspan='5'>Không có dữ liệu</td></tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>