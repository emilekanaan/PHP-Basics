<?php
function is_prime($num) {
    $x = 2;
    while ($x < $num) {
        if ($num % $x == 0) {
            return "False";
        } else {
            $x++;
            if($x == $num) {
                return "True";
                break;
            }
        }
    }
    return "True";
      
}
echo is_prime(4);
?>