<?php
function vetamgia() {
    $result = '';
    for ($i = 1; $i <= 5; $i++) {
        $result .= str_repeat('*', $i) . "<br>";
    }
    return $result;
}

function tinhtongle($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 === 1) {
            $sum += $i;
        }
    }
    return $sum;
}

function tinhtong2($n) {
    $sum = 0.0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += 1 / (2 * $i);
    }
    return $sum;
}

function giaithua($n) {
    if ($n < 0) return "Không tính được giai thừa số âm";
    if ($n === 0 || $n === 1) return 1;
    return $n * giaithua($n - 1);
}

function kiemtrasonguyento($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) return false;
    }
    return true;
}

function dequytinhtongcacchuso($n) {
    if ($n < 10) return $n;
    return $n % 10 + dequytinhtongcacchuso((int)($n / 10));
}

function gptbacnhat($a, $b) {
    if ($a === 0 && $b !== 0) return "Phương trình vô nghiệm";
    if ($a !== 0 && $b === 0) return "Phương trình có nghiệm x = 0";
    if ($a === 0 && $b === 0) return "Phương trình có vô số nghiệm";
    return "Phương trình có nghiệm x = " . (-$b / $a);
}

function gptbac2($a, $b, $c) {
    if ($a == 0) return gptbacnhat($b, $c);
    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) return "Phương trình vô nghiệm";
    if ($delta == 0) {
        $x = -$b / (2 * $a);
        return "Phương trình có nghiệm kép X = $x";
    }
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    return "Phương trình có 2 nghiệm: X1 = $x1 và X2 = $x2";
}
?>
