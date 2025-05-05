<?php
$error   = [];
$success = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username'])
        ? htmlspecialchars(trim($_POST['username']), ENT_QUOTES, 'UTF-8')
        : '';
    $password = isset($_POST['password'])
        ? htmlspecialchars(trim($_POST['password']), ENT_QUOTES, 'UTF-8')
        : '';
    if ($username === '' || $password === '') {
        $error[] = 'Vui lòng nhập đầy đủ cả username và password.';
    } elseif ($username === 'admin' && $password === 'admin') {
        $success[] = 'Đăng nhập thành công!';
    } else {
        $error[] = 'Tài khoản hoặc mật khẩu sai.';
    }
}
?>