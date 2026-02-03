<?php
/**
 * Category Landing Page - Skincare
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #f0f4ff 0%, #e8f1ff 100%); padding: 60px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 3rem; margin: 0;">✨ Shërbime Skincare</h1>
        <p style="font-size: 1.2rem; color: #666; margin-top: 15px;">Kujdesi premium për lëkurën e shëndetshme dhe shkëlqyese</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Trajtimi i lëkurës me produkte natyrore dhe teknika të provuara</p>
    </div>
</section>

<div class="container py-5">
    <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 class="section-title">Pse Të Zgjerdhni Shërbimin Tonë?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">🧖</div>
                <h4 style="color: var(--gold);">Trajtim Relaksues</h4>
                <p style="color: #666; margin: 0;">Relaksim të plotë të trupit</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">🌿</div>
                <h4 style="color: var(--gold);">Produkte Organike</h4>
                <p style="color: #666; margin: 0;">100% natyrale dhe të shëndetshmë</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">👩‍⚕️</div>
                <h4 style="color: var(--gold);">Ekspertë Lëkure</h4>
                <p style="color: #666; margin: 0;">Specialistë të çertifikuar</p>
            </div>
        </div>
    </div>

    <div style="background: #f0f4ff; padding: 30px; border-radius: 10px; margin-bottom: 50px;">
        <h3 style="color: #7c8aa8; font-size: 1.5rem; margin-top: 0;">Përfitimet e Trajtimit të Lëkurës</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 20px;">
            <div>
                <h4 style="color: #7c8aa8;">🧴 Pastrimi i Thellë</h4>
                <p>Heqje të plotë të papastërtive dhe qelizave të vdekura.</p>
            </div>
            <div>
                <h4 style="color: #7c8aa8;">💧 Hidratim Intensiv</h4>
                <p>Rikuperim i lagështirës me prodhime premium dermatologjike.</p>
            </div>
            <div>
                <h4 style="color: #7c8aa8;">🌿 Produkte Natyrore</h4>
                <p>100% natyral, pa kimikate të dëmshme për lëkurën tuaj.</p>
            </div>
            <div>
                <h4 style="color: #7c8aa8;">✨ Rregullim i Pështjellimit</h4>
                <p>Lëkurë më e ndritshme, më e butë dhe më e rinj.</p>
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
            linear-gradient(135deg, #f0f4ff 0%, #e8f1ff 100%); padding: 40px; border-radius: 12px; margin-top: 50px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.8rem; margin-top: 0;">Nxitini Trajtimin e Lëkurës Tuaj</h3>
        <p style="color: #666; margin-bottom: 20px;">Lëkura e shëndetshme fillon këtu!
            if ($services->have_posts()) :
                while ($services->have_posts()) : $services->the_post(); ?>
                    <div class="service-card">
                        <div class="card-img">
                            <?php 
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('salon-medium', array('alt' => get_the_title()));
                            } else {
                                echo '<div style="width: 100%; height: 200px; background: linear-gradient(135deg, #f0f4ff 0%, #e8f1ff 100%); display: flex; align-items: center; justify-content: center; color: #7c8aa8; font-size: 3rem;">✨</div>';
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
        <p style="color: #666; margin-bottom: 20px;">Jepni përvojë kujdesit profesional</p>
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-gold" style="padding: 12px 30px; font-size: 1.05rem;">Kontakto Për Rezervim</a>
    </div>
</div>

<?php get_footer(); ?>