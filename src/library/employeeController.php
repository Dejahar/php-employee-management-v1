<?php
require_once "employeeManager.php";
require_once "loginManager.php";
//!GET DATA FROM FETCH PETITION
$function = $_POST["function"];

//!DEPEND ON THE VALUE OF THE KEY "FUNTION" EXECUTE SOME METHOD...
switch ($function) {
    case 'create':
        if ($_POST["dashboardCreate"]) {
            createEmployeeDashboard($_POST);
        } else {
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
    case 'cookie':
        $login_session_duration = 1000;
        if ((time() - $_SESSION['lifetime'] ) >  $login_session_duration) {
            logout();
            echo true;
        }
        break;
    default:
        # code...
        break;
}
