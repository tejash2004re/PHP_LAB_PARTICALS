<?php
$age = 18; // Change this value to test

if ($age < 18) {
    echo "You are a minor.";
} elseif ($age >= 18 && $age <= 60) {
    echo "You are an adult.";
} else {
    echo "You are a senior citizen.";
}
?>
