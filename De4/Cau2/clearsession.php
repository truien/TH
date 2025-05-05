<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    unset($_SESSION['username']); // Xóa biến session
    session_destroy(); // Hủy phiên làm việc
    setcookie('username', '', time() - 3600, "/"); // Xóa cookie nếu có
    echo "<script>alert('Goodbye, $username!');</script>"; // Thông báo người dùng
    echo "<script>window.location.href = 'login.php';</script>"; // Chuyển hướng về trang đăng nhập
} else {
    header('Location: login.php'); // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
    exit();
}
?>