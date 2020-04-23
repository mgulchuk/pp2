<?php
function printArr($array){
    foreach($array as $value){
        echo "$value<br>";
    }
}

function largest($array){
    echo "largest number: " . max($array);
    echo "<br>";
}

function removeDups($array){
    $array = array_unique($array);
    foreach($array as $value){
        echo "$value<br>";
    }
}

function distribution($array){
    sort($array);
    $array = array_count_values($array);
    foreach($array as $key => $value) {
        echo $key . " => " . $value . ", ";
    }
}