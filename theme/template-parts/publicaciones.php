<?php
/**
 * Template part for the Publicaciones (CPT: publicacion) section
 */

$publicaciones_query = new WP_Query( array(
    'post_type' => 'publicacion',
    'posts_per_page' => -1,
) );
?>

<section id="publicaciones">
    <div class="container">
        <p class="section-label">Ediciones</p>
        <h2 class="section-title">Publicaciones</h2>
        <div class="section-divider"></div>
        
        <div class="pub-grid">
            <?php if ( $publicaciones_query->have_posts() ) : ?>
                <?php while ( $publicaciones_query->have_posts() ) : $publicaciones_query->the_post(); ?>
                    <div class="pub-card reveal">
                        <div class="pub-year">Año</div> <!-- Año como metadato manual o ACF o similar -->
                        <div class="pub-title"><?php the_title(); ?></div>
                        <div class="pub-detail"><?php the_content(); ?></div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php else : ?>
                <div class="pub-card reveal">
                    <div class="pub-year">2003</div>
                    <div class="pub-title">Premio UPC 2002: Novela corta de ciencia ficción</div>
                    <div class="pub-detail">Ediciones B — Colección Nova nº 158, Barcelona.</div>
                </div>
                <div class="pub-card reveal">
                    <div class="pub-year">2005</div>
                    <div class="pub-title">La ruta a Trascendencia</div>
                    <div class="pub-detail">Editorial La Página / Página/12.</div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
