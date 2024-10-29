<?php
use App\Controllers\FavoriteController;
use App\Controllers\HomeController;
use App\Controllers\NotFoundController;

define('BASE_PATH', __DIR__);
define('VIEW_PATH', BASE_PATH . '/app/views');
define('MODEL_PATH', BASE_PATH . '/app/models');
define('CONTROLLER_PATH', BASE_PATH . '/app/controllers');
define('INCLUDES_PATH', BASE_PATH . '/app/includes');
define('DATA_PATH', BASE_PATH . '/app/data');
define('ASSETS_PATH', '/assets');

require BASE_PATH . '/functions.php';
require BASE_PATH . '/config.php';


date_default_timezone_set(SERVER_TIMEZONE);

// Router
$requestUri = strtok($_SERVER['REQUEST_URI'], '?');
$requestUri = rtrim($requestUri, '/');

switch ($requestUri) {
    case '':
        require CONTROLLER_PATH . '/HomeController.php';
        $controller = new HomeController();
        $controller->index(); 
        break;
    case '/favorites':
        require CONTROLLER_PATH . '/FavoritePagesController.php';
        $controller = new FavoriteController();
        $controller->index(); 
        break;
    default:
        require CONTROLLER_PATH . '/NotFoundController.php';
        $controller = new NotFoundController();
        $controller->index(); 
        break;
}
?>