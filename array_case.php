<?php

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

foreach ($Color as $key => $value) {
    $upper[$key] = strtoupper($value);
    $lower[$key] = strtolower($value);
}

echo "Values are in lower case.<br>";
print_r($lower);
echo "<br>";
echo "Values are in upper case.<br>";
print_r($upper);

?>