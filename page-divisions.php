<?php

/**
 * Template Name: Divisions Template
 */

use ClanAOD\Repositories\DivisionRepository;

get_header();

//$divisions = require(get_template_directory() . '/data/divisions.php');
$divisions = DivisionRepository::allDivisions();

?>

<?php include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<section class="lobby">
    <div class="section-content-container">
        <div class="section--short-width">
            <div class="section-image"></div>
            <div class="section-blurb">
                <h1>Gaming Divisions</h1>
                <p>Divisions are the lifeblood of the Angels of Death. As such, the leadership invests a great deal of effort and time into vetting each individual game for its worthiness for inclusion as an active division in the community.</p>
            </div>
        </div>

        <div class="divisions-list">
            <div class="collection">
                <?php foreach ($divisions as $post): setup_postdata($post); ?>
                    <a href="<?= $post->guid ?>" class="item game-button">
                        <div class="icon">
                            <div class="game <?= meta('abbreviation'); ?>"></div>
                        </div>
                        <div class="meta">
                            <div class="title"><?= $post->post_title; ?></div>
                            <div class="members">## members</div>
                        </div>
                    </a>
                <?php endforeach; wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>
