<?php

/**
 * Template Name: Landing Page Template
 */

get_header();

include(get_template_directory() . '/assets/partials/introVideo.php');
include(get_template_directory() . '/assets/partials/heroVideo.php');
include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>

<?php get_footer() ?>

