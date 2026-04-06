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
            padding: 1.2rem 2rem;
            background: rgba(3, 3, 11, 0.8);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: background 0.3s, top 0.3s;
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
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            background: linear-gradient(90deg, var(--cyan), var(--violet));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
            line-height: 1.4; /* Evita que se corte el gradiente */
            display: inline-block;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.8rem;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            transition: color 0.2s;
            line-height: 1;
            padding: 0.5rem 0;
            display: block;
        }

        .nav-links a:hover { color: var(--cyan); }
        
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
