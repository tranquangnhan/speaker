<?php 
require_once "../system/config.php";
require_once "../system/database.php";
require_once "model/home.php";
$model = new Model_home();
header('Content-type:application/json;charset=utf-8');
switch ($_GET['act']) {
    case 'case':
        echo json_encode($model->getAllCategory());
        break;
    case 'caseid':
        $id = $_GET['id'];
        echo json_encode($model->getProFromId($id));
        break;
    case 'detail':
        $id = $_GET['id'];
        echo json_encode($model->getProduct($id));
        break;
    default:
        break;
}

?>