<?php

/**
 * Template Name: Twitch Template
 */

use ClanAOD\ExtensionsPlugin;
use ClanAOD\Helpers;
use ClanAOD\Tracker;

get_header();

$url = get_template_directory_uri() . '/public/images/';
$defaultHeader = $url . 'page-header.jpg';
$borderBg = "url('{$url}division-bg-border.jpg')";

include(get_template_directory() . '/assets/partials/navbar.php'); ?>

<section class="page">
    <div class="section-content-container" style="width: 100% !important">
        <div class="section">
            <div id="twitch-embed"></div>
        </div>
    </div>
</section>

<!-- Load the Twitch embed script -->
<script src="https://embed.twitch.tv/embed/v1.js"></script>

<!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
<script type="text/javascript">
  new Twitch.Embed('twitch-embed', {
    width: '100%',
    height: '500',
    channel: 'clanaodstream',
    theme: 'dark',
  });
</script>

<?php get_footer() ?>
