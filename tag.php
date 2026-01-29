<?php
/**
 * Archive - Tags
 */
get_header(); ?>

<section class="hero-banner" style="background: linear-gradient(135deg, var(--pink) 0%, #fff 100%); padding: 60px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: var(--gold); margin: 0;">
            🏷️ Etiketa: <?php single_tag_title(); ?>
        </h1>
        <p style="color: #666; margin-top: 10px; font-size: 1.1rem;">Postet e etiketuar me <?php single_tag_title(); ?></p>
    </div>
</section>

<div class="container py-5">
    <?php if(have_posts()) : ?>
        <div class="search-results-list">
            <?php while(have_posts()) : the_post(); ?>
                <div class="search-item">
                    <div style="display: flex; gap: 20px; align-items: flex-start;">
                        <?php if(has_post_thumbnail()) : ?>
                            <div style="flex-shrink: 0; width: 120px; height: 120px; border-radius: 8px; overflow: hidden;">
                                <?php the_post_thumbnail('salon-thumbnail', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                            </div>
                        <?php endif; ?>
                        <div style="flex: 1;">
                            <h3 style="margin-top: 0;"><a href="<?php the_permalink(); ?>" style="color: var(--gold); text-decoration: none;"><?php the_title(); ?></a></h3>
                            <p style="color: #666; line-height: 1.6; margin: 10px 0;">
                                <?php echo wp_trim_words(get_the_content(), 30); ?>
                            </p>
                            <div style="display: flex; gap: 15px; align-items: center; margin-top: 10px;">
                                <span style="color: #999; font-size: 0.9rem;">
                                    <?php echo get_the_date('d.m.Y'); ?>
                                </span>
                                <a href="<?php the_permalink(); ?>" style="color: var(--gold); text-decoration: none; font-weight: 600;">
                                    Shiko Më Shumë →
                                </a>
                                <?php edit_post_link(__('(Redakto)'), '<span style="color: #999; font-size: 0.9rem;">', '</span>'); ?>
                            </div>
                        </div>
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
            <h2 style="color: #999; font-size: 1.5rem;">Nuk ka postime me këtë etiketë</h2>
            <p style="color: #bbb; margin-bottom: 20px;">Provoni të kërkoni diçka tjetër</p>
            <a href="<?php echo home_url(); ?>" class="btn-gold" style="display: inline-block; padding: 10px 25px; background: var(--gold); color: white; text-decoration: none; border-radius: 5px;">Kthehu në Ballina</a>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
