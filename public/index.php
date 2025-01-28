<?php

require '../vendor/autoload.php';
require '../database/db.php';

use Smarty\Smarty;

$pdo = require '../database/db.php';

$smarty = new Smarty();
$smarty->setTemplateDir('../templates/');
$smarty->setCompileDir('../templates_c/');
$smarty->setCacheDir('../cache/');
$smarty->setConfigDir('../configs/');

$controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Admin';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

require "../app/controllers/{$controller}Controller.php";

$controllerClass = "{$controller}Controller";
$instance = new $controllerClass($pdo, $smarty);
$instance->$action();
