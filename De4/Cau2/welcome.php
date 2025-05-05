<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header('Location: login.php'); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">  
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5">Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p class="text-center mt-3">This is a protected page. You are logged in.</p>
        <div class="text-center mt-4">
            <a href="clearsession.php" class="btn btn-danger">Logout</a>
        </div>
        <div class="text-center mt-4">
            <a href="index.php" class="btn btn-primary">Back to Home</a>
    </div>
</body>
</html>