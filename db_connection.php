<?php
// Database connection parameters
$host = 'sql208.infinityfree.com'; // database host
$username = 'if0_37517218'; // database username
$password = 'E000212CPSE'; // database password (empty for XAMPP by default)
$database = 'sneakerhub'; // database name

// Create a connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Optional: Set character set to UTF-8
mysqli_set_charset($con, 'utf8');

// You can now use $con to perform database operations