<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];

    echo "First Name: " . $fname . "<br>";
    echo "Last Name: " . $lname . "<br>";
}
?>