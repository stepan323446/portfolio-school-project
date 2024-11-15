<?php
namespace App\Models;

require_once MODEL_PATH . "/BaseModel.php";

class EducationModel extends Model {
    public $name;
    public $date_start;
    public $date_end;
    public $place;
    public $image_url;
    public $description;

    public function __construct($name, $image_url, $description, $place, $date_start, $date_end = "now") {
        $this->name = $name;
        $this->image_url = $image_url;
        $this->description = $description;
        $this->date_start = $date_start;
        $this->date_end = $date_end;
        $this->place = $place;
    }

    private function the_meta() {
        ?>
        <div class="education-meta">
            <span><?php echo $this->date_start ?></span>
            <span class="sep"> - </span>
            <?php if($this->date_end == "now"): ?>
                <span class="education-date__now">Now</span>
            <?php else: ?>
                <span><?php echo $this->date_end ?></span>
            <?php endif; ?>
            <span class="education-meta__place"> | <?php echo $this->place ?></span>
        </div>
        <?php
    }

    public function create_element() {
        ?>
        <div class="timeline-item">
            <div class="education-item model-item">
                <div class="model-item__header">
                    <div class="icon image image-cover">
                        <img src="<?php echo $this->image_url; ?>" alt="">
                    </div>
                    <div class="model-item__header__text">
                        <h3><?php echo $this->name; ?></h3>
                        <?php $this->the_meta() ?>
                    </div>
                </div>
                <div class="model-item__info">
                    <?php echo $this->description ?>
                </div>
            </div>

            <div class="timeline-icon image image-cover">
                <img src="<?php echo $this->image_url ?>" alt="">
            </div>

            <div class="timeline-date">
                <span><?php echo $this->date_start ?></span>
                <span> - </span>
                <span><?php echo $this->date_end ?></span>
            </div>
        </div>
        <?php
    }
}
?>