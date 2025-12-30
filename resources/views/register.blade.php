
@extends('layouts.regLog')

@section('content')

<div class="flex items-center sm:justify-start gap-3 mb-2">
    
    <span class="text-sm font-bold {{ app()->getLocale() == 'en' ? 'text-blue-600' : 'text-gray-400' }}">
        EN
    </span>

    <label class="relative inline-flex items-center cursor-pointer">
        <input type="checkbox" id="lang-toggle" class="sr-only peer" 
            {{ app()->getLocale() == 'id' ? 'checked' : '' }}>

        <div class="w-14 h-8 bg-gray-200 rounded-full peer peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:bg-gray-700 peer-checked:bg-blue-600 after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border after:border-gray-300 after:rounded-full after:h-7 after:w-7 after:transition-all peer-checked:after:translate-x-full"></div>

        <div class="absolute top-[4px] left-[5px] w-6 h-6 flex items-center justify-center transition-all peer-checked:opacity-0 peer-checked:-translate-x-full">
            🇬🇧 </div>

        <div class="absolute top-[4px] left-[5px] w-6 h-6 flex items-center justify-center opacity-0 translate-x-full transition-all peer-checked:opacity-100 peer-checked:translate-x-[100%]">
            🇮🇩 </div>
    </label>

    <span class="text-sm font-bold {{ app()->getLocale() == 'id' ? 'text-blue-600' : 'text-gray-400' }}">
        ID
    </span>

</div>

<form action = "{{ route('register') }}" method="POST" class = "flex flex-col gap-y-5">
    @csrf
    
    <div class="flex flex-col">
        <h1 class="text-xl sm:text-2xl font-semibold">{{ __('auth.title_reg') }}</h1>
        <p class="text-sm sm:text-base text-gray-300 mt-1">{{ __('auth.detail_reg') }}</p>
    </div>

    <div class="flex flex-col gap-y-5">
        <div class="flex flex-col">
            <label class="ms-1 text-sm">{{ __('auth.full_name') }}</label>
            <input 
                type="name" 
                name="name" 
                class="mt-2 px-4 py-3.5 bg-slate-800 border border-slate-700 rounded-xl outline-none text-sm sm:text-base leading-normal focus:ring-2 focus:ring-orange-300"
                placeholder= "{{ __('auth.placeholder_name') }}"
                required
            >
        </div>

        <div class="flex flex-col">
            <label class="ms-1 text-sm">{{ __('auth.email') }}</label>
            <input 
                type="email" 
                name="email" 
                class="mt-2 px-4 py-3.5 bg-slate-800 border rounded-xl outline-none text-sm sm:text-base leading-normal focus:ring-2 focus:ring-orange-300"
                placeholder= "{{__('auth.placeholder_email') }}"
                required
            >
            @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="flex flex-col">
            <label class="ms-1 text-sm">{{ __('auth.password') }}</label>
            <input 
                type="password" 
                name="password"
                class="mt-2 px-4 py-3.5 bg-slate-800 border border-slate-700 rounded-xl outline-none text-sm sm:text-base leading-normal focus:ring-2 focus:ring-orange-300"
                placeholder= "{{ __('auth.placeholder_password') }}"
                required
            >
            @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        

        <button class="bg-[#EAD4AA] text-black font-bold py-3.5 px-8 rounded-xl flex items-center justify-center hover:bg-[#dcc08e] transition mt-2">
            <span>{{ __('auth.butt_submit') }}</span>
        </button>
    </div>

    <div class="flex flex-wrap gap-1 justify-center text-sm sm:text-base">
        <p>{{ __('auth.have_account') }}</p>
        <a href="{{ route('loginForm') }}" class="text-orange-200 hover:underline">{{ __('auth.login_link') }}</a>
    </div>
</form>


<script>
    const toggle = document.getElementById('lang-toggle');
    toggle.addEventListener('change', function(){
        if(this.checked){
            window.location.href = "{{ route('switch.language', 'id') }}";
        }else{
            window.location.href = "{{ route('switch.language', 'en') }}";
        }
    })
</script>


@endSection
