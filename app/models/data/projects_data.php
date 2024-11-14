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
    ),
    new ProjectModel(
        "Portfolio",
        <<<EOT
You are visiting my personal website, steve-dekart.xyz. It's a place where I showcase my projects and receive feedback from you.
<ul>
    <li>The backend of the site is built using Django Rest Framework.</li>
    <li>The frontend is powered by Vuex and Vue-Router.</li>
    <li>Nginx is responsible for distributing requests between the backend and frontend.</li>
</ul>
EOT,
        PROJECTS_THUMB . "/portfolio.png",
        [$skills["html"], $skills["css"], $skills["vue"], $skills["javascript"], $skills["django"], $skills["mysql"], $skills["node"], $skills["python"], $skills["docker"]],
        "https://github.com/stepan323446/portfolio-site",
        "https://steve-dekart.xyz/"
    ),
    new ProjectModel(
        "LibTrack",
        <<<EOT
This is a website for tracking your favorite books. You can add books to your library by dividing them into different categories, for example, "reading", "read" and others.
<br><br>
A premium subscription is also available, which allows you to add new books and authors to the site, as well as create your own collections of recommendations for other users.
EOT,
        PROJECTS_THUMB . "/libtrack.png",
        [$skills["html"], $skills["css"], $skills["javascript"], $skills["php"], $skills["mysql"], $skills["docker"]],
    ),
    new ProjectModel(
        "Music Search Bot",
        <<<EOT
The problem arises when friends use different music services, and it is difficult for them to share a link to their favorite song so that it is available to everyone.
<br><br>
This bot solves the problem by working both in group chats and in personal correspondence. It automatically recognizes the link to the track sent in the chat, searches for this track in all available music services and sends the collected links for easy listening.
EOT,
        PROJECTS_THUMB . "/music-search-bot.png",
        [$skills["python"]],
        "https://github.com/stepan323446/music-search-bot",
        "https://t.me/steve_dekart_music_search_bot"
    )
);

?>