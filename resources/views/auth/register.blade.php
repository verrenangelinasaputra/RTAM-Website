<x-guest-layout>



    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf


        <h2
            class="font-samsungSharpBold text-center mb-3 font-extrabold leading-none tracking-tight text-gray-900 text-2xl md:text-3xl lg:text-4xl dark:text-white">
            Registration</h2>

        @if ($errors->has('email'))
            <div class="text-center text-red-600 text-sm md:text-base lg:text-base mb-10">

                {!! $errors->first('email') !!}

            </div>
        @elseif ($errors->any())
            <div class="text-center text-red-600 text-sm md:text-base lg:text-base mb-10">
                Your email or password is incorrect.
            </div>
        @endif

        <!-- Name -->
        <div class="relative">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name"
                class="block mt-1 w-full {{ $errors->has('name') ? 'border-red-600 focus:border-red-600' : '' }}"
                type="text" name="name" :value="old('name')" required placeholder="Full Name" autofocus
                autocomplete="name" />
            @error('name')
                <p class="text-red-600 text-xs absolute -bottom-5">{{ $message }}</p>
            @enderror
        </div>



        <!-- Subsidiaries -->
        <div class="mt-8 relative">
            <x-input-label for="subsidiary" :value="__('Subsidiaries')" />

            <select name="subsidiary" id="subsidiary"
                class="appearance-none bg-transparent text-xs md:text-sm lg:text-sm block w-full border-b-2
    py-2 pr-8 focus:ring-0
    {{ $errors->has('subsidiary') ? 'border-red-600 focus:border-red-600' : 'border-gray-300 focus:border-indigo-500' }}"
                required>

                <option value="" disabled {{ old('subsidiary') ? '' : 'selected' }}>Select Subsidiaries</option>
                <option value="SAVINA" {{ old('subsidiary') == 'SAVINA' ? 'selected' : '' }}>SAVINA (Samsung Research
                    Vietnam)</option>
                <option value="SRIN" {{ old('subsidiary') == 'SRIN' ? 'selected' : '' }}>SRIN (Samsung Research
                    Indonesia)</option>
                <option value="SME" {{ old('subsidiary') == 'SME' ? 'selected' : '' }}>SME (Samsung Research
                    Malaysia)</option>
            </select>

            <img src="/images/down-arrow.png" alt="Dropdown Icon"
                class="w-4 h-2.5 absolute right-2 top-[70%] -translate-y-1/2 pointer-events-none transition-transform duration-300 ease-in-out" />

            @error('subsidiary')
                <p class="text-red-600 text-xs absolute -bottom-5">{{ $message }}</p>
            @enderror
        </div>



        <!-- mobile phone number -->
        <!-- Phone Number -->
        <div class="mt-8 relative">
            <x-input-label for="phoneNumber" :value="__('Mobile Phone Number')" />
            <x-text-input id="phoneNumber"
                class="block mt-1 w-full {{ $errors->has('phoneNumber') ? 'border-red-600 focus:border-red-600' : '' }}"
                type="text" name="phoneNumber" :value="old('phoneNumber')" required placeholder="Start with country code"
                autocomplete="tel" />
            @error('phoneNumber')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div class="mt-6 relative">
            <x-input-label for="email" :value="__('Samsung Email Account')" />
            <x-text-input id="email"
                class="block mt-1 w-full {{ $errors->has('email') ? 'border-red-600 focus:border-red-600' : '' }}"
                type="email" name="email" :value="old('email')" required placeholder="Email ends with samsung.com"
                autocomplete="username" />
            @error('email')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mt-6 relative">
            <x-input-label for="password" :value="__('Create Password')" />
            <x-text-input id="password"
                class="block mt-1 w-full {{ $errors->has('password') ? 'border-red-600 focus:border-red-600' : '' }}"
                type="password" name="password" required placeholder="New password" autocomplete="new-password"
                oninput="validatePassword()" />
            @error('password')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mt-6 relative">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation"
                class="block mt-1 w-full {{ $errors->has('password_confirmation') ? 'border-red-600 focus:border-red-600' : '' }}"
                type="password" name="password_confirmation" placeholder="Confirm password" required
                autocomplete="new-password" />
            @error('password_confirmation')
                <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div id="password-requirements" class="mt-4 text-xs ml-3 space-y-1">
            <p id="uppercase" class="flex items-center text-red-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                Password must contain at least 1 capital letter.
            </p>
            <p id="number" class="flex items-center text-red-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                Password must contain at least 1 numerical character.
            </p>
            <p id="length" class="flex items-center text-red-600">
                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                Password must contain at least 8 characters.
            </p>
        </div>


        <div class="flex flex-col items-center justify-center mt-4">
            <div class="flex flex-col items-center justify-center mt-4">

                <x-primary-button class="mb-2 mt-10">
                    {{ __('Register Now') }}
                </x-primary-button>
            </div>

            @if (Route::has('login'))
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Already have an account?') }}
                    <a href="{{ route('login') }}" class="text-[#0481ff] hover:underline font-medium">
                        {{ __('Sign in') }}
                    </a>
                </p>
            @endif
        </div>
    </form>
</x-guest-layout>
