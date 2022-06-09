<?php
session_start();

//!GET DATA FROM THE JSON 
function getDataEmployee()
{
  //Url json with employees
  $employeeJSON = "../../resources/employees.json";
  //Get the data of the file in string
  $data = file_get_contents($employeeJSON);
  return $data;
}
//!RETURN ALL EMPLOYEES TO JAVASCRIPT
function getAllEmployees()
{
  $employeeData = getDataEmployee();
  //Convert string JSON to PHP
  echo $employeeData;
}
//!DELETE EMPLOYEEE
function deleteEmployee($id)
{
  //Get employees from JSON
  $employeeData = getDataEmployee();
  //Decode json to php format object
  $employees = json_decode($employeeData);
  $employeeJSON = "../../resources/employees.json";
  //foreach of all employees
  foreach ($employees as $key => $employee) {
    //If id passed from JS BTN dataset is equal to "employee id"
    if ($employee->id == $id) {
      //delete object inside an array and add to JSON file
      unset($employees[$key]);
      $save = json_encode(array_values($employees), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
      if (file_put_contents($employeeJSON, $save) !== false) {
        echo "EMPLOYEE DELETED";
      }
    }
  }
}
//!CREATE EMPLOYEE FROM DASHBOARD
function createEmployeeDashboard($form){
  $newEmployee = new stdClass();
  $employees = json_decode(getDataEmployee());
  $newEmployee->id = getNextId($employees);
  $newEmployee->name = $_POST['inputName'];
  $newEmployee->lastname =  $_POST['inputLastname'];
  $newEmployee->email = $_POST['inputEmail'];
  $newEmployee->gender = "man";
  $newEmployee->age = $_POST['inputAge'];
  $newEmployee->streetAddress = $_POST['inputStreet'];
  $newEmployee->city = $_POST['inputCity'];
  $newEmployee->state = $_POST['inputState'];
  $newEmployee->postalCode = $_POST['inputPostalCode'];
  $newEmployee->phoneNumber = $_POST['inputPhone'];
  addEmployee($newEmployee , false);
}



function getNewEmployeeInput()
{
  $newEmployee = new stdClass();
  $employees = json_decode(getDataEmployee());
  $newEmployee->id = getNextId($employees);
  $newEmployee->name = $_POST['nameUpdate'];
  $newEmployee->lastName =  $_POST['lastNameUpdate'];
  $newEmployee->email = $_POST['emailUpdate'];
  $newEmployee->gender = $_POST['genderUpdate'];
  $newEmployee->age = $_POST['ageUpdate'];
  $newEmployee->streetAddress = $_POST['streetUpdate'];
  $newEmployee->city = $_POST['cityUpdate'];
  $newEmployee->state = $_POST['stateUpdate'];
  $newEmployee->postalCode = $_POST['postalUpdate'];
  $newEmployee->phoneNumber = $_POST['phoneUpdate'];

  addEmployee($newEmployee , true);
}

function addEmployee(stdClass $newEmployee , $refresh)
{
  $employees = json_decode(getDataEmployee());
  $employeeJSON = "../../resources/employees.json";
  array_push($employees, $newEmployee);
  $save = json_encode(array_values($employees), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
  if (file_put_contents($employeeJSON, $save) !== false) {
    echo "EMPLOYEE ADDED";
    if($refresh){
        header('Location: ' . '../dashboard.php');
        echo"EMPLOYEE ADDED AND REFRESH";
    }
    else {
    echo"EMPLOYEE ADDED ASYNC";
    }
  }
}

//Get the information needed to show in employee.php when a employee in dashboard is clicked
function getEmployee($id)
{
  $employeeData = getDataEmployee();
  $employees = json_decode($employeeData);
  foreach ($employees as $key => $employee) {
    if ($employee->id == $id) {
      $_SESSION['nameUpdate'] = $employee->name;
      $_SESSION['lastNameUpdate'] = $employee->lastName;
      $_SESSION['emailUpdate'] = $employee->email;
      $_SESSION['genderUpdate'] = $employee->gender;
      $_SESSION['cityUpdate'] = $employee->city;
      $_SESSION['streetUpdate'] = $employee->streetAddress;
      $_SESSION['stateUpdate'] = $employee->state;
      $_SESSION['ageUpdate'] = $employee->age;
      $_SESSION['postalUpdate'] = $employee->postalCode;
      $_SESSION['phoneUpdate'] = $employee->phoneNumber;
    }
  }
  echo true;
}

//Get the the ID for a new or updated employeer
function getNextId(array $employeesCollection): int
{
  foreach($employeesCollection as $key => $employee){
    if($employee -> email == $_POST['emailUpdate']){
      $id = $employee -> id;
      deleteEmployee($id);
      return $id;
    }
  }
  return sizeof($employeesCollection) + 1;
}