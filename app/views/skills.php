<?php get_header(
    'Skills',
    'Explore my professional skills and technical expertise, including programming, web development, database management, and creating interactive applications.',
    '',
    'skills',
    [
        ['robots', 'index, follow'],
        ['keywords', 'portfolio, web development, programming, skills, frontend, backend, devops']
    ] ) ?>

<div class="container">
    <section class="page-header">
        <span class="page-header__effect"></span>
        <span class="page-header__effect page-header__effect-2"></span>
        <h1>Skills</h1>

        <div class="page-description">
            < Explore my <b>professional skills</b> and technical expertise, including programming, web development, database management, and creating interactive applications. />
        </div>
    </section>

    <section class="skills-phrases">
        <div class="phrase">Main direction is web developming</div>
        <div class="phrase">Knowledge are backend and frontend</div>
        <div class="phrase">Basic knowledge of design</div>
    </section>

    <section class="soft-skills">
        <div class="item">
            <div class="icon"><i class="fa fa-expand"></i></div>
            <div class="name">
                Adaptability
            </div>
            <div class="descpr">
                The willingness and ability to adjust to new conditions, project changes, or work processes.
            </div>
        </div>
        <div class="item">
            <div class="icon"><i class="fas fa-pen"></i></div>
            <div class="name">
                Creativity
            </div>
            <div class="descpr">
                The ability to think outside the box, generate new ideas, and approach problems from unique angles.
            </div>
        </div>
        <div class="item">
            <div class="icon"><i class="fas fa-brain"></i></div>
            <div class="name">
                Self-learning
            </div>
            <div class="descpr">
                Independently acquiring new knowledge and skills without external guidance or supervision
            </div>
        </div>
    </section>

    <section class="skill-categories">
        <?php foreach($skill_categories as $cat_name => $cat): ?>
            <div class="cat">
                <h2><?php echo $cat_name ?></h2>

                <div class="skills">
                    <?php foreach($cat as $skill) {
                        $skill->create_element();
                    }
                    ?>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</div>

<?php get_footer() ?>