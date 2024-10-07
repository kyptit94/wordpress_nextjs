<?php
    function check_if_user_is_admin() {
        if (current_user_can('manage_options')) {
            return true;
        } else {
            return new WP_Error('rest_forbidden', 'You do not have permissions to access this endpoint.', array('status' => 403));
        }
    }
    
    function get_site_editor_content() {
        $homepage_id = get_option('page_on_front');
        if ($homepage_id) {
            $content = get_post_field('post_content', $homepage_id);
            return rest_ensure_response($content);
        } else {
            return new WP_Error('no_homepage', 'No homepage set', array('status' => 404));
        }
    }