<?php
/*
 * Michael Gulchuk
 * 4/17/20
 * https://mgulchuk.greenriverdev.com/IT328/pp2/index.php
 */

echo "PHP Array Practice";
echo "<br>";
echo "<br>";
$numbers = array(7, 9, 8, 9, 8, 8, 6);
function printArr($array){
    foreach($array as $value){
        echo "$value<br>";
    }
}

printArr($numbers);