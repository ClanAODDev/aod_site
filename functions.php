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
    /**
     * AODThemeSetup constructor.
     */
    public function __construct()
    {
        add_action('init', [$this, 'handleNavigation']);

        add_action('wp_enqueue_scripts', [$this, 'enqueue']);

        add_action('admin_init', [$this, 'addEditorStyle']);

        add_theme_support('post-thumbnails');

        add_filter('body_class', [$this, 'add_slug_body_class']);

    }

    public function add_slug_body_class($classes)
    {
        global $post;
        if (isset($post)) {
            $classes[] = $post->post_type . '-' . $post->post_name;
        }

        return $classes;
    }

    /**
     * Import editor style for admin experience
     */
    public function addEditorStyle()
    {
        add_editor_style('editor.css');
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

    /**
     * Provide theme awareness to front-end scripts
     */
    private function localizationForScripts()
    {
        wp_localize_script('aod-main', 'AOD', ['path' => get_template_directory_uri()]);
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
