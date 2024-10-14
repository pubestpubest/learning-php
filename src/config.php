<?php
define('DB_HOST', 'mysql');
define('DB_USER', 'myuser');
define('DB_PASS', 'mypassword');
define('DB_NAME', 'myapp');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}
?>