<?php
/**
 * Template Name: Testimonials
 * Display customer testimonials and reviews
 */
get_header(); ?>

<section style="background: linear-gradient(135deg, var(--pink) 0%, #fff 100%); padding: 60px 20px;">
    <div class="container">
        <h1 class="section-title">Përvojat e Klientëve Tanë</h1>
        <p style="text-align: center; color: #666; font-size: 1.1rem; max-width: 600px; margin: 20px auto;">
            Dëgjoni historitë inspiruese të klientëve tanë të lumtur
        </p>
    </div>
</section>

<div class="container py-5">
    <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin: 40px 0;">
        <?php
        // Get testimonials from custom post type
        $args = array(
            'post_type' => 'testimonial',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        
        $testimonials = new WP_Query($args);
        
        if ($testimonials->have_posts()) :
            while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
                <div class="testimonial-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                        <?php for($i = 0; $i < 5; $i++) : ?>
                            <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                        <?php endfor; ?>
                    </div>
                    <p style="color: #666; line-height: 1.6; margin: 15px 0; font-style: italic;">
                        "<?php the_content(); ?>"
                    </p>
                    <div style="padding-top: 15px; border-top: 1px solid #eee;">
                        <p style="font-weight: 600; color: var(--dark); margin: 0;">
                            <?php echo get_post_meta(get_the_ID(), '_testimonial_author', true) ?: 'Klient i Lumtur'; ?>
                        </p>
                        <p style="color: #999; margin: 5px 0 0 0; font-size: 0.9rem;">
                            <?php echo get_post_meta(get_the_ID(), '_testimonial_service', true) ?: 'Klient'; ?>
                        </p>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : ?>
            <div style="grid-column: 1/-1; text-align: center; padding: 40px;">
                <p style="color: #999;">Nuk ka përmendore akoma. Jepni nje përvojë të shkëlqyer!</p>
            </div>
        <?php endif; ?>
    </div>

    <!-- Manual testimonials if custom post type doesn't exist -->
    <?php if (!$testimonials->have_posts()) : ?>
        <div class="testimonials-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin: 40px 0;">
            <div class="testimonial-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                </div>
                <p style="color: #666; line-height: 1.6; margin: 15px 0; font-style: italic;">
                    "Shërbim i mahnitshëm! Stafi ishte shumë profesional dhe i vëmendshëm. Do të vij përsëri patjetër!"
                </p>
                <div style="padding-top: 15px; border-top: 1px solid #eee;">
                    <p style="font-weight: 600; color: var(--dark); margin: 0;">Fatima H.</p>
                    <p style="color: #999; margin: 5px 0 0 0; font-size: 0.9rem;">Shërbimi i Flokëve</p>
                </div>
            </div>

            <div class="testimonial-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                </div>
                <p style="color: #666; line-height: 1.6; margin: 15px 0; font-style: italic;">
                    "Makiazhi për dasmën time ishte absolutisht perfekt! Mirë faleminderit për këtë përvojë të paharrueshme."
                </p>
                <div style="padding-top: 15px; border-top: 1px solid #eee;">
                    <p style="font-weight: 600; color: var(--dark); margin: 0;">Drina L.</p>
                    <p style="color: #999; margin: 5px 0 0 0; font-size: 0.9rem;">Shërbimi i Makeup</p>
                </div>
            </div>

            <div class="testimonial-card" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                <div style="display: flex; align-items: center; margin-bottom: 15px;">
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                    <span style="color: var(--gold); font-size: 1.2rem; margin-right: 3px;">★</span>
                </div>
                <p style="color: #666; line-height: 1.6; margin: 15px 0; font-style: italic;">
                    "Trajtimi i lëkurës ishte shumë relaksues dhe rezultatet janë të jashtëzakonshme! Rekomandoj këtë salon!"
                </p>
                <div style="padding-top: 15px; border-top: 1px solid #eee;">
                    <p style="font-weight: 600; color: var(--dark); margin: 0;">Lindita M.</p>
                    <p style="color: #999; margin: 5px 0 0 0; font-size: 0.9rem;">Shërbimi i Skincare</p>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div style="background: linear-gradient(135deg, var(--pink) 0%, #fff 100%); padding: 50px; border-radius: 12px; text-align: center; margin-top: 60px;">
        <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.8rem; margin-top: 0;">Doni t'i Bëni Një Përvojë?</h3>
        <p style="color: #666; margin-bottom: 20px;">Rezervoni tani dhe merrni shërbimin e parë me zbritje 10%</p>
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-gold" style="padding: 12px 30px; font-size: 1.05rem;">Rezervo Tani</a>
    </div>
</div>

<?php get_footer(); ?>