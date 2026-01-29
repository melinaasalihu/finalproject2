<?php get_header(); ?>
<div class="container py-5">
    <a href="<?php echo home_url(); ?>" style="text-decoration:none; color:#b5838d; display: inline-block; margin-bottom: 20px;">&larr; Kthehu te Dashboard</a>
    
    <h1 class="archive-title" style="font-family: 'Playfair Display', serif; color: var(--gold); margin: 30px 0; border-bottom: 2px solid var(--pink); padding-bottom: 20px;">
        <?php the_archive_title(); ?>
    </h1>
    
    <?php if(have_posts()) : ?>
        <div class="services-grid">
            <?php while(have_posts()) : the_post(); ?>
                <div class="service-card">
                    <?php if(has_post_thumbnail()) the_post_thumbnail('salon-medium'); ?>
                    <div class="p-3">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="btn-gold">Shiko Detajet</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('← Më Parë', 'beauty-salon'),
            'next_text' => __('Më Pas →', 'beauty-salon'),
        )); ?>
    <?php else : ?>
        <p style="text-align: center; padding: 40px 0; color: #999;">
            Nuk u gjet asnjë shërbim në këtë kategori.
        </p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>