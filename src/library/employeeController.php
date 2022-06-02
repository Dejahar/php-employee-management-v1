<?php
require_once "employeeManager.php";
$function = $_POST["function"];

switch ($function) {
    case 'create':
        # code...
        break;
    case 'read':
        getAllEmployees();
        break;
    case 'update':
        # code...
        break;
    case 'delete':
        $id = $_POST["employeeID"];
        deleteEmployee($id);
        break;
    default:
        # code...
        break;
}
