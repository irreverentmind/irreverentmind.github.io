<?php
session_start();

function access_denied()
{
    header("HTTP/1.0 403 Forbidden");
    session_unset();
    session_destroy();
    die("Access Denied");
}

function passport_expired()
{
    header("HTTP/1.0 403 Forbidden");
    die("License Expired");
}

if (!isset($_POST["request"])) {
    access_denied();
}

$master  = base64_encode("miw51083"."p8g3s8f3s8lt");
$request = $_POST["request"];

if ($master !== $request) {
    access_denied();
}

session_regenerate_id();
$_SESSION["CREATED"] = time();
$_SESSION["LAST_ACTIVITY"] = time();
header("HTTP/1.1 200 Ok");
exit;
