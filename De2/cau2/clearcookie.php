<?php
session_start();
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, "/"); 
    unset($_COOKIE['username']); // Xóa cookie khỏi biến toàn cục
    session_destroy(); // Hủy phiên làm việc
    header('Location: login.php'); // Chuyển hướng về trang đăng nhập
    exit();
}
