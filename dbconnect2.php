<?php

$servername = "localhost";
$username = "pshanker1";
$password = "pshanker1";
$dbname = "pshanker1";


// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
} 
?>