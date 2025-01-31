<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Panel de Usuario - Citas
            </h2>

            <!-- Botón para acceder al formulario -->
            <a href="{{ route('user.patient.form') }}" 
                class="px-4 py-2 bg-blue-600 text-black font-bold rounded-md hover:bg-blue-700 focus:outline-none shadow-md">
                Registrar Información del Paciente
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Mis Citas</h1>

                     <!-- Instrucciones para el Paciente -->
                     <div class="mb-5 p-4 border border-gray-300 rounded-lg bg-gray-100 dark:bg-gray-700">
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">📌 Instrucciones para Agendar una Cita</h2>
                        <ul class="mt-2 list-disc list-inside text-gray-700 dark:text-gray-300">
                            <li>Haz clic en la fecha y hora disponible dentro del horario de <strong>7:00 AM a 6:00 PM</strong>.</li>
                            <li>Las citas <strong>no pueden agendarse en el pasado</strong>, ni fuera del horario permitido.</li>
                            <li>Después de seleccionar una fecha y hora, confirma tu cita en el cuadro de diálogo.</li>
                            <li>Tu cita quedará en estado <span class="text-orange-500 font-semibold">Pendiente</span> hasta que sea aprobada por un administrador.</li>
                            <li>Recibirás un correo electrónico cuando tu cita sea <span class="text-green-500 font-semibold">Aprobada</span>.</li>
                            <li>Si tienes dudas, contacta al administrador desde el formulario de contacto.</li>
                        </ul>
                    </div>

                    <!-- Calendario -->
                    <div id="user-calendar"></div>

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

    @push('styles')
    <style>
        /* Ajuste del tamaño del calendario para evitar desbordamiento */
        #user-calendar {
            max-height: 550px !important; 
            min-height: 500px !important; 
            height: auto !important; 
            overflow: hidden !important;
        }

        .fc-scroller {
            overflow-y: auto !important; 
        }

        .fc-timegrid-container {
            height: auto !important;
        }

        .fc-timegrid-slot {
            height: 50px !important; /* Ajuste de altura de filas */
        }
    </style>
    @endpush

    @push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('user-calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek', 
                locale: 'es',
                timeZone: 'local',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridWeek,timeGridDay'
                },
                slotMinTime: "07:00:00", 
                slotMaxTime: "18:00:00", 
                slotDuration: "01:00:00", 
                contentHeight: 'auto', 
                height: 'auto', 

                selectable: true, 
                validRange: {
                    start: new Date() 
                },

                select: function(info) {
                    var now = new Date();
                    var selectedDate = new Date(info.start);

                    if (selectedDate < now) {
                        alert("No puedes agendar citas en fechas u horas pasadas.");
                        return;
                    }

                    var date = selectedDate.toISOString().split('T')[0];
                    var time = selectedDate.toLocaleTimeString('es-EC', {
                        hour: '2-digit',
                        minute: '2-digit',
                        hour12: false
                    });

                    if (confirm(`¿Quieres agendar una cita el ${date} a las ${time}?`)) {
                        document.getElementById('appointment-date').value = date;
                        document.getElementById('appointment-time').value = time;
                        document.getElementById('appointment-form').submit();
                    }
                },

                events: '/user/citas/listar', 
            });

            calendar.render();
        });
    </script>
    @endpush
</x-app-layout>
