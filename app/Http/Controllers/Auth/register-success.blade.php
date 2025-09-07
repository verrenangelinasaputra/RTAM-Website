<x-guest-layout>


    <h2
        class="text-center mb-3 font-extrabold leading-none tracking-tight text-gray-900 text-2xl md:text-3xl lg:text-4xl dark:text-white">
        Your registration is successfull!</h2>

    <h5
        class="text-center mb-3 leading-none tracking-tight text-gray-900 text-xs md:text-xl lg:text-1xl dark:text-white">
        An email has been sent for confirmation</h5>

    <div class="flex flex-col items-center justify-center mt-4">
        <a href="{{ route('login') }}">
            <x-primary-button class="mb-2 mt-10">
                {{ __('Sign In') }}
            </x-primary-button>
        </a>
    </div>


</x-guest-layout>
