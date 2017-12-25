<?php
    session_start();
    session_destroy();
    setcookie("login", session_id(), time()- (600));
    header("Location: login.php");
?>