<?php
/**
 * Template part for the Infografia section
 */
?>

<section id="infografia">
    <div class="container">
        <p class="section-label">Mapa interactivo</p>
        <h2 class="section-title">Navegación táctica</h2>
        <div class="section-divider"></div>
        <p style="color:var(--text-secondary); margin-bottom:2rem; font-size:0.95rem;">
            Explorá el universo de Trascendencia. Hacé zoom, arrastrá la imagen y tocá los hotspots para descubrir información.
        </p>
        <div class="infographic-frame reveal">
            <iframe src="<?php echo get_template_directory_uri(); ?>/interactive-infographic.html" title="Infografía interactiva" loading="lazy"></iframe>
        </div>
    </div>
</section>
