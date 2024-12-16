<nav class="bg-white dark:bg-gray-900 border-b border-gray-300 dark:border-gray-700">
    <div class="container mx-auto flex items-center justify-between p-4">
        <a href="{{ route('home') }}" class="text-lg font-bold text-gray-800 dark:text-white">My Chat</a>

        <div class="flex items-center space-x-4">
            <!-- Language Dropdown -->
            <div class="relative group">
                <button class="text-gray-800 dark:text-white font-medium">
                    {{ strtoupper(app()->getLocale()) }}
                </button>
                <ul class="absolute hidden group-hover:block bg-white dark:bg-gray-800 rounded shadow">
                    @foreach (['en', 'ru', 'uz'] as $locale)
                    <li>
                        <form action="{{ route('change.language') }}" method="POST">
                            @csrf
                            <input type="hidden" name="lang" value="{{ $locale }}">
                            <button type="submit"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 w-full text-left">
                                {{ strtoupper($locale) }}
                            </button>
                        </form>
                    </li>
                    @endforeach
                </ul>
                @if (session('status'))
                <div class="bg-green-100 text-green-800 p-2 rounded mb-2">
                    {{ session('status') }}
                </div>
                @endif

            </div>

            <!-- Dark Mode Toggle -->
            <button id="theme-toggle" class="text-gray-800 dark:text-white">
                <svg id="theme-icon" class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 3v3M12 18v3M4.22 4.22l2.12 2.12M17.66 17.66l2.12 2.12M1 12h3M18 12h3M4.22 19.78l2.12-2.12M17.66 6.34l2.12-2.12" />
                </svg>
            </button>

            <!-- Profile Dropdown -->
            @auth
            <div class="relative group">
                <button class="text-gray-800 dark:text-white font-medium">{{ Auth::user()->name }}</button>
                <ul class="absolute hidden group-hover:block bg-white dark:bg-gray-800 rounded shadow">
                    <li>
                        <a href=""
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">{{ __('Profile') }}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 w-full text-left">
                                {{ __('Logout') }}
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            @else
            <a href="{{ route('login') }}" class="text-gray-800 dark:text-white">{{ __('Login') }}</a>
            <a href="{{ route('register') }}" class="text-gray-800 dark:text-white">{{ __('Register') }}</a>
            @endauth
        </div>
    </div>
</nav>