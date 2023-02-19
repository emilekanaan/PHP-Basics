<?php
function digits_sum($num) {
    $str = (string)$num;
    $result = 0;
    for ( $i=0; $i < strlen($str); $i++) {
        $result += $str[$i];
    }
    echo $result;
}
digits_sum(9999);
?>