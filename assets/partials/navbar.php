<div class="primary-nav <?php /** isLandingPage() */ ?>">
    <div class="nav-texture">
        <?php

        $menu = wp_nav_menu([
            'menu' => 'primary_nav',
            'echo' => true
        ]);

        ?>
    </div>
</div>

<?php /** review http://www.billerickson.net/customize-which-menu-item-is-marked-active/  **/ ?>