<?php
get_header();

/**
 * Template Name: Divisions Template
 */

include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <section class="division bf">
        <div class="section-content-container">

            <div class="sub-nav">
                <ul>
                    <li><a class="smooth-scroll" href="#general">General</a></li>
                    <li><a class="smooth-scroll" href="#apply-to-division">Apply to division</a></li>
                </ul>
            </div>

            <div id="general" class="game-header">
                <div class="game bf"></div>
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

<?php endwhile; endif; ?>

<?php get_footer() ?>