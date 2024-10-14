<?php
session_start();
require_once 'config.php';
require_once 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>PHP Task manager</h1>
    <?php
    $tasks = getTasks();
    if (count($tasks) > 0) {
        echo "<h2>Your Tasks</h2>";
        echo "<ul>";
        foreach ($tasks as $task) {
            echo "<li>" . htmlspecialchars($task['title']) . " - "
                . ($task['completed'] ? 'Completed' : 'Not Completed')
                . "<a href='update_task.php?id=" . $task['id'] . "'> Toggle</a>"
                . "<a href='delete_task.php?id=" . $task['id'] . "'> Delete</a>"
                . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No tasks found</p>";
    }
    ?>
    <h2>Add Task</h2>
    <form action="add_task.php" method="post">
        <input type="text" name="title" placeholder="Task Title">
        <input type="text" name="description" placeholder="Task Description">
        <button type="submit">Add Task</button>
    </form>
    <?php
    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        unset($_SESSION['message']);
    }
    ?>
</body>

</html>