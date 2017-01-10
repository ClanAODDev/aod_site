<?php defined('ABSPATH') or die(); ?>

<div class="primary-nav <?= ( ! is_front_page()) ? 'stay-fixed' : null; ?>">
    <div class="nav-texture full-nav">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary_nav',
        ]);
        ?>
    </div>
    <div class="mobile-nav">
        <img class="clan-logo" href="/"
             src="<?= get_template_directory_uri() ?>/public/images/aod_new.png"/>
        <div class="hamburger"><i class="fa fa-bars fa-2x"></i></div>
        <div class="nav-items">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary_nav',
            ]);
            ?>
        </div>
    </div>
</div>
