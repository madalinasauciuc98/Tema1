<?php
require 'bookController.php';
require 'router.php';
require '1.php';
require 'functions.php';

$routes = require 'routes.php';

$uri=explode('?', trim($_SERVER['REQUEST_URI'], '/'))[0];

$router=new router();
$router->setRoutes(require 'routes.php');

try {
    require $router->direct($uri);
}
catch (Exception $exception) {
    require '404.error.php';
}