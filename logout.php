<?php
session_start(); // Start the session

if (isset($_POST["logout"])) {
    // Unset and destroy the session
    session_unset();
    session_destroy();

    // Redirect to the index page or wherever you want after logout
    header("Location: index.php");
    exit();
}
?>
