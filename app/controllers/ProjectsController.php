<?php
namespace App\Controllers;

class ProjectsController
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