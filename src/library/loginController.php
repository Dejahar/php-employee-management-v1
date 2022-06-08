<?php
require "loginManager.php";

if(isset($_POST['login'])){
    login();
}

if(isset($_GET['logout'])){
    logout();
}
