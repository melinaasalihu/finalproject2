<?php 
/**
 * 404 Page - Not Found
 */
get_header(); ?>

<section class="hero-banner" style="background: linear-gradient(135deg, var(--pink) 0%, #fff 100%); padding: 100px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 4rem; margin: 0;">
            404
        </h1>
        <p style="color: #666; margin-top: 20px; font-size: 1.3rem; font-weight: 300;">
            Na vjen keq, faqja nuk u gjet!
        </p>
    </div>
</section>

<div class="container py-5">
    <div style="max-width: 700px; margin: 0 auto; text-align: center;">
        <div style="font-size: 5rem; margin-bottom: 30px;">😕</div>
        
        <p style="color: #666; font-size: 1.1rem; line-height: 1.6; margin-bottom: 30px;">
            Duket se faqja që kërkoni nuk ekziston më ose ka qenë zhvendosur.
        </p>

        <!-- Search Form -->
        <div style="background: #f9f9f9; padding: 30px; border-radius: 10px; margin-bottom: 40px;">
            <p style="color: #999; margin-bottom: 15px;">Provoni të kërkoni:</p>
            <?php get_search_form(); ?>
        </div>

        <!-- Navigation Links -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 40px;">
            <a href="<?php echo home_url(); ?>" class="btn-gold" style="padding: 15px 20px; background: var(--gold); color: white; text-decoration: none; border-radius: 5px; display: block;">
                ← Kthehu në Ballina
            </a>
            <a href="<?php echo home_url('/sherbimet'); ?>" class="btn-gold" style="padding: 15px 20px; background: var(--gold); color: white; text-decoration: none; border-radius: 5px; display: block;">
                Shërbime →
            </a>
            <a href="<?php echo home_url('/contact'); ?>" class="btn-gold" style="padding: 15px 20px; background: var(--gold); color: white; text-decoration: none; border-radius: 5px; display: block;">
                Kontakto Nesh
            </a>
        </div>

        <!-- Featured Services Preview -->
        <div style="background: #f9f9f9; padding: 30px; border-radius: 10px; text-align: left;">
            <h3 style="color: var(--gold); margin-top: 0; text-align: center;">Shërbime të Destinuara</h3>
            <div class="dashboard-grid" style="grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px; margin-top: 20px;">
                <?php
                $categories = array(
                    'thonj' => '💅 Thonj',
                    'floke' => '✂️ Flokë',
                    'makeup' => '💄 Makeup',
                    'skincare' => '✨ Skincare'
                );
                foreach($categories as $slug => $name) {
                    $term = get_term_by('slug', $slug, 'kategoria_sherbimit');
                    if($term) {
                        $url = get_term_link($term);
                        echo '<a href="' . esc_url($url) . '" style="padding: 15px; background: white; border: 2px solid var(--gold); border-radius: 8px; text-decoration: none; color: var(--gold); text-align: center; font-weight: 600; transition: 0.3s;">' . $name . '</a>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
