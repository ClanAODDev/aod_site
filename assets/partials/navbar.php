<?php defined('ABSPATH') or die(); ?>

<div class="primary-nav <?= (! is_front_page()) ? 'stay-fixed' : null; ?>">
    <div class="nav-texture">
        <?php
        wp_nav_menu([
            'theme_location' => 'primary_nav',
        ]);
        ?>
    </div>
</div>
