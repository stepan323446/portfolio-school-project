<?php get_header(
    "404", 
    "Page not found.",
    "not-found-wrapper",
    'not-found',
    [
        ['robots', 'noindex'],
        ['keywords', 'portfolio, web development, programming']
    ]) ?>

<h1>404</h1>
<h2>Page not found</h2>
<a class="btn" href="<?php echo HOME_URL ?>">Return to home</a>

<?php get_footer() ?>