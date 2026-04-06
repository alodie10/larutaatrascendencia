<?php
/**
 * Template part for displaying the hero section
 */

$badge = get_theme_mod( 'lrt_hero_badge', 'Premio UPC 2002 — Ex Aequo' );
$title = get_theme_mod( 'lrt_hero_title', 'La Ruta a<br><span>Trascendencia</span>' );
$subtitle = get_theme_mod( 'lrt_hero_subtitle', 'Novela corta de ciencia ficción dura. Un periodista. Un pueblo aislado. Seres que perciben el pasado y el futuro simultáneamente. Una anomalía que desafía el espacio-tiempo.' );
?>

<section id="hero">
    <div class="container">
        <div class="hero-content">
            <?php if ( $badge ) : ?>
                <div class="hero-badge"><?php echo esc_html( $badge ); ?></div>
            <?php endif; ?>
            
            <h1 class="hero-title"><?php echo wp_kses_post( $title ); ?></h1>
            
            <?php if ( $subtitle ) : ?>
                <p class="hero-subtitle"><?php echo esc_html( $subtitle ); ?></p>
            <?php endif; ?>
            
            <div class="hero-meta">
                <div class="hero-meta-item">
                    <span class="hero-meta-label">Autor</span>
                    <span class="hero-meta-value">Alejandro Alonso</span>
                </div>
                <div class="hero-meta-item">
                    <span class="hero-meta-label">Género</span>
                    <span class="hero-meta-value">Hard Science Fiction</span>
                </div>
                <div class="hero-meta-item">
                    <span class="hero-meta-label">Publicación</span>
                    <span class="hero-meta-value">2003 / 2005</span>
                </div>
            </div>
            
            <div class="hero-cta">
                <a href="#argumento" class="btn-primary">Explorar la novela</a>
                <a href="#infografia" class="btn-secondary">Ver infografía</a>
            </div>
        </div>
    </div>
    <div class="hero-scroll-hint">Scroll</div>
</section>
