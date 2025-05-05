<?php
session_start();
$errors = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    if($username == 'admin' && $password == '1234'){
        $_SESSION['username'] = $username;
        setcookie('username', $username, time() + (86400 * 30), "/"); 
        header('Location: welcome.php');
        exit();
    } else {
        $errors[] = "Invalid username or password";
    }
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
    <form class ="m-5" action="" method="post">
        <div class ='mb-2' >Username: <input type="text" name="username"><br></div> 
        <div class = 'mb-2'>Password: <input type="password" name="password"><br></div> 
        <input type="submit" value="Login">
    </form>
    <?php if(!empty($errors)): ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach($errors as $error): ?>
                <p><?php echo $error; ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</body>
</html>