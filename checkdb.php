<?php

header("Content-type: text/plain");

$host = "172.17.0.1";
$user = "root";
$pass = "Sup3Rp4sS";

echo "Connect to MySQL server:\n";

$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


?>
