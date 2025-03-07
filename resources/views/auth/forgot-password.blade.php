<x-guest-layout>
    <h1 class="my-4 text-center display-5">Restablecer Contraseña</h1>

    <div class="mb-4 text-center text-muted">
        {{ __('¿Olvidaste tu contraseña? No hay problema. Simplemente háganos saber su dirección de correo electrónico y le enviaremos un enlace de restablecimiento de contraseña que le permitirá elegir una nueva.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email -->
        <div class="form-group mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
        </div>

        <!-- Botón -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <x-primary-button class="btn btn-dark">
                {{ __('Restablecer la contraseña') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>