<!DOCTYPE html>
<html>
<head>
    <title>Nueva Cita Pendiente</title>
</head>
<body>
    <h1>Notificación de Nueva Cita</h1>
    <p>Se ha agendado una nueva cita pendiente de aprobación.</p>
    <p><strong>Fecha:</strong> {{ $appointment->date }}</p>
    <p><strong>Hora:</strong> {{ $appointment->time }}</p>

    @if($appointment->user)
        <p><strong>Usuario:</strong> {{ $appointment->user->name }} ({{ $appointment->user->email }})</p>
    @else
        <p><strong>Usuario:</strong> No disponible</p>
    @endif

    <p><a href="{{ route('admin.dashboard') }}">Revisar en el Panel de Administración</a></p>
</body>
</html>
