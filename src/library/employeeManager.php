<?php
function getDataEmployee()
{
  //Url json with employees
  $employeeJSON = "../../resources/employees.json";
  //Get the data of the file in string
  $data = file_get_contents($employeeJSON);
  return $data;
}

function getAllEmployees()
{
  $employeeData = getDataEmployee();
  //Convert string JSON to PHP
  echo $employeeData;
}

function deleteEmployee($id)
{
  $employeeData = getDataEmployee();
  $employees = json_decode($employeeData);
  $employeeJSON = "../../resources/employees.json";
  foreach ($employees as $key => $employee) {
    if ($employee->id == $id) {
      unset($employees[$key]);
      $save = json_encode(array_values($employees), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
      if (file_put_contents($employeeJSON, $save) !== false) {
        echo "EMPLOYEE DELETED";
        getAllEmployees();
      }
    }
  }
}

function getNewEmployeeInput()
{
  $newEmployee = new stdClass();
  $employees = json_decode(getDataEmployee());
  $newEmployee->id = getNextId($employees);
  $newEmployee->name = $_POST['nameUpdate'];
  $newEmployee->lastname =  $_POST['lastNameUpdate'];
  $newEmployee->email = $_POST['emailUpdate'];
  $newEmployee->gender = $_POST['genderUpdate'];
  $newEmployee->age = $_POST['ageUpdate'];
  $newEmployee->streetAddress = $_POST['streetUpdate'];
  $newEmployee->city = $_POST['cityUpdate'];
  $newEmployee->state = $_POST['stateUpdate'];
  $newEmployee->postalCode = $_POST['postalUpdate'];
  $newEmployee->phoneNumber = $_POST['phoneUpdate'];

  addEmployee($newEmployee);
}

function addEmployee(stdClass $newEmployee)
{
  $employees = json_decode(getDataEmployee());
  $employeeJSON = "../../resources/employees.json";
  array_push($employees, $newEmployee);
  $save = json_encode(array_values($employees), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
  if (file_put_contents($employeeJSON, $save) !== false) {
    echo "EMPLOYEE ADDED";
    header('Location: ' . '../dashboard.php');
  }
}


// function deleteEmployee(string $id)
// {
// // TODO implement it
// }


// function updateEmployee($id)
// {
//   $data = getEmployee($id);
//   print_r($data);
// }

// function updateEmployee(array $updateEmployee)
// {
// // TODO implement it
// }


function getEmployee($id)
{
  $employeeData = getDataEmployee();
  $employees = json_decode($employeeData);
  foreach ($employees as $key => $employee) {
    if ($employee->id == $id) {
      echo json_encode($employee);
    }
  }
}


// function removeAvatar($id)
// {
// // TODO implement it
// }


// function getQueryStringParameters(): array
// {
// // TODO implement it
// return [];
// }

function getNextId(array $employeesCollection): int
{
  return sizeof($employeesCollection) + 1;
}
