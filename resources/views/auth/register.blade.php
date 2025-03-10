<x-guest-layout>

    <h1 class="my-4 text-center display-5">Registro</h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nombre -->
        <div class="form-group mb-3">
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="text-danger mt-2" />
        </div>

        <!-- Email -->
        <div class="form-group mb-3">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
        </div>

        <!-- Contraseña -->
        <div class="form-group mb-3">
            <x-input-label for="password" :value="__('Contraseña')" />
            <x-text-input id="password" class="form-control"
                type="password"
                name="password"
                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
        </div>

        <!-- Confirmar Contraseña -->
        <div class="form-group mb-3">
            <x-input-label for="password_confirmation" :value="__('Confirma Contraseña')" />
            <x-text-input id="password_confirmation" class="form-control"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />
        </div>

        <!-- Botones -->
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-secondary me-md-2" href="{{ route('login') }}">
                {{ __('¿Ya está registrado?') }}
            </a>
            <x-primary-button class="btn btn-dark">
                {{ __('Registrarse') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>