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
            }
        }
    }
}

// function addEmployee(array $newEmployee)
// {
// // TODO implement it
// }


// function deleteEmployee(string $id)
// {
// // TODO implement it
// }


// function updateEmployee(array $updateEmployee)
// {
// // TODO implement it
// }


// function getEmployee(string $id)
// {
// // TODO implement it

// }


// function removeAvatar($id)
// {
// // TODO implement it
// }


// function getQueryStringParameters(): array
// {
// // TODO implement it
// return [];
// }

// function getNextIdentifier(array $employeesCollection): int
// {
// // TODO implement it
// return 0;
// }
