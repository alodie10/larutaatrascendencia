<?php
/**
 * La Ruta a Trascendencia - Portada
 */

get_header(); ?>

<main id="primary" class="site-main">

    <?php
    // Sección 1: Hero
    get_template_part( 'template-parts/hero' );

    // Sección 2: Argumento
    get_template_part( 'template-parts/argumento' );

    // Sección 3: Universo (Lore)
    get_template_part( 'template-parts/lore' );

    // Sección 4: Ciencia
    get_template_part( 'template-parts/ciencia' );

    // Sección 5: Recepción
    get_template_part( 'template-parts/recepcion' );

    // Sección 6: Premios
    get_template_part( 'template-parts/premios' );

    // Sección 7: Infografía
    get_template_part( 'template-parts/infografia' );

    // Sección 8: Publicaciones
    get_template_part( 'template-parts/publicaciones' );
    ?>

</main>

<?php get_footer(); ?>
