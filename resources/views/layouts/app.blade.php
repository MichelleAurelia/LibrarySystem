<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'idk the title') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])



</head>

<body class="bg-[#0B1120] text-white font-sans antialiased">

    @if (session('success'))
        <div id="toast-success"
            class="fixed top-5 right-5 bg-green-800 text-white px-4 py-2 rounded shadow-lg opacity-0 transition-opacity duration-500 text-2xl">
            {{ session('success') }}
        </div>

        <script>
            const toast = document.getElementById('toast-success');
            toast.style.opacity = 1;

            setTimeout(() => {
                toast.style.opacity = 0;
            }, 2500); // hilang dalam 2.5 detik
        </script>
    @endif

    <div class="min-h-screen flex flex-col">
        <!-- Navbar -->
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-xl font-bold">Library System</span>
            </div>
            <div class="flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-orange-200 hover:text-white transition">Home</a>
                <!-- Khusus Role Admin -->

                <a href="{{ route('admin-page') }}" class="text-orange-200 hover:text-white transition">Manage Books</a>

                <!-- -------------------------------------------------------------------  -->

                <!-- Khusus Role Admin -->
                 
                <a href="{{ route('borrowList-page') }}" class="text-orange-200 hover:text-white transition">Borrowed Books</a>

                <!-- -------------------------------------------------------------------  -->
                <form action="{{ route('books.search') }}" method="GET" class="relative">
                    <input type="text" name="query" placeholder="Search books..."
                        class="bg-gray-800 text-gray-300 rounded-full py-1 px-4 pl-10 focus:outline-none focus:bg-gray-700 focus:text-white transition w-64">
                    <svg class="w-4 h-4 text-gray-400 absolute left-3 top-1/2 transform -translate-y-1/2" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </form>
                <div class="flex items-center space-x-2 text-gray-400">
                    <div
                        class="w-8 h-8 rounded-full bg-blue-200 text-blue-800 flex items-center justify-center font-bold text-xs">
                        MB
                    </div>
                    @if (isset($user) && $user)
                        <span>{{ $user->name }}</span>
                        {{-- tombol logout --}}
                        <a href="{{ route('logout') }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </a>
                    @else
                        <span>Guest</span>
                        <a href="{{ route('loginForm') }}">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </a>
                    @endif

                </div>
            </div>
        </nav>

        <main class="flex-grow container mx-auto px-6 py-8">
            @yield('content')
        </main>
    </div>
    @stack('scripts')
</body>

</html>