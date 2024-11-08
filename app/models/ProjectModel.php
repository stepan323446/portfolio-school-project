<?php
namespace App\Models;

require_once MODEL_PATH . "/BaseModel.php";

class ProjectModel extends Model {
    public $name;
    public $description;
    public $thumbnail_url;
    /**
     * @var SkillModel[] $skills
     */
    public $skills;
    public $hyperlink_github;
    public $hyperlink_website;

    public function __construct(
        $name, 
        $description, 
        $thumbnail_url, 
        $skills = [ ], 
        $hyperlink_github = '', 
        $hyperlink_website = ''
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->thumbnail_url = $thumbnail_url;
        $this->skills = $skills;
        $this->hyperlink_github = $hyperlink_github;
        $this->hyperlink_website = $hyperlink_website;
    }
    public function create_element() {
        ?>
        <div class="project">
            <div class="project-thumbnail image image-cover">
                <img src="<?php echo $this->thumbnail_url ?>" alt="">
            </div>
            <div class="project-info">
                <div class="project-header">
                    <h3><?php echo $this->name ?></h3>
                    <div class="links">
                        <?php 
                        if($this->hyperlink_github) {
                            ?>
                            <a href="<?php echo $this->hyperlink_github ?>" target="_blank" rel="nofollow">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <?php
                        }
                        if($this->hyperlink_website) {
                            ?>
                            <a href="<?php echo $this->hyperlink_website ?>" target="_blank" rel="nofollow">
                                <i class="fa-solid fa-globe"></i>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="project-description">
                    <?php echo $this->description ?>
                </div>
                <?php if(count($this->skills) > 0): ?>
                <div class="project-skills">
                    <?php foreach($this->skills as $skill) {
                        $skill->create_element();
                    }
                    ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php
    }
}

?>