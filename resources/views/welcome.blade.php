<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sistema Psicopedagógico - Msc. Marlon Erazo</title>
    <meta name="description" content="Servicios psicopedagógicos especializados para el desarrollo educativo y personal.">
    <meta name="keywords" content="psicopedagogía, educación, evaluación psicométrica, asesoría educativa">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@300;600&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body>

    <!-- Header con botón de regreso -->
    <header class="text-center py-4 bg-light shadow-sm">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="{{ route('index') }}" class="btn btn-outline-secondary">← Regresar a Inicio</a>
            <h1 class="h3 text-primary mx-auto">Servicios Psicopedagógicos</h1>
        </div>
    </header>

    <!-- Bienvenida con Botones de Acceso -->
    <main class="container py-5">
        <section class="row">
            <div class="col-lg-8 details order-2 order-lg-1">
                <h3 class="text-primary">Accede a Tu Cuenta</h3>
                <p class="fst-italic">Para gestionar citas y acceder a nuestros servicios, por favor inicia sesión o regístrate.</p>
                <p>Si aún no tienes una cuenta, puedes registrarte en pocos pasos y comenzar a aprovechar nuestros servicios psicopedagógicos.</p>

                <!-- Nueva información agregada -->
                <ul class="mt-3">
                    <li>Agendar y gestionar tus citas fácilmente.</li>
                    <li>Acceder a informes y evaluaciones psicopedagógicas.</li>
                    <li>Recibir asesoría personalizada y seguimiento académico.</li>
                </ul>

                <div class="mt-4">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-3">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">Registrarse</a>
                </div>
            </div>
            <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="{{ asset('assets/img/login-image.jpg') }}" alt="Acceso a la Plataforma" class="img-fluid rounded shadow-sm">
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer id="footer" class="footer light-background">
    <div class="container footer-top">
        <div class="row gy-4 justify-content-center"> <!-- Centrar los elementos -->
            <div class="col-lg-4 col-md-6 footer-about text-center"> <!-- Centrar el contenido -->
                <a href="index.html" class="logo d-flex flex-column align-items-center"> 
                    <span class="sitename">Msc Marlon Erazo</span>
                </a>
                <div class="social-links d-flex justify-content-center mt-4"> 
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Alexander Ponce</strong> <span>Todos los derechos reservados</span></p>
    </div>
</footer>


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>