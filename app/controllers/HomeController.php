<?php
namespace App\Controllers;

class HomeController
{
    public function index()
    {   
        global $current_page;
        
        $current_page = "home";
        require VIEW_PATH . '/home.php';
    }
}

?>