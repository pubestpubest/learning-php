<?php
session_start();
require_once 'config.php';
require_once 'functions.php';

if (isset($_GET['id'])) {
    if (updateTask($_GET['id'])) {
        $_SESSION['message'] = 'Task updated successfully';
        header('Location: index.php');
        exit;
    } else {
        $_SESSION['message'] = 'Task not updated';
    }
}
header('Location: index.php');
exit;
?>