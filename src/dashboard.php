<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: ../');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
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
          <th class="table-employee__header-col">Email</th>
          <th class="table-employee__header-col">Age</th>
          <th class="table-employee__header-col">Street No.</th>
          <th class="table-employee__header-col">City</th>
          <th class="table-employee__header-col">State</th>
          <th class="table-employee__header-col">Postal Code</th>
          <th class="table-employee__header-col">Phone Number</th>
          <th class="table-employee__header-col">
            <!-- BUTTON CREATE -->
            <button class="employee__create" id="createEmployee">
              CREATE
            </button>
          </th>
        </tr>
      </thead>
      <!-- TABLE BODY -->
      <tbody class="table-employee__body">
        <!-- EMPLOYEE ROW -->
        <tr class="table-employee__body-row" data-id="1">
          <!-- EMPLOYEE VALUES COLUMN -->
          <td class="table-employee__body-col">Ivan</td>
          <td class="table-employee__body-col">ivanescribano@gmail.com</td>
          <td class="table-employee__body-col">23</td>
          <td class="table-employee__body-col">209</td>
          <td class="table-employee__body-col">Barcelona</td>
          <td class="table-employee__body-col">Cat</td>
          <td class="table-employee__body-col">08001</td>
          <td class="table-employee__body-col">604275819</td>
          <td class="table-employee__body-col">
            <!-- DELETE BUTTON -->
            <button id="employeeDelete" class="employee_delete">
              DELETE
            </button>
          </td>
        </tr>
        <!-- EMPLOYEE ROW -->
        <tr class="table-employee__body-row" data-id="1">
          <!-- EMPLOYEE VALUES COLUMN -->
          <td class="table-employee__body-col">Ivan</td>
          <td class="table-employee__body-col">ivanescribano@gmail.com</td>
          <td class="table-employee__body-col">23</td>
          <td class="table-employee__body-col">209</td>
          <td class="table-employee__body-col">Barcelona</td>
          <td class="table-employee__body-col">Cat</td>
          <td class="table-employee__body-col">08001</td>
          <td class="table-employee__body-col">604275819</td>
          <td class="table-employee__body-col">
            <!-- DELETE BUTTON -->
            <button id="employeeDelete" class="employee_delete">
              DELETE
            </button>
          </td>
        </tr>
        <!-- EMPLOYEE ROW -->
        <tr class="table-employee__body-row" data-id="1">
          <!-- EMPLOYEE VALUES COLUMN -->
          <td class="table-employee__body-col">Ivan</td>
          <td class="table-employee__body-col">ivanescribano@gmail.com</td>
          <td class="table-employee__body-col">23</td>
          <td class="table-employee__body-col">209</td>
          <td class="table-employee__body-col">Barcelona</td>
          <td class="table-employee__body-col">Cat</td>
          <td class="table-employee__body-col">08001</td>
          <td class="table-employee__body-col">604275819</td>
          <td class="table-employee__body-col">
            <!-- DELETE BUTTON -->
            <button id="employeeDelete" class="employee_delete">
              DELETE
            </button>
          </td>
        </tr>
        <!-- EMPLOYEE ROW -->
        <tr class="table-employee__body-row" data-id="1">
          <!-- EMPLOYEE VALUES COLUMN -->
          <td class="table-employee__body-col">Ivan</td>
          <td class="table-employee__body-col">ivanescribano@gmail.com</td>
          <td class="table-employee__body-col">23</td>
          <td class="table-employee__body-col">209</td>
          <td class="table-employee__body-col">Barcelona</td>
          <td class="table-employee__body-col">Cat</td>
          <td class="table-employee__body-col">08001</td>
          <td class="table-employee__body-col">604275819</td>
          <td class="table-employee__body-col">
            <!-- DELETE BUTTON -->
            <button id="employeeDelete" class="employee_delete">
              DELETE
            </button>
          </td>
        </tr>
        <!-- EMPLOYEE ROW -->
        <tr class="table-employee__body-row" data-id="1">
          <!-- EMPLOYEE VALUES COLUMN -->
          <td class="table-employee__body-col">Ivan</td>
          <td class="table-employee__body-col">ivanescribano@gmail.com</td>
          <td class="table-employee__body-col">23</td>
          <td class="table-employee__body-col">209</td>
          <td class="table-employee__body-col">Barcelona</td>
          <td class="table-employee__body-col">Cat</td>
          <td class="table-employee__body-col">08001</td>
          <td class="table-employee__body-col">604275819</td>
          <td class="table-employee__body-col">
            <!-- DELETE BUTTON -->
            <button id="employeeDelete" class="employee_delete">
              DELETE
            </button>
          </td>
        </tr>
        <!-- EMPLOYEE ROW -->
        <tr class="table-employee__body-row" data-id="1">
          <!-- EMPLOYEE VALUES COLUMN -->
          <td class="table-employee__body-col">Ivan</td>
          <td class="table-employee__body-col">ivanescribano@gmail.com</td>
          <td class="table-employee__body-col">23</td>
          <td class="table-employee__body-col">209</td>
          <td class="table-employee__body-col">Barcelona</td>
          <td class="table-employee__body-col">Cat</td>
          <td class="table-employee__body-col">08001</td>
          <td class="table-employee__body-col">604275819</td>
          <td class="table-employee__body-col">
            <!-- DELETE BUTTON -->
            <button id="employeeDelete" class="employee_delete">
              DELETE
            </button>
          </td>
        </tr>
        <!-- EMPLOYEE ROW -->
        <tr class="table-employee__body-row" data-id="1">
          <!-- EMPLOYEE VALUES COLUMN -->
          <td class="table-employee__body-col">Ivan</td>
          <td class="table-employee__body-col">ivanescribano@gmail.com</td>
          <td class="table-employee__body-col">23</td>
          <td class="table-employee__body-col">209</td>
          <td class="table-employee__body-col">Barcelona</td>
          <td class="table-employee__body-col">Cat</td>
          <td class="table-employee__body-col">08001</td>
          <td class="table-employee__body-col">604275819</td>
          <td class="table-employee__body-col">
            <!-- DELETE BUTTON -->
            <button id="employeeDelete" class="employee_delete">
              DELETE
            </button>
          </td>
        </tr>
        <!-- EMPLOYEE ROW -->
        <tr class="table-employee__body-row" data-id="1">
          <!-- EMPLOYEE VALUES COLUMN -->
          <td class="table-employee__body-col">Ivan</td>
          <td class="table-employee__body-col">ivanescribano@gmail.com</td>
          <td class="table-employee__body-col">23</td>
          <td class="table-employee__body-col">209</td>
          <td class="table-employee__body-col">Barcelona</td>
          <td class="table-employee__body-col">Cat</td>
          <td class="table-employee__body-col">08001</td>
          <td class="table-employee__body-col">604275819</td>
          <td class="table-employee__body-col">
            <!-- DELETE BUTTON -->
            <button id="employeeDelete" class="employee_delete">
              DELETE
            </button>
          </td>
        </tr>
        <!-- EMPLOYEE ROW -->
        <tr class="table-employee__body-row" data-id="1">
          <!-- EMPLOYEE VALUES COLUMN -->
          <td class="table-employee__body-col">Ivan</td>
          <td class="table-employee__body-col">ivanescribano@gmail.com</td>
          <td class="table-employee__body-col">23</td>
          <td class="table-employee__body-col">209</td>
          <td class="table-employee__body-col">Barcelona</td>
          <td class="table-employee__body-col">Cat</td>
          <td class="table-employee__body-col">08001</td>
          <td class="table-employee__body-col">604275819</td>
          <td class="table-employee__body-col">
            <!-- DELETE BUTTON -->
            <button id="employeeDelete" class="employee_delete">
              DELETE
            </button>
          </td>
        </tr>
        <!-- EMPLOYEE ROW -->
        <tr class="table-employee__body-row" data-id="1">
          <!-- EMPLOYEE VALUES COLUMN -->
          <td class="table-employee__body-col">Ivan</td>
          <td class="table-employee__body-col">ivanescribano@gmail.com</td>
          <td class="table-employee__body-col">23</td>
          <td class="table-employee__body-col">209</td>
          <td class="table-employee__body-col">Barcelona</td>
          <td class="table-employee__body-col">Cat</td>
          <td class="table-employee__body-col">08001</td>
          <td class="table-employee__body-col">604275819</td>
          <td class="table-employee__body-col">
            <!-- DELETE BUTTON -->
            <button id="employeeDelete" class="employee_delete">
              DELETE
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </main>
  <!-- PAGINATION -->
  <section class="pagination"></section>
</body>

</html>