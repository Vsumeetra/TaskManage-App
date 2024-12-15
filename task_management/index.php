<?php
include 'db.php';

$query = "SELECT * FROM tasks";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Task List</h1>
    <a href="add_task_form.html">Add New Task</a>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Status</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
        <?php while ($task = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?= htmlspecialchars($task['title']) ?></td>
                <td><?= htmlspecialchars($task['description']) ?></td>
                <td><?= htmlspecialchars($task['status']) ?></td>
                <td><?= htmlspecialchars($task['created_at']) ?></td>
                <td>
                    <a href="edit_task.php?id=<?= $task['id'] ?>">Edit</a>
                    <a href="delete_task.php?id=<?= $task['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                </td>
            </tr>
        <?php 
        endwhile; 
        ?>
    </table>
</body>
</html>
