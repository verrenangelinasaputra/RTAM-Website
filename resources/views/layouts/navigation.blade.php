<body id="top" class="font-sans antialiased">
    <nav class="bg-white bg-opacity-70 backdrop-blur border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6">
            <!-- Top row -->
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4 sm:gap-0 mb-4">
                <!-- Left: Judul -->
                <div
                    class="text-base sm:text-lg md:text-xl lg:text-2xl font-black text-black font-samsungSharpBold leading-tight sm:leading-none text-center sm:text-left">
                    <span class="block sm:hidden">2025 Knox B2B<br />strategy workshop</span>
                    <span class="hidden sm:block">2025 Knox B2B Strategy Workshop</span>
                </div>

                <!-- Right: Link Navigasi + Login -->
                <div class="flex flex-wrap sm:flex-nowrap items-center justify-center sm:justify-end gap-4 sm:gap-12">
                    <!-- Link navigasi -->
                    <a href="#top"
                        class="nav-link text-sm sm:text-base font-samsungSharpBold font-bold tracking-wide text-black">
                        Home
                    </a>
                    <a href="#sessions"
                        class="nav-link text-sm sm:text-base font-samsungSharpBold font-bold tracking-wide text-black">
                        Sessions
                    </a>
                    <a href="#faqs"
                        class="nav-link text-sm sm:text-base font-samsungSharpBold font-bold tracking-wide text-black ">
                        FAQs
                    </a>
                    <a href="#about"
                        class="nav-link text-sm sm:text-base font-samsungSharpBold font-bold tracking-wide text-black">
                        About
                    </a>

                    <!-- Login / User dropdown -->
                    <div class="relative w-fit">
                        @auth
                            <!-- Dropdown -->
                            <div id="user-dropdown-container">
                                <button id="user-dropdown-button" type="button"
                                    class="flex items-center text-xs sm:text-sm text-black border border-black px-3 py-1 rounded-full focus:ring-1 focus:ring-blue-500">
                                    <span
                                        class="truncate max-w-[70px] sm:max-w-none no-truncate-below-400">{{ Auth::user()->name }}</span>
                                    <img src="images/down-arrow.png" alt="Dropdown Icon" class="w-3.5 h-2.5 ml-1.5" />
                                </button>

                                <div id="user-dropdown-menu"
                                    class="hidden absolute right-0 mt-2 w-48 bg-[#F3F4F6] rounded-[0.8rem] shadow z-50 py-1 overflow-hidden">

                                    <a href="{{ route('profile.edit') }}"
                                        class="flex items-center gap-2 px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 border-b border-gray-300 rounded-t-[0.8rem] transition">
                                        <img src="{{ asset('images/person.png') }}" alt="Profile Icon" class="w-4 h-4" />
                                        <span>Profile Settings</span>
                                    </a>

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="flex items-center gap-2 w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-200 rounded-b-[0.8rem] transition">
                                            <img src="{{ asset('images/sign-out.png') }}" alt="Profile Icon"
                                                class="w-4 h-4" />
                                            <span>Log Out</span>
                                        </button>
                                    </form>

                                </div>

                            </div>
                        @endauth

                        @guest
                            <a href="{{ route('login') }}"
                                class="font-oneui400 text-white bg-samsungBlue border border-samsungBlue px-3 py-1 rounded-full hover:bg-black hover:border-black text-xs sm:text-sm">
                                Log In
                            </a>
                        @endguest
                    </div>
                </div>
            </div>

        </div>
    </nav>
</body>
