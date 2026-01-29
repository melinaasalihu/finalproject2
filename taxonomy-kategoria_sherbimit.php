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
    ?>
    
    <div class="services-grid">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="service-card">
                <?php if(has_post_thumbnail()) the_post_thumbnail('salon-medium'); ?>
                <div class="p-3">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn-gold">Shiko Shërbimin</a>
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
                <a href="<?php echo home_url(); ?>" class="btn-gold" style="display: inline-block; margin-top: 20px;">Kthehu në Ballinë</a>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>