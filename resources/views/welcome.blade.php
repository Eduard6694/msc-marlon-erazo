<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Psicopedagógicos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        header {
            background: linear-gradient(90deg, #6a11cb, #2575fc);
            color: white;
            padding: 20px 0;
        }
        header h1 {
            font-weight: 600;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .cta-btn {
            background-color: #6a11cb;
            color: white;
            font-weight: 600;
            border: none;
            padding: 10px 20px;
            border-radius: 25px;
            transition: background-color 0.3s;
        }
        .cta-btn:hover {
            background-color: #2575fc;
        }
        footer {
            background-color: #6a11cb;
            color: white;
        }
    </style>
</head>
<body>
    <header class="text-center">
        <div class="container">
            <h1 class="h3">Servicios Psicopedagógicos</h1>
            <nav class="mt-3">
                <a href="{{ route('login') }}" class="btn btn-light btn-sm me-2">Iniciar Sesión</a>
                <a href="{{ route('register') }}" class="btn btn-light btn-sm">Registrarse</a>
            </nav>
        </div>
    </header>

    <main class="container py-5">
        <section class="text-center mb-5">
            <h2 class="h4">Bienvenidos a los Servicios Psicopedagógicos de Msc. Marlon Erazo</h2>
            <p class="mt-3">Apoyamos el desarrollo educativo y personal a través de estrategias personalizadas y profesionales.</p>
        </section>

        <section class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Evaluaciones Psicopedagógicas</h5>
                        <p class="card-text">Identificación de necesidades educativas específicas mediante informes detallados.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Asesoría y Talleres</h5>
                        <p class="card-text">Capacitación a padres, docentes y autoridades en estrategias de apoyo educativo.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Adaptaciones Curriculares</h5>
                        <p class="card-text">Planes personalizados para estudiantes con necesidades educativas especiales.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="text-center py-3">
        <p class="mb-0">&copy; 2025 Msc. Marlon Erazo. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
