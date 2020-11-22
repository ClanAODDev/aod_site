<?php

/**
 * Template Name: Divisions Template
 */

use ClanAOD\ExtensionsPlugin;
use ClanAOD\Helpers;
use ClanAOD\Tracker;

get_header();

$divisions = ExtensionsPlugin::allDivisions();
$divisionCounts = (new Tracker())->getDivisionInfo();
$counts = Helpers::filterDivisionCounts($divisionCounts);

include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<meta property="og:url" content="<?= get_permalink(); ?>"/>
<meta property="og:title" content="<?php the_title() ?>"/>
<meta property="og:description" content="<?php the_excerpt() ?>"/>
<meta property="og:site_name" content="Clan AOD"/>

<section class="lobby">
    <div class="section-content-container">
        <div class="section--short-width">
            <div class="section-image"></div>
            <div class="section-blurb">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <h1><?php the_title() ?></h1>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>

        <div class="divisions-list">
            <div class="collection">
                <?php foreach ($divisions as $post): setup_postdata($post); ?>
                <?php $abbreviation = meta('abbreviation'); ?>
                    <a href="<?= get_permalink(); ?>" class="item game-button">
                        <div class="icon">
                            <img class="game" src="<?= meta('division_icon'); ?>" />
                        </div>
                        <div class="meta">
                            <div class="title"><?= $post->post_title; ?></div>
                            <div class="members"><?= $counts[$abbreviation] ?> Members</div>
                        </div>
                    </a>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>
