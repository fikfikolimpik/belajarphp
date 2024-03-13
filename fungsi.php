<?php

function luadSegitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

echo luadSegitiga(5,3);
