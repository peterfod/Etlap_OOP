<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'etlap');

// Create connection
$conn = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if ($conn->connect_error) {
   exit("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>
