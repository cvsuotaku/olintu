
<footer class="bg-white rounded-lg shadow dark:bg-gray-900">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('dashboard') }}" class="flex items-center mb-4 sm:mb-0">
                <img src="{{ asset('images/logo.png') }}" class="h-8 mr-3" alt="Olintu Logo" />
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{ route('about') }}" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="{{ route('privacy') }}" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"  class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">Olintu™</a>. All Rights Reserved.</span>
    </div>
</footer>

