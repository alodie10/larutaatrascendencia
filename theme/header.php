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
            z-index: 100;
            padding: 1rem 2rem;
            background: rgba(3, 3, 11, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--glass-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: background 0.3s;
        }

        .nav-logo {
            font-family: 'Orbitron', sans-serif;
            font-size: 1rem;
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            background: linear-gradient(90deg, var(--cyan), var(--violet));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            color: var(--text-secondary);
            text-decoration: none;
            font-size: 0.85rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: color 0.2s;
        }

        .nav-links a:hover { color: var(--cyan); }
        
        @media (max-width: 768px) {
            .nav-links { display: none; }
        }
    </style>
</head>
<body <?php body_class(); ?>>
    <nav id="navbar">
        <a href="<?php echo home_url(); ?>" class="nav-logo">LRT</a>
        <ul class="nav-links">
            <li><a href="#argumento">Argumento</a></li>
            <li><a href="#lore">Universo</a></li>
            <li><a href="#ciencia">Ciencia</a></li>
            <li><a href="#recepcion">Recepción</a></li>
            <li><a href="#infografia">Infografía</a></li>
            <li><a href="#publicaciones">Publicaciones</a></li>
        </ul>
    </nav>
