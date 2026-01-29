<?php
/**
 * Template Name: Contact Us
 * Contact form and salon information
 */
get_header(); ?>

<section style="background: linear-gradient(135deg, var(--pink) 0%, #fff 100%); padding: 60px 20px;">
    <div class="container">
        <h1 class="section-title">Kontakto Sajonin</h1>
        <p style="text-align: center; color: #666; font-size: 1.1rem; max-width: 600px; margin: 20px auto;">
            Na dërgoni një mesazh dhe ne do t'ju përgjigjemi në më të shpejtër të mundshëm
        </p>
    </div>
</section>

<div class="container py-5">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">
        <!-- Contact Form -->
        <div>
            <h2 style="font-family: 'Playfair Display', serif; color: var(--gold); margin-bottom: 30px;">Dërgoni Mesazhin</h2>
            
            <!-- Success Message -->
            <?php
            if (isset($_SESSION['contact_form_success']) && $_SESSION['contact_form_success']) {
                echo '<div style="background: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px;">
                    ✓ Mesazhi juaj u dërgua me sukses! Do t\'ju kontaktojmë sa më shpejt.
                </div>';
                unset($_SESSION['contact_form_success']);
            }
            ?>

            <form method="POST" style="background: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08);">
                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-weight: 600; color: var(--dark); margin-bottom: 8px;">Emri juaj *</label>
                    <input 
                        type="text" 
                        name="name" 
                        required 
                        style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box; transition: border-color 0.3s;"
                        onfocus="this.style.borderColor='var(--gold)'"
                        onblur="this.style.borderColor='#ddd'"
                    />
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-weight: 600; color: var(--dark); margin-bottom: 8px;">Email juaj *</label>
                    <input 
                        type="email" 
                        name="email" 
                        required 
                        style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box; transition: border-color 0.3s;"
                        onfocus="this.style.borderColor='var(--gold)'"
                        onblur="this.style.borderColor='#ddd'"
                    />
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-weight: 600; color: var(--dark); margin-bottom: 8px;">Telefoni</label>
                    <input 
                        type="tel" 
                        name="phone" 
                        style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box; transition: border-color 0.3s;"
                        onfocus="this.style.borderColor='var(--gold)'"
                        onblur="this.style.borderColor='#ddd'"
                    />
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-weight: 600; color: var(--dark); margin-bottom: 8px;">Shërbimi *</label>
                    <select 
                        name="service" 
                        required 
                        style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box; transition: border-color 0.3s; background: white;"
                        onfocus="this.style.borderColor='var(--gold)'"
                        onblur="this.style.borderColor='#ddd'"
                    >
                        <option value="">-- Zgjedh shërbimin --</option>
                        <option value="Thonj">💅 Thonj</option>
                        <option value="Flokë">✂️ Flokë</option>
                        <option value="Makeup">💄 Makeup</option>
                        <option value="Skincare">✨ Skincare</option>
                    </select>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-weight: 600; color: var(--dark); margin-bottom: 8px;">Mesazhi *</label>
                    <textarea 
                        name="message" 
                        required 
                        rows="5" 
                        style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 1rem; box-sizing: border-box; resize: vertical; transition: border-color 0.3s;"
                        onfocus="this.style.borderColor='var(--gold)'"
                        onblur="this.style.borderColor='#ddd'"
                    ></textarea>
                </div>

                <button 
                    type="submit" 
                    class="btn-gold" 
                    style="width: 100%; padding: 12px; font-size: 1.05rem; border: none; cursor: pointer; transition: background 0.3s;"
                >
                    Dërgo Mesazhin
                </button>
            </form>
        </div>

        <!-- Contact Information -->
        <div>
            <h2 style="font-family: 'Playfair Display', serif; color: var(--gold); margin-bottom: 30px;">Informacioni i Kontaktit</h2>

            <!-- Address -->
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); margin-bottom: 20px; border-left: 4px solid var(--gold);">
                <h4 style="color: var(--dark); margin-top: 0;">📍 Adresa</h4>
                <p style="color: #666; margin: 0;">
                    Rruga e Bukurisë 123<br>
                    Prishtinë, Kosovë<br>
                    10000
                </p>
            </div>

            <!-- Phone -->
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); margin-bottom: 20px; border-left: 4px solid var(--gold);">
                <h4 style="color: var(--dark); margin-top: 0;">📞 Telefoni</h4>
                <p style="color: #666; margin: 0;">
                    <a href="tel:+38349123456" style="color: var(--gold); text-decoration: none;">+383 49 123 456</a><br>
                    <a href="tel:+38349654321" style="color: var(--gold); text-decoration: none;">+383 49 654 321</a>
                </p>
            </div>

            <!-- Email -->
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); margin-bottom: 20px; border-left: 4px solid var(--gold);">
                <h4 style="color: var(--dark); margin-top: 0;">✉️ Email</h4>
                <p style="color: #666; margin: 0;">
                    <a href="mailto:info@beautysalon.com" style="color: var(--gold); text-decoration: none;">info@beautysalon.com</a><br>
                    <a href="mailto:contact@beautysalon.com" style="color: var(--gold); text-decoration: none;">contact@beautysalon.com</a>
                </p>
            </div>

            <!-- Hours -->
            <div style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border-left: 4px solid var(--gold);">
                <h4 style="color: var(--dark); margin-top: 0;">⏰ Oraret e Punës</h4>
                <ul style="list-style: none; padding: 0; margin: 0; color: #666;">
                    <li style="display: flex; justify-content: space-between; padding: 5px 0; border-bottom: 1px solid #eee;">
                        <span>E hënë - E premte:</span>
                        <span style="font-weight: 600;">09:00 - 19:00</span>
                    </li>
                    <li style="display: flex; justify-content: space-between; padding: 5px 0; border-bottom: 1px solid #eee;">
                        <span>E shtunë:</span>
                        <span style="font-weight: 600;">10:00 - 18:00</span>
                    </li>
                    <li style="display: flex; justify-content: space-between; padding: 5px 0;">
                        <span>E diel:</span>
                        <span style="font-weight: 600;">Mbyllur</span>
                    </li>
                </ul>
            </div>

            <!-- Social Media -->
            <div style="margin-top: 30px;">
                <h4 style="color: var(--dark); margin-bottom: 15px;">Na Ndiq Në Rrjete Shoqerore</h4>
                <div style="display: flex; gap: 15px;">
                    <a href="#" style="display: inline-block; width: 45px; height: 45px; background: var(--pink); color: #b5838d; text-align: center; line-height: 45px; border-radius: 50%; text-decoration: none; font-size: 1.2rem; transition: all 0.3s;">f</a>
                    <a href="#" style="display: inline-block; width: 45px; height: 45px; background: var(--pink); color: #b5838d; text-align: center; line-height: 45px; border-radius: 50%; text-decoration: none; font-size: 1.2rem; transition: all 0.3s;">📷</a>
                    <a href="#" style="display: inline-block; width: 45px; height: 45px; background: var(--pink); color: #b5838d; text-align: center; line-height: 45px; border-radius: 50%; text-decoration: none; font-size: 1.2rem; transition: all 0.3s;">🐦</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Map or Additional Info -->
    <div style="background: linear-gradient(135deg, var(--pink) 0%, #fff 100%); padding: 40px; border-radius: 12px; margin-top: 60px; text-align: center;">
        <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); font-size: 1.8rem; margin-top: 0;">Ne Vizitoni!</h3>
        <p style="color: #666; margin-bottom: 20px;">Ndodhet në qendër të qytetit, lehtësisht i arritshëm me transport publik</p>
    </div>
</div>

<?php get_footer(); ?>