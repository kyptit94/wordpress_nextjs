<?php
    
    // Handle form submission
    if (isset($_POST['site_editor_content'])) {
        $homepage_id = get_option('page_on_front');
        if ($homepage_id) {
            wp_update_post(array(
                'ID' => $homepage_id,
                'post_content' => wp_kses_post($_POST['site_editor_content']),
            ));
            echo '<div class="updated"><p>Content updated successfully.</p></div>';
        } else {
            echo '<div class="error"><p>No homepage set.</p></div>';
        }
    }