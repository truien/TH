<?php
    $localhost = "localhost";
    $username = "root";
    $password = "admin";
    $database = "quanlysv";
    $conn = new mysqli($localhost, $username, $password, $database);
    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    } 