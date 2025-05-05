<?php
require 'db_connect.php';

// Lấy sinh viên có TenKhoaVien = 'Công nghệ Thông tin'
$sql = "
  SELECT s.MaSV, s.HoTen, s.Lop
  FROM sinhvien AS s
  JOIN khoavien AS kv ON s.MaKhoaVien = kv.MaKhoaVien
  WHERE kv.TenKhoaVien = 'Công nghệ Thông tin'
";
$res = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Sinh viên ngành CNTT</title>
  <style>
    table { border-collapse: collapse; width: 80%; margin-bottom: 20px; }
    th, td { border: 1px solid #666; padding: 8px; text-align: left; }
    th { background: #eee; }
  </style>
</head>
<body>
  <h1>Danh sách sinh viên ngành CNTT</h1>
  <table>
    <tr><th>Mã SV</th><th>Họ Tên</th><th>Lớp</th></tr>
    <?php if($res->num_rows): ?>
      <?php while($s = $res->fetch_assoc()): ?>
        <tr>
          <td><?= $s['MaSV'] ?></td>
          <td><?= $s['HoTen'] ?></td>
          <td><?= $s['Lop'] ?></td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="3">Không có sinh viên CNTT nào.</td></tr>
    <?php endif; ?>
  </table>
</body>
</html>
