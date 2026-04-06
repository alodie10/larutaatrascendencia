<?php
/**
 * Template part for displaying the hero section
 */

$badge = get_theme_mod( 'lrt_hero_badge', 'Premio UPC 2002 — Ex Aequo' );
$title = get_theme_mod( 'lrt_hero_title', 'La Ruta a<br><span>Trascendencia</span>' );
$subtitle = get_theme_mod( 'lrt_hero_subtitle', 'Novela corta de ciencia ficción dura. Un periodista. Un pueblo aislado. Seres que perciben el pasado y el futuro simultáneamente. Una anomalía que desafía el espacio-tiempo.' );
?>

<section id="hero" class="hero section-glass">
    <div class="row">
        <!-- Lado Izquierdo: Información de la Novela -->
        <div class="column">
            <div class="glass animate-on-scroll">
                <span class="badge">Premio Internacional UPC 2002</span>
                <h1 style="font-family: 'Michroma', sans-serif; font-size: clamp(2rem, 5vw, 3.5rem); margin: 1rem 0; background: linear-gradient(135deg, var(--cyan), var(--violet)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                    La ruta a Trascendencia
                </h1>
                <p class="hero-subtitle" style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 2rem;">
                    Novela corta de ciencia ficción dura. Antonio Segura viaja a un pueblo aislado donde el tiempo se percibe de forma no lineal. Un relato sobre la culpa, la memoria y la física de lo imposible.
                </p>
                
                <div style="display: flex; gap: 2rem; margin-bottom: 2rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1.5rem;">
                    <div>
                        <span style="display: block; font-size: 0.7rem; text-transform: uppercase; color: var(--cyan);">Género</span>
                        <span style="font-size: 1rem;">Hard Science Fiction</span>
                    </div>
                    <div>
                        <span style="display: block; font-size: 0.7rem; text-transform: uppercase; color: var(--cyan);">Páginas</span>
                        <span style="font-size: 1rem;">175 (Ed. Página/12)</span>
                    </div>
                </div>

                <div class="hero-actions" style="display: flex; gap: 1rem;">
                    <a href="#argumento" class="btn btn-primary" style="padding: 1rem 2rem; border-radius: 4px; text-decoration: none;">Leer Sinopsis</a>
                    <a href="#ciencia" class="btn btn-outline" style="padding: 1rem 2rem; border-radius: 4px; text-decoration: none; border: 1px solid var(--cyan); color: var(--cyan);">Ciencia Warp</a>
                </div>
            </div>
        </div>

        <!-- Lado Derecho: Sobre el Autor -->
        <div class="column">
            <div class="glass animate-on-scroll" style="transition-delay: 0.2s; height: 100%;">
                <h3 style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; color: var(--violet); margin-bottom: 1rem;">Sobre el autor</h3>
                <h2 style="font-family: 'Michroma', sans-serif; font-size: 2rem; margin-bottom: 1.5rem;">Alejandro Alonso</h2>
                <p style="color: var(--text-secondary); line-height: 1.6; margin-bottom: 1.5rem;">
                    Escritor argentino (San Martín, Buenos Aires, 1970). Obtuvo el prestigioso Premio UPC y el Premio Ciudad de Arena, consolidándose como una de las voces con mayor rigor científico del género.
                </p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1.5rem;">
                    <div>
                        <span style="display: block; font-size: 1.2rem; font-weight: 700;">2002</span>
                        <span style="font-size: 0.7rem; text-transform: uppercase; color: var(--text-secondary);">Premio UPC</span>
                    </div>
                    <div>
                        <span style="display: block; font-size: 1.2rem; font-weight: 700;">Nova</span>
                        <span style="font-size: 0.7rem; text-transform: uppercase; color: var(--text-secondary);">Colección</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #hero {
        padding: 8rem 2rem 4rem;
        min-height: 100vh;
        display: flex;
        align-items: center;
        background: radial-gradient(circle at 10% 20%, rgba(0, 243, 255, 0.05), transparent 40%);
    }
</style>
