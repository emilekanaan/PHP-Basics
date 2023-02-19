<?php

function greaterFn($num){
  if ($num > 30) {
      return "$num is greater than 30";
  } elseif ($num > 20) {
      return "$num is greater than 20";
  } elseif ($num > 10) {
      return "$num is greater than 10";
  } else {
      return "$num is less than 10";
  }
}
echo greaterFn(40); // 40 is greater than 30
echo "<br />";
echo greaterFn(21); // 21 is greater than 20
echo "<br />";
echo greaterFn(12); // 12 is greater than 10
echo "<br />";
echo greaterFn(8);  // 8 is less than 10

?>