<?php
    function site_editor_content_api_page() {
        include_once plugin_dir_path(__FILE__) . 'notification.php';
        // Get current content
        $homepage_id = get_option('page_on_front');
        $content = '';
        if ($homepage_id) {
            $content = get_post_field('post_content', $homepage_id);
        } else {
            echo '<div class="error"><p>No homepage set. Please set a homepage in the <a href="' . admin_url('options-reading.php') . '">Reading Settings</a>.</p></div>';
        }
        ?>
        <div class="wrap">
            <h1>Site Editor Content API</h1>
            <p>This plugin provides a REST API endpoint to get the block content of the Site Editor.</p>
            <div style="display: flex;">
                <div style="flex: 2; padding-right: 20px;">
                    <form method="post" action="">
                        <input type="submit" value="Update Content" class="button button-primary">
                    </form>
                </div>
                <div style="flex: 4;">
                    <iframe src="http://localhost:3000/" width="100%" height="800px"></iframe>
                </div>
            </div>
        </div>
        
        <script>
            window.addEventListener('message', function(event) {
                console.log('Received message from Site Editor:', event.data);
                // Ensure the message is coming from the expected origin
                if (event.origin !== 'http://localhost:3000') {
                    return;
                }
    
                // Handle the message
                if (event.data.type === 'updateContent') {
                    // Update the textarea with the new content
                    document.querySelector('textarea[name="site_editor_content"]').value = event.data.content;
                }
            });
        </script>
        <?php
    }