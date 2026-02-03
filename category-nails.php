<?php
/**
 * Category Landing Page - Nails
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #ffe6f0 0%, #ffd4e5 100%); padding: 80px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 3.5rem; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">💅 Shërbime Nails</h1>
        <p style="font-size: 1.3rem; color: #666; margin-top: 15px; font-weight: 300;">Kujdesi premium për thonjtë e shëndetshëm dhe bukur</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Dizajne të personalizuara me produkte të cilësisë së lartë - manikyri, gel, aksesore</p>
    </div>
</section>

<div class="container py-5">
    <div style="max-width: 1000px; margin: 0 auto 40px;">
        <h2 class="section-title" style="text-align: center;">Çfarë Përfshihet në Shërbimin Tonë?</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="padding: 25px; background: #ffe6f0; border-radius: 12px; border-left: 4px solid #c94a8a;">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">✨</div>
                <h4 style="color: #c94a8a; margin: 10px 0;">Dizajne Inovative</h4>
                <p style="color: #666; margin: 0; font-size: 0.95rem;">Stile të fundit dhe ngjyra trendy - French, Ombre, Glitter etj.</p>
            </div>
            <div style="padding: 25px; background: #ffe6f0; border-radius: 12px; border-left: 4px solid #c94a8a;">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">💎</div>
                <h4 style="color: #c94a8a; margin: 10px 0;">Produkte Premium</h4>
                <p style="color: #666; margin: 0; font-size: 0.95rem;">Lakra dhe gel të importuar - qëndron deri 4 javë pa dëmtim.</p>
            </div>
            <div style="padding: 25px; background: #ffe6f0; border-radius: 12px; border-left: 4px solid #c94a8a;">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">👑</div>
                <h4 style="color: #c94a8a; margin: 10px 0;">Ekspertë Të Përvojuar</h4>
                <p style="color: #666; margin: 0; font-size: 0.95rem;">Meister të çertifikuar me më shumë se 10 vite përvojë.</p>
            </div>
            <div style="padding: 25px; background: #ffe6f0; border-radius: 12px; border-left: 4px solid #c94a8a;">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🧴</div>
                <h4 style="color: #c94a8a; margin: 10px 0;">Kujdesi i Plotë</h4>
                <p style="color: #666; margin: 0; font-size: 0.95rem;">Massage, tratim, polim dhe aksesore të ndryshme për thonj.</p>
            </div>
        </div>
    </div>

    <div style="border-top: 2px solid #eee; padding-top: 40px;">
        <h2 class="section-title">Shërbime të Disponueshme</h2>
        <div class="services-grid">
            <?php
            $term = get_queried_object();
            $args = array(
                'post_type' => 'sherbimet',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'kategoria_sherbimit',
                        'field' => 'id',
                        'terms' => $term->term_id,
                    ),
                ),
            );
            
            $services = new WP_Query($args);
            
            if($services->have_posts()) {
                while($services->have_posts()) {
                    $services->the_post(); ?>
                    <div class="service-card">
                        <div class="card-img">
                            <?php 
                            if(has_post_thumbnail()) {
                                the_post_thumbnail('salon-medium', array('alt' => get_the_title()));
                            } else {
                                echo '<div style="width: 100%; height: 200px; background: linear-gradient(135deg, #ffe6f0 0%, #ffd4e5 100%); display: flex; align-items: center; justify-content: center; color: #c94a8a; font-size: 3rem;">💅</div>';
                            }
                            ?>
                        </div>
                        <div class="card-text">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="read-more">Shiko Detajet →</a>
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
    <div style="background: linear-gradient(135deg, #ffe6f0 0%, #ffd4e5 100%); padding: 50px 20px; margin-top: 50px; border-radius: 12px;">
        <h2 class="section-title" style="text-align: center;">💰 Çmime të Shërbimeve</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 40px;">
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">Manikyri Bazik</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">10€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Prelave e thonj</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Formim profesional</li>
                    <li style="padding: 8px 0;">✓ Varnish i zgjedhur</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">Gel Manikyri</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">15€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Prelave e thonj</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Gel premium</li>
                    <li style="padding: 8px 0;">✓ Zgjat 3 javë</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">Pedikiur Komplet</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">20€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Heqje e kutikule</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Masazhim të këmbëve</li>
                    <li style="padding: 8px 0;">✓ Varnish premium</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">French Design</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">12€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Dizajn klasik</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Shtresa të saktë</li>
                    <li style="padding: 8px 0;">✓ Përfundim profesional</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">Zdobrim Custom</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">+5€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Stikla kristal</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Art dizajn</li>
                    <li style="padding: 8px 0;">✓ Ngjyra të ndryshme</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(201, 74, 138, 0.15); border-top: 4px solid #c94a8a; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 1.5rem; margin: 0 0 20px 0;">Paket VIP</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">35€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Manikyri + Pedikiur</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Zdobrim i përfshirë</li>
                    <li style="padding: 8px 0;">✓ Relaksacion plotë</li>
                </ul>
            </div>
        </div>
    </div>

    <div style="background: #ffe6f0; padding: 50px 20px; margin-top: 50px; border-radius: 12px; text-align: center;">
        <h2 class="section-title" style="color: #c94a8a;">Këshilla Të Rëndësishme për Kujdesin e Thongjeve</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; margin-top: 30px;">
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); border-top: 3px solid #c94a8a;">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">💧</div>
                <h4 style="color: #c94a8a; margin-bottom: 10px;">Laga e Rregullt</h4>
                <p style="color: #666; margin: 0; line-height: 1.5;">Përdor krem hidratuesit çdo ditë për thonjtë dhe lëkurën.</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); border-top: 3px solid #c94a8a;">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">✂️</div>
                <h4 style="color: #c94a8a; margin-bottom: 10px;">Manicura Rregullore</h4>
                <p style="color: #666; margin: 0; line-height: 1.5;">Bisefi thonjtë çdo 3-4 javë për shëndet optimal.</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); border-top: 3px solid #c94a8a;">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🛡️</div>
                <h4 style="color: #c94a8a; margin-bottom: 10px;">Mbrojtja e Katekulave</h4>
                <p style="color: #666; margin: 0; line-height: 1.5;">Mos prel katekulat, vetëm shtytje butë.</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05); border-top: 3px solid #c94a8a;">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🧤</div>
                <h4 style="color: #c94a8a; margin-bottom: 10px;">Mbrojtje nga Kimikate</h4>
                <p style="color: #666; margin: 0; line-height: 1.5;">Përdor doreza kur pastrohesh ose bën puna të rëndë.</p>
            </div>
        </div>
    </div>

    <div style="background: linear-gradient(135deg, #ffe6f0 0%, #ffd4e5 100%); padding: 50px 20px; border-radius: 12px; margin-top: 50px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: #c94a8a; font-size: 2rem; margin-top: 0;">Rezervoni Shërbimin Tuaj Sot</h3>
        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">Merrni një përvojë të paharrueshme të bukurisë me thonj të bukur!</p>
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-gold" style="padding: 15px 40px; font-size: 1.1rem; display: inline-block; text-decoration: none; border-radius: 5px;">📞 Kontakto Për Rezervim</a>
    </div>
</div>

<?php get_footer(); ?>