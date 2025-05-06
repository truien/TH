<?php
// header.php
date_default_timezone_set('Asia/Ho_Chi_Minh');
$ngay = date('d');
$thang = date('m');
$nam = date('Y');
$gio = date('H:i:s');
?>
<header style="text-align:center; padding:20px; background:#f0f0f0;">
  <img src="./logo_dhv.png" alt="Logo Đại học Vinh" style="height:80px;">
  <h1>Ngành Công nghệ Thông tin – Viện Kỹ thuật và Công nghệ</h1>
  <p>Ngành CNTT đào tạo kỹ sư có khả năng phân tích, thiết kế, phát triển và quản trị hệ thống phần mềm, mạng máy tính và các ứng dụng công nghệ số.</p>
  <p>Hôm nay: <?= "$ngay/$thang/$nam" ?> — Bây giờ: <?= $gio ?></p>
</header>
