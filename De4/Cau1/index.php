<?php
    function gptbacnhat($a,$b){
        if($a == 0 && $b == 0){
            return "Phương trình vô số nghiệm";
        }else if($a == 0 && $b != 0){
            return "Phương trình vô nghiệm";
        }else{
            return "Phương trình có nghiệm x = ". -$b/$a;
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
    <div class="container mt-5">
        <h2 class="text-center">Giải phương trình bậc nhất</h2>
        <form method="POST" action="">
            <div class="form-group">
                <label for="a">Nhập hệ số a:</label>
                <input type="number" class="form-control" id="a" name="a" required> 
            </div>
            <div class="form-group">
                <label for="b">Nhập hệ số b:</label>
                <input type="number" class="form-control" id="b" name="b" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Giải</button>
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $a = $_POST['a'];
                $b = $_POST['b'];
                $result = gptbacnhat($a, $b);
                echo "<div class='mt-3'>";
                echo "<h4 class='text-center'>Kết quả: $result</h4>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>