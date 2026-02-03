<?php
/**
 * Category Landing Page - Makeup
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%); padding: 60px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #222; font-size: 3rem; margin: 0;">💄 Shërbime Makeup</h1>
        <p style="font-size: 1.2rem; color: #666; margin-top: 15px;">Shkëlqejani me makiazh profesional për çdo rast</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Artistët tanë të mirë do t'ju bëjnë të ndiheni të bukur dhe të sigurt.</p>
    </div>
</section>

<div class="container py-5">
    <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 class="section-title">Pse Të Zgjerdhni Shërbimin Tonë?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">💎</div>
                <h4 style="color: var(--gold);">Brenda Luksuze</h4>
                <p style="color: #666; margin: 0;">Produktet më të mirë të markave</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">🎨</div>
                <h4 style="color: var(--gold);">Artistikë Kreative</h4>
                <p style="color: #666; margin: 0;">Artistët tanë janë ekspertë</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">📸</div>
                <h4 style="color: var(--gold);">Perfekt Për Foto</h4>
                <p style="color: #666; margin: 0;">E qëndrueshme dhe e bukur</p>
            </div>
        </div>
    </div>

    <div style="background: #f5f5f5; padding: 30px; border-radius: 10px; margin-bottom: 50px;">
        <h3 style="color: #222; font-size: 1.5rem; margin-top: 0;">Spesializimet e Makijazhit</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 20px;">
            <div>
                <h4 style="color: #c5a059;">💒 Brida & Dasma</h4>
                <p>Makiazh i përfektë për ditën tuaj speciale - i qëndrueshëm gjatë gjithë ditës.</p>
            </div>
            <div>
                <h4 style="color: #c5a059;">📸 Foto Profesionale</h4>
                <p>Makiazh i optimizuar për fotografitë e bukura dhe të qëndrueshme.</p>
            </div>
            <div>
                <h4 style="color: #c5a059;">🎉 Makinazh Dite</h4>
                <p>Stile të ndryshme për festa, evente dhe okasione të veçanta.</p>
            </div>
            <div>
                <h4 style="color: #c5a059;">💄 Makiazh Ditor</h4>
                <p>Makiazh i butë dhe natyral për përdorim të përditshëm.</p>
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
            linear-gradient(135deg, #ffe6cc 0%, #ffd4ad 100%); padding: 40px; border-radius: 12px; margin-top: 50px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: #222; font-size: 1.8rem; margin-top: 0;">Lëni Artistin e Makijazhit Tuaj</h3>
        <p style="color: #666; margin-bottom: 20px;">Makiazh i personalizuar për t'ju bërë të veshur perfekt!
            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post(); ?>
                    <div class="service-card">
                        <div class="card-img">
                            <?php 
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('salon-medium', array('alt' => get_the_title()));
                            } else {
                                echo '<div style="width: 100%; height: 200px; background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%); display: flex; align-items: center; justify-content: center; color: #222; font-size: 3rem;">💄</div>';
                            }
                            ?>
                        </div>
                        <div class="card-text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="read-more">Shiko Detajet →</a>
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
        <p style="color: #666; margin-bottom: 20px;">Dukja juaj e përfektë ju pret</p>
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-gold" style="padding: 12px 30px; font-size: 1.05rem;">Kontakto Për Rezervim</a>
    </div>
</div>

<?php get_footer(); ?>