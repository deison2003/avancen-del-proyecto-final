<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HospitalXYZ - Sistema de Gestión Hospitalaria</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --hospital-primary: #005f73;
            --hospital-secondary: #0a9396;
            --hospital-accent: #94d2bd;
            --hospital-light: #e9d8a6;
            --hospital-alert: #ee9b00;
            --hospital-dark: #001219;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        .hero-section {
            background: linear-gradient(135deg, var(--hospital-primary) 0%, var(--hospital-secondary) 100%);
            color: white;
            padding: 100px 0;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80') no-repeat center center;
            background-size: cover;
            opacity: 0.15;
            z-index: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .display-3 {
            font-weight: 700;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .lead {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .btn-hospital {
            background-color: var(--hospital-accent);
            color: var(--hospital-primary);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .btn-hospital:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            background-color: var(--hospital-light);
            color: var(--hospital-primary);
        }
        
        .features-section {
            padding: 100px 0;
            background-color: white;
        }
        
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--hospital-primary);
            margin-bottom: 20px;
        }
        
        .stats-section {
            background: linear-gradient(135deg, var(--hospital-secondary) 0%, var(--hospital-primary) 100%);
            color: white;
            padding: 80px 0;
            position: relative;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .testimonials-section {
            padding: 100px 0;
            background-color: #f8fafc;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .testimonial-img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 3px solid var(--hospital-accent);
        }
        
        footer {
            background-color: var(--hospital-dark);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-links a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: all 0.3s ease;
            display: block;
            margin-bottom: 10px;
        }
        
        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .newsletter-form {
            display: flex;
            max-width: 400px;
        }
        
        .newsletter-form input {
            border-radius: 50px 0 0 50px !important;
            border: none;
            padding: 12px 20px;
        }
        
        .newsletter-form button {
            border-radius: 0 50px 50px 0 !important;
            background-color: var(--hospital-accent);
            color: var(--hospital-primary);
            border: none;
            padding: 0 20px;
            font-weight: 600;
        }
        
        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            overflow: hidden;
            z-index: 0;
        }
        
        .floating-element {
            position: absolute;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: float 15s infinite linear;
        }
        
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg); }
            100% { transform: translateY(-1000px) rotate(720deg); }
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
            }
            
            .display-3 {
                font-size: 2.5rem;
            }
        }
        
        /* Spinner para carga de datos */
        .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid rgba(0, 0, 0, 0.1);
            border-radius: 50%;
            border-top-color: var(--hospital-primary);
            animation: spin 1s ease-in-out infinite;
            margin: 20px auto;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="floating-elements">
            <div class="floating-element" style="width: 100px; height: 100px; top: 20%; left: 10%; animation-delay: 0s;"></div>
            <div class="floating-element" style="width: 150px; height: 150px; top: 70%; left: 80%; animation-delay: 3s;"></div>
            <div class="floating-element" style="width: 80px; height: 80px; top: 40%; left: 60%; animation-delay: 6s;"></div>
        </div>
        
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10 hero-content">
                    <h1 class="display-3 animate__animated animate__fadeInDown">Bienvenido a <span class="fw-bold" style="color: var(--hospital-accent)">HospitalXYZ</span></h1>
                    <p class="lead animate__animated animate__fadeIn animate__delay-1s">El sistema de gestión hospitalaria más completo y moderno para una atención médica de excelencia</p>
                    <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeIn animate__delay-2s">
                        <a href="login.php" class="btn btn-hospital btn-lg">
                            <i class="fas fa-sign-in-alt me-2"></i> Iniciar Sesión
                        </a>
                        <a href="#features" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-info-circle me-2"></i> Conoce más
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold mb-3">Nuestras Funcionalidades</h2>
                    <p class="text-muted">Descubre todo lo que nuestro sistema puede hacer para mejorar la gestión de tu centro médico</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card animate__animated animate__fadeInUp">
                        <div class="feature-icon">
                            <i class="fas fa-user-injured"></i>
                        </div>
                        <h3>Gestión de Pacientes</h3>
                        <p class="text-muted">Registro completo de historiales médicos, tratamientos y seguimiento de pacientes.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card animate__animated animate__fadeInUp animate__delay-1s">
                        <div class="feature-icon">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3>Administración Médica</h3>
                        <p class="text-muted">Gestión de especialistas, horarios y asignación de recursos médicos.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card animate__animated animate__fadeInUp animate__delay-2s">
                        <div class="feature-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <h3>Sistema de Citas</h3>
                        <p class="text-muted">Agendamiento inteligente de consultas con recordatorios automáticos.</p>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="feature-card animate__animated animate__fadeInUp animate__delay-3s">
                        <div class="feature-icon">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h3>Control de Habitaciones</h3>
                        <p class="text-muted">Optimización de camas y seguimiento de pacientes hospitalizados.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card animate__animated animate__fadeInUp animate__delay-4s">
                        <div class="feature-icon">
                            <i class="fas fa-pills"></i>
                        </div>
                        <h3>Farmacia y Medicamentos</h3>
                        <p class="text-muted">Inventario completo con control de caducidad y recetas electrónicas.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card animate__animated animate__fadeInUp animate__delay-5s">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Reportes y Analytics</h3>
                        <p class="text-muted">Generación de informes y análisis de datos para toma de decisiones.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 stat-item">
                    <div class="stat-number" id="pacientes-count">0</div>
                    <p>Pacientes atendidos</p>
                </div>
                <div class="col-md-3 col-6 stat-item">
                    <div class="stat-number" id="medicos-count">0</div>
                    <p>Médicos especializados</p>
                </div>
                <div class="col-md-3 col-6 stat-item">
                    <div class="stat-number" id="citas-count">0</div>
                    <p>Citas mensuales</p>
                </div>
                <div class="col-md-3 col-6 stat-item">
                    <div class="stat-number" id="satisfaccion-count">0</div>
                    <p>Satisfacción de usuarios</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold mb-3">Lo que dicen nuestros usuarios</h2>
                    <p class="text-muted">Testimonios reales de profesionales que usan nuestro sistema</p>
                </div>
            </div>
            
            <div class="row" id="testimonials-container">
                <div class="col-12 text-center">
                    <div class="spinner"></div>
                    <p>Cargando testimonios...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-light">
        <div class="container text-center py-5">
            <h2 class="fw-bold mb-4">¿Listo para transformar tu gestión hospitalaria?</h2>
            <p class="lead mb-5">Únete a cientos de instituciones médicas que ya confían en nuestro sistema</p>
            <a href="login.php" class="btn btn-hospital btn-lg px-5 py-3">
                <i class="fas fa-rocket me-2"></i> Comenzar ahora
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="mb-4">
                        <i class="fas fa-hospital me-2" style="color: var(--hospital-accent)"></i> HospitalXYZ
                    </h5>
                    <p>Sistema de gestión hospitalaria diseñado para optimizar procesos y mejorar la atención al paciente.</p>
                    <div class="mt-4">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5 class="mb-4">Enlaces</h5>
                    <div class="footer-links">
                        <a href="#"><i class="fas fa-chevron-right me-2"></i> Inicio</a>
                        <a href="#features"><i class="fas fa-chevron-right me-2"></i> Funcionalidades</a>
                        <a href="#"><i class="fas fa-chevron-right me-2"></i> Precios</a>
                        <a href="#"><i class="fas fa-chevron-right me-2"></i> Contacto</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-4">Soporte</h5>
                    <div class="footer-links">
                        <a href="#"><i class="fas fa-chevron-right me-2"></i> Centro de ayuda</a>
                        <a href="#"><i class="fas fa-chevron-right me-2"></i> Documentación</a>
                        <a href="#"><i class="fas fa-chevron-right me-2"></i> Tutoriales</a>
                        <a href="#"><i class="fas fa-chevron-right me-2"></i> API</a>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <h5 class="mb-4">Newsletter</h5>
                    <p>Suscríbete para recibir actualizaciones y noticias.</p>
                    <form id="newsletterForm" class="newsletter-form mt-3">
                        <input type="email" class="form-control" placeholder="Tu email" required>
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                    <div id="newsletterMessage" class="mt-2 small"></div>
                </div>
            </div>
            <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1)">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small mb-0">&copy; 2023 HospitalXYZ. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small mb-0">
                        <a href="#" class="text-white-50">Términos</a> | 
                        <a href="#" class="text-white-50">Privacidad</a> | 
                        <a href="#" class="text-white-50">Cookies</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        // API Endpoints
        const API_URLS = {
            pacientes: 'https://jsonplaceholder.typicode.com/users',
            medicos: 'https://jsonplaceholder.typicode.com/users',
            citas: 'https://jsonplaceholder.typicode.com/todos',
            testimonios: 'https://randomuser.me/api/?results=3',
            newsletter: 'https://api.example.com/newsletter' // Reemplazar con tu endpoint real
        };
        
        // Counter Animation
        function animateCounters() {
            const counters = document.querySelectorAll('.stat-number');
            const speed = 200;
            
            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'));
                const count = parseInt(counter.innerText);
                const increment = target / speed;
                
                if(count < target) {
                    counter.innerText = Math.floor(count + increment);
                    setTimeout(animateCounters, 1);
                } else {
                    counter.innerText = target;
                }
            });
        }
        
        // Fetch stats from APIs
        async function fetchStats() {
            try {
                // Obtener datos de pacientes (simulados desde JSONPlaceholder)
                const pacientesResponse = await axios.get(API_URLS.pacientes);
                const pacientesCount = pacientesResponse.data.length * 1250; // Multiplicamos para simular números reales
                
                // Obtener datos de médicos (simulados desde JSONPlaceholder)
                const medicosResponse = await axios.get(API_URLS.medicos);
                const medicosCount = medicosResponse.data.length * 80;
                
                // Obtener datos de citas (simulados desde JSONPlaceholder)
                const citasResponse = await axios.get(API_URLS.citas);
                const citasCount = citasResponse.data.length * 15;
                
                // Satisfacción es un valor fijo para el ejemplo
                const satisfaccionCount = 98;
                
                // Actualizar los elementos del DOM
                document.getElementById('pacientes-count').setAttribute('data-target', pacientesCount);
                document.getElementById('medicos-count').setAttribute('data-target', medicosCount);
                document.getElementById('citas-count').setAttribute('data-target', citasCount);
                document.getElementById('satisfaccion-count').setAttribute('data-target', satisfaccionCount);
                
                // Iniciar animación de contadores
                animateCounters();
            } catch (error) {
                console.error('Error al cargar estadísticas:', error);
                // Mostrar valores por defecto en caso de error
                document.getElementById('pacientes-count').textContent = '10,000+';
                document.getElementById('medicos-count').textContent = '250+';
                document.getElementById('citas-count').textContent = '2,500+';
                document.getElementById('satisfaccion-count').textContent = '98%';
            }
        }
        
        // Fetch testimonials from API
        async function fetchTestimonials() {
            const container = document.getElementById('testimonials-container');
            
            try {
                // Obtener testimonios simulados (usamos randomuser.me para fotos y nombres)
                const response = await axios.get(API_URLS.testimonios);
                const testimonials = response.data.results;
                
                // Textos de testimonios predefinidos
                const testimonialTexts = [
                    "El sistema ha transformado completamente nuestra forma de trabajar. Ahora podemos acceder a historiales médicos en segundos.",
                    "La gestión de citas es increíblemente eficiente. Mis pacientes están más satisfechos y mi consulta más organizada.",
                    "Los reportes automatizados nos han ahorrado cientos de horas de trabajo manual. Una herramienta imprescindible."
                ];
                
                // Limpiar el contenedor
                container.innerHTML = '';
                
                // Crear tarjetas de testimonios
                testimonials.forEach((user, index) => {
                    const col = document.createElement('div');
                    col.className = 'col-md-4';
                    col.innerHTML = `
                        <div class="testimonial-card animate__animated animate__fadeIn">
                            <img src="${user.picture.large}" alt="${user.name.first}" class="testimonial-img">
                            <p class="mb-4">"${testimonialTexts[index] || testimonialTexts[0]}"</p>
                            <h5>${user.name.title} ${user.name.first} ${user.name.last}</h5>
                            <small class="text-muted">${['Cardiólogo', 'Pediatra', 'Administrador'][index] || 'Médico'}</small>
                        </div>
                    `;
                    container.appendChild(col);
                });
            } catch (error) {
                console.error('Error al cargar testimonios:', error);
                container.innerHTML = `
                    <div class="col-12 text-center">
                        <p class="text-danger">No se pudieron cargar los testimonios. Por favor intenta más tarde.</p>
                    </div>
                `;
            }
        }
        
        // Handle newsletter form submission
        async function handleNewsletterSubmit(e) {
            e.preventDefault();
            const form = e.target;
            const emailInput = form.querySelector('input');
            const messageDiv = document.getElementById('newsletterMessage');
            
            try {
                // Mostrar estado de carga
                messageDiv.textContent = 'Enviando...';
                messageDiv.style.color = 'inherit';
                
                // En una implementación real, aquí harías la llamada a tu API:
                // const response = await axios.post(API_URLS.newsletter, { email: emailInput.value });
                
                // Simulamos una respuesta exitosa
                setTimeout(() => {
                    messageDiv.textContent = '¡Gracias por suscribirte! Te enviaremos las últimas novedades.';
                    messageDiv.style.color = 'var(--hospital-accent)';
                    emailInput.value = '';
                    
                    // Resetear mensaje después de 5 segundos
                    setTimeout(() => {
                        messageDiv.textContent = '';
                    }, 5000);
                }, 1000);
            } catch (error) {
                messageDiv.textContent = 'Error al enviar. Por favor intenta nuevamente.';
                messageDiv.style.color = 'var(--hospital-danger)';
            }
        }
        
        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Cargar datos
            fetchStats();
            fetchTestimonials();
            
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
            
            // Newsletter form submission
            const newsletterForm = document.getElementById('newsletterForm');
            if(newsletterForm) {
                newsletterForm.addEventListener('submit', handleNewsletterSubmit);
            }
        });
    </script>
</body>
</html>