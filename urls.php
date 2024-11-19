<?php
require INCLUDES_PATH . '/router.php';

require CONTROLLER_PATH . '/HomeController.php';
require CONTROLLER_PATH . '/FavoritePagesController.php';
require CONTROLLER_PATH . '/ProjectsController.php';
require CONTROLLER_PATH . '/EducationController.php';
require CONTROLLER_PATH . '/ContactController.php';
require CONTROLLER_PATH . '/SkillsController.php';
require CONTROLLER_PATH . '/NotFoundController.php';

use App\Controllers\{
    ContactController,
    EducationController,
    FavoriteController,
    HomeController,
    NotFoundController,
    ProjectsController,
    SkillsController
};

Router::path('', new HomeController(), 'home');
Router::path('/favorites', new FavoriteController(), 'favorites');
Router::path('/projects', new ProjectsController(), 'projects');
Router::path('/education', new EducationController(), 'education');
Router::path('/contacts', new ContactController(), 'contacts');
Router::path('/skills', new SkillsController(), 'skills');

Router::page_not_found(new NotFoundController());

?>