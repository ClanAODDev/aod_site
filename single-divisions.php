<?php
get_header();

/**
 * Template Name: Divisions Template
 */

$url = get_template_directory_uri() . '/public/images/';
$borderBg = "url('{$url}division-bg-border.jpg')";

include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <?php $background = meta('header_image'); ?>

    <section class="division" data-application-id="<?= meta('application_id') ?>" style="background: <?= "url({$background}) no-repeat, {$borderBg} repeat-x" ?>; background-position: top center;">
        <div class="section-content-container">
            <div id="sub-nav"></div>

            <div id="general" class="game-header">
                <img class="game" src="<?= meta('division_icon'); ?>"/>
                <h1><?php the_title(); ?> Division</h1>
            </div>

            <!--            <div class="command-staff sub-section">-->
            <!--                <h2 id="command-staff" class="automenu-heading">Command Staff</h2>-->
            <!--                --><?php //foreach ($division['leaders'] as $member): ?>
            <!--                    <div class="member">-->
            <!--                        <div class="name --><? //= strtolower($member['rank']) ?><!--">-->
            <!--                            --><? //= "{$member['rank']} {$member['name']}" ?>
            <!--                        </div>-->
            <!--                        <div class="position">--><? //= $member['position'] ?><!--</div>-->
            <!--                    </div>-->
            <!--                --><?php //endforeach; ?>
            <!--            </div>-->

            <?php the_content(); ?>
        </div>
    </section>

<?php endwhile; endif;
get_footer(); ?>
