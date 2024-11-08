<?php get_header(
    'Favorite pages',
    '
Here is a collection of all my favorite pages that I visit frequently and rely on for quick access to my most-used sites and resources.',
    '',
    'favorite-pages' ) ?>

    <div class="container">
        <section class="page-header">
            <span class="page-header__effect"></span>
            <span class="page-header__effect page-header__effect-2"></span>
            <h1>Favorite pages</h1>

            <div class="page-description">
                < <b>Explore</b> my favorite web pages, featuring links to sites that inspire and entertain. Discover content that <b>resonates with me!</b> />
            </div>
        </section>
        <section class="page-content favorites-content">
            <?php
            foreach ($websites as $website) {
                $website->create_element();
            }
            ?>
        </section>
    </div>
    

<?php get_footer() ?>