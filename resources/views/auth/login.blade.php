<x-guest-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- idnumber -->
        <div>
            <x-input-label for="idnumber" :value="__('ID Number:')" />
            <x-text-input id="idnumber" class="block mt-1 w-full" type="text" name="idnumber" :value="old('idnumber')" required autofocus autocomplete="idnumber" placeholder="12345678"/>
            <x-input-error :messages="$errors->get('idnumber')" class="mt-2" />
        </div>

        <!-- badge number -->
        <div>
            <x-input-label for="badgenumber" :value="__('Badge Number:')" />
            <x-text-input id="badgenumber" class="block mt-1 w-full" type="text" name="badgenumber" :value="old('badgenumber')" required autofocus autocomplete="badgenumber" placeholder="12345678"/>
            <x-input-error :messages="$errors->get('badgenumber')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email:')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="email@example.com"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password:')" />
                <div class="relative">
                    <x-text-input id="password" class="block mt-1 w-full pr-10"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5 cursor-pointer"
                        id="password-toggle">
                        <i class="fas fa-eye-slash text-gray-500" id="eye-icon"></i>
                    </div>
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <script>
                const passwordToggle = document.getElementById('password-toggle');
                const passwordInput = document.getElementById('password');
                const eyeIcon = document.getElementById('eye-icon');
            
                passwordToggle.addEventListener('click', function () {
                    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                    passwordInput.setAttribute('type', type);
            
                    // Toggle eye icon
                    if (type === 'password') {
                        eyeIcon.classList.remove('fa-eye');
                        eyeIcon.classList.add('fa-eye-slash');
                    } else {
                        eyeIcon.classList.remove('fa-eye-slash');
                        eyeIcon.classList.add('fa-eye');
                    }
                });
            </script>
            

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="p-3 underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
            {{ __('Want to register?') }}
            </a>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        

    </div>
    </form>
</x-guest-layout>
