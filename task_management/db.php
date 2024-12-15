<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'task_db';

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/* echo "Connected successfully to the database.";*/
?>
