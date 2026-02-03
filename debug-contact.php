<?php
/**
 * Debug: check contact page and rewrite rules
 * Visit this file in your browser to see diagnostics.
 */

require_once __DIR__ . '/../../../wp-load.php';

header('Content-Type: text/plain; charset=utf-8');

echo "Debugging contact page and rewrite rules\n";
echo "====================================\n\n";

// Check page
$page = get_page_by_path('contact', OBJECT, 'page');
if ($page) {
    echo "FOUND contact page\n";
    echo "ID: " . $page->ID . "\n";
    echo "Title: " . $page->post_title . "\n";
    echo "Status: " . $page->post_status . "\n";
    echo "Slug: " . $page->post_name . "\n";
    echo "Permalink: " . get_permalink($page->ID) . "\n\n";
} else {
    echo "NOT FOUND: get_page_by_path('contact') returned false\n\n";
}

// Permalink structure
$permalink = get_option('permalink_structure');
echo "Permalink structure: " . ($permalink ? $permalink : '(plain)') . "\n\n";

// Rewrite rules
global $wp_rewrite;
echo "Rewrite base: " . ($wp_rewrite->rewritebase ?? '') . "\n";
$rules = $wp_rewrite->rules;
if ($rules && is_array($rules)) {
    echo "Found " . count($rules) . " rewrite rules (showing first 40)\n";
    $i = 0;
    foreach ($rules as $k => $v) {
        echo "$k => $v\n";
        if (++$i >= 40) break;
    }
} else {
    echo "No rewrite rules available or inaccessible.\n";
}

echo "\n.htaccess file present: " . (file_exists(ABSPATH . '.htaccess') ? 'yes' : 'no') . "\n";
if (file_exists(ABSPATH . '.htaccess')) {
    echo "\n.htaccess contents (first 2000 chars):\n";
    $ht = file_get_contents(ABSPATH . '.htaccess');
    echo substr($ht, 0, 2000) . "\n";
}

// End
echo "\nDiagnostics complete.\n";
