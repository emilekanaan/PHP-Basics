<?php
$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);
$ids = array();
$names = array();
$emails = array();
foreach ($transactions as $person) {
    foreach ($person as $key => $value) {
        if ($key == "id") {
            array_push($ids, $value);
        }
        if($key == "name") {
            array_push($names, $value);
        }
        if ($key == "email") {
            array_push($emails, $value);
        }
    }
}
for ($i = 0; $i < sizeof($ids); $i++) {
    echo "ID: ".$ids[$i].", name: ".$names[$i].", email: " . $emails[$i];
    echo "<br />";
} 
?>