<?php
require_once 'config.php';
function getTasks()
{
    global $conn;
    $sql = "SELECT * FROM tasks ORDER BY id DESC";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}
function addTask($title, $description)
{
    global $conn;
    $completed = 0;
    $sql = "INSERT INTO tasks (title, description, completed) VALUES ('$title', '$description', '$completed')";
    return $conn->query($sql);
}
function updateTask($id)
{
    global $conn;
    $id = (int) $id;
    $sql = "UPDATE tasks SET completed= NOT completed WHERE id='$id'";
    return $conn->query($sql);
}
function deleteTask($id)
{
    global $conn;
    $id = (int) $id;
    $sql = "DELETE FROM tasks WHERE id='$id'";
    return $conn->query($sql);
}
?>