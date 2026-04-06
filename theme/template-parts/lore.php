<?php
/**
 * Template part for the Lore (CPT: universo) section
 */

$universo_query = new WP_Query( array(
    'post_type' => 'universo',
    'posts_per_page' => -1,
    'order' => 'ASC',
) );
?>

<section id="lore">
    <div class="container">
        <p class="section-label">Universo</p>
        <h2 class="section-title">Elementos del mundo</h2>
        <div class="section-divider"></div>
        
        <div class="lore-grid">
            <?php if ( $universo_query->have_posts() ) : ?>
                <?php while ( $universo_query->have_posts() ) : $universo_query->the_post(); ?>
                    <div class="lore-card reveal">
                        <span class="lore-icon">👁️</span>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            <?php else : ?>
                <!-- Elementos por defecto si no hay contenido -->
                <div class="lore-card reveal">
                    <span class="lore-icon">🏘️</span>
                    <h3>Trascendencia</h3>
                    <p>Pueblo rebautizado tras una guerra de quince días contra invasores extraterrestres.</p>
                </div>
                <div class="lore-card reveal">
                    <span class="lore-icon">👁️</span>
                    <h3>Los Tracs</h3>
                    <p>Habitantes de Trascendencia cuya conciencia existe simultáneamente en múltiples planos temporales.</p>
                </div>
                <div class="lore-card reveal">
                    <span class="lore-icon">☄️</span>
                    <h3>El Primer Epicentro</h3>
                    <p>Zonal de anomalía espacio-temporal de contacto con los invasores «epics».</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
