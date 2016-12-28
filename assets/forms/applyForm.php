<?php

use ClanAOD\Repositories\DivisionRepository;

$divisions = DivisionRepository::allDivisions(); ?>

<div class="apply-form">
    <div class="form-container" style="
        background-color: #111;
        border: solid 4px #555;
        border-radius: 4px;
        text-align: center;
    ">
        <h2>Apply for a division</h2>
        <ul class="games-listing">
            <?php foreach ($divisions as $post): setup_postdata($post); ?>
                <li class="game <?= meta('abbreviation'); ?>"></li>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </ul>
    </div>
</div>
