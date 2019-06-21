<?php

ob_start();
session_start();
if (isset($_SESSION['id'])) {
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    header("Location: ../pages/index.php");
} else {
    header("Location: ../pages/index.php");
}
?>