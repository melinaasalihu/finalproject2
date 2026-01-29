<?php get_header(); ?>
<div class="container py-5">
    <div style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-family: 'Playfair Display', serif; color: var(--gold); margin-bottom: 10px;">
            Rezultatet e Kërkimit
        </h1>
        <p style="color: #666; margin-bottom: 20px; font-size: 1.1rem;">
            Kërkoni për: "<strong><?php echo esc_html(get_search_query()); ?></strong>"
        </p>
        
        <!-- Search Form -->
        <div style="background: #f9f9f9; padding: 20px; border-radius: 10px; margin-bottom: 40px;">
            <?php get_search_form(); ?>
        </div>
    </div>

    <?php if(have_posts()) : ?>
        <div class="container">
            <div class="search-results-list">
                <?php 
                $count = 0;
                while(have_posts()) : the_post(); 
                    $count++;
                ?>
                    <div class="search-item">
                        <div style="display: flex; gap: 20px; align-items: flex-start;">
                            <?php if(has_post_thumbnail()) : ?>
                                <div style="flex-shrink: 0; width: 120px; height: 120px; border-radius: 8px; overflow: hidden;">
                                    <?php the_post_thumbnail('salon-thumbnail', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                </div>
                            <?php endif; ?>
                            <div style="flex: 1;">
                                <h3 style="margin-top: 0;"><a href="<?php the_permalink(); ?>" style="color: var(--gold); text-decoration: none;"><?php the_title(); ?></a></h3>
                                <p style="color: #666; line-height: 1.6; margin: 10px 0;">
                                    <?php echo wp_trim_words(get_the_content(), 30); ?>
                                </p>
                                <div style="display: flex; gap: 15px; align-items: center; margin-top: 10px;">
                                    <span style="color: #999; font-size: 0.9rem;">
                                        <?php echo get_the_date('d.m.Y'); ?>
                                    </span>
                                    <a href="<?php the_permalink(); ?>" style="color: var(--gold); text-decoration: none; font-weight: 600; transition: 0.3s;">
                                        Shiko Më Shumë →
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

            <div style="margin-top: 40px; text-align: center; color: #999;">
                <p>U gjetën <?php echo $count; ?> rezultate</p>
            </div>

            <!-- Pagination -->
            <div class="pagination" style="margin-top: 40px;">
                <?php the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => '← Më Parë',
                    'next_text' => 'Më Pas →',
                )); ?>
            </div>
        </div>
    <?php else : ?>
        <div class="container" style="padding: 60px 20px; text-align: center;">
            <h2 style="color: #999; margin-bottom: 20px;">Nuk u gjet asgjë</h2>
            <p style="color: #999; font-size: 1.05rem; margin-bottom: 30px;">
                Na vjen keq, por nuk u gjet asgjë me këtë kërkimin. Ju lutem provoni përsëri.
            </p>
            
            <div style="background: #f9f9f9; padding: 30px; border-radius: 10px; margin-bottom: 30px;">
                <h3 style="font-family: 'Playfair Display', serif; color: var(--gold); margin-bottom: 20px;">Përpiquni përsëri</h3>
                <?php get_search_form(); ?>
            </div>

            <div style="margin-top: 40px; padding-top: 40px; border-top: 1px solid #eee;">
                <h3 style="color: var(--gold); margin-bottom: 20px;">Ose Kërkoni Sipas Kategorisë</h3>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 15px;">
                    <?php
                    $categories = array(
                        'thonj'    => array('titulli' => '💅 Thonj', 'color' => 'pink'),
                        'floke'    => array('titulli' => '✂️ Flokë', 'color' => 'gold'),
                        'makeup'   => array('titulli' => '💄 Makeup', 'color' => 'dark'),
                        'skincare' => array('titulli' => '✨ Skincare', 'color' => 'soft')
                    );

                    foreach ($categories as $slug => $data) {
                        $term = get_term_by('slug', $slug, 'kategoria_sherbimit');
                        if ($term) {
                            $link = get_term_link($term);
                            echo '<a href="' . esc_url($link) . '" style="display: block; padding: 15px; background: white; border: 2px solid #ddd; border-radius: 8px; text-decoration: none; color: #333; font-weight: 600; text-align: center; transition: all 0.3s;">'
                                . esc_html($data['titulli']) . 
                            '</a>';
                        }
                    }
                    ?>
                </div>
            </div>

            <div style="margin-top: 40px;">
                <a href="<?php echo home_url(); ?>" class="btn-gold" style="padding: 12px 30px; font-size: 1.05rem; display: inline-block;">
                    ← Kthehu në Ballinë
                </a>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>