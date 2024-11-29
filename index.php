<?php

define('BASE_PATH', __DIR__);
define('VIEW_PATH', BASE_PATH . '/app/views');
define('MODEL_PATH', BASE_PATH . '/app/models');
define('CONTROLLER_PATH', BASE_PATH . '/app/controllers');
define('INCLUDES_PATH', BASE_PATH . '/app/includes');
define('DATA_PATH', BASE_PATH . '/app/data');

require BASE_PATH . '/functions.php';
require BASE_PATH . '/config.php';

define('ASSETS_PATH', HOME_URL . '/assets');

date_default_timezone_set(SERVER_TIMEZONE);

// Router
require BASE_PATH . '/urls.php';
Router::display_page();
?>