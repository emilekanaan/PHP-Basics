<?php
$personal_details=array("name" => "Rajesh Rao", "occupation" => "Engineer", "age" => 39, "country" => "India");
function details($personal_details) {
    foreach ( $personal_details as $key => $value )
    {
    echo "$key=$value\n";
    echo "<br />";
    }
}
details($personal_details);
?>