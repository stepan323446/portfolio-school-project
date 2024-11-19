<?php get_header(
    'Education',
    'The educational institutions where I studied played a key role in my development and becoming a professional',
    '',
    'education',
    [
        ['robots', 'index, follow'],
        ['keywords', 'portfolio, web development, programming, education, vts']
    ] ) ?>

<div class="container">
    <section class="page-header">
        <span class="page-header__effect"></span>
        <span class="page-header__effect page-header__effect-2"></span>
        <h1>Education</h1>

        <div class="page-description">
            < The educational institutions where I studied played a key role in my development and <b>becoming a professional</b> />
        </div>
    </section>
    <section class="education-items timeline">
        <?php
        foreach ($educations as $ed) {
            $ed->create_element();
        }
        ?>
    </section>

    <blockquote class="quote">
        Education is not preparation for life; education is life itself.
        <span class="quote-author">- John Dewey</span>
    </blockquote>
</div>
<?php get_footer() ?>