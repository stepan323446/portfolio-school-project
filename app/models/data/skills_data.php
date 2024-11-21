<?php
use App\Models\SkillModel;
require_once(MODEL_PATH . "/SkillModel.php");

define("SKILL_ICON", ASSETS_PATH . "/images/skills");

$skills = array(
    // Frontend
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
    "vue" => new SkillModel(
        "Vue.js",
        SKILL_ICON . "/vue.png",
        "Frontend"
    ),
    "react" => new SkillModel(
        "React",
        SKILL_ICON . "/react.png",
        "Frontend"
    ),
    "bootstrap" => new SkillModel(
        "Bootstrap",
        SKILL_ICON . "/bootstrap.png",
        "Frontend"
    ),
    "sass" => new SkillModel(
        "SCSS & SASS",
        SKILL_ICON . "/sass.png",
        "Frontend"
    ),
    "element_ui" => new SkillModel(
        "Element UI",
        SKILL_ICON . "/element-ui.png",
        "Frontend"
    ),
    "tailwind" => new SkillModel(
        "Tailwind",
        SKILL_ICON . "/tailwind.png",
        "Frontend"
    ),

    // Backend
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
    "spring" => new SkillModel(
        "Spring",
        SKILL_ICON . "/spring.png",
        "Backend"
    ),
    "asp" => new SkillModel(
        "ASP.NET",
        SKILL_ICON . "/asp.png",
        "Backend"
    ),

    // Languages
    "python" => new SkillModel(
        "Python",
        SKILL_ICON . "/python.png",
        "Language"
    ),
    "javascript" => new SkillModel(
        "Javascript",
        SKILL_ICON . "/js.png",
        "Language"
    ),
    "csharp" => new SkillModel(
        "C#",
        SKILL_ICON . "/csharp.png",
        "Language"
    ),
    "java" => new SkillModel(
        "Java",
        SKILL_ICON . "/java.png",
        "Language"
    ),
    "c" => new SkillModel(
        "C",
        SKILL_ICON . "/c.png",
        "Language"
    ),
    "typescript" => new SkillModel(
        "Typescript",
        SKILL_ICON . "/typescript.png",
        "Language"
    ),
    "php" => new SkillModel(
        "PHP",
        SKILL_ICON . "/php.png",
        "Language"
    ),

    // Apps
    "flutter" => new SkillModel(
        "Flutter",
        SKILL_ICON . "/flutter.png",
        "Apps"
    ),
    "electron" => new SkillModel(
        "Electron",
        SKILL_ICON . "/electron.png",
        "Apps"
    ),
    "android_studio" => new SkillModel(
        "Android Studio",
        SKILL_ICON . "/android-studio.png",
        "Apps"
    ),

    // DevOps
    "google_cloud" => new SkillModel(
        "Google Cloud",
        SKILL_ICON . "/google-cloud.png",
        "DevOps"
    ),
    "docker" => new SkillModel(
        "Docker",
        SKILL_ICON . "/docker.png",
        "DevOps"
    ),
    "microsoft_azure" => new SkillModel(
        "Microsoft Azure",
        SKILL_ICON . "/ms-azure.png",
        "DevOps"
    ),
    "kubernetes" => new SkillModel(
        "Kubernetes",
        SKILL_ICON . "/kubernetes.png",
        "DevOps"
    ),
    "linux" => new SkillModel(
        "Linux",
        SKILL_ICON . "/linux.png",
        "DevOps"
    ),

    // Other
    "wordpress" => new SkillModel(
        "Wordpress",
        SKILL_ICON . "/wordpress.png",
    ),
    "notion" => new SkillModel(
        "Notion",
        SKILL_ICON . "/notion.png",
    ),
    "figma" => new SkillModel(
        "Figma",
        SKILL_ICON . "/figma.png",
    ),
    "postman" => new SkillModel(
        "Postman",
        SKILL_ICON . "/postman.png",
    ),
    "vs_code" => new SkillModel(
        "VS Code",
        SKILL_ICON . "/vs_code.png",
    ),
    "git" => new SkillModel(
        "Git",
        SKILL_ICON . "/git.png",
    ),
    "github" => new SkillModel(
        "Github",
        SKILL_ICON . "/github.png",
    )

);

?>