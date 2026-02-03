<?php
/**
 * Template Name: Nails Gallery
 * Description: Nails services page with gallery
 */
get_header(); ?>

<section class="category-hero" style="background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%); padding: 80px 20px; text-align: center;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; color: #b5838d; font-size: 3.5rem; margin: 0; text-shadow: 2px 2px 4px rgba(0,0,0,0.1);">💅 Shërbime Thonj</h1>
        <p style="font-size: 1.3rem; color: #666; margin-top: 15px; font-weight: 300;">Dizajne të bukura dhe profesionale për thonjet tuaj</p>
        <p style="font-size: 1rem; color: #999; margin-top: 10px;">Galeria e punimeve tona me cilësi premium</p>
    </div>
</section>

<div class="container py-5">
    <a href="<?php echo home_url(); ?>" style="text-decoration:none; color:#b5838d; display: inline-block; margin-bottom: 20px; font-weight: 600;">← Kthehu në Ballina</a>

    <!-- Gallery Section -->
    <div style="margin-bottom: 60px;">
        <h2 class="section-title" style="text-align: center; color: #b5838d; margin-bottom: 40px;">📸 Galeria e Dizajneve Tona</h2>
        <div class="services-grid">
            <?php
            $nails_images = array(
                array('file' => 'french.png', 'title' => 'French Design', 'desc' => 'Dizajn klasik francez me stil sopran'),
                array('file' => 'gishta.png', 'title' => 'Gishta Artistike', 'desc' => 'Art imazheri dhe ngjyra të kombinuara'),
                array('file' => 'nails.png', 'title' => 'Nails Elegante', 'desc' => 'Stile moderne dhe të sofistikuara'),
                array('file' => 'thoj.png', 'title' => 'Thoj i Shkurtër', 'desc' => 'Formim dhe kultura të përsosura')
            );
            
            foreach ($nails_images as $item) {
$image_url = get_template_directory_uri() . '/nails/' . $item['file'];
                ?>
                <div class="service-card" style="border: 2px solid #ffc0e0; overflow: hidden; box-shadow: 0 6px 20px rgba(201, 74, 138, 0.15);">
                    <div style="position: relative; overflow: hidden; height: 300px;">
                        <img src="<?php echo esc_url($image_url); ?>" 
                             alt="<?php echo esc_attr($item['title']); ?>" 
                             style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s ease;">
                        <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(181, 131, 141, 0.7); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; color: white; text-align: center; padding: 20px;">
                            <div>
                                <h4 style="margin: 0 0 10px 0; font-size: 1.2rem;">💅 <?php echo esc_html($item['title']); ?></h4>
                                <p style="margin: 0; font-size: 0.95rem;"><?php echo esc_html($item['desc']); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="p-3" style="text-align: center; background: white;">
                        <h4 style="color: #b5838d; margin: 10px 0; font-size: 1.1rem;">💅 <?php echo esc_html($item['title']); ?></h4>
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
    <div style="background: linear-gradient(135deg, #ffe6f0 0%, #ffd4e5 100%); padding: 50px 20px; border-radius: 12px; margin-bottom: 50px;">
        <h2 class="section-title" style="text-align: center;">🎯 Shërbimet e Disponueshme</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 40px;">
            
            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 131, 141, 0.1); border-top: 4px solid #b5838d; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #b5838d; font-size: 1.5rem; margin: 0 0 20px 0;">Manikyri Bazik</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">10€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Prelave e thonj</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Formim profesional</li>
                    <li style="padding: 8px 0;">✓ Varnish i zgjedhur</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 131, 141, 0.1); border-top: 4px solid #b5838d; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #b5838d; font-size: 1.5rem; margin: 0 0 20px 0;">Gel Manikyri</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">15€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Prelave e thonj</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Gel premium</li>
                    <li style="padding: 8px 0;">✓ Zgjat 3 javë</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 131, 141, 0.1); border-top: 4px solid #b5838d; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #b5838d; font-size: 1.5rem; margin: 0 0 20px 0;">Pedikiur Komplet</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">20€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Heqje e kutikule</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Masazhim të këmbëve</li>
                    <li style="padding: 8px 0;">✓ Varnish premium</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 131, 141, 0.1); border-top: 4px solid #b5838d; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #b5838d; font-size: 1.5rem; margin: 0 0 20px 0;">French Design</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">12€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Dizajn klasik</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Shtresa të saktë</li>
                    <li style="padding: 8px 0;">✓ Përfundim profesional</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 131, 141, 0.1); border-top: 4px solid #b5838d; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #b5838d; font-size: 1.5rem; margin: 0 0 20px 0;">Zdobrim Custom</h4>
                <div style="background: #f5f5f5; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <span style="font-size: 2rem; color: var(--gold); font-weight: bold;">+5€</span>
                </div>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: left; color: #666;">
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Stikla kristal</li>
                    <li style="padding: 8px 0; border-bottom: 1px solid #eee;">✓ Art dizajn</li>
                    <li style="padding: 8px 0;">✓ Ngjyra të ndryshme</li>
                </ul>
            </div>

            <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 12px rgba(181, 131, 141, 0.1); border-top: 4px solid #b5838d; text-align: center;">
                <h4 style="font-family: 'Playfair Display', serif; color: #b5838d; font-size: 1.5rem; margin: 0 0 20px 0;">Paket VIP</h4>
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

    <!-- Tips Section -->
    <div style="background: #f5f5f5; padding: 50px 20px; border-radius: 12px; text-align: center; margin-bottom: 50px;">
        <h2 class="section-title">💡 Këshilla për Kujdesin e Thongjeve</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-top: 30px;">
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">💧</div>
                <h4 style="color: #b5838d; margin-bottom: 10px;">Hidroz Rregullishta</h4>
                <p style="color: #666; margin: 0;">Përdor hidrator për thonjtë dhe lëkurën pranë tyre</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">✂️</div>
                <h4 style="color: #b5838d; margin-bottom: 10px;">Manicura e Rregullit</h4>
                <p style="color: #666; margin: 0;">Bisefi thonjtë çdo 3-4 javë</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                <div style="font-size: 2.5rem; margin-bottom: 10px;">🛡️</div>
                <h4 style="color: #b5838d; margin-bottom: 10px;">Shtytja Katekulash</h4>
                <p style="color: #666; margin: 0;">Mos prel katekulat, vetëm shtytje</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div style="background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%); padding: 50px 20px; border-radius: 12px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: #b5838d; font-size: 2rem; margin-top: 0;">Rezervoni Shërbimin Tuaj Sot</h3>
        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">Merrni një përvojë të paharrueshme të bukurisë!</p>
        <a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="btn-gold" style="padding: 15px 40px; font-size: 1.1rem; display: inline-block; text-decoration: none; border-radius: 5px; background: var(--gold); color: white;">📞 Kontakto Për Rezervim</a>
    </div>
</div>

<?php get_footer(); ?>
