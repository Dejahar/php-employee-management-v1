<?php
require_once "sessionHelper.php";

if (!isset($_SESSION)) {
  session_start();
}

//Get information from the database and use that information in validateLogin function
function login()
{
  $dataUrl = '../../resources/users.json';
  $usersJson = json_decode(file_get_contents($dataUrl), true);

  foreach ($usersJson['users'] as $key => $user) {
    validateLogin($user['email'], $user['password']);
  }
}

//Validate if email exists in database if it exists go to validate the password
function validateLogin($email, $password)
{
  if ($_POST['email'] == $email) {
    validatePassword($password);
  } else {
    //HTML error message
    $_SESSION['error_message'] = 'User not found!';
    header('Location: ' . '../../');
  }
}

//Validate if the password entered is correct, if correct go to dashboard
function validatePassword($password)
{
  if (password_verify($_POST['password'], $password)) {
    sessionOpen();
    header('Location: ' . '../dashboard.php');
  } else {
    //HTML error message
    $_SESSION['error_message'] = 'Password is not ok';
    header('Location: ' . '../../');
  }
}

//Deletes the session and the cookie
function logout()
{
  unset($_SESSION);

  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
      session_name(),
      '',
      time() - 42000,
      $params["login"],
      $params["error_message"]
    );
  }

  session_destroy();
  header('Location: ' . '../../');
}