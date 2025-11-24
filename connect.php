<?php
    $servername = "mysql_db";
    $username = "root";
    $password = "root";
    $dbname = "webbansach";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
    echo"Connected Fail";
    }
    // echo "Connected successfully";
?>

