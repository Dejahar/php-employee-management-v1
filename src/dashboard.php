<?php
require_once "./library/sessionHelper.php";
if (!isset($_SESSION)) {
  session_start();
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

// setInterval(function () {
//   if (!isset($_COOKIE['LogCookie'])) {
//     sessionClose();
//   }
// }, 1000);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="../assets/js/index.js" defer></script>
  <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<body>
  <header>
    <!-- REQUIRE FROM HEADER.PHP COMPONENTE REUTILIZABLE EN EMPLOYEE/DASHBOARD -->
    <?php include('../assets/html/header.html') ?>
  </header>
  <!-- TABLE LISTING EMPLOYEES -->
  <main class="table-employee">
    <table>
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
          <th class="table-employee__header-col">Postal code</th>
          <th class="table-employee__header-col">Phone number</th>
          <th class="table-employee__header-col">
            <!-- BUTTON CREATE -->
            <button class="employee__create" id="createEmployee">
              CREATE
            </button>
          </th>
        </tr>
      </thead>
      <!-- TABLE BODY -->
      <tbody class="table-employee__body" id="tableBody">
      </tbody>
    </table>
  </main>
</body>

</html>