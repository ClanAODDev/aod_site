<?php

use ClanAOD\Repositories\DivisionRepository;

$divisions = DivisionRepository::allDivisions(); ?>

<div class="apply-form" style="display: none;">
    <h2>Apply for a division</h2>
    <div class="games-listing">
        <?php foreach ($divisions as $post): setup_postdata($post); ?>
            <img class="game" src="<?= meta('division_icon'); ?>" />
        <?php endforeach;
        wp_reset_postdata(); ?>
    </div>
</div>

