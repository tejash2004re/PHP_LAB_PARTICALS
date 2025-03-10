<?php
$array = [
    [3, 7, 2],
    [8, 5, 1],
    [4, 9, 6]
];

$maxValue = $array[0][0]; // Assume the first element is the max

foreach ($array as $row) {
    foreach ($row as $num) {
        if ($num > $maxValue) {
            $maxValue = $num;
        }
    }
}

echo "Maximum value is: $maxValue";
?>
