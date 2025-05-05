<?php
require 'db_connect.php';
$keyword = isset($_GET['keyword']) ? $conn->real_escape_string($_GET['keyword']) : '';

if ($keyword !== '') {
  $sql = "
    SELECT s.MaSV, s.HoTen, s.Lop, kv.TenKhoaVien
    FROM sinhvien AS s
    JOIN khoavien AS kv ON s.MaKhoaVien = kv.MaKhoaVien
    WHERE s.HoTen LIKE '%{$keyword}%'
  ";
  $res = $conn->query($sql);
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Tìm kiếm sinh viên</title>
  <style> /* tương tự index.php */ </style>
</head>
<body>
  <h1>Tìm kiếm sinh viên theo họ tên</h1>
  <form method="get">
    <input type="text" name="keyword" placeholder="Nhập họ tên..." value="<?= htmlspecialchars($keyword) ?>">
    <button type="submit">Tìm</button>
  </form>

  <?php if ($keyword !== ''): ?>
    <h2>Kết quả tìm kiếm cho “<?= htmlspecialchars($keyword) ?>”</h2>
    <?php if ($res->num_rows): ?>
      <table>
        <tr><th>Mã SV</th><th>Họ Tên</th><th>Lớp</th><th>Khoa/Viện</th></tr>
        <?php while($s = $res->fetch_assoc()): ?>
          <tr>
            <td><?= $s['MaSV'] ?></td>
            <td><?= $s['HoTen'] ?></td>
            <td><?= $s['Lop'] ?></td>
            <td><?= $s['TenKhoaVien'] ?></td>
          </tr>
        <?php endwhile; ?>
      </table>
    <?php else: ?>
      <p>Không tìm thấy sinh viên nào.</p>
    <?php endif; ?>
  <?php endif; ?>
</body>
</html>
