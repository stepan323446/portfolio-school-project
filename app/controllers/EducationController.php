<?php
namespace App\Controllers;
require_once CONTROLLER_PATH . '/BaseController.php';

class EducationController extends BaseController
{
    public function index()
    {   
        global $current_page;
        
        $current_page = "education";

        require MODEL_PATH . "/data/education_data.php";
        require VIEW_PATH . '/educations.php';
    }
}

?>