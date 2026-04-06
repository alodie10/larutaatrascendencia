<?php
/**
 * Template part for the Reseñas (CPT: resena) section
 */

$resenas_query = new WP_Query( array(
    'post_type' => 'resena',
    'posts_per_page' => -1,
) );
?>

<section id="recepcion">
    <div class="container">
        <p class="section-label">Crítica literaria</p>
        <h2 class="section-title">Recepción</h2>
        <div class="section-divider"></div>
        
        <div class="reviews-grid">
            <?php if ( $resenas_query->have_posts() ) : ?>
                <?php while ( $resenas_query->have_posts() ) : $resenas_query->the_post(); ?>
                    <div class="review-card reveal">
                        <div class="review-stars">★★★★★</div>
                        <div class="review-text">
                            <?php the_content(); ?>
                        </div>
                        <span class="review-source"><?php the_title(); ?></span>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php else : ?>
                <div class="review-card reveal">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">«Una magnífica muestra de las posibilidades que brinda la ciencia ficción para la especulación científica y filosófica.»</p>
                    <span class="review-source">Daniel Salvo — ciencia-ficcion.com</span>
                </div>
                <div class="review-card reveal">
                    <div class="review-stars">★★★★★</div>
                    <p class="review-text">«Se devoran más que se leen.»</p>
                    <span class="review-source">La Tercera Fundación</span>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
