
<?php get_header(
    "Home", 
    "Software developer with experience in web development and building cross-platform applications. I enjoy creating useful tools and applications that improve everyday life.",
    "homepage-wrapper ") ?>

<div class="container homepage">
    <div class="homepage-info">
        <h1>Hi, I'm Stepan</h1>
        <h2 class="text-typing">I'm a <span id="typing">web developer</span> <span class="cursor">|</span></h2>

        <div class="homepage-info__text text-content">
            Software developer with experience in <b>web development</b> and building <b>cross-platform applications</b>. I enjoy creating useful tools and applications that improve everyday life.
        </div>

        <div class="homepage-btn__wrapper">
            <a href="#" class="btn">Download CV</a>
            <span><?php echo date('Y.m.d H:i:s'); ?></span>
        </div>
    </div>
    <div class="homepage-photo image">
        <img src="assets/images/my_photo.png" alt="">
    </div>
</div>

<?php get_footer(array("typing.js", "home.js")) ?>