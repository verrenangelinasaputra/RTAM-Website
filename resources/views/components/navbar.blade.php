<body id="top" class="font-sans antialiased">
    <nav class="bg-white bg-opacity-70 backdrop-blur border-b border-gray-200 sticky top-0 z-50">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
            <div class="flex justify-between items-start mb-4 md:-mb-2 lg:-mb-2">
                <div class="leading-tight">
                    <div class="text-base sm:text-lg md:text-xl lg:text-2xl font-black text-black">2025 Knox B2B Strategy
                        Workshop</div>
                </div>

                <!-- User Section -->
                @auth
                    <div class="relative w-fit max-w-full" id="user-dropdown-container">
                        <button id="user-dropdown-button" type="button"
                            class="relative flex items-center text-[10px] sm:text-xs md:text-sm text-black bg-white border border-black hover:bg-white px-3 py-1 rounded-full focus:outline-none focus:ring-1 focus:ring-blue-500 transition w-full">
                            <span class="block truncate max-w-[70px] sm:max-w-none sm:whitespace-normal">
                                {{ Auth::user()->name }}
                            </span>
                            <img src="/icons/down-arrow-5-svgrepo-com.svg" alt="Dropdown Icon"
                                class="w-3.5 h-3.5 ml-1.5 transition-transform duration-300" />
                        </button>
                        <div id="user-dropdown-menu"
                            class="hidden absolute right-0 mt-2 w-48 bg-[#F3F4F6] rounded-[0.8rem] shadow-[0_0_20px_rgba(0,0,0,0.2)] z-50 py-1">
                            <a href="{{ route('profile.edit') }}"
                                class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 border-b border-gray-300">
                                <img src="{{ asset('images/person-24-regular.svg') }}" alt="Profile Icon" class="w-4 h-4" />
                                Profile Settings
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="flex items-center gap-2 w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-200">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @elseguest
                    <div>
                        <a href="{{ route('login') }}"
                            class="text-black border border-black px-3 py-1 rounded-full font-semibold hover:bg-gray-100 transition">
                            Login
                        </a>
                    </div>
                @endauth
            </div>

            <div id="nav-links" class="flex justify-center sm:justify-end space-x-6 sm:space-x-10 mt-0">
                <a href="{{ request()->routeIs('guest.home') ? '#top' : route('guest.home') }}"
                    class="active-link nav-link text-sm sm:text-base font-bold tracking-wide pb-3 border-b-2
   {{ request()->routeIs('dashboard') ? 'text-samsungBlue border-samsungBlue' : 'text-black border-transparent' }}
   hover:text-black hover:border-black">
                    Home
                </a>
                <a href="#sessions"
                    class="nav-link text-sm sm:text-base font-bold tracking-wide text-black pb-3 border-b-2 border-transparent hover:text-black hover:border-black">
                    Sessions
                </a>
                <a href="#faqs"
                    class="nav-link text-sm sm:text-base font-bold tracking-wide text-black pb-3 border-b-2 border-transparent hover:text-black hover:border-black">
                    FAQs
                </a>
                <a href="#about"
                    class="nav-link text-sm sm:text-base font-bold tracking-wide text-black pb-3 border-b-2 border-transparent hover:text-black hover:border-black">
                    About
                </a>
            </div>
        </div>
    </nav>
</body>
