
<?php 
include(INCLUDES_PATH . "/header_nav.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stepan Turitsin - <?php echo $title ?></title>
    <link rel="shortcut icon" type="image/png" href="/favicon.png">

    <meta name="description" content="<?php echo $description ?>">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz@0,14..32;1,14..32&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Google fonts/ -->

    <!-- Font Awesome -->
    <link href="/assets/fontawesome-free-6.6.0-web/css/fontawesome.min.css" rel="stylesheet" />
    <link href="/assets/fontawesome-free-6.6.0-web/css/brands.min.css" rel="stylesheet" />
    <link href="/assets/fontawesome-free-6.6.0-web/css/solid.min.css" rel="stylesheet" />
    <!-- Font Awesome/ -->

    <link rel="stylesheet" href="/assets/css/reset.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-inner">
                
                <?php get_nav_menu(); ?>

                <span class="vertical-divider"></span>
                <ul class="header__external-links">
                    <li>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-github"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-telegram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="wrapper <?php echo $wrapper_class ?>">
