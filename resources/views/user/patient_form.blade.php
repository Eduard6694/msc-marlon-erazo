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
                    <!-- Formulario de Evaluación Psicopedagógica para Padres -->
                    <div class="mt-8 p-6 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-md">
                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-4">📋 Evaluación Psicopedagógica para Padres</h2>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">Responde con sinceridad cada una de las afirmaciones sobre el comportamiento y habilidades de tu hijo/a. Utiliza la escala del 1 al 5 (1 = Nunca, 5 = Siempre).</p>
                        @if (session('success'))
                        <div class="bg-green-500 text-white text-center py-2 rounded-md shadow-md mb-4">
                            {{ session('success') }}
                        </div>
                        @endif

                        <form action="{{ route('user.save.evaluation') }}" method="POST">
                            @csrf

                            <!-- 1. Desarrollo Cognitivo -->
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200 mt-4">🧠 Desarrollo Cognitivo</h3>
                            @foreach ([
                            'Mantiene la atención en tareas por más de 15 minutos.',
                            'Recuerda instrucciones de más de dos pasos.',
                            'Tiene dificultades para resolver problemas simples.',
                            'Se distrae fácilmente con estímulos externos.',
                            'Demuestra curiosidad por aprender cosas nuevas.'
                            ] as $index => $question)
                            <div class="mb-4">
                                <label class="block text-gray-700 dark:text-gray-300">{{ $question }}</label>
                                <div class="flex gap-2 mt-1">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <label class="flex items-center space-x-1">
                                        <input type="radio" name="cognitive[{{ $index }}]" value="{{ $i }}" required>
                                        <span>{{ $i }}</span>
                                        </label>
                                        @endfor
                                </div>
                            </div>
                            @endforeach

                            <!-- 2. Habilidades Socioemocionales -->
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200 mt-4">😊 Habilidades Socioemocionales</h3>
                            @foreach ([
                            'Expresa sus emociones de manera adecuada.',
                            'Se relaciona positivamente con otros niños.',
                            'Tiene dificultades para controlar su enojo o frustración.',
                            'Muestra empatía hacia los sentimientos de los demás.',
                            'Se adapta bien a nuevos entornos o cambios en la rutina.'
                            ] as $index => $question)
                            <div class="mb-4">
                                <label class="block text-gray-700 dark:text-gray-300">{{ $question }}</label>
                                <div class="flex gap-2 mt-1">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <label class="flex items-center space-x-1">
                                        <input type="radio" name="socioemotional[{{ $index }}]" value="{{ $i }}" required>
                                        <span>{{ $i }}</span>
                                        </label>
                                        @endfor
                                </div>
                            </div>
                            @endforeach

                            <!-- 3. Comportamiento en el Hogar y la Escuela -->
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200 mt-4">🏡 Comportamiento en el Hogar y la Escuela</h3>
                            @foreach ([
                            'Sigue instrucciones sin necesidad de repetición constante.',
                            'Se muestra impulsivo/a en situaciones cotidianas.',
                            'Realiza sus tareas escolares de forma independiente.',
                            'Muestra respeto hacia figuras de autoridad.',
                            'Tiene dificultades para esperar su turno.'
                            ] as $index => $question)
                            <div class="mb-4">
                                <label class="block text-gray-700 dark:text-gray-300">{{ $question }}</label>
                                <div class="flex gap-2 mt-1">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <label class="flex items-center space-x-1">
                                        <input type="radio" name="behavior[{{ $index }}]" value="{{ $i }}" required>
                                        <span>{{ $i }}</span>
                                        </label>
                                        @endfor
                                </div>
                            </div>
                            @endforeach

                            <!-- 4. Habilidades Académicas -->
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200 mt-4">📚 Habilidades Académicas</h3>
                            @foreach ([
                            'Comprende textos de acuerdo a su edad.',
                            'Presenta dificultades para escribir oraciones completas.',
                            'Realiza operaciones matemáticas básicas sin dificultad.',
                            'Tiene una buena ortografía para su nivel educativo.',
                            'Muestra interés por la lectura de forma regular.'
                            ] as $index => $question)
                            <div class="mb-4">
                                <label class="block text-gray-700 dark:text-gray-300">{{ $question }}</label>
                                <div class="flex gap-2 mt-1">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <label class="flex items-center space-x-1">
                                        <input type="radio" name="academic[{{ $index }}]" value="{{ $i }}" required>
                                        <span>{{ $i }}</span>
                                        </label>
                                        @endfor
                                </div>
                            </div>
                            @endforeach

                            <!-- 5. Entorno Familiar -->
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200 mt-4">🏠 Entorno Familiar</h3>
                            @foreach ([
                            'En casa se proporciona un ambiente tranquilo para estudiar.',
                            'Recibe apoyo emocional de la familia de forma regular.',
                            'Participa en actividades familiares de forma activa.',
                            'Hay una comunicación abierta y positiva en casa.',
                            'Los cambios en la familia han afectado su comportamiento.'
                            ] as $index => $question)
                            <div class="mb-4">
                                <label class="block text-gray-700 dark:text-gray-300">{{ $question }}</label>
                                <div class="flex gap-2 mt-1">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <label class="flex items-center space-x-1">
                                        <input type="radio" name="family[{{ $index }}]" value="{{ $i }}" required>
                                        <span>{{ $i }}</span>
                                        </label>
                                        @endfor
                                </div>
                            </div>
                            @endforeach

                            <!-- Botón de Envío -->
                            <button type="submit" class="w-full bg-blue-600 !text-white py-2 px-4 rounded-md hover:!bg-blue-700 transition duration-300 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                Evaluar Test
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>