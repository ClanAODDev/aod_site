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
        <a href="/">
            <img class="clan-logo" src="<?= get_template_directory_uri() ?>/public/images/aod_new.png"/>
        </a>
        <div class="hamburger"><i class="fa fa-bars fa-2x"></i></div>
        <div class="nav-items">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary_nav',
            ]);
            ?>
        </div>
    </div>
<?php //do_shortcode('[commo]'); ?>
</div>
