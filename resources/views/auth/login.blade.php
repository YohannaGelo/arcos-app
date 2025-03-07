<x-guest-layout>
<h1 class="my-4 text-center display-5">Iniciar Sesión</h1>

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email -->
    <div class="form-group mb-3">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
    </div>

    <!-- Contraseña -->
    <div class="form-group mb-3">
        <x-input-label for="password" :value="__('Contraseña')" />
        <x-text-input id="password" class="form-control"
                      type="password"
                      name="password"
                      required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
    </div>

    <!-- Recuérdame -->
    <div class="form-group mb-3">
        <div class="form-check">
            <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
            <label for="remember_me" class="form-check-label">
                {{ __('Recuérdame') }}
            </label>
        </div>
    </div>

    <!-- Botones -->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        @if (Route::has('password.request'))
            <a class="btn btn-link text-decoration-none text-dark" href="{{ route('password.request') }}">
                {{ __('¿Ha olvidado la contraseña?') }}
            </a>
        @endif

        <x-primary-button class="btn btn-secondary">
            {{ __('Iniciar sesión') }}
        </x-primary-button>
    </div>
</form>
</x-guest-layout>
