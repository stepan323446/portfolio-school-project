<?php

use App\Models\WebsiteModel;
require_once(MODEL_PATH . "/WebsiteModel.php");

define("WEBSITE_ICONS", ASSETS_PATH . "/images/website_icons");

$websites = array(
    new WebsiteModel(
        "Youtube", 
        "A video hosting service where I watch entertaining and educational videos. Lots of videos of different genres in different languages", 
        WEBSITE_ICONS . "/youtube.png",
        "https://youtube.com")
)
?>