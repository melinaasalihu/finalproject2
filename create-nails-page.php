<?php
/**
 * Setup Nails Page - Run this once to create the page
 */
require_once(__DIR__ . '/../../../../wp-load.php');

// Check if page exists
$existing = get_page_by_path('nails', OBJECT, 'page');

if ($existing) {
    // Update existing page
    wp_update_post(array(
        'ID' => $existing->ID,
        'post_status' => 'publish',
        'post_title' => 'Thonj'
    ));
    update_post_meta($existing->ID, '_wp_page_template', 'nails.php');
    echo "Page updated: " . get_permalink($existing->ID);
} else {
    // Create new page
    $page_id = wp_insert_post(array(
        'post_type' => 'page',
        'post_title' => 'Thonj',
        'post_name' => 'nails',
        'post_content' => 'Gallery e punimeve tona të nails',
        'post_status' => 'publish',
        'post_author' => 1,
    ), true);
    
    if (!is_wp_error($page_id)) {
        update_post_meta($page_id, '_wp_page_template', 'nails.php');
        // Flush rewrite rules
        flush_rewrite_rules(false);
        echo "✅ Page created: " . get_permalink($page_id);
    } else {
        echo "❌ Error: " . $page_id->get_error_message();
    }
}

// Redirect to homepage
wp_safe_remote_get(home_url());
wp_redirect(home_url());
exit;
