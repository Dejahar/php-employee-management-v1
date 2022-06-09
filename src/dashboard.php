<?php
require "./library/sessionHelper.php";

if (!isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION['login']) || $_SESSION['login'] === false) {
  header('Location: ../');
}

$_SESSION['nameUpdate'] = '';
$_SESSION['lastNameUpdate'] = '';
$_SESSION['emailUpdate'] = '';
$_SESSION['genderUpdate'] = '';
$_SESSION['cityUpdate'] = '';
$_SESSION['streetUpdate'] = '';
$_SESSION['stateUpdate'] = '';
$_SESSION['ageUpdate'] = '';
$_SESSION['postalUpdate'] = '';
$_SESSION['phoneUpdate'] = '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script src="../assets/js/index.js" defer></script>
  <script src="../assets/js/checkLogin.js" defer></script>
  <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<body>

  <!-- TABLE LISTING EMPLOYEES -->
  <main class="table-employee">
    <!-- REQUIRE FROM HEADER.PHP COMPONENTE REUTILIZABLE EN EMPLOYEE/DASHBOARD -->
    <?php include('../assets/html/header.html') ?>
    <section class="table-content">
      <div class="table-employee__top">
        <h2>EMPLOYEE TABLE.</h2>
        <button class="employee__create primary-btn" id="createEmployee">Create</button>
      </div>
      <table class="table-employee__bottom" cellspacing="0" cellpadding="0">
        <!-- TABLE HEADER -->
        <thead class="table-employee__header">
          <tr class="table-employee__header-row">
            <th class="table-employee__header-col">Name</th>
            <th class="table-employee__header-col">Last name</th>
            <th class="table-employee__header-col">Email</th>
            <th class="table-employee__header-col">Age</th>
            <th class="table-employee__header-col">Street</th>
            <th class="table-employee__header-col">City</th>
            <th class="table-employee__header-col">State</th>
            <th class="table-employee__header-col">P. code</th>
            <th class="table-employee__header-col">Phone</th>
            <th class="table-employee__header-col">
            🗑️
            </th>
          </tr>
        </thead>
        <!-- TABLE BODY -->
        <tbody class="table-employee__body" id="tableBody">
        </tbody>
      </table>
    </section>

  </main>
</body>

</html>