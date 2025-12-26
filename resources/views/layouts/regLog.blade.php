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

<body class="bg-[#0B1120] text-white font-sans antialiased">

    <div class="grid grid-cols-1 md:grid-cols-2 h-screen">

        <!-- LEFT SECTION -->
         
        <div class="flex flex-col items-center justify-center px-6 h-full">
            <div class="bg-[#111C3A] rounded-3xl w-full max-w-lg p-10 shadow-xl">
                
                <h1 class="text-2xl font-bold text-white mb-5">Library System</h1>
                
                <div class="flex flex-col gap-6">
                    @yield('content')
                </div>

            </div>
        </div>

        <!-- RIGHT SECTION -->
        <div class="hidden md:block h-full">
            <img 
                src="{{ asset('regLog.jpg') }}" 
                alt="Register / Login" 
                class="w-full h-full object-cover"
            >
        </div>

    </div>

</body>
</html>
