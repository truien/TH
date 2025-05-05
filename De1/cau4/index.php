<?php
require 'db_connect.php';

$sql_khoa = "SELECT * FROM khoavien";
$res_khoa = $conn->query($sql_khoa);

$sql_sv = "
  SELECT s.MaSV, s.HoTen, s.Lop, kv.TenKhoaVien
  FROM sinhvien AS s
  JOIN khoavien AS kv ON s.MaKhoaVien = kv.MaKhoaVien
";
$res_sv = $conn->query($sql_sv);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>QL Sinh viên – Danh sách</title>
  <style>
    table { border-collapse: collapse; width: 80%; margin-bottom: 20px; }
    th, td { border: 1px solid #666; padding: 8px; text-align: left; }
    th { background: #eee; }
  </style>
</head>
<body>
  <h1>Danh sách khoa/viện</h1>
  <table>
    <tr><th>Mã KV</th><th>Tên Khoa/Viện</th><th>Phone</th><th>Email</th></tr>
    <?php while($k = $res_khoa->fetch_assoc()): ?>
      <tr>
        <td><?= $k['MaKhoaVien'] ?></td>
        <td><?= $k['TenKhoaVien'] ?></td>
        <td><?= $k['Phone'] ?></td>
        <td><?= $k['Email'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>

  <h1>Danh sách tất cả sinh viên</h1>
  <table>
    <tr><th>Mã SV</th><th>Họ Tên</th><th>Lớp</th><th>Khoa/Viện</th></tr>
    <?php while($s = $res_sv->fetch_assoc()): ?>
      <tr>
        <td><?= $s['MaSV'] ?></td>
        <td><?= $s['HoTen'] ?></td>
        <td><?= $s['Lop'] ?></td>
        <td><?= $s['TenKhoaVien'] ?></td>
      </tr>
    <?php endwhile; ?>
  </table>
</body>
</html>
