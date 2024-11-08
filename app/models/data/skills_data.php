<?php
use App\Models\SkillModel;
require_once(MODEL_PATH . "/SkillModel.php");

define("SKILL_ICON", ASSETS_PATH . "/images/skills");

$skills = array(
    "html" => new SkillModel(
        "HTML",
        SKILL_ICON . "/html.png",
        "Frontend"
    ),
    "css" => new SkillModel(
        "CSS",
        SKILL_ICON . "/css.png",
        "Frontend"
    ),
    "javascript" => new SkillModel(
        "Javascript",
        SKILL_ICON . "/js.png",
        "Language"
    ),
    "vue" => new SkillModel(
        "Vue.js",
        SKILL_ICON . "/vue.png",
        "Frontend"
    ),
    "django" => new SkillModel(
        "Django",
        SKILL_ICON . "/django.png",
        "Backend"
    ),
    "mysql" => new SkillModel(
        "MySQL",
        SKILL_ICON . "/mysql.png",
        "Backend"
    ),
    "node" => new SkillModel(
        "Node.js",
        SKILL_ICON . "/node.png",
        "Backend"
    ),
    "python" => new SkillModel(
        "Python",
        SKILL_ICON . "/python.png",
        "Language"
    ),
    "docker" => new SkillModel(
        "Docker",
        SKILL_ICON . "/docker.png",
        "DevOps"
    ),
);

?>