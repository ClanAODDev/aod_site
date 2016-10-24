<?php

get_header();

/**
 * Template Name: Divisions Template
 */

$divisions = require(get_template_directory() . '/data/divisions.php');


?>


<section class="lobby-hero">
    <div class="section-content-container">
        <h1>Gaming Divisions</h1>
        <p class="section--short-width">Divisions are the lifeblood of the Angels of Death. As such, the leadership invests a great deal of effort and time into vetting each individual game for its worthiness for inclusion as an active division in the community.</p>

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
