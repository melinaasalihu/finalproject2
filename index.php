<?php get_header(); ?>

<section class="about-section">
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <p class="lead"><?php bloginfo('description'); ?></p>
        <div class="about-text">
            <p>Me një përvojë 10 vjeçare, stafi ynë i kualifikuar përdor teknologjitë më të fundit për t'ju ofruar shërbimin më të mirë të bukurisë dhe ndihjes.</p>
        </div>
    </div>
</section>

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

<?php get_footer(); ?>