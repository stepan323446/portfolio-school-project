<?php
function get_nav_menu() {
    global $current_page;
    
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
            foreach ($navbar as $key => $value):
            ?>
            <li>
                <?php if($key == $current_page): ?>
                    <span><?php echo $key ?></span>
                <?php else: ?>
                    <a href="<?php echo $value ?>"><?php echo $key ?></a>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <?php
}
?>