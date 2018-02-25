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

    <section class="page"
             style="background: <?= "url({$defaultHeader}) no-repeat, {$borderBg} repeat-x" ?>; background-position: top center;">
        <div class="section-content-container">
            <div id="sub-nav"></div>
            <?php the_post_thumbnail(); ?>
            <h1 class="post-title"><?php the_title(); ?></h1>
            <h3 class="category-title">
                <?php foreach (get_the_category() as $category) {
                    echo $category->name . " ";
                } ?>
            </h3>

            <p class="date-posted"><?php the_date(); ?></p>
            <?php the_content(); ?>
        </div>
    </section>

<?php endwhile; endif;
get_footer(); ?>

