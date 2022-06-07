<?php
require_once "employeeManager.php";
$function = $_POST["function"];

switch ($function) {
    case 'create':
        if($_POST["dashboardCreate"]){
            createEmployeeDashboard($_POST);
        }
        else{
        getNewEmployeeInput();
        }
        break;
    case 'read':
        getAllEmployees();
        break;
    case 'update':
        $id = $_POST["employeeID"];
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
