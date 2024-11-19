<?php
namespace App\Controllers;

class SkillsController
{
    public function index()
    {   
        global $current_page;
        
        $current_page = "skills";

        require MODEL_PATH . "/data/projects_data.php";
        $skill_categories = array();
        foreach ($skills as $value) {
            // If hasn't category, create it
            if(!array_key_exists($value->category_name, $skill_categories)) {
                $skill_categories[$value->category_name] = array();
            }
            // Append skill to category
            $skill_categories[$value->category_name][] = $value;
        }

        require VIEW_PATH . '/skills.php';
    }
}
?>