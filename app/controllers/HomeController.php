<?php
namespace App\Controllers;
require_once CONTROLLER_PATH . '/BaseController.php';

class HomeController extends BaseController
{
    public function index()
    {   
        global $current_page;
        
        $current_page = "home";
        require VIEW_PATH . '/home.php';
    }
}

?>