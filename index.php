<?php
if (!isset($_SESSION)) {
  session_start();
}
// session_start();


$message = 'Click Login to enter';
if (isset($_SESSION['error_message'])) {
  $message = $_SESSION['error_message'];
}
if (isset($_SESSION['login'])) {
  if ($_SESSION['login'] == true) {
    header('Location:./src/dashboard.php');
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/login.css" />
  <title>A TOPO</title>
</head>

<body>
  <div class="login-content">
    <div class="login-content__logo">
      <img src="./resources/badger.png" alt="A TOPO">
      <h1 class="login_content_logo_title">A TOPO</h1>
    </div>
    <form class="login-content__form" action="./src/library/loginController.php" method="POST">
      <label class="login-content__label" for="">Email</label>
      <input class="login-content__input" type="email" name="email">

      <label class="login-content__label" for="">Password</label>
      <input class="login-content__input" type="text" name="password">
      <div class="login-content__btn">
        <button type="submit" name="login">Login</button>
      </div>
      <div><?php echo $message ?></div>
    </form>
  </div>
</body>

</html>