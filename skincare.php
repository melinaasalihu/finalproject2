<?php
/**
 * Template Name: Skincare Gallery
 * Description: Skincare services page with gallery
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #f0f4ff 0%, #e8f1ff 100%); padding: 80px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 3.5rem; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">✨ Shërbime Skincare</h1>
        <p style="font-size: 1.3rem; color: #666; margin-top: 15px; font-weight: 300;">Kujdesi premium për lëkurën e shëndetshme</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Trajtim me produkte natyrore dhe teknika të provuara</p>
    </div>
</section>

<div class="container py-5">
    <a href="<?php echo home_url(); ?>" style="text-decoration:none; color:#7c8aa8; display: inline-block; margin-bottom: 20px; font-weight: 600;">← Kthehu në Ballina</a>

    <!-- Gallery Section -->
    <div style="margin-bottom: 60px;">
        <h2 class="section-title" style="text-align: center; color: #7c8aa8; margin-bottom: 40px;">📸 Galeria e Trajtimeve</h2>
        <div class="services-grid">
            <?php
            $skincare_images = array(
                array('icon' => '🧖', 'title' => 'Pastrimi i Thellë', 'desc' => 'Heqje të plotë e papastërtive'),
                array('icon' => '💧', 'title' => 'Hidratim Intensiv', 'desc' => 'Rikuperim i lagështirës'),
                array('icon' => '🌿', 'title' => 'Produkte Natyrore', 'desc' => '100% organike dhe të shëndetshmë'),
                array('icon' => '✨', 'title' => 'Rregullim Pështjellimi', 'desc' => 'Lëkurë më e ndritshme dhe më butë')
            );
            
            foreach ($skincare_images as $item) {
                ?>
                <div class="service-card" style="border: 2px solid #e8f1ff; overflow: hidden; box-shadow: 0 6px 20px rgba(124, 138, 168, 0.15);">
                    <div style="position: relative; overflow: hidden; height: 300px; background: linear-gradient(135deg, #f0f4ff 0%, #e8f1ff 100%); display: flex; align-items: center; justify-content: center;">
                        <div style="font-size: 4rem; text-align: center;">
                            <?php echo $item['icon']; ?>
                        </div>
                    </div>
                    <div class="p-3" style="text-align: center; background: white; padding: 30px;">
                        <h4 style="color: #7c8aa8; margin: 10px 0; font-size: 1.1rem;"><?php echo esc_html($item['title']); ?></h4>
                        <p style="color: #999; font-size: 0.9rem; margin: 5px 0;"><?php echo esc_html($item['desc']); ?></p>
                        <p style="color: var(--gold); font-weight: 600; margin-top: 10px;">✨ Trajtim dermatologjik profesional</p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <!-- Services Info -->
    <div style="background: linear-gradient(135deg, #f0f4ff 0%, #e8f1ff 100%); padding: 50px 20px; border-radius: 12px; margin-bottom: 50px;">
        <h2 class="section-title" style="text-align: center;">🎯 Shërbimet e Disponueshme</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 40px;">
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(124, 138, 168, 0.1); border-top: 4px solid #7c8aa8; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.5rem; margin: 0 0 20px 0;">Pastrimi Bazik</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">20€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Pastrimi delikat</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Peling i lehtë</li>
                    <li style="padding: 8px 0;">✓ Hidratim fillestar</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(124, 138, 168, 0.1); border-top: 4px solid #7c8aa8; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.5rem; margin: 0 0 20px 0;">Facial Komplet</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">35€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Pastrimi i plotë</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim nivelit të avancuar</li>
                    <li style="padding: 8px 0;">✓ Maski premium</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(124, 138, 168, 0.1); border-top: 4px solid #7c8aa8; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.5rem; margin: 0 0 20px 0;">Peling Kimik</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">30€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Peling i sigurt</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Hequr nanopartikulash</li>
                    <li style="padding: 8px 0;">✓ Rregullim ngjyre</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(124, 138, 168, 0.1); border-top: 4px solid #7c8aa8; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.5rem; margin: 0 0 20px 0;">Paket Premium</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">60€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Facial + Masazh</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim premium</li>
                    <li style="padding: 8px 0;">✓ Relaksim i plotë</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Booking Section -->
    <div style="background: linear-gradient(135deg, #f0f4ff 0%, #e8f1ff 100%); padding: 50px 20px; border-radius: 12px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 2rem; margin-top: 0;">Nxitini Trajitmin e Lëkurës Tuaj</h3>
        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">Lëkura e shëndetshme fillon këtu!</p>
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-gold" style="padding: 12px 30px; font-size: 1.05rem; text-decoration: none; display: inline-block; background: #7c8aa8; color: white; border-radius: 5px;">Rezervo Tani</a>
    </div>
</div>

<?php get_footer(); ?>
