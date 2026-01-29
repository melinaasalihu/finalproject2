<?php
// Debug file to check if nails page exists
require_once(__DIR__ . '/../../../../wp-load.php');

echo "<h1>DEBUG: Checking Nails Page</h1>";

$nails_page = get_page_by_path('nails', OBJECT, 'page');

if ($nails_page) {
    echo "✅ Faqja 'nails' EKZISTON!<br>";
    echo "ID: " . $nails_page->ID . "<br>";
    echo "Title: " . $nails_page->post_title . "<br>";
    echo "Slug: " . $nails_page->post_name . "<br>";
    echo "URL: <a href='" . get_permalink($nails_page->ID) . "'>" . get_permalink($nails_page->ID) . "</a><br>";
    echo "Template: " . get_post_meta($nails_page->ID, '_wp_page_template', true) . "<br>";
} else {
    echo "❌ Faqja 'nails' NUK EKZISTON<br>";
    echo "Duke provuar ta krijoni...<br>";
    
    $page_id = wp_insert_post(array(
        'post_title' => 'Thonj',
        'post_content' => 'Përvojat më të bukura të thongjeve',
        'post_type' => 'page',
        'post_name' => 'nails',
        'post_status' => 'publish',
        'post_author' => 1
    ));
    
    if ($page_id && !is_wp_error($page_id)) {
        update_post_meta($page_id, '_wp_page_template', 'nails.php');
        echo "✅ Faqja u krijua! ID: " . $page_id . "<br>";
        echo "URL: <a href='" . get_permalink($page_id) . "'>" . get_permalink($page_id) . "</a>";
    } else {
        echo "❌ Gabim në kriimin e faqes: " . $page_id->get_error_message();
    }
}

// Check front page link
echo "<hr>";
echo "<h2>Link në Homepage:</h2>";
echo "Link për Thonj: <a href='" . home_url('/nails/') . "'>" . home_url('/nails/') . "</a>";
?>
