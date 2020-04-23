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