<?php
function is_power_of_two($num) {
    if(fmod($num, 2) == 0) {
        echo "$num is power of 2";
    } else {
        echo "$num isn't power of 2";
    };
}
is_power_of_two(16);
?>