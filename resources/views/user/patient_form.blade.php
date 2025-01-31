<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Registrar Información del Paciente
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Formulario de Registro de Pacientes</h1>

                    <!-- Mensaje de éxito -->
                    @if (session('success'))
                        <div class="mb-4 text-green-600">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Formulario -->
                    <form action="{{ route('user.save.patient') }}" method="POST">
                        @csrf

                        <!-- Cédula -->
                        <div class="mb-4">
                            <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                            <input type="text" name="cedula" id="cedula"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                required maxlength="10" pattern="[0-9]{10}"
                                value="{{ old('cedula', $patient->cedula ?? '') }}"
                                title="Ingrese una cédula válida de 10 dígitos">
                            @error('cedula') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <!-- Nombres Completos -->
                        <div class="mb-4">
                            <label for="nombres" class="block text-sm font-medium text-gray-700">Nombres Completos</label>
                            <input type="text" name="nombres" id="nombres"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                required value="{{ old('nombres', $patient->nombres ?? '') }}">
                            @error('nombres') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <!-- Dirección -->
                        <div class="mb-4">
                            <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección</label>
                            <input type="text" name="direccion" id="direccion"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                required value="{{ old('direccion', $patient->direccion ?? '') }}">
                            @error('direccion') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <!-- Fecha de Nacimiento -->
                        <div class="mb-4">
                            <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700">Fecha de Nacimiento</label>
                            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                required value="{{ old('fecha_nacimiento', $patient->fecha_nacimiento ?? '') }}">
                            @error('fecha_nacimiento') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <!-- Teléfono -->
                        <div class="mb-4">
                            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono</label>
                            <input type="text" name="telefono" id="telefono"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                required maxlength="10" pattern="[0-9]{10}"
                                value="{{ old('telefono', $patient->telefono ?? '') }}">
                            @error('telefono') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <!-- Detalles Psicopedagógicos -->
                        <div class="mb-4">
                            <label for="detalles" class="block text-sm font-medium text-gray-700">Detalles Psicopedagógicos</label>
                            <textarea name="detalles" id="detalles" rows="5"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="Escribe información relevante sobre el caso psicopedagógico">{{ old('detalles', $patient->detalles ?? '') }}</textarea>
                            @error('detalles') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <!-- Botón para guardar -->
                        <div>
                            <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-black font-semibold rounded-md hover:bg-blue-700 focus:outline-none shadow-md">
                                Guardar Paciente
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
