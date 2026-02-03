<?php
/**
 * Template Name: Hair
 * Custom hair services page
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #fff3cd 0%, #ffe6a8 100%); padding: 80px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #b5845f; font-size: 3.5rem; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">✂️ Shërbime Flokësh</h1>
        <p style="font-size: 1.3rem; color: #666; margin-top: 15px; font-weight: 300;">Transformimi i flokëve tuaj me stil dhe elegancë</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Tratim profesional me produkte premium</p>
    </div>
</section>

<div class="container py-5">
    <div style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
        <h2 class="section-title">Pse Të Zgjerdhni Shërbimin Tonë?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">✂️</div>
                <h4 style="color: var(--gold);">Stilisatë Përvojë</h4>
                <p style="color: #666; margin: 0;">Ekspertë me disa vjet përvojë në industri</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">🌿</div>
                <h4 style="color: var(--gold);">Produkte Natyrale</h4>
                <p style="color: #666; margin: 0;">Përdorim produkte organike dhe të sigurta</p>
            </div>
            <div style="padding: 20px; background: #f9f9f9; border-radius: 10px;">
                <div style="font-size: 2rem; margin-bottom: 10px;">💇‍♀️</div>
                <h4 style="color: var(--gold);">Konsultim i Lirë</h4>
                <p style="color: #666; margin: 0;">Këshillim mbi stilin më të përshtatshëm</p>
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
                        'terms' => array('floke', 'hair'),
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
    <div style="background: linear-gradient(135deg, #fff9e6 0%, #fff3cd 100%); padding: 50px 20px; margin-top: 50px; border-radius: 12px;">
        <h2 class="section-title" style="text-align: center;">💰 Çmime të Shërbimeve</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 40px;">
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 132, 95, 0.15); border-top: 4px solid var(--gold); text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.5rem; margin: 0 0 20px 0;">Këputje</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">12€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Larje flokësh</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Këputje stilizuar</li>
                    <li style="padding: 8px 0;">✓ Styling</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 132, 95, 0.15); border-top: 4px solid var(--gold); text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.5rem; margin: 0 0 20px 0;">Ngjyrim</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">25€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Ngjyra premium</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim i thellë</li>
                    <li style="padding: 8px 0;">✓ Styling</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 132, 95, 0.15); border-top: 4px solid var(--gold); text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.5rem; margin: 0 0 20px 0;">Permanent Wave</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">35€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Valë të qëndrueshme</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim kundër këputjeje</li>
                    <li style="padding: 8px 0;">✓ Styling</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 132, 95, 0.15); border-top: 4px solid var(--gold); text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.5rem; margin: 0 0 20px 0;">Zgjatje Flokësh</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">40€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Flokë natyrale</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Montim profesional</li>
                    <li style="padding: 8px 0;">✓ Styling</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 132, 95, 0.15); border-top: 4px solid var(--gold); text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.5rem; margin: 0 0 20px 0;">Trajtim i Thellë</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">15€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Maskë nutriente</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Relaksacion</li>
                    <li style="padding: 8px 0;">✓ Styling</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 132, 95, 0.15); border-top: 4px solid var(--gold); text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.5rem; margin: 0 0 20px 0;">Paket VIP</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">50€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Këputje + Ngjyrim</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Trajtim i thellë</li>
                    <li style="padding: 8px 0;">✓ Styling premium</li>
                </ul>
            </div>
        </div>
    </div>

    <div style="background: #f5f5f5; padding: 50px 20px; margin-top: 50px; border-radius: 12px; text-align: center;">
        <h2 class="section-title">Këshilla për Kujdesin e Flokëve</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🧴</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Shampo i Përshtatshëm</h4>
                <p style="color: #666; margin: 0;">Përdor shampo i përshtatshëm për llojin e flokëve tuaj</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">💧</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Hidratim Rregullisht</h4>
                <p style="color: #666; margin: 0;">Aplikoj balsamues çdo herë që lani flokët</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🔥</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Shmangni Nxehtësinë Intensive</h4>
                <p style="color: #666; margin: 0;">Kufizoni përdorimin e ploçeve dhe tharëse flokësh</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">✂️</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Këpute Rregullisht</h4>
                <p style="color: #666; margin: 0;">Këputni skajet çdo 6-8 javë për flokë të shëndetshëm</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🌙</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Mbrojtje Natën</h4>
                <p style="color: #666; margin: 0;">Përdorni satiç apo jastëk satin kur flini</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🥗</div>
                <h4 style="color: var(--gold); margin-bottom: 10px;">Ushqim i Balancuar</h4>
                <p style="color: #666; margin: 0;">Hani alimente të pasura me proteinat dhe vitamina B</p>
            </div>
        </div>
    </div>

    <div style="background: linear-gradient(135deg, var(--gold) 0%, #a8845f 100%); padding: 50px 20px; margin-top: 50px; border-radius: 12px; color: white; text-align: center;">
        <h2 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; margin: 0 0 40px 0;">Pse Të Zgjerdhni Nesh?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 25px;">
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">✂️</div>
                <h4 style="margin: 10px 0;">Stilisatë me Përvojë</h4>
                <p style="margin: 0; font-size: 0.95rem;">Specialistë të çertifikuar me shumë vjet përvojë</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🌿</div>
                <h4 style="margin: 10px 0;">Produkte Premium</h4>
                <p style="margin: 0; font-size: 0.95rem;">Markat më të njohura dhe të besuara botërisht</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">💇‍♀️</div>
                <h4 style="margin: 10px 0;">Konsultim Personal</h4>
                <p style="margin: 0; font-size: 0.95rem;">Këshillim i detajuar për stilin më të përshtatshëm</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">⏰</div>
                <h4 style="margin: 10px 0;">Orare Fleksibël</h4>
                <p style="margin: 0; font-size: 0.95rem;">Hape 7 ditë në javë sipas kërkesave tuaja</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">🎯</div>
                <h4 style="margin: 10px 0;">Rezultate të Garantuara</h4>
                <p style="margin: 0; font-size: 0.95rem;">Flokë të shëndetshëm dhe të stilizuar</p>
            </div>
            <div style="background: rgba(255,255,255,0.1); padding: 25px; border-radius: 10px;">
                <div style="font-size: 2.5rem; margin-bottom: 15px;">💰</div>
                <h4 style="margin: 10px 0;">Çmime Konkuruese</h4>
                <p style="margin: 0; font-size: 0.95rem;">Oferta të nxehtë për klientë të rregullt</p>
            </div>
        </div>
    </div>

    <div style="background: #f9f9f9; padding: 50px 20px; border-radius: 12px; margin-top: 50px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 2rem; margin-top: 0;">Rezervoni Shërbimin Tuaj Sot</h3>
        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">Transformimi i flokëve tuaj fillon këtu!</p>
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-gold" style="padding: 15px 40px; font-size: 1.1rem; display: inline-block; text-decoration: none; border-radius: 5px;">📞 Kontakto Për Rezervim</a>
        <p style="color: #999; margin-top: 20px; font-size: 0.9rem;">Ose na telefononi: <strong style="color: #666;">+355 XX XXX XXXX</strong></p>
    </div>
</div>

<?php get_footer(); ?>