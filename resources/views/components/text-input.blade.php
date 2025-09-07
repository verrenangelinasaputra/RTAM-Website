@props(['disabled' => false])

<input
    {{ $attributes->merge([
        'class' => 'font-oneui400  text-black placeholder:text-xs placeholder:md:text-sm placeholder:lg:text-sm placeholder-gray-400 block mt-1 w-full bg-transparent border-0 border-b-2 border-gray-300 focus:border-indigo-500 focus:ring-0',
    ]) }}
    {{ $attributes }}
/>


