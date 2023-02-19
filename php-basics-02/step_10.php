<?php
function palindrome_checker($str) {
    if(strrev($str) == $str) {
        echo "True! $str is a palindrome";
    } else {
        echo "False! $str is not a palindrome";
    };
}
palindrome_checker("Hello");
?>