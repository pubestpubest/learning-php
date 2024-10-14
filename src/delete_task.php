<?php
session_start();
require_once 'functions.php';
require_once 'config.php';

if (isset($_GET['id'])) {
    if (deleteTask($_GET['id'])) {
        $_SESSION['message'] = 'Task deleted successfully';
        header('Location: index.php');
        exit;
    }
}
header('Location: index.php');
exit;
?>