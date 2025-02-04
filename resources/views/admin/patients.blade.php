<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Gestión de Pacientes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h1 class="text-xl font-bold mb-4">Lista de Pacientes</h1>

                <!-- Tabla de pacientes -->
                <div class="overflow-x-auto">
                    <table id="patients-table" class="min-w-full bg-white dark:bg-gray-900 border border-gray-200">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">Cédula</th>
                                <th class="px-4 py-2">Nombre</th>
                                <th class="px-4 py-2">Dirección</th>
                                <th class="px-4 py-2">Teléfono</th>
                                <th class="px-4 py-2">Fecha de Nacimiento</th>
                                <th class="px-4 py-2">Detalles</th>
                                <th class="px-4 py-2">Evaluación Total</th> <!-- Nueva columna -->
                            </tr>
                        </thead>
                        <tbody class="text-gray-700 dark:text-gray-300">
                            @foreach ($patients as $patient)
                            <tr>
                                <td class="border px-4 py-2">{{ $patient->cedula }}</td>
                                <td class="border px-4 py-2">{{ $patient->nombres }}</td>
                                <td class="border px-4 py-2">{{ $patient->direccion }}</td>
                                <td class="border px-4 py-2">{{ $patient->telefono }}</td>
                                <td class="border px-4 py-2">{{ $patient->fecha_nacimiento }}</td>
                                <td class="border px-4 py-2">{{ $patient->detalles }}</td>
                                <td class="border px-4 py-2 text-center">
                                    @if ($patient->evaluation)
                                    <span class="font-semibold text-green-600">{{ $patient->evaluation->total_score }}</span>
                                    @else
                                    <span class="text-gray-400">Sin Evaluación</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    @endpush

    @push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#patients-table').DataTable({
                "pageLength": 5,
                "lengthChange": false,
                "language": {
                    "search": "Buscar:",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    }
                }
            });
        });
    </script>
    @endpush
</x-app-layout>