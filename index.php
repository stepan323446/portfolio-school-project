<?php
use App\Controllers\HomeController;

define('BASE_PATH', __DIR__);
define('VIEW_PATH', BASE_PATH . '/app/views');
define('MODEL_PATH', BASE_PATH . '/app/models');
define('CONTROLLER_PATH', BASE_PATH . '/app/controllers');
define('INCLUDES_PATH', BASE_PATH . '/app/includes');
define('DATA_PATH', BASE_PATH . '/app/data');
define('ASSETS_PATH', BASE_PATH . '/assets');

require BASE_PATH . '/functions.php';

$requestUri = strtok($_SERVER['REQUEST_URI'], '?');

// Router
switch ($requestUri) {
    case '/':
        require CONTROLLER_PATH . '/HomeController.php';
        $controller = new HomeController();
        $controller->index(); 
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
        break;
}
?>