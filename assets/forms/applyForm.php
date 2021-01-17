<?php

defined('ABSPATH') or die();

use ClanAOD\ExtensionsPlugin;
use ClanAOD\Tracker;

$divisions = ExtensionsPlugin::allDivisions();
$divisionCounts = (new Tracker())->getDivisionInfo();
$counts = Helpers::filterDivisionCounts($divisionCounts);

?>

<div class="apply-form" style="display: none;">
    <h2>1. Create a forum account</h2>
    <p>You must have a forum account in order to apply for one of our divisions.</p>
    <a href="/forums/register.php" target="_blank"
       class="call-to-action-button is-small">Create an account</a>
    <hr class="margin-top-20"/>
    <h2 class="margin-top-20">2. Apply to a division</h2>
    <div class="games-listing">
        <?php foreach ($divisions as $post): setup_postdata($post); ?>
            <?php $abbreviation = meta('abbreviation'); ?>
            <?php if (isset($counts[$abbreviation])): ?>
                <a href="#" data-application-id="<?= meta('application_id') ?>"
                   data-application-link class="tooltips">
                    <img class="game" src="<?= meta('division_icon'); ?>"/>
                    <span><?= $post->post_title ?></span>
                </a>
            <?php endif; ?>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </div>
</div>

