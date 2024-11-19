<?php
namespace App\Controllers;
require_once CONTROLLER_PATH . '/BaseController.php';

class ProjectsController extends BaseController
{
    public function index()
    {   
        global $current_page;
        
        $current_page = "projects";

        require MODEL_PATH . "/data/projects_data.php";
        require VIEW_PATH . '/projects.php';
    }
}

?>