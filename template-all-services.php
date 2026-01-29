<?php
/**
 * Template Name: All Services
 * Display all services with filtering capability
 */
get_header(); ?>

<div class="container py-5">
    <h1 class="section-title">Të Gjithë Shërbimet</h1>
    
    <div class="services-grid" style="margin-top: 40px;">
        <?php
        $args = array(
            'post_type' => 'sherbimet',
            'posts_per_page' => 12,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        
        $services_query = new WP_Query($args);
        
        if ($services_query->have_posts()) :
            while ($services_query->have_posts()) : $services_query->the_post(); ?>
                <div class="service-card">
                    <?php if(has_post_thumbnail()) the_post_thumbnail('salon-medium'); ?>
                    <div class="p-3">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn-gold">Shiko Detajet</a>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p style="text-align: center;">Nuk ka shërbime të shtuara akoma.</p>';
        endif;
        ?>
    </div>

    <?php 
    the_posts_pagination(array(
        'mid_size' => 2,
        'prev_text' => __('← Më Parë', 'beauty-salon'),
        'next_text' => __('Më Pas →', 'beauty-salon'),
    ));
    ?>
</div>

<?php get_footer(); ?>