<?php
function isArmstrong($num) {
    $string = strval($num);
    if ($string[0]**3 + $string[1]**3 + $string[2]**3 == $num) {
        echo "true";
    } else {
        echo "false";
    };    
}
isArmstrong(153);
?>