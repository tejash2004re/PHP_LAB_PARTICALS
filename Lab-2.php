<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    if (!empty($name) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "✅ Welcome, $name! Your email ($email) is valid.";
    } else {
        echo "❌ Invalid input. Please enter correct details.";
    }
}
?>
<html>
    <body>
    <form method="POST">
        <input type="text" name="name">
        <br><br>
        <input type="email" name="email">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

