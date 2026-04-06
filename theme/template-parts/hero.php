<?php
/**
 * Template part for displaying the hero section
 */

$badge = get_theme_mod( 'lrt_hero_badge', 'Premio UPC 2002 — Ex Aequo' );
$title = get_theme_mod( 'lrt_hero_title', 'La Ruta a<br><span>Trascendencia</span>' );
$subtitle = get_theme_mod( 'lrt_hero_subtitle', 'Novela corta de ciencia ficción dura. Un periodista. Un pueblo aislado. Seres que perciben el pasado y el futuro simultáneamente. Una anomalía que desafía el espacio-tiempo.' );
?>

<section id="hero">
    <div class="hero-background" id="hero-parallax"></div>
    <div class="container" style="z-index: 10;">
        <div class="row" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 4rem; align-items: stretch;">
            <!-- Lado Izquierdo: Información de la Novela -->
            <div class="column">
                <div class="glass-card reveal" style="padding: 3rem; height: 100%; border: 1px solid var(--glass-border); position: relative;">
                    <div style="position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: linear-gradient(to bottom, var(--cyan), var(--magenta));"></div>
                    <span class="hero-badge">Novela Ganadora del Premio UPC</span>
                    <h1 class="hero-title" style="margin: 1.5rem 0; font-family: 'Orbitron', sans-serif;">
                        <?php echo $title; ?>
                    </h1>
                    <p class="hero-subtitle" style="margin-bottom: 2.5rem;">
                        Un periodista en busca de su memoria en un pueblo donde el tiempo se percibe de forma no lineal. Una obra maestra del Hard SF argentino.
                    </p>
                    
                    <div style="display: flex; gap: 3rem; margin-bottom: 3rem;">
                        <div class="hero-meta-item">
                            <span class="hero-meta-label">Género</span>
                            <span class="hero-meta-value">Hard Science Fiction</span>
                        </div>
                        <div class="hero-meta-item">
                            <span class="hero-meta-label">Publicación</span>
                            <span class="hero-meta-value">Col. Nova / P12</span>
                        </div>
                    </div>

                    <div class="hero-cta">
                        <a href="#argumento" class="btn-primary">Leer Sinopsis</a>
                        <a href="#ciencia" class="btn-secondary">Ciencia Warp</a>
                    </div>
                </div>
            </div>

            <!-- Lado Derecho: Sobre el Autor -->
            <div class="column">
                <div class="glass-card reveal" style="padding: 3rem; height: 100%; transition-delay: 0.2s; border: 1px solid var(--glass-border);">
                    <p class="section-label" style="color: var(--magenta);">Biografía del Autor</p>
                    <h2 style="font-family: 'Orbitron', sans-serif; font-size: 2.5rem; margin-bottom: 1.5rem; letter-spacing: 2px;">Alejandro Alonso</h2>
                    <p style="color: var(--text-secondary); line-height: 1.8; font-size: 1.05rem; margin-bottom: 2rem;">
                        Nacido en Buenos Aires en 1970, Alonso es una de las voces más rigurosas de la ciencia ficción contemporánea. Con formación científica y literaria, sus obras exploran la intersección entre la física teórica y la condición humana.
                    </p>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 2rem;">
                        <div>
                            <span style="display: block; font-size: 1.5rem; font-weight: 800; color: var(--cyan);">2002</span>
                            <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary);">Premio UPC Global</span>
                        </div>
                        <div>
                            <span style="display: block; font-size: 1.5rem; font-weight: 800; color: var(--violet);">2003</span>
                            <span style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 1px; color: var(--text-secondary);">Ciudad de Arena</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="hero-scroll-hint">
        Explorar el universo
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const parallax = document.getElementById('hero-parallax');
    window.addEventListener('scroll', function() {
        let offset = window.pageYOffset;
        parallax.style.transform = 'scale(1.1) translateY(' + offset * 0.4 + 'px)';
    });
});
</script>
