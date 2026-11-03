<?php

$capitals = [
    "Japan" => "Tokyo",
    "France" => "Paris",
    "Canada" => "Ottawa",
    "Brazil" => "Brasilia",
    "Australia" => "Canberra"
];


ksort($capitals);


foreach ($capitals as $country => $capital) {
    echo "<pre>";
    echo "$country: $capital\n";
}
?>