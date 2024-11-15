<?php
namespace App\Controllers;

class ContactController
{
    public function index()
    {   
        global $current_page;
        
        $current_page = "contacts";

        require VIEW_PATH . '/contact.php';
    }
}

?>