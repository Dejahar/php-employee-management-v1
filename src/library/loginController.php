<?php
require_once "loginManager.php";

if(isset($_POST['login'])){
    login();
}

if(isset($_GET['logout'])){
    logout();
}