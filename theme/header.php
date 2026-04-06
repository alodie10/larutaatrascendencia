<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
        /* ===== NAVBAR ===== */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            padding: 1rem 4rem;
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Ajuste para la barra de admin de WordPress */
        body.admin-bar nav {
            top: 32px;
        }

        @media screen and (max-width: 782px) {
            body.admin-bar nav {
                top: 46px;
            }
        }

        .nav-logo {
            font-family: 'Orbitron', sans-serif;
            font-size: 1.1rem;
            font-weight: 800;
            letter-spacing: 4px;
            text-transform: uppercase;
            color: var(--text-primary);
            text-decoration: none;
            line-height: 1.4;
            display: inline-block;
            transition: text-shadow 0.3s;
        }

        .nav-logo:hover {
            text-shadow: var(--glow-cyan);
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: all 0.3s;
            line-height: 1;
            padding: 0.5rem 0;
            display: block;
            position: relative;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--cyan);
            transition: width 0.3s;
        }

        .nav-links a:hover { 
            color: var(--cyan); 
            text-shadow: 0 0 8px rgba(0, 242, 255, 0.5);
        }
        
        .nav-links a:hover::after {
            width: 100%;
        }
        
        @media (max-width: 1024px) {
            nav { padding: 1rem 2rem; }
            .nav-links { gap: 1.5rem; }
        }

        @media (max-width: 900px) {
            .nav-links { display: none; }
        }
    </style>
</head>
<body <?php body_class(); ?>>
    <nav id="navbar">
        <a href="<?php echo home_url(); ?>" class="nav-logo">La ruta a Trascendencia</a>
        <ul class="nav-links">
            <li><a href="#argumento">Argumento</a></li>
            <li><a href="#lore">Universo</a></li>
            <li><a href="#ciencia">Ciencia</a></li>
            <li><a href="#recepcion">Recepción</a></li>
            <li><a href="#infografia">Infografía</a></li>
            <li><a href="#publicaciones">Publicaciones</a></li>
        </ul>
    </nav>
