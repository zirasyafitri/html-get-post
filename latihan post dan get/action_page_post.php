<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    echo "First Name: " . $fname . "<br>";
    echo "Last Name: " . $lname . "<br>";
}
?>