<?php
/**
 * Plantilla para entradas individuales (Single Post)
 * Optimizado para SEO, E-E-A-T y lectura.
 */

get_header(); ?>

<main id="primary" class="site-main post-container">
    <div class="container single-post-wrapper">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('glass-card article-content'); ?>>
                
                <header class="entry-header">
                    <?php
                    // SEO: H1 de la entrada
                    the_title( '<h1 class="entry-title section-title">', '</h1>' );
                    ?>
                    <div class="entry-meta">
                        <span class="posted-on">📅 <?php echo get_the_date(); ?></span>
                        <span class="category-links">📂 <?php the_category(', '); ?></span>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large', array( 'class' => 'featured-image' ) ); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php
                    the_content();
                    ?>
                </div>

                <!-- E-E-A-T: Biografía del autor -->
                <footer class="entry-footer">
                    <?php
                    $author_id = get_the_author_meta('ID');
                    $author_bio = get_the_author_meta('description');
                    $author_name = get_the_author_meta('display_name');
                    ?>
                    
                    <div class="author-bio-box">
                        <div class="author-avatar">
                            <?php echo get_avatar($author_id, 96); ?>
                        </div>
                        <div class="author-info">
                            <h4 class="author-name">Escrito por <span><?php echo esc_html($author_name); ?></span></h4>
                            <?php if ($author_bio) : ?>
                                <p class="author-description"><?php echo esc_html($author_bio); ?></p>
                            <?php else : ?>
                                <p class="author-description">Autor en La Ruta a Trascendencia. Este redactor es responsable de la integridad y verificación de los datos publicados en este artículo, en cumplimiento de nuestras guías editoriales.</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </footer>
            </article>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
