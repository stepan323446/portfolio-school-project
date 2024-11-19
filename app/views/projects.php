<?php get_header(
    'Projects',
    'A showcase of my projects: web development, apps, and creative tech solutions.',
    '',
    'projects',
    [
        ['robots', 'index, follow'],
        ['keywords', 'portfolio, web development, programming, projects']
    ] ) ?>

<div class="container">
    <section class="page-header">
        <span class="page-header__effect"></span>
        <span class="page-header__effect page-header__effect-2"></span>
        <h1>Projects</h1>

        <div class="page-description">
            < Here are <b>some of my projects</b>. Each of them is <b>unique</b> and <b>interesting</b> in its own way />
        </div>
    </section>
    <section class="project-items">
        <?php
        foreach ($projects as $project) {
            $project->create_element();
        }
        ?>
    </section>
</div>

<?php get_footer() ?>