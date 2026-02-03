<?php
/**
 * Template Name: Flokë Gallery
 * Description: Hair services page with gallery
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #fff3cd 0%, #ffe6a8 100%); padding: 80px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #c5a059; font-size: 3.5rem; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">✂️ Shërbime Flokësh</h1>
        <p style="font-size: 1.3rem; color: #666; margin-top: 15px; font-weight: 300;">Transformim të bukur për flokët tuaj</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Prerje, ngjyrë, dhe trajtim me ekspertizën më të lartë</p>
    </div>
</section>

<div class="container py-5">
    <a href="<?php echo home_url(); ?>" style="text-decoration:none; color:#c5a059; display: inline-block; margin-bottom: 20px; font-weight: 600;">← Kthehu në Ballina</a>

    <!-- Gallery Section -->
    <div style="margin-bottom: 60px;">
        <h2 class="section-title" style="text-align: center; color: #c5a059; margin-bottom: 40px;">📸 Galeria e Stileve Tona</h2>
        <div class="services-grid">
            <?php
            $floke_images = array(
                array('icon' => '💇', 'title' => 'Prerje Moderne', 'desc' => 'Stile të fundit dhe të sofistikuara'),
                array('icon' => '💛', 'title' => 'Ngjyra Elegante', 'desc' => 'Ngjyra natyrore dhe të ndritshme'),
                array('icon' => '🌊', 'title' => 'Valëza Profesionale', 'desc' => 'Valë të qëndrueshme dhe të ndritshme'),
                array('icon' => '✨', 'title' => 'Trajtim Premium', 'desc' => 'Flokë të butë dhe të shëndetshëm')
            );
            
            foreach ($floke_images as $item) {
                ?>
                <div class="service-card" style="border: 2px solid #ffe6a8; overflow: hidden; box-shadow: 0 6px 20px rgba(197, 160, 89, 0.15);">
                    <div style="position: relative; overflow: hidden; height: 300px; background: linear-gradient(135deg, #fff3cd 0%, #ffe6a8 100%); display: flex; align-items: center; justify-content: center;">
                        <div style="font-size: 4rem; text-align: center;">
                            <?php echo $item['icon']; ?>
                        </div>
                    </div>
                    <div class="p-3" style="text-align: center; background: white; padding: 30px;">
                        <h4 style="color: #c5a059; margin: 10px 0; font-size: 1.1rem;"><?php echo esc_html($item['title']); ?></h4>
                        <p style="color: #999; font-size: 0.9rem; margin: 5px 0;"><?php echo esc_html($item['desc']); ?></p>
                        <p style="color: var(--gold); font-weight: 600; margin-top: 10px;">✨ Pune profesionale me produkte cilësor</p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <!-- Services Info -->
    <div style="background: linear-gradient(135deg, #fff3cd 0%, #ffe6a8 100%); padding: 50px 20px; border-radius: 12px; margin-bottom: 50px;">
        <h2 class="section-title" style="text-align: center;">🎯 Shërbimet e Disponueshme</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 40px;">
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(197, 160, 89, 0.1); border-top: 4px solid #c5a059; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c5a059; font-size: 1.5rem; margin: 0 0 20px 0;">Prerje e Thjeshtë</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">12€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Konsultim me frizërin</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Prerje profesionale</li>
                    <li style="padding: 8px 0;">✓ Styling i përfundimit</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(197, 160, 89, 0.1); border-top: 4px solid #c5a059; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c5a059; font-size: 1.5rem; margin: 0 0 20px 0;">Ngjyra Komplet</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">35€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Ngjyra premium</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim hidratues</li>
                    <li style="padding: 8px 0;">✓ Styling final</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(197, 160, 89, 0.1); border-top: 4px solid #c5a059; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c5a059; font-size: 1.5rem; margin: 0 0 20px 0;">Valëza Natyrale</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">25€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Valëz qëndruese</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim hidratues</li>
                    <li style="padding: 8px 0;">✓ Përfundim premium</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(197, 160, 89, 0.1); border-top: 4px solid #c5a059; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c5a059; font-size: 1.5rem; margin: 0 0 20px 0;">Paket VIP</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">60€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Prerje + Ngjyrë</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim i plotë</li>
                    <li style="padding: 8px 0;">✓ Styling luksuz</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Booking Section -->
    <div style="background: linear-gradient(135deg, #fff3cd 0%, #ffe6a8 100%); padding: 50px 20px; border-radius: 12px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: #c5a059; font-size: 2rem; margin-top: 0;">Gati për Transformimin Tuaj?</h3>
        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">Kontaktoni sallonin tonë tani për rezervim!</p>
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-gold" style="padding: 12px 30px; font-size: 1.05rem; text-decoration: none; display: inline-block; background: #c5a059; color: white; border-radius: 5px;">Rezervo Tani</a>
    </div>
</div>

<?php get_footer(); ?>
