<?php
namespace App\Controllers;
require_once CONTROLLER_PATH . '/BaseController.php';

class NotFoundController extends BaseController
{ 
    public function index()
    {   
        global $current_page;
        
        $current_page = "404";
        require VIEW_PATH . '/404.php';
    }
}

?>