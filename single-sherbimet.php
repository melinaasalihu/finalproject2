<?php get_header(); ?>
<main class="container py-5">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
        <div style="margin-bottom: 30px;">
            <a href="<?php echo home_url(); ?>" class="btn-back">&larr; Kthehu në Ballinë</a>
        </div>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="service-detail-header">
                <h1><?php the_title(); ?></h1>
                <?php if(has_post_thumbnail()) the_post_thumbnail('salon-large', array('class' => 'featured-img')); ?>
            </div>

            <div class="service-content" style="max-width: 800px; margin: 40px auto; line-height: 1.8; color: #555;">
                <?php the_content(); ?>
            </div>

            <?php 
            // Display related services by category
            $post_id = get_the_ID();
            $terms = get_the_terms($post_id, 'kategoria_sherbimit');
            
            if ($terms && !is_wp_error($terms)) {
                $term_ids = wp_list_pluck($terms, 'term_id');
                $related_args = array(
                    'post_type' => 'sherbimet',
                    'posts_per_page' => 3,
                    'post__not_in' => array($post_id),
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'kategoria_sherbimit',
                            'field' => 'id',
                            'terms' => $term_ids,
                        ),
                    ),
                );
                $related_services = new WP_Query($related_args);
                
                if ($related_services->have_posts()) : ?>
                    <section style="margin-top: 60px; padding-top: 40px; border-top: 2px solid #eee;">
                        <h3 class="section-title">Shërbime të Ngjashëm</h3>
                        <div class="services-grid">
                            <?php while ($related_services->have_posts()) : $related_services->the_post(); ?>
                                <div class="service-card">
                                    <?php if(has_post_thumbnail()) the_post_thumbnail('salon-medium'); ?>
                                    <div class="p-3">
                                        <h4><?php the_title(); ?></h4>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>" class="btn-gold">Shiko Më Shumë</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    </section>
                <?php endif;
                wp_reset_postdata();
            }
            ?>

            <div class="service-footer" style="margin-top: 50px; padding-top: 30px; border-top: 2px solid #eee;">
                <div style="margin-bottom: 20px;">
                    <?php 
                    $terms = get_the_terms(get_the_ID(), 'kategoria_sherbimit');
                    if ($terms && !is_wp_error($terms)) {
                        echo '<p><strong>Kategoria:</strong> ';
                        foreach ($terms as $term) {
                            echo '<a href="' . get_term_link($term) . '" style="color: var(--gold); text-decoration: none; margin-right: 10px;">' . $term->name . '</a>';
                        }
                        echo '</p>';
                    }
                    ?>
                </div>
                <?php edit_post_link('Redakto këtë shërbim', '<div class="edit-link" style="margin-top: 20px;"><span style="color: #666;">', '</span></div>'); ?>
            </div>
        </article>

    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>