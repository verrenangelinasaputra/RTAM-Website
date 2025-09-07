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
    <style>
        [x-cloak] {
            display: none !important
        }
    </style>

    <!-- Scripts -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<style>
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
            /* contoh mt-3 = 12px */
        }

    }
</style>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navLinks = document.querySelectorAll('#nav-links .nav-link');

        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                navLinks.forEach(l => {
                    l.classList.remove('text-samsungBlue', 'border-samsungBlue');
                    l.classList.add('text-black', 'border-transparent');
                });

                this.classList.add('text-samsungBlue', 'border-samsungBlue');
                this.classList.remove('text-black', 'border-transparent');
            });
        });

        const dropdownButton = document.getElementById('user-dropdown-button');
        const dropdownMenu = document.getElementById('user-dropdown-menu');

        // Toggle dropdown on button click
        dropdownButton?.addEventListener('click', function(e) {
            e.stopPropagation(); // Prevent click from bubbling
            dropdownMenu?.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdownMenu?.contains(e.target) && !dropdownButton?.contains(e.target)) {
                dropdownMenu?.classList.add('hidden');
            }
        });



        const targetDate = new Date('2025-12-31T00:00:00').getTime();

        const daysNumber = document.querySelector('#days > div:first-child');
        const hoursNumber = document.querySelector('#hours > div:first-child');
        const minutesNumber = document.querySelector('#minutes > div:first-child');
        const secondsNumber = document.querySelector('#seconds > div:first-child');

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                clearInterval(interval);
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            daysNumber.textContent = days.toString().padStart(2, '0');
            hoursNumber.textContent = hours.toString().padStart(2, '0');
            minutesNumber.textContent = minutes.toString().padStart(2, '0');
            secondsNumber.textContent = seconds.toString().padStart(2, '0');
        }

        updateCountdown();
        const interval = setInterval(updateCountdown, 1000);

    });

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
            topics: [],
            speakers: [] // <-- tambahin ini
        })

        Alpine.store('globalToast', {
            toastMessage: '',
            openToast: false,
        });
    })
</script>

</html>
