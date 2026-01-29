<?php
// Simple setup file
@define('WP_USE_THEMES', false);
require __DIR__ . '/../../../../wp-load.php';

// Ensure page exists
$page = get_page_by_path('nails', OBJECT, 'page');

if (!$page) {
    // Create the page
    $id = wp_insert_post(array(
        'post_type' => 'page',
        'post_title' => 'Thonj',
        'post_name' => 'nails',
        'post_content' => 'Gallery e punimeve tona të nails',
        'post_status' => 'publish',
        'post_author' => 1,
    ), false);
    
    if ($id && !is_wp_error($id)) {
        update_post_meta($id, '_wp_page_template', 'nails.php');
        flush_rewrite_rules(false);
    }
}

// Check if it worked
$page = get_page_by_path('nails', OBJECT, 'page');
if ($page) {
    header('Location: ' . get_permalink($page->ID));
} else {
    header('Location: ' . home_url());
}
exit;
?>
