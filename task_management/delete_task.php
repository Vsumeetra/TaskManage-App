<?php
include 'db.php';

$id = $_GET['id'];
$query = "DELETE FROM tasks WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
