<?php
/**
 * Template part for the Premios (CPT: premio) section
 */

$premios_query = new WP_Query( array(
    'post_type' => 'premio',
    'posts_per_page' => -1,
) );
?>

<section id="premios">
    <div class="container" style="text-align:center;">
        <p class="section-label">Reconocimientos</p>
        <h2 class="section-title">Premios y distinciones</h2>
        <div class="section-divider" style="margin: 0 auto 3rem;"></div>
        
        <div class="awards-list">
            <?php if ( $premios_query->have_posts() ) : ?>
                <?php while ( $premios_query->have_posts() ) : $premios_query->the_post(); ?>
                    <div class="award-item reveal">
                        <span class="award-icon">🏆</span>
                        <div>
                            <div class="award-name"><?php the_title(); ?></div>
                            <div class="award-detail"><?php the_content(); ?></div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php else : ?>
                <div class="award-item reveal">
                    <span class="award-icon">🏆</span>
                    <div>
                        <div class="award-name">Premio Internacional UPC de Ciencia Ficción 2002</div>
                        <div class="award-detail">Ex aequo — Universitat Politècnica de Catalunya.</div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
