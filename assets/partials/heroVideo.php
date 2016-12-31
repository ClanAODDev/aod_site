<?php defined('ABSPATH') or die(); ?>

<div class="hero-video">
    <div class="video-container">

        <div class="hero-text">
            <img src="<?= get_template_directory_uri() ?>/public/images/official-logo.png" class="aod-logo"/>
            <h1>Game with purpose<br/>inspired by community</h1>
            <h2 class="subtitle">What are you waiting for?</h2>
            <div class="play-button">PLAY VIDEO</div>
        </div>

        <div class="grid"></div>

        <video id="video" poster="<?= get_template_directory_uri() ?>/public/images/video-poster.jpg" autoplay loop muted>
            <source src="<?= get_template_directory_uri() ?>/public/videos/hero-video.mp4"
                    type="video/mp4">
        </video>
    </div>
</div>
<div class="push"></div>
