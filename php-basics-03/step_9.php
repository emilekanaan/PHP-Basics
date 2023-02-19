<?php
$transactions = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
);
$ids = array();
$debits = array();
$credits = array();
foreach ($transactions as $person) {
    foreach ($person as $key => $value) {
        if ($key == "id") {
            array_push($ids, $value);
        }
        if($key == "debit") {
            array_push($debits, $value);
        }
        if ($key == "credit") {
            array_push($credits, $value);
        }
    }
}
for ($i = 0; $i < sizeof($ids); $i++) {
    echo "ID: ".$ids[$i]." => amount: ".$debits[$i] - $credits[$i];
    echo "<br />";
} 
?>