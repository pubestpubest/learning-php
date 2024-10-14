<?php
session_start();
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (addTask($_POST['title'], $_POST['description'])) {
        $_SESSION['message'] = 'Task added successfully';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['message'] = 'Task not added';
    }
}
header('Location: index.php');
exit;
?>