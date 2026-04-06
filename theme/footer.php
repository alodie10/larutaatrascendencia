    <!-- ===== FOOTER ===== -->
    <footer style="border-top:1px solid var(--glass-border); padding:3rem 0; text-align:center; position:relative; z-index:1;">
        <div class="container">
            <div style="font-family:'Orbitron', sans-serif; font-size:0.9rem; letter-spacing:3px; text-transform:uppercase; background:linear-gradient(90deg, var(--cyan), var(--violet)); -webkit-background-clip:text; -webkit-text-fill-color:transparent; background-clip:text; margin-bottom:1rem;">La Ruta a Trascendencia</div>
            <div style="color:var(--text-secondary); font-size:0.82rem; line-height:1.8;">
                <p>Alejandro Alonso — San Martín, Buenos Aires, 1970</p>
                <p>Premio Internacional UPC de Ciencia Ficción 2002</p>
                <br>
                <p style="opacity:0.5">Sitio oficial gestionado vía WordPress.</p>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) {
                if (navbar) navbar.style.background = 'rgba(3, 3, 11, 0.95)';
            } else {
                if (navbar) navbar.style.background = 'rgba(3, 3, 11, 0.7)';
            }
        });

        // Intersection Observer for reveal animations
        document.addEventListener('DOMContentLoaded', function() {
            const revealEls = document.querySelectorAll('.reveal');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, { threshold: 0.12 });

            revealEls.forEach(el => observer.observe(el));
        });
    </script>
    
    <?php wp_footer(); ?>
</body>
</html>
