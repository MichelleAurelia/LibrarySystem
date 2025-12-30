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

@php
    $type = session('success') ? 'success' : (session('error') ? 'error' : null);
    $message = $type ? session($type) : null;
@endphp

    @if ($type)
        <div id="toast-container"
            class="fixed top-5 right-5 {{ $type == 'success' ? 'bg-green-800' : 'bg-red-800' }} text-white px-6 py-3 rounded shadow-lg opacity-0 transition-opacity duration-500 text-xl z-50">
            {{__($message)}}
        </div>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const toast = document.getElementById('toast-container'); 
            
            if (toast) {

                setTimeout(() => {
                    toast.classList.remove('opacity-0');
                    toast.classList.add('opacity-100');
                }, 100);

                setTimeout(() => {
                    toast.classList.remove('opacity-100');
                    toast.classList.add('opacity-0');
                    
                    setTimeout(() => {
                        toast.remove();
                    }, 500);
                }, 2500);
            }
        });
    </script>

    <div class="min-h-screen flex flex-col">
        <!-- Nav Bar -->
        <nav class="container mx-auto px-6 py-6 md:py-8">
            <div class="flex items-center gap-4">
                <!--  Search Bar -->
                <form action="{{ route('books.search') }}" method="GET" class="relative flex-1">
                    <input type="text" name="query" placeholder="{{ __('user.search') }}..."
                        class="bg-gray-800 text-gray-300 rounded-full
                            py-2 px-5 pl-11
                            focus:outline-none focus:bg-gray-700 focus:text-white
                            transition w-full">
                    <svg class="w-4 h-4 text-gray-400 absolute left-4 top-1/2 -translate-y-1/2"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </form>

                <!-- Responsive -->
                <button id="menu-btn" class="lg:hidden text-orange-200 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <div class="hidden lg:flex items-center gap-10 ml-6">
                    <span class="text-xl font-bold">Library System</span>

                    <a href="{{ route('home') }}" class="text-orange-200 hover:text-white transition">
                        {{ __('user.home') }}
                    </a>

                    @if(session('role') == 'admin')
                        <a href="{{ route('admin-page') }}" class="text-orange-200 hover:text-white transition">
                            Manage Books
                        </a>
                    @endif

                    @if(session('role') == 'member')
                        <a href="{{ route('borrowList-page') }}" class="text-orange-200 hover:text-white transition">
                            {{ __('user.borrow') }}
                        </a>
                    @endif

                    <a href="{{ route('about') }}" class="block text-orange-200 hover:text-white">About Us</a>

                    <div class="flex items-center gap-3 text-gray-400">
                        <div class="w-9 h-9 rounded-full bg-blue-200 text-blue-800
                                    flex items-center justify-center font-bold text-xs">
                            @if($user)
                                {{ collect(explode(' ', $user->name))->map(fn($w) => strtoupper($w[0]))->take(2)->join('') }}
                            @else
                                G
                            @endif
                        </div>
                        <span>{{ $user->name ?? 'Guest' }}</span>

                        <a href="{{ route('logout') }}" class="ml-auto">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div id="menu" class="hidden lg:hidden mt-6 space-y-6">
                <div class="text-xl font-bold">Library System</div>

                <a href="{{ route('home') }}" class="block text-orange-200 hover:text-white">
                    {{ __('user.home') }}
                </a>

                @if(session('role') == 'admin')
                    <a href="{{ route('admin-page') }}" class="block text-orange-200 hover:text-white">
                        Manage Books
                    </a>
                @endif

                @if(session('role') == 'member')
                    <a href="{{ route('borrowList-page') }}" class="block text-orange-200 hover:text-white">
                        {{ __('user.borrow') }}
                    </a>
                @endif

                <a href="{{ route('about') }}" class="block text-orange-200 hover:text-white">About Us</a>

                <div class="flex items-center gap-3 text-gray-400 pt-4 border-t border-gray-700">
                    <div class="w-9 h-9 rounded-full bg-blue-200 text-blue-800
                                flex items-center justify-center font-bold text-xs">
                        @if($user)
                            {{ collect(explode(' ', $user->name))->map(fn($w) => strtoupper($w[0]))->take(2)->join('') }}
                        @else
                            G
                        @endif
                    </div>

                    <span>{{ $user->name ?? 'Guest' }}</span>

                    <a href="{{ route('logout') }}" class="ml-auto">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </a>
                </div>
            </div>
        </nav>

        <main class="flex-grow container mx-auto px-6 py-8">
            @yield('content')
        </main>
    </div>

    <script>
        document.getElementById('menu-btn')?.addEventListener('click', () => {
            const menu = document.getElementById('menu');
            menu.classList.toggle('hidden');
        });
    </script>
    @stack('scripts')
</body>

</html>