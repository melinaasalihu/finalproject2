<?php
/**
 * Template Name: Pricing
 * Display service pricing and packages
 */
get_header(); ?>

<section style="background: linear-gradient(135deg, var(--gold) 0%, #a8845f 100%); padding: 60px 20px; color: white;">
    <div class="container">
        <h1 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; margin: 0; text-align: center;">Çmimet e Shërbimeve</h1>
        <p style="text-align: center; font-size: 1.1rem; max-width: 600px; margin: 20px auto;">
            Shërbime premium me çmime të arsyeshme
        </p>
    </div>
</section>

<div class="container py-5">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin: 40px 0;">
        <!-- Nails Pricing -->
        <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-top: 4px solid #b5838d;">
            <div style="background: linear-gradient(135deg, #fce4ec 0%, #f8bbd0 100%); padding: 30px; text-align: center;">
                <h3 style="font-family: 'Playfair Display', serif; color: #b5838d; font-size: 1.8rem; margin: 0;">💅 Thonj</h3>
            </div>
            <div style="padding: 30px;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Manikyri i thjeshtë</span>
                        <span style="font-weight: 600; color: var(--gold);">10€</span>
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Gel manikyri</span>
                        <span style="font-weight: 600; color: var(--gold);">15€</span>
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Pedikiur</span>
                        <span style="font-weight: 600; color: var(--gold);">20€</span>
                    </li>
                    <li style="padding: 10px 0; display: flex; justify-content: space-between;">
                        <span>Zdobrim i thonj</span>
                        <span style="font-weight: 600; color: var(--gold);">+5€</span>
                    </li>
                </ul>
                <a href="<?php echo home_url('/lloj-sherbimi/thonj'); ?>" class="btn-gold" style="display: block; padding: 10px; margin-top: 20px; text-align: center;">Shiko Shërbime</a>
            </div>
        </div>

        <!-- Hair Pricing -->
        <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-top: 4px solid var(--gold);">
            <div style="background: linear-gradient(135deg, #fff3cd 0%, #ffe6a8 100%); padding: 30px; text-align: center;">
                <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.8rem; margin: 0;">✂️ Flokë</h3>
            </div>
            <div style="padding: 30px;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Pëlqim flokësh</span>
                        <span style="font-weight: 600; color: var(--gold);">15€</span>
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Ngjyra flokësh</span>
                        <span style="font-weight: 600; color: var(--gold);">30€</span>
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Trajtim i thellë</span>
                        <span style="font-weight: 600; color: var(--gold);">25€</span>
                    </li>
                    <li style="padding: 10px 0; display: flex; justify-content: space-between;">
                        <span>Shajë flokësh</span>
                        <span style="font-weight: 600; color: var(--gold);">10€</span>
                    </li>
                </ul>
                <a href="<?php echo home_url('/lloj-sherbimi/floke'); ?>" class="btn-gold" style="display: block; padding: 10px; margin-top: 20px; text-align: center;">Shiko Shërbime</a>
            </div>
        </div>

        <!-- Makeup Pricing -->
        <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-top: 4px solid #333;">
            <div style="background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 100%); padding: 30px; text-align: center;">
                <h3 style="font-family: 'Playfair Display', serif; color: #222; font-size: 1.8rem; margin: 0;">💄 Makeup</h3>
            </div>
            <div style="padding: 30px;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Makiazh ditor</span>
                        <span style="font-weight: 600; color: var(--gold);">20€</span>
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Makiazh nate</span>
                        <span style="font-weight: 600; color: var(--gold);">25€</span>
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Makiazh dasme</span>
                        <span style="font-weight: 600; color: var(--gold);">40€</span>
                    </li>
                    <li style="padding: 10px 0; display: flex; justify-content: space-between;">
                        <span>Leshrat artificialë</span>
                        <span style="font-weight: 600; color: var(--gold);">15€</span>
                    </li>
                </ul>
                <a href="<?php echo home_url('/lloj-sherbimi/makeup'); ?>" class="btn-gold" style="display: block; padding: 10px; margin-top: 20px; text-align: center;">Shiko Shërbime</a>
            </div>
        </div>

        <!-- Skincare Pricing -->
        <div style="background: white; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); border-top: 4px solid #7c8aa8;">
            <div style="background: linear-gradient(135deg, #f0f4ff 0%, #e8f1ff 100%); padding: 30px; text-align: center;">
                <h3 style="font-family: 'Playfair Display', serif; color: #7c8aa8; font-size: 1.8rem; margin: 0;">✨ Skincare</h3>
            </div>
            <div style="padding: 30px;">
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Pastrimi i lëkurës</span>
                        <span style="font-weight: 600; color: var(--gold);">15€</span>
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Masazh i fytyrës</span>
                        <span style="font-weight: 600; color: var(--gold);">30€</span>
                    </li>
                    <li style="padding: 10px 0; border-bottom: 1px solid #eee; display: flex; justify-content: space-between;">
                        <span>Trajtim hidratues</span>
                        <span style="font-weight: 600; color: var(--gold);">35€</span>
                    </li>
                    <li style="padding: 10px 0; display: flex; justify-content: space-between;">
                        <span>Paket premium</span>
                        <span style="font-weight: 600; color: var(--gold);">60€</span>
                    </li>
                </ul>
                <a href="<?php echo home_url('/lloj-sherbimi/skincare'); ?>" class="btn-gold" style="display: block; padding: 10px; margin-top: 20px; text-align: center;">Shiko Shërbime</a>
            </div>
        </div>
    </div>

    <!-- Packages Section -->
    <div style="background: linear-gradient(135deg, #fce4ec 0%, #f0f4ff 100%); padding: 40px; border-radius: 12px; margin-top: 60px;">
        <h2 class="section-title">Paketat Spesiale</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; margin-top: 30px;">
            <div style="background: white; padding: 25px; border-radius: 8px; border-left: 4px solid var(--gold);">
                <h4 style="color: var(--gold); margin-top: 0;">🎁 Paket Dashi</h4>
                <p style="color: #666; margin: 10px 0;">Shërbim flokësh + makeup + nails</p>
                <p style="font-size: 1.5rem; color: var(--gold); font-weight: 600; margin: 15px 0;">79€</p>
                <p style="color: #999; font-size: 0.9rem; margin: 0;">Shpenzim i zakonshëm: 90€</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 8px; border-left: 4px solid var(--gold);">
                <h4 style="color: var(--gold); margin-top: 0;">✨ Paket Relaksimi</h4>
                <p style="color: #666; margin: 10px 0;">Masazh + trajtim lëkure + shajë</p>
                <p style="font-size: 1.5rem; color: var(--gold); font-weight: 600; margin: 15px 0;">89€</p>
                <p style="color: #999; font-size: 0.9rem; margin: 0;">Shpenzim i zakonshëm: 105€</p>
            </div>
            <div style="background: white; padding: 25px; border-radius: 8px; border-left: 4px solid var(--gold);">
                <h4 style="color: var(--gold); margin-top: 0;">💎 Paket Premium</h4>
                <p style="color: #666; margin: 10px 0;">Të gjithë shërbimin + pamje përshtatje</p>
                <p style="font-size: 1.5rem; color: var(--gold); font-weight: 600; margin: 15px 0;">149€</p>
                <p style="color: #999; font-size: 0.9rem; margin: 0;">Shpenzim i zakonshëm: 180€</p>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div style="text-align: center; margin-top: 60px; padding: 40px; background: white; border-radius: 12px; border: 2px solid var(--pink);">
        <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.8rem; margin-top: 0;">Keni Pyetje?</h3>
        <p style="color: #666; margin-bottom: 20px;">Ne jemi gati t'ju ndihmojmë dhe t'u ofroj informacionin më të saktë</p>
        <a href="<?php echo home_url('/contact'); ?>" class="btn-gold" style="padding: 12px 30px; font-size: 1.05rem;">Kontakto Zyrën</a>
    </div>
</div>

<?php get_footer(); ?>