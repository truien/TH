<?php
$host   = 'localhost';
$user   = 'root';
$pass   = 'admin';
$dbname = 'quanlysv';
$conn = new mysqli($host,$user,$pass,$dbname);
if($conn ->connect_error){
    die('Connect Error: '>$conn->connect_error);
}
$conn->set_charset('utf8mb4');
?>

