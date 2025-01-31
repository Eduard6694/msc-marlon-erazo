<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Gestión de Pacientes
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-md sm:rounded-lg p-6">
                <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-200">Lista de Pacientes</h1>

                <!-- Tabla de pacientes con bordes redondeados -->
                <div class="overflow-x-auto">
                    <table id="patients-table" class="min-w-full bg-white dark:bg-gray-900 border border-gray-200 rounded-lg shadow-md">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-6 py-3 text-left">Cédula</th>
                                <th class="px-6 py-3 text-left">Nombre</th>
                                <th class="px-6 py-3 text-left">Dirección</th>
                                <th class="px-6 py-3 text-left">Teléfono</th>
                                <th class="px-6 py-3 text-left">Fecha de Nacimiento</th>
                                <th class="px-6 py-3 text-left">Detalles Psicopedagógicos</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($patients as $patient)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-800 transition-all">
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-200">{{ $patient->cedula }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-200">{{ $patient->nombres }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-200">{{ $patient->direccion }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-200">{{ $patient->telefono }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-200">{{ $patient->fecha_nacimiento }}</td>
                                <td class="px-6 py-4 text-gray-900 dark:text-gray-200">{{ $patient->detalles }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
    <!-- DataTables CSS mejorado -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <style>
        /* Estilos personalizados */
        #patients-table {
            border-radius: 10px;
            overflow: hidden;
        }

        .dataTables_wrapper {
            padding: 10px;
            border-radius: 10px;
            background: #fff;
        }

        .dataTables_filter input {
            border-radius: 8px;
            border: 1px solid #ccc;
            padding: 6px 10px;
        }
    </style>
    @endpush

    @push('scripts')
    <!-- jQuery y DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#patients-table').DataTable({
                "pageLength": 5,
                "lengthChange": false,
                "language": {
                    "search": "🔍 Buscar:",
                    "paginate": {
                        "next": "Siguiente →",
                        "previous": "← Anterior"
                    }
                }
            });
        });
    </script>
    @endpush
</x-app-layout>
