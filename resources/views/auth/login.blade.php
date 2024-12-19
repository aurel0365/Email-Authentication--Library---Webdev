<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Replace the Laravel logo with text -->
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">{{ __('Welcome to the Library') }}</h1>
    </div>

    <!-- Login Form -->
    <div class="max-w-md mx-auto p-6 bg-white border border-gray-200 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">{{ __('Login to your account') }}</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-500" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-500" />
            </div>

            <!-- Forgot Password and Remember Me in the same line -->
            <div class="flex justify-between items-center mt-4">
                <div class="flex items-center">
                    <!-- Remember Me -->
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Forgot Password link -->
                @if (Route::has('password.request'))
                    <a class="text-sm text-red-500 hover:text-red-700" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Log in Button -->
            <div class="flex items-center justify-center mt-6">
                <x-primary-button class="w-full py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 flex justify-center items-center">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>

        <!-- Register Button (below the login button) -->
        <div class="flex items-center justify-center mt-4">
            <a href="{{ route('register') }}" class="w-full">
                <x-primary-button class="w-full py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 flex justify-center items-center">
                    {{ __('Register') }}
                </x-primary-button>
            </a>
        </div>
    </div>
</x-guest-layout>
