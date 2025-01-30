<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        <h1>Panel de Usuario</h1>
    </h2>

    <!-- Botón para acceder al formulario -->
    <div class="mt-2">
        <a href="{{ route('user.patient.form') }}" 
            class="px-4 py-2 bg-indigo-600 text-black rounded-md hover:bg-indigo-700 focus:outline-none">
            Registrar Información del Paciente
        </a>
    </div>
</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    <h1>Agendar una Cita</h1>
                    

                    <!-- FullCalendar -->
                    <div id="calendar"></div>

                    <!-- Formulario para agendar citas -->
                    <form id="appointment-form" action="{{ route('user.create.appointment') }}" method="POST" style="display: none;">
                        @csrf
                        <input type="hidden" id="appointment-date" name="date">
                        <input type="hidden" id="appointment-time" name="time">
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
<!-- Importar scripts y estilos de FullCalendar -->
<link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales-all.min.js"></script> <!-- Importar todos los idiomas -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek', // Vista semanal con TimeGrid
            locale: 'es', // **Cambia el idioma a español**
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'timeGridWeek,timeGridDay'
            },
            selectable: true, // Permitir seleccionar fechas y horas
            slotMinTime: "07:00:00", // Hora mínima (7:00 AM)
            slotMaxTime: "18:00:00",
            slotDuration: "01:00:00", // Intervalos de 1 hora

            select: function(info) {
                // Cuando se selecciona un rango de fechas/horas
                var date = info.start.toISOString().split('T')[0];
                var time = info.start.toISOString().split('T')[1].slice(0, 5);

                if (confirm(`¿Quieres agendar una cita el ${date} a las ${time}?`)) {
                    // Llenar el formulario y enviarlo
                    document.getElementById('appointment-date').value = date;
                    document.getElementById('appointment-time').value = time;
                    document.getElementById('appointment-form').submit();
                }
            },
            events: '/user/citas/listar', // Endpoint para obtener citas desde el backend
        });

        calendar.render();
    });
</script>
@endpush
</x-app-layout>
