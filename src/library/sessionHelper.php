<?php
session_start();

function sessionOpen(){
    $_SESSION['login'] = true;
    $lifeTime = 5;
    session_set_cookie_params($lifeTime);
}

function sessionClose(){
    $_SESSION['login'] = false;
};