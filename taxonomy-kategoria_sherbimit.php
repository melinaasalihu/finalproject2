<?php get_header(); ?>
<div class="container py-5">
    <a href="<?php echo home_url(); ?>" style="text-decoration:none; color:#b5838d; display: inline-block; margin-bottom: 20px;">&larr; Kthehu te Dashboard</a>
    
    <h1 class="section-title"><?php single_term_title(); ?></h1>
    
    <?php 
    // Display category description if available
    $term = get_queried_object();
    if (!empty($term->description)) {
        echo '<div style="text-align: center; max-width: 600px; margin: 0 auto 40px; color: #666;">' . wp_kses_post($term->description) . '</div>';
    }
    
    // Add special gallery for nails category
    if ($term->slug === 'thonj') {
        echo '<div style="margin-bottom: 50px;">';
        echo '<h2 style="text-align: center; color: var(--gold); font-size: 2rem; margin-bottom: 30px;">📸 Galeria e Punimeve Tona</h2>';
        echo '<div class="services-grid">';
        
        $nails_images = array('french.jpg', 'gishta.jpg', 'nails.jpg', 'thoj.jpg');
        foreach ($nails_images as $image) {
            $image_path = home_url('/wp-content/themes/finalproject/finalproject/nails/' . $image);
            echo '<div class="service-card" style="cursor: pointer; overflow: hidden;">';
            echo '<img src="' . esc_url($image_path) . '" alt="' . esc_attr($image) . '" style="width: 100%; height: 280px; object-fit: cover; border-radius: 10px;">';
            echo '<div class="p-3" style="text-align: center;">';
            echo '<h4 style="color: var(--gold); margin: 10px 0;">💅 ' . ucfirst(str_replace('.jpg', '', $image)) . '</h4>';
            echo '<p style="color: #666; font-size: 0.9rem; margin: 5px 0;">Dizajn profesional me produkte cilësore</p>';
            echo '</div>';
            echo '</div>';
        }
        
        echo '</div>';
        echo '</div>';
    }
    ?>
    
    <div class="services-grid">
        <?php if(have_posts()) : 
            echo '<h2 style="grid-column: 1 / -1; text-align: center; color: var(--gold); margin-top: 30px;">Shërbimet e Disponueshme</h2>';
            while(have_posts()) : the_post(); ?>
            <div class="service-card">
                <?php if(has_post_thumbnail()) { 
                    the_post_thumbnail('salon-medium', array('style' => 'width: 100%; height: 250px; object-fit: cover;')); 
                } else {
                    echo '<div style="width: 100%; height: 250px; background: linear-gradient(135deg, #ffe6f0 0%, #ffd4e5 100%); display: flex; align-items: center; justify-content: center; color: #c94a8a; font-size: 3rem;">💅</div>';
                } ?>
                <div class="p-3" style="padding: 15px;">
                    <h3 style="color: var(--gold); margin: 10px 0;"><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn-gold" style="display: inline-block; padding: 10px 20px; background: var(--gold); color: white; text-decoration: none; border-radius: 5px; margin-top: 10px;">Shiko Detajet</a>
                </div>
            </div>
        <?php endwhile; 
        
        // Display pagination
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('← Më Parë', 'beauty-salon'),
            'next_text' => __('Më Pas →', 'beauty-salon'),
        ));
        
        else: ?>
            <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
                <p style="color: #999; font-size: 1.1rem;">Nuk ka shërbime të shtuara në këtë kategori.</p>
                <a href="<?php echo home_url(); ?>" class="btn-gold" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background: var(--gold); color: white; text-decoration: none; border-radius: 5px;">Kthehu në Ballinë</a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>