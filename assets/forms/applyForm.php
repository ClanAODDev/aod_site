<?php

use ClanAOD\Repositories\DivisionRepository;

$divisions = DivisionRepository::allDivisions(); ?>

<div class="apply-form" style="display: none;">
    <h2>Apply for a division</h2>
    <hr/>
    <div class="games-listing">
        <?php foreach ($divisions as $post): setup_postdata($post); ?>
            <a href="#" data-application-id="<?= meta('application_id') ?>"
               data-application-link class="tooltips">
                <img class="game" src="<?= meta('division_icon'); ?>"/>
                <span><?= $post->post_title ?></span>
            </a>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </div>
    <hr/>
    <p>You will be taken to our forums to complete the application process.</p>
</div>

