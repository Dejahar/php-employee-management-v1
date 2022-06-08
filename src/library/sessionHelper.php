<?php
require_once "loginManager.php";

if (!isset($_SESSION)) {
    session_start();
}

function sessionOpen()
{
    $_SESSION['login'] = true;
    $lifeTime = 5;
    setcookie("LogCookie", "", time() + $lifeTime);
}

function sessionClose()
{
    $_SESSION['login'] = false;
    logout();
}

function setInterval($f, $milliseconds)
{
    $seconds = (int)$milliseconds / 1000;
    while (true) {
        $f();
        sleep($seconds);
    }
}
