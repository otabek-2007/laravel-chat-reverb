<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Chat App')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 dark:bg-gray-900 transition duration-500 text-gray-800 dark:text-gray-200">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <div class="container mx-auto px-4 py-8">
        @yield('content')
    </div>

    {{-- Scripts --}}
    <script>
        const themeToggle = document.querySelector('#theme-toggle');
        const themeIcon = document.querySelector('#theme-icon');
        const currentTheme = localStorage.getItem('theme');

        if (currentTheme === 'dark') {
            document.documentElement.classList.add('dark');
        }

        themeToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem(
                'theme',
                document.documentElement.classList.contains('dark') ? 'dark' : 'light'
            );
        });
    </script>

</body>

</html>