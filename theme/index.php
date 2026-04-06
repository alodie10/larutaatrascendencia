<?php
/**
 * La Ruta a Trascendencia - Index / Portada
 * Este archivo actúa como fallback principal para asegurar que el contenido siempre se vea.
 */

get_header(); ?>

<main id="primary" class="site-main">

    <?php
    // Cargamos las secciones. Si no encuentra el archivo en template-parts, no mostrará nada.
    // Por eso nos aseguraremos de que el ZIP sea correcto.
    
    get_template_part( 'template-parts/hero' );
    get_template_part( 'template-parts/argumento' );
    get_template_part( 'template-parts/lore' );
    get_template_part( 'template-parts/ciencia' );
    get_template_part( 'template-parts/recepcion' );
    get_template_part( 'template-parts/premios' );
    get_template_part( 'template-parts/infografia' );
    get_template_part( 'template-parts/publicaciones' );
    ?>

</main>

<?php get_footer(); ?>
