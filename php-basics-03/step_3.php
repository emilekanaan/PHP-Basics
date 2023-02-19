<?php
function word_iteration($text, $word) {
    $array = explode(" ", $text);
    $length = count($array);
    $i = 0;
    while ($i <= $length) {
        if ($array[$i] != $word) {
            unset($array[$i]);
            $i++;
        } else {
            $i++;
        }
    }
    echo count($array);
}
$something = "rock and roll and hide and seek";
word_iteration($something, "and");
?>