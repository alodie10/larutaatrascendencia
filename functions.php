<?php
/**
 * La Ruta a Trascendencia Custom Functions
 * Portability: Add these snippets to your theme's functions.php or a plugin.
 */

// 1. Enqueue Google Fonts (Space Grotesk and Outfit)
function lrt_enqueue_fonts() {
    wp_enqueue_style( 'lrt-google-fonts', 'https://fonts.googleapis.com/css2?family=Outfit:wght@300;600&family=Space+Grotesk:wght@300;500;700&display=swap', false );
}
add_action( 'wp_enqueue_scripts', 'lrt_enqueue_fonts' );

// 2. Add Custom CSS classes to the block editor (Optional, but helpful)
function lrt_editor_styles() {
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'lrt_editor_styles' );

// 3. Register Custom Block Patterns (Ideal for the sci-fi sections)
function lrt_register_patterns() {
    register_block_pattern_category(
        'lrt-sci-fi',
        array( 'label' => __( 'La Ruta a Trascendencia (Sci-Fi)', 'lrt' ) )
    );

    // Hero Section Pattern Placeholder
    register_block_pattern(
        'lrt/hero-glass',
        array(
            'title'       => __( 'Hero Glassmorphism', 'lrt' ),
            'categories'  => array( 'lrt-sci-fi' ),
            'content'     => '<!-- wp:group {"className":"hero-wrapper sci-fi-card"} -->
                              <div class="wp-block-group hero-wrapper sci-fi-card">
                              <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"neon-text"} -->
                              <h2 class="wp-block-heading has-text-align-center neon-text">LA RUTA A TRASCENDENCIA</h2>
                              <!-- /wp:heading -->
                              </div>
                              <!-- /wp:group -->',
        )
    );

    // 3. Lore Section Pattern
    register_block_pattern(
        'lrt/lore-grid',
        array(
            'title'       => __( 'Lore Cards Grid', 'lrt' ),
            'categories'  => array( 'lrt-sci-fi' ),
            'content'     => '<!-- wp:group {"className":"lore-grid"} -->
                              <div class="wp-block-group lore-grid">
                              <!-- wp:group {"className":"sci-fi-card lore-card"} -->
                              <div class="wp-block-group sci-fi-card lore-card">
                              <h3>LOS TRACS</h3>
                              <p>Habitantes de Trascendencia cuya conciencia existe simultáneamente en múltiples planos temporales como consecuencia de un evento físico extraordinario.</p>
                              </div>
                              <!-- /wp:group -->
                              <!-- wp:group {"className":"sci-fi-card lore-card"} -->
                              <div class="wp-block-group sci-fi-card lore-card">
                              <h3>EL PRIMER EPICENTRO</h3>
                              <p>Sitio de contacto con los invasores "epics" donde la métrica de Alcubierre se manifiesta, alterando la realidad local.</p>
                              </div>
                              <!-- /wp:group -->
                              </div>
                              <!-- /wp:group -->',
        )
    );

    // 4. Interactive Infographic Pattern
    register_block_pattern(
        'lrt/interactive-infographic',
        array(
            'title'       => __( 'Interactive Infographic', 'lrt' ),
            'categories'  => array( 'lrt-sci-fi' ),
            'content'     => '<!-- wp:group {"className":"infographic-wrapper"} -->
                              <div class="wp-block-group infographic-wrapper">
                              <h2 class="section-title neon-text">Navegación Táctica: El Mapa de Trascendencia</h2>
                              <!-- wp:html -->
                              <iframe src="/wp-content/themes/your-theme/interactive-infographic.html" class="infographic-iframe"></iframe>
                              <!-- /wp:html -->
                              </div>
                              <!-- /wp:group -->',
        )
    );
}
add_action( 'init', 'lrt_register_patterns' );
