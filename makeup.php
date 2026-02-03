<?php
/**
 * Template Name: Makeup Gallery
 * Description: Makeup services page with gallery
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #ffe6cc 0%, #ffd4ad 100%); padding: 80px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #222; font-size: 3.5rem; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">💄 Shërbime Makeup</h1>
        <p style="font-size: 1.3rem; color: #666; margin-top: 15px; font-weight: 300;">Shkëlqeni me makiazh profesional</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Për çdo rast - dasma, foto, festa, ditë</p>
    </div>
</section>

<div class="container py-5">
    <a href="<?php echo home_url(); ?>" style="text-decoration:none; color:#222; display: inline-block; margin-bottom: 20px; font-weight: 600;">← Kthehu në Ballina</a>

    <!-- Gallery Section -->
    <div style="margin-bottom: 60px;">
        <h2 class="section-title" style="text-align: center; color: #222; margin-bottom: 40px;">📸 Galeria e Makijazhit</h2>
        <div class="services-grid">
            <?php
            $makeup_images = array(
                array('icon' => '💒', 'title' => 'Makiazh Brida', 'desc' => 'Perfekt për ditën tuaj të veçantë'),
                array('icon' => '📸', 'title' => 'Makiazh Foto', 'desc' => 'Optim për fotografitë e bukura'),
                array('icon' => '🎉', 'title' => 'Makiazh Festa', 'desc' => 'Stile të ndryshme për çdo okasion'),
                array('icon' => '💄', 'title' => 'Makiazh Ditor', 'desc' => 'Natyral dhe elegant për çdo ditë')
            );
            
            foreach ($makeup_images as $item) {
                ?>
                <div class="service-card" style="border: 2px solid #ffd4ad; overflow: hidden; box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);">
                    <div style="position: relative; overflow: hidden; height: 300px; background: linear-gradient(135deg, #ffe6cc 0%, #ffd4ad 100%); display: flex; align-items: center; justify-content: center;">
                        <div style="font-size: 4rem; text-align: center;">
                            <?php echo $item['icon']; ?>
                        </div>
                    </div>
                    <div class="p-3" style="text-align: center; background: white; padding: 30px;">
                        <h4 style="color: #222; margin: 10px 0; font-size: 1.1rem;"><?php echo esc_html($item['title']); ?></h4>
                        <p style="color: #999; font-size: 0.9rem; margin: 5px 0;"><?php echo esc_html($item['desc']); ?></p>
                        <p style="color: var(--gold); font-weight: 600; margin-top: 10px;">✨ Produkte të markave premium</p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <!-- Services Info -->
    <div style="background: linear-gradient(135deg, #ffe6cc 0%, #ffd4ad 100%); padding: 50px 20px; border-radius: 12px; margin-bottom: 50px;">
        <h2 class="section-title" style="text-align: center;">🎯 Shërbimet e Disponueshme</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 40px;">
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); border-top: 4px solid #222; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #222; font-size: 1.5rem; margin: 0 0 20px 0;">Makiazh Bazik</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">15€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Foundation profesional</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Sy dhe buzë</li>
                    <li style="padding: 8px 0;">✓ Blush dhe rifinim</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); border-top: 4px solid #222; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #222; font-size: 1.5rem; margin: 0 0 20px 0;">Makiazh Brida</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">35€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Makiazh luksuz</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ I qëndrueshëm 12 orë+</li>
                    <li style="padding: 8px 0;">✓ Proba para ditës</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); border-top: 4px solid #222; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #222; font-size: 1.5rem; margin: 0 0 20px 0;">Makiazh Foto</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">25€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Perfekt për foto</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Ndritësim i syneve</li>
                    <li style="padding: 8px 0;">✓ Ngjyra të balancuara</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08); border-top: 4px solid #222; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #222; font-size: 1.5rem; margin: 0 0 20px 0;">Paket VIP</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">50€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Makiazh + Buzëqeshje</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Kënsillim stil</li>
                    <li style="padding: 8px 0;">✓ Relaksim komplet</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Booking Section -->
    <div style="background: linear-gradient(135deg, #ffe6cc 0%, #ffd4ad 100%); padding: 50px 20px; border-radius: 12px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: #222; font-size: 2rem; margin-top: 0;">Gati të Shkëlqeni?</h3>
        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">Kontaktoni sallonin tonë për rezervim!</p>
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-gold" style="padding: 12px 30px; font-size: 1.05rem; text-decoration: none; display: inline-block; background: #222; color: white; border-radius: 5px;">Rezervo Tani</a>
    </div>
</div>

<?php get_footer(); ?>
