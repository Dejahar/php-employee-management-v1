<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/employee.css">
</head>

<body>
 
  <main class="employee-update"> 
    <!-- REQUIRE FROM HEADER.PHP COMPONENTE REUTILIZABLE EN EMPLOYEE/DASHBOARD -->
    <?php include('../assets/html/header.html') ?>
    <section class="employee-form">
    <form action="./library/employeeController.php" method = 'POST'>
      <!-- FIELD 1  -->
      <fieldset class="employee-update__fieldset">
        <!-- NAME -->
        <label for="nameUpdate" class="employee-update__label">
          <span>Name:</span>
          <input type="text" class="employee-update__input" name="nameUpdate" id="nameUpdate" />
        </label>
        <!-- LASTNAME -->
        <label for="lastNameUpdate" class="employee-update__label">
          <span>Last name:</span>
          <input type="text" class="employee-update__input" name="lastNameUpdate" id="lasNameUpdate" />
        </label>
      </fieldset>
      <!-- FIELD 2 -->
      <fieldset class="employee-update__fieldset">
        <!-- EMAIL -->
        
        <label for="emailUpdate" class="employee-update__label">
        <span>Email:</span>
          <input type="email" class="employee-update__input" name="emailUpdate" id="emailUpdate" />
        </label>
        <!-- GENDER -->
        <label for="" class="employee-update__label">
          <span>Gender</span>
          <select class="employee-update__input" name="genderUpdate" id="genderUpdate">
            <option value="men">Man</option>
            <option value="women">Woman</option>
          </select>
        </label>
      </fieldset>
      <!-- FIELD 3 -->
      <fieldset class="employee-update__fieldset">
        <!-- CITY -->
        <label for="cityUpdate" class="employee-update__label">
          <span>City</span>
          <input type="text" class="employee-update__input" name="cityUpdate" id="cityUpdate" />
        </label>
        <!-- STREET ADDRESS -->
        <label for="streetUpdate" class="employee-update__label">
          <span>Street</span>
          <input type="text" class="employee-update__input" name="streetUpdate" id="streetUpdate" />
        </label>
      </fieldset>
      <!-- FIELDSET 4 -->
      <fieldset class="employee-update__fieldset">
        <!-- STATE -->
        <label for="stateUpdate" class="employee-update__label">
          <span>State:</span>
          <input type="text" class="employee-update__input" name="stateUpdate" id="stateUpdate" />
        </label>
        <!-- AGE -->
        <label for="ageUpdate" class="employee-update__label">
          <span>Age:</span>
          <input type="number" class="employee-update__input" name="ageUpdate" id="ageUpdate" />
        </label>
      </fieldset>
      <!-- FIELDSET 5 -->
      <fieldset class="employee-update__fieldset">
        <!-- POSTAL CODE -->
        <label for="postalUpdate" class="employee-update__label">
          <span>Postal code:</span>
          <input type="number" class="employee-update__input" name="postalUpdate" id="postalUpdate" />
        </label>
        <!-- PHONE NUMBER -->
        <label for="phoneUpdate" class="employee-update__label">
          <span>Phone number:</span>
          <input type="text" class="employee-update__input" name="phoneUpdate" id="phoneUpdate" />
        </label>
      </fieldset>
      <!-- FIELDSET 6 -->
      <fieldset class="employee-update__fieldset update-container__btn">
        <!-- RETURN TO DASHBOARD -->
        <a href="../src/dashboard.php"><button class="secondary-btn">Return</button></a>
        <!-- SEND DATA TO UPDATE -->
        <a href="../src/dashboard.php"><button class="primary-btn" name="function" value="create">Send</button></a>
      </fieldset>
    </form>
    </section>
  </main>
</body>

</html>