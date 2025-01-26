<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Panel de Administración
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Gestión de Citas</h1>

                    <!-- FullCalendar -->
                    <div id="admin-calendar"></div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
    <!-- Estilos y Scripts de FullCalendar -->
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('admin-calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'timeGridWeek,timeGridDay'
                },
                events: '/admin/citas/listar', // Endpoint para obtener citas desde el backend
                editable: true, // Permitir editar eventos
                eventClick: function(info) {
                    // Mostrar detalles de la cita al hacer clic en un evento
                    var event = info.event;
                    var confirmAction = confirm(`¿Deseas autorizar la cita para el ${event.start.toISOString().split('T')[0]} a las ${event.start.toISOString().split('T')[1].slice(0, 5)}?`);

                    if (confirmAction) {
                        // Llamar al backend para autorizar la cita
                        fetch(`/admin/citas/autorizar/${event.id}`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        }).then(response => {
                            if (response.ok) {
                                alert('Cita autorizada correctamente.');
                                calendar.refetchEvents(); // Refrescar el calendario
                            } else {
                                alert('Hubo un error al autorizar la cita.');
                            }
                        });
                    }
                }
            });

            calendar.render();
        });
    </script>
    @endpush
</x-app-layout>
