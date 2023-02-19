<?php
$first_name = "Emile";
$last_name = "Kanaan";
function swap(&$var1, &$var2) {
    $first = $var1;
    $second = $var2;
    $var1 = $second;
    $var2 = $first;
}
swap($first_name, $last_name);
echo "first name: ", $first_name, "<br />";

echo "last name: ", $last_name;
?>