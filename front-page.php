<?php
/**
 * Home/Front Page Template
 * Displays hero section, featured services, and testimonials
 */
get_header(); ?>

<!-- Hero Section -->
<section class="hero-banner">
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <p class="lead"><?php bloginfo('description'); ?></p>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <h2 class="section-title">Mirësevini</h2>
        <p class="lead">Oazi juaj i bukurisë dhe relaksit</p>
        <div class="about-text">
            <p>Me një përvojë 10 vjeçare, stafi ynë i kualifikuar përdor teknologjitë më të fundit për t'ju ofruar shërbimin më të mirë. Vizita juaj në sallonin tonë është një përvojë e paqes dhe rejuvenimit.</p>
        </div>
    </div>
</section>

<!-- Services Dashboard -->
<section class="dashboard-section">
    <div class="container">
        <h2 class="section-title">Zgjidhni Shërbimin</h2>
        <div class="dashboard-grid">
            <?php
            $categories = array(
                'thonj'    => array('titulli' => 'Thonj', 'icon' => '💅', 'color' => 'pink', 'url' => '/nails/'),
                'floke'    => array('titulli' => 'Flokë', 'icon' => '✂️', 'color' => 'gold', 'url' => '/lloj-sherbimi/floke/'),
                'makeup'   => array('titulli' => 'Makeup', 'icon' => '💄', 'color' => 'dark', 'url' => '/lloj-sherbimi/makeup/'),
                'skincare' => array('titulli' => 'Skincare', 'icon' => '✨', 'color' => 'soft', 'url' => '/lloj-sherbimi/skincare/')
            );

            foreach ($categories as $slug => $data) {
                $link = home_url($data['url']); 
                ?>
                <a href="<?php echo esc_url($link); ?>" class="dash-item <?php echo esc_attr($data['color']); ?>">
                    <span class="dash-icon"><?php echo $data['icon']; ?></span>
                    <h3><?php echo esc_html($data['titulli']); ?></h3>
                    <p>Kliko për shërbimet</p>
                </a>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Featured Services -->
<section class="featured-services" style="padding: 60px 20px; background: #f9f9f9;">
    <div class="container">
        <h2 class="section-title">Shërbimet në Veçanti</h2>
        <div class="services-grid">
            <?php
            $args = array(
                'post_type' => 'sherbimet',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $featured_services = new WP_Query($args);

            if ($featured_services->have_posts()) :
                while ($featured_services->have_posts()) : $featured_services->the_post(); ?>
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
                echo '<p>Nuk ka shërbime të shtuara akoma.</p>';
            endif; ?>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section style="padding: 60px 20px; background: white;">
    <div class="container">
        <h2 class="section-title">Përvojat e Klientëve Tanë</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 25px; margin-top: 40px;">
            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                <div style="display: flex; margin-bottom: 15px;">
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                </div>
                <p style="color: #666; line-height: 1.6; margin: 15px 0; font-style: italic;">
                    "Shërbim i mahnitshëm! Stafi ishte shumë profesional dhe i vëmendshëm ndaj kërkesave të mia."
                </p>
                <p style="font-weight: 600; color: var(--dark); margin: 10px 0 0 0;">Fatima H.</p>
                <p style="color: #999; margin: 5px 0 0 0; font-size: 0.9rem;">Shërbimi i Flokëve</p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                <div style="display: flex; margin-bottom: 15px;">
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                </div>
                <p style="color: #666; line-height: 1.6; margin: 15px 0; font-style: italic;">
                    "Makiazhi për dasmën time ishte absolutisht perfekt! Nuk mund ta përshkruaj mirë."
                </p>
                <p style="font-weight: 600; color: var(--dark); margin: 10px 0 0 0;">Drina L.</p>
                <p style="color: #999; margin: 5px 0 0 0; font-size: 0.9rem;">Shërbimi i Makeup</p>
            </div>

            <div style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                <div style="display: flex; margin-bottom: 15px;">
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                    <span style="color: var(--gold); font-size: 1.1rem;">★</span>
                </div>
                <p style="color: #666; line-height: 1.6; margin: 15px 0; font-style: italic;">
                    "Trajtimi i lëkurës ishte shumë relaksues. Lëkura ime duket më e shëndetshme se kurrë!"
                </p>
                <p style="font-weight: 600; color: var(--dark); margin: 10px 0 0 0;">Lindita M.</p>
                <p style="color: #999; margin: 5px 0 0 0; font-size: 0.9rem;">Shërbimi i Skincare</p>
            </div>
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo home_url('/testimonials'); ?>" class="btn-gold" style="padding: 10px 25px; display: inline-block;">Shiko Më Shumë Përmendore</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>