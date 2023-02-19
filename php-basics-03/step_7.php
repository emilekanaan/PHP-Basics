<?php
function print_z() {
    for ($i = 0; $i < 7; $i++) {
        if ($i == 0 || $i == 6) {
            echo "*******";
            
        } else {
            
        for ($j = 0; $j <= $i; $j++) {
           echo $j == $i ? "*" : "&ensp;";
           
        }
        
    }
    echo "<br />";
    }
}
print_z();
?>