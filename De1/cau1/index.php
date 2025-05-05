<?php
include_once "./Cau1.php";
$result = '';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action'])) {
    $act = $_GET['action'];
    switch ($act) {
        case 'draw_rectangle':
            $w = (int)($_GET['chieu_rong'] ?? 0);
            $h = (int)($_GET['chieu_dai'] ?? 0);
            for ($i = 1; $i <= $w; $i++) {
                if ($i === 1 || $i === $w) {
                    $result .= str_repeat('*', $h) . "<br>";
                } else {
                    $result .= '*' . str_repeat(" &nbsp;", $h - 2) . "*<br>";
                }
            }
            break;

        case 'sum_odd':
            $n = (int)($_GET['n'] ?? 0);
            $result = "Tổng số lẻ từ 1 đến $n là " . tinhtongle($n);
            break;

        case 'sum_series':
            $n = (int)($_GET['n'] ?? 0);
            $result = "S = " . tinhtong2($n);
            break;

        case 'factorial':
            $n = (int)($_GET['n'] ?? 0);
            $result = "Giai thừa của $n là " . giaithua($n);
            break;

        case 'prime_check':
            $n = (int)($_GET['n'] ?? 0);
            $result = kiemtrasonguyento($n)
                ? "Số $n là số nguyên tố"
                : "Số $n không phải số nguyên tố";
            break;

        case 'sum_digits':
            $n = (int)($_GET['n'] ?? 0);
            $result = "Tổng các chữ số của $n là " . dequytinhtongcacchuso($n);
            break;

        case 'linear_eq':
            $a = (int)($_GET['a'] ?? 0);
            $b = (int)($_GET['b'] ?? 0);
            $result = gptbacnhat($a, $b);
            break;

        case 'quadratic_eq':
            $a = (int)($_GET['a'] ?? 0);
            $b = (int)($_GET['b'] ?? 0);
            $c = (int)($_GET['c'] ?? 0);
            $result = gptbac2($a, $b, $c);
            break;

        default:
            $result = 'Hành động không hợp lệ.';
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài tập PHP</title>
</head>
<body>
    <?php if ($result): ?>
        <div style="padding:1em; background:#f0f0f0; margin-bottom:1em;">
            <?= $result ?>
        </div>
    <?php endif ?>

    <h4>Vẽ hình chữ nhật</h4>
    <form method="get">
        <input type="hidden" name="action" value="draw_rectangle">
        Chiều rộng: <input name="chieu_rong" type="text">
        Chiều dài: <input name="chieu_dai" type="text">
        <button type="submit">Vẽ</button>
    </form>

    <h4>Tổng các số lẻ từ 1 đến n</h4>
    <form method="get">
        <input type="hidden" name="action" value="sum_odd">
        n: <input name="n" type="text">
        <button type="submit">Tính</button>
    </form>

    <h4>Tổng S = 1/2 + 1/4 + … + 1/(2*n)</h4>
    <form method="get">
        <input type="hidden" name="action" value="sum_series">
        n: <input name="n" type="text">
        <button type="submit">Tính</button>
    </form>

    <h4>Giai thừa của n</h4>
    <form method="get">
        <input type="hidden" name="action" value="factorial">
        n: <input name="n" type="text">
        <button type="submit">Tính</button>
    </form>

    <h4>Kiểm tra số nguyên tố</h4>
    <form method="get">
        <input type="hidden" name="action" value="prime_check">
        n: <input name="n" type="text">
        <button type="submit">Kiểm tra</button>
    </form>

    <h4>Tổng các chữ số của n</h4>
    <form method="get">
        <input type="hidden" name="action" value="sum_digits">
        n: <input name="n" type="text">
        <button type="submit">Tính</button>
    </form>

    <h4>Giải phương trình bậc nhất</h4>
    <form method="get">
        <input type="hidden" name="action" value="linear_eq">
        a: <input name="a" type="text">
        b: <input name="b" type="text">
        <button type="submit">Giải</button>
    </form>

    <h4>Giải phương trình bậc hai</h4>
    <form method="get">
        <input type="hidden" name="action" value="quadratic_eq">
        a: <input name="a" type="text">
        b: <input name="b" type="text">
        c: <input name="c" type="text">
        <button type="submit">Giải</button>
    </form>
</body>
</html>
