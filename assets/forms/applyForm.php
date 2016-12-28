<?php

use ClanAOD\Repositories\DivisionRepository;

$divisions = DivisionRepository::allDivisions(); ?>

<div class="apply-form">
    <h2>Apply for a division</h2>
    <ul class="games-listing">
        <?php foreach ($divisions as $post): setup_postdata($post); ?>
            <li class="game <?= meta('abbreviation'); ?>"></li>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </ul>
</div>

