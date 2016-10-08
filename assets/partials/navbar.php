<div class="primary-nav <?php /** isLandingPage() */ ?>">
    <div class="nav-texture">
        <?php

        wp_nav_menu([
            'theme_location' => 'primary_nav',
        ]);

        ?>
    </div>
</div>

<?php /** review http://www.billerickson.net/customize-which-menu-item-is-marked-active/  **/ ?>