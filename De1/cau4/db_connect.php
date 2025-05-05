<?php
$host   = 'localhost';
$user   = 'root';
$pass   = 'admin';
$dbname = 'DHV';

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die('Kết nối thất bại: ' . $conn->connect_error);
}
$conn->set_charset('utf8mb4');
?>
