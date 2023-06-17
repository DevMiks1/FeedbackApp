<?php
require('./database.php');

// Set the default time zone to "Asia/Manila"
date_default_timezone_set('Asia/Manila');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST["body"];

    // Get the current timestamp in the specified time zone
    $timestamp = date('Y-m-d H:i:s');

    $queryTable = "INSERT INTO feedback (name, email, feedback, date) VALUES ('$name', '$email', '$feedback', '$timestamp')";
    $sqlCreate = mysqli_query($connection, $queryTable);

    header('Location: /php/index.php');
}
?>
