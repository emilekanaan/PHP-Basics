<?php
function sumOfDigits($num) {
    $number = (string)$num;
    $length = strlen($number);
    $sum = 0;
    for ($i = 0; $i < $length; $i++) {
        $sum += $number[$i];
    }
    return $sum;
}
echo sumOfDigits(54321);
?>