<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" novalidate>
        @csrf

        <h2
            class="font-samsungSharpBold text-center mb-3 leading-none tracking-tight text-gray-900 text-2xl md:text-3xl lg:text-4xl dark:text-white">
            Log In</h2>

        @if ($errors->any())
            <div class="text-center text-red-600 text-sm md:text-base lg:text-base mb-10">
                Your email or password is incorrect.
            </div>
        @endif

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Samsung Email Account')" />
            <x-text-input id="email" class="text-black input-line block mt-1 w-full text-sm md:text-base lg:text-base"
                type="email" name="email" :value="old('email')" placeholder="Email ends with samsung.com" required
                autofocus autocomplete="username" />

            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
        </div>

        <!-- Password -->
        <div class="mt-10">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="text-black block mt-1 w-full text-sm md:text-base lg:text-base"
                type="password" name="password" placeholder="New password" required autocomplete="current-password" />

            {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex flex-col items-center justify-center mt-4">

            <x-primary-button class="mb-2 mt-10">
                {{ __('Sign in') }}
            </x-primary-button>

            @if (Route::has('password.request'))
                <a class="text-xs md:text-sm lg:text-sm text-gray-400 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2  dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot password?') }}
                </a>
            @endif

            @if (Route::has('register'))
                <p class="mt-12 text-sm text-gray-600 dark:text-gray-400">
                    {{ __("Don't have an account?") }}
                    <a href="{{ route('register') }}" class="text-[#0481ff] hover:underline font-medium">
                        {{ __('Register now') }}
                    </a>
                </p>
            @endif


        </div>
    </form>
</x-guest-layout>
