<?php
/**
 * Home/Front Page Template
 * Displays hero section, featured services, and testimonials
 */
get_header(); ?>

<!-- Hero Section -->


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
                <a href="<?php echo esc_url($link); ?>" class="dash-item <?php echo esc_attr($data['color']); ?>" role="button" aria-label="<?php echo esc_attr($data['titulli']); ?>">
                    <span class="dash-icon" aria-hidden="true"><?php echo $data['icon']; ?></span>
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
                        <div class="card-img">
                            <?php 
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('salon-medium', array('alt' => get_the_title()));
                            } else {
                                echo '<img src="' . esc_url(get_template_directory_uri()) . '/images/placeholder.png" alt="' . esc_attr(get_the_title()) . '" />';
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
                echo '<p>Nuk ka shërbime të shtuara akoma.</p>';
            endif; ?>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section style="padding: 60px 20px; background: white;">
    <div class="container">
        <h2 class="section-title">Përvojat e Klientëve Tanë</h2>
        <div class="testimonials-grid">
            <div class="testimonial-card">
                <div class="stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <p class="testimonial-text">
                    "Shërbim i mahnitshëm! Stafi ishte shumë profesional dhe i vëmendshëm ndaj kërkesave të mia."
                </p>
                <p class="testimonial-name">Fatima H.</p>
                <p class="testimonial-service">Shërbimi i Flokëve</p>
            </div>

            <div class="testimonial-card">
                <div class="stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <p class="testimonial-text">
                    "Makiazhi për dasmën time ishte absolutisht perfekt! Nuk mund ta përshkruaj mirë."
                </p>
                <p class="testimonial-name">Drina L.</p>
                <p class="testimonial-service">Shërbimi i Makeup</p>
            </div>

            <div class="testimonial-card">
                <div class="stars">
                    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
                </div>
                <p class="testimonial-text">
                    "Trajtimi i lëkurës ishte shumë relaksues. Lëkura ime duket më e shëndetshme se kurrë!"
                </p>
                <p class="testimonial-name">Lindita M.</p>
                <p class="testimonial-service">Shërbimi i Skincare</p>
            </div>
        </div>
        <div class="testimonials-link">
            <a href="<?php echo home_url('/testimonials'); ?>" class="btn-gold">Shiko Më Shumë Përmendore</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>