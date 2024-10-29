<?php
namespace App\Controllers;

class FavoriteController
{
    public function index()
    {   
        global $current_page;
        
        $current_page = "favorites";

        require MODEL_PATH . "/data/websites_data.php";
        require VIEW_PATH . '/favorites.php';
    }
}

?>