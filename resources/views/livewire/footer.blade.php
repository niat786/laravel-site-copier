<footer class="p-4 bg-slate-50 md:p-8 lg:p-10 dark:bg-gray-800">
    <div class="max-w-screen-xl mx-auto text-center">
        <a href="{{ url('/') }}"
            class="flex items-center justify-center pb-4 text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="{{ asset('images/httrack-online-logo-dark.webp') }}" alt="footer logo" height="200" width="300"
                class="h-auto w-52">

        </a>
        <span class="">
            <hr class="py-4 text-gray-50">
        </span>
        <ul class="flex flex-wrap items-center justify-center mb-6 text-gray-900 dark:text-white">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Premium</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">Campaigns</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Blog</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Affiliate Program</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">FAQs</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Contact</a>
            </li>
        </ul>
        <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© <span
                class="text-green-500">{{ date('Y') }}</span> <a href="{{ url('/') }}"
                class="hover:underline">HTTRACK-ONLINE</a>. All Rights Reserved.</span>
    </div>
</footer>
