<?php 
/**
 * Single Sherbimet (Service) Post Template
 */
get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <article <?php post_class('service-single'); ?>>
        <!-- Breadcrumbs -->
        <div class="container" style="padding: 20px 0; font-size: 0.9rem; color: #999;">
            <a href="<?php echo home_url(); ?>" style="color: var(--gold); text-decoration: none;">Ballina</a>
            <span> / </span>
            <a href="<?php echo home_url('/sherbimet'); ?>" style="color: var(--gold); text-decoration: none;">Shërbime</a>
            <span> / </span>
            <span><?php the_title(); ?></span>
        </div>

        <!-- Featured Image -->
        <?php if(has_post_thumbnail()) : ?>
            <div style="width: 100%; max-height: 500px; overflow: hidden;">
                <?php the_post_thumbnail('salon-large', array('style' => 'width: 100%; height: auto; object-fit: cover;')); ?>
            </div>
        <?php endif; ?>

        <!-- Content -->
        <div class="container py-5">
            <div style="max-width: 850px; margin: 0 auto;">
                <!-- Title & Meta -->
                <header style="margin-bottom: 30px; border-bottom: 2px solid #eee; padding-bottom: 20px;">
                    <h1 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 2.5rem; margin: 0 0 15px 0;">
                        <?php the_title(); ?>
                    </h1>
                    
                    <div style="display: flex; gap: 20px; flex-wrap: wrap; align-items: center; color: #999; font-size: 0.9rem;">
                        <span>📅 <?php echo get_the_date('d.m.Y'); ?></span>
                        <span>✍️ <?php the_author(); ?></span>
                        
                        <!-- Category -->
                        <?php 
                        $categories = get_the_terms(get_the_ID(), 'kategoria_sherbimit');
                        if($categories && !is_wp_error($categories)) {
                            foreach($categories as $cat) {
                                echo '<a href="' . esc_url(get_term_link($cat)) . '" style="background: var(--pink); color: var(--gold); padding: 4px 12px; border-radius: 20px; text-decoration: none;">📂 ' . esc_html($cat->name) . '</a>';
                            }
                        }
                        ?>
                    </div>
                </header>

                <!-- Post Content -->
                <div style="color: #555; line-height: 1.8; margin-bottom: 40px; font-size: 1.05rem;">
                    <?php the_content(); ?>
                </div>

                <!-- Tags Section -->
                <?php 
                $tags = get_the_tags();
                if($tags && !is_wp_error($tags)) : ?>
                    <div style="background: #f9f9f9; padding: 20px; border-radius: 10px; margin-bottom: 40px;">
                        <h4 style="margin-top: 0; color: var(--gold);">🏷️ Etiketa:</h4>
                        <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                            <?php 
                            foreach($tags as $tag) {
                                echo '<a href="' . esc_url(get_tag_link($tag->term_id)) . '" style="background: white; border: 1px solid var(--gold); color: var(--gold); padding: 6px 14px; border-radius: 20px; text-decoration: none; font-size: 0.9rem; transition: 0.3s;">#' . esc_html($tag->name) . '</a>';
                            }
                            ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Edit Link -->
                <div style="text-align: center; padding: 20px 0; border-top: 2px solid #eee; margin-bottom: 40px;">
                    <?php edit_post_link(__('✎ Redakto këtë shërbim'), '<p style="margin: 0; color: var(--gold); font-weight: 600;">', '</p>'); ?>
                </div>

                <!-- Related Services -->
                <?php 
                $related_args = array(
                    'post_type' => 'sherbimet',
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID()),
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'kategoria_sherbimit',
                            'field' => 'id',
                            'terms' => wp_list_pluck(get_the_terms(get_the_ID(), 'kategoria_sherbimit'), 'term_id'),
                        ),
                    ),
                );
                $related = new WP_Query($related_args);
                
                if($related->have_posts()) : ?>
                    <section style="margin-top: 60px; padding-top: 40px; border-top: 2px solid #eee;">
                        <h3 style="color: var(--gold); font-size: 1.8rem; text-align: center; margin-bottom: 30px;">Shërbime të Ngjashme</h3>
                        <div class="services-grid">
                            <?php 
                            while($related->have_posts()) : $related->the_post();
                                ?>
                                <div class="service-card">
                                    <?php if(has_post_thumbnail()) {
                                        the_post_thumbnail('salon-medium', array('style' => 'width: 100%; height: 250px; object-fit: cover;'));
                                    } else {
                                        echo '<div style="width: 100%; height: 250px; background: linear-gradient(135deg, var(--pink) 0%, #fff 100%); display: flex; align-items: center; justify-content: center; color: var(--gold); font-size: 3rem;">✨</div>';
                                    } ?>
                                    <div class="p-3">
                                        <h4><?php the_title(); ?></h4>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>" class="btn-gold" style="display: inline-block; padding: 8px 15px; background: var(--gold); color: white; text-decoration: none; border-radius: 5px; margin-top: 10px;">Shiko →</a>
                                    </div>
                                </div>
                                <?php
                            endwhile; 
                            wp_reset_postdata();
                            ?>
                        </div>
                    </section>
                <?php endif; ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>