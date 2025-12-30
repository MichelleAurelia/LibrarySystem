<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'idk the title') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

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

<body class="bg-[#0B1120] text-white font-sans antialiased">

    <div class="grid grid-cols-1 md:grid-cols-[3fr_2fr] lg:grid-cols-2 min-h-screen">

        <!-- LEFT SECTION -->
         
        <div class="flex flex-col items-center justify-center px-6 sm:px-8 py-12 md:py-0">
            <div class="bg-[#111C3A] rounded-3xl w-full max-w-md sm:max-w-lg p-8 sm:p-10 shadow-xl">
                
                <h1 class="text-2xl font-bold text-white mb-6">Library System</h1>
                
                <div class="flex flex-col gap-6">
                    @yield('content')
                </div>

            </div>
        </div>

        <!-- RIGHT SECTION -->
        <div class="hidden md:block relative">
            <img 
                src="{{ asset('regLog.jpg') }}" 
                alt="Register / Login" 
                class="w-full h-full object-cover"
            >
        </div>

    </div>

</body>
</html>
