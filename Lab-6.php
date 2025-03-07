<?php
$cookie_name = "last_visit";
$cookie_value = date("Y-m-d H:i:s");

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 30 days expiry

if (isset($_COOKIE[$cookie_name])) {
    echo "Last Visited: " . $_COOKIE[$cookie_name];
} else {
    echo "This is your first visit!";
}
?>
