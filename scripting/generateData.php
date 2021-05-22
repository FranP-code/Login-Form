<?php

function generateData($amount, $minCH, $maxCH) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // Credits https://www.geeksforgeeks.org/generating-random-string-using-php/
    $ArrayResult= array();

    for ($i=0; $i < $amount; $i++) {
        $result= '';
        for ($f=0; $f < rand($minCH, $maxCH) ; $f++) { 
            $result = $result . $characters[rand(0, strlen($characters) - 1)];
        }

        array_push($ArrayResult, $result);

    }

    return $ArrayResult;

}

generateData(9, 8, 14);

?>