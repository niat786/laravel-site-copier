    <section>

        <div class="relative w-full overflow-hidden">
            <header class="absolute top-0 left-0 flex justify-center w-full">
                <nav class="absolute w-full">
                    <div class="relative z-30 bg-white dark:bg-gray-600">
                        <div class="container m-auto md:px-12 lg:py-0 lg:px-10">
                            <div class="flex flex-wrap items-center justify-between gap-6 py-4 md:gap-0">
                                <input type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer">
                                <div class="z-30 flex justify-between w-full px-6 md:w-max md:px-0">
                                    <a href="{{ url('/') }}" aria-label="logo">
                                        <img width="50" height="20"
                                            src="{{ asset('/images/httrack-online-logo-dark.webp') }}"
                                            class="w-36 dark:hidden" alt="site logo">
                                        <img width="50" height="20"
                                            src="{{ asset('/images/httrack-online-logo-light.webp') }}"
                                            class="hidden w-36 dark:block" alt="site logo">
                                    </a>

                                    <div class="flex items-center md:hidden max-h-10">
                                        <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger"
                                            class="relative p-2">
                                            <div id="line"
                                                class="m-auto h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-300 transition duration-300">
                                            </div>
                                            <div id="line2"
                                                class="m-auto mt-2 h-0.5 w-6 rounded bg-sky-900 dark:bg-gray-300 transition duration-300">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <label for="toggle_nav"
                                    class="fixed top-0 left-0 z-10 hidden w-full h-full bg-green-200 peer-checked:block bg-opacity-30 backdrop-blur backdrop-filter"></label>
                                <div
                                    class="z-40 flex-col items-center justify-end hidden w-11/12 p-6 mx-auto bg-white peer-checked:flex md:mx-0 gap-y-8 rounded-xl dark:bg-gray-800 md:flex md:w-8/12 md:gap-y-0 md:gap-x-4 md:divide-x md:p-0 md:flex-row md:bg-transparent lg:w-7/12">
                                    <div class="block w-full md:w-max">
                                        <ul
                                            class="flex flex-col font-medium tracking-wide text-gray-500 gap-y-6 dark:text-gray-300 md:flex-row md:gap-y-0">
                                            <li>
                                                <a href="#" class="block md:px-4">
                                                    <div
                                                        class="relative text-green-600 dark:text-green-400 before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-1 before:mx-auto before:mt-auto before:rounded-t-full before:bg-green-500">
                                                        <span>Home</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="block md:px-4 group">
                                                    <div
                                                        class="relative group
                                                            before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:origin-left before:mt-auto before:rounded-full before:bg-green-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                        <span class="group-hover:text-green-500">Privacy Policy</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="block md:px-4 group">
                                                    <div
                                                        class="relative group
                                                            before:absolute before:-bottom-2 md:before:-bottom-7 before:w-full before:h-0.5 before:origin-left before:mt-auto before:rounded-full before:bg-green-800 before:transition before:scale-x-0 group-hover:before:scale-x-100">
                                                        <span class="group-hover:text-green-500">About</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="flex flex-col w-full gap-2 pl-2 sm:w-max min-w-max sm:flex-row">
                                        <button type="button" title="Start buying"
                                            class="w-full px-2 py-3 text-center transition rounded-xl dark:active:bg-green-900 dark:focus:bg-gray-800 active:bg-green-200 focus:bg-green-100 sm:w-max">
                                            <span class="block font-semibold text-green-600 dark:text-green-500">
                                                Login
                                            </span>
                                        </button>
                                        <button type="button" title="Start buying"
                                            class="w-full px-2 py-3 text-center transition rounded-xl dark:active:bg-green-900 dark:focus:bg-gray-800 active:bg-green-200 focus:bg-green-100 sm:w-max">
                                            <span class="block font-semibold text-green-600 dark:text-green-500">
                                                Register
                                            </span>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div aria-hidden="true"
                        class="container h-4 mx-auto -mt-6 bg-green-600/30 dark:bg-green-900/30 blur md:-mt-4"></div>
                </nav>
            </header>
            <div x-data="{ downloading: {{ $downloading }}, showDownloadBtn: {{ $showDownloadBtn }} }" class="flex dark:from-gray-900 bg-gradient-to-b from-white to-green-50">
                <div class="min-h-screen py-4 m-auto lg:container md:py-20 md:pb-0 md:pt-40 md:px-12 lg:py-0 lg:px-10">
                    <div class="flex flex-wrap gap-12 px-2 lg:px-5">
                        <div class="lg:w-6/12 lg:pt-32 lg:pb-20">
                            <div class="pt-24 space-y-8 lg:pt-6 lg:-mr-24 xl:-mr-0">
                                <h1 class="px-5 text-3xl font-bold text-gray-800 md:px-0 md:text-4xl dark:text-white">
                                    Download Complete Web Page(Template) from Any Website, Including All Assets.</h1>
                                <p class="w-full px-5 text-lg text-gray-600 md:px-0 lg:max-w-lg dark:text-gray-300">
                                    Retrieve
                                    and
                                    Download HTML
                                    Web
                                    Templates, Including Assets, for Enhanced Development Productivity.</p>


                                {{-- mobile show --}}
                                <div class="pt-6 space-y-8 lg:-mr-24 xl:-mr-0 lg:hidden">
                                    <div class="mt-8 space-y-8 lg:-mr-14 xl:-mr-0">
                                        @include('livewire.includes.form')

                                    </div>
                                </div>

                                {{-- mobile version --}}

                                <div class="pt-8 mt-8 border-t border-gray-300 dark:border-gray-700">
                                    <h2 class="font-semibold text-green-600 uppercase dark:text-green-400">Trusted
                                        by</h2>
                                    <div class="flex gap-6 mt-6">
                                        <div class="flex items-center">
                                            <img class="w-auto h-auto rounded shadow-lg -hue-rotate-30 grayscale"
                                                src="{{ asset('/images/brands/aisoul.webp') }}" width="50"
                                                height="20" alt="users">
                                        </div>

                                        <div class="flex items-center">
                                            <img class="w-auto h-auto rounded shadow-lg -hue-rotate-30 grayscale"
                                                src="{{ asset('/images/brands/inpedia.webp') }}" width="50"
                                                height="20" alt="users">
                                        </div>
                                        <div class="flex items-center">
                                            <img class="w-auto h-auto rounded shadow-lg -hue-rotate-30 grayscale"
                                                src="{{ asset('/images/brands/bbsoft.webp') }}" width="50"
                                                height="20" alt="users">
                                        </div>

                                        <div class="flex items-center">
                                            <img class="w-auto h-auto rounded shadow-lg -hue-rotate-30 grayscale"
                                                src="{{ asset('/images/brands/aimean.webp') }}" width="50"
                                                height="20" alt="users">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden lg:block lg:w-5/12 lg:pt-32 lg:pb-20">
                                <div class="mt-8 space-y-8 lg:-mr-14 xl:-mr-0">

                                    @include('livewire.includes.form')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- @livewire('features') --}}
        {{-- @livewire('testimonials') --}}
        {{-- @livewire('pricing') --}}
        @livewire('call-to-action')
        @livewire('footer')

    </section>
