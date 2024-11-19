<?php
function get_nav_menu() {
    global $current_page;
    
    $navbar_url_names = array(
        'home',
        'skills',
        'favorites',
        'projects',
        'education',
        'contacts'
    );
    $navbar = array(
        "home" => "/",
        "skills" => "/skills",
        "favorites" => "/favorites",
        "projects" => "/projects",
        "education" => "/education",
        "contacts" => "/contacts",
    );


    ?>
    <nav class="header-nav">
        <ul>
            <?php
            foreach ($navbar_url_names as $name):
            ?>
            <li>
                <?php if($name == Router::$current_router_name): ?>
                    <span><?php echo $name ?></span>
                <?php else: ?>
                    <a href="<?php echo Router::get_url($name) ?>"><?php echo $name ?></a>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <?php
}
?>