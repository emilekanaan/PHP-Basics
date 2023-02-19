<?php
function replace($str) {
    if(strlen($str) > 1000) {
        echo "Text is too long";
    } else {
        $placeholder = str_replace("Python", "PYTHONHOLDER", $str);
        $str = str_replace("PHP", "Python", $placeholder);
        $str = str_replace("PYTHONHOLDER", "PHP", $str);
        echo $str;
    }
}
replace("hello i love Python and I like PHP and you can't agree that Python is better than PHP");
?>