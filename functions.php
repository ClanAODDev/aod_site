<?php

// handle direct access attempts
if ( ! defined('ABSPATH')) {
    exit;
}

use ClanAOD\Helpers;

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
            'footer_sitemap_nav' => 'Footer Sitemap Navigation',
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

        wp_register_script('easy-modal',
            get_template_directory_uri() . '/public/js/jquery.easyModal.min.js?v=0.1.1', 'jquery', null, true
        );

        wp_register_script('aod-main',
            get_template_directory_uri() . '/public/js/main.min.js?v=0.1.1', 'jquery', null, true
        );

        $this->localizationForScripts();

        wp_enqueue_script('easy-modal');
        wp_enqueue_script('aod-main');

    }
}

/**
 * Get meta data - theme
 *
 * @param $field
 * @return mixed
 */
function meta($field)
{
    global $post;

    return Helpers::getField(
        "division_settings_",
        $field,
        $post->ID
    );
}

new AODThemeSetup();
