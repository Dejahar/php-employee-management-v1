<?php
require_once "employeeManager.php";
$function = $_POST["function"];

switch ($function) {
    case 'create':
        getNewEmployeeInput();
        break;
    case 'read':
        getAllEmployees();
        break;
    case 'update':
        $id = $_POST["employeeID"];
        header('Location: ' . '../employee.php');
        getEmployee($id);
        break;
    case 'delete':
        $id = $_POST["employeeID"];
        deleteEmployee($id);
        break;
    default:
        # code...
        break;
}
