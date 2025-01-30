<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('¡Gracias por registrarte! Antes de comenzar, por favor verifica tu correo electrónico haciendo clic en el enlace que te enviamos.') }}
        {{ __('Si no has recibido el correo, puedes solicitar que se envíe otro a continuación.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('Se ha enviado un nuevo enlace de verificación a tu dirección de correo.') }}
        </div>
    @endif

    <div class="mt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
        <!-- Botón para reenviar correo de verificación -->
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" 
                class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none">
                {{ __('Reenviar Correo de Verificación') }}
            </button>
        </form>

        <!-- Botón para cerrar sesión -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" 
                class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none">
                {{ __('Cerrar Sesión') }}
            </button>
        </form>
    </div>
</x-guest-layout>
