<?php
/**
 * Generic Taxonomy Archive Template for kategoria_sherbimit
 */
get_header(); 

$term = get_queried_object();
$term_name = $term->name ?? 'Kategori';
$term_slug = $term->slug ?? '';
?>

<section class="category-hero" style="background: linear-gradient(135deg, #f9f9f9 0%, #f0f0f0 100%); padding: 60px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 3rem; margin: 0;">
            <?php echo esc_html($term_name); ?>
        </h1>
        <?php if (!empty($term->description)) : ?>
            <p style="font-size: 1.2rem; color: #666; margin-top: 15px;">
                <?php echo wp_kses_post($term->description); ?>
            </p>
        <?php endif; ?>
    </div>
</section>

<div class="container py-5">
    <a href="<?php echo home_url(); ?>" style="text-decoration:none; color:#b5838d; display: inline-block; margin-bottom: 20px;">&larr; Kthehu te Dashboard</a>

    <div style="border-top: 2px solid #eee; padding-top: 40px;">
        <h2 class="section-title">Shërbime të Disponueshme</h2>
        <div class="services-grid">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <div class="service-card">
                        <div class="card-img">
                            <?php 
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('salon-medium', array('alt' => get_the_title()));
                            } else {
                                echo '<div style="width: 100%; height: 200px; background: linear-gradient(135deg, #ffe6f0 0%, #ffd4e5 100%); display: flex; align-items: center; justify-content: center; color: #c94a8a; font-size: 3rem;">💅</div>';
                            }
                            ?>
                        </div>
                        <div class="card-text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="read-more">Shiko Detajet →</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p style="grid-column: 1/-1; text-align: center; font-size: 1.1rem; color: #666;">
                    Nuk ka shërbime në këtë kategori akoma.
                </p>
            <?php endif; ?>
        </div>
    </div>

    <div style="background: linear-gradient(135deg, #fff9e6 0%, #fff0cc 100%); padding: 40px; border-radius: 12px; margin-top: 50px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.8rem; margin-top: 0;">Interesuar për Këtë Shërbim?</h3>
        <p style="color: #666; margin-bottom: 20px;">Kontaktoni sallonin tonë për më shumë informacion ose për të bërë një rezervim.</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn-gold" style="padding: 12px 30px; font-size: 1.05rem; text-decoration: none; display: inline-block;">Kontakto Tani</a>
    </div>
</div>

<?php get_footer(); ?>
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