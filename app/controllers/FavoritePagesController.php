<?php
namespace App\Controllers;
require_once CONTROLLER_PATH . '/BaseController.php';

class FavoriteController extends BaseController
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