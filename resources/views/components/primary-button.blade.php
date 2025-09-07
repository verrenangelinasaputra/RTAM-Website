<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-10 py-1.5 bg-samsungBlue dark:bg-gray-200 border border-transparent rounded-3xl text-sm md:text-base lg:text-base text-white font-oneui400 dark:text-gray-800 tracking-widest hover:bg-black dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
