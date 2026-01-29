<?php
// Theme Setup
function beauty_salon_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('responsive-embeds');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    register_nav_menus(array(
        'primary' => 'Menuja Kryesore',
        'footer' => 'Menuja e Këmbës'
    ));
    
    // Add custom image sizes
    add_image_size('salon-thumbnail', 280, 220, true);
    add_image_size('salon-medium', 400, 300, true);
    add_image_size('salon-large', 800, 600, true);
}
add_action('after_setup_theme', 'beauty_salon_setup');

// Enqueue Styles and Scripts
function beauty_salon_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'));
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap');
    
    // Add custom JS
    wp_enqueue_script('beauty-salon-js', get_template_directory_uri() . '/js/main.js', array('jquery'), filemtime(get_template_directory() . '/js/main.js'), true);
}
add_action('wp_enqueue_scripts', 'beauty_salon_assets');

// Register CPT and Taxonomy
function register_beauty_features() {
    register_post_type('sherbimet', array(
        'labels' => array(
            'name' => 'Shërbimet',
            'singular_name' => 'Shërbimi',
            'add_new' => 'Shto Shërbim të Ri',
            'add_new_item' => 'Shto Shërbim të Ri',
            'edit_item' => 'Redakto Shërbimin',
            'view_item' => 'Shiko Shërbimin',
            'all_items' => 'Të Gjithë Shërbimet'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-appearance',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite' => array('slug' => 'sherbimet'),
        'show_in_rest' => true,
    ));

    register_taxonomy('kategoria_sherbimit', 'sherbimet', array(
        'labels' => array(
            'name' => 'Kategoritë',
            'singular_name' => 'Kategori',
            'add_new_item' => 'Shto Kategori të Re',
            'edit_item' => 'Redakto Kategorinë'
        ),
        'hierarchical' => true,
        'show_admin_column' => true,
        'rewrite' => array('slug' => 'lloj-sherbimi'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'register_beauty_features');

// Custom Pagination
function beauty_salon_pagination() {
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('← Më Parë', 'beauty-salon'),
        'next_text' => __('Më Pas →', 'beauty-salon'),
    ));
}

// Remove admin bar for better frontend display
add_filter('show_admin_bar', '__return_false');

// Customize Login Logo
function beauty_salon_login_logo() { ?>
    <style type="text/css">
        #login h1 a { 
            background-size: contain !important;
            width: 100%;
            height: auto;
        }
    </style>
<?php }
add_action('login_head', 'beauty_salon_login_logo');

// Add custom excerpt length
function beauty_salon_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'beauty_salon_excerpt_length');

// Customize excerpt more text
function beauty_salon_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'beauty_salon_excerpt_more');

// Add Testimonial Custom Post Type
function register_testimonial_post_type() {
    register_post_type('testimonial', array(
        'labels' => array(
            'name' => 'Përmendore',
            'singular_name' => 'Përmendore',
            'add_new' => 'Shto Përmendore të Re',
            'add_new_item' => 'Shto Përmendore të Re',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-format-quote',
        'supports' => array('title', 'editor'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'register_testimonial_post_type');

// Add custom meta for testimonials
function add_testimonial_meta_box() {
    add_meta_box('testimonial_meta', 'Detajet e Përmendores', 'testimonial_meta_callback', 'testimonial');
}
add_action('add_meta_boxes', 'add_testimonial_meta_box');

function testimonial_meta_callback($post) {
    $author = get_post_meta($post->ID, '_testimonial_author', true);
    $service = get_post_meta($post->ID, '_testimonial_service', true);
    ?>
    <p>
        <label for="testimonial_author">Emri i Klientit:</label>
        <input type="text" name="testimonial_author" id="testimonial_author" value="<?php echo esc_attr($author); ?>" style="width: 100%; padding: 5px;">
    </p>
    <p>
        <label for="testimonial_service">Shërbimi i Përdorur:</label>
        <input type="text" name="testimonial_service" id="testimonial_service" value="<?php echo esc_attr($service); ?>" style="width: 100%; padding: 5px;">
    </p>
    <?php
}

function save_testimonial_meta($post_id) {
    if (isset($_POST['testimonial_author'])) {
        update_post_meta($post_id, '_testimonial_author', sanitize_text_field($_POST['testimonial_author']));
    }
    if (isset($_POST['testimonial_service'])) {
        update_post_meta($post_id, '_testimonial_service', sanitize_text_field($_POST['testimonial_service']));
    }
}
add_action('save_post', 'save_testimonial_meta');

// Handle Contact Form Submissions
function handle_contact_form() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['email'])) {
        // Sanitize inputs
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone'] ?? '');
        $service = sanitize_text_field($_POST['service']);
        $message = sanitize_textarea_field($_POST['message']);

        // Prepare email
        $to = get_option('admin_email');
        $subject = 'Mesazh i Ri nga ' . $name;
        $body = "Emri: $name\nEmail: $email\nTelefoni: $phone\nShërbimi: $service\n\nMessazhi:\n$message";
        
        $headers = array('Content-Type: text/plain; charset=UTF-8');

        // Send email
        if (wp_mail($to, $subject, $body, $headers)) {
            // Set success message
            $_SESSION['contact_form_success'] = true;
        }
    }
}
add_action('template_redirect', 'handle_contact_form');

// Display success message on contact page
function display_contact_success_message() {
    if (isset($_SESSION['contact_form_success']) && $_SESSION['contact_form_success']) {
        echo '<div style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
            ✓ Mesazhi juaj u dërgua me sukses! Do t\'ju kontaktojmë sa më shpejt.
        </div>';
        unset($_SESSION['contact_form_success']);
    }
}

// Add sidebar support for future use
function beauty_salon_widgets_init() {
    register_sidebar(array(
        'name'          => 'Primary Sidebar',
        'id'            => 'primary-sidebar',
        'description'   => 'Main sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'beauty_salon_widgets_init');