<?php

/**
 * Main landing page
 */

get_header();

?>
    <div class="intro-video">
        <iframe src="https://www.youtube.com/embed/ZCpfySvao9s?autoplay=0&showinfo=0&enablejsapi=1"
                id="video-iframe" frameborder="0" width="960px" height="650px" allowfullscreen></iframe>
    </div>

    <div class="hero-video">
        <div class="video-container">

            <div class="hero-text">
                <img src="<?= get_template_directory_uri() ?>/public/images/official-logo.png" class="aod-logo"/>
                <h1>Some things are<br/>meant to be</h1>
                <h2 class="subtitle">What are you waiting for?</h2>
                <div class="play-button">PLAY VIDEO</div>
            </div>

            <div class="grid"></div>

            <video id="video" poster="<?= get_template_directory_uri() ?>/public/images/video-poster.jpg" autoplay loop muted>
                <source src="<?= get_template_directory_uri() ?>/public/videos/hero-video.mp4"
                        type="video/mp4">
            </video>
        </div>
    </div>

<?php include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer() ?>