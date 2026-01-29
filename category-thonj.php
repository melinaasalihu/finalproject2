<?php
/**
 * Category Landing Page - Thonj (Nails)
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%); padding: 60px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #b5838d; font-size: 3rem; margin: 0;">💅 Shërbime Thonj</h1>
        <p style="font-size: 1.2rem; color: #666; margin-top: 15px;">Zbukuroni dhe shëndetoni thonjet tuaj me shërbime profesionale</p>
    </div>
</section>

<div class="container py-5">
    <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 class="section-title">Pse Të Zgjerdhni Shërbimin Tonë?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">✨</div>
                <h4 style="color: var(--gold);">Cilësi Premium</h4>
                <p style="color: #666; margin: 0;">Produktet më të mirë ndërkombëtare</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">👩‍🦰</div>
                <h4 style="color: var(--gold);">Stafi Trajnuar</h4>
                <p style="color: #666; margin: 0;">Specialistë me përvojë</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">⏰</div>
                <h4 style="color: var(--gold);">Koha e Përshtatshme</h4>
                <p style="color: #666; margin: 0;">Orare fleksibël sipas kërkesave</p>
            </div>
        </div>
    </div>

    <div style="border-top: 2px solid #eee; padding-top: 40px;">
        <h2 class="section-title">Shërbime të Disponueshme</h2>
        <div class="services-grid">
            <?php
            $term = get_queried_object();
            $args = array(
                'post_type' => 'sherbimet',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'kategoria_sherbimit',
                        'field' => 'id',
                        'terms' => $term->term_id,
                    ),
                ),
            );
            
            $services = new WP_Query($args);
            
            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post(); ?>
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
                echo '<p style="grid-column: 1/-1; text-align: center;">Nuk ka shërbime të shtuara në këtë kategori.</p>';
            endif;
            ?>
        </div>
    </div>

    <div style="background: #f9f9f9; padding: 40px; border-radius: 12px; margin-top: 50px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.8rem; margin-top: 0;">Rezervoni Tani</h3>
        <p style="color: #666; margin-bottom: 20px;">Merrni një përvojë të paharrueshme të bukurisë</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn-gold" style="padding: 12px 30px; font-size: 1.05rem;">Kontakto Për Rezervim</a>
    </div>
</div>

<?php get_footer(); ?>