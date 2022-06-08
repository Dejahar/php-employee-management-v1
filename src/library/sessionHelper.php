<?php
require_once "loginManager.php";

if (!isset($_SESSION)) {
    session_start();
}

function sessionOpen()
{
    $_SESSION['login'] = true;
    $_SESSION['lifetime'] = time();
}

function sessionClose()
{
    $_SESSION['login'] = false;
    logout();
}
