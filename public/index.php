<?php
include $_SERVER['DOCUMENT_ROOT'] . '/../services/Autoload.php';
spl_autoload_register([new Autoload(), 'loadClass']);

echo '<a href="/?c=user&a=user&id=1">Вывести пользователя 1</a>';
echo '<a href="/?c=user&a=user&id=2">Вывести пользователя 2</a>';

$controllerName = $_GET['c'] ?: 'user';
$action = $_GET['a'];

$controllersClass = 'App\\controllers\\' . ucfirst($controllerName) . 'Controller';

if (class_exists($controllersClass)) {
    $controller = new $controllersClass;
    $controller->run($action);
} else {
    echo 'No url';
}