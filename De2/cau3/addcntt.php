<?php
require_once './db_connect.php';

$errors   = [];
$messages = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $MaSV        = $conn->real_escape_string(trim($_POST['masv']));
    $MaKhoaVien  = 'CNT';
    $Lop         = $conn->real_escape_string(trim($_POST['lop']));
    $HoTen       = $conn->real_escape_string(trim($_POST['hoten']));
    $NgaySinh    = $conn->real_escape_string(trim($_POST['ngaysinh']));

    if ($MaSV !== '' && $Lop !== '' && $HoTen !== '' && $NgaySinh !== '') {
        $sqlAdd = "
            INSERT INTO sinhvien 
            (MaSV, MaKhoaVien, Lop, HoTen, NgaySinh)
            VALUES
            ('$MaSV', '$MaKhoaVien', '$Lop', '$HoTen', '$NgaySinh')
        ";
        if ($conn->query($sqlAdd) === TRUE) {
            $messages[] = 'Thêm sinh viên thành công.';
        } else {
            $errors[] = 'Lỗi khi thêm sinh viên: ' . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thêm sinh viên CNTT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
  <div class="container py-4">

    <h1 class="mb-4">Thêm sinh viên ngành CNTT</h1>

    <!-- Hiển thị lỗi và thành công -->
    <?php foreach ($errors as $err): ?>
      <div class="alert alert-danger"><?= htmlspecialchars($err) ?></div>
    <?php endforeach; ?>
    <?php foreach ($messages as $msg): ?>
      <div class="alert alert-success"><?= htmlspecialchars($msg) ?></div>
    <?php endforeach; ?>

    <form action="" method="post" class="row g-3">

      <div class="col-md-6">
        <label for="masv" class="form-label">Mã sinh viên</label>
        <input type="text" class="form-control" id="masv" name="masv" required>
      </div>

      <div class="col-md-6">
        <label for="lop" class="form-label">Lớp</label>
        <input type="text" class="form-control" id="lop" name="lop" required>
      </div>

      <div class="col-md-6">
        <label for="hoten" class="form-label">Họ tên</label>
        <input type="text" class="form-control" id="hoten" name="hoten" required>
      </div>

      <div class="col-md-6">
        <label for="ngaysinh" class="form-label">Ngày sinh</label>
        <input type="text" class="form-control" id="ngaysinh" name="ngaysinh" required>
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Thêm sinh viên</button>
      </div>

    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoKmWmHbt7fmltI4P5GV4G5aKNZv+0xAzAn1uXWwDpnPEn+" crossorigin="anonymous"></script>
</body>
</html>
