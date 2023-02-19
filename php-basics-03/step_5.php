<?php
function check($e1, $e2, $di) {
    $rec = 0;
    $dia = 0;
    if (($e1*$e1) + ($e2*$e2) === ($di*$di)) {
        $rec++;
    } elseif ($e1 === $e2) {
        $dia++;
    }
    if($rec > 0) {
        echo "This is a rectangle";
    } elseif ($dia > 0) {
        echo "This is a rhombus";
    }
}
check(3,4,5);
?>