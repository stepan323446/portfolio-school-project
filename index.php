<?php


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
require BASE_PATH . '/urls.php';

Router::display_page();
?>