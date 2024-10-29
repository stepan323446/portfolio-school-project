<?php
namespace App\Controllers;

class NotFoundController
{
    public function index()
    {   
        global $current_page;
        
        $current_page = "404";
        require VIEW_PATH . '/404.php';
    }
}

?>