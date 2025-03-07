<?php
$array = [
    [10, 20, 30],
    [40, 50, 60],
    [70, 80, 90]
];

$maxValue = max(array_map('max', $array));
echo "Maximum value in the multi-dimensional array: $maxValue";
?>
