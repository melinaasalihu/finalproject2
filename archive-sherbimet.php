<?php
/**
 * Archive page for Sherbimet (Services)
 */
get_header(); ?>

<section class="hero-banner" style="background: linear-gradient(135deg, var(--pink) 0%, #fff 100%); padding: 60px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: var(--gold); margin: 0; font-size: 2.5rem;">
            <?php post_type_archive_title(); ?>
        </h1>
        <p style="color: #666; margin-top: 10px; font-size: 1.1rem;">Shfletoni të gjitha shërbimet tona</p>
    </div>
</section>

<div class="container py-5">
    <?php if(have_posts()) : ?>
        <div class="services-grid">
            <?php while(have_posts()) : the_post(); ?>
                <div class="service-card">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail('salon-medium', array('style' => 'width: 100%; height: 250px; object-fit: cover;'));
                    } else {
                        echo '<div style="width: 100%; height: 250px; background: linear-gradient(135deg, var(--pink) 0%, #fff 100%); display: flex; align-items: center; justify-content: center; color: var(--gold); font-size: 3rem;">✨</div>';
                    } ?>
                    <div class="p-3">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <div style="margin-top: 10px; margin-bottom: 10px;">
                            <?php 
                            $terms = get_the_terms(get_the_ID(), 'kategoria_sherbimit');
                            if($terms) {
                                foreach($terms as $term) {
                                    echo '<span style="display: inline-block; background: var(--pink); color: var(--gold); padding: 4px 10px; border-radius: 20px; font-size: 0.8rem; margin-right: 5px;">' . esc_html($term->name) . '</span>';
                                }
                            }
                            ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn-gold" style="display: inline-block; padding: 8px 15px; background: var(--gold); color: white; text-decoration: none; border-radius: 5px;">Shiko Detajet</a>
                        <?php edit_post_link(__('Redakto'), '<span style="display: inline-block; margin-left: 10px; font-size: 0.9rem;">', '</span>'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div style="margin-top: 50px;">
            <?php beauty_salon_pagination(); ?>
        </div>
    <?php else: ?>
        <div style="text-align: center; padding: 60px 20px;">
            <h2 style="color: #999; font-size: 1.5rem;">Nuk ka shërbime të shtuara akoma</h2>
            <p style="color: #bbb; margin-bottom: 20px;">Kthuni më vonë për të parë shërbimet tona</p>
            <a href="<?php echo home_url(); ?>" class="btn-gold" style="display: inline-block; padding: 10px 25px; background: var(--gold); color: white; text-decoration: none; border-radius: 5px;">Kthehu në Ballina</a>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
