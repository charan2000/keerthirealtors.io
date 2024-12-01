<?php
$servername = "localhost";
$username = "keervbnt_keerthi";
$password = "-mVstMjk%A++";
$dbname = "keervbnt_keerthirealtors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>