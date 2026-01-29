<?php get_header(); ?>
<main class="container py-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div style="max-width: 800px; margin: 0 auto;">
                <h1 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 2.5rem; margin: 30px 0;">
                    <?php the_title(); ?>
                </h1>
                
                <?php if(has_post_thumbnail()) : ?>
                    <div style="margin: 30px 0; border-radius: 12px; overflow: hidden;">
                        <?php the_post_thumbnail('salon-large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="page-content" style="color: #666; line-height: 1.8; font-size: 1.05rem;">
                    <?php the_content(); ?>
                </div>
                
                <?php if(is_user_logged_in()) : ?>
                    <div style="margin-top: 40px; padding-top: 30px; border-top: 2px solid #eee;">
                        <?php edit_post_link('Redakto këtë faqe', '<span style="color: var(--gold); font-weight: 600;">', '</span>'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>