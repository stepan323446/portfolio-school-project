<?php
namespace App\Models;

require_once MODEL_PATH . "/BaseModel.php";

class WebsiteModel extends Model {
    public $name;
    public $description;
    public $icon_url;
    public $hyperlink;
    

    public function __construct($name, 
    $description, 
    $icon_url,
    $hyperlink) {
        parent::__construct();
        $this->name = $name;
        $this->description = $description;
        $this->icon_url = $icon_url;
        $this->hyperlink = $hyperlink;
    }

    public function create_element() {
        ?>
        <div class="fav-website">
            <div class="fav-website__header">
                <div class="icon image image-cover">
                    <img src="<?php echo $this->icon_url; ?>" alt="">
                </div>
                <div class="fav-website__header__text">
                    <h3><?php echo $this->name; ?></h3>
                    <a href="<?php echo $this->hyperlink; ?>"><?php echo $this->hyperlink; ?></a>
                </div>
            </div>
            <div class="fav-website__info">
                <?php echo $this->description ?>
            </div>
        </div>
        <?php
    }
}
?>