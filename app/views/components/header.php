
<?php 
include(INCLUDES_PATH . "/header_nav.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stepan Turitsin - <?php echo $title ?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo ASSETS_PATH . '/favicon.png' ?>">

    <meta name="description" content="<?php echo $description ?>">

    <!-- Meta tags -->
    <meta name="author" content="Stepan Turitsin">

    <?php foreach($meta_tags as $tag): ?>
<meta name="<?php echo $tag[0] ?>" content="<?php echo $tag[1] ?>">
    <?php endforeach; ?>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz@0,14..32;1,14..32&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Google fonts/ -->

    <!-- Font Awesome -->
    <link href="<?php echo ASSETS_PATH . '/fontawesome-free-6.6.0-web/css/fontawesome.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo ASSETS_PATH . '/fontawesome-free-6.6.0-web/css/brands.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo ASSETS_PATH . '/fontawesome-free-6.6.0-web/css/solid.min.css' ?>" rel="stylesheet" />
    <!-- Font Awesome/ -->

    <link rel="stylesheet" href="<?php echo ASSETS_PATH . '/css/reset.css' ?>">
    <link rel="stylesheet" href="<?php echo ASSETS_PATH . '/css/style.css' ?>">
</head>
<body class="<?php echo $body_class ?>">
    <header class="header">
        <div class="container">
            <div class="header-inner">
                
                <?php get_nav_menu(); ?>

                <span class="vertical-divider"></span>
                <ul class="header__external-links">
                    <li>
                        <a href="https://www.linkedin.com/in/stepan-turitsin-009354243/" target="_blank" rel="nofollow"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/stepan323446" target="_blank" rel="nofollow"><i class="fa-brands fa-github"></i></a>
                    </li>
                    <li>
                        <a href="https://t.me/SteveDekart" target="_blank" rel="nofollow"><i class="fa-brands fa-telegram"></i></a>
                    </li>
                </ul>

                <div class="header-title mobile"><a href="<?php echo Router::get_url('home') ?>">Stepan Turitsin</a></div>

                <button type="button" class="mobile" id="mobile-menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </div>
        <div class="header-inner__mobile mobile">
            <?php get_nav_menu(); ?>
        </div>
    </header>

    <div class="wrapper <?php echo $wrapper_class ?>">
