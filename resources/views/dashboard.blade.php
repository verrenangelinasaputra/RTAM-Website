<x-app-layout>
    <section class="relative text-white min-h-screen flex items-center justify-center text-center overflow-hidden">

        <!-- Background Image -->
        <img src="{{ asset('images/Group 36.png') }}" alt="Asia Landmark Background"
            class="absolute inset-0 w-full h-full object-cover pointer-events-none" />

        <!-- Overlay jika perlu -->
        {{-- <div class="absolute inset-0 bg-black/50 z-0"></div> --}}

        <!-- Content -->
        <div class="relative z-10 px-4 py-20 min-h-[300px] sm:min-h-[600px]">
            <h1 class="font-samsungSharpBold font-black leading-tight text-[clamp(2.5rem,6vw,7rem)]">
                2025 Knox Strategy <br class="hidden sm:block" /> Workshop
            </h1>

            <div class="mt-6">
                <p class="text-[clamp(1rem,2vw,2rem)] font-oneui700 font-black px-4 py-2 inline-block">
                    September 9<sup>th</sup>–10<sup>th</sup>, 2025
                </p>
                <p class="font-oneui300 text-[clamp(0.8rem,1.2vw,1.5rem)] mt-2 font-black">
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

    <div class="flex justify-center space-x-10 sm:space-x-10 md:space-x-20 items-center mt-10">
        <div class="text-center">
            <p class="text-sm md:text-xl lg:text-xl">September 9th, 2025</p>
            <p class="text-xs md:text-base lg:text-sm font-black mb-5">Date</p>
            <a href="{{ route('register') }}"
                class="text-white bg-samsungBlue border border-samsungBlue px-6 py-1 rounded-full font-semibold hover:bg-black hover:border-black transition text-xs md:text-sm lg:text-sm">
                Add to Calendar
            </a>
        </div>

        <!-- Block 2: Location -->
        <div class="text-center">
            <p class="text-sm md:text-xl lg:text-xl">Manila, Philippines</p>
            <p class="text-xs md:text-base lg:text-sm font-black mb-5">Location</p>
            <a href="{{ route('login') }}"
                class="text-black border border-black px-8 py-1 rounded-full font-semibold hover:bg-black hover:text-white transition text-xs md:text-sm lg:text-sm">
                View Location
            </a>
        </div>
    </div>

    <section id="sessions" class="max-w-4xl mx-auto px-4 py-10 mt-16" x-data="{
        activeDay: 1,
        observer: null,
    
        init() {
            this.setupObserver();
            this.$watch('activeDay', () => {
                this.$nextTick(() => this.refreshObservedItems());
            });
            this.$nextTick(() => this.refreshObservedItems());
        },
    
        setupObserver() {
            this.observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    const el = entry.target;
                    const data = el.__x?.$data;
                    if (!data || !('open' in data)) return;
                    if (entry.isIntersecting) {
                        data.open = true;
                    }
                });
            }, {
                threshold: 0.3,
                rootMargin: '0px 0px -20% 0px'
            });
        },
    
        refreshObservedItems() {
            if (!this.observer) return;
            this.observer.disconnect();
            const container = document.querySelector('#sessions');
            const items = Array.from(container.querySelectorAll('[data-session-item]'))
                .filter(el => el.offsetParent !== null);
            items.forEach(el => this.observer.observe(el));
        },
    
        openSession(id, day) {
            this.activeDay = day;
        
            this.$nextTick(() => {
                const wait = setInterval(() => {
                    const target = document.getElementById(id);
        
                    // cek apakah target sudah ada & visible
                    if (target && target.offsetParent !== null) {
                        clearInterval(wait);
        
                        // scroll smooth
                        const y = target.getBoundingClientRect().top + window.scrollY - 120;
                        window.scrollTo({ top: y, behavior: 'smooth' });
        
                        // tunggu Alpine siap
                        Alpine.nextTick(() => {
                            const dropdown = target.__x?.$data;
                            if (dropdown) {
                                dropdown.open = true;        // buka dropdown
                                dropdown.forceOpen = true;   // override observer/filter
                                dropdown.manualOpen = true;  // tandai manual
                            }
        
                            // highlight session sebentar
                            target.classList.add('bg-gray-300');
                            setTimeout(() => target.classList.remove('bg-gray-300'), 1500);
        
                            // refresh observer
                            this.refreshObservedItems();
                        });
                    }
                }, 50);
        
                // timeout maksimal 5 detik
                setTimeout(() => clearInterval(wait), 5000);
            });
        }
        
    }" x-init="init()">



        <h2 class="font-samsungSharpBold text-2xl md:text-3xl lg:text-4xl font-black text-center text-black mb-10">
            Sessions
        </h2>

        <!-- Tabs -->
        <div class="flex justify-center space-x-4 sm:space-x-6 md:space-x-20 mb-8 flex-wrap gap-2">
            <button @click="activeDay = 1"
                :class="activeDay === 1 ?
                    'font-oneui400 text-white px-6 sm:px-8 md:px-20 py-0.5 rounded-full transition text-xs sm:text-sm md:text-base' :
                    'font-oneui400 bg-[#f6f6f6] border border-black text-black px-6 sm:px-8 md:px-20 py-0.5 rounded-full transition text-xs sm:text-sm md:text-base hover:bg-black hover:text-white'"
                :style="activeDay === 1 ? 'background: linear-gradient(85deg, #000927 0%, #006FDC 100%);' : ''">
                Day 1
            </button>

            <button @click="activeDay = 2"
                :class="activeDay === 2 ?
                    'font-oneui400 text-white px-6 sm:px-8 md:px-20 py-0.5 rounded-full transition text-xs sm:text-sm md:text-base' :
                    'font-oneui400 bg-[#f6f6f6] border border-black text-black px-6 sm:px-8 md:px-20 py-0.5 rounded-full transition text-xs sm:text-sm md:text-base hover:bg-black hover:text-white'"
                :style="activeDay === 2 ? 'background: linear-gradient(85deg, #000927 0%, #006FDC 100%);' : ''">
                Day 2
            </button>

            <button @click="activeDay = 3"
                :class="activeDay === 3 ?
                    'font-oneui400 text-white px-6 sm:px-8 md:px-20 py-0.5 rounded-full transition text-xs sm:text-sm md:text-base' :
                    'font-oneui400 bg-[#f6f6f6] border border-black text-black px-6 sm:px-8 md:px-20 py-0.5 rounded-full transition text-xs sm:text-sm md:text-base hover:bg-black hover:text-white'"
                :style="activeDay === 3 ? 'background: linear-gradient(85deg, #000927 0%, #006FDC 100%);' : ''">
                Day 3
            </button>
        </div>

        <div x-data="{ open: false }" class="relative w-fit max-w-full ml-4" id="user-dropdown-container">
            <!-- Filter Button -->
            <button @click="open = !open" id="user-dropdown-button" type="button"
                class="gap-3 relative flex items-center justify-center min-w-[90px] 
               text-[10px] sm:text-xs md:text-sm text-black bg-[#F6F6F6] 
               border border-black hover:bg-white px-3 py-1 rounded-full 
               focus:outline-none focus:ring-1 focus:ring-blue-500 transition">
                <span class="truncate">Filter</span>
                <img src="/images/down-arrow.png" alt="Dropdown Icon"
                    class="w-3 h-2 ml-1.5 transition-transform duration-300"
                    :class="{ 'rotate-180': open }" />
            </button>
        
            <!-- Main Dropdown -->
            <div x-show="open" @click.outside="open = false" x-cloak
                class="absolute mt-2 w-56 bg-[#F3F4F6] rounded-[0.8rem] 
                shadow-[0_0_20px_rgba(0,0,0,0.2)] z-50 py-1"
                style="right:-130px;">
        
                <!-- Topics Section -->
                <div x-data="{ tOpen: false }" class="border-b border-gray-200">
                    <button @click="tOpen = !tOpen"
                        class="flex justify-between w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <span>Topics</span>
                        <svg :class="{ 'rotate-180': tOpen }" class="w-4 h-4 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="tOpen" x-cloak class="px-6 py-2 space-y-2">
                        <!-- Knox Guard -->
                        <label class="flex items-center gap-2 text-sm text-gray-700">
                            <input type="checkbox" :checked="$store.filters.topics.includes('Knox Guard')"
                                @change="
                                  $event.target.checked
                                    ? !$store.filters.topics.includes('Knox Guard') && $store.filters.topics.push('Knox Guard')
                                    : $store.filters.topics = $store.filters.topics.filter(t => t !== 'Knox Guard')
                                "
                                class="form-checkbox">
                            Knox Guard
                        </label>
        
                        <!-- Knox Admin Portal -->
                        <label class="flex items-center gap-2 text-sm text-gray-700">
                            <input type="checkbox" :checked="$store.filters.topics.includes('Knox Admin Portal')"
                                @change="
                                  $event.target.checked
                                    ? !$store.filters.topics.includes('Knox Admin Portal') && $store.filters.topics.push('Knox Admin Portal')
                                    : $store.filters.topics = $store.filters.topics.filter(t => t !== 'Knox Admin Portal')
                                "
                                class="form-checkbox">
                            Knox Admin Portal
                        </label>
        
                        <!-- Cloud -->
                        <label class="flex items-center gap-2 text-sm text-gray-700">
                            <input type="checkbox" :checked="$store.filters.topics.includes('Knox Mobile Enrollment')"
                                @change="
                                  $event.target.checked
                                    ? !$store.filters.topics.includes('Knox Mobile Enrollment') && $store.filters.topics.push('Knox Mobile Enrollment')
                                    : $store.filters.topics = $store.filters.topics.filter(t => t !== 'Knox Mobile Enrollment')
                                "
                                class="form-checkbox">
                            Knox Mobile Enrollment
                        </label>
        
                        <!-- Clear Button -->
                        <button class="mt-2 text-xs underline text-gray-600"
                            @click="$store.filters.topics = []">
                            Clear topics
                        </button>
                    </div>
                </div>
        
                <!-- Speaker Section -->
                <div x-data="{ sOpen: false }">
                    <button @click="sOpen = !sOpen"
                        class="flex justify-between w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <span>Speaker</span>
                        <svg :class="{ 'rotate-180': sOpen }" class="w-4 h-4 transform transition-transform"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="sOpen" x-cloak class="px-6 py-2 space-y-2">
                        <!-- Mary Jane -->
                        <label class="flex items-center gap-2 text-sm text-gray-700">
                            <input type="checkbox" :checked="$store.filters.speakers.includes('Mary Jane')"
                                @change="
                                  $event.target.checked
                                    ? !$store.filters.speakers.includes('Mary Jane') && $store.filters.speakers.push('Mary Jane')
                                    : $store.filters.speakers = $store.filters.speakers.filter(s => s !== 'Mary Jane')
                                "
                                class="form-checkbox">
                            Mary Jane
                        </label>
        
                        <!-- Spencer Owen -->
                        <label class="flex items-center gap-2 text-sm text-gray-700">
                            <input type="checkbox" :checked="$store.filters.speakers.includes('Spencer Owen')"
                                @change="
                                  $event.target.checked
                                    ? !$store.filters.speakers.includes('Spencer Owen') && $store.filters.speakers.push('Spencer Owen')
                                    : $store.filters.speakers = $store.filters.speakers.filter(s => s !== 'Spencer Owen')
                                "
                                class="form-checkbox">
                            Spencer Owen
                        </label>
        
                        <!-- Angela Kim -->
                        <label class="flex items-center gap-2 text-sm text-gray-700">
                            <input type="checkbox" :checked="$store.filters.speakers.includes('Angela Kim')"
                                @change="
                                  $event.target.checked
                                    ? !$store.filters.speakers.includes('Angela Kim') && $store.filters.speakers.push('Angela Kim')
                                    : $store.filters.speakers = $store.filters.speakers.filter(s => s !== 'Angela Kim')
                                "
                                class="form-checkbox">
                            Angela Kim
                        </label>
        
                        <!-- Tommy Lee -->
                        <label class="flex items-center gap-2 text-sm text-gray-700">
                            <input type="checkbox" :checked="$store.filters.speakers.includes('Tommy Lee')"
                                @change="
                                  $event.target.checked
                                    ? !$store.filters.speakers.includes('Tommy Lee') && $store.filters.speakers.push('Tommy Lee')
                                    : $store.filters.speakers = $store.filters.speakers.filter(s => s !== 'Tommy Lee')
                                "
                                class="form-checkbox">
                            Tommy Lee
                        </label>
        
                        <!-- Clear Button -->
                        <button class="mt-2 text-xs underline text-gray-600"
                            @click="$store.filters.speakers = []">
                            Clear speakers
                        </button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Day 1 -->
        <div x-data="{ day: '', session: '', openModal: false, openToast: false, toastMessage: '' }" x-show="activeDay === 1" x-cloak>
            <div x-show="activeDay === 1" x-cloak>

 
                <!-- Item 1 -->
                <div id="day1-session1" 
                data-session-item 
                data-topics="Knox Guard,Knox Admin Portal"
                data-speakers="Mary Jane,Donny Kim"
                x-data="{
                   open: false,
                   forceOpen: false,
                   manualOpen: false,  // << tambahan
                   topics: [],
                   speakers: [],
                   isVisible() {
                       const hasTopicFilter = $store.filters.topics.length > 0;
                       const hasSpeakerFilter = $store.filters.speakers.length > 0;
            
                       if (!hasTopicFilter && !hasSpeakerFilter) return true;
            
                       const topicMatch = this.topics.some(t => $store.filters.topics.includes(t));
                       const speakerMatch = this.speakers.some(s => $store.filters.speakers.includes(s));
            
                       if (hasTopicFilter && hasSpeakerFilter) {
                           return topicMatch && speakerMatch;
                       }
            
                       return (hasTopicFilter && topicMatch) || (hasSpeakerFilter && speakerMatch);
                   }
                }"
                x-init="
                   topics = $el.dataset.topics.split(',').map(s => s.trim());
                   speakers = $el.dataset.speakers.split(',').map(s => s.trim());
                "
                x-show="isVisible() || forceOpen"
                x-effect="if (!isVisible() && !forceOpen && !manualOpen) open = false"
                x-ref="session1"
                class="border-b border-gray-300 pb-4 flex flex-col hover:bg-[#F6F6F6] transition select-none p-4">
            
                    <!-- header/jam/judul/arrow — biarkan default -->
                    <div class="flex flex-col md:flex-row md:items-baseline md:gap-20" @click="open = !open; manualOpen = false">
                        <p class="text-sm md:text-lg text-black whitespace-nowrap font-oneui400">09.00 - 12.00</p>

                        <div class="flex-1 w-full">
                            <div class="flex items-center justify-between relative">
                                <h3 class="text-base md:text-xl font-semibold text-black font-oneui600 mb-0">
                                    Knox E-FOTA Deep Dive
                                </h3>
                                <div class="flex items-center gap-x-4">
                                    <div class="relative flex" x-show="!open" x-cloak>
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 z-10">
                                        </div>
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 -ml-2 z-0">
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-600 hover:text-black transition ml-2 transform"
                                        :class="{ 'rotate-180': open }">
                                        <img src="/images/down-arrow.png" alt="Arrow Down" class="w-5 h-3" />
                                    </div>
                                </div>

                                <!-- speaker popover (desktop) -->
                                <div class="hidden md:flex flex-col gap-4 items-start absolute right-0 top-full mt-2"
                                    x-show="open || forceOpen" x-cloak
                                    x-transition:enter="transition duration-300 ease-out transform"
                                    x-transition:enter-start="opacity-0 -translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition duration-200 ease-in transform"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 -translate-y-4" @click.stop>
                                    <!-- jangan toggle saat klik isi -->
                                    <div class="flex items-center gap-2 mr-10">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Mary Jane</span>
                                    </div>
                                    <div class="flex items-center gap-2 mr-10">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Donny Kim</span>
                                    </div>
                                </div>
                            </div>

                            <!-- tags -->
                            <div
                                class="mt-1 flex items-start justify-between flex-col md:flex-row md:items-center md:gap-6">
                                <div class="flex flex-wrap gap-2" @click.stop>
                                    <span
                                        class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Knox Guard</span>
                                    <span
                                        class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Knox Admin Portal</span>
                                </div>
                            </div>

                            <!-- deskripsi (mobile) -->
                            <div x-show="open" x-cloak
                                class="mt-4 text-sm text-gray-700 font-oneui400 flex flex-col gap-4 md:hidden"
                                x-transition @click.stop>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                <div class="flex flex-col gap-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Mary Jane</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Donny Kim</span>
                                    </div>
                                </div>
                            </div>

                            <!-- deskripsi (desktop) -->
                            <div x-show="open" x-cloak class="hidden md:grid grid-cols-3 gap-1 mt-2" x-transition
                                @click.stop>
                                <div class="col-span-2 text-sm text-gray-700 font-oneui400">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>

                            <!-- input untuk buka modal -->
                            <div x-data="{ openModal: false }" x-show="open" x-cloak class="mt-4" @click.stop>
                                <input type="text" placeholder="add a comment or ask a question" readonly
                                    @click.stop="
            day = 'Day 1';
            session = 'Session 1';
            openModal = true
          "
                                    class="font-oneui400 text-black placeholder:text-xs placeholder:md:text-sm placeholder:lg:text-sm placeholder-gray-400 bg-transparent border-0 border-b-2 border-gray-300 focus:border-indigo-500 focus:ring-0 cursor-pointer w-fit min-w-[180px] max-w-full" />

                                <!-- Modal -->
                                <div x-show="openModal" x-cloak
                                    class="fixed inset-0 bg-white/30 backdrop-blur-lg flex items-center justify-center z-[9999]"
                                    @click.away="openModal = false" x-transition>
                                    <div class="bg-white rounded-2xl shadow-lg w-[90%] max-w-md p-8 text-center relative"
                                        @click.stop>
                                        <h2
                                            class="text-xl md:text-2xl font-bold text-gray-900 mb-4 font-samsungSharpBold">
                                            Add a Comment or Question
                                        </h2>

                                        <p class="text-sm text-gray-600 mb-4 font-oneui400">
                                            Day: <span x-text="day"></span> | Session: <span
                                                x-text="session"></span>
                                        </p>

                                        <textarea rows="4" placeholder="Type your comment or question here..."
                                            class="w-full border border-gray-300 rounded-md p-3 text-sm resize-none focus:outline-none focus:ring-2 focus:ring-samsungBlue font-oneui400 text-gray-800 placeholder-gray-400"></textarea>

                                        <div class="mt-6 flex justify-center gap-3">
                                            <button
                                                @click="
             fetch('/session-comment', {
               method: 'POST',
               headers: {
                 'Content-Type': 'application/json',
                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
               },
               body: JSON.stringify({
                 day: 'Day 1',
                 session_id: 'day1-session1',
                 comment: $el.closest('div[x-data]').querySelector('textarea').value
               })
             })
             .then(res => res.json())
             .then(data => {
                $store.globalToast.toastMessage = data.message;
$store.globalToast.openToast = true;
                openModal = false;
              })
             .catch(err => { alert('Error sending comment'); console.error(err) });
           "
                                                class="text-white bg-samsungBlue border border-samsungBlue px-6 py-2 rounded-full text-sm hover:bg-black hover:border-black transition">
                                                Send
                                            </button>
                                        </div>

                                        <button @click="openModal = false"
                                            class="absolute top-4 right-4 text-gray-500 hover:text-black text-xl font-bold">&times;</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal block -->
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div id="day1-session2" 
                data-session-item 
                data-topics="Knox Mobile Enrollment, Knox Samsung"
                data-speakers="Mary Jane,Donny Kim"
                x-data="{
                   open: false,
                   forceOpen: false, 
                   topics: [],
                   speakers: [],
                   isVisible() {
                       const hasTopicFilter = $store.filters.topics.length > 0;
                       const hasSpeakerFilter = $store.filters.speakers.length > 0;
           
                       // kalau ga ada filter apapun → tampilkan semua
                       if (!hasTopicFilter && !hasSpeakerFilter) return true;
           
                       // cek topics
                       const topicMatch = this.topics.some(t => $store.filters.topics.includes(t));
           
                       // cek speakers
                       const speakerMatch = this.speakers.some(s => $store.filters.speakers.includes(s));
           

                       // logic AND
                       if (hasTopicFilter && hasSpeakerFilter) {
                           return topicMatch && speakerMatch;
                       }
           
                       // logic single filter
                       return (hasTopicFilter && topicMatch) || (hasSpeakerFilter && speakerMatch);
                   }
                }"
                x-init="
                   topics = $el.dataset.topics.split(',').map(s => s.trim());
                   speakers = $el.dataset.speakers.split(',').map(s => s.trim());
                "
                x-show="isVisible() || forceOpen"
                x-effect="if (!isVisible() && !forceOpen && !manualOpen) open = false"
                @click="open = !open"
                class="border-b border-gray-300 pb-4 flex flex-col cursor-pointer hover:bg-[#F6F6F6] transition select-none p-4">
           
                    <!-- header/jam/judul/arrow — biarkan default -->
                    <div class="flex flex-col md:flex-row md:items-baseline md:gap-20">
                        <p class="text-sm md:text-lg text-black whitespace-nowrap font-oneui400">09.00 - 12.00</p>

                        <div class="flex-1 w-full">
                            <div class="flex items-center justify-between relative">
                                <h3 class="text-base md:text-xl font-semibold text-black font-oneui600 mb-0">
                                    Knox E-FOTA Deep Dive
                                </h3>
                                <div class="flex items-center gap-x-4">
                                    <div class="relative flex" x-show="!open" x-cloak>
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 z-10">
                                        </div>
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 -ml-2 z-0">
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-600 hover:text-black transition ml-2 transform"
                                        :class="{ 'rotate-180': open }">
                                        <img src="/images/down-arrow.png" alt="Arrow Down" class="w-5 h-3" />
                                    </div>
                                </div>

                                <!-- speaker popover (desktop) -->
                                <div class="hidden md:flex flex-col gap-4 items-start absolute right-0 top-full mt-2"
                                    x-show="open" x-cloak
                                    x-transition:enter="transition duration-300 ease-out transform"
                                    x-transition:enter-start="opacity-0 -translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition duration-200 ease-in transform"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 -translate-y-4" @click.stop>
                                    <!-- jangan toggle saat klik isi -->
                                    <div class="flex items-center gap-2 mr-10">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Mary Jane</span>
                                    </div>
                                    <div class="flex items-center gap-2 mr-10">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Donny Kim</span>
                                    </div>
                                </div>
                            </div>

                            <!-- tags -->
                            <div
                                class="mt-1 flex items-start justify-between flex-col md:flex-row md:items-center md:gap-6">
                                <div class="flex flex-wrap gap-2" @click.stop>
                                    <span
                                        class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Knox Mobile Enrollment</span>
                                    <span
                                        class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Knox Samsung</span>
                                </div>
                            </div>

                            <!-- deskripsi (mobile) -->
                            <div x-show="open" x-cloak
                                class="mt-4 text-sm text-gray-700 font-oneui400 flex flex-col gap-4 md:hidden"
                                x-transition @click.stop>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                <div class="flex flex-col gap-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Mary Jane</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Donny Kim</span>
                                    </div>
                                </div>
                            </div>

                            <!-- deskripsi (desktop) -->
                            <div x-show="open" x-cloak class="hidden md:grid grid-cols-3 gap-1 mt-2" x-transition
                                @click.stop>
                                <div class="col-span-2 text-sm text-gray-700 font-oneui400">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>

                            <!-- input untuk buka modal -->
                            <div x-data="{ openModal: false }" x-show="open" x-cloak class="mt-4" @click.stop>
                                <input type="text" placeholder="add a comment or ask a question" readonly
                                    @click.stop="
                 day = 'Day 1';
                 session = 'Session 2';
                 openModal = true
               "
                                    class="font-oneui400 text-black placeholder:text-xs placeholder:md:text-sm placeholder:lg:text-sm placeholder-gray-400 bg-transparent border-0 border-b-2 border-gray-300 focus:border-indigo-500 focus:ring-0 cursor-pointer w-fit min-w-[180px] max-w-full" />

                                <!-- Modal -->
                                <div x-show="openModal" x-cloak
                                    class="fixed inset-0 bg-white/30 backdrop-blur-lg flex items-center justify-center z-[9999]"
                                    @click.away="openModal = false" x-transition>
                                    <div class="bg-white rounded-2xl shadow-lg w-[90%] max-w-md p-8 text-center relative"
                                        @click.stop>
                                        <h2
                                            class="text-xl md:text-2xl font-bold text-gray-900 mb-4 font-samsungSharpBold">
                                            Add a Comment or Question
                                        </h2>

                                        <p class="text-sm text-gray-600 mb-4 font-oneui400">
                                            Day: <span x-text="day"></span> | Session: <span
                                                x-text="session"></span>
                                        </p>

                                        <textarea rows="4" placeholder="Type your comment or question here..."
                                            class="w-full border border-gray-300 rounded-md p-3 text-sm resize-none focus:outline-none focus:ring-2 focus:ring-samsungBlue font-oneui400 text-gray-800 placeholder-gray-400"></textarea>

                                        <div class="mt-6 flex justify-center gap-3">
                                            <button
                                                @click="
                  fetch('/session-comment', {
                    method: 'POST',
                    headers: {
                      'Content-Type': 'application/json',
                      'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                      day: 'Day 1',
                      session_id: 'day1-session2',
                      comment: $el.closest('div[x-data]').querySelector('textarea').value
                    })
                  })
                  .then(res => res.json())
                  .then(data => {
                    $store.globalToast.toastMessage = data.message;
$store.globalToast.openToast = true;
                    openModal = false;
                  })
                  .catch(err => { alert('Error sending comment'); console.error(err) });
                "
                                                class="text-white bg-samsungBlue border border-samsungBlue px-6 py-2 rounded-full text-sm hover:bg-black hover:border-black transition">
                                                Send
                                            </button>
                                        </div>

                                        <button @click="openModal = false"
                                            class="absolute top-4 right-4 text-gray-500 hover:text-black text-xl font-bold">&times;</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal block -->
                        </div>
                    </div>
                </div>

            </div>
                     
  
            
        </div>



        <!-- Day 2 -->
        <div x-data="{ day: '', session: '', openModal: false }" x-show="activeDay === 2" x-cloak>
            <div x-show="activeDay === 2" x-cloak class="space-y-6">

                <!-- Item 1 -->
                <div id="day2-session1" data-session-item data-topics="Knox Guard,Knox Admin Portal"
                    x-data="{
                        open: false,
                        forceOpen: false, 
                        topics: [],
                        isVisible() {
                            // tampil kalau tidak ada filter, atau ada irisan antara topics card dan filter aktif
                            return $store.filters.topics.length === 0 ||
                                this.topics.some(t => $store.filters.topics.includes(t));
                        }
                    }" x-init="topics = $el.dataset.topics.split(',').map(s => s.trim())" x-show="isVisible() || forceOpen"
                    x-effect="if (!isVisible() && !forceOpen && !manualOpen) open = false" @click="open = !open"
                    class="border-b border-gray-300 pb-4 flex flex-col cursor-pointer hover:bg-[#F6F6F6] transition select-none p-4">

                    <!-- header/jam/judul/arrow — biarkan default -->
                    <div class="flex flex-col md:flex-row md:items-baseline md:gap-20">
                        <p class="text-sm md:text-lg text-black whitespace-nowrap font-oneui400">09.00 - 12.00</p>

                        <div class="flex-1 w-full">
                            <div class="flex items-center justify-between relative">
                                <h3 class="text-base md:text-xl font-semibold text-black font-oneui600 mb-0">
                                    Knox E-FOTA Deep Dive
                                </h3>
                                <div class="flex items-center gap-x-4">
                                    <div class="relative flex" x-show="!open" x-cloak>
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 z-10">
                                        </div>
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 -ml-2 z-0">
                                        </div>
                                    </div>
                                    <div class="text-sm text-gray-600 hover:text-black transition ml-2 transform"
                                        :class="{ 'rotate-180': open }">
                                        <img src="/images/down-arrow.png" alt="Arrow Down" class="w-5 h-3" />
                                    </div>
                                </div>

                                <!-- speaker popover (desktop) -->
                                <div class="hidden md:flex flex-col gap-4 items-start absolute right-0 top-full mt-2"
                                    x-show="open" x-cloak
                                    x-transition:enter="transition duration-300 ease-out transform"
                                    x-transition:enter-start="opacity-0 -translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition duration-200 ease-in transform"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 -translate-y-4" @click.stop>
                                    <!-- jangan toggle saat klik isi -->
                                    <div class="flex items-center gap-2 mr-10">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Mary Jane</span>
                                    </div>
                                    <div class="flex items-center gap-2 mr-10">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Donny Kim</span>
                                    </div>
                                </div>
                            </div>

                            <!-- tags -->
                            <div
                                class="mt-1 flex items-start justify-between flex-col md:flex-row md:items-center md:gap-6">
                                <div class="flex flex-wrap gap-2" @click.stop>
                                    <span
                                        class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Knox Guard</span>
                                    <span
                                        class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">Knox Admin Portal</span>
                                </div>
                            </div>

                            <!-- deskripsi (mobile) -->
                            <div x-show="open" x-cloak
                                class="mt-4 text-sm text-gray-700 font-oneui400 flex flex-col gap-4 md:hidden"
                                x-transition @click.stop>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                <div class="flex flex-col gap-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Mary Jane</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Donny Kim</span>
                                    </div>
                                </div>
                            </div>

                            <!-- deskripsi (desktop) -->
                            <div x-show="open" x-cloak class="hidden md:grid grid-cols-3 gap-1 mt-2" x-transition
                                @click.stop>
                                <div class="col-span-2 text-sm text-gray-700 font-oneui400">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    </p>
                                </div>
                            </div>

                            <!-- input untuk buka modal -->
                            <div x-data="{ openModal: false }" x-show="open" x-cloak class="mt-4" @click.stop>
                                <input type="text" placeholder="add a comment or ask a question" readonly
                                    @click.stop="
            day = 'Day 2';
            session = 'Session 1';
            openModal = true
          "
                                    class="font-oneui400 text-black placeholder:text-xs placeholder:md:text-sm placeholder:lg:text-sm placeholder-gray-400 bg-transparent border-0 border-b-2 border-gray-300 focus:border-indigo-500 focus:ring-0 cursor-pointer w-fit min-w-[180px] max-w-full" />

                                <!-- Modal -->
                                <div x-show="openModal" x-cloak
                                    class="fixed inset-0 bg-white/30 backdrop-blur-lg flex items-center justify-center z-[9999]"
                                    @click.away="openModal = false" x-transition>
                                    <div class="bg-white rounded-2xl shadow-lg w-[90%] max-w-md p-8 text-center relative"
                                        @click.stop>
                                        <h2
                                            class="text-xl md:text-2xl font-bold text-gray-900 mb-4 font-samsungSharpBold">
                                            Add a Comment or Question
                                        </h2>

                                        <p class="text-sm text-gray-600 mb-4 font-oneui400">
                                            Day: <span x-text="day"></span> | Session: <span
                                                x-text="session"></span>
                                        </p>

                                        <textarea rows="4" placeholder="Type your comment or question here..."
                                            class="w-full border border-gray-300 rounded-md p-3 text-sm resize-none focus:outline-none focus:ring-2 focus:ring-samsungBlue font-oneui400 text-gray-800 placeholder-gray-400"></textarea>

                                        <div class="mt-6 flex justify-center gap-3">
                                            <button
                                                @click="
             fetch('/session-comment', {
               method: 'POST',
               headers: {
                 'Content-Type': 'application/json',
                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
               },
               body: JSON.stringify({
                 day: 'Day 2',
                 session_id: 'day2-session1',
                 comment: $el.closest('div[x-data]').querySelector('textarea').value
               })
             })
             .then(res => res.json())
             .then(data => {
                $store.globalToast.toastMessage = data.message;
                $store.globalToast.openToast = true;
                openModal = false;
              })
             .catch(err => { alert('Error sending comment'); console.error(err) });
           "
                                                class="text-white bg-samsungBlue border border-samsungBlue px-6 py-2 rounded-full text-sm hover:bg-black hover:border-black transition">
                                                Send
                                            </button>
                                        </div>

                                        <button @click="openModal = false"
                                            class="absolute top-4 right-4 text-gray-500 hover:text-black text-xl font-bold">&times;</button>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal block -->
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Day 3 -->
        <div x-show="activeDay === 3" x-cloak>
            <div x-show="activeDay === 3" x-cloak class="space-y-6">

                <!-- Item 1 -->
                <div id="session-day3-item1" data-session-item x-data="{ open: false }" @click="open = !open"
                    class="border-b border-gray-300 pb-4 flex flex-col cursor-pointer hover:bg-[#F6F6F6] transition select-none p-4">

                    <div class="flex flex-col md:flex-row md:items-baseline md:gap-20">
                        <!-- Jam -->
                        <p class="text-sm md:text-lg text-black whitespace-nowrap font-oneui400">
                            09.00 - 12.00
                        </p>

                        <div class="flex-1 w-full">
                            <!-- Judul + Speaker (CLOSED) -->
                            <!-- Judul + Speaker (CLOSED/OPEN) -->
                            <div class="flex items-center justify-between relative">
                                <h3 class="text-base md:text-xl font-semibold text-black font-oneui600 mb-0">
                                    Knox E-FOTA Deep Dive
                                </h3>
                                <div class="flex items-center gap-x-4">
                                    <!-- Avatar stack ketika closed -->
                                    <div class="relative flex" x-show="!open" x-cloak>
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 z-10">
                                        </div>
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200 -ml-2 z-0">
                                        </div>
                                    </div>

                                    <!-- Arrow -->
                                    <div class="text-sm text-gray-600 hover:text-black transition ml-2 transform"
                                        :class="{ 'rotate-180': open }">
                                        <img src="/images/down-arrow.png" alt="Arrow Down" class="w-5 h-3" />
                                    </div>
                                </div>

                                <!-- Speaker container (absolute supaya tidak menggeser arrow) -->
                                <div class="hidden md:flex flex-col gap-4 items-start absolute right-0 top-full mt-2"
                                    x-show="open" x-cloak
                                    x-transition:enter="transition duration-300 ease-out transform"
                                    x-transition:enter-start="opacity-0 -translate-y-4"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition duration-200 ease-in transform"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 -translate-y-4">
                                    <div class="flex items-center gap-2 mr-10">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Mar Jane</span>
                                    </div>
                                    <div class="flex items-center gap-2 mr-10">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Donny Kim</span>
                                    </div>
                                </div>
                            </div>



                            <!-- Tags & Speaker (OPEN) -->
                            <div
                                class="mt-1 flex items-start justify-between flex-col md:flex-row md:items-center md:gap-6">
                                <!-- Tags -->
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">
                                        Knox Guard
                                    </span>
                                    <span class="px-3 py-1 bg-[#F6F6F6] border border-black rounded-full text-[11px]">
                                        Knox Admin Portal
                                    </span>
                                </div>

                                <!-- Speaker list (OPEN) -->
                            </div>

                            <!-- Dropdown Deskripsi + Speaker (Mobile Mode) -->
                            <div x-show="open" x-cloak
                                class="mt-4 text-sm text-gray-700 font-oneui400 flex flex-col gap-4 md:hidden"
                                x-transition:enter="transition duration-300 ease-out transform"
                                x-transition:enter-start="opacity-0 -translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition duration-200 ease-in transform"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4">

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                    ex ea commodo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                    fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est laborum.
                                </p>

                                <!-- Speaker untuk Mobile -->
                                <div class="flex flex-col gap-3">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Mar Jane</span>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full border border-gray-400 bg-gray-200"></div>
                                        <span class="text-sm text-black font-oneui400">Donny Kim</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Description + Speaker Grid (Desktop Layout) -->
                            <div x-show="open" x-cloak class="hidden md:grid grid-cols-3 gap-1 mt-2"
                                x-transition:enter="transition duration-300 ease-out transform"
                                x-transition:enter-start="opacity-0 -translate-y-4"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition duration-200 ease-in transform"
                                x-transition:leave-start="opacity-100 translate-y-0"
                                x-transition:leave-end="opacity-0 -translate-y-4">

                                <div class="col-span-2 text-sm text-gray-700 font-oneui400">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea
                                        commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat
                                        nulla pariatur.
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt
                                        mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

<!-- Container fixed full width di bawah -->
<div class="fixed bottom-4 inset-x-0 flex justify-center z-[9999] pointer-events-none">
    <!-- Toast actual -->
    <div 
      x-data 
      x-show="$store.globalToast.openToast" 
      x-text="$store.globalToast.toastMessage"
      class="bg-samsungBlue text-white p-3 rounded-md cursor-pointer pointer-events-auto"
      x-transition
      @click="$store.globalToast.openToast = false"
      x-effect="
        if ($store.globalToast.openToast) {
          setTimeout(() => { $store.globalToast.openToast = false }, 3000)
        }
      "
    ></div>
  </div>
  
      

        <h2
            class="mt-20 font-samsungSharpBold text-2xl md:text-3xl lg:text-4xl font-black text-center text-black mb-10">
            Speakers
        </h2>

        <div class="font-samsungSharpBold max-w-4xl mx-auto grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 px-2 py-2">
            <!-- Speaker 1 -->
            <div x-data="{ showSessions: false }" class="flex flex-col items-center group relative">
                <!-- Image Container -->
                <div class="relative w-40 h-52 md:w-48 md:h-60" @click="showSessions = !showSessions"
                    @click.away="showSessions = false">
                    <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                        class="w-full h-full object-cover rounded-[30%] shadow border" />

                    <!-- Overlay on hover or click -->
                    <div :class="showSessions ? 'opacity-100' : 'opacity-0 group-hover:opacity-100'"
                        class="absolute inset-0 bg-gradient-to-b from-black to-blue-500 text-white flex flex-col items-center justify-center transition-opacity duration-300 rounded-[30%] pointer-events-auto">
                        <p class="text-base mb-5 font-oneui700">View Sessions</p>
                        <div class="flex flex-col space-y-2 text-sm font-oneui300">
                            <span @click.stop="openSession('day1-session1', 1)" class="hover:underline">Day 1</span>

                            <span class="border-t border-white w-full"></span>
                            <span @click.stop="openSession('day2-session1', 2)"
                                class="cursor-pointer hover:underline">Day 2</span>
                            <span class="border-t border-white w-full"></span>
                            <span @click.stop="openSession('session-day3-item1', 3)"
                                class="cursor-pointer hover:underline">Day 3</span>
                        </div>
                    </div>
                </div>

                <!-- Speaker Info -->
                <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane
                </p>
                <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P
                </p>
            </div>



            <!-- Speaker 2 -->
            <div class="flex flex-col items-center group relative">
                <!-- Image Container -->
                <div class="relative w-40 h-52 md:w-48 md:h-60">
                    <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                        class="w-full h-full object-cover rounded-[30%] shadow border" />

                    <!-- Overlay on hover -->
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-black to-blue-500 text-white flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[30%]">
                        <p class="text-base mb-5 font-oneui700">View Sessions</p>
                        <div class="flex flex-col space-y-2 text-sm font-oneui300">
                            <span>Day 1</span>
                            <span class="border-t border-white w-full"></span>
                            <span>Day 2</span>
                            <span class="border-t border-white w-full"></span>
                            <span>Day 3</span>
                        </div>
                    </div>
                </div>

                <!-- Speaker Info -->
                <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane
                </p>
                <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P
                </p>
            </div>

            <!-- Speaker 3 -->
            <div class="flex flex-col items-center group relative">
                <!-- Image Container -->
                <div class="relative w-40 h-52 md:w-48 md:h-60">
                    <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                        class="w-full h-full object-cover rounded-[30%] shadow border" />

                    <!-- Overlay on hover -->
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-black to-blue-500 text-white flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[30%]">
                        <p class="text-base mb-5 font-oneui700">View Sessions</p>
                        <div class="flex flex-col space-y-2 text-sm font-oneui300">
                            <span>Day 1</span>
                            <span class="border-t border-white w-full"></span>
                            <span>Day 2</span>
                            <span class="border-t border-white w-full"></span>
                            <span>Day 3</span>
                        </div>
                    </div>
                </div>

                <!-- Speaker Info -->
                <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane
                </p>
                <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P
                </p>
            </div>

            <!-- Speaker 4 -->
            <div class="flex flex-col items-center group relative">
                <!-- Image Container -->
                <div class="relative w-40 h-52 md:w-48 md:h-60">
                    <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                        class="w-full h-full object-cover rounded-[30%] shadow border" />

                    <!-- Overlay on hover -->
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-black to-blue-500 text-white flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[30%]">
                        <p class="text-base mb-5 font-oneui700">View Sessions</p>
                        <div class="flex flex-col space-y-2 text-sm font-oneui300">
                            <span>Day 1</span>
                            <span class="border-t border-white w-full"></span>
                            <span>Day 2</span>
                            <span class="border-t border-white w-full"></span>
                            <span>Day 3</span>
                        </div>
                    </div>
                </div>

                <!-- Speaker Info -->
                <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane
                </p>
                <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P
                </p>
            </div>

            <!-- Speaker 5 -->
            <div class="flex flex-col items-center group relative">
                <!-- Image Container -->
                <div class="relative w-40 h-52 md:w-48 md:h-60">
                    <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                        class="w-full h-full object-cover rounded-[30%] shadow border" />

                    <!-- Overlay on hover -->
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-black to-blue-500 text-white flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[30%]">
                        <p class="text-base mb-5 font-oneui700">View Sessions</p>
                        <div class="flex flex-col space-y-2 text-sm font-oneui300">
                            <span>Day 1</span>
                            <span class="border-t border-white w-full"></span>
                            <span>Day 2</span>
                            <span class="border-t border-white w-full"></span>
                            <span>Day 3</span>
                        </div>
                    </div>
                </div>

                <!-- Speaker Info -->
                <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane
                </p>
                <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P
                </p>
            </div>

            <!-- Speaker 6 -->
            <div class="flex flex-col items-center group relative">
                <!-- Image Container -->
                <div class="relative w-40 h-52 md:w-48 md:h-60">
                    <img src="{{ asset('images/Group 36@2x.png') }}" alt="Mary Jane"
                        class="w-full h-full object-cover rounded-[30%] shadow border" />

                    <!-- Overlay on hover -->
                    <div
                        class="absolute inset-0 bg-gradient-to-b from-black to-blue-500 text-white flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[30%]">
                        <p class="text-base mb-5 font-oneui700">View Sessions</p>
                        <div class="flex flex-col space-y-2 text-sm font-oneui300">
                            <span>Day 1</span>
                            <span class="border-t border-white w-full"></span>
                            <span>Day 2</span>
                            <span class="border-t border-white w-full"></span>
                            <span>Day 3</span>
                        </div>
                    </div>
                </div>

                <!-- Speaker Info -->
                <p class="mt-3 text-center text-black font-oneui400 text-sm sm:text-xl xl:text-2xl font-bold">Mary Jane
                </p>
                <p class="text-center text-gray-600 font-oneui400 text-xs sm:text-lg xl:text-xl">SRIN/B2B Innovation P
                </p>
            </div>
        </div>

    </section>



    {{-- </a> --}}

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
