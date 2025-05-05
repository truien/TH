<?php
function tinhtong($n){
    $sum = 0;
    for ($i=0; $i <$n ; $i++) { 
        if($i%2 != 0){
            $sum += $i;
        }
    }
    return $sum;
}
$result = [];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $n = $_POST['n'];
    if ($n<2) {
        $result[] = "Vui lòng nhập số lớn hơn 2";
    } else {
        $result[] = "Tổng số lẻ từ 1 đến ".$n. " là: ". tinhtong($n);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng số lẻ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>
    <div class="container mt-5">
        <h2>Tính tổng số lẻ từ 1 đến n</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="n">Nhập số n:</label>
                <input type="number" class="form-control" id="n" name="n" required>
            </div>
            <button type="submit" class="btn btn-primary">Tính</button>
        </form>
        <div class="mt-3">
            <?php if (!empty($result)): ?>
                <div class="alert alert-info">
                    <?php foreach ($result as $message): ?>
                        <p><?php echo $message; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
</body>