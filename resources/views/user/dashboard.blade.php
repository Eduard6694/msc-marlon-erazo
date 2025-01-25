<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        <h1>Panel de Usuario</h1>
<a href="{{ route('user.create.appointment') }}">Agendar una Cita</a>

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <h1>Agendar una Cita</h1>
<form action="/user/citas/guardar" method="POST">
    @csrf
    <label for="date">Fecha:</label>
    <input type="date" id="date" name="date" required>
    <label for="time">Hora:</label>
    <input type="time" id="time" name="time" required>
    <button type="submit">Guardar</button>
</form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
