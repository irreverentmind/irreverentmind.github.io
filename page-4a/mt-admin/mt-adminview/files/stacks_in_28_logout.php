<?php
    header("HTTP/1.1 200 Ok");
    session_start();
    session_unset();
    session_destroy();
    exit;
?>
