<?php

/**
 * Set up theme-specific functionality
 */
class AODThemeSetup
{
    public function __construct()
    {
        $this->handleNavigation();

        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    /**
     *
     */
    private function handleNavigation()
    {
        register_nav_menu('primary_nav', __('Primary Navigation'));

        // prevent admin bar from messing with visual
        add_filter('show_admin_bar', '__return_false');
    }

    private function localizationForScripts()
    {
        wp_localize_script('aod-main', 'AOD', ['path' => get_template_directory_uri()]);
    }

    /**
     * Enqueue our public assets, and localize the theme path
     */
    public function enqueue()
    {
        wp_enqueue_script('jquery');

        wp_register_script('aod-main',
            get_template_directory_uri() . '/public/js/main.min.js?v=0.1.0',
            'jquery', null, true
        );

        $this->localizationForScripts();

        wp_enqueue_script('aod-main');

    }
}

new AODThemeSetup();