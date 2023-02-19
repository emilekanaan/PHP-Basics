<?php
function factorial($num) {
    if ($num < 1) {
        echo "Please enter a positive number bigger than 1";
    } else {
        $result = $num;
        while ($num > 1) {
            $result *= $num - 1;
            $num--;
        }
        echo $result;
    }
}
factorial(6);
?>