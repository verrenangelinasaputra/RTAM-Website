<x-app-layout>

    {{-- <section class="relative text-white min-h-screen flex items-center justify-center text-center overflow-hidden">

        <!-- Background Image (SVG/PNG landmark) -->
        <img src="{{ asset('images/Group 36.png') }}" alt="Asia Landmark Background"
            class="absolute inset-0 w-full h-100 object-cover pointer-events-none" />

        <!-- Overlay for gradient if needed -->

        <!-- Main Content -->
        <div class="relative z-10 px-4 py-20">
            <h1 class="font-samsungSharpBold text-4xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-[7rem] font-black leading-tight">
                2025 Knox Strategy <br class="hidden sm:block" /> Workshop
            </h1>

            <div class="mt-6">
                <p class="text-2xl md:text-3xl lg:text-4xl font-oneui700 px-4 py-2 inline-block">
                    September 9<sup>th</sup>–10<sup>th</sup>, 2025
                </p>
                <p class="font-oneui300 text-xl md:text-xl lg:text-2xl mt-2">Manila, Philippines</p>
            </div>

            <!-- Scroll indicator or CTA -->
            <div class="font-oneui400 mt-10 text-sm sm:text-base animate-bounce">
                <a href="#countdown" class="">View Details</a>
            </div>
            <div class="mt-2 text-sm sm:text-base animate-bounce">
                <a href="#countdown" class="">↓</a>
            </div>
        </div>
    </section> --}}

    <section class="relative text-white min-h-screen flex items-center justify-center text-center overflow-hidden">

        <!-- Background Image -->
        <img src="{{ asset('images/Group 36.png') }}" alt="Asia Landmark Background"
            class="absolute inset-0 w-full h-full object-cover pointer-events-none" />

        <!-- Overlay jika perlu -->
        {{-- <div class="absolute inset-0 bg-black/50 z-0"></div> --}}

        <!-- Content -->
        <div class="relative z-10 px-4 py-20">
            <h1 class="font-samsungSharpBold font-black leading-tight text-[clamp(2.5rem,6vw,7rem)]">
                2025 Knox Strategy <br class="hidden sm:block" /> Workshop
            </h1>

            <div class="mt-6">
                <p class="text-[clamp(1rem,2vw,2rem)] font-oneui700 px-4 py-2 inline-block">
                    September 9<sup>th</sup>–10<sup>th</sup>, 2025
                </p>
                <p class="font-oneui300 text-[clamp(0.8rem,1.2vw,1.5rem)] mt-2">
                    Manila, Philippines
                </p>
            </div>

            <!-- CTA -->
            <div class="font-oneui400 mt-10 text-[clamp(0.75rem,1vw,1rem)] animate-bounce">
                <a href="#sessions">View Details</a>
            </div>
            <div class="mt-2 text-[clamp(0.75rem,1vw,1rem)] animate-bounce">
                <a href="#sessions">↓</a>
            </div>
        </div>
    </section>



    {{-- <a href="{{ route('countdown.target') }}"> --}}
        <div class="flex flex-wrap justify-center items-center gap-1 sm:gap-2 xl:gap-2 px-2 py-10 bg-gray-100">
            <!-- Days -->
            <div id="days"
                style="background: transparent linear-gradient(95deg, #000927 0%, #006FDC 100%) 0% 0% no-repeat padding-box;"
                class="text-white rounded-xl shadow-lg text-center
               w-16 h-16 sm:w-28 sm:h-28 xl:w-32 xl:h-32 flex flex-col justify-center items-center px-2 sm:px-7 xl:px-9 py-1 sm:py-5 xl:py-7">
                <div class="text-4xl sm:text-7xl font-extrabold leading-tight">09</div>
                <div class="text-[9px] sm:text-base xl:text-lg -mt-1">Days</div>
            </div>
    
    
            <div class="text-lg sm:text-7xl font-samsungSharpRegular text-[#14299F] self-center">-</div>
    
            <!-- Hours -->
            <div id="hours"
                style="background: transparent linear-gradient(95deg, #000927 0%, #006FDC 100%) 0% 0% no-repeat padding-box;"
                class="text-white rounded-xl shadow-lg text-center
               w-16 h-16 sm:w-28 sm:h-28 xl:w-32 xl:h-32 flex flex-col justify-center items-center px-2 sm:px-7 xl:px-9 py-1 sm:py-5 xl:py-7">
                <div class="text-4xl sm:text-7xl font-extrabold leading-tight">09</div>
                <div class="text-[9px] sm:text-base xl:text-lg -mt-1">Hours</div>
            </div>
    
    
            <div class="text-lg sm:text-7xl font-samsungSharpRegular text-[#14299F] self-center">:</div>
    
            <!-- Minutes -->
            <div id="minutes"
                style="background: transparent linear-gradient(95deg, #000927 0%, #006FDC 100%) 0% 0% no-repeat padding-box;"
                class="text-white rounded-xl shadow-lg text-center
               w-16 h-16 sm:w-28 sm:h-28 xl:w-32 xl:h-32 flex flex-col justify-center items-center px-2 sm:px-7 xl:px-9 py-1 sm:py-5 xl:py-7">
                <div class="text-4xl sm:text-7xl font-extrabold leading-tight">09</div>
                <div class="text-[9px] sm:text-base xl:text-lg -mt-1">Minutes</div>
            </div>
    
            <div class="text-lg sm:text-7xl font-samsungSharpRegular text-[#14299F] self-center">:</div>
    
            <!-- Seconds -->
            <div id="seconds"
                style="background: transparent linear-gradient(95deg, #000927 0%, #006FDC 100%) 0% 0% no-repeat padding-box;"
                class="text-white rounded-xl shadow-lg text-center
               w-16 h-16 sm:w-28 sm:h-28 xl:w-32 xl:h-32 flex flex-col justify-center items-center px-2 sm:px-7 xl:px-9 py-1 sm:py-5 xl:py-7">
                <div class="text-4xl sm:text-7xl font-extrabold leading-tight">09</div>
                <div class="text-[9px] sm:text-base xl:text-lg -mt-1">Seconds</div>
            </div>
        </div>

        <p class="font-samsungSharpMedium text-xs sm:text-base md:text-lg xl:text-xl text-black text-center">
            to go until
            <span class="font-samsungSharpBold text-lg sm:text-2xl md:text-3xl xl:text-4xl">
              2025 Knox Strategy Workshops
            </span>
          </p>
          
    {{-- </a> --}}

    <div class="flex flex-col justify-center items-center gap-10 mt-6">
        <p class="font-samsungSharpMedium text-[10px] md:text-xs lg:text-sm text-black text-center">
            Register to view event details
        </p>
        <a href="{{ route('register') }}"
            class=" text-white bg-samsungBlue border border-samsungBlue px-6 py-1 rounded-full hover:bg-black hover:border-black transition text-xs md:text-sm lg:text-sm -mt-9">
            Register Now
        </a>
    </div>

    {{-- <h2 class="mt-10 font-samsungSharpBold  text-2xl md:text-3xl lg:text-4xl font-black text-center text-black mb-10">
        Sessions
    </h2> --}}

    <section id="sessions" class="max-w-4xl mx-auto px-4 py-10 mt-16" x-data="{ activeDay: 1, activeModal: null }">

        <h2 class="font-samsungSharpBold text-2xl md:text-3xl lg:text-4xl font-black text-center text-black mb-10">
            Sessions
        </h2>

        <!-- Tabs -->
        <div class="flex justify-center space-x-4 sm:space-x-6 md:space-x-8 mb-8 flex-wrap gap-2">
            <button @click="activeDay = 1"
                :class="activeDay === 1 ?
                    'font-oneui400 text-white px-6 sm:px-8 md:px-12 py-1 rounded-full transition text-xs sm:text-sm md:text-base' :
                    'font-oneui400 bg-[#f6f6f6] border border-black text-black px-6 sm:px-8 md:px-12 py-1 rounded-full transition text-xs sm:text-sm md:text-base hover:bg-black hover:text-white'"
                :style="activeDay === 1 ? 'background: linear-gradient(85deg, #000927 0%, #006FDC 100%);' : ''">
                Day 1
            </button>

            <button @click="activeDay = 2"
                :class="activeDay === 2 ?
                    'font-oneui400 text-white px-6 sm:px-8 md:px-12 py-1 rounded-full transition text-xs sm:text-sm md:text-base' :
                    'font-oneui400 bg-[#f6f6f6] border border-black text-black px-6 sm:px-8 md:px-12 py-1 rounded-full transition text-xs sm:text-sm md:text-base hover:bg-black hover:text-white'"
                :style="activeDay === 2 ? 'background: linear-gradient(85deg, #000927 0%, #006FDC 100%);' : ''">
                Day 2
            </button>

            <button @click="activeDay = 3"
                :class="activeDay === 3 ?
                    'font-oneui400 text-white px-6 sm:px-8 md:px-12 py-1 rounded-full transition text-xs sm:text-sm md:text-base' :
                    'font-oneui400 bg-[#f6f6f6] border border-black text-black px-6 sm:px-8 md:px-12 py-1 rounded-full transition text-xs sm:text-sm md:text-base hover:bg-black hover:text-white'"
                :style="activeDay === 3 ? 'background: linear-gradient(85deg, #000927 0%, #006FDC 100%);' : ''">
                Day 3
            </button>
        </div>

        <!-- Day 1 -->
        <div x-show="activeDay === 1" x-cloak>
            <div x-show="activeDay === 1" x-cloak class="space-y-6">

                <!-- Item 1 -->
                <div @click="activeModal = 'item'"
                    class="border-b border-gray-300 pb-4 flex items-start justify-between cursor-pointer hover:bg-gray-50 transition">
                    <div class="flex flex-col md:flex-row md:items-baseline md:gap-20">
                        <p class="text-sm md:text-lg text-black whitespace-nowrap font-oneui400">
                            09.00 - 12.00
                        </p>
                        <div>
                            <h3 class="text-base md:text-xl font-semibold text-black font-oneui600">
                                Knox E-FOTA Deep Dive
                            </h3>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Speaker
                                    A</span>
                                <span
                                    class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Speaker
                                    B</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div @click="activeModal = 'item'"
                    class="border-b border-gray-300 pb-4 flex items-start justify-between cursor-pointer hover:bg-gray-50 transition">
                    <div class="flex flex-col md:flex-row md:items-baseline md:gap-20">
                        <p class="text-sm md:text-lg text-black whitespace-nowrap font-oneui400">
                            13.00 - 15.00
                        </p>
                        <div>
                            <h3 class="text-base md:text-xl font-semibold text-black font-oneui600">
                                Knox Guard
                            </h3>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Speaker
                                    C</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mt-2 md:mt-0">
                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 -ml-2"></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Day 2 -->
        <div x-show="activeDay === 2" x-cloak>
            <div x-show="activeDay === 2" x-cloak class="space-y-6">

                <!-- Item 1 -->
                <div @click="activeModal = 'item'"
                    class="border-b border-gray-300 pb-4 flex items-start justify-between cursor-pointer hover:bg-gray-50 transition">
                    <div class="flex flex-col md:flex-row md:items-baseline md:gap-20">
                        <p class="text-sm md:text-lg text-black whitespace-nowrap font-oneui400">
                            09.00 - 12.00
                        </p>
                        <div>
                            <h3 class="text-base md:text-xl font-semibold text-black font-oneui600">
                                Knox Mobile Enrollment
                            </h3>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Speaker
                                    A</span>
                                <span
                                    class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Speaker
                                    B</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div @click="activeModal = 'item'"
                    class="border-b border-gray-300 pb-4 flex items-start justify-between cursor-pointer hover:bg-gray-50 transition">
                    <div class="flex flex-col md:flex-row md:items-baseline md:gap-20">
                        <p class="text-sm md:text-lg text-black whitespace-nowrap font-oneui400">
                            13.00 - 15.00
                        </p>
                        <div>
                            <h3 class="text-base md:text-xl font-semibold text-black font-oneui600">
                                Knox Manage
                            </h3>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Speaker
                                    C</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mt-2 md:mt-0">
                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 -ml-2"></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Day 3 -->
        <div x-show="activeDay === 3" x-cloak>
            <div x-show="activeDay === 3" x-cloak class="space-y-6">

                <!-- Item 1 -->
                <div @click="activeModal = 'item'"
                    class="border-b border-gray-300 pb-4 flex items-start justify-between cursor-pointer hover:bg-gray-50 transition">
                    <div class="flex flex-col md:flex-row md:items-baseline md:gap-20">
                        <p class="text-sm md:text-lg text-black whitespace-nowrap font-oneui400">
                            09.00 - 12.00
                        </p>
                        <div>
                            <h3 class="text-base md:text-xl font-semibold text-black font-oneui600">
                                Knox Capture
                            </h3>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Speaker
                                    A</span>
                                <span
                                    class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Speaker
                                    B</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div @click="activeModal = 'item'"
                    class="border-b border-gray-300 pb-4 flex items-start justify-between cursor-pointer hover:bg-gray-50 transition">
                    <div class="flex flex-col md:flex-row md:items-baseline md:gap-20">
                        <p class="text-sm md:text-lg text-black whitespace-nowrap font-oneui400">
                            13.00 - 15.00
                        </p>
                        <div>
                            <h3 class="text-base md:text-xl font-semibold text-black font-oneui600">
                                Samsung Care+
                            </h3>
                            <div class="mt-2 flex flex-wrap gap-2">
                                <span
                                    class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Speaker
                                    C</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center mt-2 md:mt-0">
                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 -ml-2"></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Modal (cukup sekali aja, jangan diulang di setiap day) -->
        <div x-show="activeModal" x-cloak
            class="fixed inset-0 bg-white/30 backdrop-blur-lg flex items-center justify-center z-[9999]">
            <div class="bg-white rounded-2xl shadow-lg w-[90%] max-w-md p-8 text-center relative">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4 font-samsungSharpBold">
                    Oops! Access Restricted
                </h2>
                <p class="text-gray-700 mb-6 text-sm md:text-base font-oneui400">
                    You need to be logged in to view this session’s details.
                    Please log in or create an account to continue.
                </p>
                <a href="{{ route('register') }}"
                    class="text-white bg-samsungBlue border border-samsungBlue px-6 py-1.5 rounded-full hover:bg-black hover:border-black transition text-xs md:text-sm lg:text-sm -mt-9">
                    Register Now
                </a>
                <p class="mt-4 text-xs text-gray-500 font-oneui400">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Log in</a>
                </p>
                <button @click="activeModal = null"
                    class="absolute top-4 right-4 text-gray-500 hover:text-black text-xl">&times;
                </button>
            </div>
        </div>

    </section>







    <h2 class="font-samsungSharpBold text-2xl md:text-3xl lg:text-4xl font-black text-center text-black mb-10">Speakers
    </h2>

    <div class="font-samsungSharpBold max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 px-2 py-10">
        <!-- Speaker 1 -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                class="w-40 h-52 md:w-48 md:h-60 object-cover rounded-[30%] shadow border" />
            <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane</p>
            <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P</p>

        </div>

        <!-- Speaker 2 -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                class="w-40 h-52 md:w-48 md:h-60 object-cover rounded-[30%] shadow border" />
            <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane</p>
            <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P</p>
        </div>

        <!-- Speaker 3 -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                class="w-40 h-52 md:w-48 md:h-60 object-cover rounded-[30%] shadow border" />
            <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane</p>
            <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P</p>
        </div>

        <!-- Speaker 4 -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                class="w-40 h-52 md:w-48 md:h-60 object-cover rounded-[30%] shadow border" />
            <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane</p>
            <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P</p>
        </div>

        <!-- Speaker 5 -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                class="w-40 h-52 md:w-48 md:h-60 object-cover rounded-[30%] shadow border" />
            <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane</p>
            <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P</p>
        </div>

        <!-- Speaker 6 -->
        <div class="flex flex-col items-center">
            <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                class="w-40 h-52 md:w-48 md:h-60 object-cover rounded-[30%] shadow border" />
            <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane</p>
            <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P</p>
        </div>
    </div>



    <section id="faqs" class="max-w-4xl mx-auto px-4 py-10 mt-16" x-data="{ activeIndex: null }">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-black text-center text-black mb-10">Frequently Asked Questions
        </h2>

        <div class="space-y-4">

            <!-- FAQ 1 -->
            <!-- FAQ 1 -->
            <div class="faq-item border-b border-gray-300 pb-4" :class="{ 'bg-gray-100': activeIndex === 1 }">
                <button @click="activeIndex === 1 ? activeIndex = null : activeIndex = 1"
                    class="flex justify-between items-center w-full text-left">
                    <span class="text-sm md:text-xl lg:text-xl font-semibold text-black">
                        What is the Strategy Workshop about?
                    </span>
                    <svg :class="{
                        'rotate-180': activeIndex === 1,
                        'rotate-0': activeIndex !== 1
                    }"
                        class="w-5 h-5 transform transition-transform duration-300 ease-in-out" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="activeIndex === 1" x-cloak
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 -translate-y-4 max-h-0"
                    x-transition:enter-end="opacity-100 translate-y-0 max-h-40"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 max-h-40"
                    x-transition:leave-end="opacity-0 -translate-y-4 max-h-0"
                    class="mt-3 text-xs md:text-sm lg:text-sm text-gray-600 overflow-hidden">
                    The Strategy Workshop is designed to align teams, identify key goals for 2025, and build actionable
                    business strategies.
                </div>


            </div>



            <!-- FAQ 2 -->
            <div class="faq-item border-b border-gray-300 pb-4" :class="{ 'bg-gray-100': activeIndex === 2 }">
                <button @click="activeIndex === 2 ? activeIndex = null : activeIndex = 2"
                    class="flex justify-between items-center w-full text-left">
                    <span class="text-sm md:text-xl lg:text-xl font-semibold text-black">Do I need to prepare anything
                        before the
                        event?</span>
                    <svg :class="{
                        'rotate-180': activeIndex === 1,
                        'rotate-0': activeIndex !== 1
                    }"
                        class="w-5 h-5 transform transition-transform duration-300 ease-in-out" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="activeIndex === 2" x-cloak
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 -translate-y-4 max-h-0"
                    x-transition:enter-end="opacity-100 translate-y-0 max-h-40"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 max-h-40"
                    x-transition:leave-end="opacity-0 -translate-y-4 max-h-0"
                    class="mt-3 text-xs md:text-sm lg:text-sm text-gray-600 overflow-hidden">
                    Yes, please bring your team’s 2024 performance insights and any relevant strategic plans.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item border-b border-gray-300 pb-4" :class="{ 'bg-gray-100': activeIndex === 3 }">
                <button @click="activeIndex === 3 ? activeIndex = null : activeIndex = 3"
                    class="flex justify-between items-center w-full text-left">
                    <span class="text-sm md:text-xl lg:text-xl font-semibold text-black">Can I attend the workshop
                        remotely?</span>
                    <svg :class="{
                        'rotate-180': activeIndex === 3,
                        'rotate-0': activeIndex !== 3
                    }"
                        class="w-5 h-5 transform transition-transform duration-300 ease-in-out" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="activeIndex === 3" x-cloak
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 -translate-y-4 max-h-0"
                    x-transition:enter-end="opacity-100 translate-y-0 max-h-40"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 max-h-40"
                    x-transition:leave-end="opacity-0 -translate-y-4 max-h-0"
                    class="mt-3 text-xs md:text-sm lg:text-sm text-gray-600 overflow-hidden">
                    Yes, remote attendance is possible via Zoom. Details will be provided closer to the event.
                </div>



            </div>

            <!-- Tambah FAQ lain manual disini -->
            <!-- FAQ 4 -->
            <div class="faq-item border-b border-gray-300 pb-4" :class="{ 'bg-gray-100': activeIndex === 4 }">
                <button @click="activeIndex === 4 ? activeIndex = null : activeIndex = 4"
                    class="flex justify-between items-center w-full text-left">
                    <span class="text-sm md:text-xl lg:text-xl font-semibold text-black">Can I attend the workshop
                        remotely?</span>
                    <svg :class="{
                        'rotate-180': activeIndex === 4,
                        'rotate-0': activeIndex !== 4
                    }"
                        class="w-5 h-5 transform transition-transform duration-300 ease-in-out" fill="none"
                        stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <div x-show="activeIndex === 4" x-cloak
                    x-transition:enter="transition ease-out duration-300 transform"
                    x-transition:enter-start="opacity-0 -translate-y-4 max-h-0"
                    x-transition:enter-end="opacity-100 translate-y-0 max-h-40"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0 max-h-40"
                    x-transition:leave-end="opacity-0 -translate-y-4 max-h-0"
                    class="mt-3 text-xs md:text-sm lg:text-sm text-gray-600 overflow-hidden">
                    Yes, remote attendance is possible via Zoom. Details will be provided closer to the event.
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-black text-white border-t border-white/20">
        <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
            <!-- kiri: teks ganti tampil sesuai screen size -->
            <p
                class="font-samsungSharpRegular font-light text-xs md:text-xl lg:text-base leading-tight whitespace-normal max-w-[200px] sm:max-w-none">
                <!-- Versi mobile: 2 baris dengan br dan | di baris pertama -->
                <span class="block sm:hidden">
                    Samsung Research Indonesia <span>|</span><br />
                    Samsung Research Philippines
                </span>
                <!-- Versi desktop/tablet: satu baris -->
                <span class="hidden sm:inline">
                    Samsung Research Indonesia &nbsp;|&nbsp; Samsung Research Philippines
                </span>
            </p>

            <div class="text-center">
                <a href="mailto:contact@samsung.com"
                    class="font-oneui400 inline-block text-[10px] md:text-xs lg:text-sm border border-white rounded-full px-4 py-1 hover:bg-white hover:text-black transition">
                    Contact Us
                </a>
            </div>
        </div>
    </footer>


</x-app-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil semua link navigasi
        const navLinks = document.querySelectorAll('.nav-link');

        // Tambahkan event listener ke setiap link
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                // Hapus class active dari semua link
                navLinks.forEach(l => l.classList.remove('active'));
                // Tambahkan class active ke link yang diklik
                this.classList.add('active');
            });
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
</script>
