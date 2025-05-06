<?php
        $host = "localhost";
        $user = "root";
        $password = "admin";
        $db = "quanlysv";
        $conn = new mysqli($host, $user, $password, $db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $conn->set_charset("utf8mb4");
?>