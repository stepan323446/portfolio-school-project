<?php
namespace App\Models;

require_once MODEL_PATH . "/BaseModel.php";

class SkillModel extends Model {
    public $name;
    public $icon_url;
    public $category_name;

    public function __construct($name, $icon_url, $category_name = "Other") {
        $this->name = $name;
        $this->icon_url = $icon_url;
        $this->category_name = $category_name;
    }
    public function create_element() {
        ?>
        <div class="skill-item">
            <div class="skill-icon image">
                <img src="<?php echo $this->icon_url ?>" alt="">
            </div>
            <div class="skill-label">
                <?php echo $this->name ?>
            </div>
        </div>
        <?php
    }
}

?>