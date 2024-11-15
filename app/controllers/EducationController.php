<?php
namespace App\Controllers;

class EducationController
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