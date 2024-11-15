<?php

use App\Models\WebsiteModel;
require_once(MODEL_PATH . "/WebsiteModel.php");

define("WEBSITE_ICONS", ASSETS_PATH . "/images/website_icons");

$websites = array(
    new WebsiteModel(
        "Youtube", 
        "A video hosting service where I watch entertaining and educational videos. Lots of videos of different genres in different languages", 
        WEBSITE_ICONS . "/youtube.png",
        "https://youtube.com"),
    
    new WebsiteModel(
        "Spotify", 
        "The main service that I use to listen to different music from my favorite artists. This service has the largest number of tracks", 
        WEBSITE_ICONS . "/spotify.png",
        "https://open.spotify.com"),

    new WebsiteModel(
        "ChatGPT", 
        "A new and versatile assistant in difficult matters. I also sometimes use its openai api.", 
        WEBSITE_ICONS . "/chatgpt.png",
        "https://chatgpt.com"),

    new WebsiteModel(
        "Figma", 
        "A great editor for creating your own website designs or covers. Simple, and most importantly functional", 
        WEBSITE_ICONS . "/figma.png",
        "https://www.figma.com"),

    new WebsiteModel(
        "Yandex Music", 
        "Another good music service that can select AI-based music well.", 
        WEBSITE_ICONS . "/yandex_music.png",
        "https://music.yandex.ru"),

    new WebsiteModel(
        "Github", 
        "Storing and using repositories helps a lot in the development of various programs. There is also an opportunity to share and help others", 
        WEBSITE_ICONS . "/github.png",
        "https://github.com"),

    new WebsiteModel(
        "Stackoverflow", 
        "Many solutions to various programming problems can be found here. Also an opportunity to help others with questions", 
        WEBSITE_ICONS . "/stackoverflow.png",
        "https://stackoverflow.com"),

    new WebsiteModel(
        "Wikipedia", 
        "A huge encyclopedia in a variety of languages. It is possible to find almost any article about anything. It is often used in google search as a snippet.", 
        WEBSITE_ICONS . "/wikipedia.png",
        "https://www.wikipedia.org"),

    new WebsiteModel(
        "Google", 
        "It's not just a search engine - it's a whole ecosystem of many services. I mostly use this particular search engine.", 
        WEBSITE_ICONS . "/google.png",
        "https://www.google.com/"),

    new WebsiteModel(
        "MangaLib", 
        "The largest Russian-language website with Japanese manga. It also has a huge community", 
        WEBSITE_ICONS . "/mangalib.png",
        "https://mangalib.me"),

    new WebsiteModel(
        "RanobeLib", 
        "It is also the largest service for Japanese light novels. A lot of works for each genre", 
        WEBSITE_ICONS . "/ranobelib.png",
        "https://ranobelib.me"),
    
    new WebsiteModel(
        "Anilib", 
        "The site where I mostly watch all anime series.", 
        WEBSITE_ICONS . "/animelib.png",
        "https://anilib.me"),

    new WebsiteModel(
        "Javascript.ru", 
        "A website covering all aspects of the Javascript language from the beginning to the end. It is constantly being updated with the advent of new features", 
        WEBSITE_ICONS . "/javascriptru.png",
        "https://learn.javascript.ru"),

    new WebsiteModel(
        "Wallet", 
        "Budgeting, cost planning, and bill allocation. I do all this using the Wallet service", 
        WEBSITE_ICONS . "/wallet.png",
        "https://web.budgetbakers.com"),

    new WebsiteModel(
        "Anilist", 
        "A good service for tracking anime, manga and ranobe. There is also a large community and the ability to subscribe to friends", 
        WEBSITE_ICONS . "/anilist.png",
        "https://anilist.co"),

    new WebsiteModel(
        "Lingust", 
        "A large number of courses in a variety of languages with good presentation of the material. It's just the thing for learning languages.", 
        WEBSITE_ICONS . "/lingust.png",
        "https://lingust.ru"),

    new WebsiteModel(
        "ArchWiki", 
        "An excellent encyclopedia on the Linux system. This wiki can help not only for Arch, but also for other Linux distributions.", 
        WEBSITE_ICONS . "/archwiki.png",
        "https://wiki.archlinux.org"),

    new WebsiteModel(
        "Font Awesome", 
        "A giant library of all kinds of icons for your projects, both free and paid. I use it very often.", 
        WEBSITE_ICONS . "/font-awesome.png",
        "https://fontawesome.com"),

    new WebsiteModel(
        "To Do", 
        "Microsoft To Do is a cloud-based task management application. It allows users to manage their tasks from a smartphone, tablet and computer.", 
        WEBSITE_ICONS . "/to-do.png",
        "https://to-do.office.com/tasks/"),

    new WebsiteModel(
        "Stripe", 
        "Stripe is an online payment processing platform. Extremely convenient integration of the payment system on any website. Good API and high-quality technical support", 
        WEBSITE_ICONS . "/stripe.png",
        "https://stripe.com/"),

    new WebsiteModel(
        "Regex101", 
        "A great site for checking regular expressions", 
        WEBSITE_ICONS . "/regex.png",
        "https://regex101.com/"),
)
?>