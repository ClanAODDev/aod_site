<?php
get_header();

use ClanAOD\Helpers;

/**
 * Template Name: Divisions Template
 */

$abbrev = meta('abbreviation');
$url = get_template_directory_uri() . '/public/images/';

$divisionBg = "url('{$url}division-headers/{$abbrev}.jpg')";
$borderBg = "url('{$url}division-bg-border.jpg')";

include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section class="division" data-application-id="<?= meta('application_id') ?>"
             style="background: <?= "{$divisionBg} no-repeat, {$borderBg} repeat-x" ?>; background-position: top center;">
        <div class="section-content-container">
            <div id="sub-nav"></div>

            <div id="general" class="game-header">
                <img class="game" src="<?= meta('division_icon'); ?>" />
                <h1><?php the_title(); ?></h1>
            </div>

            <?php the_content(); ?>

            <!-- makeshift iteration of leadership -->
            <?php
            /**
             * <div class="command-staff sub-section">
             * <h2 id="command-staff">Command Staff</h2>
             * <?php foreach ($division['leaders'] as $member): ?>
             * <div class="member">
             * <div class="name <?= strtolower($member['rank']) ?>">
             * <?= "{$member['rank']} {$member['name']}" ?>
             * </div>
             * <div class="position"><?= $member['position'] ?></div>
             * </div>
             * <?php endforeach; ?>
             * </div>
             **/
            ?>

        </div>
    </section>

<?php endwhile; endif;
get_footer(); ?>
