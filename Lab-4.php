<?php
function gcd($a, $b) {
    return ($b == 0) ? $a : gcd($b, $a % $b);
}

$num1 = 56;
$num2 = 98;

echo "GCD of $num1 and $num2 is: " . gcd($num1, $num2);
?>
