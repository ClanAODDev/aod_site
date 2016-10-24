<?php

get_header();

/**
 * Template Name: Divisions Template
 */

$divisions = require(get_template_directory() . '/data/divisions.php'); ?>

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
                <?php foreach ($divisions as $division): ?>
                    <div class="item game-button">
                        <div class="icon">
                            <div class="game <?= $division['abbreviation'] ?>"></div>
                        </div>
                        <div class="meta">
                            <div class="title"><?= $division['name'] ?></div>
                            <div class="members"><?= $division['members'] ?> members</div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>
