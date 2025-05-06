<?php
    require_once('./db_connect.php');
    $makv = $_GET['makhoavien'];
    $sql = "SELECT * FROM khoavien WHERE MaKhoaVien='$makv'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $makhoavien = $_POST['makhoavien'];
        $tenkhoavien = $_POST['tenkhoavien'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $sql = "UPDATE khoavien SET  TenKhoavien='$tenkhoavien', Phone='$phone', Email='$email' WHERE MaKhoaVien='$makhoavien'";
        if($conn->query($sql) === TRUE){
            echo "<script>alert('Cập nhật thành công!');</script>";
        } else {
            echo "<script>alert('Cập nhật thất bại!');</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f0f0f0;
        }
        table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td{
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th{
            background-color: #4CAF50;
            color: white;
        }
        .container{
            margin-top: 50px;
        }
        .form-group{
            margin-bottom: 15px;
        }
        .form-control{
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .btn-primary{
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
        }
        .btn-primary:hover{
            background-color: #0056b3;
        }
        .btn-secondary{
            background-color: #6c757d;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 5px;
        }
        .btn-secondary:hover{
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Cập nhật thông tin khoa viện</h2>
        <form method="POST" action="editKhoa.php?makhoavien=<?php echo $makv; ?>">
            <div class="form-group">
                <label for="makhoavien">Mã khoa viện:</label>
                <input type="text" class="form-control" id="makhoavien" name="makhoavien" value="<?php echo $row['MaKhoaVien']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="tenkhoavien">Tên khoa viện:</label>
                <input type="text" class="form-control" id="tenkhoavien" name="tenkhoavien" value="<?php echo $row['TenKhoaVien']; ?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['Phone']; ?>">
                </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['Email']; ?>">
                </div>
            <input type="submit" value="Cập nhật" class="btn btn-primary">
    </form>
        <a href="index.php" class="btn btn-secondary">Quay lại</a>
    </div>
</body>
</html>