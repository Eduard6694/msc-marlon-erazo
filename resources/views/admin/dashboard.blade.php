<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Panel de Administrador - Citas
            </h2>

            <!-- Botón para acceder al formulario -->
            <a href="{{ route('admin.list.patients') }}"
                class="px-4 py-2 bg-blue-600 text-black font-bold rounded-md hover:bg-blue-700 focus:outline-none shadow-md">
                Verificar Información de Pacientes
            </a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg p-6">

                <!-- Instrucciones -->
                <div class="mb-5 p-4 border border-gray-300 rounded-lg bg-gray-100 dark:bg-gray-700">
                    <h2 class="text-lg font-semibold text-gray-800 dark:text-gray-200">📌 Instrucciones</h2>
                    <ul class="mt-2 list-disc list-inside text-gray-700 dark:text-gray-300">
                        <li>Las citas pendientes se mostrarán en <span class="text-orange-500 font-semibold">naranja</span> y las aprobadas en <span class="text-green-500 font-semibold">verde</span>.</li>
                        <li>Haz clic en una cita para aprobarla.</li>
                        <li>Una vez aprobada, el paciente recibirá una notificación.</li>
                    </ul>
                </div>

                <!-- Resumen de Citas -->
                <div class="mb-6 grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div class="bg-yellow-500 text-balck p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">🕜 Citas Pendientes</h3>
                        <p class="text-2xl font-bold" id="pending-count">0</p>
                    </div>
                    <div class="bg-green-500 text-black p-4 rounded-lg shadow-md">
                        <h3 class="text-lg font-semibold">✅ Citas Autorizadas</h3>
                        <p class="text-2xl font-bold" id="approved-count">0</p>
                    </div>
                </div>

                <!-- Calendario -->
                <h1 class="text-xl font-bold mb-4 text-gray-800 dark:text-gray-200">Calendario de Citas</h1>
                <div id="admin-calendar"></div>

            </div>
        </div>
    </div>
    @push('styles')
    <style>
        /* Ajuste del tamaño del calendario */
        #admin-calendar {
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
            height: 50px !important;
            /* Ajuste de altura de filas */
        }
    </style>
    @endpush
    @push('scripts')
    <!-- Estilos y Scripts de FullCalendar -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('admin-calendar');

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
            selectable: false, 

            // 🚀 Nueva configuración para gestionar eventos superpuestos
            eventOverlap: true, 
            displayEventEnd: true, 
            eventMaxStack: 3, 
            slotEventOverlap: false, 

            events: "/admin/citas/listar", 

            eventDidMount: function(info) {
            if (info.event.extendedProps.status === 'pendiente') {
                info.el.style.backgroundColor = 'orange';
            } else {
                info.el.style.backgroundColor = 'green';
            }

            // 🚀 Mostrar el nombre del usuario en el evento
            const userName = info.event.extendedProps.userName || 'Sin Nombre';
            info.el.querySelector('.fc-event-title').innerHTML = `${userName} - ${info.event.title}`;
        },

            eventClick: function(info) {
                var event = info.event;
                var formattedDate = event.start.toISOString().split('T')[0];

                var formattedTime = new Date(event.start).toLocaleTimeString('es-EC', {
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false 
                });

                var confirmAction = confirm(`¿Deseas autorizar la cita para el ${formattedDate} a las ${formattedTime}?`);

                if (confirmAction) {
                    fetch(`/admin/citas/autorizar/${event.id}`, {
                            method: 'PATCH',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                            }
                        }).then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert('Cita autorizada correctamente.');
                                calendar.refetchEvents(); 
                                updateAppointmentCounts(); 
                            } else {
                                alert('Hubo un error: ' + data.message);
                            }
                        })
                        .catch(error => {
                            alert('Error en la solicitud al servidor.');
                            console.error(error);
                        });
                }
            }
        });

        calendar.render();

        // Función para actualizar el contador de citas
        function updateAppointmentCounts() {
            fetch('/admin/citas/listar')
                .then(response => response.json())
                .then(data => {
                    let pendingCount = 0;
                    let approvedCount = 0;

                    data.forEach(event => {
                        if (event.title === "Pendiente") {
                            pendingCount++;
                        } else {
                            approvedCount++;
                        }
                    });

                    document.getElementById("pending-count").textContent = pendingCount;
                    document.getElementById("approved-count").textContent = approvedCount;
                });
        }

        updateAppointmentCounts(); 
    });
</script>

    @endpush
</x-app-layout>