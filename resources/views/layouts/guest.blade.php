<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<style>
    /* styling container Choices.js agar underline */
    .choices__inner {
        /* yang ngatur gray line*/
        border: none !important;
        border-bottom: 2px solid #D1D5DB !important;
        border-radius: 0 !important;
        background-color: transparent !important;
        box-shadow: none !important;
        padding-left: 0 !important;
        padding-right: 2rem !important;
    }

    /* focus state */
    .choices__inner.is-focused {
        border-bottom-color: #6366F1 !important;
        /* Tailwind indigo-500 */
        box-shadow: none !important;
    }

    /* arrow warna */
    .choices__button {
        color: #9CA3AF !important;

    }

    /* yang ngatur selected optionnya*/
    .choices__list--dropdown {
        overflow: hidden !important;
        border-radius: 0.8rem !important;
        margin-top: 7px !important;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        background-color: #F3F4F6 !important;

        border: none !important;

    }

    .choices__list--dropdown .choices__item--selectable {
        /* background-color: #F3F4F6; */
        padding-top: 1.5rem;
        /* jarak atas: 0.5 rem (~8px) */
        padding-bottom: 1.5rem;
        /* jarak bawah: 0.5 rem (~8px) */
        padding-left: 1.5rem !important;
        /* jarak kiri: 1 rem (~16px) */
        padding-right: 1.5rem;
        /* jarak kanan: 1 rem (~16px) */
        /* border-bottom: 1px solid #D1D5DB; */
        cursor: pointer;
        color: #374151;
        border-bottom: 1px solid #D1D5DB;
        /* garis bawah abu-abu */
    }

    .choices__list--single .choices__item--selectable {
        padding-left: 0.5rem;
        /* geser ke kanan */
    }

    /* hilangkan border bawah terakhir supaya tidak double */


    /* .choices__list--dropdown .choices__item--selectable:first-child {
        border-top-left-radius: 0.6rem;
        /* sekitar 6px */
    /* border-top-right-radius: 0.6rem;
    } */

    .choices__list--dropdown .choices__item--selectable:last-child {
        /* background-color: #F3F4F6; */
        /* border-bottom-left-radius: 0.6rem;
        border-bottom-right-radius: 0.6rem; */
        border-bottom: none;
        /* supaya nggak double garis */
        border-radius: 0;
        /* hilangkan radius di item */
    }

    .choices[data-type*="select-one"]::after {
        display: none;
    }

    img {
        display: inline-block;
        /* biar transform bekerja dengan baik */
        transform-origin: center center;
        /* rotasi di tengah */
        transition: transform 0.3s ease;
    }







    .choices__placeholder {
        color: #111827 !important;
        /* Tailwind gray-400 */
        padding-left: 5px;
    }

    @media (max-width: 400px) {
        .no-truncate-below-400 {
            white-space: normal !important;
            /* Override truncate */
            overflow: visible !important;
            text-overflow: clip !important;
            max-width: none !important;
        }

        .nav-link {
            @apply no-underline;
        }

        .nav-link:focus,
        .nav-link:active,
        .nav-link:hover {
            @apply no-underline outline-none;
        }

        .nav-link:focus {
            outline: none;
            text-decoration: none;
        }

        #user-dropdown-button {
            margin-top: 0.75rem;
            margin-bottom: 0.75rem;
        }

    }
</style>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-grayBackground dark:bg-gray-900">

        <div class="w-full sm:max-w-4xl mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const element = document.getElementById('subsidiary');
        if (!element) {
            console.warn('Subsidiary select element not found');
            return;
        }
        const icon = element.parentElement.querySelector('img');
        if (!icon) {
            console.warn('Icon image element not found!');
            return;
        }
        console.log('Icon element:', icon);

        const choices = new Choices(element, {
            searchEnabled: false,
            itemSelectText: '',
            shouldSort: false,
            placeholder: true,
            placeholderValue: 'Select Subsidiaries'
        });

        choices.containerOuter.element.addEventListener('showDropdown', () => {
            console.log('Dropdown opened - container event');
            icon.classList.add('rotate-180');
        });

        choices.containerOuter.element.addEventListener('hideDropdown', () => {
            console.log('Dropdown closed - container event');
            icon.classList.remove('rotate-180');
        });


    });

    function validatePassword() {
        const password = document.getElementById('password').value;

        // Definisikan semua variabel untuk cek validasi
        const uppercase = document.getElementById('uppercase');
        const number = document.getElementById('number');
        const length = document.getElementById('length');

        const hasUppercase = /[A-Z]/.test(password);
        const hasNumber = /\d/.test(password); // <=== definisi hasNumber
        const hasLength = password.length >= 8;

        if (hasUppercase) {
            uppercase.classList.remove('text-red-600');
            uppercase.classList.add('text-green-600');
        } else {
            uppercase.classList.remove('text-green-600');
            uppercase.classList.add('text-red-600');
        }

        if (hasNumber) {
            number.classList.remove('text-red-600');
            number.classList.add('text-green-600');
        } else {
            number.classList.remove('text-green-600');
            number.classList.add('text-red-600');
        }

        if (hasLength) {
            length.classList.remove('text-red-600');
            length.classList.add('text-green-600');
        } else {
            length.classList.remove('text-green-600');
            length.classList.add('text-red-600');
        }
    }

    window.openSession = function(id, day) {
    console.log("🔥 Fungsi openSession terpanggil:", id, day);

    const target = document.getElementById(id);
    if (!target) {
        console.error("❌ Tidak ketemu element:", id);
        return;
    }

    // contoh: paksa buka dropdown
    if (target.__x && target.__x.$data) {
        target.__x.$data.open = true;
        console.log("✅ Dropdown dibuka");
    }
};

    document.addEventListener('alpine:init', () => {
        Alpine.store('filters', {
            topics: []
        });
    });
</script>


</html>
