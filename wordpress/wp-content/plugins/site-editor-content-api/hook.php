<?php
    // Hook into plugin activation to create a homepage if not set
    register_activation_hook(__FILE__, 'site_editor_content_api_activate');

    function site_editor_content_api_activate() {
        $homepage_id = get_option('page_on_front');
        if (!$homepage_id) {
            // Create a new page
            $homepage_id = wp_insert_post(array(
                'post_title' => 'Home',
                'post_content' => 'Welcome to your new homepage!',
                'post_status' => 'publish',
                'post_type' => 'page',
            ));

            // Set the new page as the homepage
            if ($homepage_id) {
                update_option('page_on_front', $homepage_id);
                update_option('show_on_front', 'page');
            }
        }
    }

    
    // Add a menu for the plugin
    add_action('admin_menu', 'site_editor_content_api_menu');

    function site_editor_content_api_menu() {
        add_menu_page(
            'Site Editor Content API', // Page title
            'Site Editor API',         // Menu title
            'manage_options',          // Capability
            'site-editor-content-api', // Menu slug
            'site_editor_content_api_page', // Callback function
            'dashicons-admin-generic', // Icon URL
            20                         // Position
        );
    }

    // Register custom REST API endpoint
    add_action('rest_api_init', function () {
        register_rest_route('custom/v1', '/site-editor-content', array(
            'methods' => 'GET',
            'callback' => 'get_site_editor_content',
            'permission_callback' => 'check_if_user_is_admin',
        ));
    });