<?php
function reverse($str) {
    $arr = array();
    $order = explode(" ", $str);
    for ($i = 0; $i < sizeof($order); $i++) {
        array_unshift($arr, $order[$i]);
    }
    echo implode(" ", $arr);
}
reverse("Hello it's me");
?>