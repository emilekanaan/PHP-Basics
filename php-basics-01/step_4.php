<?php 
$name = "Emile";
$position = "Web Developer";
$github_url = "https://github.com/emilekanaan";
echo "Hello, I'm ".$name.", I'm a ".$position." please check my github link ".$github_url;
echo "<br>";
echo "Hello, I'm $name, I'm a $position please check my github link $github_url";
echo "<br>";
$one = "Hello, I'm ";
$two = ", I'm a ";
$three = " please check my github link ";
echo $one . $name . $two . $position . $three . $github_url;
?>