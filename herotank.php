<?php 

$heroTank = [
    "name" => ["udin", "asrul"],
    "tipe" => ["galak","baik"],
    "umur" => [40, 39],
];



//iterasi
foreach ($heroTank as $key => $value) {
    foreach ($value as $val) {
        echo $val;
        echo "<br />";
    }
    echo "<br />";
}
