<?php

$siteurl = "http://localhost/trainingced/register/";


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "gue55me";
$dbname = "quiz";

// Create connection
$conn = new mysqli($dbhost, $dbuser,  $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}

//echo "success";

?>