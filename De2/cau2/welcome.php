<!--  Tạo page login.html cho phép nhập user và password trong đó sử dụng phương 
thức POST gửi thông tin đăng nhập lên server. Tạo page welcome.php nhận dữ liệu gửi lên, tạo 
cookie lưu trữ tên tài khoản, hiển thị tên tài khoản lên trình duyệt. Tạo page clearcookie.php để 
xóa cookie đã tạo. -->
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
if (isset($_COOKIE['username'])) {
    $username = htmlspecialchars($_COOKIE['username']);
} else {
    $username = 'Guest';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome, <?php echo $username; ?>!</h1>
        <p><a href="clearcookie.php" class="btn btn-danger">Logout</a></p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-7+Q1j6v4x2z
        +4+6+7+8+9+0+1+2+3+4+5+6+7+8+9+0" crossorigin="anonymous"></script>
</body>
</html>
<?php


