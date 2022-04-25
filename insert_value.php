<?php

$array1 = array(1, 2, 3, 4, 5);

$insert = "$";
$position = 1;

foreach ($array1 as $key => $val) {
    if ($position == $key) {
        $array[$position] = $insert;
    }
    $array[] = $val;
}

print_r($array);

?>