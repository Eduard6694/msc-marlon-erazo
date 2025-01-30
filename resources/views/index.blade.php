<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Inicio - Msc. Marlon Erazo</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">msc.marlonerazo@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+593 96 264 2699</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-center">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Msc. Marlon Erazo</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Inicio<br></a></li>
            <li><a href="#about">Acerca de</a></li>
            <li><a href="#services">Servicios</a></li>
            <li><a href="#faq">Preguntas Frecuentes</a></li>
            <li><a href="#contact">Contacto</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn d-none d-sm-block" href="{{ route('welcome') }}">Agendar una cita</a>


      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <img src="assets/img/hero-bg.jpg" alt="Imagen de fondo" data-aos="fade-in">

      <div class="container position-relative">

        <div class="welcome position-relative" data-aos="fade-down" data-aos-delay="100">
          <h2>BIENVENIDO A PSICOPEDAGOGÍA</h2>
          <p>Somos un equipo comprometido con el bienestar y el desarrollo personal a través de sesiones personalizadas.</p>
        </div><!-- End Welcome -->

        <div class="content row gy-4">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="why-box" data-aos="zoom-out" data-aos-delay="200">
              <h3>¿Por qué elegir nuestro servicio?</h3>
              <p>
                Nos enfocamos en ofrecer un acompañamiento integral, ayudando a superar desafíos de aprendizaje y desarrollo.
                Contamos con un equipo de profesionales con experiencia y un enfoque personalizado adaptado a cada caso.
              </p>
              <div class="text-center">
                <a href="#about" class="more-btn"><span>Conoce más</span> <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div><!-- End Why Box -->

          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="d-flex flex-column justify-content-center">
              <div class="row gy-4">

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="300">
                    <i class="bi bi-clipboard-data"></i>
                    <h4>Evaluaciones Personalizadas</h4>
                    <p>Realizamos diagnósticos detallados para comprender las necesidades específicas de cada persona.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="400">
                    <i class="bi bi-gem"></i>
                    <h4>Planes de Intervención</h4>
                    <p>Diseñamos estrategias personalizadas para fomentar el aprendizaje y el desarrollo emocional.</p>
                  </div>
                </div><!-- End Icon Box -->

                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box" data-aos="zoom-out" data-aos-delay="500">
                    <i class="bi bi-inboxes"></i>
                    <h4>Acompañamiento Continuo</h4>
                    <p>Ofrecemos un seguimiento constante para garantizar resultados positivos y duraderos.</p>
                  </div>
                </div><!-- End Icon Box -->

              </div>
            </div>
          </div>
        </div><!-- End  Content -->

      </div>

    </section><!-- /Hero Section -->


    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4 gx-5">

          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/about.jpg" class="img-fluid" alt="Sobre nosotros">
            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
          </div>

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <h3>Sobre Nosotros</h3>
            <p>
              Somos especialistas en psicopedagogía comprometidos con el desarrollo integral de nuestros pacientes. Nuestro objetivo es proporcionar herramientas y estrategias personalizadas para superar dificultades en el aprendizaje y fomentar el bienestar emocional.
            </p>
            <ul>
              <li>
                <i class="fa-solid fa-vial-circle-check"></i>
                <div>
                  <h5>Evaluaciones Diagnósticas Profesionales</h5>
                  <p>Realizamos análisis detallados para identificar necesidades específicas de aprendizaje y desarrollo.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-pump-medical"></i>
                <div>
                  <h5>Intervenciones Personalizadas</h5>
                  <p>Diseñamos planes de intervención adaptados a cada paciente para lograr resultados efectivos y duraderos.</p>
                </div>
              </li>
              <li>
                <i class="fa-solid fa-heart-circle-xmark"></i>
                <div>
                  <h5>Acompañamiento Emocional</h5>
                  <p>Ofrecemos apoyo emocional para ayudar a nuestros pacientes a enfrentar desafíos con confianza y resiliencia.</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->


    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-solid fa-user-doctor"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>
              <p>Doctors</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fa-regular fa-hospital"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>Departments</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-flask"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>Research Labs</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="fas fa-award"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servicios</h2>
        <p>Descubre nuestros servicios especializados en apoyo psicopedagógico y educativo.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-child"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Detección e intervención en NEE</h3>
              </a>
              <p>Atención especializada en necesidades educativas específicas asociadas o no a discapacidades, ayudando a potenciar el aprendizaje.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-clipboard-check"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Evaluaciones psicopedagógicas</h3>
              </a>
              <p>Realización de informes psicopedagógicos completos para diagnosticar y brindar soluciones personalizadas.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-book-open"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Adaptaciones curriculares</h3>
              </a>
              <p>Diseño e implementación de adaptaciones curriculares significativas y no significativas, con seguimiento metodológico.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-brain"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Evaluaciones psicométricas</h3>
              </a>
              <p>Realizamos evaluaciones precisas para analizar habilidades cognitivas, emocionales y de aprendizaje.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Asesoría a padres y docentes</h3>
              </a>
              <p>Ofrecemos orientación para padres, docentes y autoridades en la implementación de estrategias educativas eficaces.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-pencil-alt"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Planes de intervención</h3>
              </a>
              <p>Elaboración y seguimiento de planes educativos personalizados para garantizar el desarrollo integral de los estudiantes.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Servicios Especializados -->
    <section id="departments" class="departments section">

      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servicios Especializados</h2>
        <p>Explora las áreas clave de atención psicopedagógica diseñadas para potenciar el aprendizaje y el desarrollo integral.</p>
      </div><!-- Fin del Título -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#departments-tab-1">Detección de NEE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-2">Evaluaciones</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-3">Adaptaciones Curriculares</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-4">Asesorías Educativas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#departments-tab-5">Talleres y Protocolos</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="departments-tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Detección e Intervención en NEE</h3>
                    <p class="fst-italic">Identificación y atención de Necesidades Educativas Específicas (NEE) asociadas o no a discapacidades.</p>
                    <p>Se diseñan estrategias de intervención personalizadas para garantizar un aprendizaje inclusivo y adaptado a las necesidades particulares de cada estudiante.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-1.jpg" alt="Detección de NEE" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Evaluaciones Psicopedagógicas y Psicométricas</h3>
                    <p class="fst-italic">Análisis detallado del desarrollo académico, cognitivo y emocional de estudiantes.</p>
                    <p>Se realizan informes completos, incluyendo evaluaciones psicométricas, para detectar fortalezas, áreas de mejora y diseñar planes de intervención efectivos.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-2.jpg" alt="Evaluaciones Psicopedagógicas" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Adaptaciones Curriculares</h3>
                    <p class="fst-italic">Diseño e implementación de adaptaciones curriculares significativas y no significativas.</p>
                    <p>Seguimiento y mejora de metodologías adaptadas para garantizar la inclusión y el progreso académico de estudiantes con diversas necesidades.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-3.jpg" alt="Adaptaciones Curriculares" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Asesoría a Padres y Docentes</h3>
                    <p class="fst-italic">Orientación y apoyo para fomentar estrategias educativas efectivas en casa y en el aula.</p>
                    <p>Asesorías dirigidas a padres, docentes y autoridades educativas para implementar adaptaciones curriculares y apoyar el aprendizaje de los estudiantes.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-4.jpg" alt="Asesoría Educativa" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="departments-tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Talleres y Protocolos Educativos</h3>
                    <p class="fst-italic">Talleres prácticos y diseño de protocolos para mejorar los procesos de enseñanza-aprendizaje.</p>
                    <p>Incluye talleres de especialidades educativas, diseño de rutas pedagógicas y elaboración de planes de trabajo enfocados en la atención a la diversidad.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/departments-5.jpg" alt="Talleres Educativos" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- Fin de Servicios Especializados -->

    <!-- Sección de Preguntas Frecuentes -->
    <section id="faq" class="faq section light-background">

      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Preguntas Frecuentes</h2>
        <p>Resolvemos tus dudas más comunes acerca de nuestros servicios psicopedagógicos.</p>
      </div><!-- Fin del Título -->

      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

            <div class="faq-container">

              <!-- Pregunta 1 -->
              <div class="faq-item faq-active">
                <h3>¿Dónde se realizan los servicios?</h3>
                <div class="faq-content">
                  <p>Los servicios se pueden realizar en la oficina del especialista o, si lo prefieres, a domicilio para mayor comodidad. Consulta la disponibilidad según tu ubicación.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Fin Pregunta 1 -->

              <!-- Pregunta 2 -->
              <div class="faq-item">
                <h3>¿Qué incluye una evaluación psicopedagógica?</h3>
                <div class="faq-content">
                  <p>La evaluación psicopedagógica incluye el análisis del desarrollo académico, emocional y cognitivo del estudiante, además de un informe detallado con recomendaciones específicas.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Fin Pregunta 2 -->

              <!-- Pregunta 3 -->
              <div class="faq-item">
                <h3>¿Se pueden solicitar adaptaciones curriculares personalizadas?</h3>
                <div class="faq-content">
                  <p>Sí, trabajamos en el diseño de adaptaciones curriculares significativas y no significativas, ajustadas a las necesidades individuales de cada estudiante.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Fin Pregunta 3 -->

              <!-- Pregunta 4 -->
              <div class="faq-item">
                <h3>¿Cuánto tiempo dura una sesión?</h3>
                <div class="faq-content">
                  <p>La duración de una sesión varía según el servicio, pero en general, una sesión promedio dura entre 45 minutos y 1 hora.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Fin Pregunta 4 -->

              <!-- Pregunta 5 -->
              <div class="faq-item">
                <h3>¿Qué requisitos se necesitan para una evaluación?</h3>
                <div class="faq-content">
                  <p>Para una evaluación, se solicita información básica sobre el estudiante, como historial académico, reportes previos y, en algunos casos, entrevistas con los padres o docentes.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Fin Pregunta 5 -->

              <!-- Pregunta 6 -->
              <div class="faq-item">
                <h3>¿Se ofrecen talleres grupales?</h3>
                <div class="faq-content">
                  <p>Sí, ofrecemos talleres de especialidades educativas y protocolos dirigidos a grupos de estudiantes, padres y docentes para mejorar el aprendizaje y las estrategias de enseñanza.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Fin Pregunta 6 -->

              <!-- Pregunta 7 -->
              <div class="faq-item">
                <h3>¿Cuáles son las formas de pago aceptadas?</h3>
                <div class="faq-content">
                  <p>Aceptamos transferencias bancarias, pagos en efectivo y otros métodos según acuerdo previo. Contáctanos para más información sobre opciones de pago.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Fin Pregunta 7 -->

              <!-- Pregunta 8 -->
              <div class="faq-item">
                <h3>¿Cómo agendo una cita?</h3>
                <div class="faq-content">
                  <p>Puedes agendar una cita a través de nuestro formulario en línea, llamando al teléfono indicado o enviándonos un correo electrónico.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- Fin Pregunta 8 -->

            </div>

          </div><!-- Fin Columna de Preguntas Frecuentes -->

        </div>

      </div>

    </section><!-- Fin de la Sección de Preguntas Frecuentes -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <div class="container">

        <div class="row align-items-center">

          <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
            <h3>Testimonials</h3>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
            </p>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contacto</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d997.4534137748418!2d-78.4734139351168!3d-0.08761899829675644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sec!4v1738196631077!5m2!1ses-419!2sec" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Ubicación</h3>
                <p>Carcelen, Francisco Carrasco y Alonso Lopez</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Teléfono</h3>
                <p>+593 96 264 2699</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Correo</h3>
                <p>msc.marlonerazo@gmail.com</p>
              </div>
            </div><!-- End Info Item -->
          </div>

          <div class="col-lg-8">
            <!-- Mostrar mensajes de éxito o error -->
            @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
              {{ session('error') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <!-- Formulario de contacto -->
            <form action="{{ route('contact.send') }}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              @csrf
              <div class="row gy-4">

                <!-- Nombre -->
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Tu Nombre" required>
                </div>

                <!-- Email -->
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Tu Correo Electrónico" required>
                </div>

                <!-- Asunto -->
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Asunto" required>
                </div>

                <!-- Mensaje -->
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Escribe tu mensaje aquí..." required></textarea>
                </div>

                <!-- Botón de enviar -->
                <div class="col-md-12 text-center">
                  <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                    Enviar Mensaje
                  </button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->



        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Msc Marlon Erazo</span>
          </a>
          <div class="footer-contact pt-3">
            <p>CARCELEN</p>
            <p>Francisco Carrasco y Alonso Lopez</p>
            <p class="mt-3"><strong>Teléfono:</strong> <span>+593 96 264 2699</span></p>
            <p><strong>Correo:</strong> <span>msc.marlonerazo@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <!-- Enlaces útiles -->
        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Enlaces Rápidos</h4>
          <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>

        <!-- Servicios ofrecidos -->
        <div class="col-lg-4 col-md-6 footer-links">
          <h4>Nuestros Servicios</h4>
          <ul>
            <li><a href="#">Evaluaciones Psicopedagógicas</a></li>
            <li><a href="#">Orientación Vocacional</a></li>
            <li><a href="#">Intervención Educativa</a></li>
            <li><a href="#">Asesoría a Padres y Docentes</a></li>
          </ul>
        </div>


      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Alexander Ponce</strong> <span>Todos los derechos reservados</span></p>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>