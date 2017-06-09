<?php
get_header();

/**
 * Template Name: Divisions Template
 */

$url = get_template_directory_uri() . '/public/images/';
$defaultHeader = $url . 'page-header.jpg';
$borderBg = "url('{$url}division-bg-border.jpg')";

include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php $background = has_post_thumbnail() ? get_the_post_thumbnail_url() : $defaultHeader; ?>

    <section class="page"
             style="background: <?= "url({$background}) no-repeat, {$borderBg} repeat-x" ?>; background-position: top center;">
        <div class="section-content-container automenu">
            <div id="sub-nav"></div>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </section>

<?php endwhile; endif;
get_footer(); ?>

