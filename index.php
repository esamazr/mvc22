<?php
// public/index.php
require_once __DIR__ . '/app/controllers/UserController.php';
require_once __DIR__ .'/app/models/UserModel.php';
require_once __DIR__ .'/config/config.php';
require_once __DIR__ . '/lib/DB/MysqliDb.php';

 
use gg\UserModel;
// $d= new UserModel;
// $d->getUsers();
// $d->addUser();


$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$config = require 'config/config.php';
$db = new MysqliDb(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);

$model = new UserModel($db);
$controller = new UserController($model);

if (method_exists($controller, $action)) {
    $controller->$action();
} else {
    echo "Action not found!";
} 
$tame=($_SERVER['REQUEST_URI']) ;
define('ESAM' , '/darbne/mvc2/');
switch ($tame)
{
    case ESAM :
        $controller->index();
        // var_dump($controller);
         break;
         
    case ESAM . 'add' :
        $controller->addUser();
         
         break;
   
    case ESAM . 'show?id=' . $_GET["id"] :
        $controller->getUser();
        // var_dump($controller);
         break;   
    case ESAM . 'update?id='.$_GET["id"]:
            $controller->updateUser($_GET["id"]);
         break;
    case ESAM . 'Delete?id='. $_GET['id']:
            $controller->deleteUser($_GET['id']);
            break;
            var_dump($_GET['id']);         
     
    default:
            echo "Action not found";
             
}

 
















?>
