<?php
function triangle() {
    $x = 0;
    $count = "*";
    while ($x < 8) {
        echo $count;
        echo "<br />";
        $count = $count."*";
        $x++;
    }
}
triangle();
?>