<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="abogadas chile, derecho familia, derecho laboral, asesoría legal, abogados">
    <meta name="description" content="Máximas Legales - Bufete de abogadas especializado en Derecho de Familia, Laboral y Civil en Chile. Consulta por asesoria personalizada.">
    <meta property="og:title" content="Máximas Legales | Asesoría Legal Especializada">
    <meta property="og:image" content="https://maximaslegales.cl/img/logo_ancho.png">
    <link rel="icon" href="img/logo.png" type="image/png">
    <title>Máximas Legales | Asesoría Legal Especializada</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* ========================================
           ESTILOS GLOBALES Y RESET
        ======================================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Lato', sans-serif; /* Mucho más limpia */
            /* ... resto de tu css ... */
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif; /* Elegancia pura */
        }
    .whatsapp-float {
        position: fixed;
        bottom: 30px;
        right: 30px;
        background-color: #25D366;
        color: white;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        z-index: 1000;
        transition: transform 0.3s ease;
        text-decoration: none;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
    }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f8f8;
        }

        /* Contenedor general para centrar contenido */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ========================================
           SECCIÓN HEADER/HERO
        ======================================== */
        .hero {
            background: linear-gradient(135deg, rgba(44, 62, 80, 0.9) 0%, rgba(74, 95, 127, 0.85) 100%), url('https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=2000&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
            color: #ffffff;
            text-align: center;
            padding: 120px 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position:relative;
        }

        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0px;
            letter-spacing: 1px;
        }
        .hero h2 {
            font-size: 2.3rem; /* Tamaño intermedio */
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 40px;
            max-width: 700px;
            opacity: 0.95;
        }
        .hero-logo {
            width: 180px;
            max-width: 90%;
            height: auto;
            margin-bottom: 30px;
            opacity: 0.95;
            filter: brightness(0) invert(1); /* Convierte el logo a blanco */
            right: 200px;
        }

       /* Logo en esquina superior derecha */
            .hero-logo-corner {
            position: absolute;
            top: 30px;
            right: 40px;
            width: 180px; /* Ajusta el tamaño según prefieras */
            height: auto;
            opacity: 0.95;
            filter: brightness(0) invert(1); /* Convierte a blanco */
            z-index: 10;
        }

        /* Responsive para móviles */
        @media (max-width: 600px) {
            .hero-logo-corner {
                width: 70px; /* Más pequeño en móviles */
                top: 20px;
                right: 20px;
            }
        }

        /* Botón principal de llamada a la acción */
        .btn-primary {
            display: inline-block;
            padding: 15px 40px;
            background-color: #ffffff;
            color: #2c3e50;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 5px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .btn-primary:hover {
            background-color: transparent;
            color: #ffffff;
            border-color: #ffffff;
        }

        /* ========================================
           SECCIÓN SERVICIOS
        ======================================== */
        .servicios {
            padding: 80px 20px;
            background-color: #ffffff;
        }

        .servicios h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            color: #2c3e50;
        }

        /* Contenedor de los bloques de servicios */
        .servicios-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        /* Cada tarjeta de servicio */
        .servicio-item {
            text-align: center;
            padding: 30px;
            border-radius: 8px;
            background-color: #f8f8f8;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .servicio-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .servicio-item .icono {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
            color: #c0a062; /* Color DORADO/BEIGE. Rompe el aburrimiento del azul */
        }

        .servicio-item h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #2c3e50;
        }

        .servicio-item p {
            font-size: 1rem;
            color: #666;
            line-height: 1.7;
        }

        /* ========================================
           SECCIÓN EL EQUIPO
        ======================================== */
        .equipo {
            padding: 80px 20px;
            background-color: #f0f0f0;
        }

        .equipo h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            color: #2c3e50;
        }

        /* Grid de 4 columnas para las abogadas */
        .equipo-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        /* Tarjeta individual de abogada */
        .abogada-card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px 20px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .abogada-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        /* Imagen de placeholder circular */
        .abogada-card img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            background-color: #ddd;
        }

        .abogada-card h3 {
            font-size: 1.3rem;
            margin-bottom: 8px;
            color: #2c3e50;
        }

        .abogada-card p {
            font-size: 0.95rem;
            color: #777;
            font-style: italic;
        }

        /* ========================================
           SECCIÓN CONTACTO
        ======================================== */
        .contacto {
            padding: 80px 20px;
            background-color: #ffffff;
        }

        .contacto h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            color: #2c3e50;
        }

        /* Contenedor de información de contacto */
        .contacto-info {
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
        }

        .contacto-item {
            margin-bottom: 30px;
        }

        .contacto-item strong {
            display: block;
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 8px;
        }

        .contacto-item p,
        .contacto-item a {
            font-size: 1.1rem;
            color: #555;
            text-decoration: none;
        }

        .contacto-item a:hover {
            color: #2c3e50;
            text-decoration: underline;
        }

        /* Botón de WhatsApp */
        .whatsapp-btn {
            display: inline-block;
            margin: 30px 0;
            padding: 12px 30px;
            background-color: #25D366;
            color: #ffffff;
            text-decoration: none;
            font-size: 1.1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .whatsapp-btn:hover {
            background-color: #1ebe57;
        }

        /* Iconos de redes sociales */
        .redes-sociales {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }

        .redes-sociales a {
            font-size: 2rem;
            color: #555;
            transition: color 0.3s ease;
            text-decoration: none;
        }

        .redes-sociales a:hover {
            color: #2c3e50;
        }

        /* ========================================
           FOOTER
        ======================================== */
        footer {
            background-color: #2c3e50;
            color: #ffffff;
            text-align: center;
            padding: 30px 20px;
        }

        footer p {
            font-size: 0.95rem;
            opacity: 0.9;
        }

        /* ========================================
           MEDIA QUERIES - RESPONSIVE
        ======================================== */
        
        /* Tablets y pantallas medianas */
        @media (max-width: 992px) {
            .hero h1 {
                font-size: 2.5rem;
            }

            .servicios-grid {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .equipo-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .hero h2 {
                font-size: 2.3rem; /* Tamaño intermedio */
                font-weight: 700;
                margin-bottom: 20px;
                letter-spacing: 1px;
            }
        }

        /* Móviles */
        @media (max-width: 600px) {
            .hero {
                padding: 80px 20px;
                min-height: 80vh;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .servicios h2,
            .equipo h2,
            .contacto h2 {
                font-size: 2rem;
            }

            /* Cambio a una sola columna en móviles */
            .equipo-grid {
                grid-template-columns: 1fr;
            }

            .redes-sociales {
                gap: 15px;
            }

            .redes-sociales a {
                font-size: 1.8rem;
            }
        }
        /* carrusel de noticias */
            .carrusel-wrapper {
            overflow-x: auto; /* Permite scroll horizontal */
            scroll-behavior: smooth; /* Movimiento suave */
            -ms-overflow-style: none;  /* Ocultar barra scroll IE/Edge */
            scrollbar-width: none;  /* Ocultar barra scroll Firefox */
        }

        /* Ocultar barra scroll Chrome/Safari */
        .carrusel-wrapper::-webkit-scrollbar {
            display: none;
        }

        .carrusel-track {
            display: flex;
            gap: 20px;
            padding: 10px 5px; /* Espacio para la sombra */
        }

        .noticia-card {
            min-width: 300px; /* Ancho fijo de cada tarjeta */
            max-width: 300px;
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            border-left: 4px solid #2c3e50;
            flex-shrink: 0; /* Evita que se aplasten */
        }

        .noticia-card h3 {
            color: #2c3e50;
            margin: 10px 0;
            font-size: 1.2rem;
        }

        .noticia-card .fecha {
            color: #888;
            font-size: 0.85rem;
            font-weight: bold;
        }

        .noticia-card a {
            display: inline-block;
            margin-top: 15px;
            text-decoration: none;
            color: #2c3e50;
            font-weight: bold;
        }

        /* Botones de navegación (Flechas) */
        .nav-btn {
            position: absolute;
            top: 55%; /* Centrado verticalmente */
            transform: translateY(-50%);
            background-color: #2c3e50;
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            font-size: 1.2rem;
            cursor: pointer;
            z-index: 10;
            box-shadow: 0 2px 5px rgba(0,0,0,0.3);
            transition: background 0.3s;
        }

        .nav-btn:hover { background-color: #1a252f; }
        .prev-btn { left: -20px; } /* Posición flecha izq */
        .next-btn { right: -20px; } /* Posición flecha der */

        /* Ajuste para móviles: ocultar flechas y dejar que deslicen con el dedo */
        @media (max-width: 768px) {
            .nav-btn { display: none; }
            .noticia-card { min-width: 260px; }
        }
        /* Estilos del Modal */
        .modal-overlay {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.7); /* Fondo oscuro transparente */
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            backdrop-filter: blur(5px); /* Efecto borroso pro */
        }

        .modal-content {
            background: white;
            padding: 30px;
            width: 90%;
            max-width: 600px;
            border-radius: 10px;
            position: relative;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            animation: aparecer 0.3s ease;
        }

        .close-btn {
            position: absolute;
            top: 15px; right: 20px;
            font-size: 2rem;
            cursor: pointer;
            color: #888;
        }

        .close-btn:hover { color: red; }

        @keyframes aparecer {
            from { transform: translateY(20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<a href="https://wa.me/56982344163?text=Hola,%20necesito%20asesoría%20legal" class="whatsapp-float" target="_blank" aria-label="WhatsApp">
    💬
</a>
<body>

    <!-- ========================================
         SECCIÓN 1: HEADER/HERO
    ======================================== -->
    <header class="hero">
        <div class="container">
            <img src="img/logo.png" alt="Máximas Legales Logo" class="hero-logo-corner">
            <h1>Máximas Legales</h1>
            <h2>Experiencia Legal a tu Servicio</h2>
            <p>Privilegiamos la protección de sus derechos mediante soluciones rápidas y efectivas. Ofrecemos un trato justo con acompañamiento profesional permanente en cada etapa legal.</p>
            <a href="#contacto" class="btn-primary">Solicitar Consulta</a>
        </div>
    </header>

    <!-- ========================================
         SECCIÓN 2: SERVICIOS
    ======================================== -->
    <section class="servicios" id="servicios">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            
            <div class="servicios-grid">
                <!-- Servicio 1: Derecho de Familia -->
                <div class="servicio-item">
                    <i class="fa-solid fa-scale-balanced icono"></i>
                    <h3>Derecho de Familia</h3>
                    <p>Asesoría integral en divorcios, custodia de menores, pensiones alimenticias y adopciones. Protegemos tus derechos familiares con empatía y profesionalismo.</p>
                </div>

                <!-- Servicio 2: Derecho Laboral -->
                <div class="servicio-item">
                    <i class="fa-solid fa-briefcase icono"></i>
                    <h3>Derecho Laboral</h3>
                    <p>Defensa en despidos injustificados, acoso laboral, negociación de contratos y reclamaciones de prestaciones. Tu trabajo merece protección legal.</p>
                </div>

                <!-- Servicio 3: Derecho Civil -->
                <div class="servicio-item">
                    <i class="fa-solid fa-file-contract icono"></i>
                    <h3>Derecho Civil</h3>
                    <p>Contratos, herencias, sucesiones, propiedad inmobiliaria y conflictos patrimoniales. Soluciones efectivas para tus asuntos civiles.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECCIÓN 3: EL EQUIPO
    ======================================== -->
    <section class="equipo" id="equipo">
        <div class="container">
            <h2>Nuestro Equipo</h2>
            
            <div class="equipo-grid">
                <!-- Abogada 1 -->
                <div class="abogada-card">
                    <img src="https://www.maximaslegales.cl/img/frany_lagos.png" alt="Foto de Frany Lagos">
                    <h3>Frany Lagos Mac-Pherson</h3>
                  <div class="especialidad-bloque" style="margin-bottom: 15px;">
                        <p style="color: #2c3e50; font-weight: 800; font-size: 1.1rem; margin-bottom: 5px;">
            FAMILIA Y PENAL
                        </p>
                     <p style="color: #666; font-size: 0.9rem; line-height: 1.4;">
            Divorcios • Alimentos • VIF <br>
            Cuidado Personal • Delitos • Querellas
                        </p>
                    </div>
                    <a target="_blank" href="https://wa.me/56982344163" title="Whatsapp" aria-label="Whatsapp">📞</a>
                    <a href="mailto:f.lagos@maximaslegales.cl" title="Email" aria-label="Email">📧</a>
                </div>

                <!-- Abogada 2 -->
                <div class="abogada-card">
                    <img src="https://www.maximaslegales.cl/img/Yaresla_guerrero.jpeg" alt="Foto de Yaresla Guerrero">
                    <h3>Yaresla Guerrero</h3>
                   <div class="especialidad-bloque" style="margin-bottom: 15px;">
                        <p style="color: #2c3e50; font-weight: 800; font-size: 1.1rem; margin-bottom: 5px;">
            DERECHO LABORAL
                         </p>
                        <p style="color: #666; font-size: 0.9rem; line-height: 1.4;">
            Despidos Injustificados • Tutelas <br>
            Accidentes del Trabajo • Autodespidos
                    </p>
                     </div>
                    <a target="_blank" href="https://wa.me/56979183334" title="Whatsapp" aria-label="Whatsapp">📞</a>
                    <a href="mailto:y.guerrero@maximaslegales.cl" title="Email" aria-label="Email">📧</a>
                </div>

                <!-- Abogada 3 -->
                <div class="abogada-card">
                    <img src="https://www.maximaslegales.cl/img/ximena_giacaman.jpeg" alt="Foto de Paulina Giacaman">
                    <h3>Paulina Giacaman </h3>
                    <div class="especialidad-bloque" style="margin-bottom: 15px;">
                    <p style="color: #2c3e50; font-weight: 800; font-size: 1.1rem; margin-bottom: 5px;">
            DERECHO CIVIL
                        </p>
                        <p style="color: #666; font-size: 0.9rem; line-height: 1.4;">
            Contratos • Herencias • Inmobiliario <br>
            Posesiones Efectivas • Arrendamientos
                        </p>
                    </div>
                   
                    <a target="_blank" href="https://wa.me/56990824592" title="Whatsapp" aria-label="Whatsapp">📞</a>
                    <a href="mailto:p.giacaman@maximaslegales.cl" title="Email" aria-label="Email">📧</a>
                </div>
                </div>

                
    </section>
    <section id="noticias" style="padding: 60px 0; background-color: #f4f6f8; position: relative;">
        <div class="container" style="max-width: 1200px; margin: 0 auto; position: relative;">
            
            <h2 style="text-align: center; color: #2c3e50; margin-bottom: 30px; font-size: 2.2rem;">
                Actualidad Legal
            </h2>

            <button class="nav-btn prev-btn" onclick="moverCarrusel(-1)">&#10094;</button>

            <div class="carrusel-wrapper">
                
                    
                    <div class="carrusel-track" id="track">
    
                        <?php
                        include 'conexion.php';

                        // Aquí traemos las noticias. 
                        // "LIMIT 15" significa que traerá las últimas 15.
                        // Si quieres INFINITAS, borra "LIMIT 15".
                        $sql = "SELECT * FROM noticias ORDER BY fecha DESC";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                // Preparamos los datos para que no rompan el HTML
                                $titulo = htmlspecialchars($row['titulo']);
                                $fecha = date("d/m/Y", strtotime($row['fecha']));
                                
                                // Texto corto para la tarjeta (primeros 100 caracteres)
                                $texto_corto = substr(strip_tags($row['cuerpo']), 0, 100) . "...";
                                
                                // Texto completo para el modal (oculto en un atributo data o variable JS)
                                // Truco: Usamos json_encode para pasar el texto largo a la función JS sin errores de comillas
                                $cuerpo_json = json_encode(nl2br(htmlspecialchars($row['cuerpo'])));
                                $titulo_json = json_encode($titulo);
                                $fecha_json = json_encode($fecha);
                                ?>

                                <article class="noticia-card">
                                    <span class="fecha">📅 <?php echo $fecha; ?></span>
                                    <h3><?php echo $titulo; ?></h3>
                                    <p><?php echo $texto_corto; ?></p>
                                    
                                    <button onclick='abrirModal(<?php echo $titulo_json; ?>, <?php echo $fecha_json; ?>, <?php echo $cuerpo_json; ?>)' class="btn-leer-mas">
                                        Leer más →
                                    </button>
                                </article>

                                <?php
                            }
                        } else {
                            // Esto se muestra si NO hay noticias en la base de datos aún
                            echo "<p style='padding: 20px;'>Aún no hay noticias publicadas.</p>";
                        }
                        ?>

                    </div>

                </div>
            

            <button class="nav-btn next-btn" onclick="moverCarrusel(1)">&#10095;</button>

        </div>
    </section>
    <div id="modalNoticia" class="modal-overlay" style="display: none;">
        <div class="modal-content">
            <span class="close-btn" onclick="cerrarModal()">&times;</span>
            <h2 id="modalTitulo">Título de la Noticia</h2>
            <p class="modal-fecha" id="modalFecha">📅 Fecha</p>
            <div class="modal-texto" id="modalCuerpo">
                <p>Aquí aparecerá el desarrollo completo de la noticia cuando esté programada. 
                Las abogadas podrán escribir todo el texto que quieran, agregar negritas, listas, etc.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
    </div>

    <!-- ========================================
         SECCIÓN 4: CONTACTO
    ======================================== -->
    <section class="contacto" id="contacto">
        <div class="container">
            <h2>Contáctanos</h2>
            
            <div class="contacto-info">
                <!-- Teléfono -->
                <div class="contacto-item">
                    <strong>📞 Teléfono:</strong>
                    <p><a href="tel:+56982344163">+56 9 8234 4163</a></p>
                </div>

                <!-- Email -->
                <div class="contacto-item">
                    <strong>📧 Email:</strong>
                    <p><a href="mailto:contacto@maximaslegales.cl">contacto@maximaslegales.cl</a></p>
                </div>


                <!-- Botón de WhatsApp -->
                <a href="https://wa.me/56982344163?text=Hola,%20necesito%20asesoría%20legal" class="whatsapp-btn" target="_blank">
                    💬 Escríbenos por WhatsApp
                </a>

               
            </div>
        </div>
    </section>

    <!-- ========================================
         FOOTER
    ======================================== -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Máximas Legales. Todos los derechos reservados.</p>
        </div>
    </footer>
    <script>
        function moverCarrusel(direccion) {
            const wrapper = document.querySelector('.carrusel-wrapper');
            const cardWidth = 320; // Ancho de la tarjeta + el gap (300 + 20)
            
            // Si direccion es 1, mueve a la derecha. Si es -1, a la izquierda.
            wrapper.scrollBy({
                left: direccion * cardWidth, 
                behavior: 'smooth'
            });
        }
        function abrirModal(titulo, fecha, cuerpo) {
        document.getElementById('modalNoticia').style.display = 'flex';
        document.getElementById('modalTitulo').innerHTML = titulo;
        document.getElementById('modalFecha').innerHTML = '📅 ' + fecha;
        // Aquí inyectamos el texto largo que viene de la base de datos
        document.querySelector('.modal-texto').innerHTML = cuerpo;
    }

    function cerrarModal() {
        document.getElementById('modalNoticia').style.display = 'none';
    }

    // Cerrar si hacen clic fuera del recuadro blanco
    window.onclick = function(event) {
        const modal = document.getElementById('modalNoticia');
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>	
</body>
</html>
