<?php

$array = array("abcd","abc","de","hjjj","g","wer");

foreach ($array as $key => $val) {
    $len[] = strlen($val);
}

for ($i = 0; $i < count($len); $i++) {
    $j = $i;
    while ($j > 0 && $len[$j] < $len[$j-1]) {
        $tmp = $len[$j-1];
        $len[$j-1] = $len[$j];
        $len[$j] = $tmp;
        $j--;
    }
}

$low = 0;
$high = count($len) - 1;

echo "The shortest element length is ".$len[$low].". ";
echo "The longest element length is ". $len[$high];

?>