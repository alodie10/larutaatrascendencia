<?php
/**
 * La Ruta a Trascendencia - Funciones del Tema
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// 1. Configuración básica del tema
function lrt_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    
    // Registrar menús si es necesario
    register_nav_menus( array(
        'primary-menu' => __( 'Menú Principal', 'lrt-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'lrt_theme_setup' );

// 2. Encolar Estilos y Scripts
function lrt_enqueue_assets() {
    // Google Fonts: Inter y Orbitron
    wp_enqueue_style( 'lrt-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Orbitron:wght@700;900&display=swap', array(), null );
    
    // Estilo principal del tema
    wp_enqueue_style( 'lrt-main-style', get_stylesheet_uri(), array(), '1.0.3' );
}
add_action( 'wp_enqueue_scripts', 'lrt_enqueue_assets' );

// 3. Registrar Custom Post Types
function lrt_register_post_types() {
    
    // CPT: Universo (Lore)
    register_post_type( 'universo', array(
        'labels' => array(
            'name' => __( 'Universo', 'lrt-theme' ),
            'singular_name' => __( 'Elemento del Universo', 'lrt-theme' ),
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'menu_icon' => 'dashicons-admin-site',
        'show_in_rest' => true,
    ));

    // CPT: Reseñas
    register_post_type( 'resena', array(
        'labels' => array(
            'name' => __( 'Reseñas', 'lrt-theme' ),
            'singular_name' => __( 'Reseña', 'lrt-theme' ),
        ),
        'public' => true,
        'supports' => array( 'title', 'editor' ),
        'menu_icon' => 'dashicons-star-filled',
        'show_in_rest' => true,
    ));

    // CPT: Premios
    register_post_type( 'premio', array(
        'labels' => array(
            'name' => __( 'Premios', 'lrt-theme' ),
            'singular_name' => __( 'Premio', 'lrt-theme' ),
        ),
        'public' => true,
        'supports' => array( 'title', 'editor' ),
        'menu_icon' => 'dashicons-awards',
        'show_in_rest' => true,
    ));

    // CPT: Publicaciones
    register_post_type( 'publicacion', array(
        'labels' => array(
            'name' => __( 'Publicaciones', 'lrt-theme' ),
            'singular_name' => __( 'Publicación', 'lrt-theme' ),
        ),
        'public' => true,
        'supports' => array( 'title', 'editor' ),
        'menu_icon' => 'dashicons-book-alt',
        'show_in_rest' => true,
    ));
}
add_action( 'init', 'lrt_register_post_types' );

// 4. Customizer para la sección Hero
function lrt_register_customizer_hero( $wp_customize ) {
    $wp_customize->add_section( 'lrt_hero_section', array(
        'title' => __( 'Configuración Hero', 'lrt-theme' ),
        'priority' => 30,
    ));

    // Badge
    $wp_customize->add_setting( 'lrt_hero_badge', array( 'default' => 'Premio UPC 2002 — Ex Aequo' ));
    $wp_customize->add_control( 'lrt_hero_badge', array(
        'label' => 'Texto del Badge',
        'section' => 'lrt_hero_section',
        'type' => 'text',
    ));

    // Título Principal (Html)
    $wp_customize->add_setting( 'lrt_hero_title', array( 'default' => 'La Ruta a<br><span>Trascendencia</span>' ));
    $wp_customize->add_control( 'lrt_hero_title', array(
        'label' => 'Título del Hero (Soporta HTML)',
        'section' => 'lrt_hero_section',
        'type' => 'textarea',
    ));

    // Subtítulo
    $wp_customize->add_setting( 'lrt_hero_subtitle', array( 'default' => 'Novela corta de ciencia ficción dura. Un periodista. Un pueblo aislado.' ));
    $wp_customize->add_control( 'lrt_hero_subtitle', array(
        'label' => 'Subtítulo',
        'section' => 'lrt_hero_section',
        'type' => 'textarea',
    ));
}
add_action( 'customize_register', 'lrt_register_customizer_hero' );

// 5. Registrar estilos de bloques Gutenberg (GEO)
function lrt_register_block_styles() {
    register_block_style(
        'core/list',
        array(
            'name'         => 'geo-summary',
            'label'        => __( 'Resumen GEO (Puntos Clave)', 'lrt-theme' ),
            'is_default'   => false,
        )
    );
}
add_action( 'init', 'lrt_register_block_styles' );
