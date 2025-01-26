<!DOCTYPE html>
<html>
<head>
    <title>Detalles de tu Cita</title>
</head>
<body>
    <h1>Hola, {{ auth()->user()->name }}</h1>
    <p>Tu cita ha sido registrada con éxito.</p>
    <p><strong>Fecha:</strong> {{ $appointment->date }}</p>
    <p><strong>Hora:</strong> {{ $appointment->time }}</p>
    <p>Si tienes alguna duda, no dudes en contactarnos.</p>
    <br>
    <p>Atentamente,</p>
    <p>El equipo de {{ config('app.name') }}</p>
</body>
</html>
