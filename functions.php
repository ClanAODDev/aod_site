<?php

/**
 * Set up theme-specific functionality
 */
class AODThemeSetup
{
    public function __construct()
    {
        add_action('init', [$this, 'handleNavigation']);

        add_action('wp_enqueue_scripts', [$this, 'enqueue']);
    }

    /**
     * Implement navigation locations
     */
    public function handleNavigation()
    {
        register_nav_menus([
            'primary_nav' => 'Primary Navigation',
            'footer_sitemap_nav' => 'Footer Sitemap Navigation'
        ]);

        //add_filter('show_admin_bar', '__return_false');
    }

    /**
     * Provide theme awareness to front-end scripts
     */
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