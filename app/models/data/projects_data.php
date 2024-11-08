<?php
use App\Models\ProjectModel;
require_once(MODEL_PATH . "/ProjectModel.php");
require_once(MODEL_PATH . "/data/skills_data.php");

define("PROJECTS_THUMB", ASSETS_PATH . "/images/projects");

$projects = array(
    new ProjectModel(
        "Eref Redesign",
        <<<EOT
The plugin helps improve the outdated interface of <a href="https://eref.vts.su.ac.rs/" target="_blank">eref.vts.su.ac.rs</a>. It revamps both CSS styles and entire pages. The plugin also includes:
<ul>
    <li>Mobile phone adaptability</li>
    <li>Enhanced text readability</li>
    <li>Link detection in the text and formatting them into clickable links (E-tabla)</li>
    <li>Teacher list search and information display by clicking instead of hovering.</li>
</ul>
EOT,
        PROJECTS_THUMB . "/eref.png",
        [$skills['html'], $skills['css'], $skills['javascript']],
        "https://github.com/stepan323446/eref-redesign",
        "https://chromewebstore.google.com/detail/eref-redesign/jdlighnhjgljciligfihoadhpmamdcmp"
    )
);

?>