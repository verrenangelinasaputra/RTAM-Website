@props(['value'])

<label {{ $attributes->merge(['class' => 'font-oneui400 text-black block font-medium text-sm md:text-base lg:text-base text-gray-700 dark:text-gray-300']) }}>
    {{ $value ?? $slot }}
</label>
