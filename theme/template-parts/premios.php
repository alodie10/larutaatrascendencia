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
                        <div class="award-detail">Ganador (Ex aequo) — Universitat Politècnica de Catalunya.</div>
                    </div>
                </div>
                <div class="award-item reveal">
                    <span class="award-icon">✨</span>
                    <div>
                        <div class="award-name">Premio Ciudad de Arena a la Revelación Literaria 2003</div>
                        <div class="award-detail">Ganador (Fundación Ciudad de Arena).</div>
                    </div>
                </div>
                <div class="award-item reveal">
                    <span class="award-icon">🥈</span>
                    <div>
                        <div class="award-name">Finalista del Premio Ignotus 2004</div>
                        <div class="award-detail">Categoría Mejor Novela Corta.</div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
