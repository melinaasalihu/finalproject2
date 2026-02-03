<?php
/**
 * Template Name: Skincare
 * Custom skincare services page
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #f0f4ff 0%, #e8f1ff 100%); padding: 80px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 3.5rem; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">✨ Shërbime Skincare</h1>
        <p style="font-size: 1.3rem; color: #666; margin-top: 15px; font-weight: 300;">Kujdesi premium për lëkurën e shëndetshme dhe shkëlqyese</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Trajtim i thellë me teknologji të fundit</p>
    </div>
</section>

<div class="container py-5">
    <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 class="section-title">Pse Të Zgjerdhni Shërbimin Tonë?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">🧖</div>
                <h4 style="color: var(--gold);">Trajtim Relaksues</h4>
                <p style="color: #666; margin: 0;">Relaksim të plotë të trupit dhe mendjes</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">🌿</div>
                <h4 style="color: var(--gold);">Produkte Organike</h4>
                <p style="color: #666; margin: 0;">100% natyrale dhe të sigurta për lëkurën</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">👩‍⚕️</div>
                <h4 style="color: var(--gold);">Ekspertë Lëkure</h4>
                <p style="color: #666; margin: 0;">Specialistë të çertifikuar dhe me përvojë</p>
            </div>
        </div>
    </div>

    <div style="border-top: 2px solid #eee; padding-top: 40px;">
        <h2 class="section-title">Shërbime të Disponueshme</h2>
        <div class="services-grid">
            <?php
            $args = array(
                'post_type' => 'sherbimet',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'kategoria_sherbimit',
                        'field' => 'slug',
                        'terms' => array('skincare'),
                    ),
                ),
            );
            $services = new WP_Query($args);
            
            if($services->have_posts()) {
                while($services->have_posts()) {
                    $services->the_post(); ?>
                    <div class="service-card">
                        <?php if(has_post_thumbnail()) the_post_thumbnail('salon-medium'); ?>
                        <div class="p-3">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn-gold">Shiko Detajet</a>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo '<p style="text-align: center; grid-column: 1 / -1;">Nuk ka shërbime të shtuara akoma në këtë kategori.</p>';
            }
            ?>
        </div>
    </div>

    <!-- Pricing Section -->
    <div style="background: linear-gradient(135deg, #f0f8ff 0%, #e8f1ff 100%); padding: 50px 20px; margin-top: 50px; border-radius: 12px;">
        <h2 class="section-title" style="text-align: center;">💰 Çmime të Shërbimeve</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 40px;">
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(124, 138, 168, 0.15); border-top: 4px solid #7c8aa8; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.5rem; margin: 0 0 20px 0;">Pastrimi Bazik</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">18€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Pastrimi i thellë</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Eksfoliim të butë</li>
                    <li style="padding: 8px 0;">✓ Hidratim</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(124, 138, 168, 0.15); border-top: 4px solid #7c8aa8; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.5rem; margin: 0 0 20px 0;">Trajtim Antirrudhe</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">25€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Maskë e holluar</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Masazhim fytyre</li>
                    <li style="padding: 8px 0;">✓ Serum i veçantë</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(124, 138, 168, 0.15); border-top: 4px solid #7c8aa8; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.5rem; margin: 0 0 20px 0;">Trajtim Lëkure Të Probleme</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">22€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim i aknes</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Kontroll të yndyre</li>
                    <li style="padding: 8px 0;">✓ Serum korrigjues</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(124, 138, 168, 0.15); border-top: 4px solid #7c8aa8; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.5rem; margin: 0 0 20px 0;">Trajtim Hidratimi</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">20€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Maskë hidratimi</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Serume të pasura</li>
                    <li style="padding: 8px 0;">✓ Hidratim i thellë</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(124, 138, 168, 0.15); border-top: 4px solid #7c8aa8; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.5rem; margin: 0 0 20px 0;">Trajtim me Ndriçim</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">28€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Ndriçim të lëkurës</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Heqje të pikave të zeza</li>
                    <li style="padding: 8px 0;">✓ Serum special</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(124, 138, 168, 0.15); border-top: 4px solid #7c8aa8; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.5rem; margin: 0 0 20px 0;">Paket Relaksimi</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">50€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim i plotë</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Masazhim relaksues</li>
                    <li style="padding: 8px 0;">✓ Çaj aromatik</li>
                </ul>
            </div>
        </div>
    </div>

    <div style="background: #f5f5f5; padding: 50px 20px; margin-top: 50px; border-radius: 12px; text-align: center;">
        <h2 class="section-title">Këshilla për Rutinë Përbotëse</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🧴</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Pastro Çdo Ditë</h4>
                <p style="color: #666; margin: 0;">Pastroje fytyrën në mëngjes dhe në mbrëmje</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">💧</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Hidratezo Rregullisht</h4>
                <p style="color: #666; margin: 0;">Aplikoj hidrator sipas llojit të lëkurës</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">☀️</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Sunscreen Përditë</h4>
                <p style="color: #666; margin: 0;">Përdor SPF 30+ çdo ditë si në rrezik dielli</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🧖</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Eksfoliim Javore</h4>
                <p style="color: #666; margin: 0;">Eksfoliim 1-2 herë në javë për lëkurë të ndritshme</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">😴</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Gjumi i Shëndetshëm</h4>
                <p style="color: #666; margin: 0;">7-8 orë gjumi për rregjenrim të lëkurës</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🥗</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Ushqim i Shëndetshëm</h4>
                <p style="color: #666; margin: 0;">Hani ushqime të pasura me antioksidante</p>
            </div>
        </div>
    </div>

    <div style="background: linear-gradient(135deg, #7c8aa8 0%, #a0a8c0 100%); padding: 50px 20px; margin-top: 50px; border-radius: 12px; color: white; text-align: center;">
        <h2 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; margin: 0 0 40px 0;">Pse Të Zgjerdhni Nesh?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px;">
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🧖</div>
                <h4 style="margin: 10px 0;">Trajtim Relaksues</h4>
                <p style="margin: 0; font-size: 0.95rem;">Ambient i qetë dhe muzika e këndshme</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🌿</div>
                <h4 style="margin: 10px 0;">Produkte Organike</h4>
                <p style="margin: 0; font-size: 0.95rem;">100% natyrale dhe të sigurta</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">👩‍⚕️</div>
                <h4 style="margin: 10px 0;">Specialistë me Përvojë</h4>
                <p style="margin: 0; font-size: 0.95rem;">Çertifikuar dhe të dedikuar</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">💆‍♀️</div>
                <h4 style="margin: 10px 0;">Rilaksim i Plotë</h4>
                <p style="margin: 0; font-size: 0.95rem;">Përvojë e paharrueshme për lëkurën</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">✨</div>
                <h4 style="margin: 10px 0;">Rezultate Të Dukshme</h4>
                <p style="margin: 0; font-size: 0.95rem;">Lëkurë më e shëndetshme dhe më e ndritshme</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">💰</div>
                <h4 style="margin: 10px 0;">Çmime Arsyeshme</h4>
                <p style="margin: 0; font-size: 0.95rem;">Oferta të nxehtë çdo muaj</p>
            </div>
        </div>
    </div>

    <div style="background: #f9f9f9; padding: 50px 20px; border-radius: 12px; margin-top: 50px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 2rem; margin-top: 0;">Përkujdesuni për Lëkurën Tuaj Sot</h3>
        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">Lëkura e shëndetshme fillon këtu!</p>
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-gold" style="padding: 15px 40px; font-size: 1.1rem; display: inline-block; text-decoration: none; border-radius: 5px;">📞 Kontakto Për Rezervim</a>
        <p style="color: #999; margin-top: 20px; font-size: 0.9rem;">Ose na telefononi: <strong style="color: #666;">+355 XX XXX XXXX</strong></p>
    </div>
</div>

<?php get_footer(); ?>